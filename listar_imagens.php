<?php
require 'db_config.php';


$sql = "SELECT id, nome_imagem, criado_em FROM imagens";
$result = $conn -> query($sql);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <title>Sistema - Procurar imagens</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='meu_css3.css'>
    <script src='main.js'></script>
</head>
<body>


    <header>
        <img src="Logo_Principal.png" alt="Logo da Pagina">
        <div class="texto-header">
            Esta é uma plataforma para consultar banco de dados e realizar diversas operações.
        </div>
        <button class="right-button"><a href="principal.php">Voltar</a></button>
    </header>


    <main>
        <h3>Lista de imagens.</h3>


        <div class="image-grid">
            <?php
                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        echo "
                        <div class='image-card'>
                            <img src='ver_imagem.php?id={$row['id']}' alt='imagem'>
                            <div class='image-info'>
                                <h4>{$row['nome_imagem']}</h4>
                                <p><strong>ID:</strong> {$row['id']}</p>
                                <p><strong>Enviado em:</strong> {$row['criado_em']}</p>
                            </div>
                        </div>";
                    }
                }else{
                    echo "<p>Nenhuma imagem encontrada.</p>";
                }


            ?>
        </div>
    </main>
       
    <footer>
        <p>© copy 2025 - Todos os direitos reservados</p>
    </footer>
   
</body>
</html>
