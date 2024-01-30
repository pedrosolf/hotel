<?php
    if($data['available']){
?>
    <div class="reserva">
        <img src="<?php echo MAIN_URL . $data['room_type_selected']['img'];?>" class="room-img">
    
        <div class="datos">
            <div class="item"><?php echo $data['available']['name']; ?></div>
            <div class="item"><?php echo $data['available']['floor']; ?></div>
            <div class="item">u$s <?php echo $data['available']['price']; ?></div>
        </div>
        

        <?php
            if (!isset($_SESSION['log']) || $_SESSION['log'] !== true) {
            ?>
            <a href="<?php echo MAIN_URL;?>login" class="button button-primary button-square button-block" style="margin-top: 0;margin-bottom: 25px;">Iniciar sesion para confirmar</a>
            <?php
            }else{
            ?>
            <form id="confirm-form" action="<?php echo MAIN_URL.'booking/confirm';?>" method="POST" style="margin-bottom: 25px">
            <input type="hidden" name="id_room" value="<?php echo $data['available']['id']; ?>">
            <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
            <input type="hidden" name="date_in" value="<?php echo $_GET['date-in']; ?>">
            <input type="hidden" name="date_out" value="<?php echo $_GET['date-out']; ?>">
            <button class="button button-primary button-square button-block button-effect-ujarak" type="submit" style="margin-top: 0;">
                <span>Confirmar reserva</span>
            </button>
        </form>
        <?php } ?>

    </div>
    
<?php } ?>