<?php

    $submit_name = "action";

    $date = date('dmyHis');
    $nowDate = date("Y/m/d");
    
    if(isset($_POST["action"])){
        if($_FILES['rasm']['tmp_name']){
            if(move_uploaded_file($_FILES['pdf']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/assets/journal/pdf/".$date."-".$_FILES['pdf']["name"])){
                if(move_uploaded_file($_FILES['rasm']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/assets/journal/image/".$date."-".$_FILES['rasm']["name"])){
                    $res = insertJournal($_POST["title"], $_POST["text"], $date."-".$_FILES['rasm']["name"], $date."-".$_FILES['pdf']["name"]);
                    if($res){
                        echo("<script>location.href = 'index.php?view=journal';</script>");
                    }
                }
            }
        }
    }

    if(isset($_GET["id"])){
        $res = getOne("journals", $_GET["id"])[0];
        $submit_name = "action_edit";
    }

    if(isset($_POST["action_edit"])){
        if(updateJournal($_POST["id"], $_POST["title"], $_POST['text'])){
            echo("<script>location.href = 'index.php?view=journal';</script>");
        }
    }

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" onsubmit="return valid()" method="POST" enctype="multipart/form-data">
                        <?php if(!isset($res)):?>   
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Rasm</label>
                                <input type="file" name="rasm" class="form-control p-0 border-0">
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">PDF</label>
                                <input type="file" name="pdf" class="form-control p-0 border-0">
                            </div>
                        <?php else:?>
                            <input name="id" type="hidden" value="<?php if(isset($res)) echo $res['id'];?>">
                        <?php endif;?>
                        
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Title</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['title'];?>" type="text" name="title" placeholder="title" class="form-control p-0 border-0" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Text</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['text'];?>" type="text" name="text" placeholder="login kiriting" class="form-control p-0 border-0" required>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Add</button>
                                <a href="index.php?view=journal" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                        <input type="hidden" name="<?=$submit_name?>" value="savollar-add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function valid(){
        if(document.getElementById("pass1").value===document.getElementById("pass2").value){
            return true;
        }else{
            alert("parollar mos kelmadi");
        }
        return false;
    }
</script>