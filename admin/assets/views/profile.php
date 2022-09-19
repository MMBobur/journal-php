<?php
        
    if(isset($_POST["profile"])){
        if($_POST["pass_1"] == $_POST["pass_2"]){
            if(updateUser($_POST['login'], $_POST['pass_1'])){
                logout();
                echo("<script>location.href = 'index.php?view=media';</script>");
            }
        }
    }

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Login</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?=$_SESSION['username']?>" type="text" name="login" placeholder="Loginni kiriting..." class="form-control p-0 border-0">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" name="pass_1" placeholder="Parolni kiriting..." class="form-control p-0 border-0">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Repeat password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" name="pass_2" placeholder="Parolni takrorlang..." class="form-control p-0 border-0">
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update</button>
                                <a href="index.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                        <input type="hidden" name="profile" value="news-add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>