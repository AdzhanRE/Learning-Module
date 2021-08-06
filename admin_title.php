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
<h2>Title</h2>
<br>
User ID = <?=$_SESSION['user_id']?>

<?php
    foreach($data['data'] as $d)
    {
        $mt_id = $d['mt_id'];
        $table = "module_title";
?>
    <div>
        <a href="<?=$GLOBALS['base_url']?>admin_sub.php?id=<?=$mt_id?>"><?=$d['mt_title']?></a>
    
        <a href="<?=$GLOBALS['base_url']?>admin_update_title.php?id=<?=$mt_id?>">Update <?=$d['mt_title']?></a>

        <button type="submit" class="btn btn-primary" onclick="delete_data(<?=$table?>,<?=$mt_id?>)">Delete <?=$d['mt_title']?></button>
    </div>

    
<?php
    }
?>

<h2>Add Title</h2>
    <div>
        <a href="<?=$GLOBALS['base_url']?>testform.php?">Add New Title</a>
    </div>

<h2>View Question</h2>
    <div>
        <a href="<?=$GLOBALS['base_url']?>admin_view_q.php?">View Question</a>
    </div>

<?php
include ('assets/footer.php');
?>