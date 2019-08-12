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

        <div class="card-body">
          <h2 class="card-title display-3">Face Detection</h2>
          <h4 class="card-text display-5">Choose your image</h4>


            <form action="result.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" accept="image/*" class="form-control">
                <br>
                <button type="submit" style="border-radius: 0px;" class="btn btn-lg btn-block btn-outline-success">Detect Image</button>
            </form>

        </div>
      </div>

      <!-- card ends -->

    </div>
</body>
</html>
