<?php 
    

    class cliente_controller{
        function __construct(){}
            



       function index(){
            include_once('vista/header.php');
            include_once('vista/navar.php');
            include_once('vista/index.php');
            include_once('vista/footer.php');
        }
        function municipio(){
            include_once('vista/header.php');
            include_once('vista/navar.php');
            include_once('vista/mdl-municipio.php');
            include_once('vista/footer.php');
        }
        function gobierno(){
            include_once('vista/header.php');
            include_once('vista/navar.php');
            include_once('vista/mdl-gobierno.php');
            include_once('vista/footer.php');
        }
        function contacto(){
            include_once('vista/header.php');
            include_once('vista/navar.php');
            include_once('vista/mdl-contacto.php');
            include_once('vista/footer.php');
        }
        function acerca(){
            include_once('vista/header.php');
            include_once('vista/navar.php');
            include_once('vista/mdl-acerca.php');
            include_once('vista/footer.php');
        }
        function index_nahuatl(){
            include_once('vista/header.php');
            include_once('vista/navar-nahuatl.php');
            include_once('vista/index-nahuatl.php');
            include_once('vista/footer.php');
        }
        function municipio_nahuatl(){
            include_once('vista/header.php');
            include_once('vista/navar-nahuatl.php');
            include_once('vista/mdl-municipio-nahuatl.php');
            include_once('vista/footer.php');
        }
        function gobierno_nahuatl(){
            include_once('vista/header.php');
            include_once('vista/navar-nahuatl.php');
            include_once('vista/mdl-gobierno-nahuatl.php');
            include_once('vista/footer.php');
        }
        function contacto_nahuatl(){
            include_once('vista/header.php');
            include_once('vista/navar-nahuatl.php');
            include_once('vista/mdl-contacto-nahuatl.php');
            include_once('vista/footer.php');
        }
        function acerca_nahuatl(){
            include_once('vista/header.php');
            include_once('vista/navar-nahuatl.php');
            include_once('vista/mdl-acerca.php');
            include_once('vista/footer.php');
        }
        
    }
        
?>