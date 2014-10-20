<?php ob_start();?>

	<h2><a href="#">Titre album 1</a></h2>
	<p>
		<div class="btn-group">
	      	<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
			<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
		</div>
	</p>
	<p>
		paragraphe de commantaire de l'album
	</p>
<div class="row" style="margin-left: 0px; margin-right: 0px;">
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4 col-md-2" style="padding: 0px;">
    <a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
      <img src="web/img/vert.gif" alt="...">
    </a>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">nom de l'image</h4>
      </div>
      <div class="modal-body">
      	<div class="thumbnail">
      		<img src="web/img/vert.gif" alt="...">
   		</div>
      </div>
      <div class="modal-footer">
      	<div class="btn-group">
      	  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
		  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
		  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
		</div>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
	<div class="col-md-4 col-md-push-4">
		<ul class="pagination">
		  <li class="disabled"><a href="#">&laquo;</a></li>
		  <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
		  <li><a href="#">2</a></li>
		  <li><a href="#">3</a></li>
		  <li><a href="#">4</a></li>
		  <li><a href="#">5</a></li>
		  <li><a href="#">&raquo;</a></li>
		 </ul>
	</div>
</div>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>