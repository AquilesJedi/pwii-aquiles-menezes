<html>
    <body>
        <?php
        $p = $_GET["preço"];
        $total = (($p * 16) / 100)+$p;
        $parcela = $total / 10;
        echo "O valor total é: ";
        echo $total;
        echo "valor das parcelas: ";
        echo $parcela;
        ?>
    </body>
</html>