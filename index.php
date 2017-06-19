<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Анкета соискателя</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!--<link rel="stylesheet/less" type="text/css" href="css/main.less">
    <script src="js/less.min.js" type="text/javascript"></script>
    <link rel="canonical" href=""/>-->
    <link href="css/main.css?v=2" rel="stylesheet" type="text/css">

</head>
<body>
<div class="w100" id="navigation">
    <div class="container">
        <a href="#" class="pull"><img src="img/menu.jpg" alt="Меню..."></a>
        <ul class="landingMenu">
            <li><a href="#worksheet">Личная информация</a></li>
            <li><a href="#experience">Опыт</a></li>
            <li><a href="#js">JavaScript</a></li>
            <li><a href="#about">О себе</a></li>
        </ul>
    </div>
</div>

<div class="container text-center">
    <h1>Анкета</h1>
</div>

<form action="index.php" method="get">

    <div class="w100 worksheet" id="worksheet">
        <div class="container text-center">
            <img src="img/worksheet.png" alt="Анкета">
            <h2>Личная информация</h2>

            <label class="smart">
                <input type="text" name="fio" onblur="labelNoEmpty(this)" value="Артемьев Денис Вячеславович">
                <span class="label-text">ФИО</span>
            </label>

            <select name="birthday" id="select">
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993" selected>1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1970">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
            </select>

            <label class="smart">
                <input type="text" name="area" onblur="labelNoEmpty(this)" value="г. Алматы, Казахстан">
                <span class="label-text">Место проживания</span>
            </label>

            <label class="smart">
                <input type="text" name="skype" onblur="labelNoEmpty(this)" value="aliveartdenis">
                <span class="label-text">Skype</span>
            </label>

            <label class="smart">
                <input type="text" name="email" onblur="labelNoEmpty(this)" value="art.denis@mail.ru">
                <span class="label-text">E-mail</span>
            </label>

        </div>
    </div>

    <div class="w100 experience" id="experience">
        <div class="container">
            <div class="text-center">
                <img src="img/experience.png" alt="Расскажите о своем опыте">
                <h2>Расскажите о своем опыте</h2>
            </div>

            <input type="checkbox" name="bem" id="bem">
            <label class="checkbox" for="bem">БЭМ/OOCSS</label>

            <input type="checkbox" name="aftercss" id="aftercss" checked>
            <label class="checkbox" for="aftercss">Stylus/LESS/SASS</label>

            <input type="checkbox" name="svg" id="svg">
            <label class="checkbox" for="svg">Работаю с SVG</label>

            <input type="checkbox" name="semantic" id="semantic" checked>
            <label class="checkbox" for="semantic">Верстаю семантично</label>

            <input type="checkbox" name="es" id="es">
            <label class="checkbox" for="es">ES2015/ES2016</label>

            <input type="checkbox" name="Gulp" id="Gulp">
            <label class="checkbox" for="Gulp">Gulp/GRUNT</label>

            <input type="checkbox" name="webpack" id="webpack">
            <label class="checkbox" for="webpack">Webpack</label>

            <input type="checkbox" name="jQuery" id="jQuery" checked>
            <label class="checkbox" for="jQuery">jQuery</label>

            <input type="checkbox" name="Git" id="Git">
            <label class="checkbox" for="Git">Использую Git</label>

        </div>
    </div>

    <div class="w100 js" id="js">
        <div class="container text-center">
            <img src="img/js.png" alt="Уровень владения JavaScript">
            <h2>Уровень владения JavaScript</h2>

            <div class="markers">
                <div class="item" onclick="slider.noUiSlider.set( 0 );">Не владею</div>
                <div class="item" onclick="slider.noUiSlider.set( 1 );">Использую готовые <br> решения</div>
                <div class="item" onclick="slider.noUiSlider.set( 2 );">Использую готовые решения и умею и переделывать</div>
                <div class="item" onclick="slider.noUiSlider.set( 3 );">Пишу сложный JS с нуля</div>
            </div>
            <input type="hidden" id="js_value">
            <div id="slider"></div>

        </div>
    </div>

    <div class="w100 about" id="about">
        <div class="container text-center">
            <img src="img/about.png" alt="Расскажите о себе">
            <h2>Расскажите о себе</h2>
            <p>Напишите несколько предложений, чем привлекла наша вакансия
                и что вы ожидаете от работы у нас.
            </p>

            <textarea name="info" placeholder="Понравилась тем, что...">
                Вакансия мне понравилась тем, что во-первых это удаленная работа - можно сократить время на дорогу, деньги на бензин. Можно сформировать свой график таким образом, чтобы все успевать.
                Вторая причина - опыт. Я давно верстаю сайты, считаю, что хорошо в этом разбираюсь, но все же из-за отсутствия необходимости не использовал Webpack, Gulp/GRUNT, Git и прочее. Верстаю я давно с одним и тем же дизайнером, не хватает разнообразия в проектах, да и в целом не хватает интересных проектов.
                Третья причина - я работал в компании, которая оплатила мне обучение в магистратуре, за что я должен был в ней отработать 3 года. Но обстоятельства сложили так, что компания закрыла наш департамент, и вопрос об отработке снят. Поэтому мне необходим стабильный заработок.
                От работы я ожидаю интересные проекты и задачи, в том числе, требующие новых для меня знаний во frontend разработке. Адекватную и справедливую заработную плату. И в целом человеческое отношение.
            </textarea>

            <button class="v1">Готово</button>

        </div>
    </div>

</form>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/nouislider.min.js"></script>
<script type="text/javascript" src="js/js.js?v=2"></script>
</body>
</html>