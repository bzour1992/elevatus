<?php 
    // The helper which we will be using to create classes based on data from the HTML form
    require 'helper.php';

    // Handling received data
    if ($_POST['submit'] == 'Calculate') {
        $str1 = $_POST["str1"];
        $str2 = $_POST["str2"];
        $type = $_POST['type'];

        // Getting the results using the public static helper which creates a class based on the type of data received (Levenshtein or Hamming)
        $results =  $type . ": " . Helper::instantiate($type, $str1, $str2) . " operations needed.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Levenshtein Distance</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-distance my-5">
              <div class="card-body">
                <img class="d-block m-auto pb-2" src="assets/images/logo.png" alt="">
                <h5 class="card-title text-center">
                Levenshtein Distance
                </h5>
                
                <!-- Start form for sending data  -->
                <form class="form-distance" action="index.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="str1" placeholder="First Text" required class="form-control my-3 rounded-pill py-2 px-3" required autofocus value="<?= isset($str1) ? $str1 : '' ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" name="str2" placeholder="Second Text" class="form-control my-3 rounded-pill py-2 px-3" required value="<?= isset($str2) ? $str2 : '' ?>">
                    </div>
                        
                    <div class="form-group">
                        <select name="type" class="form-control my-3 rounded-pill" id="type" required>
                          <option value="">Please Select..</option>
                          <option value="Levenshtein" <?= $type == 'Levenshtein' ? ' selected' : ''; ?> >Levenshtein</option>
                          <option value="Hamming" <?= $type == 'Hamming' ? ' selected' : ''; ?> >Hamming</option>
                        </select>
                    </div>

                    <hr class="my-4">
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit" value="Calculate">Calculate</button>
                </form>
                <!-- END form for sending data  -->
                <hr class="my-4">
                <?php if ($_POST['submit'] == 'Calculate'): ?>
                  <div class="alert alert-success" role="alert">
                    <?= $results; ?>
                  </div>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
