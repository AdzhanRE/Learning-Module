<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php
    $url = ($GLOBALS['api_url']).'module_subtopic/view/'.$_GET['id'];
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    $title = $data['title'];
    $id = $_SESSION['user_id'];
    $ms_id = $_GET['id'];
?>

<h2>Subtopic</h2>

User ID = <?=$id?>

<p><?=$data['data']['ms_title']?></p>

<h2>Question</h2>
<form id="add_question" method="POST" onsubmit="return add_question()">

    <label>Question:</label><br>
    <input type="text"  name="q_question"><br>


    <input type="hidden" name="q_answer" value="0">
    <input type="hidden" name="user_id" value="<?=$id?>">
    <input type="hidden" name="admin_id" value="0">

    <input type="hidden" name="ms_id" value="<?=$ms_id?>">

    <button type="submit" class="btn btn-primary">Add</button>

</form>

<h2>Answer</h2>

    <div>
        <a href="<?=$GLOBALS['base_url']?>testuserans.php?id=<?=$ms_id?>">View question</a>
    </div>


<?php
include ('assets/footer.php');
?>