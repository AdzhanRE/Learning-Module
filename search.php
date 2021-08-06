<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php
    $g = isset($_GET) ? "?".http_build_query($_GET) : '';

    $url = ($GLOBALS['api_url']).'module_subtopic/search_subtopic'.$g;
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    //$title = $data['title'];

    $sub = isset($data['sub']) ? $data['sub'] : '';

?>
<h2>All Subtopic</h2>

User ID = <?=$_SESSION['user_id']?>


<form action="" method="GET">
    <div class="product_search">
        <input type="text" name="sub" value="<?=$sub?>" placeholder="Search Topic" size="50">
    </div>

    <button type="submit" class="btn btn-primary">Search</button>
</form>

<?php
    if(sizeof($data['data'])>0)
    {
        foreach($data['data'] as $d)
        {
?>
            <div>
            <a href="<?=$GLOBALS['base_url']?>testquest.php?id=<?=$d['ms_id']?>"><?=$d['ms_title']?></a>
            </div>
<?php
        }
    }
    else
    {
?>
        <div>
            <p>None</p>
        </div>
<?php
    }
?>


<?php
include ('assets/footer.php');
?>