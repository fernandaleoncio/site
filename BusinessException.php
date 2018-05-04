<?php
namespace teste\Exception;
 class BusinessException extends Exception{
     private $id;

     public function __construct($id=0,$message = NULL){
         parent::__construct($message);
         $this->id = $id;
         
     }
     public function getId(){
         return $this->id;
     }
 }