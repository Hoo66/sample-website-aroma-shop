<?php

  require_once('db_connect.php');

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $detail = htmlspecialchars($_POST['detail']);
  
  $sql = "INSERT INTO inquiries (name, email, subject, detail) VALUES (:name, :email, :subject, :detail)";

  $pdo = db_connect();

  try {
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':detail', $detail);

    $stmt->execute();
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
  }

  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/globalNav.css">
  <link rel="stylesheet" href="../css/sendInquiry.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="css/slider.css">
  <link rel="icon" href="/images/favicon/favicon.ico">
  <!-- <script src="https://kit.fontawesome.com/6a7916de5b.js" crossorigin="anonymous"></script> -->
  <title>Aroma Mirai | お問い合わせ送信完了</title>
</head>
<body>
  <header>
    <div class="container">
      <a href="index.html"><img src="../images/png/aromamirai_logo.png" alt="ロゴ"></a>
      <div class="openbtn"><span></span><span></span><span></span></div>
      <nav id="g-nav">
        <div id="g-nav-list">
          <ul>
            <li><a href="index.html"><img src="../images/png/top.png" alt="トップ"></a></li>
            <li><a href="aromaoil.html"><img src="../images/png/aromaoil.png" alt="アロマオイル"></a></li>
            <li><a href="herbaltea.html"><img src="../images/png/herbaltea.png" alt="ハーブティー"></a></li>
            <li><a href="aromasoap.html"><img src="../images/png/aromasoap.png" alt="アロマソープ"></a></li>
            <li><a href="contact.html"><img src="../images/png/contact.png" alt="お問合せ"></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <section class="send-inquiry">
      <p>お問い合わせが送信されました</p>
      <a href="/">Topへもどる</a>
    </section>

  </main>

  <footer>
    <div class="pc-flex">
      <ul class="sns" style="font-size: 3rem">
        <li class="sns-icon"><a href="#"><img src="../images/svg/square-instagram.svg" alt="インスタグラム"></a></li>
        <li class="sns-icon"><a href="#"><img src="../images/svg/square-facebook.svg" alt="フェイスブック"></a></li>
        <li class="sns-icon"><a href="#"><img src="../images/svg/square-twitter.svg" alt="ツイッター"></a></li>
      </ul>
      <ul class="footer-menu">
        <li><a href="index.html">TOP</a></li>
        <li><a href="privacypolicy.html">プライバシーポリシー</a></li>
      </ul>
    </div>
      <p><small>このサイトはサンプルで、AROMA MIRAIは架空の店舗です。</small></p>
      <p><small>&copy;2023 FS</small></p>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/globalNav.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/accordion.js"></script>
</body>
</html>