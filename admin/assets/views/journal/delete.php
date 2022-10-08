<?php

    if(isset($_GET["id"])){
        if(delete($_GET["id"], "journals")){
            echo("<script>location.href = 'index.php?view=journal';</script>");
        }
    }

?>