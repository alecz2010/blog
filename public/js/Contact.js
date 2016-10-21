/**
 * Created by Alex on 10/21/2016.
 */

var Contact = Contact || {};

Contact.Sent = function() {
    var $form = $('form');
    var $sentBtn = $('#sentBtn');

    var sentContact = function(){
        $.ajax({
            type: "POST",
            url: "./pages_ajax/contact.php",
            data: $form.serialize(),
            complete: function(){

            },
            success: function(resp) {
                if (resp.res == "success"){
                    alert("Sent");
                } else {
                    alert("Error");
                }
            }

        });
    };

    $sentBtn.on('click', sentContact);

};

