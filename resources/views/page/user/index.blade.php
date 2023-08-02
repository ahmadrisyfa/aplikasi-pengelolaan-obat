@extends('layout.main')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active">User</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
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
            $.get("{{url('user/read')}}",{}, function(data,status){
                $("#read").html(data);
            });
        }    

         function edit(id){
            $.get("{{url('user')}}/" + id,{}, function(data,status){
                $("#exampleModalLabel").html('Edit Status Active User');
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }

        function update(id){
            var is_active = $("#is_active").val();
            $.ajax({
                type:"get",
                url: "{{url('user/update')}}/" + id,
                data: "is_active=" + is_active,
                success:function(data){
                    $(".close").click();
                    read();
                }
            })
        }
      


  </script>

@endsection