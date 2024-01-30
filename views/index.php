<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

    <?php include_once 'parts/head.php'; ?>

<body>
     
    <?php include_once 'parts/header.php'; ?>

    <section class="section">
        <div class="shell-wide">
          <div class="range range-30 range-xs-center">
            <div class="cell-lg-8 cell-xl-9">
            <?php include_once 'parts/slider.php'; ?>
            </div>
            <div class="cell-lg-4 cell-xl-3 reveal-lg-flex">
            <?php include_once 'parts/form.php'; ?>
            </div>
          </div>
        </div>
    </section>
        
  
        
    <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <div class="range range-50 range-xs-center overflow-hidden">
            <div class="cell-sm-10 cell-md-8 cell-lg-7 wow fadeInUp" data-wow-delay=".1s">
              <div class="post-video post-video-border">
                <div class="post-video__image"><img src="<?php echo MAIN_URL;?>assets/images/video.jpg"  alt="" width="1020" height="525"/>
                </div>
                <div class="post-video__body"><a class="link-control post-video__control" data-lightgallery="item" href="https://www.youtube.com/watch?v=I5FlP07kdvM"></a></div>
              </div>
            </div>
            <div class="cell-sm-10 cell-md-8 cell-lg-5 reveal-flex wow fadeInUp" data-wow-delay=".3s">
              <div class="bg-primary section-wrap-content-var-1">
                <div class="section-wrap-content-var-1-inner">
                  <h2>About Us</h2>
                  <p>Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.</p>
                  <div class="group">
                    <dl class="list-desc">
                      <dt>Weekdays:</dt>
                      <dd><span>8:00–20:00</span></dd>
                    </dl>
                    <dl class="list-desc">
                      <dt>Weekends:</dt>
                      <dd><span>9:00–18:00</span></dd>
                    </dl>
                  </div><a class="button button-effect-ujarak button-lg button-secondary-outline button-square" href="about-us.html"><span>book now</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
        
    <section class="section section-md bg-secondary-4 text-center text-sm-left">
        <div class="shell">
          <div class="range range-50 range-md-justify range-sm-middle">
            <div class="cell-sm-6 cell-md-5">
              <h3>Indoor Hotel Pool</h3>
              <p>The indoor heated pool has vaulted wood beam ceilings. The whirlpool features bay windows and overlooks the pond and the north face of the local beauty spot. For the safety and health reasons, children must be accompanied by an adult when visiting the pool.</p>
              <p>The serene pool at Royal Villas spa resort and hotel boasts sleek décor that features striking floor-to-ceiling teak columns set against a cool black tile floor. Poolside dining is also available, featuring a selection of dishes from any cuisine you desire that are both healthy and delicious. Daily aqua aerobics classes help keep guests fit while on the road.</p><a class="button button-primary button button-square button-effect-ujarak button-lg" href="#"><span>read more</span></a>
            </div>
            <div class="cell-sm-6">
              <div class="box-outline box-outline__mod-1">
                <figure><img src="<?php echo MAIN_URL;?>assets/images/services.jpg"  alt="" width="546" height="516"/>
                </figure>
              </div>
            </div>
          </div>
        </div>
    </section>
      
      
    <?php include_once 'parts/footer.php'; ?>
    <?php 
        if (!empty($_GET['error'])){
    ?>
        <script>
            alert("Error al ingresar las fechas")
        </script>
    <?php
        }
    ?>
</body>
</html>