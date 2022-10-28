<?php
$balance = 34;
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
    <div class="wrapper">
        <div class="main-wrapper">
            <div class="balance-wrapper">
                <?php echo
                    '<div class="balance-info">
                        <p class="your-balance">Ваш баланс:</p>
                        <div class="balance">
                            <img class="balance-coin" src="../public/coin.png">
                             <p class="balance-value">'.$balance.'</p>
                             <p class="balance-value">€$</p>
                        </div>
                    </div>'
                ?>
            </div>
            <div class="buy-wrapper">
                <div class="buy-footer">
                    <p>Варианты обмена на скидку</p>
                    <p class="instruction">Инструкция</p>
                </div>
                <div class="buy-menu">
                    <div class="buy-item">
                        <div class="buy-value-info">
                            <img class="buy-coin buy-element" src="../public/coin.png">
                            <p class="buy-value buy-element">50</p>
                            <p class="buy-value buy-element">€$</p>
                        </div>
                        <img class="buy-icon" src="../public/calls.png">
                        <div class="buy-description">
                            <div class="buy-sale">
                                <p class="sale-value">50%</p>
                            </div>
                            <p class="description">на звонки ST (x2)</p>
                        </div>
                        <button class="buy-sale-button already-buyed">
                            <p class="sale-button-text">Уже использовано</p>
                        </button>
                    </div>
                    <div class="buy-item">
                        <div class="buy-value-info">
                            <img class="buy-coin buy-element" src="../public/coin.png">
                            <p class="buy-value buy-element">70</p>
                            <p class="buy-value buy-element">€$</p>
                        </div>
                        <img class="buy-icon" src="../public/specCourse.png">
                        <div class="buy-description">
                            <div class="buy-sale">
                                <p class="sale-value">30%</p>
                            </div>
                            <p class="description">на спецкурс</p>
                        </div>
                        <button class="buy-sale-button not-buyed">
                            <p class="sale-button-text">Использовать скидку</p>
                        </button>
                    </div>
                    <div class="buy-item">
                        <div class="buy-value-info">
                            <img class="buy-coin buy-element" src="../public/coin.png">
                            <p class="buy-value buy-element">100</p>
                            <p class="buy-value buy-element">€$</p>
                        </div>
                        <img class="buy-icon" src="../public/course.png">
                        <div class="buy-description">
                            <div class="buy-sale">
                                <p class="sale-value">50%</p>
                            </div>
                            <p class="description">на курс</p>
                        </div>
                        <button class="buy-sale-button not-buyed">
                            <p class="sale-button-text">Использовать скидку</p>
                        </button>
                    </div>
                    <div class="buy-item">
                        <div class="buy-value-info">
                            <img class="buy-coin" src="../public/coin.png">
                            <p class="buy-value">139</p>
                            <p class="buy-value">€$</p>
                        </div>
                        <img class="buy-icon" src="../public/course.png">
                        <div class="buy-description">
                            <div class="buy-sale">
                                <p class="sale-value">65%</p>
                            </div>
                            <p class="description">на курс</p>
                        </div>
                        <button class="buy-sale-button not-buyed">
                            <p class="sale-button-text">Использовать скидку</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
