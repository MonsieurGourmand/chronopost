<?php

namespace Chonopost\PointRelais;

class bureauDeTabacAvecPF extends bureauDeTabacAvecCoord
{

    /**
     * @var \DateTime $periodeDeFermeture1Debut
     */
    protected $periodeDeFermeture1Debut = null;

    /**
     * @var \DateTime $periodeDeFermeture1Fin
     */
    protected $periodeDeFermeture1Fin = null;

    /**
     * @var \DateTime $periodeDeFermeture2Debut
     */
    protected $periodeDeFermeture2Debut = null;

    /**
     * @var \DateTime $periodeDeFermeture2Fin
     */
    protected $periodeDeFermeture2Fin = null;

    /**
     * @var \DateTime $periodeDeFermeture3Debut
     */
    protected $periodeDeFermeture3Debut = null;

    /**
     * @var \DateTime $periodeDeFermeture3Fin
     */
    protected $periodeDeFermeture3Fin = null;

    /**
     * @param float $coordGeoLatitude
     * @param float $coordGeoLongitude
     */
    public function __construct($coordGeoLatitude, $coordGeoLongitude)
    {
      parent::__construct($coordGeoLatitude, $coordGeoLongitude);
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeDeFermeture1Debut()
    {
      if ($this->periodeDeFermeture1Debut == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->periodeDeFermeture1Debut);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $periodeDeFermeture1Debut
     * @return \Chonopost\PointRelais\bureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture1Debut(\DateTime $periodeDeFermeture1Debut = null)
    {
      if ($periodeDeFermeture1Debut == null) {
       $this->periodeDeFermeture1Debut = null;
      } else {
        $this->periodeDeFermeture1Debut = $periodeDeFermeture1Debut->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeDeFermeture1Fin()
    {
      if ($this->periodeDeFermeture1Fin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->periodeDeFermeture1Fin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $periodeDeFermeture1Fin
     * @return \Chonopost\PointRelais\bureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture1Fin(\DateTime $periodeDeFermeture1Fin = null)
    {
      if ($periodeDeFermeture1Fin == null) {
       $this->periodeDeFermeture1Fin = null;
      } else {
        $this->periodeDeFermeture1Fin = $periodeDeFermeture1Fin->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeDeFermeture2Debut()
    {
      if ($this->periodeDeFermeture2Debut == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->periodeDeFermeture2Debut);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $periodeDeFermeture2Debut
     * @return \Chonopost\PointRelais\bureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture2Debut(\DateTime $periodeDeFermeture2Debut = null)
    {
      if ($periodeDeFermeture2Debut == null) {
       $this->periodeDeFermeture2Debut = null;
      } else {
        $this->periodeDeFermeture2Debut = $periodeDeFermeture2Debut->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeDeFermeture2Fin()
    {
      if ($this->periodeDeFermeture2Fin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->periodeDeFermeture2Fin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $periodeDeFermeture2Fin
     * @return \Chonopost\PointRelais\bureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture2Fin(\DateTime $periodeDeFermeture2Fin = null)
    {
      if ($periodeDeFermeture2Fin == null) {
       $this->periodeDeFermeture2Fin = null;
      } else {
        $this->periodeDeFermeture2Fin = $periodeDeFermeture2Fin->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeDeFermeture3Debut()
    {
      if ($this->periodeDeFermeture3Debut == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->periodeDeFermeture3Debut);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $periodeDeFermeture3Debut
     * @return \Chonopost\PointRelais\bureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture3Debut(\DateTime $periodeDeFermeture3Debut = null)
    {
      if ($periodeDeFermeture3Debut == null) {
       $this->periodeDeFermeture3Debut = null;
      } else {
        $this->periodeDeFermeture3Debut = $periodeDeFermeture3Debut->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeDeFermeture3Fin()
    {
      if ($this->periodeDeFermeture3Fin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->periodeDeFermeture3Fin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $periodeDeFermeture3Fin
     * @return \Chonopost\PointRelais\bureauDeTabacAvecPF
     */
    public function setPeriodeDeFermeture3Fin(\DateTime $periodeDeFermeture3Fin = null)
    {
      if ($periodeDeFermeture3Fin == null) {
       $this->periodeDeFermeture3Fin = null;
      } else {
        $this->periodeDeFermeture3Fin = $periodeDeFermeture3Fin->format(\DateTime::ATOM);
      }
      return $this;
    }

}
