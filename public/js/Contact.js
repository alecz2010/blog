/**
 * Created by Alex on 10/21/2016.
 */


var Contact = Contact || {};

Contact.Sent = function() {
    var response =  true;
    var $cont = $('contact');
    var $form = $cont.find('form');
    var $sendBtn = $form('#sendBtn');
    var $message = $form.find('.message');
    var $back = $cont.find('#backBtn').detach();
    var $sendMessage = $cont.find('.details').detach();

    var sendContact = function(){
        $.ajax({
            type: "POST",
            url: "./pages_ajax/contact.php",
            data: $form.serialize(),
            complete: function(){

            },
            success: function(resp) {
                if (resp.res == "success"){
                    $form.addClass('hide');
                    $form.parent().append(sendMessage);
                    $form.parent().append($back);
                    clearInputs($form);
                    $back.on('click', backToForm);
                } else {
                    $message.text('Error');
                }
            }

        });
    };

    var handleSubmit = function () {

    };

    var clearInputs = function($inputs)
    {
        $inputs.find(':input').val('');
    };

    var backToForm = function() {
        $form.addClass('show');
        sendMessage.addClass('hide');
        $back.addClass('hide');
    };



    var validateField = function(){
        var $this = $(this).val();
        if ($this.length == 0 ) {
            $message.text('Input is empty');
            response = false;
        }
        if ($this.length > 250) {
            $message.text('Input text is too long');
            response = false;
        }
    };

    var validateContact = function($form) {
        $form.find('input[name*="input"]').each(validateField);

        if (response != true) {
            $form.html("<p><span style='color:#3e8f3e'>Error.</span></p>");
        } else {
            sendContact();
        }
    };

    $sendBtn.on('click', function() {
        validateContact($form);
    });

};

