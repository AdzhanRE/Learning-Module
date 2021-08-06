<?php
include ('assets/header.php');
?>

<!--Cara nk panggil data dr database-->
<?php
    // $url = ($GLOBALS['api_url']).'module_title/view/';
    // $ch = curl_init();

    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_URL, $url);

    // $result=curl_exec($ch);
    // curl_close($ch);

    // $data=json_decode($result, true);
    
    // $title = $data['title'];
    // $id = $data['data']['mt_id'];

    $id = $_GET['id'];
?>

            <?php
            $targetfolder = null;
            if(isset($_POST['submit']))
            {
                

                $targetfolder = "uploads/"; 
                $targetfolder = $targetfolder . basename( $_FILES['userfile']['name']) ; 
                $ok=1; 
                $file_type=$_FILES['userfile']['type']; 
                if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") { 
                    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $targetfolder)) 
                    { 
                        echo "The file ". basename( $_FILES['userfile']['name']). " is uploaded"; 
                        $data = array(
                            'ms_title' => $_POST['ms_title'],
                            'ms_content' => $targetfolder,
                            'ms_desc' => $_POST['ms_desc'],
                            'mt_id' => $_POST['mt_id'],
                        );
                        $url = 'http://localhost/api_learning/index.php/module_subtopic/save/0';
                        $ch = curl_init($url);
                        $postString = http_build_query($data, '', '&');
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
                        $response = curl_exec($ch);
                        curl_close($ch);
                    } 
                    else { 
                        echo "Problem uploading file"; 
                    } 
                    //move_uploaded_file($_FILES['userfile']['tmp_name'], $targetfolder);
                } 
                else { 
                    echo "You may only upload PDFs, JPEGs or GIF files.<br>"; 
                } 
            }
            ?>

<h2>Add Subtopic</h2>
<form id="add_subtopic" method="POST" enctype="multipart/form-data">

    <label>Subtopic Title:</label><br>
    <input type="text"  name="ms_title"><br>
    <!-- <label>Content:</label><br> -->
    <input name="userfile" type="file" accept="application/pdf, application/vnd.ms-excel" />
    <input type="hidden"  name="ms_content" value="<?=$targetfolder?>"><br>
    <label>Description:</label><br>
    <input type="text"  name="ms_desc"><br>

    <input type="hidden" name="mt_id" value="<?=$id?>">

    <button type="submit" name="submit" class="btn btn-primary">Add</button>

</form>


<?php
include ('assets/footer.php');
?>