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
  	<?php foreach ($users as $user) {
  	?>
  	<tr>
  		<td><?php echo $user->id();?></td>
  		<td></td>
  		<td></td>
  		<td><?php echo $user->name();?></td>
  		<td><?php echo $user->pass();?></td>
  		<td><div class="btn-group">
		  <a href="?controler=user&action=updateUser&id=<?php echo $user->id();?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
		  <a href="?controler=user&action=deleteUser&id=<?php echo $user->id();?>" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
		</div></td>
  	</tr>
  	<?php 
  	}?>
</table>

<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>
