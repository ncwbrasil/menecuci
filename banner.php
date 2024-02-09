<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/responsiveslides.css">
  <script src="mod_includes/js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        speed: 800,
		pager: '' ,
		timeout: 3000,
		next:   '#next',
		prev:   '#prev',
		pause: 1
      });
		$('#pause').click(function() { 
			$('#slide_fotos').cycle('pause'); 
		});
		
		$('#play').click(function() { 
			$('#slide_fotos').cycle('resume'); 
		});
    });
  </script>
</head>
<br><br>
<div id="banner">
	
    <ul class="rslides" id="slider1">
        <li><img src='imagens/banner.jpg' border='0' /></li>
        <li><img src='imagens/banner.jpg' border='0' /></li>
        <li><img src='imagens/banner.jpg' border='0' /></li>
    </ul>
</div>

<style>
#banner			{ margin-top:-50px;}
#banner ul li	{ list-style: none;}
#banner img 	{ width:100%;}
@media screen and (max-width:480px){#banner{ margin-top:100px;}}

</style>