
var Registration = Registration|| {};

Registration.Insert = function(){
    var $form = $('form');
    var $registerBtn = $('#registerBtn');

    var insertUser = function(){
        $.ajax({
            type: 'POST',
            url: './pages_ajax/insert-user.php',
            data: $form.serialize(),
            complete: function() {

            },
            success: function(resp) {
                if (resp.res == 'success') {
                    alert("Account created.");
                }else{
                    alert("Error");
                }
            },
        });
    };

    $registerBtn.on('click', insertUser);
};



