
<!-- Contact Section -->
      <section class="blog-section style-four section">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <div class="left-side">
                <?php foreach(getJournalsLimt(1,$start) as $key=>$r):?>
                  <div class="item-holder">
                    <div class="content-text">
                      <a href="#">
                        <h4><?=$r["title"]?></h4>
                      </a>
                      <span>Author: <?=$r["author"];?> / <?=$r["date"]?></span>
                      <div class="link-btn">
                        <a href="view.php?pdf=<?=$r["id"]?>" class="btn-style-one">PDF</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach;?>
                <div class="styled-pagination">
                  <ul>
                    <li>
                      <a class="prev" href="?start=<?=$_GET["start"]==0||!isset($_GET["start"])?0:$_GET["start"]-6?>"><span class="fas fa-angle-left" aria-hidden="true"></span></a>
                    </li>
                      <?php echo pagination()?>
                    <li>
                      <a class="next" href="?start=<?=$_GET['start']+6?>"
                        ><span
                          class="fas fa-angle-right"
                          aria-hidden="true"
                        ></span
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="right-side">
                <div class="categorise-menu">
                  <div class="text-title">
                    <h6><?php echo constant("categories"); ?></h6>
                  </div>
                  <ul class="categorise-list">
                    <?php foreach(getCategoryCount() as $key=>$r):?>
                      <li>
                        <a href="#"><?=$r["title_".$_SESSION['lang']]?><span>(<?=$r['count']?>)</span></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
