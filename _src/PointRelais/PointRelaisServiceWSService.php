<?php

namespace Chronopost\PointRelais;

class PointRelaisServiceWSService extends \BeSimple\SoapClient\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'pointChronopost' => 'Chronopost\\PointRelais\\pointChronopost',
      'bureauDeTabac' => 'Chronopost\\PointRelais\\bureauDeTabac',
      'bureauDeTabacAvecCoord' => 'Chronopost\\PointRelais\\bureauDeTabacAvecCoord',
      'bureauDeTabacAvecPF' => 'Chronopost\\PointRelais\\bureauDeTabacAvecPF',
      'pointCHRResult' => 'Chronopost\\PointRelais\\pointCHRResult',
      'pointCHR' => 'Chronopost\\PointRelais\\pointCHR',
      'listeHoraireOuverturePourUnJour' => 'Chronopost\\PointRelais\\listeHoraireOuverturePourUnJour',
      'horaireOuverture' => 'Chronopost\\PointRelais\\horaireOuverture',
      'periodeFermeture' => 'Chronopost\\PointRelais\\periodeFermeture',
      'tourneeResult' => 'Chronopost\\PointRelais\\tourneeResult',
      'tournee' => 'Chronopost\\PointRelais\\tournee',
      'tourneeCompleteResult' => 'Chronopost\\PointRelais\\tourneeCompleteResult',
      'tourneeComplete' => 'Chronopost\\PointRelais\\tourneeComplete',
      'recherchePointChronopostParId' => 'Chronopost\\PointRelais\\recherchePointChronopostParId',
      'recherchePointChronopostParIdResponse' => 'Chronopost\\PointRelais\\recherchePointChronopostParIdResponse',
      'rechercheBtAvecPFParIdChronopostA2Pas' => 'Chronopost\\PointRelais\\rechercheBtAvecPFParIdChronopostA2Pas',
      'rechercheBtAvecPFParIdChronopostA2PasResponse' => 'Chronopost\\PointRelais\\rechercheBtAvecPFParIdChronopostA2PasResponse',
      'rechercheBtParIdChronopostA2Pas' => 'Chronopost\\PointRelais\\rechercheBtParIdChronopostA2Pas',
      'rechercheBtParIdChronopostA2PasResponse' => 'Chronopost\\PointRelais\\rechercheBtParIdChronopostA2PasResponse',
      'rechercheDetailPointChronopost' => 'Chronopost\\PointRelais\\rechercheDetailPointChronopost',
      'rechercheDetailPointChronopostResponse' => 'Chronopost\\PointRelais\\rechercheDetailPointChronopostResponse',
      'getAllChronopostAgences' => 'Chronopost\\PointRelais\\getAllChronopostAgences',
      'getAllChronopostAgencesResponse' => 'Chronopost\\PointRelais\\getAllChronopostAgencesResponse',
      'recherchePointChronopostInter' => 'Chronopost\\PointRelais\\recherchePointChronopostInter',
      'recherchePointChronopostInterResponse' => 'Chronopost\\PointRelais\\recherchePointChronopostInterResponse',
      'rechercheTournee' => 'Chronopost\\PointRelais\\rechercheTournee',
      'rechercheTourneeResponse' => 'Chronopost\\PointRelais\\rechercheTourneeResponse',
      'recherchePointChronopostParCoordonneesGeographiques' => 'Chronopost\\PointRelais\\recherchePointChronopostParCoordonneesGeographiques',
      'recherchePointChronopostParCoordonneesGeographiquesResponse' => 'Chronopost\\PointRelais\\recherchePointChronopostParCoordonneesGeographiquesResponse',
      'rechercheDetailPointChronopostInter' => 'Chronopost\\PointRelais\\rechercheDetailPointChronopostInter',
      'rechercheDetailPointChronopostInterResponse' => 'Chronopost\\PointRelais\\rechercheDetailPointChronopostInterResponse',
      'rechercheTourneeParTypeTourneeEtPosteComptable' => 'Chronopost\\PointRelais\\rechercheTourneeParTypeTourneeEtPosteComptable',
      'rechercheTourneeParTypeTourneeEtPosteComptableResponse' => 'Chronopost\\PointRelais\\rechercheTourneeParTypeTourneeEtPosteComptableResponse',
      'rechercheBtAvecPFParCodeproduitEtCodepostalEtDate' => 'Chronopost\\PointRelais\\rechercheBtAvecPFParCodeproduitEtCodepostalEtDate',
      'rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse' => 'Chronopost\\PointRelais\\rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse',
      'recherchePointChronopost' => 'Chronopost\\PointRelais\\recherchePointChronopost',
      'recherchePointChronopostResponse' => 'Chronopost\\PointRelais\\recherchePointChronopostResponse',
      'rechercheBtParCodeproduitEtCodepostalEtDate' => 'Chronopost\\PointRelais\\rechercheBtParCodeproduitEtCodepostalEtDate',
      'rechercheBtParCodeproduitEtCodepostalEtDateResponse' => 'Chronopost\\PointRelais\\rechercheBtParCodeproduitEtCodepostalEtDateResponse',
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
