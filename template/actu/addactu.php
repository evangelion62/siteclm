<?php ob_start();?>
<div>
	<textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
</div>
 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
</script>
<?php
$contents = ob_get_clean();
$ckeditor = true;
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>