<?php

    if (isset($_GET['url'])){
        $url = $_GET['url'];
        //echo $url;

        require ("controllers/" . $url . ".php");

        $controller = new $url;
    }
    else{
        echo 1;
    }

?>

