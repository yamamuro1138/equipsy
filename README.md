## アプリケーション名

equipsy

## アプリケーション概要

-   備品管理アプリです。

## バージョン

-   Laravel 8.61.0
-   PHP 8.0.10

## 環境構築

-   Laravel Sail

## URL

## テスト用アカウント

-
-

## 利用方法

-   新規登録でユーザー登録します。
-   管理番号(任意)・備品名・数量を入力するため、備品情報を登録する。
-   登録した備品情報が一覧画面に表示されます。
-   一覧画面の各備品情報に編集・削除ボタンがありますので適宜使用する。
-   数量の変動も編集ボタンから修正し更新をお願いします。
-   一覧画面のナビバーに検索フォームがあります。備品名を入力し検索できます。

## 目指した課題解決

-   現職でも、備品の管理を紙で記録・保管しています。紙だと破れ・紛失など
    あらゆる面で最適な方法とは思えません。なので備品管理ツールを作成し
    管理の最適化を図りました。

## ER 図

[![Image from Gyazo](https://i.gyazo.com/dd67eba9a1a7372a35286cb1f4483954.png)](https://gyazo.com/dd67eba9a1a7372a35286cb1f4483954)

## テーブル設計

## users テーブル

| column   | Type   |
| -------- | ------ |
| name     | string |
| password | string |

### Association

-   has_many :posts

## posts テーブル

| column         | Type       |
| -------------- | ---------- |
| control_number | string     |
| item           | string     |
| quantity       | string     |
| user           | references |

### Association

-   belongs_to :user
