<?php

    $submit_name = "action";

    $date = date('dmyHis');
    $nowDate = date("Y/m/d");
    
    if(isset($_POST["action"])){
        echo "nimanidir xato kiritdiz";

        if(move_uploaded_file($_FILES['word']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/assets/pdf/".$date."-".$_FILES['word']["name"])){
            $res = newJournalAdmin($_POST["title"], $_POST["author"], $_POST["tel"], $_POST["email"], $_POST["categoryID"], $_POST["journalID"], $_POST["page"], $date."-".$_FILES['word']["name"]);
            if($res){
                echo("<script>location.href = 'index.php?view=works';</script>");
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
                                <label class="col-md-12 p-0">Word</label>
                                <input type="file" name="word" class="form-control p-0 border-0">
                            </div>
                        <?php else:?>
                            <input name="id" type="hidden" value="<?php if(isset($res)) echo $res['id'];?>">
                        <?php endif;?>
                        
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Familiya ism</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['author'];?>" type="text" name="author" placeholder="to`liq familiyani ism kiriting" class="form-control p-0 border-0" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Telefon</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['tel'];?>" type="text" name="tel" placeholder="telefon kiriting" class="form-control p-0 border-0" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Email</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['email'];?>" type="text" name="email" placeholder="email kiriting" class="form-control p-0 border-0" required>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Maqola sarlovhasi</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['title'];?>" type="text" name="title" placeholder="sarlavha" class="form-control p-0 border-0" required>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="col-sm-12">Maqola categoriyasi</label>
                            <div class="col-sm-12 border-bottom">
                                <select name="categoryID" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                    <option disabled selected value>Maqola categoriyasini tanlang</option>
                                    <?php foreach(getCategory("category") as $data):?>
                                        <option <?php if(isset($res)) selectdCheck($res['categoryId'],$data['id']); ?> value="<?=$data['id']?>"><?=$data["title_uz"]?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="col-sm-12">Birikrililishi kerak bo`lgan jurnal</label>
                            <div class="col-sm-12 border-bottom">
                                <select name="journalID" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                    <option disabled selected value>Maqola biriktirilgan journalni tanlang</option>
                                    <?php foreach(getCategory("journals") as $data):?>
                                        <option <?php if(isset($res)) selectdCheck($res['journal_id'], $data['id']); ?> value="<?=$data['id']?>"><?=$data["title"]?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Sahifa raqami (1-20 shu ko`rinishda)</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['title'];?>" type="text" name="page" placeholder="sahifalar" class="form-control p-0 border-0" required>
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