<?php 
session_start();
//var_dump($_SESSION['value']['total']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col my-4">
                <form action="realcalculate.php" method="post">
                    <?php   if(isset($_SESSION['value'])): ?>
                        <p>Here is Your value:::<?php echo $_SESSION['value']['total'] ?></p>
                        <?php  endif; ?>
                    <h3>Calculate
                    </h3>
                <p><?php $final ?></p>
                    <div class="row g-3">
                      <div class="col">
                        <input type="text" name="kyat" class="form-control" placeholder="" aria-label="First name">

                      </div>
                      <div class="col">
                        <input type="text" name="pay" class="form-control" placeholder="ပဲ" aria-label="Last name">
                      </div>
                      <div class="col">
                        <input type="text" name="yway" class="form-control" placeholder="ရွေး" aria-label="Last name">
                      </div>
                    </div>
                    <div class="my-2"></div>
                    <select  name="sign" class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected>Choose 14,15,16</option>
                      <option value="14">၁၄ပဲ</option>
                      <option value="15">၁၅ပဲ</option>
                      <option value="16">၁၆ပဲ</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Calculate</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>