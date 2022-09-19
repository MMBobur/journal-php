<?php

    if(isset($_GET["id"])){
        if(acceptJournal($_GET["id"], 1)){
            echo("<script>location.href = 'index.php';</script>");
        }else{
            echo("<script>location.href = 'index.php';</script>");
        }
    }

    if(isset($_GET["deactivate"])){
        if(acceptJournal($_GET["deactivate"], 0)){
            echo("<script>location.href = 'index.php';</script>");
        }else{
            echo("<script>location.href = 'index.php';</script>");
        }
    }

    if(isset($_GET["del"])){
        if(deleteJournal($_GET["del"])){
            echo("<script>location.href = 'index.php';</script>");
        }else{
            echo("<script>location.href = 'index.php';</script>");
        }
    }

?>