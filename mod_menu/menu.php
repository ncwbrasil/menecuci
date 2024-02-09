<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/slimmenu/slimmenu.css">
    <link rel="stylesheet" type="text/css" href="css/slimmenu/reset.css">
    <style>
        a, a:active { text-decoration: none }
    </style>
</head>
<body>
<ul class="slimmenu">
    <li><a href="#apresentacao" target="_parent"class="borda"><b>Apresentação</b></a></li>
    <li><a href="#equipe" class="borda"><b>Equipe Menecucci</b></a> </li>
	<li><a href="#contato-home" target="_parent" class="borda"><b>Contato</b></a></li>
</ul>

<script src="mod_includes/js/slimmenu/jquery.slimmenu.min.js"></script>
<script src="mod_includes/js/jquery.easing.min.js"></script>
<script>
jQuery('ul.slimmenu').slimmenu(
{
    resizeWidth: '1060',
    collapserTitle: ' ',
    easingEffect:'easeInOutQuint',
    animSpeed:'medium',
    indentChildren: true,
    childrenIndenter: ''
});
</script>
<script type="text/javascript">// <![CDATA[
	$(document).ready(function() {
		$(function() {
			$('a').bind('click',function(event){
				var $anchor = $(this);
	
			$('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 900,'linear');
				
		// Outras Animações
		// linear, swing, jswing, easeInQuad, easeInCubic, easeInQuart, easeInQuint, easeInSine, easeInExpo, easeInCirc, easeInElastic, easeInBack, easeInBounce, easeOutQuad, easeOutCubic, easeOutQuart, easeOutQuint, easeOutSine, easeOutExpo, easeOutCirc, easeOutElastic, easeOutBack, easeOutBounce, easeInOutQuad, easeInOutCubic, easeInOutQuart, easeInOutQuint, easeInOutSine, easeInOutExpo, easeInOutCirc, easeInOutElastic, easeInOutBack, easeInOutBounce
			});
		});
	});
	// ]]>
</script>

</body>
</html>