<?php
include_once "../base.php";
$row=$Que->find($_POST['id']);
$row['count']++;
$Que->save($row);
$row=$Que->find($_POST['opt']);
$row['count']++;
$Que->save($row);
to("../index.php?do=result&id=".$_POST['id']);