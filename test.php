<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php
    $url = ($GLOBALS['api_url']).'admin/view/1';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    $title = $data['title'];
    $id = $data['data']['admin_id'];
?>

<?=$title?>
User ID = <?=$id?>

<br>
Global = <?=$GLOBALS['api_url']?>

<br>
Session = <?=$_SESSION["user_id"]?>


<?php
include ('assets/footer.php');
?>