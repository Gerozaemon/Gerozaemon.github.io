<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Art-Studio '2012 (c) Karaush A." />
<?php include 'material/tpl/default/metasub.php' ?>
<script type="text/javascript" src="material/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="material/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="material/js/languages/jquery.validationEngine-ja.js"></script>

<link rel="stylesheet" href="material/tpl/default/css/base.css" type="text/css" />
<link rel="stylesheet" href="material/tpl/default/css/jquery.jscrollpane.css" type="text/css"/>
<link rel="stylesheet" href="material/tpl/default/css/validationEngine.jquery.css" type="text/css" />
<link rel="stylesheet" href="material/tpl/default/css/style.css"　type="text/css"　/>



</head>
<body>
  <div id="container">
    <header id="header" class="border">
      <?php include 'material/tpl/default/header_2.php' ?>
    </header>
<form action="Controlindex.php" method="post"><input type="hidden" name="mode" value="email_regist" />
  <table><caption>メールアドレス登録フォーム</caption>
    <tr>
      <td class="item">E-mail：</td>
      <td><input type="text" name="email" size="40" /></td>
    </tr>
  </table>
  <div id="submitbutton">
    <input type="submit" name="submit" value="送信" />
  </div>
</form>
</div>
<footer id="footer">
  <div class="content">
    <?php include 'material/tpl/default/footer.php' ?>
  </div>
</footer>
</body>
</html>
