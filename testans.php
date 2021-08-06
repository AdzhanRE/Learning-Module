<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php

    $id = $_GET['id'];//id question

    $url = ($GLOBALS['api_url']).'question/view/'.$id;
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    $title = $data['title'];

    $d = $data['data'];
    $user_id = $_SESSION['user_id'];//dr session

?>
<h2>Answer</h2>

<div>
        <a href="<?=$GLOBALS['base_url']?>view_sub.php?id=<?=$d['ms_id']?>">View Subtopic</a>
</div>

<form id="add_answer" method="POST" onsubmit="return add_answer(<?=$d['q_id']?>)">

    <label>Question:</label><br>
    <input type="text"  name="q_question" value="<?=$d['q_question']?>" readonly>

    <br>
    <label>Answer:</label><br>
    <input type="text"  name="q_answer"><br>

    <input type="hidden" name="user_id" value="<?=$d['user_id']?>">
    <input type="hidden" name="admin_id" value="<?=$user_id?>">

    <input type="hidden" name="ms_id" value="<?=$d['ms_id']?>">

    <button type="submit" class="btn btn-primary">Add</button>

</form>


<?php
include ('assets/footer.php');
?>