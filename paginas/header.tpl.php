<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Portifólio Fernandes</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
        <link rel="icon" href="imagens/logo.png" type="image/x-icon" />
	</head>
	
	<body>
		<main>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-label="Exibir Menu">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navBar">
		    <nav class="navbar navbar-light bg-primary">
  				<a class="navbar-brand text-center" href="?">
    			<img src="imagens/logo.png" width="50" height="35" class="d-inline-block align-top" alt="Logotipo"> Portifólio Fernandes</a>
			</nav>
            <?php
            
            
                $index = $_GET['page'] == NULL ? 'active' : '';
                $about = $_GET['page'] == 'about' ? 'active' : '';
                $proj = $_GET['page'] == 'projects' ? 'active' : '';
                $cont = $_GET['page'] == 'contact' ? 'active' : '';
                $lang = $_GET['page'] == 'languages' ? 'active' : '';
                $acad = $_GET['page'] == 'academy' ? 'active' : '';
                $videos = $_GET['page'] == 'videos' ? 'active' : '';
                $imgs = $_GET['page'] == 'imgs' ? 'active' : '';
            ?>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item <?=$index;?>">
		        <a class="nav-link" href="?">Início</a>
		      </li>
		      <li class="nav-item <?=$about;?>">
		        <a class="nav-link" href="?page=about">Sobre Mim</a>
		      </li>
		      <li class="nav-item <?=$proj;?>">
		        <a class="nav-link" href="?page=projects">Projetos</a>
		      </li>
		      <li class="nav-item <?=$cont;?>">
		        <a class="nav-link" href="?page=contact">Contato</a>
		      </li>
		      <li class="nav-item <?=$lang;?>">
		        <a class="nav-link" href="?page=languages">Linguagens</a>
		      </li>
		      <li class="nav-item <?=$acad;?>">
		        <a class="nav-link" href="?page=academy">Acadêmico</a>
		      </li>
			  
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Mídia
					</a>
					<div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
						<a class="nav-link text-dark" href="?page=videos">Vídeos</a>
						<a class="nav-link text-dark" href="?page=imgs">Imagens</a>
					</div>
				</li>
		    </ul>
		  </div>
		</nav>
	
