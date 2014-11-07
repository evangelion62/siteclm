<?php ob_start();?>
<h1><?php echo $actu->name() ?></h1>
<p><?php echo $actu->content()?></p>
<?php
$contents = ob_get_clean ();
$ckeditor = true;
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>
