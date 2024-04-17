<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
 
<body>
    <TItle>Resultado</TItle>
    <div>
        <?php
    // Recebe os dados do formulário
    $nomeVendedor = $_POST['vend'];
    $metaS1 = $_POST['meta_s1'];
    $metaS2 = $_POST['meta_s2'];
    $metaS3 = $_POST['meta_s3'];
    $metaS4 = $_POST['meta_s4'];
//  Calcula o total de vendas semanais
    $vendasSemanais = [$metaS1, $metaS2, $metaS3, $metaS4];
    $totalVendas = array_sum($vendasSemanais);
 
    // Definição da meta mensal fixa
    $metaM = 80000;  
 
    // Definição do salário mínimo
    $salario = 1927;
 
    // Verifica se todas as metas semanais foram atingidas
    $atingiuTodasMSem = true;
    foreach ($vendasSemanais as $totalVenSem) {
        if ($totalVenSem < $metaM) {
            $atingiuTodasMSem = false;
            break;
        }
    }
 
    // Calcula os bônus de acordo com o desempenho
    $bonusMeta = 0;
    $bonusShine = 0;
    $bonusDmen = 0;
 
    if ($atingiuTodasMSem) {
        // Calcula os bônus apenas se todas as metas semanais foram atingidas
        $bonusMeta = $metaM * 0.01;
        $exTotal = max(0, $totalVendas - ($metaM * 4));
        $bonusShine = $exTotal * 0.05;
       
        // Calcula o bônus de desempenho mensal
        $bonusDmen = $excedenteTotal * 0.10;
    }
 
    // Calcula o salário final
    $salarioFinal = $salario + $bonusMeta + $bonusShine + $bonusDmen;
 
    // Exibe o resultado
    echo "<h2>Resultado do Cálculo</h2>";
    echo "<p>Nome do Vendedor: $nomeVendedor</p>";
    echo "<p>Salário Final do Vendedor: R$ " . number_format($salarioFinal, 2, ',', '.') . "</p>";
    ?>
    </div>
</body>
 
</html>