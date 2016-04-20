<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Art-Studio '2012 (c) Karaush A." />
<script type='text/javascript' src='material/js/jquery.js'></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="material/js/accordion.js"></script>
<script type="text/javascript" src="material/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<?php include 'material/tpl/default/meta.php' ?>
<script type="text/javascript" src="material/js/jcarousellite_1.0.1.min.js"></script>
<script type="text/javascript" src="material/js/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="material/js/function.js"></script>

<link rel="stylesheet" href="material/tpl/default/css/base.css" type="text/css" />
<link rel="stylesheet" href="material/tpl/default/css/jquery.jscrollpane.css" type="text/css"/>
<link rel="stylesheet" href="material/tpl/default/css/accordion-designed.css" type="text/css"/>

</head>
<body>
<div id="container">
  <header id="header">
    <?php include 'material/tpl/default/header.php' ?>
  </header>
  <div class="content">
    <aside id="leftside">
      <?php include 'material/tpl/default/leftside.php' ?>
    </aside>
    <article id="center">
      <?php include 'page/products.html' ?>
    </article>
    <aside id="rightside">
      <?php include 'material/tpl/default/rightside.php' ?>
    </aside>
    <div class="empty"> &nbsp; </div>
  </div>
</div>
<footer id="footer">
  <div class="content">
    <?php include 'material/tpl/default/footer.php' ?>
  </div>
</footer>
</body>
</html>
