<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <?php include_once 'parts/head.php'; ?>
    <body>
        <!-- Page-->
        <div class="text-center page">
     
            <?php include_once 'parts/header.php'; ?>

            <h3 class='page-title'>Login</h3>

            <form id="form-login" class="rd-mailform-1" style="max-width:500px; margin: 0 auto; padding: 60px 0" method="post" action="<?php echo MAIN_URL.'login/validate';?>">
                <div class="range range-sm-bottom spacing-20">
                    
                    <div class="cell-sm-12">
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="email" type="email" name="email" />
                            <span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="cell-sm-12">
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="password" type="password" name="password"/>
                            <span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="password">Password</label>
                        </div>
                    </div>
                    <div class="cell-sm-12">
                        <button class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>Login</span></button>
                    </div>
                </div>
            </form>


      
        <?php include_once 'parts/footer.php'; ?>

       
    </div>
  </body>
</html>