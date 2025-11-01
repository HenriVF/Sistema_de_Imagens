<?php
require 'db_config.php';


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagem'])) {
    $nomeImagem = $_FILES['imagem']['name'];
    $imagemTmp = $_FILES['imagem']['tmp_name'];
    $conteudoImagem = file_get_contents($imagemTmp);


    $stmt = $conn->prepare("INSERT INTO imagens (nome_imagem, imagem) VALUES (?, ?)");
    $stmt->bind_param("sb", $nomeImagem, $conteudoImagem);


    // Envia os dados binários separadamente
    $stmt->send_long_data(1, $conteudoImagem);


    if ($stmt->execute()) {
        // Redireciona para a página de upload de imagem com uma mensagem de sucesso
        header("Location: upload_imagem.php?status=success");
        exit();
    } else {
        // Redireciona para a página de upload de imagem com uma mensagem de erro
        header("Location: upload_imagem.php?status=error");
        exit();
    }


    $stmt->close();
    $conn->close();
}
?>


