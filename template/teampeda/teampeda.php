<?php

/*Accessible à ?controler=user&action=teamPeda*/

ob_start();?>
  <div class="row">
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" alt="...">
      <div class="caption">
        <h3>Equipe pédagogique</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
     </div>
    </div>
 </div>
 <div class="row">
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" alt="...">
      <div class="caption">
        <h3>Equipe pédagogique</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
     </div>
    </div>
 </div>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>
