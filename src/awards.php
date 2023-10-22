<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Награды</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/awards.css">
</head>

<body>
    <?php
    include './share/navbar.php';
    ?>

    <div class="awards-page">

        <h1 class="awards-header">Бонусная система поощрения за сдачу крови и костного мозга</h1>

        <!-- Изображение. Если картинки нет, используется блок no-image -->
        <img src="./share/KOT2.jpeg" alt="Image description" class="awards-image">

        <div>
            <h2 class="section-title">1. Основы системы:</h2>
            <p>Данная бонусная система создана для поощрения доноров, которые сдают кровь и костной мозг.
                 Каждый раз, когда донор сдает кровь или костной мозг, ему начисляются бонусные очки. 
                 За сдачу 1 мл крови пользователь получает на счет 1 бонус (при Бронзовом уровне)</p>

            <h2 class="section-title">2. Начисление бонусов:</h2>
            <div class="sub-section">
                <div class="sub-title">Сдача крови:</div>
                <p> За каждую сдачу крови начисляется определенное количество бонусных очков.</p>
            </div>
            <div class="sub-section">
                <div class="sub-title">Сдача костного мозга:</div>
                <p> Сдача костного мозга оценивается выше, и за нее начисляется большее количество бонусных очков по сравнению с сдачей крови.</p>
            </div>
            <h2 class="section-title">3. Уровни пользователей</h2>
            <div class="sub-section">
                <p>За сдачу костного мозга пользователь будет повышать свой уровень и открывать приятные "Плюшки"</p>
                <div class="sub-title">Бронзовый уровень</div>
                <p>Является базовым уровнем с которого начинают все пользователи</p>
                <p>Количество сдач Костного мозга <= 1 Коэффициент увеличения баллов за донорство: 1.0х</p>
                        <div class="sub-title">Серебрянный уровень</div>
                        <p>Количество сдач Костного мозга >1.
                            Коэффициент увеличения баллов за донорство: 1.1х</p>
                        <div class="sub-title">Золотой уровень</div>
                        <p>Количество сдач Костного мозга > 2.
                            Коэффициент увеличения баллов за донорство: 1.2х</p>
                        <div class="sub-title">Платиновый уровень</div>
                        <p>Количество сдач Костного мозга > 3.
                            Коэффициент увеличения баллов за донорство: 1.4х</p>
            </div>
            <h2 class="section-title">4. Как использовать бонусы</h2>
            <p>Эти бонусы в дальнейшем можно использовать для приобретения скидочных купонов, билетов на мероприятия и другие вещи в нашем магазине.</p>
        </div>
    </div>
</body>