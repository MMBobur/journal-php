<?php

    $submit_name = "action";

    $date = date('dmyHis');
    $nowDate = date("Y/m/d");
    
    if(isset($_POST["action"])){
        if($_FILES['rasm']['tmp_name']){
            if(move_uploaded_file($_FILES['rasm']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/assets/images/media/".$date.".jpg")){
                $res = insertTests($_POST["text"],$date.".jpg", $_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["javob"], $nowDate);
                if($res){
                    echo("<script>location.href = 'index.php?view=savollar';</script>");
                }
            }
        }else{
            $res = insertTests($_POST["text"],"", $_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["javob"], $nowDate);
            if($res){
                echo("<script>location.href = 'index.php?view=savollar';</script>");
            }
        }
        
    }

    if(isset($_GET["id"])){
        $res = getOne("tests", $_GET["id"])[0];
        $submit_name = "action_edit";
    }

    if(isset($_POST["action_edit"])){
        if(updateTest($_POST["id"], $_POST["text"], $_POST["a"], $_POST["b"], $_POST["c"], $_POST["d"],$_POST["javob"] )){
            echo("<script>location.href = 'index.php?view=savollar';</script>");
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
                    <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                        <?php if(!isset($res)):?>   
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Rasm</label>
                                <input type="file" name="rasm" class="form-control p-0 border-0">
                            </div>
                        <?php else:?>
                            <input name="id" type="hidden" value="<?php if(isset($res)) echo $res['id'];?>">
                        <?php endif;?>
                        
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Savol</label>
                            <div class="col-md-12 border-bottom p-0">
                                <textarea name="text" rows="5" class="form-control p-0 border-0"><?php if(isset($res)) echo $res['text'];?></textarea>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">A javob</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['a'];?>" type="text" name="a" placeholder="a javobni kiriting" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">B javob</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['b'];?>" type="text" name="b" placeholder="b javobni kiriting" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">C javob</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['c'];?>" type="text" name="c" placeholder="c javobni kiriting" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">D javob</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?php if(isset($res)) echo $res['d'];?>" type="text" name="d" placeholder="d javobni kiriting" class="form-control p-0 border-0">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="col-sm-12">Javob</label>
                            <div class="col-sm-12 border-bottom">
                                <select name="javob" class="form-select shadow-none p-0 border-0 form-control-line">
                                    <option <?php if(isset($res)) selectdCheck($res['javob'],"a"); ?> value="a">A</option>
                                    <option <?php if(isset($res)) selectdCheck($res['javob'],"b"); ?> value="b">B</option>
                                    <option <?php if(isset($res)) selectdCheck($res['javob'],"c"); ?> value="c">C</option>
                                    <option <?php if(isset($res)) selectdCheck($res['javob'],"d"); ?> value="d">D</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Add</button>
                                <a href="index.php?view=savollar" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                        <input type="hidden" name="<?=$submit_name?>" value="savollar-add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>