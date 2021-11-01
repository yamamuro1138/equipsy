<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;
use Auth;
use Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $posts = Post::all();
        // 選ばれたユーザーを取得する
        $id=Auth::user()->id;
        // 選ばれたユーザーに紐づく登録を取得する
        $posts = Post::where('user_id', $id)->paginate(12);

        $search = $request->input('search');
        
        $query = Post::query('posts');
        // $query = DB::table('posts');

        if($search !== null){
            $search_split = mb_convert_kana($search,'s');

            $search_split2 = preg_split('/[\s]+/', $search_split,-1,PREG_SPLIT_NO_EMPTY);

            foreach($search_split2 as $value)
            {
                $query->where('item', 'like', '%' .$value.'%')
                ->orwhere('control_number', 'like', '%' .$value.'%');
            }
        };

        $posts = $query->paginate(12);

            
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(),[
            'item' => 'required',
            'quantity' => 'required',
        ]);
        //バリデーションエラー
        if($validator->fails()) {
            return redirect()->back()
            ->withInput()
            ->withErrors($validator);
        }
        //Postモデルのインスタンスを作成
        $post = new Post;
        $post->control_number = $request->input('control_number');
        $post->item = $request->input('item');
        $post->quantity = $request->input('quantity');
        $post->user_id = Auth::id();//ログインしているユーザーidを登録している

        $post->save();

        //登録後に一覧画面へ遷移
        return redirect('/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //バリデーション
        $validator = Validator::make($request->all(),[
            'item' => 'required',
            'quantity' => 'required',
        ]);
        //バリデーションエラー
        if($validator->fails()) {
            return redirect()->back()
            ->withInput()
            ->withErrors($validator);
        }        
        $post = Post::find($id);
        $post->control_number = $request->input('control_number');
        $post->item = $request->input('item');
        $post->quantity = $request->input('quantity');
        $post->user_id = Auth::id();//ログインしているユーザーidを登録している

        $post->save();

        //登録後に一覧画面へ遷移
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();

        return redirect('/index');
    }
}
