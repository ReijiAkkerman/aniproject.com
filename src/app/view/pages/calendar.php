<!DOCTYPE html>
<html>
<?php require_once __DIR__ . '/components/head.php' ?>
    <body class="_calendar">
    <?php require_once __DIR__ . '/components/header.php' ?>
        <main>
            <div class="calendar">
                <div class="header">
                    <div><p>ВС</p></div>
                    <div><p>ПН</p></div>
                    <div><p>ВТ</p></div>
                    <div><p>СР</p></div>
                    <div><p>ЧТ</p></div>
                    <div><p>ПТ</p></div>
                    <div><p>СБ</p></div>
                </div>
                <div class="body">
                <?php for($i = 0; $i < 70; $i++) { ?>
                    <div <?php if($i === 15) echo 'id="now"' ?>><?php if($i === 15) echo 'now' ?></div>    
                <?php } ?>
                </div>
            </div>
            <div id="day">

            </div>
            <button class="now"><a href="#now">button</a></button>
        </main>
        <script type="module" src="/src/js/popup/test.js"></script>
    </body>
</html>