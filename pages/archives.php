      <!-- Contact Section -->
      <section class="blog-section style-four section">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <div class="left-side">
                <?php foreach(getArxiv() as $key=>$r):?>
                  <div class="item-holder">
                    <div class="content-text">
                      <a href="?view=archive_view&year=<?=$r["year"]?>&month=<?=$r["month"]?>">
                        <h4>
                          <?=$r["year"]?>
                        </h4>
                      </a>
                      <span>  <?=date('F', mktime(0, 0, 0, $r["month"], 10));?> <?=$r["year"]?></span>
                    </div>
                  </div>
                <?php endforeach;?>
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
