<?php

	require_once('paginas/header.tpl.php');

    switch($_GET['page']){
        case 'about': require_once('paginas/about.tpl.php'); break;
        case 'projects': require_once('paginas/projects.tpl.php'); break;
        case 'contact': require_once('paginas/contact.tpl.php'); break;
        case 'languages': require_once('paginas/languages.tpl.php'); break;
        case 'academy': require_once('paginas/academy.tpl.php'); break;
        case 'videos': require_once('paginas/videos.tpl.php'); break;
        case 'imgs': require_once('paginas/imgs.tpl.php'); break;
        default: require_once('paginas/home.tpl.php'); break;
    }

	require_once('paginas/footer.tpl.php');
	
?>
