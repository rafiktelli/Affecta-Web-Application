<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Authentification</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style type="text/css">

    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
    .navbar
{
    height: 90px;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;

}

body {
    min-height: 100vh;
    background-color: #dce0d8;
    background-image: linear-gradient(170deg,  #f5f5f5 0%, #d4d4d4 100%);
}

</style>
</head>
<body>
    <div id="navbar" class="navbar navbar-fixed-top" style="background-color:cornflowerblue; text-align: center;">
        <img style src="https://i.ibb.co/fkjSfDr/USTHB-Logo.png" alt="Admin" width="80">
        <h1 style="color:bisque; font-size:35px;">La faculté de génie mécanique et génie des procédés</h1>


    <div style="text-align:right;">
        <br>
        <!--    <a href="logout" class="btn btn-danger">Se déconnecter</a> -->


    </div>
</div>

    <section style="padding-top:60px;">
        <img src="https://i.ibb.co/WHMZFMc/img-01.png" style="margin-left:50px; margin-top:20px; width:30%" >
        <div class="container" style="height: 100px; width: 400px; margin-right:150px; width: 30%; float:right;">
            <br>
            <div style="right:50px;">
            <img src="https://i.ibb.co/JxFZ27h/AFFECTA.png">
        </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header" style=" font-size:18px; text-align:center;">
                               Connexion
                        </div>


    <form action="login" method="POST">
        @csrf
        <div class="modal-body">
        <div class="form-group">
            <input type="text" class="form-control" name="user" placeholder="nom d'utilisateur">
        </div>
        <div  class="form-group">
            <input class="form-control" type="password" name="pwd" placeholder="mot de passe">

        </div>
        <div style="text-align:center;">
            <button  class="btn btn-success" type="submit" style="background-color:cornflowerblue;">Se connecter</button>
        </div>
    </form>



    </div>
    </div>
    </div>
    </div>
</section>
<!-- Span top edge -->
<div class="relative h-32 w-32 ...">
    <div class="absolute inset-x-0 top-0 h-16 ...">1</div>
  </div>

  <!-- Span right edge -->
  <div class="relative h-32 w-32 ...">
    <div class="absolute inset-y-0 right-0 w-16 ...">2</div>
  </div>

  <!-- Span bottom edge -->
  <div class="relative h-32 w-32 ...">
    <div class="absolute inset-x-0 bottom-0 h-16 ...">3</div>
  </div>

  <!-- Span left edge -->
  <div class="relative h-32 w-32 ...">
    <div class="absolute inset-y-0 left-0 w-16 ...">4</div>
  </div>

  <!-- Fill entire parent -->
  <div class="relative h-32 w-32 ...">
    <div class="absolute inset-0 ...">5</div>
  </div>

  <!-- Pin to top left corner -->
  <div class="relative h-32 w-32 ...">
    <div class="absolute left-0 top-0 h-16 w-16 ...">6</div>
  </div>

  <!-- Pin to top right corner -->
  <div class="relative h-32 w-32 ...">
    <div class="absolute top-0 right-0 h-16 w-16 ...">7</div>
  </div>

  <!-- Pin to bottom right corner -->
  <div class="relative h-32 w-32 ...">
    <div class="absolute bottom-0 right-0 h-16 w-16 ...">8</div>
  </div>

  <!-- Pin to bottom left corner -->
  <div class="relative h-32 w-32 ...">
    <div class="absolute bottom-0 left-0 h-16 w-16 ...">9</div>
  </div>
</body>
</html>
