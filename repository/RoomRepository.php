<?php

require("./domain/Room.php");
// require("./domain/RoomType.php");

class RoomRepository
{
    public function findAll()
    {
        $db = null;
        $RoomList = array();
        try {
            $db = new PDO('mysql:host=localhost;dbname=jikkyo_pension', 'jikkyo', 'pass');
            $q = $db->query('SELECT room_no, room_name, information, main_image, image1, image2, image3, amenity, dayfee, capacity, r.type_id, type_name FROM room as r INNER JOIN room_type as rt ON r.type_id = rt.type_id;');
            while ($row = $q->fetch()) {

                $Room = new Room;
                $Room->setRoom_no($row["room_no"]);
                $Room->setRoom_name($row["room_name"]);
                $Room->setInformation($row["information"]);
                $Room->setMain_image($row["main_image"]);
                $Room->setImage1($row["image1"]);
                $Room->setImage2($row["image2"]);
                $Room->setImage3($row["image3"]);
                $Room->setAmenity($row["amenity"]);
                $Room->setDayfee($row["dayfee"]);
                $Room->setCapacity($row["capacity"]);

                $RoomType = new RoomType;
                $RoomType->setType_id($row["type_id"]);
                $RoomType->setType_name($row["type_name"]);

                $Room->setRoom_type($RoomType);

                $RoomList[] = $Room;
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        return $RoomList;
    }

    public function findByTypeID($type_id)
    {
        $db = null;
        $RoomList = array();
        try {
            $db = new PDO('mysql:host=localhost;dbname=jikkyo_pension', 'jikkyo', 'pass');
            $stmt = $db->prepare('SELECT room_no, room_name, information, main_image, image1, image2, image3, amenity, dayfee, capacity, r.type_id, type_name FROM room as r INNER JOIN room_type as rt ON r.type_id = rt.type_id WHERE r.type_id = ?;');
            $stmt->execute(array($type_id));
            while ($row = $stmt->fetch()) {

                $Room = new Room;
                $Room->setRoom_no($row["room_no"]);
                $Room->setRoom_name($row["room_name"]);
                $Room->setInformation($row["information"]);
                $Room->setMain_image($row["main_image"]);
                $Room->setImage1($row["image1"]);
                $Room->setImage2($row["image2"]);
                $Room->setImage3($row["image3"]);
                $Room->setAmenity($row["amenity"]);
                $Room->setDayfee($row["dayfee"]);
                $Room->setCapacity($row["capacity"]);

                $RoomType = new RoomType;
                $RoomType->setType_id($row["type_id"]);
                $RoomType->setType_name($row["type_name"]);

                $Room->setRoom_type($RoomType);

                $RoomList[] = $Room;
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        return $RoomList;
    }

    public function findByRoomNo($room_no)
    {
        $db = null;
        $RoomList = array();
        try {
            $db = new PDO('mysql:host=localhost;dbname=jikkyo_pension', 'jikkyo', 'pass');
            $stmt = $db->prepare('SELECT room_no, room_name, information, main_image, image1, image2, image3, amenity, dayfee, capacity, r.type_id, type_name FROM room as r INNER JOIN room_type as rt ON r.type_id = rt.type_id WHERE room_no = ?;');
            $stmt->execute(array($room_no));
            $row = $stmt->fetch();

            $Room = new Room;
            $Room->setRoom_no($row["room_no"]);
            $Room->setRoom_name($row["room_name"]);
            $Room->setInformation($row["information"]);
            $Room->setMain_image($row["main_image"]);
            $Room->setImage1($row["image1"]);
            $Room->setImage2($row["image2"]);
            $Room->setImage3($row["image3"]);
            $Room->setAmenity($row["amenity"]);
            $Room->setDayfee($row["dayfee"]);
            $Room->setCapacity($row["capacity"]);

            $RoomType = new RoomType;
            $RoomType->setType_id($row["type_id"]);
            $RoomType->setType_name($row["type_name"]);

            $Room->setRoom_type($RoomType);

            $RoomList[] = $Room;
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        return $RoomList;
    }
}
