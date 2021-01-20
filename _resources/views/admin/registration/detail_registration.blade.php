@include('admin/header')
@include('admin/nav')
@include('admin/sidebar')

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a></li>
              <li><i class="fa fa-table"></i><a href="{{ url('/listregistration') }}">Registrasi</a></li>
              <li><i class="fa fa-th-list"></i>Detail</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Detail Registrasi
              </header>
              
              <div class="col-lg-6">
                    @foreach( $data as $data ) 
                        
                    <h3>Nama:</h3>{{ $data->name }}<br>
                    <h4>Email:</h4>{{ $data->email }}<br>
                    <h4>Phone:</h4>{{ $data->mobile_number }}<br>
                    <h4>Alamat:</h4>{{ $data->alamat }}<br>
                    <h4>Status Pembayaran:</h4>{{ $data->status_pembayaran }}<br>
                    <h4>Seminar:</h4>{{ $data->judul }}<br>
                    <h4>Telephone:</h4>345 578 59 45 416</br>
                    <h4>Fax:</h4>123 456 789
                </div>             
                  
                  @endforeach
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
@include('admin/footer')
   