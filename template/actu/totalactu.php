<?php ob_start();?>
<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="web/img/vert-64x64.gif" alt="...">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    ...
  </div>
</div>
<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="web/img/vert-64x64.gif" alt="...">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    ...
  </div>
</div>
<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="web/img/vert-64x64.gif" alt="...">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    ...
  </div>
</div>
<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="web/img/vert-64x64.gif" alt="...">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    ...
  </div>
</div>
<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="web/img/vert-64x64.gif" alt="...">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    ...
  </div>
</div>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>