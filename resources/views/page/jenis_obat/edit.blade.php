<div class="p2">
    <div class="form-group">
        <label for="nama_jenis_obat">Nama Jenis Obat*</label>
        <input type="text" name="nama_jenis_obat" id="nama_jenis_obat" value="{{$data->nama_jenis_obat}}" class="form-control" placeholder="Nama Jenis Obat" required>
    </div>
    <div class="form-group">
        <button class="btn btn-success" onclick="update({{$data->id}})">Update</button>
    </div>
</div>