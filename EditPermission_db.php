<?php
include("connection.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $interests = $_POST['interests'];
    $positionNameTh = $_POST['position_th'];
    $positionNameEng = $_POST['position_eng'];
    $roleId = $_POST['roleId'];
    $list = ($_POST['list']);
    $permissionList = json_encode($list, true);


    $stmt = $db->prepare("UPDATE role SET id = :id, positionNameTh = :position_th, positionNameEng = :position_eng WHERE id = :id");
    $stmt->bindParam(':position_th', $positionNameTh);
    $stmt->bindParam(':position_eng', $positionNameEng);
    $stmt->bindParam(':id', $roleId);


    if ($stmt->execute()) {
        $dataArray = json_decode($permissionList);
        foreach ($dataArray as $item) {
            $value = $item->value === 'true' ? true : false;
            $permissionId =  $item->id;

            $stmt = $db->prepare("UPDATE permission SET id =:id, permissionStatus = :permissionStatus WHERE id = :id");
            $stmt->bindParam(':permissionStatus', $value);
            $stmt->bindParam(':id', $permissionId);
            $stmt->execute();
        }
    }



    //     if ($stmt->execute()) {
    //         $lastId = $db->lastInsertId();
    //         $dataArray = json_decode($permissionList);
    //         echo $lastId;

    //         foreach ($dataArray as $item) {
    //             $value = $item->value === 'true' ? true : false;
    //             $key = $item->key;
    //             $tabName = $item->tabName;

    //             $stmtt = $db->prepare("INSERT INTO permission (permissionName, permissionStatus,permissionTap,role_id ) 
    //             VALUES (:permissionName, :permissionStatus,:permissionTap,:role_id)");
    //             $stmtt->bindParam(':permissionName', $key);
    //             $stmtt->bindParam(':permissionStatus', $value);
    //             $stmtt->bindParam(':permissionTap', $tabName);
    //             $stmtt->bindParam(':role_id', $lastId);
    //             $stmtt->execute();

    //         }
    //     }
}
