@ssh -i ../private.key ubuntu@192.168.56.10 "cd /share/www/.dev/smartketer/_resurse/unit-testing && printf '\nPHP tests\n' && phpunit --bootstrap init-php-tests.php ./php && cd ./js && printf '\n\nJS tests\n' && jasmine"
@pause