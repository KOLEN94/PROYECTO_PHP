<?php
// se implementa en nombre
namespace App\Models;

require_once 'app/Models/Printable.php';


class BaseElement implements Printable{
  private $title;
  public $description;
  public $visible = true;
  public $months;

  //Contructor
  public function __construct($title, $description){
    $this->setTitle($title);
    $this->description = $description;
  }
  //Validar titulo vacio
  public function setTitle($t){
    if($t == ''){
      $this->title = 'N/A';
    }else {
      $this->title = $t;
    }
  }

  public function getTitle() {
    return $this->title;
  }
  //Metodo de meses a string
  public function getDurationAsString() {
    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;
      if ($years<=0) {
        // code...
        return "$extraMonths meses";
      }if($extraMonths==0){
        return "$years años";
      }
      else {
        return "$years años $extraMonths meses";
      }
    
  }
  public function getDescription(){
    return $this->description;
  }
}