<<<<<<< HEAD
# アプリケーション名
お問い合わせフォーム

## 環境構築
Dockerビルド
1.git@github.com:nozomi1129/test1.git
2.docker-compose up -d --build

*MYSQLはOSによって起動しない場合があるのでそれぞれのPCにあわせて、docker-compose.ymlファイルを編集してください。

Laravel環境構築
1.docker-compose exec php bash
2.composer install
3..env.exampleファイルから.envを作成し、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

## 使用技術(実行環境)
1.Laravel 8.0
2.PHP 8.0
3.MySql 8.0

## ER図
https://github.com/nozomi1129/test1/blob/main/er.png

## URL
1.開発環境：http://localhost/
2.PhpMyAdmin：http://localhost:8080/
=======

>>>>>>> 6b39c8381d35956fdd4bf52152ed14bcb32c2cef
