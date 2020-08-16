<?php
include_once "../base.php";
$chk = $Admin->find(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
$chkacc = $Admin->find(['acc' => $_POST['acc']]);
if (!empty($chk)) {
    $_SESSION['login'] = $_POST['acc'];
    to("../index.php");
} else {
    if (empty($chkacc)) {
        echo "<script>
    alert('查無帳號');
    location.href='../index.php?do=login';
    </script>";
        exit;
    } else {
        echo "<script>
    alert('密碼錯誤');
    location.href='../index.php?do=login';
    </script>";
        exit;
    }
}
