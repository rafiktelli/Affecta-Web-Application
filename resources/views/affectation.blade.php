<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Effectuer l'Affectation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style type="text/css">
     @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
     @import url("../fonts/bootstrap/glyphicons-halflings-regular.eot");
    {
        text-align: center;
    }
    .myDiv
    {

        background-color:cornflowerblue;
        text-align: center;
    }

    .h1 {text-align: center;}

    .card
    {
        background-color:whitesmoke;
    }


*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
  background: #ffd500;
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


#upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}
body {
    min-height: 100vh;
    background-color: #dce0d8;
    background-image: linear-gradient(170deg,  #f5f5f5 0%, #d4d4d4 100%);
}
    /*
Icon: Daniel Bruce, danielbruce.se, flaticon.com
Animation: Federico Brigante, bfred.it
for Wildlife.la and Kia
*/

svg {

float:right;
margin: auto;
}

#lid {
animation: blink 2.4s infinite;
}
#eye {
animation: squeeze 2.4s infinite;
}

@keyframes blink {
90% {
transform: none;
animation-timing-function: ease-in;
}
93% {
transform: translateY(15px) scaleY(0)
}
100% {
animation-timing-function: ease-out;
}
}
@keyframes squeeze {
90% {
transform: none;
animation-timing-function: ease-in;
}
93% {
transform: translateY(3px) scaleY(0.8)
}
100% {
animation-timing-function: ease-out;
}
}



</style>


</head>

<body style="background-color:#dcdce4">

    <div style="text-align:left; position: absolute; left:0px; top:164px; width: 200px; height: 120px;">
        <li style=" margin: 20px;">
       <ul> <a href="../scolarite"  class="btn btn-info" style="width:125px; height: 125px; font-size: 20px; background-color:cornflowerblue; "> <img style src="https://i.ibb.co/Bthc3qY/output-onlinepngtools-1.png" alt="Admin" width="70">  <br> Accueil </a></ul>
       <ul> <a href="scolarite/utilisateurs"  class="btn btn-info" style="width:125px; height: 125px; font-size: 20px; background-color:cornflowerblue;"> <img style src="https://i.ibb.co/x2SK6xM/output-onlinepngtools-5.png" alt="Admin" width="70"> <br> Classement </a></ul>
       <ul><a  href="../effectuer-affectation" class="btn btn-info" style="width:125px; height: 125px; font-size: 20px; background-color:#D3D3D3; border-color:lightgrey;"> <img style src="https://i.ibb.co/TL0HSdg/output-onlinepngtools-8.png" alt="Admin" width="70"> <br> Affectation  </a></ul>
        </li>
</div>

    <div id="navbar" class="navbar navbar-fixed-top" style="height:90px;">
        <div id="navbar" class="navbar navbar-fixed-top" style="background-color:cornflowerblue; text-align: center; height:90px;">
    <img style src="https://i.ibb.co/fkjSfDr/USTHB-Logo.png" alt="Admin" width="80">

    <h1 style="color:bisque; font-size:33px;">La faculté de génie mécanique et génie des procédés</h1>


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
                  <p style="color:white; width:120px" ><?php echo session()->get('des'); ?><br> <span>Admin</span></p><img style src="https://i.ibb.co/SVGp8MB/d4Qwh8E.png" alt="Admin" width="40"><i class="fas fa-angle-down"></i>

                </a>

                <div class="dropdown">
                    <ul>
                      <li><a href="logout"><i class="fas fa-sign-out-alt"></i> Se déconnecter</a></li>
                  </ul>
                </div>

              </li>
          </ul>
        </div>
    </div>
</div>

        <br>
    </div>
    </div>
    <br>
<div style="height:80px;">
</div>

        <div style="display: flex; height:100px; color:#003c71; width:650px; margin:0 auto;">
            <div>
            <h1 style="border-bottom: 2px solid black; border-bottom-color: #eede99;">  AFFECTATION DES ETUDIANTS

                </h1>

           </div>
           <div style="width:70px;">
            <br>
            <a href="/afficher-affectation">
                <svg width="50" height="50"  version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" style="float:right;zoom:115%;">
                    <defs>
                        <path d="M0,15.089434 C0,16.3335929 5.13666091,24.1788679 14.9348958,24.1788679 C24.7325019,24.1788679 29.8697917,16.3335929 29.8697917,15.089434 C29.8697917,13.8456167 24.7325019,6 14.9348958,6 C5.13666091,6 0,13.8456167 0,15.089434 Z" id="outline"></path>
                        <mask id="mask">
                          <rect width="100%" height="100%" fill="white"></rect>
                          <use xlink:href="#outline" id="lid" fill="black"/>
                        </mask>
                    </defs>
                    <g id="eye">
                        <path d="M0,15.089434 C0,16.3335929 5.13666091,24.1788679 14.9348958,24.1788679 C24.7325019,24.1788679 29.8697917,16.3335929 29.8697917,15.089434 C29.8697917,13.8456167 24.7325019,6 14.9348958,6 C5.13666091,6 0,13.8456167 0,15.089434 Z M14.9348958,22.081464 C11.2690863,22.081464 8.29688487,18.9510766 8.29688487,15.089434 C8.29688487,11.2277914 11.2690863,8.09740397 14.9348958,8.09740397 C18.6007053,8.09740397 21.5725924,11.2277914 21.5725924,15.089434 C21.5725924,18.9510766 18.6007053,22.081464 14.9348958,22.081464 L14.9348958,22.081464 Z M18.2535869,15.089434 C18.2535869,17.0200844 16.7673289,18.5857907 14.9348958,18.5857907 C13.1018339,18.5857907 11.6162048,17.0200844 11.6162048,15.089434 C11.6162048,13.1587835 13.1018339,11.593419 14.9348958,11.593419 C15.9253152,11.593419 14.3271242,14.3639878 14.9348958,15.089434 C15.451486,15.7055336 18.2535869,14.2027016 18.2535869,15.089434 L18.2535869,15.089434 Z" fill="#003c71"></path>
                        <use xlink:href="#outline" mask="url(#mask)" fill="#003c71"/>
                    </g>
                </svg>
                </a>
           </div>
        </div>
           <br><br>
    <div style="text-align:right;">
        <br><br>
        <!--    <a href="logout" class="btn btn-danger">Se déconnecter</a> -->

    </div>




    <section style="padding-top:0px;">

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3" >
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if($message=Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{$message}}</strong>
                        </div>
                    @endif
                    <div class="card" style="background-color:#FFFFFF;  zoom:120%; ">
                        <div class="card-header">
                            Importer le fichier Excel de cursus des étudiants
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="{{route('choixUploaded')}}">
                                @csrf
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <div class="input-group-append">
                                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <input id="upload" type="file" name="file" onchange="readURL(this);" class="form-control border-0">

                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                    </div>

                                </div>

                                <div style="text-align: center;">

                                    <button class="btn btn-primary" onclick="showDiv()" style="background-color:#047cfc;">Importer</button>
                                </div>
                            </form>



                        </div>

                    </div>




                    <br>
                    <br>
                    <br>
                    @if($message=Session::get('success'))
                    <div class="horizontal-center">
                    <form method="POST" enctype="multipart/form-data" action="{{route('affectDone')}}">
                        @csrf
                        <div style="text-align:center;">
                        <button type="submit" class="btn btn-primary" style="background-color:#047cfc;">Affecter</button>
                        </div>
                    </form>
                    @endif
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <div style="height:20px;">

    </div>
    <div class="container" id="kDiv" style="height:500px; width:500px; float:center; text-align:center;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                               Nombre de places par option
                        </div>
        <table id="table2" class="table">
            <thead>
                <tr>
                  <th style="width:120px;">Code option</th>
                  <th style="width:400px;">Option</th>
                  <th style="width:205px;">Nombre de place master </th>
                </tr>
            </thead>
            <tbody>
                        <?php
                        $options=DB::table('optiondep')->where('idDep','=',session('id'))->get();
                        ?>


    @foreach ($options as $option)
         <tr id="sid{{$option->idOption}}">
          <td style="120px;">{{$option->idOption}}</td>
          <td style="width:400px;">{{$option->desOption}}</td>
          <td style="width:205px;">{{$option->nbPlaceOption}}</td>
         </tr>
     @endforeach

            </tbody>
            </table>
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


