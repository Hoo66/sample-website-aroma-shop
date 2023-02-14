<?php
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

function db_connect() {
    try {
        // PDOインスタンスの作成
        $conn = new PDO('mysql:host=' . $server . ';dbname=' . $db . ';charset=utf8mb4', $username, $password);
        // エラー処理方法をexceptionにする
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}

?>