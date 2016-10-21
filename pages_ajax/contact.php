<?php
require_once '../init.php';
require_once APPLICATION_PATH . '/config/config.php';

$inputs = $_POST['input'];

Application::__autoload('Contact');

$result = Contact::contactUs($inputs) ? "success" : "failed";

Ajax::output($result);