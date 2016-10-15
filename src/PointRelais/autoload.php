<?php


 function autoload_f17c5c34ddd0a3240c6bb12188906277($class)
{
    $classes = array(
        'Chonopost\PointRelais\PointRelaisServiceWSService' => __DIR__ .'/PointRelaisServiceWSService.php',
        'Chonopost\PointRelais\pointChronopost' => __DIR__ .'/pointChronopost.php',
        'Chonopost\PointRelais\bureauDeTabac' => __DIR__ .'/bureauDeTabac.php',
        'Chonopost\PointRelais\bureauDeTabacAvecCoord' => __DIR__ .'/bureauDeTabacAvecCoord.php',
        'Chonopost\PointRelais\bureauDeTabacAvecPF' => __DIR__ .'/bureauDeTabacAvecPF.php',
        'Chonopost\PointRelais\pointCHRResult' => __DIR__ .'/pointCHRResult.php',
        'Chonopost\PointRelais\pointCHR' => __DIR__ .'/pointCHR.php',
        'Chonopost\PointRelais\listeHoraireOuverturePourUnJour' => __DIR__ .'/listeHoraireOuverturePourUnJour.php',
        'Chonopost\PointRelais\horaireOuverture' => __DIR__ .'/horaireOuverture.php',
        'Chonopost\PointRelais\periodeFermeture' => __DIR__ .'/periodeFermeture.php',
        'Chonopost\PointRelais\tourneeResult' => __DIR__ .'/tourneeResult.php',
        'Chonopost\PointRelais\tournee' => __DIR__ .'/tournee.php',
        'Chonopost\PointRelais\tourneeCompleteResult' => __DIR__ .'/tourneeCompleteResult.php',
        'Chonopost\PointRelais\tourneeComplete' => __DIR__ .'/tourneeComplete.php',
        'Chonopost\PointRelais\recherchePointChronopostParId' => __DIR__ .'/recherchePointChronopostParId.php',
        'Chonopost\PointRelais\recherchePointChronopostParIdResponse' => __DIR__ .'/recherchePointChronopostParIdResponse.php',
        'Chonopost\PointRelais\rechercheBtAvecPFParIdChronopostA2Pas' => __DIR__ .'/rechercheBtAvecPFParIdChronopostA2Pas.php',
        'Chonopost\PointRelais\rechercheBtAvecPFParIdChronopostA2PasResponse' => __DIR__ .'/rechercheBtAvecPFParIdChronopostA2PasResponse.php',
        'Chonopost\PointRelais\rechercheBtParIdChronopostA2Pas' => __DIR__ .'/rechercheBtParIdChronopostA2Pas.php',
        'Chonopost\PointRelais\rechercheBtParIdChronopostA2PasResponse' => __DIR__ .'/rechercheBtParIdChronopostA2PasResponse.php',
        'Chonopost\PointRelais\rechercheDetailPointChronopost' => __DIR__ .'/rechercheDetailPointChronopost.php',
        'Chonopost\PointRelais\rechercheDetailPointChronopostResponse' => __DIR__ .'/rechercheDetailPointChronopostResponse.php',
        'Chonopost\PointRelais\getAllChronopostAgences' => __DIR__ .'/getAllChronopostAgences.php',
        'Chonopost\PointRelais\getAllChronopostAgencesResponse' => __DIR__ .'/getAllChronopostAgencesResponse.php',
        'Chonopost\PointRelais\recherchePointChronopostInter' => __DIR__ .'/recherchePointChronopostInter.php',
        'Chonopost\PointRelais\recherchePointChronopostInterResponse' => __DIR__ .'/recherchePointChronopostInterResponse.php',
        'Chonopost\PointRelais\rechercheTournee' => __DIR__ .'/rechercheTournee.php',
        'Chonopost\PointRelais\rechercheTourneeResponse' => __DIR__ .'/rechercheTourneeResponse.php',
        'Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques' => __DIR__ .'/recherchePointChronopostParCoordonneesGeographiques.php',
        'Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiquesResponse' => __DIR__ .'/recherchePointChronopostParCoordonneesGeographiquesResponse.php',
        'Chonopost\PointRelais\rechercheDetailPointChronopostInter' => __DIR__ .'/rechercheDetailPointChronopostInter.php',
        'Chonopost\PointRelais\rechercheDetailPointChronopostInterResponse' => __DIR__ .'/rechercheDetailPointChronopostInterResponse.php',
        'Chonopost\PointRelais\rechercheTourneeParTypeTourneeEtPosteComptable' => __DIR__ .'/rechercheTourneeParTypeTourneeEtPosteComptable.php',
        'Chonopost\PointRelais\rechercheTourneeParTypeTourneeEtPosteComptableResponse' => __DIR__ .'/rechercheTourneeParTypeTourneeEtPosteComptableResponse.php',
        'Chonopost\PointRelais\rechercheBtAvecPFParCodeproduitEtCodepostalEtDate' => __DIR__ .'/rechercheBtAvecPFParCodeproduitEtCodepostalEtDate.php',
        'Chonopost\PointRelais\rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse' => __DIR__ .'/rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse.php',
        'Chonopost\PointRelais\recherchePointChronopost' => __DIR__ .'/recherchePointChronopost.php',
        'Chonopost\PointRelais\recherchePointChronopostResponse' => __DIR__ .'/recherchePointChronopostResponse.php',
        'Chonopost\PointRelais\rechercheBtParCodeproduitEtCodepostalEtDate' => __DIR__ .'/rechercheBtParCodeproduitEtCodepostalEtDate.php',
        'Chonopost\PointRelais\rechercheBtParCodeproduitEtCodepostalEtDateResponse' => __DIR__ .'/rechercheBtParCodeproduitEtCodepostalEtDateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f17c5c34ddd0a3240c6bb12188906277');

// Do nothing. The rest is just leftovers from the code generation.
{
}
