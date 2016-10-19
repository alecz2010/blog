$(function(){
    var $form = $('form');
    var $registerBtn = $('#registerBtn');

    $registerBtn.on('click', function(){
        $.ajax({
            type: 'POST',
            url: './include/classes/register.php',
            data: $form.serialize(),
            complete: function() {

            },
            success: function(resp) {
                if (resp == 1) {
                    alert("Account created.");
                }else{
                    alert("Error");
                }
            }
        });
    })
});


$register = new User();

$answer = $register->insert($formInput);


Ajax::output($answer);

public static function output ($response, $code = 20)
{
    header('Content-type: application/json');
    $output = json_encode(array(
                'code'	=> $code,
            'res'	=> $response
));

    if ($GLOBALS['config']->isLive) {
        header('Content-Encoding: gzip');
        $output = gzencode($output);
    }

    echo $output;
    exit();
}