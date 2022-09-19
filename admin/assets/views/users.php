<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Ro`yhatdan o`tkan foydalanuvchilar</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li>
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
                                <th class="border-top-0">Ism</th>
                                <th class="border-top-0">Familiya</th>
                                <th class="border-top-0">Sharif</th>
                                <th class="border-top-0">Yosh</th>
                                <th class="border-top-0">Telefon</th>
                                <th class="border-top-0">Manzil</th>
                                <th class="border-top-0">Oliy/1-4sinf</th>
                                <th class="border-top-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach(getAll("auth") as $key=>$r):?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td>
                                    <img style="width: 100px;" src="<?=$config['base']['url']."assets/images/avatar/".$r['rasm']?>" alt="rasm mavjud emas">
                                </td>
                                <td><?=$r['ism']?></td>
                                <td><?=$r['fam']?></td>
                                <td><?=$r['sharfi']?></td>
                                <td><?=$r['yosh']?></td>
                                <td><?=$r['tel']?></td>
                                <td><?=$r['manzil']?></td>
                                <td><?=$r['category']?></td>
                                <td>
                                    <a href="?page=savollar&view=form&id=<?=$r['id']?>" type="button" class="btn btn-success">
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
            window.location.replace(`?page=savollar&view=delete&id=${id}`);
        }
    }
</script>
