<?php

/*Accessible à ?controler=user&action=deleteuser*/

ob_start();?>
<div>
	<span class="label label-success">Déconnexion réussie ! </span><p> Vous êtes bien déconnectés !</p>
</div>
<ul class="nav nav-pills">
  <li class="active"><a href="#">Se reconnecter ?</a></li>
</ul>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>
