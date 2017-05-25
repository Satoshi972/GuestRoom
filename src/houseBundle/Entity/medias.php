<?php

namespace houseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * medias
 *
 * @ORM\Table(name="medias")
 * @ORM\Entity(repositoryClass="houseBundle\Repository\mediasRepository")
 */
class medias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="house", inversedBy="medias")
     * @ORM\JoinColumn(name="house_id", referencedColumnName="id")
     */
    private $house;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return medias
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return medias
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set house
     *
     * @param \houseBundle\Entity\house $house
     *
     * @return medias
     */
    public function setHouse(\houseBundle\Entity\house $house = null)
    {
        $this->house = $house;
    
        return $this;
    }

    /**
     * Get house
     *
     * @return \houseBundle\Entity\house
     */
    public function getHouse()
    {
        return $this->house;
    }
}
