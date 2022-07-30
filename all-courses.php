<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Все курсы</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!--Импорт шапки руыайта-->
    <?php include('blue-header.php'); ?>
    <h1 class="all-courses-title">Все программы обучения</h1>
    <div class="filters">
        <div class="filters-item">
            <!--Дети-->
            <img src="../img/children.svg" alt="" class="svg-sort">

            <div>
                <a href="">
                    <span class="filters-title">Дети <br></span>
                    <span class="filters-text">8 — 14 лет</span>
                </a>
            </div>
        </div>
        <!--Подростки-->
        <div class="filters-item">
            <img src="../img/teen.svg" alt="" class="svg-sort">
            <div>
                <a href="">
                    <span class="filters-title">Подростки <br></span>
                    <span class="filters-text">14 — 18 лет</span>
                </a>
            </div>
        </div>
        <!--Взрослые-->
        <div class="filters-item">
            <img src="../img/family.svg" alt="" class="svg-sort">
            <div>
                <a href="">
                    <span class="filters-title">Взрослые<br></span>
                    <span class="filters-text">18 — ∞ </span>
                </a>
            </div>
        </div>
    </div>
    <hr class="all-courses-hr">
    <!--Фильтры слева-->
    <div class="all-program">

        <div class="radio-filters">
            <h2 class="level">Уровень сложности</h2>
            <div class="radio-block">
                <input type="radio" class="radio-button" name="level" value="newbee" checked>
                <label for="newbee">Пивас</label>
            </div>
            <div class="radio-block">
                <input type="radio" class="radio-button" name="level" value="user">
                <label for="user">Пользователь</label>
            </div>
            <div class="radio-block">
                <input type="radio" class="radio-button" name="level" value="professional">
                <label for="professional">Профессионал</label>
            </div>
            <div class="radio-block" id="">
                <input type="radio" class="radio-button" name="level" value="cheater">
                <label for="cheater">Читер</label>
            </div>
            <hr class="radio-hr">
            <h2 class="level">Тип обучения</h2>
            <div class="radio-block">
                <input type="radio" class="radio-button" name="education-type" value="any" checked>
                <label for="any">Любой</label>
            </div>
            <div class="radio-block">
                <input type="radio" class="radio-button" name="education-type" value="proffession">
                <label for="proffession">Профессия</label>
            </div>
            <div class="radio-block">
                <input type="radio" class="radio-button" name="education-type" value="course">
                <label for="course">Курс</label>
            </div>
            <hr class="radio-hr">
            <h2 class="level">Длительность</h2>
            <span class="radio-time">от 1 до 24 месяцев</span>
            <div class="slidecontainer">
                <input type="range" min="1" max="24" value="1" class="slider" id="myRange">
            </div>
            <div class="adv">
                Баннер <br> 280x400
            </div>

        </div>
        <!--Правый блок с кнопками и названиями программ-->
        <div class="main-part">
            <h2 class="branch">Направление</h2>
            <ul class="branch-nav">
                <a href="">
                    <li class="branch-nav-item">Робототехника</li>
                </a>
                <a href="">
                    <li class="branch-nav-item">Создание игр</li>
                </a>
                <a href="">
                    <li class="branch-nav-item">Web-разработка</li>
                </a>
                <a href="">
                    <li class="branch-nav-item">Мультимедиа</li>
                </a>
                <a href="chess.php">
                    <li class="branch-nav-item">Шахматы</li>
                </a>
                <a href="">
                    <li class="branch-nav-item">3D-моделирование и дизайн</li>
                </a>
                <a href="">
                    <li class="branch-nav-item">Английский язык</li>
                </a>
                <a href="">
                    <li class="branch-nav-item">Блогинг</li>
                </a>
                <a href="">
                    <li class="branch-nav-item">Soft skills</li>
                </a>
            </ul>
            <div class="main-cards">
                <a href="#" class="cards-link">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                <a href="#" class="cards-link" id="wrap">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                <a href="#" class="cards-link">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                <a href="#" class="cards-link">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                                <a href="#" class="cards-link">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                                <a href="#" class="cards-link">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                                <a href="#" class="cards-link">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                                <a href="#" class="cards-link">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                                <a href="#" class="cards-link">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                                <a href="#" class="cards-link">
                    <div class="cards-item">
                        <span class="card-item-span">Программа</span>
                        <div class="card-item-title">
                            <img src="../img/phone-program.svg" alt="" class="phone-program">
                            <h2>«Разработка мобильных приложений»</h2>
                        </div>
                        <p>Разработчик мобильных приложений создаёт приложения, которыми люди ежедневно пользуются
                            на смартфонах, умных часах и планшетах. </p>
                        <span class="duration">24 месяца</span>
                    </div>
                </a>
                
            </div>
        </div>

    </div>
    <?php include('footer.php'); ?>
</body>

</html>
