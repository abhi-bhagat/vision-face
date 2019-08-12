<?php

session_start();

require "vendor/autoload.php";


use Google\Cloud\Vision\VisionClient;
$vision = new VisionClient(['keyFile' => json_decode(file_get_contents("key.json"), true)]);

$familyPhotoResource = fopen($_FILES['image']['tmp_name'], 'r');

$image = $vision->image($familyPhotoResource,
    ['FACE_DETECTION'

    ]);
$result = $vision->annotate($image);

if ($result) {
    $imagetoken = random_int(1111111, 999999999);
    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/feed/' . $imagetoken . ".jpg");
} else {
    header("location: index.php");
    die();
}

$faces = $result->faces();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-signin-client_id" content="51066182172-5nu81gbd3s1r8pdf6t3e6b2ggokjhfan.apps.googleusercontent.com">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <title>Abhi-Project</title>
</head>


<style>

  .bg{
     background-image: linear-gradient(to top, #09203f 0%, #537895 100%);
  }
</style>
<body class="bg">




  <div id="login-container" class="m-3 d-flex justify-content-center">

    <!-- card begins -->
    <div class="card text-center shadow p-5 mb-5 bg-white rounded" style="width: 40rem;">
      <img src="<?php
          if ($faces != null) {
              echo "/feed/" . $imagetoken . ".jpg";
          } else {
              echo "image.php?token=$imagetoken";
          }
      ?>"   class="card-img-top rounded mx-auto d-block" alt="image_placeholder">

      <div class="card-body">
        <h2 class="card-title display-3">Face Detection</h2>
        <h4 class="card-text display-5">Results</h4>


        <?php if ($faces): ?>
            <?php foreach ($faces as $key => $face): ?>

                    <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <h2 class=" display-5 text-center">Expressions Info</h2>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">JOY</th>
                        <td><?php echo $face->info()['joyLikelihood'] ?></td>

                      </tr>
                      <tr>
                        <th scope="row">SORROW</th>
                        <td><?php echo $face->info()['sorrowLikelihood'] ?></td>

                      </tr>
                      <tr>
                        <th scope="row">ANGRY</th>
                        <td><?php echo $face->info()['angerLikelihood'] ?></td>

                      </tr>
                      <tr>
                        <th scope="row">SURPRIZED</th>
                        <td><?php echo $face->info()['surpriseLikelihood'] ?></td>

                      </tr>
                      <tr>
                        <th scope="row">BLURRED</th>
                        <td><?php echo $face->info()['blurredLikelihood'] ?></td>

                      </tr>
                      <tr>
                        <th scope="row">HEADWEAR</th>
                        <td><?php echo $face->info()['headwearLikelihood'] ?></td>

                      </tr>
                    </tbody>
                    </table>



                  <?php endforeach ?>
              <?php endif ?>



      </div>
    </div>

    <!-- card ends -->

  </div>

</body>
</html>
