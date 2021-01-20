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
              <li><i class="fa fa-th-list"></i>Search</li>
            </ol>
          </div>
        </div>
         <!-- page start-->
		<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Search Data
              </header>
              <div class="panel-body">
              <form method="post" action="/search_report" enctype="multipart/form-data">
              {{ csrf_field() }}
              	  <div class="form-group col-sm-6">
                    <label for="seminar">Status Pembayaran</label>
                    <select class="form-control m-bot15" name="status_pembayaran">
                      <option value=""> - All -</option>
                      <option value="success"> Success</option>
                      <option value="pending"> Pending</option>
                    </select>
                  </div>
              	  <!-- <div class="form-group col-sm-12">
                    <label for="seminar">Seminar</label>
                    <select class="form-control m-bot15" name="judul">
                      <option value="success"> Success</option>
                      <option value="pending"> Pending</option>
                    </select>
                  </div> -->
                  <div class="form-group col-sm-6">
                    <label for="tanggal_awal">Tanggal event</label>
                    <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal">
                  </div>
                  <!-- <div class="form-group col-sm-6">
                    <label for="tanggal_akhir">End Date</label>
                    <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir">
                  </div> -->
                  <div class="form-group col-sm-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                </form>
                </div>
                
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th>*</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Seminar</th>
                      <th>Tanggal</th>
                      <th>Status Pembayaran</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>                  
                  <?php $no = 1; ?>
                  @foreach( $data as $q ) 
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td>{{ $q->name }}</td>
                      <td>{{ $q->email }}</td>
                      <td>{{ $q->mobile_number }}</td>
                      <td>{{ $q->judul }}</td>
                      <td>{{ $q->tanggal }}</td>
                      <td>{{ $q->status_pembayaran }}</td>
                      <td>{{ $q->harga }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>                
              </div>
            </section>
          </div>
        </div>
<!-- page end-->
       </section>
    </section>
@include('admin/footer')