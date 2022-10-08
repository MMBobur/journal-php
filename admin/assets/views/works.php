<?php
    session_start();
?>
<style>
    .tabelRow:hover{
        background-color: #eee;
    }
</style>
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Barcha jurnallar</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li>
                        <a href="?page=works&view=form" class="fw-normal btn btn-danger" style="color: white">Yangi qo`shish</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <span style="color: #000">
                                Tekshirilmagan (saytga joylanmagan)
                            </span>
                        </button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <span style="color: #000">
                                Tekshirilgan (saytga joylangan)
                            </span>
                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="table-responsive" style="background-color: #fff;">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Avtor</th>
                                        <th class="border-top-0">Telefon</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Word</th>
                                        <th class="border-top-0">Jornalga biriktirish</th>
                                        <th class="border-top-0">O`chirib tashlash</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach(getJournals() as $key=>$r):?>
                                        <tr class="tabelRow">
                                            <td><?=$key+1?></td>
                                            <td><?=$r['author']?></td>
                                            <td><?=$r['tel']?></td>
                                            <td><?=$r['email']?></td>
                                            <td style="display: flex; flex-direction: column;">
                                                <a style="margin-bottom: 5px;" href="?view=pdf&id=<?=$r["id"]?>" class="btn btn-primary">ko`rish</a>
                                                <a href="<?=$config['base']['url']."assets/pdf/".$r["pdf"]?>" class="btn btn-warning">yuklash</a>
                                            </td>
                                            <td >
                                                <div style="display: flex; flex-direction: column;">
                                                    <select style="margin-bottom: 2px;" id="journal_id">
                                                        <option disabled selected value>Jurnalni tanlang</option>
                                                        <?php foreach(getAllData("journals") as $key=>$g):?>
                                                            <option value="<?=$g["id"]?>"><?=textShorten($g["title"], 50)?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                    <input type="text" style="margin-bottom: 2px;" id="page_num">
                                                    <button class="btn btn-primary" onclick="connectToJournal(<?=$r['id']?>)">qo`shish</button>
                                                </div>
                                            </td>
                                            <td><button onclick="delJournal(<?=$r['id']?>)" class="btn btn-danger">O`chirish</butt></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="table-responsive" style="background-color: #fff;">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Avtor</th>
                                        <th class="border-top-0">Telefon</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Word</th>
                                        <th class="border-top-0">O`chirib tashlash</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach(getJournals(1) as $key=>$r):?>
                                        <tr class="tabelRow">
                                            <td><?=$key+1?></td>
                                            <td><?=$r['author']?></td>
                                            <td><?=$r['tel']?></td>
                                            <td><?=$r['email']?></td>
                                            <td>
                                                <a href="?view=pdf&id=<?=$r["id"]?>" class="btn btn-primary">ko`rish</a>
                                            </td>
                                            <td><button onclick="delJournal(<?=$r['id']?>)" class="btn btn-danger">O`chirish</butt></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</div>

<script>
    const connectToJournal = (id) => {
        const journalID = document.getElementById("journal_id").value;
        const page_num = document.getElementById("page_num").value;
        window.location.replace(`?view=accept&connect=${journalID}&id=${id}&page-num=${page_num}`);
    }

    const setStatus = (id, status) => {
        if(status){
            var res = confirm("Saytga chiqarishni hohlaysizmi ?");
            if(res){
                window.location.replace(`?view=accept&id=${id}`);
            }
        }else{
            var res = confirm("Jurnalni saytdan olib tashlashni hohlaysizmi ?");
            if(res){
                window.location.replace(`?view=accept&deactivate=${id}`);
            }
        }
    }

    const delJournal = (id) => {
        var res = confirm("Saytga chiqarishni hohlaysizmi ?");
        if(res){
            window.location.replace(`?view=accept&del=${id}`);
        }
    }
</script>