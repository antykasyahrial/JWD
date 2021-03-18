<?php
    // Require the Composer autoloader.
    require 'vendor/autoload.php';

    use Bcrypt\Bcrypt;

    // Instantiate an Bcrypt instance.
    $bcrypt = new Bcrypt();

    //Encrypt the plaintext
    $plaintext = 'password';

    //Set the Bcrypt Version, default is '2y'
    $bcrypt_version = '2a';

    $ciphertext = $bcrypt->encrypt($plaintext,$bcrypt_version);
    print_r("\n Plaintext:".$plaintext);
    print_r("\n Ciphertext:".$ciphertext);

    //Verify the plaintext and ciphertext
    if($bcrypt->verify($plaintext, $ciphertext)){
        print_r("\n Password verified!");
    }else{
        print_r("\n Password not match!");
}