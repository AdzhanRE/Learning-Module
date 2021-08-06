<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php
    $id = $_GET['id'];

    $url = ($GLOBALS['api_url']).'module_subtopic/view_all_topic/'.$id;
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    //$title = $data['title'];
    
?>
<h2>All Subtopic</h2>

User ID = <?=$_SESSION['user_id']?>

<?php
    foreach($data['data'] as $d)
    {
?>
    <div>
        <a href="<?=$GLOBALS['base_url']?>testquest.php?id=<?=$d['ms_id']?>"><?=$d['ms_title']?></a>

        <a href="<?=$GLOBALS['base_url']?>admin_update_sub.php?id=<?=$d['ms_id']?>">Update <?=$d['ms_title']?></a>
    </div>
    
<?php
    }
?>

<h2>Add Subtopic</h2>
    <div>
        <a href="<?=$GLOBALS['base_url']?>testaddsubtopic.php?id=<?=$id?>">Add New Subtopic</a>
    </div>


<?php
include ('assets/footer.php');
?>