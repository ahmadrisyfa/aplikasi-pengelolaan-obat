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
                        <th>Nama Jenis Obat</th>                           
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $value)                                
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$value->nama_jenis_obat}}</td>                           
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