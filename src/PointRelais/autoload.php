<?php


 function autoload_b965dc679b3809d50aed5e88ff09ae55($class)
{
    $classes = array(
        'Chronopost\PointRelais\PointRelaisServiceWSService' => __DIR__ .'/PointRelaisServiceWSService.php',
        'Chronopost\PointRelais\pointChronopost' => __DIR__ .'/pointChronopost.php',
        'Chronopost\PointRelais\bureauDeTabac' => __DIR__ .'/bureauDeTabac.php',
        'Chronopost\PointRelais\bureauDeTabacAvecCoord' => __DIR__ .'/bureauDeTabacAvecCoord.php',
        'Chronopost\PointRelais\bureauDeTabacAvecPF' => __DIR__ .'/bureauDeTabacAvecPF.php',
        'Chronopost\PointRelais\pointCHRResult' => __DIR__ .'/pointCHRResult.php',
        'Chronopost\PointRelais\pointCHR' => __DIR__ .'/pointCHR.php',
        'Chronopost\PointRelais\listeHoraireOuverturePourUnJour' => __DIR__ .'/listeHoraireOuverturePourUnJour.php',
        'Chronopost\PointRelais\horaireOuverture' => __DIR__ .'/horaireOuverture.php',
        'Chronopost\PointRelais\periodeFermeture' => __DIR__ .'/periodeFermeture.php',
        'Chronopost\PointRelais\tourneeResult' => __DIR__ .'/tourneeResult.php',
        'Chronopost\PointRelais\tournee' => __DIR__ .'/tournee.php',
        'Chronopost\PointRelais\tourneeCompleteResult' => __DIR__ .'/tourneeCompleteResult.php',
        'Chronopost\PointRelais\tourneeComplete' => __DIR__ .'/tourneeComplete.php',
        'Chronopost\PointRelais\recherchePointChronopostParId' => __DIR__ .'/recherchePointChronopostParId.php',
        'Chronopost\PointRelais\recherchePointChronopostParIdResponse' => __DIR__ .'/recherchePointChronopostParIdResponse.php',
        'Chronopost\PointRelais\rechercheBtAvecPFParIdChronopostA2Pas' => __DIR__ .'/rechercheBtAvecPFParIdChronopostA2Pas.php',
        'Chronopost\PointRelais\rechercheBtAvecPFParIdChronopostA2PasResponse' => __DIR__ .'/rechercheBtAvecPFParIdChronopostA2PasResponse.php',
        'Chronopost\PointRelais\rechercheBtParIdChronopostA2Pas' => __DIR__ .'/rechercheBtParIdChronopostA2Pas.php',
        'Chronopost\PointRelais\rechercheBtParIdChronopostA2PasResponse' => __DIR__ .'/rechercheBtParIdChronopostA2PasResponse.php',
        'Chronopost\PointRelais\rechercheDetailPointChronopost' => __DIR__ .'/rechercheDetailPointChronopost.php',
        'Chronopost\PointRelais\rechercheDetailPointChronopostResponse' => __DIR__ .'/rechercheDetailPointChronopostResponse.php',
        'Chronopost\PointRelais\getAllChronopostAgences' => __DIR__ .'/getAllChronopostAgences.php',
        'Chronopost\PointRelais\getAllChronopostAgencesResponse' => __DIR__ .'/getAllChronopostAgencesResponse.php',
        'Chronopost\PointRelais\recherchePointChronopostInter' => __DIR__ .'/recherchePointChronopostInter.php',
        'Chronopost\PointRelais\recherchePointChronopostInterResponse' => __DIR__ .'/recherchePointChronopostInterResponse.php',
        'Chronopost\PointRelais\rechercheTournee' => __DIR__ .'/rechercheTournee.php',
        'Chronopost\PointRelais\rechercheTourneeResponse' => __DIR__ .'/rechercheTourneeResponse.php',
        'Chronopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques' => __DIR__ .'/recherchePointChronopostParCoordonneesGeographiques.php',
        'Chronopost\PointRelais\recherchePointChronopostParCoordonneesGeographiquesResponse' => __DIR__ .'/recherchePointChronopostParCoordonneesGeographiquesResponse.php',
        'Chronopost\PointRelais\rechercheDetailPointChronopostInter' => __DIR__ .'/rechercheDetailPointChronopostInter.php',
        'Chronopost\PointRelais\rechercheDetailPointChronopostInterResponse' => __DIR__ .'/rechercheDetailPointChronopostInterResponse.php',
        'Chronopost\PointRelais\rechercheTourneeParTypeTourneeEtPosteComptable' => __DIR__ .'/rechercheTourneeParTypeTourneeEtPosteComptable.php',
        'Chronopost\PointRelais\rechercheTourneeParTypeTourneeEtPosteComptableResponse' => __DIR__ .'/rechercheTourneeParTypeTourneeEtPosteComptableResponse.php',
        'Chronopost\PointRelais\rechercheBtAvecPFParCodeproduitEtCodepostalEtDate' => __DIR__ .'/rechercheBtAvecPFParCodeproduitEtCodepostalEtDate.php',
        'Chronopost\PointRelais\rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse' => __DIR__ .'/rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse.php',
        'Chronopost\PointRelais\recherchePointChronopost' => __DIR__ .'/recherchePointChronopost.php',
        'Chronopost\PointRelais\recherchePointChronopostResponse' => __DIR__ .'/recherchePointChronopostResponse.php',
        'Chronopost\PointRelais\rechercheBtParCodeproduitEtCodepostalEtDate' => __DIR__ .'/rechercheBtParCodeproduitEtCodepostalEtDate.php',
        'Chronopost\PointRelais\rechercheBtParCodeproduitEtCodepostalEtDateResponse' => __DIR__ .'/rechercheBtParCodeproduitEtCodepostalEtDateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b965dc679b3809d50aed5e88ff09ae55');

// Do nothing. The rest is just leftovers from the code generation.
{
}
