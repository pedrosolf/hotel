<div class="hotel-booking-form">
    <h3>Reservas</h3>
    <!-- RD Mailform-->
    <form class="rd-mailform-1" data-form-output="form-output-global" data-form-type="contact" method="get" action="<?php echo MAIN_URL; ?>booking/verify">
      <div class="range range-sm-bottom spacing-20">
        
        <div class="cell-lg-12 cell-md-4 cell-sm-6">
          <p class="text-uppercase">Llegada</p>
          <div class="form-wrap">
            <label class="form-label form-label-icon" for="date-in"><span class="icon icon-primary fa-calendar"></span><span>Check-in Date</span></label>
            <input class="form-input" id="date-in" data-time-picker="date" type="text" name="date-in" data-constraints="@Required" required <?php if (isset($_GET['date-in'])){ echo 'value="'.$_GET['date-in'].'"';}; ?>>
          </div>
        </div>
        <div class="cell-lg-12 cell-md-4 cell-sm-6">
          <p class="text-uppercase">Salida</p>
          <div class="form-wrap">
            <label class="form-label form-label-icon" for="date-out"><span class="icon icon-primary fa-calendar"></span><span>Check-out Date</span></label>
            <input class="form-input" id="date-out" data-time-picker="date" type="text" name="date-out" data-constraints="@Required" required <?php if (isset($_GET['date-out'])){ echo 'value="'.$_GET['date-out'].'"';}; ?>>
          </div>
        </div>
        <div class="cell-lg-12 cell-md-12 cell-xs-12">
          <p class="text-uppercase">Tipo Habitacion</p>
          <div class="form-wrap form-wrap-validation">
            <!--Select 2-->
            <select class="form-input select-filter" name="room" required>
              <?php
                foreach ($data['room_type'] as $tipo) {
                  $selected = "";
                  if ($tipo['id']==$data['room_type_selected']['id']){
                    $selected = "selected=selected";
                  }
                  echo '<option value="'.$tipo['id'].'" '.$selected.'>'.$tipo['description'].'</option>';
                }
              ?>
            </select>
          </div>
        </div>
        
        <div class="cell-lg-12 cell-md-4">
          <button class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>Validar</span></button>
        </div>
      </div>
    </form>
  </div>