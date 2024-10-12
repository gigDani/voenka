<?php
require __DIR__ . '/../login/db.php'; //подключаем файл для соединения с БД
if(isset($_SESSION['logged_user'])) : 

$token = 'AQAAAAAmK1q7AAcSIduV6xA0lUOdoJbuTSZNBd4';
 
$params = array(
	'ids'     => '74740837', 
	'metrics' => 'ym:s:visits,ym:s:pageviews,ym:s:users,ym:s:bounceRate,ym:s:pageDepth,ym:s:avgVisitDurationSeconds',
	'date1'   => 'today', // 7daysAgo - неделя, 30daysAgo - месяц, 365daysAgo - год
	'date2'   => 'today',
);
 
$ch = curl_init('https://api-metrika.yandex.net/stat/v1/data/bytime?' . urldecode(http_build_query($params)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: OAuth ' . $token));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);	

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Панель управления - ВУЦ РУТ(МИИТ)</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo_star_black.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo_star_mini.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
           
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
          </li>
     
        </ul>
          <a href="login/logout.php" style="color:#fff"><h3>Выйти</h3></a>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
       
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="images/face.jpg" alt="">
            <p class="name"><?php echo $_SESSION['logged_user']->name;?> <?php echo $_SESSION['logged_user']->family;?> </p>
            <p class="designation">admin</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
         
            <li class="nav-item">
              <a class="nav-link" href="https://docs.google.com/forms/u/1/">
                <img src="images/icons/005-forms.png" alt="">
                <span class="menu-title">Результаты <br >тестирования</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-elements/buttons.html">
                <img src="images/icons/4.png" alt="">
                <span class="menu-title">Добавить <br >студента</span>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="images/icons/10.png" alt="">
                <span class="menu-title">Настройки</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Мониторинг пользовательской активности обучающей программы военной подготовки студентов Военно-учебного центра</h3>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                       <img src="images/ico_1.jpg"/> 
                 
                    </div>
                    <div class="float-right">
                        <br>
                    <h2> Визиты: <?php echo $res['totals'][0][0];  ?></h2>
                    </div>
                  </div>
                  <p class="text-muted">
                 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                     <img src="images/ico_2.jpg"/> 
              
                    </div>
                    <div class="float-right">
                          <br>
                           <h2> Просмотры: <?php echo $res['totals'][0][1];?></h2>
                    </div>
                  </div>
               
                </div>
              </div>
            </div>
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="images/ico_3.jpg"/> 
                    </div>
                    <div class="float-right">
                          <br>
                    <h2>  Посетители: <?php echo $res['totals'][0][2];?></h2>
                    </div>
                  </div>
               
                </div>
              </div>
            </div>
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="images/ico_4.jpg"/> 
                    </div>
                    <div class="float-right">
                          <br>
                      <h3> Отказы: <?php echo number_format($res['totals'][0][3], 1, '.', ',');?> % </h3>
                    </div>
                  </div>
               
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                       <img src="images/ico_5.jpg"/> 
                    </div>
                    <div class="float-right">
                        <br>
                    <h4> Глубина просмотра: <?php echo number_format($res['totals'][0][4], 1, '.', ',');?></h4>
                    </div>
                  </div>
               
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="images/ico_6.jpg"/> 
                    </div>
                    <div class="float-right">
                          <br>
                  <h5> Время на сайте: <?php echo number_format($res['totals'][0][5]/60, 1, '.', ',');?> мин. </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
        
          <div class="card-deck">
            <div class="card col-lg-12 px-0 mb-4">
              <div class="card-body">
                <h5 class="card-title">Последние визиты</h5>
                <div class="table-responsive">
                  <table class="table center-aligned-table">
                    <thead>
                      <tr class="text-primary">
                        <th>Order No</th>
                        <th>Product Name</th>
                        <th>Purchased On</th>
                        <th>Shipping Status</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="">
                        <td>034</td>
                        <td>Iphone 7</td>
                        <td>12 May 2017</td>
                        <td>Dispatched</td>
                        <td>Credit card</td>
                        <td><label class="badge badge-success">Approved</label></td>
                        <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                        <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                      </tr>
                      <tr class="">
                        <td>035</td>
                        <td>Galaxy S8</td>
                        <td>15 May 2017</td>
                        <td>Dispatched</td>
                        <td>Internet banking</td>
                        <td><label class="badge badge-warning">Pending</label></td>
                        <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                        <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">ВУЦ РУТ (МИИТ)</a> &copy; 2021
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/maps.js"></script>
</body>

</html>

<?php 
else : 
echo "<script>window.location.href='https://vuts-miit.ru/admin/login/login.php';</script>";
endif; 
?>