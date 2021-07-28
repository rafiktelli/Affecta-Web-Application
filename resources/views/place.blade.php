<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gérer comptes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <style type="text/css">

    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

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
        #blur {
        font-size: 16px;
        color: transparent;
        text-shadow: 0 0 8px #000;

      }

      body {
    min-height: 120vh;
    background-color: #dce0d8;
    background-image: linear-gradient(170deg,  #f5f5f5 0%, #d4d4d4 100%);
}


    </style>
</head>
<body>


    <div id="navbar" class="navbar navbar-fixed-top" style="background-color:cornflowerblue; text-align: center;">
        <img style src="https://i.ibb.co/fkjSfDr/USTHB-Logo.png" alt="Admin" width="80">
        <h1 style="color:bisque; font-size:35px;"> La faculté de génie mécanique et génie des procédés</h1>
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
                              <li><a href="/logout"><i class="fas fa-sign-out-alt" ></i> Signout</a></li>
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

    <br>
    <div style=" height:0px;  margin-left:150px;"></div>
    <a href="#">
        <span class="inner"></span>
        <i class="icon-home"></i>
      </a>
      <div style="text-align:left; position: absolute; left:0px; top:164px; width: 200px; height: 120px;">
        <li style=" margin: 20px;">
       <ul> <a href="../scolarite"  class="btn btn-info" style="width:100px; height: 100px; "> <img style src="https://i.ibb.co/Bthc3qY/output-onlinepngtools-1.png" alt="Admin" width="50"> Accueil </a></ul>
       <ul> <a href="utilisateurs"  class="btn btn-info" style="width:100px; height: 100px; font-size:11px"><img style src=" https://i.ibb.co/jV6stSz/output-onlinepngtools-2.png" width="45">  Modifier les comptes </a></ul>
       <ul> <a href="place"  class="btn btn-info" style="width:100px; height: 100px; font-size:15px;"> <img style src="https://i.ibb.co/qWKdqmN/output-onlinepngtools-3.png" width="45"> Places par option  </a></ul>
       <ul> <a class="btn btn-info" onclick="myFunction()" style="width:100px; height: 100px; font-size:15px;">  <img style src="https://i.ibb.co/jgcFWsM/output-onlinepngtools-4.png" width="45"> Modifier l'ann. univ. </a></ul>
        </li>
</div>
        <div class="container" id="kDiv" style="margin-left:150px; position: absolute; left: 75px; top:150px; width: 1000px; height: 120px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                               Sélectionner un département
                               <?php  $showSect=0; ?>
                               <?php
                                $conn=mysqli_connect("localhost","root","","myseconnddb");
                                $sql = "SELECT DISTINCT desdep from optiondep where 1";
                                $result= $conn->query($sql);

                                ?>


                               <select id="hi" style="margin-left:400px;" onchange="showDiv(this)">
                                <option> ---- </option>
                                <?php

                                     while ($row=$result->fetch_assoc()) {
                                        echo $row['desdep'];
                                        echo "<option value='".$row['desdep']."'>".$row['desdep']."</option>";

                                    }

                                ?>
                            </select>

                        </div>
                        <table id="table3" class="table" style="display:none;">
                            <thead>
                                <tr>
                                    <th style="width:120px;">Code option</th>
                                    <th style="width:400px;">Option</th>
                                    <th style="width:205px;">Nombre de place master </th>
                                    <th style="width:222px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                        <?php
                                        $options=DB::table('optiondep')->where('DesDep','=','Thérmo-Energitique')->get();
                                        ?>


                                 @foreach ($options as $option)
                                 <tr id="sid{{$option->idOption}}">
                                     <td style="120px;">{{$option->idOption}}</td>
                                     <td style="width:400px;">{{$option->desOption}}</td>
                                     <td style="width:205px;">{{$option->nbPlaceOption}}</td>
                                     <td style="width:222px;">
                                        <a href="javascript:void(0)" onclick="editUtilisateur('{{$option->idOption}})" class="btn btn-info"> Modifier </a>
                                        <a href="javascript:void(0)" onclick="deleteUtilisateur('{{$option->idOption}}')" class="btn btn-danger" style="background-color:#C70039;"> Supprimer </a>
                                    </td>
                                 </tr>
                             @endforeach
                            </tbody>
                            </table>

                            <table id="table1" class="table" style="display:none;">
                                <thead>
                                    <tr>
                                    <th style="width:120px;">Code option</th>
                                    <th style="width:400px;">Option</th>
                                    <th style="width:205px;">Nombre de place master </th>
                                    <th style="width:222px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <?php
                                            $options=DB::table('optiondep')->where('DesDep','=','Sciences des matériaux')->get();
                                            ?>


                            @foreach ($options as $option)
                                 <tr id="sid{{$option->idOption}}">
                                  <td style="120px;">{{$option->idOption}}</td>
                                  <td style="width:400px;">{{$option->desOption}}</td>
                                  <td style="width:205px;">{{$option->nbPlaceOption}}</td>
                                  <td style="width:222px;">
                                        <a href="javascript:void(0)" onclick="editUtilisateur('{{$option->idOption}}')" class="btn btn-info"> Modifier </a>
                                        <a href="javascript:void(0)" onclick="deleteUtilisateur('{{$option->idOption}}')" class="btn btn-danger" style="background-color:#C70039;"> Supprimer </a>
                                    </td>
                                 </tr>
                             @endforeach
                                </tbody>
                                </table>

                                <table id="table2" class="table" style="display:none;">
                                    <thead>
                                        <tr>
                                          <th style="width:120px;">Code option</th>
                                          <th style="width:400px;">Option</th>
                                          <th style="width:205px;">Nombre de place master </th>
                                           <th style="width:222px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php
                                                $options=DB::table('optiondep')->where('DesDep','=','Construction mécanique et productique')->get();
                                                ?>


                            @foreach ($options as $option)
                                 <tr id="sid{{$option->idOption}}">
                                  <td style="120px;">{{$option->idOption}}</td>
                                  <td style="width:400px;">{{$option->desOption}}</td>
                                  <td style="width:205px;">{{$option->nbPlaceOption}}</td>
                                  <td style="width:222px;">
                                        <a href="javascript:void(0)" onclick="editUtilisateur('{{$option->idOption}}')" class="btn btn-info"> Modifier </a>
                                        <a href="javascript:void(0)" onclick="deleteUtilisateur('{{$option->idOption}}')" class="btn btn-danger" style="background-color:#C70039;"> Supprimer </a>
                                    </td>
                                 </tr>
                             @endforeach

                                    </tbody>
                                    </table>



                                    <table id="table4" class="table" style="display:none;">
                                        <thead>
                                            <tr>
                                                <th style="width:120px;">Code option</th>
                                                <th style="width:400px;">Option</th>
                                                <th style="width:205px;">Nombre de place master </th>
                                                <th style="width:222px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                    <?php
                                                    $options=DB::table('optiondep')->where('DesDep','=','Génie des procédés')->get();
                                                    ?>


                                             @foreach ($options as $option)
                                             <tr id="sid{{$option->idOption}}">
                                                 <td style="120px;">{{$option->idOption}}</td>
                                                 <td style="width:400px;">{{$option->desOption}}</td>
                                                 <td style="width:205px;">{{$option->nbPlaceOption}}</td>
                                                 <td style="width:222px;">
                                                    <a href="javascript:void(0)" onclick="editUtilisateur('{{$option->idOption}}')" class="btn btn-info"> Modifier </a>
                                                    <a href="javascript:void(0)" onclick="deleteUtilisateur('{{$option->idOption}}')" class="btn btn-danger" style="background-color:#C70039;"> Supprimer </a>
                                                </td>
                                             </tr>
                                         @endforeach
                                        </tbody>
                                        </table>














                    </div>

                </div>

            </div>

        </div>

        <div>
        </div>


        <div style="position:relative; left:0px;">

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


        <script>
            function editUtilisateur(idOption){

                $.get('/scolarite/place/'+idOption,function(option){
                    //alert('haha');
                    $("#id_utilisateur").val(idOption);
                    $("#login_utilisateur2").val(option.desOption);
                    $("#mdp_utilisateur2").val(option.nbPlaceOption);
                    $("#utilisateurEditModal").modal('toggle');
                });
            }

            $("#utilisateurEditForm").submit(function(e){
                e.preventDefault();
                let idOption = $("#id_utilisateur").val();
                let desOption = $("#login_utilisateur2").val();
                let nbPlaceOption = $("#mdp_utilisateur2").val();
                let _token = $("input[name=_token]").val();
                $.ajax({
                      type:"PUT",
                      url:"{{route('option.modif')}}",
                      data:{
                          idOption:idOption,
                          desOption:desOption,
                          nbPlaceOption:nbPlaceOption,
                          _token:_token
                      },
                      success:function(response){
                          $('#sid'+ idOption +' td:nth-child(2)').text(response.desOption);
                          $('#sid'+ idOption +' td:nth-child(3)').text(response.nbPlaceOption);
                          $("#utilisateurEditModal").modal('toggle');
                          $("#utilisateurEditForm")[0].reset();

                      }


                });

            });
        </script>

<!-- modifier utilisateur Modal -->
<div class="modal fade" id="utilisateurEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Modifier les parametres de cet option</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form id="utilisateurEditForm">
                @csrf
                <input type="hidden" name="id_utilisateur" id="id_utilisateur" />
                <div class="form-group">
                    <label for="login_utilisateur"> <strong> Nom d'option </strong></label>
                    <input type="text" class="form-control" id="login_utilisateur2">
                </div>
                <div class="form-group">
                    <label for="mdp_utilisateur"> <strong> Nombre de places pédagogiques total</strong>  </label>
                    <input type="number" class="form-control" id="mdp_utilisateur2">
                </div>

                <button type="submit" class="btn btn-primary" style="float: right;" > Soumettre </button>
            </form>
        </div>

      </div>
    </div>
  </div>


</body>









<script>
    document.querySelector(".right ul li").addEventListener("click", function(){
  this.classList.toggle("active");
});
</script>



<script>
    function myFunction() {
  var x = document.getElementById("mDiv");
  var y = document.getElementById("kDiv");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  }
}
</script>



<script>
    function showDiv(element)
{
    document.getElementById("table3").style.display = element.value == "Thérmo-Energitique" ? 'block' : 'none';
    document.getElementById("table1").style.display = element.value == "Sciences des matériaux" ? 'block' : 'none';
    document.getElementById("table2").style.display = element.value == "Construction mécanique et productique" ? 'block' : 'none';
    document.getElementById("table4").style.display = element.value == "Génie des procédés" ? 'block' : 'none';

}
</script>


<script>

    function deleteUtilisateur(idOption){
        if(confirm("Vous etes sur que vous voulez supprimer cet option?")){
            $.ajax({
                url:'/scolarite/place/'+idOption,
                type:'DELETE',
                data:{
                    _token : $("input[name=_token]").val()
                },
                success:function(response){
                    $("#sid"+idOption).remove();
                }
            })
        }
    }

  </script>
