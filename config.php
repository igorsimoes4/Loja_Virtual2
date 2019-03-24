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
	$config['dbpass'] = 'root';
}

$config['default_lang'] = 'pt-br';
// Informação do Cep da Loja
$config['cep_origin'] = '58400260';
// Informações do Mercado Pago
$config['mp_appid'] = /* Colar a sua App ID do Mercado Pago */;
$config['mp_key'] = /* Colar a sua Secret Key do Mercado Pago */;
// Informação do PagSeguro
$config['pagseguro_seller'] = 'igor01silveira@gmail.com';

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("NovaLoja")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("NovaLoja")->setRelease("1.0.0");

\PagSeguro\Configuration\Configure::setEnvironment('sandbox');
\PagSeguro\Configuration\Configure::setAccountCredentials(/* Colar a seu Email do PagSeguro */, /* Colar a sua Secret Key do PagSeguro */);
\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog(true, 'pagseguro.log');

?>