<?php
//Lista de tokens
$valid_tokens = array(
    'e635633ef030a6729f9452f061868965e4d6cd94bd246e5e6c1901cf4f91e17a', 
    'e635633ef030a6729f9452f061868965e4d6cd94bd246e5e6c1901v6a41bwab1', 
    'da5s4da6w430a6729f9452f061868965e4d6cd94bd246e5e6c1901cf4f91e17a'
);

//POST request
$input = json_decode(file_get_contents('php://input'), true);
$token = isset($input['token']) ? $input['token'] : '';

//Verify token
if (in_array($token, $valid_tokens)) {
    echo 'Token valido';
} else {
    echo 'Token invalido';
}
echo "Bla bla bla";