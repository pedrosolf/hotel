<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <?php include_once 'parts/head.php'; ?>
    
<body>
    <?php include_once 'parts/header.php'; ?>

    <div class="shell">
        <div class="range range-50 range-md-center">
            <div class="cell-lg-12">
                <!--<h3 class='page-title'>Verificar disponibilidad</h3>-->
            </div>
            <div class="cell-lg-12" style="margin-top: 20px;">
                <p class="text-message">
                    <?php
                        if (count($data['booking']) < $data['room_type_selected']['total']) {
                            echo "<span style='color: #4B974D;'>Tenemos una habitacion disponible para vos</span>";
                        }else{
                            echo "<span style='color: #DC3545;'>Actualimente no contamos con habitaciones para esas fechas</span>";
                        };
                    ?>
                
                </p>
            </div>
        </div>
    </div>

    <div class="shell mb-50">
        <div class="range range-50 range-md-center">
            <div class="cell-lg-4 modificado">
                <?php include_once 'parts/formConfirm.php'; ?> 
                <?php include_once 'parts/form.php'; ?>
                   
            </div>
            <div class="cell-lg-8">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
      
        
      
        <?php include_once 'parts/footer.php'; ?>

        <script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'es',
      headerToolbar: {
        //left: 'prev,next today',
        center: 'title',
        //right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: '<?php echo $_GET['date-in'];?>',
      navLinks: false, // can click day/week names to navigate views
      businessHours: false, // display business hours
      editable: false,
      selectable: false, 
      events: '<?php echo MAIN_URL; ?>booking/list/<?php echo $_GET['date-in'];?>/<?php echo $_GET['date-out'];?>/<?php echo $_GET['room'];?>' 
    });
     

    calendar.render();
  });

</script>
    </div>
  </body>
</html>