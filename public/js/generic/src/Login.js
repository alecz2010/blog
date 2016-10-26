/**
 * Created by Alex on 10/25/2016.
 */

window.Generic = window.Generic || {};
(function ($) {
    Generic.Login = function(){
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
})(window.jQuery);