<?php ob_start();?>
<textarea name="editor1" id="editor1"></textarea>
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