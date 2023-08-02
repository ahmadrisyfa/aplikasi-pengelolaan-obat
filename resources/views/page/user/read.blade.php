<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Data User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Username</th>
                    <th>FullName</th>
                    <th>Status Active</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $value)                                
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->fullname}}</td>
                    @if ($value->is_active == 1)
                        <td><span class="btn btn-success btn-sm">Active</span></td>
                    @else
                    <td><span class="btn btn-danger btn-sm">Not Active</span></td>
                    @endif
                    <td><button class="btn btn-info btn-sm" onclick="edit({{$value->id}})">Edit</button></td>
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