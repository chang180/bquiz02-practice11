<?php
include_once "../base.php";
$row=$News->find($_POST['id']);
    echo "<div>".nl2br($row['text'])."</div>";