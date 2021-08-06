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
    $id = $_GET['id'];

    $url = ($GLOBALS['api_url']).'module_title/view/'.$id;
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    //$title = $data['title'];
    //$id = $data['data']['admin_id'];
    $d = $data['data'];
    $user_id = $_SESSION['user_id'];
?>
<h2>Title</h2>
<br>
User ID = <?=$_SESSION['user_id']?>

<h2>Update Title</h2>
<form id="update_title" method="POST" onsubmit="return update_title(<?=$id?>)">

    <label>Module Title:</label><br>
    <input type="text"  name="mt_title" value="<?=$d['mt_title']?>"><br>
    <label>Description:</label><br>
    <input type="text"  name="mt_desc" value="<?=$d['mt_desc']?>"><br>

    <input type="hidden" name="admin_id" value="<?=$user_id?>">

    <button type="submit" class="btn btn-primary">Add</button>

</form>

<?php
include ('assets/footer.php');
?>