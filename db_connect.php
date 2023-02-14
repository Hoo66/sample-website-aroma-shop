<?php
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// DB名
define('DB_DATABASE', $_ENV['DB_DATABASE']);
// MySQLのユーザー名
define('DB_USERNAME', $_ENV['DB_USERNAME']);
// MySQLのログインパスワード
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
// DSN
define('PDO_DSN', $_ENV['PDO_DSN'].DB_DATABASE);

function db_connect() {
    try {
        // PDOインスタンスの作成
        $conn = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        // エラー処理方法をexceptionにする
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}

?>