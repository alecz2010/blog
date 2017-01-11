var Generic = window.Generic = window.Generic || {};

Generic.Insert = function () {
    var $form = $('form');
    var $registerBtn = $('#registerBtn');

    var handleError = function($form, errors) {
        for (var key in errors) {
            (function () {
                var $input = $form.find('input[name="' + key + '"]');
                $input.after('<span>' + errors[key] + '</span>');
            })();
        }
    };

    var insertUser = function () {
        $.ajax({
            type: 'POST',
            url: './pages_ajax/insert-user.php',
            data: $form.serialize(),
            complete: function() {
                // loader
            },
            success: function(resp) {
                var errors = resp.res.errors;
                if (errors) {
                    handleError($form, errors);
                }
            },
        });
    };

    $registerBtn.on('click', function () {
        console.log('here');
        insertUser();
    });
};
