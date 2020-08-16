<?php
include_once "../base.php";
$type=$_POST['id'];
$rows=$News->all(['type'=>$type]);
foreach($rows as $row){
    echo "<div onclick='getPost(".$row['id'].")'>".$row['title']."</div>";
}