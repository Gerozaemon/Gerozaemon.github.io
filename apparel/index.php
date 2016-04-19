<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="material/js/accordion.js"></script>
<script type="text/javascript" src="material/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<?php include 'material/tpl/default/meta.php' ?>
<link rel="stylesheet" href="material/tpl/default/css/base.css" type="text/css"/>
<link rel="stylesheet" href="material/tpl/default/css/jquery.jscrollpane.css" type="text/css"/>
<link rel="stylesheet" href="material/tpl/default/css/accordion-designed.css" type="text/css"/>


<script type="text/javascript">
$(function() {
				$('#foo0').carouFredSel({
					auto:4000,
					scroll : {
						items           : 1,
            duration        : 1000,
						easing:"linear"
        }
					});
$('#foo2').carouFredSel({
					pagination: "#pager2",
					items               : 1,
				auto:4000,
					scroll : {
            items           : 1,
						fx			: "crossfade",
            duration        : 2000
        }
				});
				});
</script>


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
      <?php include 'page/main.html' ?>
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
