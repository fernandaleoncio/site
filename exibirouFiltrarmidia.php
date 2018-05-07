<?php
require_once __DIR__.'/./src/teste/Service/MidiaService.php';
require_once __DIR__.'/./src/teste/Model/Midia.php';

?>
<html>
    <head>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
        
    <body>
        <div class="container">
            <form action="ExibirouFiltarmidia.php" method="post">
                <h1>    Teste 4yousee </h1>
                <input type="text" id="category" placeholder="category">
                <button> Filtrar </button>
                <div id="thumbnail"></div> 
                <div id="type"></div>
                <div id="description"></div>

                <script src= "nw.js"></script>
            </form>
        </div>
    </body>
</html>