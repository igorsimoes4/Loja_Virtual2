<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/nova_loja/");
	$config['dbname'] = 'loja_nova';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://localhost/nova_loja/");
	$config['dbname'] = 'nova_loja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

$config['default_lang'] = 'pt-br';
// Informação do Cep da Loja
$config['cep_origin'] = '58400260';
// Informações do Mercado Pago
$config['mp_appid'] = '956245779444163';
$config['mp_key'] = '8rZv2Wr9XLeYZYr8HWEz5UfZB7zmrabr';
// Informações do PayPal
$config['paypal_clientid'] = 'AXb529MX4Dj7MyoBzkiMVdQcEKfMZLgnUvn7IJCQybS9NxYPF1V0F96x4AAhn0E4gF8lSKjh_O3rKOL2';
$config['paypal_secret'] = 'ED91rXKFV3_1wpxBqYElKeHs4vCZKsxkFJN1U6LZcACCl5NoSRJy9OjqKn8TjU-1ZE8dHdTsyEKPvack';
// Informações do GerenciaNet
$config['gerencianet_clientid'] = 'Client_Id_fed67adb9ce5dd1bd979733e465f3b522bdd468e';
$config['gerencianet_clientsecret'] = 'Client_Secret_a69e33b2fbf28f14c9d20d7369b7d4eb7f4cbf96';
$config['gerencianet_sandbox'] = true;
// Informação do PagSeguro
$config['pagseguro_seller'] = 'igor01silveira@gmail.com';

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("NovaLoja")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("NovaLoja")->setRelease("1.0.0");

\PagSeguro\Configuration\Configure::setEnvironment('sandbox');
\PagSeguro\Configuration\Configure::setAccountCredentials('igor01silveira@gmail.com', 'C2FFA0D898124BEC99EEA6535AB6B081');
\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog(true, 'pagseguro.log');

?>