<style>
    form{
        width: 50%;
        padding: 20px;
        margin-left: 25%;
    }
    #form{
        display: none;
        margin: 0;
        width: 100vw;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
    }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<h1>Portfolio</h1>
<a href="../portfolio.php">check it out</a>
<hr>
<a href="javascript:$('#form').toggle()" onclick="edit(0)">修改1</a>
<a href="javascript:$('#form').toggle()" onclick="edit(1)">修改2</a>
<!-- send id -->
<a href="javascript:$('#form').toggle()" onclick="add()">新增</a>
<!-- send add -->

<!-- foreach出所有作品列表圖片,上方加編輯按鈕;最後一張空白+,新增作品 -->
<!-- 是否可以夾隱藏欄位,點編輯按鈕時將資料;如type title url text;傳送到表單欄位做預設內容 -->
<!-- 用js做? -->
<!-- 先撈出id資料 -->
<!-- 彈出表單視窗,div -->

<!-- $row[e]

$_POST['pofo_id']
$_POST['pofo_type']
$_POST['pofo_title']
$_POST['pofo_url']
$_POST['pofo_pic']
$_POST['pofo_text'] -->


<!-- 修改 -->
<script>
    function edit(e){
        document.getElementById("pofo_id").value = <?=$row[e]['pofo_id'];?>
        document.getElementById(<?=$row[e]['pofo_type'];?>).setAttribute("checked","checked")
        document.getElementById("pofo_title").value = <?=$row[e]['pofo_title'];?>
        document.getElementById("pofo_url").value = <?=$row[e]['pofo_url'];?>
        document.getElementById("pofo_pic").value = <?=$row[e]['pofo_pic'];?>
        document.getElementById("pofo_text").value = <?=$row[e]['pofo_text'];?>
    }
</script>



<!-- 新增 -->
<script>
    function add(){
        document.getElementById("pofo_title").setAttribute("placeholder","天下第一號")
        document.getElementById("pofo_url").setAttribute("placeholder","http.com")
        document.getElementById("pofo_pic").setAttribute("placeholder","./img/where")
        document.getElementById("pofo_text").setAttribute("placeholder","type some concept")
    }
</script>




<div id="form">
<form action="../api/admin_portfolio.php" method="POST">
    <input type="hidden" name="pofo_id" id="pofo_id" value="">
    
    <p>作品類別</p>
    <label for="pofo_type1"><input type="radio" name="pofo_type" required id="pofo_type1" value="back">back-end</label>
    <label for="pofo_type2"><input type="radio" name="pofo_type" id="pofo_type2" value="front">front-end</label>
    <label for="pofo_type3"><input type="radio" name="pofo_type" id="pofo_type3" value="graphic">graphic</label>

    <label for="pofo_title">
        <p>標題</p>
        <input type="text" name="pofo_title" id="pofo_title">
    </label>
    <label for="pofo_url">
        <p>連結</p>
        <input type="url" name="pofo_url" id="pofo_url">
    </label>
    <label for="pofo_pic">
        <p>圖片</p>
        <input type="file" name="pofo_pic" id="pofo_pic">
    </label>
    <label for="pofo_text">
        <p>內容</p>
        <textarea name="pofo_text" id="pofo_text" cols="50" rows="10"></textarea>
    </label>

    <!-- 技能欄位bar,技能比例 -->

    <input type="submit" value="submit" id="sub">
    <input type="reset" value="reset" id="clr">
    <a href="javascript:$('#clr').click.$('#form').hide()" style="background-color: red;">X</a>

</form>
</div>



<script>
    document.getElementById('sub').addEventListener("click",function(){
        confirm("are u sure?");
    })
</script>

<!-- <script>
    document.getElementById("pofo_title").setAttribute("placeholder","天下第一號")
    document.getElementById("pofo_url").setAttribute("placeholder","http.com")
    document.getElementById("pofo_pic").setAttribute("placeholder","./img/where")
    document.getElementById("pofo_text").setAttribute("placeholder","type some concept")
</script> -->

