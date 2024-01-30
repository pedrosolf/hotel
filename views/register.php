<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <?php include_once 'parts/head.php'; ?>
    <body>
        <!-- Page-->
        <div class="text-center page">
     
            <?php include_once 'parts/header.php'; ?>

            <h3 class='page-title'>Register</h3>

            <form id="form-register" autocomplete="off" class="rd-mailform-1" style="max-width:500px; margin: 0 auto; padding: 60px 0" method="post" action="<?php echo MAIN_URL.'register/create';?>">
                <div class="range range-sm-bottom spacing-20">
                    <div class="cell-sm-12">
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="name" type="text" name="name" required/>
                            <span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="name">Nombre</label>
                        </div>
                    </div>

                    <div class="cell-sm-12">
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="lastname" type="text" name="lastname" required/>
                            <span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="lastname">Apellido</label>
                        </div>
                    </div>

                    <div class="cell-sm-12">
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="dni" type="text" name="dni" required/>
                            <span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="dni">D.N.I</label>
                        </div>
                    </div>
                    
                    <div class="cell-sm-12">
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="email" type="email" name="email" required></span>
                            <label class="form-label rd-input-label" for="email">E-mail</label>
                        </div>
                    </div>

                    <div class="cell-sm-12">
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="phone" type="text" name="phone" required/>
                            <span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="phone">Telefono</label>
                        </div>
                    </div>

                    <div class="cell-sm-12">
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="address" type="text" name="address" required/>
                            <span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="address">Dirección</label>
                        </div>
                    </div>

                    <div class="cell-sm-12">
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="password" type="password" name="password" required/>
                            <span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="password">Password</label>
                        </div>
                    </div>

                    <div class="cell-sm-12">
                        <button class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>Crear usuario</span></button>
                    </div>
                </div>
            </form>


      
        <?php include_once 'parts/footer.php'; ?>

       
    </div>
  </body>
</html>