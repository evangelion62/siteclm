<?php ob_start();?>
<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="..." alt="...">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    ...
  </div>
</div>
<?php
$contents = ob_get_clean();
if (is_file('template/layout.php')){
	require_once 'template/layout.php';
}
?>