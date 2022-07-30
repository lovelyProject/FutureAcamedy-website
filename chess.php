<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Шахматы</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('header.php'); ?>

    <div class="chess-main">
        <div class="chess-main-container">
            <div class="chess-main-description">
                <h1 class="chess-main-title">Шахматная школа</h1>
                <span class="chess-main-subtitle">Развитие мышления
                    и логики</span>
                <div class="chess-main-time">
                    <span class="chess-time-item">Срок обучения: <br>
                        5 лет</span>
                    <span>Режим занятий: <br>
                        2 раза в неделю по 2 академических часа</span>
                </div>
                <span class="price">от 4 350 ₽ в месяц</span>
                <span class="free-lesson">1 занятие бесплатное</span>
                <span class="chess-main-advice">Прежде чем начать
                    обучение советуем записаться на пробное заниятие</span>
                <a href="#" class="course-link"><button class="enroll-in-course">Записаться на пробное занятие</button></a>
            </div>
            <div class="chess-main-img">
                <img src="img/chess-main.png" alt="">
            </div>
        </div>
    </div>
    <div class="chess-svg-container">
        <div class="hourse-svg"><img src="img/chess-hourse.svg" alt="" class="hourse-svg1">
            <img src="img/circle.svg" alt="" class="circle-svg">
        </div>
    </div>
    <div class="chess-aim-container">
        <div class="chess-owl">
            <img src="img/chess-cloud.svg" alt="" class="chess-cloud">
            <!--Блок chess-position для того чтобы расположить сову и текст через position absolute-->
            <div class="chess-position">
                <img src="img/chess-owl.svg" alt="" class="chess-owl-text">
                <span class="chess-owl-span">Вы полюбите шахматы, <br>
                    и вам этого будет не хватать всегда!</span>
            </div>
        </div>
        <div class="chess-aims">
            <div class="chess-figures">
                <img src="img/figure1.svg" alt="" class="chess-figure chess-figure1">
                <h2>Цель 1</h2>
                <span>Привить любовь
                    и интерес к шахматам</span>
            </div>
            <div class="chess-figures">
                <img src="img/figure2.svg" alt="" class="chess-figure chess-figure2">
                <h2>Цель 2</h2>
                <span>Получить удовольствие от процесса игры,
                    от факта победы
                    в партии, от спасения</span>
            </div>
            <div class="chess-figures">
                <img src="img/figure3.svg" alt="" class="chess-figure chess-figure3">
                <h2>Цель 3</h2>
                <span>Научить
                    анализировать свои
                    и чужие ошибки, учиться на них
                    с помощью GM мирового уровня</span>
            </div>
            <div class="chess-figures chess-figures4">
                <img src="img/figure4.svg" alt="" class="chess-figure chess-figure4">
                <h2>Цель 4</h2>
                <span>Получить удовольствие от процесса игры,
                    от факта победы
                    в партии, от спасения</span>
            </div>
            <div class="chess-figures"></div>
        </div>

    </div>
    <div class="chess-video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ipfc4Xq9KUo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="chess-video-item"></iframe>
    </div>
    <div class="chess-description-container">
        <div>
            <h2>Школа шахмат</h2>
            <p>Шахматы - это отличная идея для времяпрепровождения с родителями, детьми и друзьями.
                Игра дает полезные в жизни навыки: учит побеждать и проигрывать, развивает
                творческие способности, вырабатывает стрессо-устойчивость, терпение, помогает сосредоточиться,
                а так же помогает осознать последствия своих действий.</p>
        </div>
        <div class="chess-icons">
            <div class="chess-ico"><img src="icons/chess-ico1.svg" alt=""><span>Интересные уроки
                    по шахматам</span></div>
            <div class="chess-ico"><img src="icons/chess-ico2.svg" alt=""><span>Шахматы для взрослых и детей</span></div>
            <div class="chess-ico"><img src="icons/chess-ico3.svg" alt=""><span>Обучение
                    шахмат онлайн</span></div>
            <div class="chess-ico"><img src="icons/chess-ico4.svg" alt=""><span>Профессиональное
                    обучение шахматам</span></div>
            <div class="chess-ico"><img src="icons/chess-ico5.svg" alt=""><span>Шахматные
                    турниры</span></div>
            <div class="chess-ico"><img src="icons/chess-ico6.svg" alt=""><span>Сеанс одновременной
                    игры с GM</span></div>
        </div>
    </div>
</body>

</html>
