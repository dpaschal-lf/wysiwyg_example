<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WYSIWYG editor</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="main.js"></script>

</head>
<body>
<?php 
$intro_message = 'This is our <strong>editor</strong> area';
?>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script> tinymce.init({selector:'#detail_textarea'});</script>
    <form id="textareaform">
        <textarea name="editor" id='detail_textarea'><?php echo "$intro_message";?></textarea>
        <button type="button" id="form_submit_button">Submit</button>
        </form>
</body>
</html>



</body>
</html>