<!DOCTYPE html>
<html>
 
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
 
<body>
    <!DOCTYPE html>
    <html lang="pt-br">
 
    <head>
 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de Salário de Vendedor</title>
    </head>
 
    <body>
        <div id="porta">
            <!-- pede para o usuario as inforçoes essencias para o funcionamento do site -->
            <form action="calculadora.php" method="post">
                <!-- puxa nome do vendeddor -->
                <label for="vend">Nome do Vendedor:</label>
                <br>
                <input type="text" id="vend" name="vend" required><br><br>
               <!-- puxa os dados das metas atingidas -->
                <label for="meta_s1">Meta semanal 1° semana:</label>
                <br>
                <input type="number" id="meta_s1" name="meta_s1" required><br><br>
 
                <label for="meta_s2">Meta semanal 2° semana:</label>
                <br>
                <input type="number" id="meta_s2" name="meta_s2" required><br><br>
 
                <label for="meta_s3">Meta semanal 3° semana:</label>
                <br>
                <input type="number" id="meta_s3" name="meta_s3" required><br><br>
 
                <label for="meta_s4">Meta semanal 4° semana:</label>
                <br>
                <input type="number" id="meta_s4" name="meta_s4" required><br><br>
               <!-- guarda as informações pedidas a cima -->
                <button type="submit">Calcular Salário</button>
            </form>
        </div>
    </body>
 
    </html>
 
</body>
 
</html>