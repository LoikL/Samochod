<?php 
 class Samochod
{
         private $marka;
         private $model;
         private $kolor;
         private $typ;
        
            
 function __construct()
         {
             $this->marka = 'Honda';
             $this->model = 'Accord';
             $this->kolor = 'blue';
             $this->typ = 'R';

             
         }
     public fuction helloSamochod()
     {
         
         return "Witaj! To ja  - Twoj samochod: $this->marka  $this->model  $this->color $this->typ ";
        }
 }
?>