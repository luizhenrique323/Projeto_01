 <?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto_01</title>
	<link href="<?php echo INCLUDE_PATH;?>estilo/fontawesome.css" rel="stylesheet">
	  <link href="<?php echo INCLUDE_PATH;?>estilo/brands.css" rel="stylesheet">
	  <link href="<?php echo INCLUDE_PATH;?>estilo/solid.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH;?>estilo/style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="Descrição">
    <meta charset="utf-8"/>
</head>
<body>
	<div class="center">
	</div>
	<header>
	<div class="logo left"><a href="<?php echo INCLUDE_PATH;?>">Logomarca</a></div><!--logo-->
	<nav class="desktop right">
		<ul>
			<li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
			<li><a href="<?php echo INCLUDE_PATH;?>Sobre">Sobre</a></li>
			<li><a href="<?php echo INCLUDE_PATH;?>Serviços">Serviços</a></li>
			<li><a href="<?php echo INCLUDE_PATH;?>Contatos">Contatos</a></li>
		</ul>
	</nav>
	<nav class="mobile right">
		<div class="botao-menu-mobile">
			<i class="fas fa-bars"></i>
		</div><!--bota-meu-mobile-->
		<ul>
			<li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
			<li><a href="<?php echo INCLUDE_PATH;?>Sobre">Sobre</a></li>
			<li><a href="<?php echo INCLUDE_PATH;?>Serviços">Serviços</a></li>
			<li><a href="<?php echo INCLUDE_PATH;?>Contatos">Contatos</a></li>
		</ul>
	</nav>
	<div class="clear"></div><!--clear--><!--center-->
</header>
<?php
$url = isset($_GET['url']) ?  $_GET['url'] : 'home';
if (file_exists('pages/'.$url.'.php')){
	include('pages/'.$url.'.php');
}else{
	include('pages/404.php');
}

?>


<footer>
	<div class="center">
	<p class="footer_text">©Todos os direitos reservados</p>
</div><!--center-->
</footer>
<script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
</body>
</html>