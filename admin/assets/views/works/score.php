<?php

    if($_GET['step']!=0 && $_GET['user_id']!=0){
        updateStepUser($_GET['user_id'], $_GET['step']);
    }

    if(insetScore($_GET['id'], $_GET['key'], $_GET['value'])){
        echo("<script>location.href = 'index.php?page=works&view=form&id=".$_GET['id']."';</script>");
    }else{
        echo "Xato";
    }
?>