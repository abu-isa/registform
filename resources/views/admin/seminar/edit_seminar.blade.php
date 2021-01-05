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
              <li><i class="fa fa-table"></i><a href="{{ url('/listseminar') }}">Seminar</a></li>
              <li><i class="fa fa-th-list"></i>Update Seminar</li>
            </ol>
          </div>
        </div>
         <!-- page start-->
		<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Update Data
              </header>
              <div class="panel-body">
              <form method="post" action="/update_seminar" enctype="multipart/form-data">
              {{ csrf_field() }}
              	 <input type ='hidden' name ='_method' value='PUT' >
              	 <input type ='hidden' name ='photo_lama' value='{{ $seminar->images }}'>
              	 <input type ='hidden' name ='id' value='{{ $seminar->id }}'>
                  <div class="form-group col-sm-6">
                    <label for="judul">Seminar</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $seminar->judul }}">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="tanggal">Date</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $seminar->tanggal }}">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="harga">Price</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $seminar->harga }}">
                  </div>
                  <div class="form-group  col-sm-6">
                    <label for="images">Foto Lama</label>
                    <img src="{{ asset('uploads/'. $seminar->images) }}" class="img-responsive" width="60px" height="60px"> 
                  </div>
                  <div class="form-group  col-sm-6">
                    <label for="images">Unggah Foto</label>
                    <input type="file" id="images" name="images">
                  </div>
                  <input type="hidden" name="status" value="1">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </section>
          </div>
        </div>
<!-- page end-->
       </section>
    </section>
@include('admin/footer')