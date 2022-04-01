<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="img/logo.png" alt="" height="90px">
        <div class="header__title">
            <h1>Cамостоятельная работа</h1>
        </div>
        <span>Молчанова Марина 211-323</span>
    </header>
    <main>
        <form method="post" action="https://httpbin.org/post">
            <label for="name">Имя пользователя</label>
            <input type="text" name="username" id="name" placeholder="Введите имя">

            <label for="email">Почта</label>
            <input type="email" id="email" name="email" placeholder="Введите почту">

            <label for="feedback">Тип обращения</label>
            <select name="feedback" id="feedback">
                <option value="report">Жалоба</option>
                <option value="offer">Предложение</option>
                <option value="respect">Благодарность</option>
            </select>

            <label for="text">Текст обращения</label>
            <textarea name="feedback-text" id="text" cols="11" rows="3" placeholder="Введите текст обращения"></textarea>

            <label for="feedback-type">Вариант ответа</label>
            <input type="checkbox" name="feedback-type" id="feedback-type" value="смс"> <span>смс</span>
            <input type="checkbox" name="feedback-type" id="feedback-type" value="email"> <span>email</span>

            <button type="submit">Отправить</button>
            <input type="button" value="Ссылка на 2 страницу" onclick="window.open('page.php')">

        </form>
    </main>
    <footer>
        Собрать сайт из двух страниц.
    </footer>

</body>
</html>