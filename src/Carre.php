<?php

namespace Dev\GestionGym;
    
Use Exception;

Class Carree {

    private $cote;

    Public function __construct($cote)
    {

        $this->cote = $cote;

    }

    Public function Surface (){

        Return $this->cote * $this->cote;

    }

    Public function setCote($cote){

        if ($cote < 0){

            Throw new Exception;

        }
        else{

        $this->cote =$cote;
  
    }  }
?>