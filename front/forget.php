請輸入信箱以查詢密碼：<br>
<input type="text" name="email" id="email"> <br>
<div id="res"></div><br>
<button type="button" onclick="find()">尋找</button>
<script>
    function find(){
$.post("api/chkemail.php",{"email":$("#email").val()},function(res){
    $("#res").text(res);
})
    }
</script>