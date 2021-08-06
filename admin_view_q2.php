<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php
    $id = $_GET['id'];

    $url = ($GLOBALS['api_url']).'question/view/'.$id;
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    //$title = $data['title'];
    $d = $data['data'];
    
?>
<h2>Question</h2>

User ID = <?=$_SESSION['user_id']?>

<p><?=$d['q_question']?></p>

<h2>View The Subtopic</h2>
    <div>
        <a href="<?=$GLOBALS['base_url']?>view_sub.php?id=<?=$id?>">View Subtopic</a>
    </div>

    <form id="add_question" method="POST" onsubmit="return add_question()">

        <label>Your Answer:</label><br>
        <input type="text"  name="q_answer"><br>


        <input type="hidden" name="q_answer" value="0">
        <input type="hidden" name="user_id" value="<?=$id?>">
        <input type="hidden" name="admin_id" value="0">

        <input type="hidden" name="ms_id" value="<?=$ms_id?>">

        <button type="submit" class="btn btn-primary">Add</button>

    </form>


<?php
include ('assets/footer.php');
?>