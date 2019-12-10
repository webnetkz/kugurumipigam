<?php
  require_once "app/get.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="public/img/favicon.png" type="image/png">

    <title>KUGURUMIPIGAM</title>

    <script>
      var w = screen.width;
      if(w < 700) {
        var link = document.createElement("link");
        link.rel = "stylesheet";
        link.href = "public/css/mstyle.css";
        document.head.appendChild(link);
      } else {
        var link = document.createElement("link");
        link.rel = "stylesheet";
        link.href = "public/css/style.css";
        document.head.appendChild(link);
      }
    </script>

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
        <a href="#onePosts" class="menuItem">ВЗРОСЛЫЕ <br> КИГУРУМИ</a>
        <img src="public/img/star.png">
        <a href="#twoPosts" class="menuItem">ДЕТСКИЕ <br> КИГУРУМИ</a>
        <img src="public/img/star.png">
        <a href="#" class="menuItem none">ТАПКИ - <br> ЛАПКИ</a>
        <img src="public/img/star.png" class="none">
        <a href="#" class="menuItem none">ПЕРЧАТКИ - <br> ЛАПКИ</a>
        <img src="public/img/star.png" class="none">
        <a href="#" class="menuItem none">КИГУРУМИ <br> СО СКИДКОЙ</a>
        <img src="public/img/star.png" class="none">
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
          <p</p>
        </div>

        <button class="accordion">ЦВЕТ</button>
        <div class="panel">

        </div>

        <button class="accordion">ТИП ЗАСТЕЖКИ</button>
        <div class="panel">
          <option value="molniya" onclick="goFilter(this);">молния</option>
          <option value="pugovica" onclick="goFilter(this);">пуговицы</option>
        </div>

        <button class="accordion">ХВОСТ</button>
        <div class="panel">
          <option value="hvost" onclick="goFilter(this);">есть</option>
          <option value="nhvost" onclick="goFilter(this);">нету</option>
        </div>

        <button class="accordion">КАРМАНЫ</button>
        <div class="panel">
          <option value="carman" onclick="goFilter(this);">есть</option>
          <option value="ncarman" onclick="goFilter(this);">нету</option>
        </div>

        <button class="accordion">РАЗМЕР</button>
        <div class="panel">
          <option value="S" onclick="goFilter(this);">S</option>
          <option value="M" onclick="goFilter(this);">M</option>
          <option value="L" onclick="goFilter(this);">L</option>
          <option value="XL" onclick="goFilter(this);">XL</option>
          <option value="XXL" onclick="goFilter(this);">XXL</option>
        </div>
            <button class="btnFilter">ПОКАЗАТЬ</button>
      </div>
    </div>
    <div class="posts" id="onePosts">

      <div class="cartItem S M L XL XXL molniya carman">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">MEGO SIZE</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="Ssize" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem M">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">M size</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="Msize" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem hvost">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">С хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="Хвост" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem molniya">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">На молнии</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="На_Молнии" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem pugovica">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">На пуговицах</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="На_пуговицах" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem M">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">М размер</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="Msize" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>
      

      
      
    </div>
  </div>

  <div class="midl2" id="twoPosts">
    <h1>ДЕТСКИЕ КИГУРУМИ</h1>
    <div class="navigate">
      <div class="headFilter">
        <img src="public/img/filter.png" class="filter">
        <p class="textFilter">Подбор параметров</p>
      </div>
      <div class="navFilter">
        <button class="accordion">МАТЕРИАЛ</button>
        <div class="panel">
          <p</p>
        </div>

        <button class="accordion">ЦВЕТ</button>
        <div class="panel">

        </div>

        <button class="accordion">ТИП ЗАСТЕЖКИ</button>
        <div class="panel">
          <option value="molniya" onclick="goFilter1(this);">молния</option>
          <option value="pugovica" onclick="goFilter1(this);">пуговицы</option>
        </div>

        <button class="accordion">ХВОСТ</button>
        <div class="panel">
          <option value="hvost" onclick="goFilter1(this);">есть</option>
          <option value="nhvost" onclick="goFilter1(this);">нету</option>
        </div>

        <button class="accordion">КАРМАНЫ</button>
        <div class="panel">
          <option value="carman" onclick="goFilter1(this);">есть</option>
          <option value="ncarman" onclick="goFilter1(this);">нету</option>
        </div>

        <button class="accordion">РАЗМЕР</button>
        <div class="panel">
          <option value="S" onclick="goFilter1(this);">S</option>
          <option value="M" onclick="goFilter1(this);">M</option>
          <option value="L" onclick="goFilter1(this);">L</option>
          <option value="XL" onclick="goFilter1(this);">XL</option>
          <option value="XXL" onclick="goFilter1(this);">XXL</option>
        </div>
            <button class="btnFilter">ПОКАЗАТЬ</button>
      </div>
    </div>
    <div class="posts" id="onePosts">

      <div class="cartItem S">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">S size</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="Ssize" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem M">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">M size</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="Msize" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem hvost">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">С хвостом</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="Хвост" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem molniya">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">На молнии</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="На_Молнии" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem pugovica">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">На пуговицах</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="На_пуговицах" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
      </div>

      <div class="cartItem M">
      <form action="" method="POST">
        <img src="public/img/25.png" class="sale">
        <img src="public/img/kig.png" class="imgItem">
        <p class="headText">М размер</p>
        <p class="line1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Размер</span></p>
          <div class="blockSize">
            <input type="button" class="size" value="S" onclick="getSize(this.value);">
            <input type="button" class="size" value="M" onclick="getSize(this.value);">
            <input type="button" class="size" value="L" onclick="getSize(this.value);">
            <input type="button" class="size sizeActive" value="XL" onclick="getSize(this.value);">
            <input type="button" class="size" value="XXL" onclick="getSize(this.value);">
            <input type="hidden" value="XL" name="size" class="getSize">
            <input type="hidden" value="Msize" name="name">
          </div>
        <p>
          <p class="sum">17 500 тг.
            <input type="submit" value="в корзину" class="sub" name="sub">
          </p>
        </p>
      </form>
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
    <script src="public/js/filter.js"></script>
</body>
</html>