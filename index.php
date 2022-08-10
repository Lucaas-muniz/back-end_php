<?php
include 'layout/cabecalho.php';
include 'estilos/estilo.php';
include 'dados/dados.php';
?>
<!--conteudo principal-->

<main class="conteudo">
    <h2>Confira nosso cardápio:</h2>
    <?php
    foreach ($marmitas as $key => $value) {

    ?>
        <div class="container"><a href="pagina2.php?id=<?php echo $value['id'];?>" title="saiba mais!" alt="<?php echo $value['alt']; ?>"><img src=<?php echo $value['imagem'];?>></a>
            <p><a href="pagina2.php?id=<?php echo $value['id'];?>" title="saiba mais!"><?php echo $value['nome'];?></a>- <?php echo $value['preco'];?></p>
        </div>
    <?php
    }
    ?>
</main>
<?php
include 'layout/rodape.php';
?>