<?php
session_start(); ?>

<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-t op bg-dark">
        <a class="navbar-brand" href="index.php">食バズ(仮)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="confirm_input.php">お問い合わせ</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">

            <?php


            if (isset($_SESSION['login'])) : ?>
              <div class=text-light> ようこそ、<span class="text-primary"> <?= $_SESSION['login'] ?> </span>さん！</div>
              <a href="mypage_user.php?id=<?= $_SESSION['id']; ?>">マイページへ</a>
            <?php elseif (isset($_SESSION['me'])) : ?>
              <div class=text-light> ようこそ、<span class="text-primary"> <?= $_SESSION['me']->username ?> </span>さん！</div>
              <a href="mypage_user.php?id=<?= $_SESSION['me_id']; ?>">マイページへ</a>
            <?php elseif (isset($_SESSION['login_shop'])) : ?>
              <div class=text-light> ようこそ、<span class="text-primary"> <?= $_SESSION['login_shop'] ?> </span>さん！</div>
              <a href="mypage_shop.php?shop_name=<?php echo ($_SESSION['login_shop']) ?>">マイページへ</a>
            <?php endif; ?>





          </form>

        </div>
      </nav>

    </header>

    <h1>募集依頼を削除しました。
    </h1>

    <a href="mypage_shop.php?shop_name=<?= ($_SESSION['login_shop']) ?>">
      <p class="breadcrumb-item">マイページへ</p>
    </a>
    <a href="index.php">
      <p class="breadcrumb-item">トップページに戻る</p>
    </a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>