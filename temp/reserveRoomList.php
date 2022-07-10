<?php
// require_once('./dbConfig.php');
// $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// if ($link == null) {
//   die("接続に失敗しました：" . mysqli_connect_error());
// }
// mysqli_set_charset($link, "utf8");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./temp/css/style.css" type="text/css">
  <title>JIKKYO PENSION</title>
</head>

<body>
  <!-- ヘッダー：開始-->
  <header id="header">
    <div id="pr">
      <p>部活・サークル等のグループ利用に最適！アットホームなペンション！</p>
    </div>
    <h1><a href="./index.php"><img src="../temp/images/logo.png" alt=""></a></h1>
    <div id="contact">
      <h2>ご予約／お問い合わせ</h2>
      <span class="tel">☎0120-000-000</span>
    </div>
  </header>
  <!-- ヘッダー：終了 -->
  <!-- メニュー：開始 -->
  <nav id="menu">
    <ul>
      <?php include("topmenu.php") ?>
    </ul>
  </nav>
  <!-- メニュー：終了 -->
  <!-- コンテンツ：開始 -->
  <div id="contents">
    <!-- メイン：開始 -->
    <main id="main">
      <article>
        <!-- 各ページスクリプト挿入場所 -->
        <section>
          <h2>空室検索</h2>
          <h3><?php echo date("y/m/d", strtotime($date)) ?>の空室一覧</h3>
          <p><?php echo sizeof($RoomList) ?>部屋の空室があります</p>
          <!-- <h3>(**検索日付**)の空室一覧</h3>
          <p>(**空室数**)部屋の空室があります</p> -->
          <table>
            <th>お部屋名称</th>
            <th>お部屋タイプ</th>
            <th>一泊料金<br />（部屋単位）</th>
            <th colspan="2">お部屋イメージ</th>
            <?php

            foreach ($RoomList as $key => $val) {
              print <<<TRTD
              <tr>
                <td>{$val->getRoom_name()}</td>
                <td>{$val->getRoom_type()->getType_name()}</td>
                <td class="number">&yen;{$val->getDayfee()}</td>
                <td><img class="small" src="./temp/images/{$val->getMain_image()}"></td>
                <td><a href="./index.php?page=roomDetail&room_no={$val->getRoom_no()}">選択</a></td>
                </tr> 
              TRTD;
            }
            ?>
          </table>
        </section>
      </article>
    </main>
    <!-- メイン：終了 -->
    <!-- サイド：開始 -->
    <aside id="side">
      <section>
        <h2>ご予約</h2>
        <ul>
          <li><a href="./reserveDay.php">宿泊日入力</a></li>
        </ul>
      </section>
      <section>
        <h2>お部屋紹介</h2>
        <?php include("./temp/sideList.php"); ?>
      </section>
    </aside>
    <!-- サイド：終了 -->
    <!-- ページトップ：開始 -->
    <div id="pageTop">
      <a href="#top">ページのトップへ戻る</a>
    </div>
    <!-- ページトップ：終了 -->
  </div>
  <!-- コンテンツ：終了 -->
  <!-- フッター：開始 -->
  <footer id="footer">
    Copyright c 2016 Jikkyo Pension All Rights Reserved.
  </footer>
  <!-- フッター：終了 -->
  

</body>

</html>