@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Obat</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active"> Obat</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <div id="read"></div>

      
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div id="page" class="p-2"></div>
            
            </div>
            <div class="modal-footer">
            </div>
        </div>
        </div>
    </div>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script>
        $(document).ready(function(){
            read();
        })
        function read(){
            $.get("{{url('obat/read')}}",{}, function(data,status){
                $("#read").html(data);
            });

        }

        function create(){
            $.get("{{url('obat/create')}}",{}, function(data,status){
                $("#exampleModalLabel").html('Create Obat');
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }

        function store() {
            var id_jenis_obat = $("#id_jenis_obat").val();
            var nama_obat = $("#nama_obat").val();
            var satuan = $("#satuan").val();
            var harga = $("#harga").val();
            var stok = $("#stok").val();
            var tgl_exp = $("#tgl_exp").val();

            $.ajax({
                type: "get", 
                url: "{{ url('obat/store') }}",
                data: {
                    id_jenis_obat: id_jenis_obat,
                    nama_obat: nama_obat,
                    satuan: satuan,
                    harga: harga,
                    stok: stok,
                    tgl_exp: tgl_exp
                },
                success: function (data) {
                    $(".close").click();
                    read();
                }
            });
        }


        function edit(id){
            $.get("{{url('obat')}}/" + id,{}, function(data,status){
                $("#exampleModalLabel").html('Edit Obat');
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }

        function update(id) {
            var id_jenis_obat = $("#id_jenis_obat").val();
            var nama_obat = $("#nama_obat").val();
            var satuan = $("#satuan").val();
            var harga = $("#harga").val();
            var stok = $("#stok").val();
            var tgl_exp = $("#tgl_exp").val();

            $.ajax({
                type: "get", 
                url: "{{ url('obat/update') }}/" + id,
                data: {
                    id_jenis_obat: id_jenis_obat,
                    nama_obat: nama_obat,
                    satuan: satuan,
                    harga: harga,
                    stok: stok,
                    tgl_exp: tgl_exp
                },
                success: function (data) {
                    $(".close").click();
                    read();
                }
            });
        }     

        function destroy(id,id_jenis_obat,nama_obat,satuan,harga,stok,tgl_exp) {           
         if (confirm("Apakah Anda Yakin Mengghapus Data ini ?")) {
                $.ajax({
                    type: "get", 
                    url: "{{ url('obat/destroy') }}/" + id,
                    data: {
                        id_jenis_obat: id_jenis_obat,
                        nama_obat: nama_obat,
                        satuan: satuan,
                        harga: harga,
                        stok: stok,
                        tgl_exp: tgl_exp
                    },
                    success: function (data) {
                        $(".close").click();
                        read();
                    }
                });
            }
        }


  </script>
        
@endsection