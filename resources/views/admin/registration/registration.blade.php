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
              <li><i class="fa fa-th-list"></i>Registrasi</li>
<!--               <li><i class="fa fa-table"></i><a href="{{ url('/listregistration') }}">Registrasi</a></li> -->
           </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Status Pembayaran
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i ></i> No</th>
                    <th><i class=""></i> Nama</th>
                    <th><i class=""></i> Email</th>
                    <th><i class=""></i> Phone</th> 
                    <th><i class=""></i> Seminar</th>
                    <th><i class=""></i> Tanggal</th>
                    <th><i class=""></i> Harga</th>
                    <th><i class=""></i> Alamat</th>
                    <th><i class=""></i> Status</th>

                  </tr>
                  <?php $no = 1; ?>
                  @foreach( $daftar as $data ) 
                  <tr>                    
                    <td><?php echo $no++;?></td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->mobile_number }}</td>  
                    <td>{{ $data->judul }}</td>  
                    <td>{{ $data->created_at }}</td>                   
                     <td>{{ $data->harga }}</td>                     
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->status_pembayaran }}</td>
 
                  </tr>
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
   