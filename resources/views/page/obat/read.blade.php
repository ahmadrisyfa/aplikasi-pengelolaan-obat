<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <button class="btn btn-success btn-sm" onclick="create()">Tambah Jenis Obat</button>
        </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Nama Jenis Obat</th>
                        <th>Satuan</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Total Harga Stok</th>
                        <th>Tanggal expired</th>                       
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $value)                                
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
                        <td><button class="btn btn-info btn-sm" onclick="edit({{$value->id}})">Edit</button></td>
                        <td><button class="btn btn-danger btn-sm" onclick="destroy({{$value->id}})">Hapus</button></td>                
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
</section>