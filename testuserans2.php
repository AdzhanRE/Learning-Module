<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php

    $id = $_SESSION['user_id'];

    $url = ($GLOBALS['api_url']).'question/view/'.$_GET['id'];//panggil data get id question
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    $title = $data['title'];
    
?>


User ID = <?=$id?>


<h2>Your Question</h2>

<p><?=$data['data']['q_question']?></p>

<h2>Answer</h2>

<!-- <p><?=$data['data']['q_answer']?></p> -->

<?php
    $ans = $data['data']['q_answer'];
    if($ans=="0")
    {
?>
    <p>No Answer Yet</p>
<?php
    }
    else
    {
?>
    <p><?=$ans?></p>
<?php
    }
?>

<h2>View Subtopic</h2>

    <div>
        <a href="<?=$GLOBALS['base_url']?>testquest.php?id=<?=$data['data']['ms_id']?>">View Subtopic</a>
    </div>


<?php
include ('assets/footer.php');
?>