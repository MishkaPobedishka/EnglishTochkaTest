<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <div class="wrapper">
        <div class="modal-instruction">
            <button onclick="closeModal()" class="modal-close">x</button>
            <p class="instruction-header">Инструкция</p>
            <p class="instruction-description">После публикации сделайте скрин, что вы его написали и отправьте своему куратору, чтобы мы добавили вам спецкурс в личный кабинет.</p>
            <p class="instruction-description">После публикации сделайте скрин, что вы его написали и отправьте своему куратору, чтобы мы добавили вам спецкурс в личный кабинет.</p>
            <p class="instruction-description">После публикации сделайте скрин, что вы его написали и отправьте своему куратору, чтобы мы добавили вам спецкурс в личный кабинет.</p>
            <p class="instruction-description">После публикации сделайте скрин, что вы его написали и отправьте своему куратору, чтобы мы добавили вам спецкурс в личный кабинет.</p>
        </div>
        <div class="overlay">
            <div class="main-wrapper">
                <div class="login-user">
                    <p>Введите логин</p>
                    <input type="text" class="login">
                    <input type="button" value="Войти" onclick="getUserData()">
                    <p id="user" class="user"></p>
                </div>
                <div class="main-menu">
                    <div class="balance-wrapper">
                            '<div class="balance-info">
                            <p class="your-balance">Ваш баланс:</p>
                            <div class="balance">
                                <img class="balance-coin" src="../public/coin.png">
                                 <p id="balance" class="balance-value">34</p>
                                 <p class="balance-value">€$</p>
                            </div>
                        </div>'
                    </div>
                    <div class="buy-wrapper">
                        <div class="buy-footer">
                            <p>Варианты обмена на скидку</p>
                            <p onclick="openModal()" class="instruction">Инструкция</p>
                        </div>
                        <div class="buy-menu">
                            <div class="buy-item">
                                <div class="buy-value-info">
                                    <img class="buy-coin" src="../public/coin.png">
                                    <p class="buy-value" id="calls">50</p>
                                    <p class="buy-value">€$</p>
                                </div>
                                <img class="buy-icon" src="../public/calls.png">
                                <div class="buy-description">
                                    <div class="buy-sale">
                                        <p class="sale-value">50%</p>
                                    </div>
                                    <p class="description">на звонки ST (x2)</p>
                                </div>
                                <button class="buy-sale-button already-buyed" onclick="makeBuy(+document.getElementById('calls').textContent, this, 1)">
                                    <p class="sale-button-text">Уже использовано</p>
                                </button>
                            </div>
                            <div class="buy-item">
                                <div class="buy-value-info">
                                    <img class="buy-coin" src="../public/coin.png">
                                    <p class="buy-value" id="specCourse">70</p>
                                    <p class="buy-value">€$</p>
                                </div>
                                <img class="buy-icon" src="../public/specCourse.png">
                                <div class="buy-description">
                                    <div class="buy-sale">
                                        <p class="sale-value">30%</p>
                                    </div>
                                    <p class="description">на спецкурс</p>
                                </div>
                                <button class="buy-sale-button not-buyed" onclick="makeBuy(+document.getElementById('specCourse').textContent, this, 2)">
                                    <p class="sale-button-text">Использовать скидку</p>
                                </button>
                            </div>
                            <div class="buy-item">
                                <div class="buy-value-info">
                                    <img class="buy-coin" src="../public/coin.png">
                                    <p class="buy-value" id="course1">100</p>
                                    <p class="buy-value">€$</p>
                                </div>
                                <img class="buy-icon" src="../public/course.png">
                                <div class="buy-description">
                                    <div class="buy-sale">
                                        <p class="sale-value">50%</p>
                                    </div>
                                    <p class="description">на курс</p>
                                </div>
                                <button class="buy-sale-button not-buyed " onclick="makeBuy(+document.getElementById('course1').textContent, this, 3)">
                                    <p class="sale-button-text">Использовать скидку</p>
                                </button>
                            </div>
                            <div class="buy-item">
                                <div class="buy-value-info">
                                    <img class="buy-coin" src="../public/coin.png">
                                    <p class="buy-value" id="course2">139</p>
                                    <p class="buy-value">€$</p>
                                </div>
                                <img class="buy-icon" src="../public/course.png">
                                <div class="buy-description">
                                    <div class="buy-sale">
                                        <p class="sale-value">65%</p>
                                    </div>
                                    <p class="description">на курс</p>
                                </div>
                                <button class="buy-sale-button not-buyed" onclick="makeBuy(+document.getElementById('course2').textContent, this, 4)">
                                    <p class="sale-button-text">Использовать скидку</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function closeModal() {
            var modalForm = document.querySelector('.modal-instruction');
            var overlay = document.querySelector('.overlay');
            modalForm.style.visibility = 'collapse';
            overlay.style.filter = 'brightness(100%)'
        }

        function openModal() {
            var modalForm = document.querySelector('.modal-instruction');
            var overlay = document.querySelector('.overlay');
            modalForm.style.visibility = 'visible';
            overlay.style.filter = 'brightness(50%)';
        }

        function refreshButtons() {
            var buttons = document.getElementsByClassName('buy-sale-button');
            [...buttons].forEach((button) => {
                button.classList.remove('already-buyed');
                button.classList.remove('not-buyed');
                button.classList.add('not-buyed');
                button.disabled = false;
                button.querySelector('.sale-button-text').textContent = 'Использовать скидку'
            })
        }

        function blockButtons(buyeds) {
            var buttons = document.getElementsByClassName('buy-sale-button');
            [...buyeds].forEach((buyed) => {
                if(buyed['1']) {
                    buttons[0].classList.remove('not-buyed');
                    buttons[0].classList.add('already-buyed');
                    buttons[0].disabled = true;
                    buttons[0].querySelector('.sale-button-text').textContent = 'Уже использовано'
                }
                if(buyed['2']) {
                    buttons[1].classList.remove('not-buyed');
                    buttons[1].classList.add('already-buyed');
                    buttons[1].disabled = true;
                    buttons[1].querySelector('.sale-button-text').textContent = 'Уже использовано'
                }
                if(buyed['3']) {
                    buttons[2].classList.remove('not-buyed');
                    buttons[2].classList.add('already-buyed');
                    buttons[2].disabled = true;
                    buttons[2].querySelector('.sale-button-text').textContent = 'Уже использовано'
                }
                if(buyed['4']) {
                    buttons[3].classList.remove('not-buyed');
                    buttons[3].classList.add('already-buyed');
                    buttons[3].disabled = true;
                    buttons[3].querySelector('.sale-button-text').textContent = 'Уже использовано'
                }
            })
        }

        function getUserData() {
            refreshButtons();
            var login = document.querySelector('.login').value;
            $.ajax({
                type: 'GET',
                url: '/php/getUser.php', // url: url
                dataType: 'json',
                data: {login: login},
                success: function(data) {
                    console.log(data);
                    document.getElementById("user").textContent = data[0]['id'];
                    document.getElementById("balance").textContent = data[1]['balance'];
                    document.getElementById("calls").textContent = data['products']['0']['1'];
                    document.getElementById("specCourse").textContent = data['products']['1']['2'];
                    document.getElementById("course1").textContent = data['products']['2']['3'];
                    document.getElementById("course2").textContent = data['products']['3']['4'];
                    blockButtons(data['buyed_products']);
                }});
        }

        function makeBuy(price, button , product) {
            var user = +document.getElementById('user').textContent;
            if (user !== 0) {
                $.ajax({
                    type: 'POST',
                    url: '/php/makeBuy.php', // url: url
                    dataType: 'json',
                    data: {user: user, product: product},
                    success: function(data) {

                    }});
                button.classList.remove('not-buyed');
                button.classList.add('already-buyed');
                button.disabled = true;
                button.querySelector('.sale-button-text').textContent = 'Уже использовано'
                document.getElementById('balance').textContent = +document.getElementById('balance').textContent - price;
            }
        }
    </script>
</body>
</html>
