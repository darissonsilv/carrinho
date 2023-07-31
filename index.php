<?php 

require_once $_SERVER["DOCUMENT_ROOT"] . '/carrinho/templates/cabecalho.php';


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="/carrinho/css/style.css">

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/carrinho/img/produto-2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/carrinho/img/produto-3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/carrinho/img/produto-4.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- card -->
<div class="cards-container">
<?php

    // Array com informações dos quatro cards
    $cards = array(
        array(
            "titulo" => "Corolla Toyota",
            "descricao" => "Descrição do Card 1",
            "imagem" => "/carrinho/img/produto-1.png"
        ),
        array(
            "titulo" => "Fiat Toro",
            "descricao" => "Descrição do Card 2",
            "imagem" => "/carrinho/img/produto-2.png"
        ),
        array(
            "titulo" => "Fusca Volswagem",
            "descricao" => "Descrição do Card 3",
            "imagem" => "/carrinho/img/produto-3.jpg"
        ),
        array(
            "titulo" => "Gol Volswagem",
            "descricao" => "Descrição do Card 4",
            "imagem" => "/carrinho/img/produto-4.png"
        )
    );

    // Utilizando o foreach para exibir os quatro cards
    foreach ($cards as $card) {
        echo '<div class="card" style="width: 18rem;">';
        echo '<img src="' . $card["imagem"] . '" class="card-img-top" alt="' . $card["titulo"] . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $card["titulo"] . '</h5>';
        echo '<p class="card-text">' . $card["descricao"] . '</p>';
        echo '<a href="#" class="btn btn-primary">adicionar ao carrinho</a>';
        echo '</div>';
        echo '</div>';
    }
    
    ?>
    </div>

<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . '/carrinho/templates/rodape.php';
?>