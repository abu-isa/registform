<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistem Informasi Pendaftaran Seminar Online">
  <meta name="author" content="Tori Abu Isa">
  <meta name="keyword" content="Sistem Informasi Pendaftaran Seminar Online">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>.:SIDANAR:.</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('template/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('template/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('template/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('template/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('template/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('template/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}" type="text/css">
  <link href="{{ asset('template/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('template/css/fullcalendar.css') }}">
  <link href="{{ asset('template/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('template/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('template/css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('template/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="{{ url('/admin') }}" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="{{ url('/admin/logout') }}"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
   
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="{{ url('/admin') }}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li>
            <a class="" href="{{ url('/listseminar') }}">
                          <i class="icon_desktop"></i>
                          <span>Seminar</span>
                      </a>
          </li>


          <li>
            <a class="" href="{{ url('/listregistration') }}">
                          <i class="icon_document_alt"></i>
                          <span>Registration</span>
                      </a>
          </li>
          <li>
            <a class="" href="{{ url('/report') }}">
                          <i class="icon_piechart"></i>
                          <span>Report</span>

                      </a>

          </li> 

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">6.674</div>
              <div class="title">Download</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">7.538</div>
              <div class="title">Purchased</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">4.362</div>
              <div class="title">Order</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">1.426</div>
              <div class="title">Stock</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


        


        <!-- Today status end -->



        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
                <div class="panel-actions">
                  <a href="{{ url('/admin') }}#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="{{ url('/admin') }}#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="{{ url('/admin') }}#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th>*</th>
                      <th>Name</th>
                      <th>Seminar</th>
                      <th>Tanggal</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>                  
                  <?php $no = 1; ?>
                  @foreach( $data as $q ) 
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td>{{ $q->name }}</td>
                      <td>{{ $q->judul }}</td>
                      <td>{{ $q->tanggal }}</td>
                      <td>{{ $q->harga }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

            </div>

          </div>

        </div>



        <!-- statics end -->



      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="">SiDANAR</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{ asset('template/js/jquery.js') }}"></script>
  <script src="{{ asset('template/js/jquery-ui-1.10.4.min.js') }}"></script>
  <script src="{{ asset('template/js/jquery-1.8.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('template/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('template/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('template/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('template/assets/jquery-knob/js/jquery.knob.js') }}"></script>
  <script src="{{ asset('template/js/jquery.sparkline.js') }}" type="text/javascript"></script>
  <script src="{{ asset('template/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
  <script src="{{ asset('template/js/owl.carousel.js') }}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{ asset('template/js/fullcalendar.min.js') }}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('template/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
    <!--script for this page only-->
    <script src="{{ asset('template/js/calendar-custom.js') }}"></script>
    <script src="{{ asset('template/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ asset('template/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('template/assets/chart-master/Chart.js') }}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('template/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('template/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('template/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('template/js/xcharts.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('template/js/gdp-data.js') }}"></script>
    <script src="{{ asset('template/js/morris.min.js') }}"></script>
    <script src="{{ asset('template/js/sparklines.js') }}"></script>
    <script src="{{ asset('template/js/charts.js') }}"></script>
    <script src="{{ asset('template/js/jquery.slimscroll.min.js') }}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
