<?php
  $year = $_GET["year"];
  $month = $_GET["month"];
?>

<section class="blog-section style-four section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="left-side">
          <?php foreach(getJournalsYear($year, $month) as $key=>$r):?>
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
