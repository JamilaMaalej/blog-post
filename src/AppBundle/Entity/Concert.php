<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of concert
 *
 * @author admin
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * @ORM\Entity
 * @ORM\Table
 */
class Concert {
    //put your code here
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
           private $id;
    /**
     * @ORM\Column(length=255, unique=true)
     * @Gedmo\Slug(fields={"nom"}, updatable=true)
     */
    protected $slug;

    /**
     * @ORM\Column
     */
    private $nom;

    /**
     * @ORM\Column
     */
    private $nbrplace;

    
   /**
     * @ORM\Column(type="text")
     */
    private $organisateur;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;


     public function __construct()
    {
        $this->date = new \Datetime();
    }
 function getId() {

        return $this->id;
    }


    function getNom() {

        return $this->nom;
    }

    function getNbrplace() {
        return $this->nbrplace;
    }

    function getOrganisateur() {
        return $this->organisateur;
    }

    function getDate() {
        return $this->date;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setNbrplace($nbrplace) {
        $this->nbrplace = $nbrplace;
    }

    function setOrganisateur($organisateur) {
        $this->organisateur = $organisateur;
    }

    function setDate($date) {
        $this->date = $date;
    }

 

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Concert
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
