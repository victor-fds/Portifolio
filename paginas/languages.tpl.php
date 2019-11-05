<div class="container">
    <div class="row text-center">
        <div class="col-md-12 bg-dark border rounded my-4">
            <h3 class="text-light mt-2">Linguagens de Programação</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-justify">
            <p>
            	Selecione uma linguagem para começar
            </p>
            
            <ul class="w-25">
            	<a href="?page=languages&lang=php"><li>PHP</li></a>
            	<a href="?page=languages&lang=db"><li>Banco de Dados</li></a>
            	<a href="?page=languages&lang=c"><li>C</li></a>
            	<a href="?page=languages&lang=java"><li>Java</li></a>
            	<a href="?page=languages&lang=jquery"><li>JQuery</li></a>
            </ul>
        </div>
    </div>
    
    <?php
    	if($_GET['lang'] === "php")
    		require_once("paginas/php.tpl.php");
    		
    	if($_GET['lang'] === "db")
    		require_once("paginas/db.tpl.php");
    		
    	if($_GET['lang'] === "c")
    		require_once("paginas/c.tpl.php");    	
    		
    	if($_GET['lang'] === "java")
    		require_once("paginas/java.tpl.php");    	
    		
    	if($_GET['lang'] === "jquery")
    		require_once("paginas/jquery.tpl.php");
    ?>
    
</div>
