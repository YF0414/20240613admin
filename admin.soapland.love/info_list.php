<?php
include 'define.php';
?>
<!DOCTYPE HTML>
<html lang="ja">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニュース一覧</title>
  <meta name="description" content="">
  <meta name="robots" content="max-image-preview:large">
  <link rel="canonical" href="">
  <?php
    $loc_href = '.';
    $inc_path = $_SERVER["DOCUMENT_ROOT"].'';
    $com_href = '';

    include $inc_path .'/inc/head.php';
  ?>
  <body>
    <div id="container">
      <?php
            include $inc_path . '/inc/sidebar.php';
            ?>
      <div id="content">
        <?php
        include $inc_path . '/inc/header.php';
        ?>
        <div class="main_col">
          <h1>ニュース一覧</h1>
          <button class="push-button" onclick="location.href='info.php'">新規登録</button>
          <ul class="post-list">
            <li>
              <div class="post">
                <div class="post-content">
                  <div class="post-info">
                    <div class="post-image">
                      <img src="<?=$com_href?>/img/gqUWouLpvvZCTRTaDeYx1707195153.jpg" alt="ニュース画像">
                    </div>
                    <div class="post-details">
                      <h2 class="post-title">本文一部抜粋表示…</h2>
                      <p class="post-subtitle">2024/02/14/12:23</p>
                    </div>
                  </div>
                </div>
                <div class="post-buttons">
                  <button class="del-button">削除</button>
                  <button class="adit-button" >編集</button>
                </div>
              </div>
            </li>
            <li>
              <div class="post">
                <div class="post-content">
                  <div class="post-info">
                    <div class="post-image">
                      <img src="<?=$com_href?>/img/gqUWouLpvvZCTRTaDeYx1706358097.jpg" alt="ニュース画像">
                    </div>
                    <div class="post-details">
                      <h2 class="post-title">本文一部抜粋表示…</h2>
                      <p class="post-subtitle">2024/02/14/12:23</p>
                    </div>
                  </div>
                </div>
                <div class="post-buttons">
                  <button class="del-button">削除</button>
                  <button class="adit-button" >編集</button>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- main_col -->
      </div>
    </div>
  </body>
</html>
