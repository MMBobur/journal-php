<?php

    if(isset($_GET["id"])){
        if(delete($_GET["id"], "tests")){
            echo("<script>location.href = 'index.php?view=savollar';</script>");
        }
    }

?>