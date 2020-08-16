<?php $row=$Que->find($_GET['id']);
$parent=$_GET['id'];
?>
<form action="api/vote.php" method="post">
<input type="hidden" name="id" value="<?=$parent;?>">
<fieldset>
    <legend>目前位置：首頁>問卷調查> <?=$row['text'];?></legend>
    <h3><?=$row['text'];?></h3>
    <?php
$opts=$Que->all(['parent'=>$parent]);
foreach($opts as $o){
    ?>
    <input type="radio" name="opt" value="<?=$o['id'];?>"><?=$o['text'];?><br>
    <?php
}
    ?>
    <div class="ct"><button>我要投票</button></div>
</fieldset>
</form>