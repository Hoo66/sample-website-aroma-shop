<?php
// DB名
define('DB_DATABASE', 'aroma-shop-db');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
// define('DB_PASSWORD', 'root');
// DSN
define('PDO_DSN', 'mysql:host=localhost;port=3306;charset=utf8;dbname='.DB_DATABASE);

function db_connect() {
    try {
        // PDOインスタンスの作成
        $conn = new PDO(PDO_DSN, DB_USERNAME);
        // エラー処理方法をexceptionにする
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}

?>