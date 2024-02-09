<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("bt-top").style.display = "block";
    } else {
        document.getElementById("bt-top").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<div class="topo">
	<div id="topo">	
        <div id="logo">
            <a href="index.php"><img src="imagens/logo.png"></a>
        </div>
        <div class="menu">
			<?php include ('mod_menu/menu.php')?>
        </div>
	</div>
</div>
<div id="bt-top" onclick="topFunction()">Topo</div>
