<?php
session_start();
include ("conn.php");


if (isset($_POST["submit"])) {
  
 $uname = $_POST["loginusername"];
 $pswd = $_POST["loginpassword"];
 
 $sql = "select * from admin where username= '".$uname."' and password= '".$pswd."' ";
 $result = $conn->query($sql);
 
  if($result->num_rows > 0){
      $_SESSION['username'] = $uname;
      header("location:index.php");
      die;
  }
  else {
    echo '<script>alert("Incorrect Password or Username");</script>';
  }
 }
?>

<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
   @keyframes move {
    100% {
        transform: translate3d(0, 0, 1px) rotate(360deg);
    }
}

* {
            box-sizing: content-box;
      }
body {
      display: flex;
      align-items: center;
      font-family: 'Montserrat', sans-serif;
      }

      @keyframes move {
    100% {
        transform: translate3d(0, 0, 1px) rotate(360deg);
    }
}

@keyframes move {
    100% {
        transform: translate3d(0, 0, 1px) rotate(360deg);
    }
}

.background {
    position: fixed;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
    background: #3E1E68;
    overflow: hidden;
}

.background span {
    width: 10vmin;
    height: 10vmin;
    border-radius: 16vmin;
    backface-visibility: hidden;
    position: absolute;
    animation: move;
    animation-duration: 10;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}


.background span:nth-child(0) {
    color: #347fe0;
    top: 87%;
    left: 48%;
    animation-duration: 167s;
    animation-delay: -96s;
    transform-origin: -9vw 8vh;
    box-shadow: 32vmin 0 4.570267136724042vmin currentColor;
}
.background span:nth-child(1) {
    color: #347fe0;
    top: 94%;
    left: 100%;
    animation-duration: 282s;
    animation-delay: -108s;
    transform-origin: 3vw -18vh;
    box-shadow: 32vmin 0 4.885272320211522vmin currentColor;
}
.background span:nth-child(2) {
    color: #347fe0;
    top: 77%;
    left: 66%;
    animation-duration: 334s;
    animation-delay: -152s;
    transform-origin: 7vw 14vh;
    box-shadow: -32vmin 0 4.332695149331631vmin currentColor;
}
.background span:nth-child(3) {
    color: #583C87;
    top: 28%;
    left: 33%;
    animation-duration: 355s;
    animation-delay: -186s;
    transform-origin: 17vw -14vh;
    box-shadow: 32vmin 0 4.042924634175247vmin currentColor;
}
.background span:nth-child(4) {
    color: #347fe0;
    top: 50%;
    left: 59%;
    animation-duration: 256s;
    animation-delay: -294s;
    transform-origin: 8vw 22vh;
    box-shadow: 32vmin 0 4.5502893647318vmin currentColor;
}
.background span:nth-child(5) {
    color: #583C87;
    top: 45%;
    left: 42%;
    animation-duration: 250s;
    animation-delay: -29s;
    transform-origin: -4vw 20vh;
    box-shadow: -32vmin 0 4.645127795556816vmin currentColor;
}
.background span:nth-child(6) {
    color: #583C87;
    top: 40%;
    left: 37%;
    animation-duration: 367s;
    animation-delay: -156s;
    transform-origin: -2vw 10vh;
    box-shadow: -32vmin 0 4.844546807018841vmin currentColor;
}
.background span:nth-child(7) {
    color: #8e12a6;
    top: 18%;
    left: 86%;
    animation-duration: 338s;
    animation-delay: -347s;
    transform-origin: -20vw 21vh;
    box-shadow: -32vmin 0 4.815848371620538vmin currentColor;
}
.background span:nth-child(8) {
    color: #4e4e6c;
    top: 35%;
    left: 79%;
    animation-duration: 151s;
    animation-delay: -292s;
    transform-origin: 11vw 6vh;
    box-shadow: 32vmin 0 4.8029274815324365vmin currentColor;
}
.background span:nth-child(9) {
    color: #4e4e6c;
    top: 74%;
    left: 10%;
    animation-duration: 16s;
    animation-delay: -24s;
    transform-origin: 1vw -18vh;
    box-shadow: -32vmin 0 4.822410158913428vmin currentColor;
}
.background span:nth-child(10) {
    color: #347fe0;
    top: 22%;
    left: 92%;
    animation-duration: 115s;
    animation-delay: -387s;
    transform-origin: 10vw 2vh;
    box-shadow: 32vmin 0 4.867549772170687vmin currentColor;
}
.background span:nth-child(11) {
    color: #583C87;
    top: 68%;
    left: 2%;
    animation-duration: 404s;
    animation-delay: -394s;
    transform-origin: 12vw -2vh;
    box-shadow: 32vmin 0 4.721832797313281vmin currentColor;
}
.background span:nth-child(12) {
    color: #583C87;
    top: 56%;
    left: 15%;
    animation-duration: 280s;
    animation-delay: -325s;
    transform-origin: -21vw 15vh;
    box-shadow: 32vmin 0 4.193910350500207vmin currentColor;
}
.background span:nth-child(13) {
    color: #347fe0;
    top: 93%;
    left: 91%;
    animation-duration: 398s;
    animation-delay: -341s;
    transform-origin: 16vw 0vh;
    box-shadow: -32vmin 0 4.117562376552143vmin currentColor;
}
.background span:nth-child(14) {
    color: #347fe0;
    top: 32%;
    left: 78%;
    animation-duration: 259s;
    animation-delay: -249s;
    transform-origin: 11vw -13vh;
    box-shadow: -32vmin 0 4.476179716931441vmin currentColor;
}
.background span:nth-child(15) {
    color: #347fe0;
    top: 23%;
    left: 24%;
    animation-duration: 362s;
    animation-delay: -27s;
    transform-origin: 13vw -20vh;
    box-shadow: -32vmin 0 4.661798596612949vmin currentColor;
}




.container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}

.form {
  display: flex;
  justify-content: center;
  align-items: center;
  transform-style: preserve-3d;
  transition: all 1s ease;
}

.form .form_front {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 20px;
  position: relative;
  backface-visibility: hidden;
  padding: 65px 45px;
  border-radius: 15px;
  box-shadow: inset 2px 2px 10px rgba(0,0,0,1),
  inset -1px -1px 5px rgba(255, 255, 255, 0.6);
  background-color: #333;
}

/* .form .form_back {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 20px;
  position: absolute;
  backface-visibility: hidden;
  transform: rotateY(-180deg);
  padding: 65px 45px;
  border-radius: 15px;
  box-shadow: inset 2px 2px 10px rgba(0,0,0,1),
  inset -1px -1px 5px rgba(255, 255, 255, 0.6);
} */

.form_details {
  font-size: 25px;
  font-weight: 600;
  padding-bottom: 14px;
  color: white;
}

.input {
  width: 255px;
  min-height: 45px;
  color: #fff;
  outline: none;
  transition: 0.35s;
  padding: 0px 7px;
  background-color: #212121;
  border-radius: 6px;
  border: 2px solid #212121;
  box-shadow: 6px 6px 10px rgba(0,0,0,1),
  1px 1px 10px rgba(255, 255, 255, 0.6);
  font-size: 1.1rem;
}

.input::placeholder {
  color: #999;
}

.input:focus.input::placeholder {
  transition: 0.3s;
  opacity: 0;
}

.input:focus {
  transform: scale(1.05);
  box-shadow: 6px 6px 10px rgba(0,0,0,1),
  1px 1px 10px rgba(255, 255, 255, 0.6),
  inset 2px 2px 10px rgba(0,0,0,1),
  inset -1px -1px 5px rgba(255, 255, 255, 0.6);
}

.btn {
  padding: 10px 35px;
  cursor: pointer;
  background-color: #212121;
  border-radius: 6px;
  border: 2px solid #212121;
  /* box-shadow: 6px 6px 10px rgba(0,0,0,1),
  1px 1px 10px rgba(255, 255, 255, 0.6); */
  box-shadow: 6px 6px 10px rgba(0,0,0,1),
  1px 1px 10px rgba(255, 255, 255, 0.6),
  inset 2px 2px 10px rgba(0,0,0,1),
  inset -1px -1px 5px rgba(255, 255, 255, 0.6);
  color: #fff;
  font-size: 18px;
  font-weight: 700;
  transition: 0.35s;
}

.btn:hover {
  transform: scale(1.05);
  box-shadow: 6px 6px 10px rgba(0,0,0,1),
  1px 1px 10px rgba(255, 255, 255, 0.6),
  inset 2px 2px 10px rgba(0,0,0,1),
  inset -1px -1px 5px rgba(255, 255, 255, 0.6);
}

.btn:focus {
  transform: scale(1.05);
  box-shadow: 6px 6px 10px rgba(0,0,0,1),
  1px 1px 10px rgba(255, 255, 255, 0.6),
  inset 2px 2px 10px rgba(0,0,0,1),
  inset -1px -1px 5px rgba(255, 255, 255, 0.6);
}

.form .switch {
  font-size: 13px;
  color: white;
}

  .password-container {
      position: relative;
    }

    #passwordField {
      /* width: 100%;
      padding: 10px; */
    }

    .password-toggle {
      position: absolute;
      right: 10px;
      font-size: .685rem;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #fff; /* Change color to your preference */
      text-decoration: underline;
    }

</style>
</head>
<body>
<div class="background">
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
</div>   


    <div class="container">
    
    <form class="form" method="post" action="#">
        <div class="form_front">
            <div class="form_details">Cohert Admin</div>
            <input placeholder="Username" class="input" name="loginusername" type="text" required>
              <div class="password-container">
              <input placeholder="Password" class="input" name="loginpassword" type="password" id="passwordField" required>
              <span id="togglePassword" class="password-toggle">Show</span>
              </div>
            <button type="submit" name="submit" class="btn">Login</button>
            
        </div>
        
    </form>
    </div>

<script>
    const passwordField = document.getElementById('passwordField');
    const toggleSpan = document.getElementById('togglePassword');

    toggleSpan.addEventListener('click', function () {
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleSpan.textContent = 'Hide';
      } else {
        passwordField.type = 'password';
        toggleSpan.textContent = 'Show';
      }
    });
</script>

</body>
</html>


