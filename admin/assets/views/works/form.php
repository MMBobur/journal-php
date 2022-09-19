<?php

    $data = getOne("works",$_GET["id"])[0];
    $user = getOne("auth",$data["user_id"])[0];

    $task1 = explode(",", $data['task1']);
?>
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <a href="index.php?view=works" class="btn btn-secondary" style="color: white">Orqaga</a>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-4 col-xs-12">
            <h4 class="page-title"><span style="color: #999;">Foydalanuvchi: </span><?=$user["ism"]?> <?=$user["fam"]?></h4>
        </div>
        <?php if($data["done"]==0): ?>
            <div class="col-lg-2 col-sm-2 col-md-4 col-xs-12">
                <button class="btn btn-success" style="color: white" onclick="score(<?=$_GET['id']?>, 'done', 1, 7, <?=$user['id']?>)">Tekshirildi</button>
            </div>
        <?php endif;?>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="container">
                    <div class="row">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Test</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Saytdagi bajarilgan 5talik test</h6>
                                <p class="card-text">Umumiy:  <?=$data["test_score"]?> ball</p>
                                <p class="card-text">To`g`ri javoblar: <?=$data["test_score"]/4?></p>
                                <p class="card-text">Belgilangan javoblar: <?=$data['test_results']?></p>
                            </div>
                        </div>
                        <div class="card" style="width: 26rem;">
                            <div class="card-body">
                                <h5 class="card-title">1-topshiriq</h5>
                                <h6 class="card-subtitle mb-2 text-muted">1-topshiriq: tahlilga doir</h6>
                                <table class="table  table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th style="color: white; font-size: 14px;">Jami topshiriqlar</th>
                                            <th style="color: white; font-size: 14px;">Bilish</th>
                                            <th style="color: white; font-size: 14px;">Qo`llash</th>
                                            <th style="color: white; font-size: 14px;">Mulohaza yuritish</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?=$task1[0]?></td>
                                            <td><?=$task1[1]?></td>
                                            <td><?=$task1[2]?></td>
                                            <td><?=$task1[3]?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php if($data["task1_score"]<=0):?>
                                    <div class="row">
                                        <input type="number" class="col-9" placeholder="Ballni kiriting" id="task1_score">
                                        <button class="btn btn-primary col-3" onclick="score(<?=$_GET['id']?>, 'task1_score')">ok</button>
                                    </div>
                                <?php else:?>
                                    <p class="card-text">Umumiy: <?=$data['task1_score']?> ball</p>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">2-topshiriq</h5>
                                <h6 class="card-subtitle mb-2 text-muted">2-topshiriq: zamonaviy maktab</h6>
                                <p class="card-text">Faylni yuklab olib tekshirib ballni qo`ying</p>
                                <?php if($data["task2_score"]<=0):?>
                                    <div class="row">
                                        <input type="number" class="col-9" placeholder="Ballni kiriting" id="task2_score">
                                        <button class="btn btn-primary col-3" onclick="score(<?=$_GET['id']?>, 'task2_score')">ok</button>
                                    </div>
                                <?php else:?>
                                    <p class="card-text">Umumiy: <?=$data['task2_score']?> ball</p>
                                <?php endif;?>
                                <br>
                                <a href="<?=$config['base']['url']."assets/task2/".$data['task2'] ?>" class="card-link">Yuklab olish</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">3-topshiriq</h5>
                                <h6 class="card-subtitle mb-2 text-muted">3-topshiriq: xorij tajribasi</h6>
                                <p class="card-text">Faylni yuklab olib tekshirib ballni qo`ying</p>
                                <?php if($data["task3_score"]<=0):?>
                                    <div class="row">
                                        <input type="number" class="col-9" placeholder="Ballni kiriting" id="task3_score">
                                        <button class="btn btn-primary col-3" onclick="score(<?=$_GET['id']?>, 'task3_score')">ok</button>
                                    </div>
                                <?php else:?>
                                    <p class="card-text">Umumiy: <?=$data['task3_score']?> ball</p>
                                <?php endif;?>
                                <br>
                                <a href="<?=$config['base']['url']."assets/task3/".$data['task3'] ?>" class="card-link">Yuklab olish</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Yakuniy qisim</h5>
                                <h6 class="card-subtitle mb-2 text-muted">yakun bo`yicha 2ta ish</h6>
                                <p class="card-text">Faylni yuklab olib tekshirib ballni qo`ying</p>
                                <?php if($data["yakun_score"]<=0):?>
                                    <div class="row">
                                        <input type="number" class="col-9" placeholder="Ballni kiriting" id="yakun_score">
                                        <button class="btn btn-primary col-3" onclick="score(<?=$_GET['id']?>, 'yakun_score')">ok</button>
                                    </div>
                                <?php else:?>
                                    <p class="card-text">Umumiy: <?=$data['yakun_score']?> ball</p>
                                <?php endif;?>
                                <br>
                                <a href="<?=$config['base']['url']."assets/yakuniy/".$data['yakun1'] ?>" class="card-link">1-yakuniy</a>
                                <a href="<?=$config['base']['url']."assets/yakuniy/".$data['yakun2'] ?>" class="card-link">2-yakuniy</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function score(id, key, value = document.getElementById(key).value, step=0, user_id=0){
        window.location.replace(`?page=works&view=score&id=${id}&key=${key}&value=${value}&step=${step}&user_id=${user_id}`);
    }
</script>
