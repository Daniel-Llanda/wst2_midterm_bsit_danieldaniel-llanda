$('#input').keypress(function(e){
    if (e.keyCode == 13) {
        var message = $(this).val();
        $.ajax({
            url: 'router/router.php?ind=send',
            data:{
                'message': message
            },
            success:function(){
                
            }
        })
    }
})