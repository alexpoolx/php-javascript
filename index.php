<?php 
    include('documento.php');
    if(isset($_POST['submit'])){
        $message = "debes elegir maximo 5 campeones";
        $info_1 = $_POST['campeones_a'];  
        $info_2 = $_POST['campeones_b'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
        <div class="container mt-5">
          <form action="index.php" method="POST">
           <div class="row">
                <div class="col-md-6">
                        <h3>Campeones de Marvel</h3>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>
                                <?php if(count($info_1) < 5){ echo $message;}
                                    else{ 
                                        foreach($info_1 as $campeon){
                                            echo "<ul><li>".$campeon."</li></ul>";
                                        }
                                    }
                                ?>
                            </strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <?php foreach($arreglo_1 as $arr){?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?php echo $arr['nombre']?>" name="campeones_a[]" id="<?php echo $arr['id']?>">
                            <label class="form-check-label" for="defaultCheck1">
                                <?php echo $arr['nombre'];?>
                            </label>
                        </div>
                        <?php }?>
                </div>

                <!--OTRO CHECK BOX-->

                <div class="col-md-6">
                    <h3>Campeones de League of Legends</h3>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>
                        <?php if(count($info_2) < 5){ echo $message;}
                            else{ 
                                foreach($info_2 as $campeon){
                                    echo "<ul><li>".$campeon."</li></ul>";
                                }
                            }
                        ?>
                        </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <?php foreach($arreglo_2 as $arr){?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="<?php echo $arr['nombre']?>" name="campeones_b[]" id="<?php echo $arr['id']?>">
                        <label class="form-check-label" for="defaultCheck1">
                            <?php echo $arr['nombre'];?>
                        </label>
                    </div>
                    <?php }?>
                </div>
           </div>
            <button type="submit" name="submit" class="btn btn-outline-success btn-sm">OK</button>
            </form>   
        </div>
    <script src="dist/js/jquery-3.3.1.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
</body>
</html>