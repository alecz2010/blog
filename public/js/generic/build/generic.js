/*
// ..\..\public\js\generic\src\ModalBuilder.js
*/

/**
 * Created by Alex on 10/24/2016.
 */

window.Generic = window.Generic || {};

(function($) {
    Generic.ModalBuilder = function () {
        var newModal = function (title, body, options) {
            options = $.extend({
                show: false,
                backdrop: 'static'
            }, options);

            if (!title) {
                title = '';
            }

            var $modal = $(
                '<div class="modal fade">'
                + '<div class="modal-dialog">'
                + '<div class="modal-content">'
                + '<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">' + title + '</h4></div>'
                + '<div class="modal-body">' + body + '</div>'
                + '<div class="modal-footer"><button type="button" class="btn btn-default closeBtn" data-dismiss="modal">No</button><button type="button" class="btn btn-primary submitBtn">Yes</button></div>'
                + '</div>'
                + '</div>'
                + '</div>'
            );

            $modal.on('shown.bs.modal', function () {
                var $mod = $modal.find('.modal-footer .btn-primary');
                $mod.focus();
            });

            $modal.on('hidden.bs.modal', function () {
                $modal.remove();
            });

            $modal.modal(options);

            return $modal;
        };

        this.getModal = function(title, options){
            return newModal(title, options);
        };
    };
})(window.jQuery);





/*
// ..\..\public\js\generic\src\Contact.js
*/

/**
 * Created by Alex on 10/21/2016.
 */


window.Generic = Generic || {};

Generic.Contact = function() {
    var response =  true;
    var $cont = $('.contact');
    var $form = $cont.find('form');
    var $sendBtn = $form.find('#sendBtn');
    var $message = $form.find('.message');
    var $back = $cont.find('.back').removeClass('hide').detach();
    var $sendMessage = $cont.find('.details').detach();
    var comment = $form.find('#comment').val();
    var $inputWithError;

    var send = function(){
        $.ajax({
            type: "POST",
            url: "./pages_ajax/contact.php",
            data: $form.serialize(),
            complete: function(){

            },
            success: function(resp) {
                if (resp.res == "success"){
                    $form.removeClass('show');
                    $form.addClass('hide');
                    $form.parent().append($back);
                    clearInputs($form);
                    $back.on('click', backToForm);
                } else {
                    $message.text('Error');
                }
            }

        });
    };

    var clearInputs = function($inputs)
    {
        $inputs.find(':input').val('');
    };

    var backToForm = function() {
        $form.removeClass('hide');
        $form.addClass('show');
        $back.remove();
    };

    var validateField = function() {
        $(this).parent('div').removeClass('has-error');
        if($(this).val().length === 0) {
            $(this).parent('div').addClass('has-error');
        }

        $inputWithError = $form.find('.has-error');
    };

    $form.find('.input').blur(validateField);

    $sendBtn.on('click', function() {
        $form.find('.input').each(validateField);

        if ($inputWithError && $inputWithError.length > 0){
            var $modal = new Generic.ModalBuilder();
            $modal = $modal.getModal('Error','Cannot send empty input');
            $modal.find('.submitBtn').addClass('hide');
            $modal.find('.closeBtn').text('Close');
            $modal.modal('show');

            return false;
        }

        send();
    });
};





/*
// ..\..\public\js\generic\src\Login.js
*/

/**
 * Created by Alex on 10/25/2016.
 */

window.Login = window.Login || {};

Generic.Data = function(){
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





/*
// ..\..\public\js\generic\src\Registration.js
*/


window.Registration = window.Registration || {};

Generic.Insert = function(){
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






