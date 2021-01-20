@include('admin/header')
@include('admin/nav')
@include('admin/sidebar')

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ url('/admin/home') }}">Home</a></li>
              <li><i class="fa fa-table"></i><a href="{{ url('/listregistration') }}">Registrasi</a></li>
              <li><i class="fa fa-th-list"></i>Create Data</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Registrasi
              </header>
              
              <div class="col-lg-6">
                    @foreach( $data as $q ) 
                        
                    <div class="recent">
                    <h3>Get in touch with us</h3>
                    </div>
                    <div class="">
                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>

                    <h4>Address:</h4>Little Lonsdale St, New York<br>
                    <h4>Telephone:</h4>345 578 59 45 416</br>
                    <h4>Fax:</h4>123 456 789
                    </div>
                </div>             
                  
                  @endforeach
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
@include('admin/footer')
   