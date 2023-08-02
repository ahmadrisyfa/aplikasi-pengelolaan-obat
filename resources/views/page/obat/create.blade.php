<div class="p2">
    <div class="form-group">
        <label for="id_jenis_obat">Nama Jenis Obat*</label>
        <select name="id_jenis_obat" id="id_jenis_obat" required class="form-control">
            <option value="" disabled selected style="text-align: center">-- Silahkan Pilih Jenis Obat --</option>
            @foreach ($jenis_obat as $value)
                <option value="{{$value->id}}">{{$value->nama_jenis_obat}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nama_obat">Nama Obat*</label>
        <input type="text" name="nama_obat" id="nama_obat" class="form-control">
    </div>
    <div class="form-group">
        <label for="satuan">Satuan*</label>
        <input type="text" name="satuan" id="satuan" class="form-control">
    </div>
    <div class="form-group">
        <label for="harga">Harga*</label>
        <input type="number" name="harga" id="harga" class="form-control">
    </div>
    <div class="form-group">
        <label for="stok">Stok*</label>
        <input type="number" name="stok" id="stok" class="form-control">
    </div>
    <div class="form-group">
        <label for="tgl_exp">Tgl Exp*</label>
        <input type="date" name="tgl_exp" id="tgl_exp" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-success" onclick="store()">Create</button>
    </div>
</div>