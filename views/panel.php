<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <?php include_once 'parts/head.php'; ?>
    <body>
        <!-- Page-->
        <div class="text-center page">
     
            <?php include_once 'parts/header.php'; ?>

            <h3 class='page-title'>Panel Administrativo</h3>
            

            <div class="shell" style="margin-bottom: 45px">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Codigo</th>
                        <th>Habitacion</th>
                        <th>Ingreso</th>
                        <th>Salida</th>
                        <th>Huesped</th>
                        <th>DNI</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            <tbody>
        <?php
            foreach ($data['book'] as $item) {
        ?>
            <tr>
                <td><?php echo $item['id'];?></td>
                <td><?php echo $item['cod'];?></td>
                <td><?php echo $item['room'];?></td>
                <td><?php echo $item['date_in'];?></td>
                <td><?php echo $item['date_out'];?></td>
                <td><?php echo $item['name'];?></td>
                <td><?php echo $item['dni'];?></td>
                <td><a href="<?php echo MAIN_URL;?>panel/delete?id=<?php echo $item['id'];?>" class="btn btn-danger">Borrar</a></td>
            </tr>

        <?php
            }
        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Habitacion</th>
                            <th>Ingreso</th>
                            <th>Salida</th>
                            <th>Huesped</th>
                            <th>DNI</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

      
        <?php include_once 'parts/footer.php'; ?>

       
    </div>
  </body>
</html>

