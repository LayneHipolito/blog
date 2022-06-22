<!-- Inclusão do cabeçalho -->
<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

      if($post['id'] == $postId) {
        $currentPost = $post;
      }

    }

  }

?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">Atualmente, as mulheres são destaque na área de tecnologia. Porém, essa importância e participação já acontece há muito tempo, embora nos dias atuais ocorra um reconhecimento um pouco maior, as mulheres ainda sofrem com a falta de espaço na tecnologia.</p>
    <p class="post-content">Em nosso momento atual, as mulheres têm ganhado cada vez mais destaque em diversos segmentos profissionais, principalmente na área de programação. Existe uma grande demanda para desenvolvedores(as) e uma falta muito grande de profissionais na área. 
      Entre o ano de 2021 e neste ano de 2022 já foram lançados vários programas gratuitos com ofertas para formar mulheres na área. 
Se você realizar uma breve e simples pesquisa, irá notar que o setor tecnológico é uma das áreas mais importantes do mundo. E que entre as profissões do futuro (que já é presente), desenvolvedores full-stack, por exemplo, estão entre os profissionais mais requisitados.</p>
  </div>
  <div class="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</main>

<!-- Inclusão do rodapé -->
<?php
  include_once("templates/footer.php");
?>