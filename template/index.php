<?php ob_start();?>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="web/img/rouge.gif" alt="...">
      <div class="carousel-caption">
        <h3>Rouge</h3>
        <p>Slide rouge</p>
      </div>
    </div>
    <div class="item">
      <img src="web/img/bleu.gif" alt="...">
      <div class="carousel-caption">
        <h3>Bleu</h3>
        <p>Slide bleu</p>
      </div>
    </div>
    <div class="item">
      <img src="web/img/vert.gif" alt="...">
      <div class="carousel-caption">
        <h3>Vert</h3>
        <p>Slide vert</p>
      </div>
    </div>
    <div class="item">
      <img src="web/img/jaune.gif" alt="...">
      <div class="carousel-caption">
        <h3>Vert</h3>
        <p>Slide vert</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<?php
$contents = ob_get_clean();
if (is_file('template/layout.php')){
	require_once 'template/layout.php';
}
?>

