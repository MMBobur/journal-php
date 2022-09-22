<?php

    $submit_name = "action";

    $date = date('dmyHis');
    $nowDate = date("Y/m/d");
    
    if(isset($_POST["action"])){
        if($_FILES['rasm']['tmp_name']){
            if(move_uploaded_file($_FILES['rasm']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/assets/images/users/".$date."-".$_FILES['rasm']["name"])){
                $res = insertUser($_POST["fullname"], $date."-".$_FILES['rasm']["name"], $_POST['info'], $_POST["username"], $_POST["password"], $_POST["role"]);
                if($res){
                    echo("<script>location.href = 'index.php?view=users';</script>");
                }
            }
        }else{
            $res = insertUser($_POST["fullname"], "", $_POST['info'], $_POST["username"], $_POST["password"], $_POST["role"]);
            if($res){
                echo("<script>location.href = 'index.php?view=savollar';</script>");
            }
        }
        
    }

    if(isset($_GET["id"])){
        $res = getOne("users", $_GET["id"])[0];
        $submit_name = "action_edit";
    }

    if(isset($_POST["action_edit"])){
        if(updateUserF($_POST["id"], $_POST["fullname"], $_POST['info'], $_POST["username"], $_POST["password"], $_POST["role"])){
            echo("<script>location.href = 'index.php?view=users';</script>");
        }
    }

    function selectdCheck($value1,$value2){
        if ($value1 == $value2) {
            echo 'selected="selected"';
        } else {
            echo '';
        }
        return;
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
                        <?php else:?>
                            <input name="id" type="hidden" value="<?php if(isset($res)) echo $res['id'];?>">
                        <?php endif;?>
                        
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Fullname</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['fullname'];?>" type="text" name="fullname" placeholder="to`liq ism familiyani kiriting" class="form-control p-0 border-0" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Username</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['username'];?>" type="text" name="username" placeholder="login kiriting" class="form-control p-0 border-0" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="" type="password" id="pass1" name="password" placeholder="parolni kiriting" class="form-control p-0 border-0" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Repeat Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="" type="password" id="pass2" name="passwordr" placeholder="parolni takrorlang" class="form-control p-0 border-0" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Info</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['info'];?>" type="text" name="info" placeholder="shaxs haqida qisqacha malumot" class="form-control p-0 border-0" required>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="col-sm-12">Role</label>
                            <div class="col-sm-12 border-bottom">
                                <select name="role" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                    <option <?php if(isset($res)) selectdCheck($res['role'],"admin"); ?> value="admin">Admin</option>
                                    <option <?php if(isset($res)) selectdCheck($res['tole'],"user"); ?> value="user">User</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Add</button>
                                <a href="index.php?view=users" class="btn btn-danger">Cancel</a>
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