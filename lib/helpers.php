<?php
    function pagination(){
        $soni = agregat_func();
        $page = ceil($soni / 6);
        define('besh', 6);
        define('not', 0);
        $s = not;
        for($i=1; $i<=$page; $i++){
            ?>
                <li><a class="<?=$_GET["start"]==$s?'active':''?>" href="?start=<?=$s?>"><?=$i?></a></li>
            <?php
            $s += besh;
        }
    }
?>