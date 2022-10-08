<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Websitedagi barcha journallar</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li>
                        <a href="?page=journal&view=form" class="fw-normal btn btn-danger" style="color: white">Yangi qo`shish</a>
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
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Rasm</th>
                                <th class="border-top-0">Title</th>
                                <th class="border-top-0">Text</th>
                                <th class="border-top-0">PDF</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach(getAll("journals") as $key=>$r):?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><img style="width: 100px;" src="<?=$config['base']['url']."assets/journal/image/".$r['rasm']?>" alt=""></td>
                                <td><?=$r['title']?></td>
                                <td><?=textShorten($r['text'], 100)?></td>
                                <td><?=$r['pdf']?></td>
                                <td><?=$r['date']?></td>
                                <td>
                                    <a href="?page=journal&view=form&id=<?=$r['id']?>" type="button" class="btn btn-success">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button onclick="delete_item(<?=$r['id']?>)" type="button" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach;?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function delete_item(id){
        var res = confirm("Rostdan ham o`chirishni hohlaysizmi ?");
        if(res){
            window.location.replace(`?page=journal&view=delete&id=${id}`);
        }
    }
</script>
