@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
          <div class="container">
            <button type="button" class="btn btn-success w-100">
              Selamat Datang <span class="font-weight-bold text-capitalize">{{auth()->user()->fullname}}</span>
            </button>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$JumlahJenisObat}}</h3>

                <p>Jumlah Jenis Obat</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$JumlahObat}}</h3>

                <p>Jumlah Total Obat</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$JumlahObatSudahExpired}}</h3>

                <p>Jumlah Obat Sudah Expired</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$JumlahObatBelumExpired}}</h3>

                <p>Jumlah Obat Belum Expired</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$JumlahUser}}</h3>

                <p>Jumlah Total User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$JumlahUserActive}}</h3>

                <p>Jumlah Total User Sudah Aktif</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$JumlahUserBelumActive}}</h3>

                <p>Jumlah Total User Belum Aktif</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
     
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
              <h4>Daftar Jenis Obat</h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Obat</th>
                          <th>Jenis Obat</th>
                          <th>Satuan</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Jumlah Harga</th>
                          <th>Tanggal Expired</th>                       
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($DataObat as $value)                                
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$value->nama_obat}}</td>
                          <td>{{$value->jenisObat->nama_jenis_obat}}</td>
                          <td>{{$value->satuan}}</td>
                          <td>@currency($value->harga)</td>
                          <td>{{$value->stok}}</td>
                          <td>@currency($value->harga * $value->stok)</td>
                          <td>
                              @if($value->tgl_exp <= now())
                              <span class="text-danger">{{$value->tgl_exp}}</span>
                              @else                            
                              {{$value->tgl_exp}}
                              @endif
                          </td>
                      </tr> 
                      @endforeach
                  
                      </tbody>
                  </table>
              </div>           
          <!-- /.card -->
          </div>
          </div>
      </div>
      </div>
  </div>
@endsection