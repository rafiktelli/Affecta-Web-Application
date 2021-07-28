<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

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

body{
  background: #ffd500;
}

.wrapper{
  position: absolute;
  top: 20%;
  left: 80%;
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

</style>





<body>

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
                  <p>Coding Market<br> <span>Admin</span></p><img style src="https://i.imgur.com/d4Qwh8E.png" alt="Admin" width="40"><i class="fas fa-angle-down"></i>

                </a>

                <div class="dropdown">
                    <ul>
                      <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                      <li><a href="#"><i class="fas fa-sliders-h"></i> Settings</a></li>
                      <li><a href="#"><i class="fas fa-sign-out-alt"></i> Signout</a></li>
                  </ul>
                </div>

              </li>
          </ul>
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
