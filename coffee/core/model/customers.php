<?php
namespace App\Core;
class Customers
{
   public $ID_customer;
   public $Name_customer;
   public $location;
   public $ID_saff; 
   public function __construct($ID_customer,$Name_customer,$location,$ID_saffx)
   {
       $this->ID_customer = $ID_customer;
       $this->Name_customer = $Name_customer;
       $this->location = $location;
       $this->ID_saff;
   }
}