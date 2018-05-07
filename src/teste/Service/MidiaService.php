<?php
namespace teste\Service;

use teste\DAO\MidiaDAO;
use teste\Exception\BusinessException;

class MidiaService {
    private $midiaDAO;

    public function __construct(){
        $this->midiaDAO = new midiaDAO();
    }
    
    public function listAll(){
        return $this->midiaDAO->listAll();
    }


}