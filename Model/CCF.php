<?php
require "vehicule.php";
/**
 * 
 */
class CCF extends vehicule {

    /**
     * Default constructor
     */
    public function __construct(string $nom, bool $echelle = true) {
    }

    /**
     * @return
     */
    public function sirene(string $pVehicule){
        return "pimpom";
    }
    function se_deplacer(string $pVehicule){
        return " je me déplace trés vite ";
    }

}