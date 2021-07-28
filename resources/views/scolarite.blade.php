<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La scolarité</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style type="text/css">
     @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
     @import url("../fonts/bootstrap/glyphicons-halflings-regular.eot");

        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}
a:link{
    text-decoration: none;
}
.wrapper{
  position: absolute;
  top: 70%;
  left: 90%;
  transform: translate(-50%,-50%);
}

.wrapper .navbar{
  width: 300px;
  background: transparent;
  display: flex;
  justify-content: space-between;
  padding: 10px 25px;
  border-radius: 5px;
}

.wrapper .navbar ul li a{
  color: #644def;
}

.wrapper .navbar .left ul,
.wrapper .navbar .right ul li a{
  display: flex;
  align-items: center;
  height: 40px;
}

.wrapper .navbar .left ul li,
.wrapper .navbar .right img{
  margin: 0 10px;
}

.wrapper .navbar .right a{
  text-align: right;
}

.wrapper .navbar .right a span{
  font-size: 10px;
}

.wrapper .navbar .right ul li{
  position: relative;
}

.wrapper .navbar .right ul li .dropdown{
  position: absolute;
  top: 65px;
  right: 0;
  background: #fff;
  padding: 5px 25px;
  border-radius: 5px;
  display: none;
}

.wrapper .navbar .right ul li .dropdown .fas{
  margin-right: 10px;
}

.wrapper .navbar .right ul li .dropdown:before{
  content: "";
  position: absolute;
  top: -20px;
  left: 50%;
  transform: translateX(-50%);
  border: 10px solid;
  border-color: transparent transparent #fff transparent;
}

.wrapper .navbar .right ul li.active .dropdown{
  display: block;
}

.navbar
{
        height: 90px;
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
        <div class="wrapper">
            <div class="navbar">
                <div class="left">
                    <ul>

                  </ul>
                </div>
                <div class="right">
                    <ul>
                      <li>
                        <a href="#">
                          <p style="color:white; width:150px" ><?php echo session()->get('des'); ?><br> <span>Admin</span></p><img style src="https://i.ibb.co/SVGp8MB/d4Qwh8E.png" alt="Admin" width="40"><i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown">
                            <ul>
                              <li><a href="logout"><i class="fas fa-sign-out-alt" ></i> Se déconnecter</a></li>
                          </ul>
                        </div>

                      </li>
                  </ul>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <br><br><br><br> <br>
    <?php
    $conn= mysqli_connect("localhost","root","","myseconnddb");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
    $sql ="SELECT an1,an2 FROM anneeuniv WHERE idyear=1";
    $result= $conn->query($sql);

    if($result -> num_rows > 0 ){
    while($row=$result->fetch_assoc())
    {
        echo  "l'anée universitaire: ". $row["an1"]. "/" .$row["an2"];
    }
}
$conn->close();
    ?>
    <div style="height:50px"></div>
    <div style="text-align:left;">
        <li style=" margin: 20px;">
            <ul> <a href="../scolarite"  class="btn btn-info" style="width:100px; height: 100px; "> <img style src="https://i.ibb.co/Bthc3qY/output-onlinepngtools-1.png" alt="Admin" width="50"> <br> Accueil </a></ul>
            <ul> <a href="scolarite/utilisateurs"  class="btn btn-info" style="width:100px; height: 100px; font-size:11px"><img style src=" https://i.ibb.co/jV6stSz/output-onlinepngtools-2.png" width="45">   <p>  Modifier <br> les comptes </p> </a></ul>
            <ul><a  href="scolarite/place" class="btn btn-info" style="width:100px; height: 100px; font-size:15px;"> <img style src="https://i.ibb.co/qWKdqmN/output-onlinepngtools-3.png" width="45"> <br> Places <br> par option  </a></ul>
            <ul><a  class="btn btn-info" onclick="myFunction()" style="width:100px; height: 100px; font-size:15px;">  <img style src="https://i.ibb.co/jgcFWsM/output-onlinepngtools-4.png" width="45"> <br> Modifier <br> l'ann. univ. </a></ul>
             </li>
</div>







<!-- modifier utilisateur Modal -->
<div class="modal fade" id="utilisateurEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier les parametres de cet utilisateur</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form id="utilisateurEditForm">
                @csrf
                <input type="hidden" name="id_utilisateur" id="id_utilisateur" />
                <div class="form-group">
                    <label for="login_utilisateur">Nom Utilisateur</label>
                    <input type="text" class="form-control" id="login_utilisateur2">
                </div>
                <div class="form-group">
                    <label for="mdp_utilisateur">Mot de Passe</label>
                    <input type="text" class="form-control" id="mdp_utilisateur2">
                </div>
                <button type="submit" class="btn btn-primary" style="float: right;" > Soumettre </button>
            </form>
        </div>

      </div>
    </div>
  </div>

<div style="position:relative; left:60px; top:-500px;">

    <div id="mDiv" class="container" style="height: 90px; width: 400px; display:none;">
        <br><br><br><br><br>
        <div class="row" style="">
            <div class="col-md-12">
                <div class="card">

                    <form action="{{route('year')}}" method="POST">
                        @csrf
                        <div class="modal-body">
    <div class="form-group">
    année 1: <input class="form-control"  type="number" placeholder="" name="an1" id="an1" required>
    </div>
    <div  class="form-group">
        année 2: <input class="form-control" type="number" placeholder="" name="an2" id="an2" required>
    </div>
    <div style="text-align:center;">
        <button  class="btn btn-info" type="submit" name="button" id="button">changer</button>
    </div>
</form>


</div>
</div>
</div>
</div>
</div>
</body>
</html>







<script>
    document.querySelector(".right ul li").addEventListener("click", function(){
  this.classList.toggle("active");
});
</script>

<script>
    function myFunction() {
  var x = document.getElementById("mDiv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
