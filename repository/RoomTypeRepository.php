<?php

require("./domain/RoomType.php");

class RoomTypeRepository{


    public function findAll(){
        $db=null;
        $RoomTypeList=array();
        try{
            $db = new PDO('mysql:host=localhost;dbname=jikkyo_pension', 'jikkyo', 'pass');
            $q=$db->query('SELECT * FROM room_type;');
            while($row = $q->fetch()){
                $RoomType = new RoomType;
                $RoomType->setType_id($row["type_id"]);
                $RoomType->setType_name($row["type_name"]);
                
                $RoomTypeList[]= $RoomType;
            }
        }catch(PDOException $e){
            print $e->getMessage();
        }

        return $RoomTypeList;
    }
    
}