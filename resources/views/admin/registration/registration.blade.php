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

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i ></i> No</th>
                    <th><i class="icon_profile"></i> Nama</th>
                    <th><i class="icon_calendar"></i> Email</th>
                    <th><i class="icon_mail_alt"></i> HP</th>
                    <th><i class="icon_pin_alt"></i> Alamat</th>
                    <th><i class="icon_pin_alt"></i> Status</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <?php $no = 1; ?>
                  @foreach( $daftar as $data ) 
                  <tr>                    
                    <td><?php echo $no++;?></td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->mobile_number }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->status_pembayaran }}</td>
                    <td width="150px">
                      <div class="btn-group" style="float: left;">
                        <a class="btn btn-success" href="/detail_registration/{{ $data->id }}" title="Detail"><i class="icon_plus_alt2"></i></a>
                      </div>
                    </td>
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
   