$("document").ready(function(){

        $("#form_submit_button").click(function()
        {
            var editor = tinyMCE.get('detail_textarea');
        
            $.ajax({
                url:'create.php',
                cache: false,
                method: 'post',
                data: {textarea_html: editor.getContent()},
                success: function(data){
                    console.log("success called", data);
                }
            });

        }
    );
    
    
});