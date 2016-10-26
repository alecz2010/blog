/**
 * Created by Alex on 10/25/2016.
 */

var Login = Login || {};

Login.Data = function(){
    var $login = $('.login');
    var $form = $login.find('form');
    var $loginBtn = $form.find('#loginBtn');

    var loginData = function(){
        $.ajax({
            type: "POST",
            url: "./pages_ajax/login-user.php",
            data: $form.serialize(),
            complete: function() {

            },
            success: function(resp) {
                if (resp.res == "success") {
                    alert("success");
                } else {
                    alert("error");
                }
                clearInput($form);
            }
        });
    };

    var clearInput = function($inputs) {
        $inputs.find(':input').val('');
    };

    $loginBtn.on('click',loginData);
};

