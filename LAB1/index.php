<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота 1</title>
    <style>
        form {
            text-align: center;
            font-size: 22px;
            font-style: italic;
        }
        select, input {
            font-size: 120%;
        }
    </style>
</head>
<body>
    <form action="code.php" method="post">
        <p>Виберіть дату: <br>
            <select name="year" id="year">
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
            <select name="month" id="month">
                <option value="01">Січень</option>
                <option value="02">Лютий</option>
                <option value="03">Березень</option>
                <option value="04">Квітень</option>
                <option value="05">Травень</option>
                <option value="06">Червень</option>
                <option value="07">Липень</option>
                <option value="08">Серпень</option>
                <option value="09">Вересень</option>
                <option value="10">Жовтень</option>
                <option value="11">Листопад</option>
                <option value="12">Грудень</option>
            </select>
            <select name="day" id="day">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <br>
            <input type="text" id="note" name="note"><br>
            <input type="submit">
    </form>
</body>
</html>
