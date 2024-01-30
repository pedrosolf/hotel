<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <?php include_once 'parts/head.php'; ?>
    <body>
        <!-- Page-->
        <div class="text-center page">
     
            <?php include_once 'parts/header.php'; ?>

            <h3 class='page-title'>Mis reservas</h3>

            <div class="shell" style="min-height: 70vh">
                <div class="range">
                    <?php
                        if (!$data['book']){
                            echo '<div class="alert alert-warning" style="width: 100%">No se han realizado reservas</div>';
                        }
                        foreach ($data['book'] as $item) {
                    ?>
                        <div class="cell-lg-6 mb-15">
                            <img src="<?php echo MAIN_URL.$item['img'];?>" alt="">
                            <div class="datos">
                                <div class="item">Habitacion</div>
                                <div class="item">Llegada</div>
                                <div class="item">Salida</div>
                            </div>
                            <div class="datos">
                                <div class="item"><?php echo $item['name']; ?></div>
                                <div class="item"><?php echo $item['date_in']; ?></div>
                                <div class="item"><?php echo $item['date_out']; ?></div>
                            </div>
                            <form action="<?php echo MAIN_URL.'account/delete';?>" method="POST" style="margin-bottom: 25px">
                                <input type="hidden" name="cod_book" value="<?php echo $item['cod_book']; ?>">
                                <button class="button button-primary button-square button-block button-effect-ujarak" type="submit" style="margin-top: 0;">
                                    <span>Cancelar reserva</span>
                                </button>
                            </form>
                        </div>

                    <?php
                        }
                    ?>
                </div>
            </div>

            

      
        <?php include_once 'parts/footer.php'; ?>

       
    </div>
  </body>
</html>

