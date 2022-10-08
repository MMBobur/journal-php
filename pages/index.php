
<!-- Contact Section -->
      <section class="blog-section style-four section">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <div class="blog-detail">
								<h2 class="blog-title"><?php echo constant("about_the_jounal"); ?></h2>
								<br>
								<div class="content">
									<p>
                    <?php echo constant("journal_haqida"); ?>
									</p>
								</div>
							</div>
              
              <div class="left-side">
                <?php foreach(getJournalsLimt($start) as $key=>$r):?>
                  <div class="item-holder">
                    <div class="content-text">
                      <a href="#">
                        <h4><?=$r["title"]?></h4>
                      </a>
                      <span>Author: <?=$r["author"];?> / <?=$r["date"]?></span>
                      <div class="link-btn">
                        <a href="?view=view&id=<?=$r["id"]?>" class="btn-style-one">
                          <?php echo constant("view"); ?>
                        </a>
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
      <!-- End Contact Section -->
