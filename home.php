
<html>
    <head>

    </head>
    <body>
        <!--Conseguir darle la bienvenida al usuario-->
        <?php
        
        $usuario = $_POST['usuario']; //Lo que esta entre las comillas tiene que conincidir con el name del input
        $contra = $_POST['cont'];
        
        if ($usuario == 'paco' && $contra == 'porras'){// El AND = && y el OR = ||
            echo "<p>Bienvenido paco</p>";
        } else {
            echo "<p>EL USUARIO NO EXSISTE MAL MAL</p>";
        }
        
        ?>
    </body>
</html>