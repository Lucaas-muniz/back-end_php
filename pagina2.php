<?php
include 'layout/cabecalho.php';
include 'estilos/estilo.php';
include 'dados/dados.php';
$id = $_GET['id'];
foreach ($marmitas as $key => $value) {
    if ($value['id'] == $id) {
?>
        <main class="conteudo pg2">
            <h2><?php echo $value['nome']; ?></h2>
            <p id="cont3">Peça agora mesmo pelo telefone: 12994441991 ou whatsapp: 12992333213</p>
            <div id="cont2">
                <img class="pg2" src=<?php echo $value['imagem']; ?>><br>
                <p id="text2"><?php echo $value['nome']; ?></p>
                <p>Ingredientes:<br><?php echo $value['ingredientes'] ?></p>
                <p>Tamanho: <?php echo $value['tamanho'] ?></p>
                <p>Por apenas <?php echo $value['preco'] ?></p>
            </div>
    <?php
    }
}
    ?>
        </main>
        <?php
        include 'layout/rodape.php';
        ?>