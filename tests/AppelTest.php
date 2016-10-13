<?php
namespace RegistreCoproprietes;
use GuzzleHttp\Psr7\Stream;
class AppelTest extends \PHPUnit_Framework_TestCase{
    public function testValid()
    {
        $api = new Api(\BootstrapPhpunit::getClient(), null, null, \BootstrapPhpunit::getClient());
        $immatriculation = new Immatriculation();
        $immatriculation
            ->setNumTeledeclarant(26)
            ->setAdresseEmailUtilisateur('copromatic.test@sicopro.fr')
        ;
        $immatriculation->setDonneesFinancières(new DonneesFinancieres());
        $immatriculation->setDonneesTechniques(new DonneesTechniques());
        $immatriculation->setProcedures(new Procedures());
        $immatriculation->setIdentification(new Identification());
        $response = $api->immatriculation($immatriculation);
        dump($response);exit;
    }
}