<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php

    $url = ($GLOBALS['api_url']).'question/';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    //$title = $data['title'];
    
?>
<h2>All Question</h2>

User ID = <?=$_SESSION['user_id']?>

<?php
    foreach($data['data'] as $d)
    {
?>
    <div>
        <!--View satu question-->
        <a href="<?=$GLOBALS['base_url']?>testans.php?id=<?=$d['q_id']?>"><?=$d['q_question']?></a>
    </div>
    
<?php
    }
?>




<?php
include ('assets/footer.php');
?>