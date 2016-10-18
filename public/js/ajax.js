$(function(){
    var $form = $(form);
    var $registerBtn = $('#registerBtn');

    $registerBtn.on('click', function(){
        $.ajax({
            type: 'POST',
            url: './config/register.php',
            data: $form.serialize(),
            complete: function() {

            },
            success: function(resp) {
                if (resp == 1) {
                    alert("Account created.");
                }else{
                    echo("Error");
                }
            }
        });
    })
});
