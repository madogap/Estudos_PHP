<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Simples</title>
</head>

<body>
    <h1>Calculando Juros Simples</h1>

    <?php
    //capital inicial do emprestimo
    $capital = 400;
    echo "Capital inicial: " . number_format($capital, 2, ",", ".") . "<br>";

    //Tempo do emprestimo
    $tempo = 18;
    echo "Prazo: $tempo <br>";

    //Porcentagem de juros do emprestimo
    $taxa_juros = 5 / 100;
    echo "Prazo: $taxa_juros <br>";

    //Total de juro a ser pago
    $total_juro = $capital * $taxa_juros * $tempo;
    echo "Total de juros a ser pago: " . number_format($total_juro, 2, ",", ".") . "<br>";

    //Montante a ser pago, capital inicial mais juros
    $montante_pagar = $capital * (($taxa_juros * $tempo) + 1);
    echo "Montante a ser pago: " . number_format($montante_pagar, 2, ",", ".") . "<br><br>";

    //Calcular o valor de cada parcela
    $valor_parcela = $montante_pagar / $tempo;

    //Recuperar a data atual
    $data_atual = new DateTime();

    $valor_total_pago =  0;

    //Laço de repetição para imprimir o valor de cada parcela
    $controle = 1;
    while ($controle <= $tempo) {
        # code...   
        //Data atual e soma o mês
        $data_atual->add(new DateInterval("P1M"));
        echo "Número de parcela: $controle  <br>";
        echo "Data d e vencimeto: " . $data_atual->format('d/m/Y') . "<br>";
        //Acessa o if quando é ultima parcela para corrigir o valor da compra
        if ($controle == $tempo) {
            # code...
            //Utilizar a soma das parcelas já impressa e subtrair do valor total da compra para obter o valor da ultima parcela e corrigir a diferença
            $valor_ultima_parcela = $montante_pagar - $valor_total_pago;
            //Converter o valor da parcela para o formato Real separado pela virgula
            echo "Valor da última parcela: " . number_format($valor_ultima_parcela, 2, ",", ".") . "<br>";
            //Somar o valor total pago
            $valor_total_pago = $valor_total_pago + number_format($valor_ultima_parcela, 2, ".", "");
            echo "Ultima";
        } else {
            //Converte o valor da parcela para o formato Real separado pela virgula
            echo "Valor da parcela: " . number_format($valor_parcela, 2, ",", ".") . "<br>";
            //Somar o valor total pago
            $valor_total_pago = $valor_total_pago + number_format($valor_parcela, 2, ".", "");
        }
        echo "<hr>";
        $controle++;
    }
    echo "Valor total pago:" . number_format($valor_total_pago, 2, ",", ".") . "<br>";
    ?>

</body>

</html>