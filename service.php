<?php
// 設置資料類型 json，編碼格式 utf-8
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    echo 'POTATO GET';
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo 'POTATO POST'
}


// 新建員工
function create() {
    echo json_encode(array('name' => $_POST['name']));
}

?>