<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afficher l'affectation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <style type="text/css">
     @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
     @import url("../fonts/bootstrap/glyphicons-halflings-regular.eot");
        table {
            border-collapse: collapse;
            border-spacing: 0;
            font-family:Helvetica;
            font-weight: 400;
            font-size: 20px;
            text-align:center;
             }
             .center {
  margin-left: auto;
  margin-right: auto;
}
h1 {text-align: center;}
    th {
         position: -webkit-sticky;
      position: sticky;
        top: -0.5px;
        z-index: 2;
        background-color:cornflowerblue;
        color: aliceblue;
    }
    tr:nth-child(even) {background-color:#F9F9F9;
    }
    tr:nth-child(odd){
  background-color:white;
    }
    th:first-child {
    border-radius: 10px 0 0 0;

  }

  th:last-child {
    border-radius: 0 10px 0 0;
  }

  th:only-child{
    border-radius: 10px 18px 0 0;
  }
  tr
  {
    text-align: center;
  }
  tr:hover {background-color:#EEEEEE;}
  td
  {
    text-align: center;
  }
  .myDiv
    {
        background-color:cornflowerblue;
        text-align: center;
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
.line{
width: 150px;
height: 50px;
border-bottom: 2px solid black; border-bottom-color: #eede99;
border-bottom-left-radius: 10px;
}
</style>


</head>
<body>
    <?php $mtv="";?>

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
    <div style="height:80px">
        </div >
        <div style="height:80px; color:#003c71; width:580px; margin:0 auto;">
            <h1 style="border-bottom: 2px solid black; border-bottom-color: #eede99; ">  AFFECTATION DES ETUDIANTS</h1>
           </div>
<div id="copy" style="text-align:center;">
    <select id="hi" style="margin-left:200px;" onchange="showDiv(this)">
        <option value="ge">général</option>
        <?php
        for($m=0;$m<session('nb_sect');$m++)
        {
            if ($m == 0) {$x = 'A';} if ($m == 1) {$x = 'B';} if ($m == 2) {$x = 'C';} if ($m == 3) {$x = 'D';} if ($m == 4) {$x = 'E';} if ($m == 5) {$x = 'F';} if ($m == 11) {$x = 'L';} if ($m == 6) {$x = 'G';} if ($m == 7) {$x = 'H';} if ($m == 8) {$x = 'I';} if ($m == 9) {$x = 'J';} if ($m == 10) {$x = 'K';}
        echo "<option value='".$x."'>Section ".$x."</option>";
        }
        ?>

        </select>
</div>
<div id="copied" style="text-align:center; display:none;">
    <select id="ki" style="margin-left:200px;" onchange="showDiv(this)">
        <option value="ge">général</option>
        <?php
        for($m=0;$m<session('nb_sect');$m++)
        {
            if ($m == 0) {$x = 'A';} if ($m == 1) {$x = 'B';} if ($m == 2) {$x = 'C';} if ($m == 3) {$x = 'D';} if ($m == 4) {$x = 'E';} if ($m == 5) {$x = 'F';} if ($m == 11) {$x = 'L';} if ($m == 6) {$x = 'G';} if ($m == 7) {$x = 'H';} if ($m == 8) {$x = 'I';} if ($m == 9) {$x = 'J';} if ($m == 10) {$x = 'K';}
        echo "<option value='".$x."'>Section ".$x."</option>";
        }
        ?>

        </select>
</div>

<br>

    <form method="POST" enctype="multipart/form-data" action="{{route('rankDone')}}">
        @csrf

    <div>

        @for ($k  = -1; $k < session('nb_sect'); $k++)

        <?php
            if ($k == -1) {$x ='ge';}
            if ($k == 0) {$x = 'A';}
            if ($k == 1) {$x = 'B';}
            if ($k == 2) {$x = 'C';}
            if ($k == 3) {$x = 'D';}
            if ($k == 4) {$x = 'E';}
            if ($k == 5) {$x = 'F';}
            if ($k == 11) {$x = 'L';}
            if ($k == 6) {$x = 'G';}
            if ($k == 7) {$x = 'H';}
            if ($k == 8) {$x = 'I';}
            if ($k == 9) {$x = 'J';}
            if ($k == 10) {$x = 'K';}
            //echo $x ;
            $y= "In".$x."";
            $z= "t".$x."";
            ?>

    <div id=<?php echo $x;?> style="text-align: center; width:1000px; height:480px; margin:auto; display:none;">
        <input type="text" id=<?php echo $y;?> onkeyup="myFunction('<?php echo $y;?>','<?php echo $z;?>')" placeholder="Search for names.." title="Type in a name" style="width: 35%; height:30px; font-size: 18px; padding: 12px 15px 12px 15px; border: 1px solid #FFF; margin-bottom: 12px; float: right; border-radius: 3rem; outline: none;">
     <div style="text-align: center; width:1000px; height:450px; margin:auto; overflow-y:scroll;">

        <table  cellpadding="10", cellspacing="12" class="table" id=<?php echo $z;?> style="font-family: Calibri;font-size:14px;margin:auto;">
            <tr>
                <style>
                    tr:nth-child(even) {background-color:#F9F9F9; } tr:nth-child(odd){ background-color:white; }
                </style>
        <th style="border-radius: 10px 0 0 0;">rang</th>
        <th>matricule</th>
        <th>moy</th>
        <th>Affectation</th>
        <th>choix 1</th>
        <th>choix 2</th>
        <th>choix 3</th>
        <th>choix 4</th>
        <?php $nbOp = DB::table('optiondep')->where('idDep', '=', session('id'))->count('idOption') ?>
        @if( $nbOp>=5)
        <th>choix 5</th>
        @endif
        @if($nbOp >= 6)
        <th>choix 6</th>
        @endif
        @if($nbOp >= 7)
        <th>choix 7</th>
        @endif
        @if($nbOp >= 8)
        <th>choix 8</th>
        @endif
        @if($nbOp >= 9)
        <th>choix 9</th>
        @endif

        <?php
            $conn= mysqli_connect("localhost","root","","myseconnddb");
          //  $section="B";
          if($x=='ge')
          {
            $sql="SELECT etudiant.matricule as k,etudiant.rang_etud_reel, etudiant.rang_etud as re, round(etudiant.moy_classement,2) as n , etudiant.dep , etudiant.aff as eaff, liste_choix.*  from etudiant left outer join liste_choix using(matricule) where etudiant.dep=".session('id')." ORDER BY etudiant.moy_classement DESC";
            $result= $conn->query($sql);

            if($result -> num_rows > 0 ){
                while ($row=$result->fetch_assoc()) {
                    $ch1="ch1".$row["matricule"]; $ch2="ch2".$row["matricule"]; $ch3="ch3".$row["matricule"]; $ch4="ch4".$row["matricule"]; $ch5="ch5".$row["matricule"]; $ch6="ch6".$row["matricule"]; $ch7="ch7".$row["matricule"]; $ch8="ch8".$row["matricule"]; $ch9="ch9".$row["matricule"];
                    echo '<tr onclick="display('.$row["matricule"].')"><td>', $row["re"] ,"</td><td>",$row["k"],"</td><td style='text-align:left'>",$row["n"],"</td><td style='color:#C70039'>",$row["eaff"],"</td><td id='".$ch1."' style='text-align:left;'>",$row["choix1"],"</td><td id='".$ch2."'>",$row["choix2"],"</td><td  id='".$ch3."'>",$row["choix3"],"</td><td  id='".$ch4."'>",$row["choix4"],"</td>";
                    if($nbOp>=5) echo "<td  id='".$ch5."'>",$row["choix5"],"</td>";
                    if($nbOp>=6) echo "<td  id='".$ch6."'>",$row["choix6"],"</td>";
                    if($nbOp>=7) echo "<td  id='".$ch7."'>",$row["choix7"],"</td>";
                    if($nbOp>=8) echo "<td  id='".$ch8."'>",$row["choix8"],"</td>";
                    if($nbOp>=9) echo "<td  id='".$ch9."'>",$row["choix9"],"</td>";
                    echo "</tr>";

                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix1"]) echo '<script>  document.getElementById("'.$ch1.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix2"]) echo '<script>  document.getElementById("'.$ch2.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix3"]) echo '<script>  document.getElementById("'.$ch3.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix4"]) echo '<script>  document.getElementById("'.$ch4.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix5"]) echo '<script>  document.getElementById("'.$ch5.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix6"]) echo '<script>  document.getElementById("'.$ch6.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix7"]) echo '<script>  document.getElementById("'.$ch7.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix8"]) echo '<script>  document.getElementById("'.$ch8.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix9"]) echo '<script>  document.getElementById("'.$ch9.'").style.backgroundColor="yellow"; </script>';
                    echo '<script>ocument.getElementByTag("tr").style.backgroundColor="red"; </script>';
                }
            }
            else {
                echo "0 results";
            }
            $conn->close();
        }
           else{
             $sql="SELECT etudiant.matricule as k,etudiant.rang_sect_reel, sect, etudiant.rang_sect as re, round(etudiant.moy_classement,2) as n , etudiant.dep , etudiant.aff_sect as eaff, liste_choix.*  from etudiant left outer join liste_choix using(matricule) where etudiant.dep=".session('id'). " AND sect='" . $x . "' ORDER BY etudiant.moy_classement DESC";
            $result= $conn->query($sql);

            if($result -> num_rows > 0 ){
                while ($row=$result->fetch_assoc()) {
                    $ch1=$row["sect"]."ch1".$row["matricule"]; $ch2=$row["sect"]."ch2".$row["matricule"]; $ch3=$row["sect"]."ch3".$row["matricule"]; $ch4=$row["sect"]."ch4".$row["matricule"]; $ch5=$row["sect"]."ch5".$row["matricule"]; $ch6=$row["sect"]."ch6".$row["matricule"]; $ch7=$row["sect"]."ch7".$row["matricule"]; $ch8=$row["sect"]."ch8".$row["matricule"]; $ch9=$row["sect"]."ch9".$row["matricule"];
                    echo '<tr onclick="display('.$row["matricule"].')"><td>', $row["re"] ,"</td><td>",$row["k"],"</td><td style='text-align:left'>",$row["n"],"</td><td style='color:#C70039'>",$row["eaff"],"</td><td id='".$ch1."' style='text-align:left;'>",$row["choix1"],"</td><td id='".$ch2."'>",$row["choix2"],"</td><td  id='".$ch3."'>",$row["choix3"],"</td><td  id='".$ch4."'>",$row["choix4"],"</td>";
                    if($nbOp>=5) echo "<td  id='".$ch5."'>",$row["choix5"],"</td>";
                    if($nbOp>=6) echo "<td  id='".$ch6."'>",$row["choix6"],"</td>";
                    if($nbOp>=7) echo "<td  id='".$ch7."'>",$row["choix7"],"</td>";
                    if($nbOp>=8) echo "<td  id='".$ch8."'>",$row["choix8"],"</td>";
                    if($nbOp>=9) echo "<td  id='".$ch9."'>",$row["choix9"],"</td>";
                    echo '</tr>';

                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix1"]) echo '<script>  document.getElementById("'.$ch1.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix2"]) echo '<script>  document.getElementById("'.$ch2.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix3"]) echo '<script>  document.getElementById("'.$ch3.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix4"]) echo '<script>  document.getElementById("'.$ch4.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix5"]) echo '<script>  document.getElementById("'.$ch5.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix6"]) echo '<script>  document.getElementById("'.$ch6.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix7"]) echo '<script>  document.getElementById("'.$ch7.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix8"]) echo '<script>  document.getElementById("'.$ch8.'").style.backgroundColor="yellow"; </script>';
                    if( $row["eaff"]!=NULL && $row["eaff"]==$row["choix9"]) echo '<script>  document.getElementById("'.$ch9.'").style.backgroundColor="yellow"; </script>';
                    echo '<script>ocument.getElementByTag("tr").style.backgroundColor="red"; </script>';
                }
            }
            else {
                echo "0 results";
            }
            $conn->close();

        }

        ?>

    </tr>
</table >
</div>
</div>

    @endfor

<div>
    <div style="height:20px">
    </div>

<div align="center">
    <a href="{{ route('export_excel1.excel') }}" class="btn btn-success" >Export to Excel</a>
    <a class="btn btn-success">Publier sur le site</a>
</div>

    <div style="height:80px">
    </div>

</div>
</div>



<div id="dialog" title="Basic dialog" style="display:none; background:rgba(0,0,0,0,7); z-index:10; ">
    <div id="underDia" class="overlay" style="background:rgba(0,0,0,0,7); z-index:1,"></div>
    <p id="popupp"></p>
</div>


</body>
</html>

<script>
    document.querySelector(".right ul li").addEventListener("click", function(){
  this.classList.toggle("active");
});
</script>


<script>
    function display(matricule) {
       // alert(matricule);
        $("#popupp").empty();
        $("#underDia").empty();
        $("#popupp").append(matricule);
        $("#dialog").dialog();
    }
</script>

<script>
    function showDiv(element)
{
    //document.getElementById('ki').selectedIndex = 4;
    document.getElementById(element.value).style.display = element.value == element.value ? 'block' : 'none';

    $('#ki option').each(function() {
        var mam ='"';
        var res = mam + $(this).val() + mam;
        if(element.value != $(this).val()){
        document.getElementById($(this).val()).style.display = 'none';
        }
    });

}
</script>



<script>
    $("#hi").children().unwrap().each(function() {
      if(  $(this).parent().attr('id')=="copy"){
          var m =$(this).val();
    var btn = $('<div class="btn" name="'+$(this).val()+'" onclick="fun3(\''+$(this).val()+'\');">'+$(this).text()+'</div>');
    if($(this).is(':checked')) btn.addClass('on');
    $(this).replaceWith(btn);
    }
});

$(document).on('click', '.btn', function() {
    $('.btn').removeClass('on');
    $(this).addClass('on');
});
</script>


<script>
    function fun3(x){
        $("#ki").val(x).trigger('change');
    }
</script>
<style>
    iv.btn {
    display: inline-block;
    border: 2px solid #ccc;
    margin-right: 5px;
    padding: 2px 5px;
    cursor: pointer;
}
div.btn.on {
    background-color: #777;
    color: white;
}
</style>


<script>
function myFunction($a,$b) {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById($a);
  filter = input.value.toUpperCase();
  table = document.getElementById($b);
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[2];
    td3 = tr[i].getElementsByTagName("td")[3];
    if (td || td2 || td3) {
      txtValue = td.textContent || td.innerText;
      txtValue2 = td2.textContent || td2.innerText;
      txtValue3 = td3.textContent || td3.innerText;
      if ((txtValue.toUpperCase().indexOf(filter) > -1) || (txtValue2.toUpperCase().indexOf(filter) > -1) || (txtValue3.toUpperCase().indexOf(filter) > -1) ) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
