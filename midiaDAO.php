<?php


namespace    teste\DAO;

use teste\Util\SakilaConnection;
use teste\Model\Film;

class MidiaDAO{
//listrar todos as midias
    public function listAll(){
        //faz conexão com o banco de dados atravez do :: getconection
        $conn = MidiaConnection::getconnection();
        //seleciona toda tabela midia
        $midiasResult = $conn->query("select * from midia");
        //cria um array para listar as midias
        $midiaList = array();

         
        for ($i=0; $i<$midiasResult->num_rows; $i++){
            $midiasResult->data_seek($i);
            $row = $midiasResult->fetch_assoc();
            $midia = new Midia();
            $midia->type = $row['type'];
            $midia->thumbnail =$row['thumbnail'];
            $midia->file=$row['file'];
            $midia->category=$row['category'];
            $midia->title=$row['title'];
            $midia->description=$row['description'];

            array_push($midiaList,$midia);
        }
        return $midiaList;

    }
    public function findByCategory($category){
        $conn = MidiaConnection::getconnection(); 

        $midiasResult = $conn->query("select * from  where category = " .$category);

        $midiasResult->data_seek(0);
        $row = $midiasResult->fetch_assoc();
        $midia = new Midia();
        $midia->category = $row['category'];
        $midia->type = $row['type'];
        $midia->thumbnail =$row['thumbnail'];
        $midia->file=$row['file'];
        $midia->title=$row['title'];
        $midia->description=$row['description'];
        
        return $midia;
    }

   
}