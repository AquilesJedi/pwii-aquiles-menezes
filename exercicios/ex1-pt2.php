<html>
    <body>
    <?php 
        echo "O Consumo médio é do seu carro foi: ";
        $dist = $_GET["Km"];
        $gas = $_GET["litros"];
        $resultado = $dist / $gas;
        echo $resultado ;
    ?>
    </body>
</html>