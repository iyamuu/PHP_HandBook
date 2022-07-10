<?php
ini_set('display_errors', "On");

// RoomTypeを取得
require("./repository/RoomTypeRepository.php");
$RoomTypeRepository = new RoomTypeRepository;
$RoomTypeList = $RoomTypeRepository->findAll();

// インデックスに遷移
if (empty($_GET)) {

  // Viewによる表示
  require("./temp/index.php");
} else if ($_GET["page"] == "roomList") {

  // Roomを取得
  require("./repository/RoomRepository.php");
  $RoomRepository = new RoomRepository;
  if (empty($_GET["type_id"])) {
    $RoomList = $RoomRepository->findAll();
  } else {
    $RoomList = $RoomRepository->findByTypeID($_GET["type_id"]);
  }

  // Viewによる表示
  require("./temp/roomList.php");
} else if ($_GET["page"] == "roomDetail") {
  
  // Roomを取得
  require("./repository/RoomRepository.php");
  $RoomRepository = new RoomRepository;
  $Room = $RoomRepository->findByRoomNo($_GET["room_no"]);
  
  // Viewによる表示
  require("./temp/roomDetail.php");
} else if ($_GET["page"] == "reserveDay") {
  
  // Viewによる表示
  require("./temp/reserveDay.php");
} else if ($_GET["page"] == "reserveRoomList") {
  
  // Viewによる表示
  require("./temp/reserveRoomList.php");
}
