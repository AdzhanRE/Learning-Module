<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php
    $url = ($GLOBALS['api_url']).'module_subtopic/view_all_topic/'.$_GET['id'];
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    //$title = $data['title'];
    $id = $_GET['id']


?>
<h2>All Subtopic</h2>

User ID = <?=$_SESSION['user_id']?>

<?php
    foreach($data['data'] as $d)
    {
?>
    <div>
        <a href="<?=$GLOBALS['base_url']?>testquest.php?id=<?=$d['ms_id']?>"><?=$d['ms_title']?></a>
    </div>
    
<?php
    }
?>


<?php
include ('assets/footer.php');
?>