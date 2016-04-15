<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<?php include 'material/tpl/default/meta.php' ?>
<link rel="stylesheet" href="material/tpl/default/css/base.css" type="text/css" />
<link rel="stylesheet" href="material/tpl/default/css/jquery.jscrollpane.css" type="text/css"/>

<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="material/js/fancy/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="material/js/fancy/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="material/js/fancy/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="material/js/fancy/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>




<script type="text/javascript" src="material/js/jquery.carouFredSel-6.2.1-packed.js"></script>

<script type="text/javascript">
$(function() {
$('#foo0').carouFredSel({
					auto:0,
					scroll : {
						items           : 1,
            duration        : 3000,
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
				
$('#foo3').carouFredSel({
					auto: false,
					scroll : {
						items           : 1,
            duration        : 800
        },
				pagination	: {
		container		: "#foo3_pag",
	
		anchorBuilder	: function( nr ) {
			var src = $("img", this).attr( "src" );
				
			return '<div class="thumImg"><img src="' + src + '" /></div>';
		},
	}
					
					});
				});
				
				
				
				$('.fancybox-buttons').fancybox({
				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				prevEffect : 'elastic',
				nextEffect : 'elastic',

				closeBtn  : true,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});

</script>
</head>
<body>
<div id="container">
  <header id="header">
    <?php include 'material/tpl/default/header.php' ?>
  </header>
  <div class="content">
    <article id="itemCrm">
      <?php include 'page/item.html' ?>
    </article>
    
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