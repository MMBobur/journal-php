<?php
        
    $data = getOne("site", 1)[0];

    if(isset($_POST["setting"])){
        if(updateSite($_POST["email"], $_POST["phone"], $_POST["address"], $_POST["tg"], $_POST["whatsapp"])){
            echo("<script>location.href = 'index.php?view=settings';</script>");
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
                            <label class="col-md-12 p-0">Email</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?=$data["email"]?>" type="text" name="email" placeholder="kiriting..." class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Phone</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?=$data["phone"]?>" type="text" name="phone" placeholder="kiriting..." class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Address</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?=$data["address"]?>" type="text" name="address" placeholder="kiriting..." class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">tg</label>
                            <div class="col-md-12 border-bottom p-0" style="display: flex; align-items: center;">
                                <span>@</span>&nbsp;<input value="<?=$data["tg"]?>" type="text" name="tg" placeholder="kiriting..." class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Whatsapp</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input value="<?=$data["whatsapp"]?>" type="text" name="whatsapp" placeholder="kiriting..." class="form-control p-0 border-0">
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update</button>
                                <a href="index.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                        <input type="hidden" name="setting" value="news-add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>