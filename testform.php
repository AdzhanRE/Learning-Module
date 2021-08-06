<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php
    // $url = ($GLOBALS['api_url']).'admin/view/1';
    // $ch = curl_init();

    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_URL, $url);

    // $result=curl_exec($ch);
    // curl_close($ch);

    // $data=json_decode($result, true);
    
    // $title = $data['title'];
    $id = $_SESSION['user_id'];
?>
<h2>Add Title</h2>
<form id="add_title" method="POST" onsubmit="return add_title()">

    <label>Module Title:</label><br>
    <input type="text"  name="mt_title"><br>
    <label>Description:</label><br>
    <input type="text"  name="mt_desc"><br>

    <input type="hidden" name="admin_id" value="<?=$id?>">

    <button type="submit" class="btn btn-primary">Add</button>

</form>


<?php
include ('assets/footer.php');
?>