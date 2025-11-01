<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <title>Sistema - Upload de imagem</title>
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
        <h3>Upload de Imagem.</h3>


        <form action="salvar_imagem.php" method="POST" enctype="multipart/form-data">
            <label for="imagem">Escolha uma imagem:</label>
            <input type="file" name="imagem" id="imagem" required>
            <button type="submit">Enviar</button>
        </form>


        <?php
        if(isset($_GET['status'])){
            if($_GET['status'] == 'success'){
                echo "<p class='mensagem' style='color: green;'>Imagem enviada com sucesso!</p>";
            }elseif($_GET['status'] == 'error'){
                echo "<p class='mensagem' style='color: red;'>Erro ao enviar a imagem. Tente novamente</p>";
            }
        }


        ?>


    </main>
       
    <footer>
        <p>© copy 2025 - Todos os direitos reservados</p>
    </footer>
   
</body>
