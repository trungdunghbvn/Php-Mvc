<?php

include './Database/Db.php';

$db = new DB_driver();

//    $test = ['theloai'=>'Thể Thao','status'=>FALSE ];
//    $db->insert('theloai', $test);
$data = $db->get_list('SELECT * FROM theloai');
foreach ($data as $key => $value) {
    echo $value['theloai'].'<br/>';
}
?>