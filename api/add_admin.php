<?php
include_once "../base.php";
foreach($_POST as $p){
if(empty($p)) {
    echo "<script>
    alert('不可空白');
    location.href='../admin.php?do=admin';
    </script>";
    exit;
}
}
if($_POST['pw']!=$_POST['pw2']){
    echo "<script>
    alert('密碼錯誤');
    location.href='../admin.php?do=admin';
    </script>";
    exit;
}
$chkacc=$Admin->find(['acc'=>$_POST['acc']]);
if(!empty($chkacc)){
    echo "<script>
    alert('帳號重複');
    location.href='../admin.php?do=admin';
    </script>";
    exit;
}else{
    unset($_POST['pw2']);
    $Admin->save($_POST);
    echo "<script>
    location.href='../admin.php?do=admin';
    </script>";
    exit;
}