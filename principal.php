<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <title>Sistema - Principal</title>
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
    </header>


    <section>
        <h2>Bem vindo ao Painel de Controle.</h2>
        <p>Acesse abaixo as opções disponiveis do sistema:</p>
        <hr>
    </section>
    <div class="form-grid">
        <div class="form-block">
            <h3>Envio de imagens</h3>
            <p>Envie novas imagens para o banco de dados.</p>
            <button onclick="location.href='upload_imagem.php'">Upload de imagem</button>
        </div>


        <div class="form-block">
            <h3>Consulta de imagens</h3>
            <p>Pesquise e visualize imagens já cadastradas.</p>
            <button onclick="location.href='listar_imagens.php'">Procurar imagem</button>
        </div>
    </div>


    <footer>
        <p>© copy 2025 - Todos os direitos reservados</p>
    </footer>
   
</body>
</html>
