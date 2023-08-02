<div class="p2">
    <div class="form-group">
        <label for="id_jenis_obat">Nama Jenis Obat*</label>
        <select name="id_jenis_obat" id="id_jenis_obat" required class="form-control">
            <option value="" disabled selected style="text-align: center">-- Silahkan Pilih Jenis Obat --</option>
            @foreach ($jenis_obat as $jenis_obat_value)
            @if($data->id_jenis_obat == $jenis_obat_value->id)
            <option value=" {{ $jenis_obat_value->id }}" selected>{{ $jenis_obat_value->nama_jenis_obat }} </option>
            @else
            <option value=" {{ $jenis_obat_value->id }} ">{{$jenis_obat_value->nama_jenis_obat}} </option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nama_obat">Nama Obat*</label>
        <input type="text" name="nama_obat" id="nama_obat" value="{{$data->nama_obat}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="satuan">Satuan*</label>
        <input type="text" name="satuan" id="satuan" value="{{$data->satuan}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="harga">Harga*</label>
        <input type="number" name="harga" id="harga" value="{{$data->harga}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="stok">Stok*</label>
        <input type="number" name="stok" id="stok" value="{{$data->stok}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="tgl_exp">Tgl Exp*</label>
        <input type="date" name="tgl_exp" id="tgl_exp" value="{{$data->tgl_exp}}" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-success" onclick="update({{$data->id}})">Update</button>
    </div>
</div>