/**
 * Created by Alex on 10/21/2016.
 */


var Contact = Contact || {};

Contact.Sent = function() {
    var response =  true;
    var $cont = $('.contact');
    var $form = $cont.find('form');
    var $sendBtn = $form.find('#sendBtn');
    var $message = $form.find('.message');
    var $back = $cont.find('.back').removeClass('hide').detach();
    var $sendMessage = $cont.find('.details').detach();
    var comment = $form.find('#comment').val();
    var $inputWithError;

    var sendContact = function(){
        $.ajax({
            type: "POST",
            url: "./pages_ajax/contact.php",
            data: $form.serialize(),
            complete: function(){

            },
            success: function(resp) {
                if (resp.res == "success"){
                    // console.log('aaa', $form.attr('class'));
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

        sendContact();
    });
};

