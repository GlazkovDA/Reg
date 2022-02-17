<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_reg.css">
    <title>Грум-Рум</title>
</head>
<div align ="center">
<body>
<header class="header">
        <div class="container">
            <div class="header_inner">
                <div class="logo">
                    
                </div>
</header>
<form action="php/register.php" method="post" id="regist"><br><br><br><br><br>
        <div class="sign_in">
            <div class="container">
                <div class="sign-content"><br><br>
                    <h1>Регистрация</h1><br><br>

                    <input type="text" name='sso' class='sing-inp' placeholder="Введите ФИО"  pattern="^[А-Яа-яЁё\s]+$" id="fio" required><br><br>
                    <input type="text" name='login' class='sing-inp' placeholder="Введите логин"  pattern="^[a-zA-Z]+$" id="login" required> <br><br>
                    <input type="email" name='mail' class='sing-inp' placeholder="Введите почту"  id="mail" required> <br><br>
                    <input type="text" name='pass' class='sing-inp' placeholder="Введите пароль" id="pass" required> <br><br>
                    <input type="text" name='pass_repeat' class='sing-inp' placeholder="Повтор пароля"  id="repeat-pass" required> <br><br>
                    <input type="checkbox" name="" id="sogl" required><label for="sogl">Согласисие на обработку персональных данных </label><br><br>
                    <br>
                    <input type="submit" name="sub" class="registr" value="Зарегистрироваться"><br><br>
                   <h1 id="result"></h1>
                   <p><a href="index.php">Назад</a></p>
                </div>
            </div>
        </div>
        </div>
    </form>
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="script-sign.js">

    </script>
</body>
<style>* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    
    
  }
  a {
    text-decoration: none;
    color: black;
  }
  .header{
    position: absolute;
    /* top: 0;
    left: 0;
    right: 0; */
    width: 100%;
    height: 100px;
    z-index: 1000px; 
    display: flex;  
    background-color: rgb(90, 170, 180);
    color: white;
    
  }
  .nav{
    font-size: 14px;
    text-transform: uppercase;
    
  
  }
  .container{
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    
  }
  .logo {
    width: 50px;
    height: 50px;
  }
  .header_inner{
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: white;
  }
   .header__inner > a {
    display: flex;
    align-items: center;
    color: white;
  
  } 
  .candidates__inner {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    
  }
  .candidate {
    width: 20%;
    margin-left: 15px;
    text-align: center;
    
  }
  .candidate img {
    width: 100%;
    height: 200px;
    
  }
  .candidate input[type="submit"] {
    font-size: 30px;
  }
  .info {
    display: flex;
  }
  .info img {
    width: 400px;
    border-radius: 50%;
  }
  body{
    height: 100%;
    background-image: url(https://million-wallpapers.ru/wallpapers/3/10/328691699150783/trava-na-fone-neba.jpg) ;
  }
  main{
    height: 100vh;
  }
  footer{
    text-align: center;
    background-color: #000;
    font-size: 50px;
    color: white;
  
  }
  .log{
    color: white;
    text-align: right;
    margin: 60px;
    padding: 50px;
  }
  .logl{
    height: 100px;
    width: 100px;
  }
  .ff{
    color: rgb(0, 0, 0);
    font-size: 20px;
    font-family: Impact, Charcoal, sans-serif;
  }
  
  
    </style>
</html>