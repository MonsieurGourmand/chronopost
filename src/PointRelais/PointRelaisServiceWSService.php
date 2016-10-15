<?php

namespace Chonopost\PointRelais;

class PointRelaisServiceWSService extends \BeSimple\SoapClient\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'pointChronopost' => 'Chonopost\\PointRelais\\pointChronopost',
      'bureauDeTabac' => 'Chonopost\\PointRelais\\bureauDeTabac',
      'bureauDeTabacAvecCoord' => 'Chonopost\\PointRelais\\bureauDeTabacAvecCoord',
      'bureauDeTabacAvecPF' => 'Chonopost\\PointRelais\\bureauDeTabacAvecPF',
      'pointCHRResult' => 'Chonopost\\PointRelais\\pointCHRResult',
      'pointCHR' => 'Chonopost\\PointRelais\\pointCHR',
      'listeHoraireOuverturePourUnJour' => 'Chonopost\\PointRelais\\listeHoraireOuverturePourUnJour',
      'horaireOuverture' => 'Chonopost\\PointRelais\\horaireOuverture',
      'periodeFermeture' => 'Chonopost\\PointRelais\\periodeFermeture',
      'tourneeResult' => 'Chonopost\\PointRelais\\tourneeResult',
      'tournee' => 'Chonopost\\PointRelais\\tournee',
      'tourneeCompleteResult' => 'Chonopost\\PointRelais\\tourneeCompleteResult',
      'tourneeComplete' => 'Chonopost\\PointRelais\\tourneeComplete',
      'recherchePointChronopostParId' => 'Chonopost\\PointRelais\\recherchePointChronopostParId',
      'recherchePointChronopostParIdResponse' => 'Chonopost\\PointRelais\\recherchePointChronopostParIdResponse',
      'rechercheBtAvecPFParIdChronopostA2Pas' => 'Chonopost\\PointRelais\\rechercheBtAvecPFParIdChronopostA2Pas',
      'rechercheBtAvecPFParIdChronopostA2PasResponse' => 'Chonopost\\PointRelais\\rechercheBtAvecPFParIdChronopostA2PasResponse',
      'rechercheBtParIdChronopostA2Pas' => 'Chonopost\\PointRelais\\rechercheBtParIdChronopostA2Pas',
      'rechercheBtParIdChronopostA2PasResponse' => 'Chonopost\\PointRelais\\rechercheBtParIdChronopostA2PasResponse',
      'rechercheDetailPointChronopost' => 'Chonopost\\PointRelais\\rechercheDetailPointChronopost',
      'rechercheDetailPointChronopostResponse' => 'Chonopost\\PointRelais\\rechercheDetailPointChronopostResponse',
      'getAllChronopostAgences' => 'Chonopost\\PointRelais\\getAllChronopostAgences',
      'getAllChronopostAgencesResponse' => 'Chonopost\\PointRelais\\getAllChronopostAgencesResponse',
      'recherchePointChronopostInter' => 'Chonopost\\PointRelais\\recherchePointChronopostInter',
      'recherchePointChronopostInterResponse' => 'Chonopost\\PointRelais\\recherchePointChronopostInterResponse',
      'rechercheTournee' => 'Chonopost\\PointRelais\\rechercheTournee',
      'rechercheTourneeResponse' => 'Chonopost\\PointRelais\\rechercheTourneeResponse',
      'recherchePointChronopostParCoordonneesGeographiques' => 'Chonopost\\PointRelais\\recherchePointChronopostParCoordonneesGeographiques',
      'recherchePointChronopostParCoordonneesGeographiquesResponse' => 'Chonopost\\PointRelais\\recherchePointChronopostParCoordonneesGeographiquesResponse',
      'rechercheDetailPointChronopostInter' => 'Chonopost\\PointRelais\\rechercheDetailPointChronopostInter',
      'rechercheDetailPointChronopostInterResponse' => 'Chonopost\\PointRelais\\rechercheDetailPointChronopostInterResponse',
      'rechercheTourneeParTypeTourneeEtPosteComptable' => 'Chonopost\\PointRelais\\rechercheTourneeParTypeTourneeEtPosteComptable',
      'rechercheTourneeParTypeTourneeEtPosteComptableResponse' => 'Chonopost\\PointRelais\\rechercheTourneeParTypeTourneeEtPosteComptableResponse',
      'rechercheBtAvecPFParCodeproduitEtCodepostalEtDate' => 'Chonopost\\PointRelais\\rechercheBtAvecPFParCodeproduitEtCodepostalEtDate',
      'rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse' => 'Chonopost\\PointRelais\\rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse',
      'recherchePointChronopost' => 'Chonopost\\PointRelais\\recherchePointChronopost',
      'recherchePointChronopostResponse' => 'Chonopost\\PointRelais\\recherchePointChronopostResponse',
      'rechercheBtParCodeproduitEtCodepostalEtDate' => 'Chonopost\\PointRelais\\rechercheBtParCodeproduitEtCodepostalEtDate',
      'rechercheBtParCodeproduitEtCodepostalEtDateResponse' => 'Chonopost\\PointRelais\\rechercheBtParCodeproduitEtCodepostalEtDateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'authentication' => 0,
      'login' => '10564650',
      'password' => 'chronofood',
      'connection_timeout' => 60,
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param recherchePointChronopostParId $parameters
     * @return recherchePointChronopostParIdResponse
     */
    public function recherchePointChronopostParId(recherchePointChronopostParId $parameters)
    {
      return $this->__soapCall('recherchePointChronopostParId', array($parameters));
    }

    /**
     * @param rechercheBtAvecPFParIdChronopostA2Pas $parameters
     * @return rechercheBtAvecPFParIdChronopostA2PasResponse
     */
    public function rechercheBtAvecPFParIdChronopostA2Pas(rechercheBtAvecPFParIdChronopostA2Pas $parameters)
    {
      return $this->__soapCall('rechercheBtAvecPFParIdChronopostA2Pas', array($parameters));
    }

    /**
     * @param rechercheBtParIdChronopostA2Pas $parameters
     * @return rechercheBtParIdChronopostA2PasResponse
     */
    public function rechercheBtParIdChronopostA2Pas(rechercheBtParIdChronopostA2Pas $parameters)
    {
      return $this->__soapCall('rechercheBtParIdChronopostA2Pas', array($parameters));
    }

    /**
     * @param rechercheDetailPointChronopost $parameters
     * @return rechercheDetailPointChronopostResponse
     */
    public function rechercheDetailPointChronopost(rechercheDetailPointChronopost $parameters)
    {
      return $this->__soapCall('rechercheDetailPointChronopost', array($parameters));
    }

    /**
     * @param getAllChronopostAgences $parameters
     * @return getAllChronopostAgencesResponse
     */
    public function getAllChronopostAgences(getAllChronopostAgences $parameters)
    {
      return $this->__soapCall('getAllChronopostAgences', array($parameters));
    }

    /**
     * @param recherchePointChronopostInter $parameters
     * @return recherchePointChronopostInterResponse
     */
    public function recherchePointChronopostInter(recherchePointChronopostInter $parameters)
    {
      return $this->__soapCall('recherchePointChronopostInter', array($parameters));
    }

    /**
     * @param rechercheTournee $parameters
     * @return rechercheTourneeResponse
     */
    public function rechercheTournee(rechercheTournee $parameters)
    {
      return $this->__soapCall('rechercheTournee', array($parameters));
    }

    /**
     * @param recherchePointChronopostParCoordonneesGeographiques $parameters
     * @return recherchePointChronopostParCoordonneesGeographiquesResponse
     */
    public function recherchePointChronopostParCoordonneesGeographiques(recherchePointChronopostParCoordonneesGeographiques $parameters)
    {
      return $this->__soapCall('recherchePointChronopostParCoordonneesGeographiques', array($parameters));
    }

    /**
     * @param rechercheDetailPointChronopostInter $parameters
     * @return rechercheDetailPointChronopostInterResponse
     */
    public function rechercheDetailPointChronopostInter(rechercheDetailPointChronopostInter $parameters)
    {
      return $this->__soapCall('rechercheDetailPointChronopostInter', array($parameters));
    }

    /**
     * @param rechercheTourneeParTypeTourneeEtPosteComptable $parameters
     * @return rechercheTourneeParTypeTourneeEtPosteComptableResponse
     */
    public function rechercheTourneeParTypeTourneeEtPosteComptable(rechercheTourneeParTypeTourneeEtPosteComptable $parameters)
    {
      return $this->__soapCall('rechercheTourneeParTypeTourneeEtPosteComptable', array($parameters));
    }

    /**
     * @param rechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters
     * @return rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse
     */
    public function rechercheBtAvecPFParCodeproduitEtCodepostalEtDate(rechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters)
    {
      return $this->__soapCall('rechercheBtAvecPFParCodeproduitEtCodepostalEtDate', array($parameters));
    }

    /**
     * @param rechercheBtParCodeproduitEtCodepostalEtDate $parameters
     * @return rechercheBtParCodeproduitEtCodepostalEtDateResponse
     */
    public function rechercheBtParCodeproduitEtCodepostalEtDate(rechercheBtParCodeproduitEtCodepostalEtDate $parameters)
    {
      return $this->__soapCall('rechercheBtParCodeproduitEtCodepostalEtDate', array($parameters));
    }

    /**
     * @param recherchePointChronopost $parameters
     * @return recherchePointChronopostResponse
     */
    public function recherchePointChronopost(recherchePointChronopost $parameters)
    {
      return $this->__soapCall('recherchePointChronopost', array($parameters));
    }

}
