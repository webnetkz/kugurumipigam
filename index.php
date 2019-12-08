<?php
  require_once "app/get.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="public/css/mstyle.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="icon" href="public/img/favicon.png" type="image/png">

    <title>KUGURUMIPIGAM</title>

</head>
<body>
  <div class="mag">
    <?php
      if(!empty($_SESSION['num'])) {
        echo '<p class="numMag">'.$_SESSION['num'].'</p>';
      }
    ?>
  </div>
  <a href="#" class="fix">
    <img src="public/img/p.png">
  </a>
  <a href="#" class="fix1">
    <img src="public/img/w.png">
  </a>
  <header>
    <img src="public/img/logo.png">
    <div class="line">
      <img src="public/img/phone.png">
      <p class="phone">+7 (777) 777-77-77</p>
      <br>
      <a href="#" class="linkPhone">Обратный звонок</a>
    </div>
    <div class="line">
      <a href="#">
        <img src="public/img/insta.png" class="insta">
      </a>
    </div>
    <div class="line2">
      <a href="#"><img src="public/img/adressMap.png" class="map"><img src="public/img/adress.png" class="insta"></a>
    </div>
    <input type="text" placeholder="   Поиск">
  </header>

  <div class="midl">
    <div class="content">
      <menu>
        <img src="public/img/star.png">
        <a href="#1" class="menuItem">ВЗРОСЛЫЕ <br> КИГУРУМИ</a>
        <img src="public/img/star.png">
        <a href="#" class="menuItem">ДЕТСКИЕ <br> КИГУРУМИ</a>
        <img src="public/img/star.png">
        <a href="#" class="menuItem">ТАПКИ - <br> ЛАПКИ</a>
        <img src="public/img/star.png">
        <a href="#" class="menuItem">ПЕРЧАТКИ - <br> ЛАПКИ</a>
        <img src="public/img/star.png">
        <a href="#" class="menuItem">КИГУРУМИ <br> СО СКИДКОЙ</a>
        <img src="public/img/star.png">
      </menu>
      <div class="h1text">
        <h1 class="h1">ЗАБАВНЫЕ ПИЖАМЫ</h1>
        <h1 class="h1"><span>КИГУРУМИ </span> ДЛЯ</h1>
        <h1 class="h1">ВСЕ СЕМЬИ!</h1>
      </div>
    </div>
  </div>
  <div class="midl1" id="1">
    <h1>ВЗРОСЛЫЕ КИГУРУМИ</h1>   
    <div class="navigate">
      <div class="headFilter">
        <img src="public/img/filter.png" class="filter">
        <p class="textFilter">Подбор параметров</p>
      </div>
      <div class="navFilter">
        <button class="accordion">МАТЕРИАЛ</button>
        <div class="panel">
          <p>Ответ на Вопрос 1...</p>
        </div>

        <button class="accordion">ЦВЕТ</button>
        <div class="panel">
          <p>Ответ на Вопрос 2...</p>
        </div>

        <button class="accordion">ТИП ЗАСТЕЖКИ</button>
        <div class="panel">
          <p>Ответ на Вопрос 3 ...</p>
        </div>

        <button class="accordion">ХВОСТ</button>
        <div class="panel">
          <p>Ответ на Вопрос 3 ...</p>
        </div>

        <button class="accordion">КАРМАНЫ</button>
        <div class="panel">
          <p>Ответ на Вопрос 3 ...</p>
        </div>

        <button class="accordion">РАЗМЕР</button>
        <div class="panel">
          <p>Ответ на Вопрос 3 ...</p>
        </div>

        <button class="btnFilter">ПОКАЗАТЬ</button>
      </div>
    </div>
    <div class="posts">
      <div class="cartItem" id="kigurumi">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="kigurumi" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem"  id="newK">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="newK" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem">
      <form action="">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem">
      <form action="">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem">
      <form action="">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem">
      <form action="">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </form>
      </div>

      
      
    </div>
  </div>

  <div class="midl2" id="2">
    <h1>ДЕТСКИЕ КИГУРУМИ</h1>


    <div class="navigate">
      <img src="public/img/1.png">
    </div>
    <div class="posts">
      <div class="cartItem">
        <img src="public/img/35.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </div>
      <div class="cartItem">
        <img src="public/img/35.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </div>
      <div class="cartItem">
        <img src="public/img/35.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </div>
      <div class="cartItem">
        <img src="public/img/35.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </div>
      <div class="cartItem">
        <img src="public/img/35.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </div>
      <div class="cartItem">
        <img src="public/img/35.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">Единорог бирюзовый кигуруми с рогом, ушками и хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="" name="size" class="getSize">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub">
          </p>
        </p>
      </div>
    </div>
  </div>
            
  <div class="frame"></div>
  <footer>
      <div class="footContent">
        <h1>КОНТАКТЫ</h1>
        <p><b>Обработка заказов:</b> Пн-Пт 10-19 (Алматы). Заказы на сайте принимаются ежедневно и круглосуточно.</p>
        <p><b>Телефон:</b> +7 (777) 777-77-77</p>
        <p><b>Адрес:</b> г. Алматы, проспект Фурманова 189 </p>
        <p><b>Электронная почта:</b> info@9304080750.ru</p>
        <h2>КАРТА</h2>
      </div>
  </footer>
    <div class="foot"></div>

    <script src="public/js/js.js"></script>
</body>
</html>