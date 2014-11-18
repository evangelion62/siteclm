<?php ob_start();?>
<div id="carousel-example-generic" class="carousel slide"
	data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0"
			class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<a href="#"><img style="width: 100%;"
				src="web/img/uploads/Hydrangeas.jpg" alt="...">
				<div class="carousel-caption" style="top: 5px;">
					<h3>Rouge</h3>
					<p>Slide rouge</p>
				</div> </a>
		</div>
		<div class="item">
			<a href="#"><img style="width: 100%;" src="web/img/dsc-4074-922x518-133.jpg"
				alt="...">
			<div class="carousel-caption" style="top: 0px;">
				<h3>Bleu</h3>
				<p>Slide bleu</p>
			</div> </a>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic"
		role="button" data-slide="prev"> <span
		class="glyphicon glyphicon-chevron-left"></span>
	</a> <a class="right carousel-control" href="#carousel-example-generic"
		role="button" data-slide="next"> <span
		class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>

<?php
$cmpt = 0;
foreach ( $actus as $value ) {
	$cmpt ++;
	?>
<div class="row featurette">
    <?php if ($cmpt%2!=0){?>
    <div class="col-md-5">
		<img class="featurette-image img-responsive"
			src="<?php echo $value->img()?>" alt="Generic placeholder image">
	</div>
	<div class="col-md-7">
		<h2 class="featurette-heading">
			<a href="?controler=actu&action=getActu&id=<?php echo $value->id()?>"><?php echo $value->name();?></a>
		</h2>
		<p class="lead"><?php echo substr(strip_tags($value->content()),0,500);?> ...</p>
	</div>
    <?php }else{?>
    <div class="col-md-7">
		<h2 class="featurette-heading">
			<a href="?controler=actu&action=getActu&id=<?php echo $value->id()?>"><?php echo $value->name();?></a>
		</h2>
		<p class="lead"><?php echo substr(strip_tags($value->content()),0,500);?> ...</p>
	</div>
	<div class="col-md-5">
		<img class="featurette-image img-responsive"
			src="<?php echo $value->img()?>" alt="Generic placeholder image">
	</div>
    <?php }?>
</div>
<?php }?>
<div class="row">
	<div class="col-md-5">
		<a href="?controler=actu&action=allActu"
			class="btn btn-info btn-lg active center-block" role="button">Plus
			d'actualité</a>
	</div>
</div>
<br>
<div class="jumbotron"
	style="padding: 0px; border-radius: 0px; margin-bottom: 0px;">
	<div class="row">
		<div class="col-md-5">
			<img class="featurette-image img-responsive"
				src="web/img/dsc-4074-922x518-133.jpg"
				alt="Generic placeholder image">
		</div>
		<div class="col-md-7">
			<h2 style="color: #5bc0de;">Collège Louise Michel Lille</h2>
			<address style="margin-bottom: 10px;">
				<strong>collège louise michel</strong><br> 14 Rue de Cannes<br>
				59000, Lille<br> <abbr title="Téléphone">Tèl:</abbr> 03.20.97.23.56
			</address>
			<address style="margin-bottom: 10px;">
				<strong>Adresse mail</strong><br> <a href="mailto:#">ce.0594288r@ac-lille.fr</a>
			</address>
			<p>
				<a href="#" class="btn btn-info" role="button">Plus d'informations</a>
			</p>
		</div>
	</div>
</div>
<?php
$contents = ob_get_clean ();
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>

