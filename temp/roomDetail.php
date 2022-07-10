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
    <h1><a href="./index.html"><img src="./temp/images/logo.png" alt=""></a></h1>
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
        <section>
          <h2>お部屋の詳細</h2>
          <h3>『<?php echo $Room[0]->getRoom_name() ?>』</h3>
          <p>
            <?php echo $Room[0]->getInformation() ?>
            <!-- お風呂・トイレも部屋内にある、広めの和室です。
            <br> 部活・サークルなど、気の合う仲間たちと大人数で利用するのに適しています。 -->
          </p>
          <table>
            <tr>
              <td><img class="middle" src="./temp/images/<?php echo $Room[0]->getMain_image() ?>"></td>
              <td><img class="middle" src="./temp/images/<?php echo $Room[0]->getImage1() ?>"></td>
            </tr>
            <tr>
              <td><img class="middle" src="./temp/images/<?php echo $Room[0]->getImage2() ?>"></td>
              <td><img class="middle" src="./temp/images/<?php echo $Room[0]->getImage3() ?>"></td>
            </tr>
          </table>
          <br>
          <table>
            <th>お部屋タイプ</th>
            <th>一泊料金<br>（部屋単位）</th>
            <th>アメニティ</th>
            <tr>
              <td><?php echo $Room[0]->getRoom_type()->getType_name() ?></td>
              <td class="number">&yen;<?php echo $Room[0]->getDayfee() ?></td>
              <td><?php echo $Room[0]->getAmenity() ?></td>
            </tr>
          </table>
          <br>
        </section>
      </article>
    </main>
    <!-- メイン：終了 -->
    <!-- サイド：開始 -->
    <aside id="side">
      <section>
        <h2>ご予約</h2>
        <ul>
        <li><a href="./index.php?page=reserveDay">宿泊日入力</a></li>
        </ul>
      </section>
      <section>
        <h2>お部屋紹介</h2>
        <ul>
          <?php
          include("./temp/sideList.php");
          ?>
        </ul>
      </section>
    </aside>
    <!-- サイド：終了 -->
    <!-- ページトップ：開始 -->
    <div id="pageTop">
      <a href="./index.html#top">ページのトップへ戻る</a>
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

</html>>