

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Библиотека</title>
  
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(74740837, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/74740837" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  a.razdel
  {
     background-image: url(img/razdel1.jpg);
	 display: block;
	 width:200px; 
	 height:60px;
	 text-align: left;
  }
  a.razdel:hover 
  {
     background-image: url(img/razdel2.jpg);
	 
  }

.row {
  display: flex;
  justify-content: space-between; 
  flex-wrap: wrap;
  margin-bottom: 70px;
}

.book {
  transform-style: preserve-3d;
  position: relative;
  height: 300px;
  cursor: pointer;
  backface-visibility: visible;
}

.front, .back, .page1, .page2, .page3, .page4, .page5, .page6 {
  transform-style: preserve-3d;
  position: absolute;
  width: 200px;
  height: 100%;
  top: 0; left: 0;
  transform-origin: left center;
  transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
}

.front, .back {
  #background: #911b14;
  background: rgb(182,30,39);
  background: radial-gradient(circle, rgba(182,30,39,1) 0%, rgba(98,13,13,1) 100%);
}

.front h3, .front h4, .front h5{
  align: center;
  color: white;
  padding-top: 80px;
  text-align: center;
}

.front, .page1, .page3, .page5 {
  border-bottom-right-radius: .5em;
  border-top-right-radius: .5em;
}

.back, .page2, .page4, .page6 {
  border-bottom-right-radius: .5em;
  border-top-right-radius: .5em;
}

.page1 {
  background: #efefef;
}

.page2 {
  background: #efefef;
}

.page3 {
  background: #f5f5f5;
}

.page4 {
  background: #f5f5f5;
}

.page5 {
  background-image: url("../library/preview/book-1/page1.png");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.page6 {
  background-image: url("../library/preview/book-1/page2.png");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book:hover .front {
  transform: rotateY(-160deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page1 {
  transform: rotateY(-150deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page2 {
  transform: rotateY(-30deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page3 {
  transform: rotateY(-140deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page4 {
  transform: rotateY(-40deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page5 {
  transform: rotateY(-130deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page6 {
  transform: rotateY(-50deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .back {
  transform: rotateY(-20deg) scale(1.1);
}



.book2 .front, .book2 .back {
  #background: #911b14;
  background: rgb(61,108,21);
  background: radial-gradient(circle, rgba(61,108,21,1) 0%, rgba(26,60,14,1) 100%);
}

.book3 .front, .book3 .back {
  #background: #911b14;
  background: rgb(2,0,96);
  background: radial-gradient(circle, rgba(2,0,96,1) 0%, rgba(4,0,34,1) 100%);
}

.book4 .front, .book4 .back {
  #background: #911b14;
  background: rgb(111,78,57);
  background: radial-gradient(circle, rgba(111,78,57,1) 0%, rgba(60,28,23,1) 100%); 
}

.book5 .front, .book5 .back {
background: rgb(76,50,115);
background: radial-gradient(circle, rgba(76,50,115,1) 0%, rgba(28,0,52,1) 100%);
}

.book6 .front, .book6 .back {
  background: rgb(228,111,37);
  background: radial-gradient(circle, rgba(213,106,38,1) 0%, rgba(154,63,4,1) 100%);
}

.book7 .front, .book7 .back {
background: rgb(50,115,95);
background: radial-gradient(circle, rgba(50,115,95,1) 0%, rgba(15,60,66,1) 100%);
}

.book8 .front, .book8 .back {
background: rgb(0,100,140);
background: radial-gradient(circle, rgba(0,100,140,1) 0%, rgba(15,60,66,1) 100%);
}



.book1 .page5 {
  background-image: url("../library/preview/special/book-1/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book1 .page6 {
  background-image: url("../library/preview/special/book-1/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}


.book2 .page5 {
  background-image: url("../library/preview/special/book-2/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book2 .page6 {
  background-image: url("../library/preview/special/book-2/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}


.book3 .page5 {
  background-image: url("../library/preview/special/book-3/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book3 .page6 {
  background-image: url("../library/preview/special/book-3/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}


.book4 .page5 {
  background-image: url("../library/preview/special/book-4/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book4 .page6 {
  background-image: url("../library/preview/special/book-4/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}


.book5 .page5 {
  background-image: url("../library/preview/special/book-5/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book5 .page6 {
  background-image: url("../library/preview/special/book-5/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book6 .page5 {
  background-image: url("../library/preview/special/book-6/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book6 .page6 {
  background-image: url("../library/preview/special/book-6/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book7 .page5 {
  background-image: url("../library/preview/special/book-7/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book7 .page6 {
  background-image: url("../library/preview/special/book-7/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book8 .page5 {
  background-image: url("../library/preview/special/book-8/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book8 .page6 {
  background-image: url("../library/preview/special/book-8/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book9 .page5 {
  background-image: url("../library/preview/special/book-9/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book9 .page6 {
  background-image: url("../library/preview/special/book-9/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book10 .page5 {
  background-image: url("../library/preview/special/book-10/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book10 .page6 {
  background-image: url("../library/preview/special/book-10/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book11 .page5 {
  background-image: url("../library/preview/special/book-11/page1.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

.book11 .page6 {
  background-image: url("../library/preview/special/book-11/page2.PNG");
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

  </style>
</head>
<body>

<div class="jumbotron jumbotron-fluid text-center" style="margin-bottom:-10px;margin-top:-20px;background-color:#9c050c;color:#fff;">
		<img src="../img/logo_test.jpg" class="img-fluid">
		<br><br>
  <h1>Библиотека</h1>
  <!--p>(Выберите курс для обучения)</p-->
</div>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!--a class="nav-link" href="#">Список курсов</a-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
  
   <li class="nav-item">
			<a class="nav-link" href="../main_all.php">Список курсов</a>
			</li>

   <li class="nav-item">
			<a class="nav-link" href="./rgo.php">Русское географическое общество</a>
			</li>
  
   <li class="nav-item">
			<a class="nav-link" href="./release.php">Выпуски военно-учебного центра</a>
			</li>
   <li class="nav-item">
			<a class="navbar-brand" href="./library.php">Библиотека</a>
			</li>

      <li class="nav-item">
        <!--a class="nav-link" href="login/logout.php">Выход</a-->
      </li>   
    </ul>
  </div>  
</nav>




<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!--a class="nav-link" href="#">Список курсов</a-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
  
   <li class="nav-item">
			<a class="nav-link" href="./library.php">Общевоинская подготовка</a>
			</li>
   <li class="nav-item">
			<a class="navbar-brand" href="./library-special.php">Специальная подготовка</a>
			</li>

      <li class="nav-item">
        <!--a class="nav-link" href="login/logout.php">Выход</a-->
      </li>   
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:70px">
  <div class="row">
	<div class="book1">
	<a style="display:block" href="../library/special/Восстановление_железных_дорог_часть_1.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h4>Восстановление железных дорог часть 1</h4>
		  </div>
		</div>
	</div>
	</a>
	</div>
	<div class="book2">
	<a style="display:block; " href="../library/special/Восстановление_железных_дорог_часть_2.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h4>Восстановление железных дорог часть 2</h4>
		  </div>
		</div>
	</div>
	</a>
	</div>
<div class="book3">
	<a style="display:block; " href="../library/special/Инструкция_по_сигнализации_и_связи.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h4>Инструкция по сигнализации и связи</h4>
		  </div>
		</div>
	</div>
	</a>
	</div>
	<div class="book4">
	<a style="display:block; " href="../library/special/Мосты_на_железных_дорогах.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h3>Мосты на железных дорогах</h3>
		  </div>
		</div>
	</div>
	</a>
	</div>
</div>


<div class="row">
	<div class="book5">
	<a style="display:block" href="../library/special/Строительство_и_восстановление_искусственных_сооружений.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h4>Строительство и восстановление искусственных сооружений</h4>
		  </div>
		</div>
	</div>
	</a>
	</div>
	<div class="book6">
	<a style="display:block; " href="../library/special/Техническая_эскплуатация_локомотивов.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h4>Техническая эксплуатация локомотивов</h4>
		  </div>
		</div>
	</div>
	</a>
	</div>
	<div class="book7">
	<a style="display:block; " href="../library/special/Технические_средства_железнодорожного_транспорта.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h5>Технические средства железнодорожного транспорта</h5>
		  </div>
		</div>
	</div>
	</a>
	</div>
	<div class="book8" >
	<a style="display:block; " href="../library/special/Управление_подразделениями_в_мирное_время.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h5>Управление подразделениями в мирное время</h5>
		  </div>
		</div>
	</div>
	</a>
	</div>
</div>

<div class="row">
	<div class="book9">
	<a style="display:block" href="../library/special/Учебник_cержанта_железнодорожных_войск_часть_1.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h5>Учебник сержанта железнодорожных войск часть 1</h5>
		  </div>
		</div>
	</div>
	</a>
	</div>
	<div class="book10">
	<a style="display:block; " href="../library/special/Учебник_cержанта_железнодорожных_войск_часть_2.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h5>Учебник сержанта железнодорожных войск часть 2</h5>
		  </div>
		</div>
	</div>
	</a>
	</div>
	<div class="book11">
	<a style="display:block; " href="../library/special/Учебник_cержанта_железнодорожных_войск_часть_3.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h5>Учебник сержанта железнодорожных войск часть 3</h5>
		  </div>
		</div>
	</div>
	</a>
	</div>
	<div class="book" style="visibility:hidden;">
	<a style="display:block; " href="../library/special/Управление_подразделениями_в_мирное_время.pdf">
	<div class="col-sm-4">
		<div class="book">
		  <div class="back"></div>
		  <div class="page6"></div>
		  <div class="page5"></div>
		  <div class="page4"></div>
		  <div class="page3"></div>
		  <div class="page2"></div>
		  <div class="page1"></div>
		  <div class="front">
		  	<h5>Управление подразделениями в мирное время</h5>
		  </div>
		</div>
	</div> 
	</a>
	</div>


	 
 	 
	<style>  
body {
  background: url(https://html5book.ru/wp-content/uploads/2015/10/background54.png);
}
.pressed-button {
  text-decoration: none;
  display: inline-block;
  padding: 6px 20px;
  margin: 8px 2px;
  border-radius: 30px;
  background-image: linear-gradient(45deg, #6ab1d7 0%, #33d9de 50%, #002878 100%);
  background-position: 100% 0;
  background-size: 200% 200%;
  font-family: 'Montserrat', sans-serif;
  font-size: 24px;
  font-weight: 300;
  color: white;
  box-shadow: 0 16px 32px 0 rgba(0, 40, 120, .35);
  transition: .5s;
}
.pressed-button:hover {
  box-shadow: 0 0 0 0 rgba(0, 40, 120, 0);
  background-position: 0 0;
}
</style>


</div>
 
</div>


</body>
</html>
