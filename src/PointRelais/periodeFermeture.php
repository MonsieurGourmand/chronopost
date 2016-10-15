<?php

namespace Chonopost\PointRelais;

class periodeFermeture
{

    /**
     * @var \DateTime $calendarDeDebut
     */
    protected $calendarDeDebut = null;

    /**
     * @var \DateTime $calendarDeFin
     */
    protected $calendarDeFin = null;

    /**
     * @var int $numero
     */
    protected $numero = null;

    /**
     * @param int $numero
     */
    public function __construct($numero)
    {
      $this->numero = $numero;
    }

    /**
     * @return \DateTime
     */
    public function getCalendarDeDebut()
    {
      if ($this->calendarDeDebut == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->calendarDeDebut);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $calendarDeDebut
     * @return \Chonopost\PointRelais\periodeFermeture
     */
    public function setCalendarDeDebut(\DateTime $calendarDeDebut = null)
    {
      if ($calendarDeDebut == null) {
       $this->calendarDeDebut = null;
      } else {
        $this->calendarDeDebut = $calendarDeDebut->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCalendarDeFin()
    {
      if ($this->calendarDeFin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->calendarDeFin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $calendarDeFin
     * @return \Chonopost\PointRelais\periodeFermeture
     */
    public function setCalendarDeFin(\DateTime $calendarDeFin = null)
    {
      if ($calendarDeFin == null) {
       $this->calendarDeFin = null;
      } else {
        $this->calendarDeFin = $calendarDeFin->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getNumero()
    {
      return $this->numero;
    }

    /**
     * @param int $numero
     * @return \Chonopost\PointRelais\periodeFermeture
     */
    public function setNumero($numero)
    {
      $this->numero = $numero;
      return $this;
    }

}
