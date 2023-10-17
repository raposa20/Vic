<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Poluição Zero - Resultado</title>
    <meta http-equiv="refresh" content="4; index1.php">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            text-align: center;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include_once("conexao.php");
        $nota = $_GET['nota'];
        $stmt = "INSERT INTO tbavaliacoes VALUES (null, $nota);";
        mysqli_query($conn, $stmt);
        mysqli_close($conn);

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $nota = $_GET["nota"];

            switch ($nota) {
                case "3":
                    $mensagem = "Muito obrigado! Sua avaliação foi 'Muito Bom'.";
                    break;
                case "2":
                    $mensagem = "Obrigado! Sua avaliação foi 'Bom'.";
                    break;
                case "1":
                    $mensagem = "Agradecemos por sua avaliação 'Médio'.";
                    break;
                default:
                    $mensagem = "Opção inválida.";
            }

            echo "<p>$mensagem</p>";
        }
        ?>
    </div>
</body>
</html>
