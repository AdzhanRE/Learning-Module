<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php
    $url = 'http://api.nextexpertsacademymodules.great-site.net/api_learning/index.php/admin';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $result=curl_exec($ch);
    curl_close($ch);

    $data=json_decode($result, true);
    
    //$title = $data['title'];
    //$id = $_SESSION['user_id'];
    //$ms_id = $_GET['id'];
?>

<h2>Test</h2>

<?php
    foreach($data['data'] as $d)
    {
?>
    <div>
        <?=$d['admin_id']?>
    </div>
    
<?php
    }
?>



<?php
include ('assets/footer.php');
?>