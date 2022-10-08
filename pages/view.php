
<?php
    $data = getOne("journals", $_GET["id"])[0];
    $submissioin = getSubmissions($_GET["id"]);
?>

<style>
    .__line{
        display: block;
        border-bottom: 2px solid #48BDC5;
        width: 100px;
        margin-top: 10px;
        margin-bottom: 20px;
    }
</style>

<section class="blog-section style-four section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="left-side">
                    <h1><?=$data["title"]?></h1>
                    <br>
                    <div style="display: flex; flex-direction: row;">
                        <div>
                            <img style="width: 350px;" src="<?=$config['base']['url']."assets/journal/image/".$data["rasm"];?>" alt="">
                        </div>
                        <div style="padding: 0px 20px;">
                            <p><?=$data["text"]?></p>
                            <strong>PUBLISHED: <?=$data["date"]?></strong>
                        </div>
                    </div>
                    <div style="margin-bottom: 50px;">
                        <h5>FULL ISSUE</h5>
                        <span class="__line"></span>
                        <a href="view.php?table=journals&id=<?=$_GET["id"]?>" class="btn btn-primary">PDF</a>
                    </div>
                    <div>
                        <h5>ARTICLES</h5>
                        <span class="__line"></span>

                        <?php foreach($submissioin as $key=>$r):?>
                            <div class="card mb-3" style="border: none">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$r["title"]?></h5>
                                    <p class="card-text"><?=$r["author"]?></p>
                                    <p class="card-text"><small class="text-muted">page: <?=$r['page']?></small></p>
                                    <a href="view.php?table=journal&id=<?=$r["id"]?>" class="btn btn-primary">pdf</a>
                                </div>
                            </div>
                        <?php endforeach;?>
                                
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
              <div class="right-side">
                <div class="categorise-menu">
                  <div class="text-title">
                    <h6>Indexing</h6>
                  </div>
                  <ul class="categorise-list" >
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/google-scholar-logo.png" alt="" width="150" height="57">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/imgonline-com-ua-compresstosize-yitfxcinhn6.jpg" alt="" width="150" height="49">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/indexing-onesearch.png" alt="" width="150" height="44">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/indexing-opendoar.png" alt="" width="150" height="35">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/open-aire-explore.png" alt="" width="150" height="44">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/base-logo-kl.png" alt="" width="150" height="58">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/logo.jpg" alt="" width="150" height="44">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/top-up3.png" alt="" width="150" height="72">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/img44.jpg" alt="" width="150" height="91">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/asi.png" alt="" width="200" height="23">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/img42.jpg" alt="" width="150" height="41">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/pkp-index-logo-1.png" alt="" width="150" height="48">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/oaji.gif" alt="" width="150" height="32">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/indexing-onerepo.png" alt="" width="150" height="42">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/logo.png" alt="" width="150" height="68">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/logo-wcmasthead-en.png" alt="" width="150" height="46">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/img45.jpg" alt="" width="150" height="64">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/img38.jpg" alt="" width="150" height="150">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/img37.jpg" alt="" width="150" height="51">
                    </li>
                    <li style="padding: 10px">
                      <img src="https://scholarzest.com/public/site/images/pcadmin/download-3.jpg" alt="" width="150" height="72">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>