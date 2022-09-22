<section class="team-section section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3><?php echo constant("editorial_team"); ?><h3>
          
        </div>
        <!-- Nav tabs -->
        <div class="tab-content" id="teamTab">
          <!--Start single tab content-->
          <div class="team-members tab-pane fade show active" >
            <div class="row">
              <?php foreach(getUsers() as $key=>$r):?>
                <div class="col-lg-4 col-md-6">
                  <div class="team-person text-center">
                    <img loading="lazy" src="<?=$config['base']['url']."assets/images/users/".$r['rasm']?>" class="img-fluid" alt="team">
                    <h6><?=$r["fullname"]?></h6>
                    <p><?=$r["info"]?></p>
                  </div>
                </div>
              <?php endforeach;?>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
