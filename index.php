<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . "/carrinho.php/templates/cabecalho.php";


?>.
<link rel="stylesheet" href="/css/style.css">
<script src="/js/javascript.js"></script>

<!-- INICIO CARROSEL 1 ================================================================================================== -->
<section class="awSlider">
  <div  class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target=".carousel" data-slide-to="0" class="active"></li>
      <li data-target=".carousel" data-slide-to="1"></li>
      <li data-target=".carousel" data-slide-to="2"></li>
      <li data-target=".carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/img/fofoCAR.png">
        <div class="carousel-caption">Görsel #1</div>
      </div>
      <div class="item">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-101.jpg">
        <div class="carousel-caption">Görsel #2</div>
      </div>
      <div class="item">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-1051.jpg">
        <div class="carousel-caption">Görsel #3</div>
      </div>
      <div class="item">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2013/07/wallpaper-thumb-74.jpg">
        <div class="carousel-caption">Görsel #4</div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Geri</span>
    </a>
    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">İleri</span>
    </a>
  </div>
</section>

<!-- FIM CARROSSEL 1====================================================================================================== -->

<!-- CARROSSEL 2 =========================================================================================================-->
<div class="box-carrossel">
<div class="bxCarrosel">

    <div class="artigos-carrossel">
     
        <div class="imagem"> 
            <img src="uploads/1.jpg"> 
        </div>

        <div class="texto"> 
            <p>A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica...</p>
            <a href="#" title="Leia mais">Leia mais</a>
        </div>
    
    </div><!--1-->

    <div class="artigos-carrossel">
     
        <div class="imagem"> 
            <img src="uploads/2.jpg"> 
        </div>

        <div class="texto"> 
            <p>A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica...</p>
            <a href="#" title="Leia mais">Leia mais</a>
        </div>
    
    </div><!--2-->

    <div class="artigos-carrossel">
     
        <div class="imagem"> 
            <img src="uploads/3.jpg"> 
        </div>

        <div class="texto"> 
            <p>A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica...</p>
            <a href="#" title="Leia mais">Leia mais</a>
        </div>
    
    </div><!--3-->

    <div class="artigos-carrossel">
     
        <div class="imagem"> 
            <img src="uploads/4.jpg"> 
        </div>

        <div class="texto"> 
            <p>A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica...</p>
            <a href="#" title="Leia mais">Leia mais</a>
        </div>
    
    </div><!--4-->

    <div class="artigos-carrossel">
     
        <div class="imagem"> 
            <img src="uploads/5.jpg"> 
        </div>

        <div class="texto"> 
            <p>A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica...</p>
            <a href="#" title="Leia mais">Leia mais</a>
        </div>
    
    </div><!--5-->

    <div class="artigos-carrossel">
     
        <div class="imagem"> 
            <img src="uploads/6.jpg"> 
        </div>

        <div class="texto"> 
            <p>A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica...</p>
            <a href="#" title="Leia mais">Leia mais</a>
        </div>
    
    </div><!--6-->

</div><!--bxCarrosel-->
</div>    
<!-- FIM CARROSSEL 2 ========================================================================================================================= -->
<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . "/carrinho.php/templates/rodape.php";


?>