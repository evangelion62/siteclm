<?php ob_start();?>
	home
<?php
$contents = ob_get_clean();
if (is_file('template/layout.php')){
	require_once 'template/layout.php';
}
?>
