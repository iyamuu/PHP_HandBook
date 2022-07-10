<?php
foreach ($RoomTypeList as $key => $val) {
    echo '<li><a href="./index.php?page=roomList&type_id=' . $val->getType_id() . '">' . $val->getType_name() . '</a></li>';
}
