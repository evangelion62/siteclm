<?php
/*template de configuration de la  bdd
 * varriable attendu $formAction avec la cible du formulaire
* varriable annex $userErrors['bdderror'] et $bddLastConfig[]*/
ob_start();?>

<div class="row">
  <div class="col-md-6">.col-md-6</div>
  <div class="col-md-6">.col-md-6</div>
</div>

<?php
$contents = ob_get_clean();
if (is_file('template/layout.php')){
	require_once 'template/layout.php';
}
?>