<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20.03.2019
 * Time: 3:11
 */
if($_POST['id'] > 0){
    $id = $_POST['id'];

    //count increment
    $sql = "UPDATE feedback SET count = count + 1 WHERE id = '$id'";
    mysql_query($sql);

    //if count > 10 , return new url
    if($row['count'] > 10){
        die($row['href']);
    }
}
