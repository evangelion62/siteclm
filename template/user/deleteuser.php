<?php

/*Accessible à ?controler=user&action=deleteuser*/

ob_start();?>
<div>
	<span class="label label-warning">Attention</span><p> Cette action est irréversible. Etes-vous sûr de vouloir supprimer cet élément ?</p>
</div>
<ul class="nav nav-pills">
  <li><a href="?controler=user&action=deleteUser&id=<?php echo $_GET['id']?>&confirm=1">OUI</a></li>
  <li><a href="?controler=user&action=listUser">NON</a></li>
</ul>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>
