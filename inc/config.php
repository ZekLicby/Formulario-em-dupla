<?php 

define('MYSQL_OPTIONS',[
    'db_host' => 'localhost',
    'db_name' => 'usuario',
    'db_user' => 'test_db',
    'db_pass' => 'yiFe5ER54uQe',
    'db_char' => 'utf8',

]);

/* define('AES_KEY', 'YmvF7r6p7ifBW9wRvtlBUeYZTkt83xYC');
define('AES_IV', 'qll4I1mzpcw1PTaL'); */

// to encrypt
/* function aes_encrypt($valor)
{
    return bin2hex(openssl_encrypt($valor, 'aes-256-cbc', AES_KEY,OPENSSL_RAW_DATA,AES_IV));
} */

// to decrypt
/* function aes_decrypt($hash)
{
    //verificar se a harsh é valida 
    if(strlen($hash) % 2 != 0){
        return -1;
    }
    
    return openssl_decrypt(hex2bin($hash),'aes-256-cbc', AES_KEY,OPENSSL_RAW_DATA,AES_IV);
}
 */