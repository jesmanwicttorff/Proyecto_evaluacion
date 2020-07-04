<?php  include 'app/multiplo.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">

    <title>Fallabella</title>
</head>
<body>

<div style="height: 30px;"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg p-6 mb-12 bg-white ">
                <div class="card-header">Lista </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-hover">
                            <thead>
                            <tr><th>N°</th>
                            </tr>
                            </thead>
                                <tbody>
                                <?php
                                $obj = new Multiplo();
                                $i=1;
                                while($i<=100) {

                                    $mult3 = $obj->multiplo3($i);
                                    $mult5 = $obj->multiplo5($i);


                                Switch($i) {
                                    case $i%3 == 0 : ?>
                                <tr>
                                        <?php if($mult3 == 0 && $mult5 == 0) { ?>

                                            <td><?php echo "Litio"; break;?></td>

                                        <?php } ?>
                                    <td><?php echo "Falabella"; break;?></td>

                                    <?php case $i%5 == 0 : ?>

                                    <td><?php echo "Eso"; break;?></td>

                              <?php  Default: ?>


                                 <td><?php  echo $i; ?></td>

                                <?php } // fin switch ?>



                                    <?php  $i++ ; ?>
                                    </tr>
                                <?php  }  // Fin while?>
                                </tbody>



                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



</body>
</html>

