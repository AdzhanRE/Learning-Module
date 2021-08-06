<?php

    session_start();

    session_destroy();

    $arr['msg']='success';

    echo json_encode($arr);

?>