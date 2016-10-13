<?php
$loader = require_once __DIR__ . '/../vendor/autoload.php';
$loader->add('Maileva\\', __DIR__.'/Elements/');
define('REGISTRE_BASE_URI', getenv('REGISTRE_BASE_URI'));
define('REGISTRE_KEY_PATH', getenv('REGISTRE_KEY_PATH'));
define('REGISTRE_CERTIFICATE_PATH', getenv('REGISTRE_CERTIFICATE_PATH'));
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use GuzzleHttp\Client;
class BootstrapPhpunit{
    protected static $client = null;
    
    public static function getClient()
    {
        if(!self::$client) {
            $config = [
                'base_uri'  => \RegistreCoproprietes\Api::URL_TEST,
                'ssl_key'   => REGISTRE_KEY_PATH,
                'cert'      => REGISTRE_CERTIFICATE_PATH
            ];
            if(!REGISTRE_KEY_PATH){
                throw new PHPUnit_Runner_Exception('Le paramètre d\'environnement REGISTRE_KEY_PATH n\'est pas spécifié');
            }
            if(!REGISTRE_CERTIFICATE_PATH){
                throw new PHPUnit_Runner_Exception('Le paramètre d\'environnement REGISTRE_CERTIFICATE_PATH n\'est pas spécifié');
            }
            $client = new Client($config);
            self::$client = new GuzzleAdapter($client);
        }
        return self::$client;
    }
}