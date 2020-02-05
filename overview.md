# PHP
## 一言でいうと
  - サーバサイドで実行されるプログラミング言語
    - Webサーバで実行される
      - webブラウザからリクエストを受けてレスポンスを返すサーバ
      - Apache
      - Nginx

## 何ができるのか
- Webサービス(Webアプリ)ならなんでも
  - ECサイト
  - SNS
  - ブログ
  - etc
  - Webサービス以外はできない
    - デスクトップアプリ
    - スマホアプリ

## PHPを実行するには(どうやって使うのか)
- ローカル開発環境を用意する
  - ローカル = 自分のPC
  - 自分のPCにサーバサイドプログラミング言語を動かす環境を作る
  - やり方
    - XAMPP
    - vagrant + virtualbox
    - docker
### XAMPP
- PHPのローカル開発環境を簡単に作成できるアプリ

## 基本的な書き方
- `<?php ?>`の中に書く
  - phpのみしか書かないファイルの場合は`?>`は書かない
- インデントは半角スペース4つ
- 文の最後には必ず`;`をつける
  - つけないと`syntax error`




## 基本構文
- 以下参照
- http://hackers.nexseed.net/curriculums/271

## JSとの違い
- 実行される場所


授業めも
1. URLを入力
2. DNSにアクセスしてIPを取得する
3. クライアントからサーバにリクエストを送る
4. サーバでいろいろする(PHP / MySQL)
5. サーバからクライアントにレスポンスを返す
    - レスポンス === HTML, CSS, JSのファイル
6. 画面が表示される(HTML/CSS, JS)

MySQL(RDB)のデータの管理の仕方
DB == Excelのファイル
テーブル == シート
カラム == 列
レコード == 行

manager-osx
c -> XAMPP -> control

http://localhost/php

cmd + shift + n