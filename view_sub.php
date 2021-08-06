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





<?php
include ('assets/footer.php');
?>