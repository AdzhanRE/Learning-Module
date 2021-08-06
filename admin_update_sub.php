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

    $url = ($GLOBALS['api_url']).'module_subtopic/view/'.$id;
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
<br>
User ID = <?=$_SESSION['user_id']?>

<h2>Update Subtopic</h2>
<form id="update_subtopic" method="POST" onsubmit="return update_subtopic(<?=$id?>)">

    <label>Subtopic Title:</label><br>
    <input type="text"  name="ms_title" value="<?=$d['ms_title']?>"><br>
    <label>Content:</label><br>
    <input type="text"  name="ms_content" value="<?=$d['ms_content']?>"><br>
    <label>Description:</label><br>
    <input type="text"  name="ms_desc" value="<?=$d['ms_desc']?>"><br>

    <input type="hidden" name="mt_id" value="<?=$d['mt_id']?>">

    <button type="submit" class="btn btn-primary">Update</button>

</form>

<?php
include ('assets/footer.php');
?>