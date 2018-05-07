<?php
namespace    teste\Model;
class Midia{
    //atributos
    public $type;
    public $thumbnail;
    public $file;
    public $category;
    public $title;
    public $description;
    
    private function getMidiaAPI(){
        $url = "https://private-7cf60-4youseesocialtest.apiary-mock.com/timeline";
        $json = file_get_contents($url);
        $data = json_decode($json);

        $array = array();
        foreach($data ->itens as $item){
           echo $array;
        }
    }
  
}
