<?php

/*Accessible à ?controler=user&action=listUser*/

ob_start();?>

<table class="table table-hover">
  	<tr>
  		<th>ID</th>
  		<th>Nom</th>
  		<th>Prénom</th>
  		<th>Identifiant</th>
  		<th>Mot de passe</th>
  		<th>Actions <div class="btn-group">
  			<a href="?controler=user&action=addUser&id=#" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
		</div></th>
  	</tr>
  	<tr>
  		<td>#</td>
  		<td>jean</td>
  		<td>toto</td>
  		<td>idtoto</td>
  		<td>pwdtot</td>
  		<td><div class="btn-group">
		  <a href="?controler=user&action=updateUser&id=#" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
		  <a href="?controler=user&action=deleteUser&id=#" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
		</div></td>
  	</tr>
  	<tr>
  		<td>#</td>
  		<td>Vincent</td>
  		<td>Boulanger</td>
  		<td>idvincent</td>
  		<td>pwboulanger</td>
  		<td><div class="btn-group">
		  <a href="?controler=user&action=updateUser&id=#" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
		  <a href="?controler=user&action=deleteUser&id=#" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
		</div></td>
  	</tr>
</table>

<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>
