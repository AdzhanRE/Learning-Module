<?php
include ('assets/header.php');
// include ('store_session.php');

// if(isset($_GET))
//     {
//         $id=$_GET['id'];

//         session_start();
//         $_SESSION['user_id']=$id;
//     }

?>

<!--Cara nk panggil data dr database-->
<?php
    $url = ($GLOBALS['api_url']).'module_title';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    //$title = $data['title'];
    //$id = $data['data']['admin_id'];
?>
<h2>Erabe Title</h2>
<br>
User ID = <?=$_SESSION['user_id']?>

<?php
    foreach($data['data'] as $d)
    {
?>
    <div>
        <a href="<?=$GLOBALS['base_url']?>testsub.php?id=<?=$d['mt_id']?>"><?=$d['mt_title']?></a>
    </div>
    
<?php
    }
?>

<h2>View Question</h2>

<div>
        <a href="<?=$GLOBALS['base_url']?>user_all_q.php">View All Question</a>
</div>


<?php
include ('assets/footer.php');
?>