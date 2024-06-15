<!DOCTYPE html>
<html>
    <head>
    <?php require_once __DIR__ . '/components/head.php' ?>
    <title>Авторизация - Aniproject</title>
    </head>
    <body class="_greetings">
    <?php require_once __DIR__ . '/components/header.php' ?>
        <main>
            <div class="main">
                <div class="info">
                    <h1>Платформа для саморазвития Aniproject</h1>
                    <ul>
                        <li>Начните свою жизнь с чистого листа</li>
                        <li>Реализовывайте идеи не тратя время на планирование</li>
                        <li>Работайте вместе над интересными проектами</li>
                        <li>Изучайте английский язык еще быстрее</li>
                    </ul>
                </div>
                <div class="auth">
                    <div class="auth_choice">
                        <button id="login_section">Вход</button>
                        <button id="registration_section">Регистрация</button>
                    </div>
                    <form action="#" method="POST" id="login_form">
                        <input type="text" placeholder="Логин или E-mail">
                        <input type="password" placeholder="Пароль">
                        <button>Войти</button>
                    </form>
                    <form action="#" method="POST" id="registration_form" style="display:none;">
                        <input type="text" placeholder="Логин">
                        <input type="text" placeholder="Электронная почта">
                        <input type="text" placeholder="Имя">
                        <input type="password" placeholder="Пароль">
                        <input type="password" placeholder="Повторите пароль">
                        <button>Зарегистрироваться</button>
                    </form>
                </div>
            </div>
            <div class="extra">
                <p><span>Внимание! </span>Автор проекта не несет ответственность за утерю, утечку или порчу какой-либо информации из-за атак злоумышленников и ошибок проявляющихся в ходе разработки.</p>
                <p>По возможности, не храните особо важную информацию на сайте.</p>
                <p>При обнаружении ошибок в работе сайта - пожалуйста сообщите об этом на электронную почту автора проекта reijiakkerman@gmail.com</p>
            </div>
        </main>
    <?php require_once __DIR__ . '/components/footer.php' ?>
        <script type="module" src="/src/js/popup/greetings.js"></script>
    </body>
</html>