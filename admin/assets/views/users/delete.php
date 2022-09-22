<?php

    if(isset($_GET["id"])){
        if(delete($_GET["id"], "users")){
            echo("<script>location.href = 'index.php?view=users';</script>");
        }
    }

?>