<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <link href="./temp/css/style.css" rel="stylesheet" type="text/css">
  <title>JIKKYO PENSION</title>
</head>

<body>
  <!-- ヘッダー：開始-->
  <header id="header">
    <div id="pr">
      <p>部活・サークル等のグループ利用に最適！アットホームなペンション！</p>
    </div>
    <h1><a href="./index.php"><img src="./temp/images/logo.png" alt=""></a></h1>
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
          <h2>お部屋のご紹介</h2>
          <?php
          if (sizeof($RoomList) == 0) {
            echo "<b>準備中です。</b>";
          } else {
          ?>
            <h3>自慢のお部屋をご紹介</h3>
            <p>
              和室・洋室・和洋室と、ご希望に沿った形でお部屋をお選び頂けます。
            </p>
            <table>
              <th>お部屋名称</th>
              <th>お部屋タイプ</th>
              <th>一泊料金<br>（部屋単位）</th>
              <th colspan="2">お部屋イメージ</th>
              <?php
              foreach ($RoomList as $key => $val) {
                print <<<TRTD
                <tr>
                <td>{$val->getRoom_name()}</td>
                <td>{$val->getRoom_type()->getType_name()}</td>
                <td class="number">&yen;{$val->getDayfee()}</td>
                <td><img class="small" src="./temp/images/{$val->getMain_image()}"></td>
                <td><a href="./index.php?page=roomDetail&room_no={$val->getRoom_no()}">詳細</a></td>
                </tr> 
                TRTD;
              }
              ?>
            </table>
          <?php
          }
          ?>
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