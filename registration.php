<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('blue-header.php'); ?>
    <form action="get" name="registration" class="registration">
        <div class="registration-title">
            <div class="sign-in"><a href="#" class="sign-in">Вход </a> <br> <hr></div>
            <div class="sign-up"><a href="#" class="sign-in">Регистрация</a> <br> <hr></div>
        </div>
        <input type="text" class="registration-input registration-input1" id="reg-name" placeholder="Имя" >
        <input type="text" class="registration-input registration-input2" placeholder="Email">
        <input type="text" class="registration-input registration-input3" placeholder="Номер телефона">
        <span>Войти с помощью соцсетей:</span>
        <div class="registration-icons">
            <img src="icons/reg-vk.svg" alt="">
            <img src="icons/reg-inst.svg" alt="">
            <img src="icons/reg-fb.svg" alt="">
            <img src="icons/reg-youtube.svg" alt="">
            <img src="icons/reg-tg.svg" alt="">
        </div>
        <button class="reg-btn">Войти</button>
    </form>
    <?php include('footer-without-owl.php'); ?>
    
</body>
</html>