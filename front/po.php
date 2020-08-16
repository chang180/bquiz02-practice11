目前位置：首頁>分類網誌<span id="head"></span><br>
<div class="contain" style="display:flex;justify-content:center;">
    <fieldset style="width:20%">
        <legend>分類網誌</legend>
        <h4 id="1" onclick="getList(1)">健康新知</h4>
        <h4 id="2" onclick="getList(2)">菸害防制</h4>
        <h4 id="3" onclick="getList(3)">癌症防治</h4>
        <h4 id="4" onclick="getList(4)">慢性病防治</h4>
    </fieldset>
    <fieldset style="width:60%">
        <legend>文章列表</legend>
        <div id="list"></div>
    </fieldset>
</div>
<script>
    getList(1);
    function getList(id){
        $("#head").text($("#"+id).text());
        $.post("api/getlist.php",{id},function(res){
            $("#list").html(res);
        })
    }
    function getPost(id){
        $.post("api/getpost.php",{id},function(res){
            $("#list").html(res);
        })
    }
</script>