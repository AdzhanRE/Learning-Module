<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php

    $id = $_SESSION['user_id'];

    $url = ($GLOBALS['api_url']).'question/view_all/'.$_GET['id'].'/'.$id;//panggil data ikut ms_id dan u_id
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    $title = $data['title'];
    
?>


User ID = <?=$id?>


<h2>All of Your Question</h2>

<?php
    foreach($data['data'] as $d)
    {
?>
    <div>
        <a href="<?=$GLOBALS['base_url']?>testuserans2.php?id=<?=$d['q_id']?>"><?=$d['q_question']?></a>
    </div>
    
<?php
    }
?>



<?php
include ('assets/footer.php');
?>