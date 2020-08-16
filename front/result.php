<?php $row=$Que->find($_GET['id']);
$parent=$_GET['id'];
$total=($row['count']==0)?1:$row['count'];
?>
<fieldset>
    <legend>目前位置：首頁>問卷調查> <?=$row['text'];?></legend>
    <h3><?=$row['text'];?></h3>
    <?php
$opts=$Que->all(['parent'=>$parent]);
foreach($opts as $o){
    $rate=$o['count']/$total;
    ?>
   <div class="contain" style="display:flex">
<div style="width:20%"><?=$o['text'];?></div>
<div style="width:<?=round(60*$rate);?>%;background:#ccc;height:20px"></div>
<div style="width:20%"><?=$o['count'];?>票(<?=round(100*$rate);?>%)</div>
</div>
   
    <?php
}
    ?>
    <div class="ct"><button onclick="location.href='?do=que'">返回</button></div>
</fieldset>