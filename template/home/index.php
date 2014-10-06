<?php ob_start();?>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
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
<br>
<div class="jumbotron">
  <h1>Collège Louise Michel</h1>
  <p>14, rue de Cannes,</br> 
     59000 Lille</br>
  	 Tél : 03.20.97.16.56
  </p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
</div>
<div class="row featurette">
    <div class="col-md-5">
      <img class="featurette-image img-responsive" src="web/img/pink.gif" alt="Generic placeholder image">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
</div>
<hr>
<div class="row featurette">
    <div class="col-md-7">
    	<h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      	<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
    	<img class="featurette-image img-responsive" src="web/img/orange.gif" alt="Generic placeholder image">
    </div>
</div>
<hr>
<div class="row featurette">
    <div class="col-md-5">
      <img class="featurette-image img-responsive" src="web/img/pink.gif" alt="Generic placeholder image">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
</div>
<hr>
<div class="row featurette">
    <div class="col-md-7">
    	<h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      	<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
    	<img class="featurette-image img-responsive" src="web/img/orange.gif" alt="Generic placeholder image">
    </div>
</div>
<br>
<div class="row">
	<div class="col-md-5">
		<a href="?controler=actu&action=allActu" class="btn btn-primary btn-lg active center-block" role="button">Plus d'actualité</a>
	</div>
</div>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>

