jQuery(document).ready(function($){
    $('#start-demo').bind("click", function(){
        var frame = $('#demo-frame');
        frame.attr('src', demoUrl);
        $('#myModal').modal('show');
    });
});