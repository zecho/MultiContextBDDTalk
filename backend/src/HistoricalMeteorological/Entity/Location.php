<?php

namespace HistoricalMeteorological\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;

/**
 * @Entity
 * @Table(name="locations")
 */
class Location
{
    /**
     * @Id
     * @Column(type="string", name="id")
     * @var string
     */
    private $id;

    /**
     * @Column(type="string")
     * @var string
     */
    private $name;

    /**
     * @Column(type="float")
     * @var float
     */
    private $latitude;

    /**
     * @Column(type="float")
     * @var float
     */
    private $longitude;

    /**
     * @Column(type="integer", name="amsl")
     * @var int
     */
    private $distanceAboveMeanSeaLevel;

    /**
     * @return string
     */
    public function getId():string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Location
     */
    public function setId(string $id):Location
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Location
     */
    public function setName(string $name):Location
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude():float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Location
     */
    public function setLatitude(float $latitude):Location
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude():float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Location
     */
    public function setLongitude(float $longitude):Location
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistanceAboveMeanSeaLevel():int
    {
        return $this->distanceAboveMeanSeaLevel;
    }

    /**
     * @param int $distanceAboveMeanSeaLevel
     * @return Location
     */
    public function setDistanceAboveMeanSeaLevel(int $distanceAboveMeanSeaLevel):Location
    {
        $this->distanceAboveMeanSeaLevel = $distanceAboveMeanSeaLevel;
        return $this;
    }


}
