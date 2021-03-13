<html>
    <head>
        <title>Taller 1</title>
    </head>
    
    <body>
        <?php
            //date_default_timezone_get("America/Bogota"),date("m"),date("Y");
            $variable_1="Hola Mundo";
            $variable_2=12345;
            $variable_3=false;
            $variable_4=1.500;
            $variable_5=date("d-m-Y");
            echo "<h1>$variable_1</h1><br>";
            echo "<h2>$variable_2</h2><br>";
        ?>

        <?php
            $variable_6=[
                "ASUS",
                "GIGABYTE",
                "ASROCK",
                "MSI",
                "EVGA"
            ];            
            $tamaño_array=count($variable_6);
            for($i=0;$i<$tamaño_array;$i++){
                echo "<br>" . $variable_6[$i] . "<br>";
            }
        
        ?>
    </body>
    
    
</html>