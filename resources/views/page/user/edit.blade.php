<div class="p2">
    <div class="form-group">
        <label for="is_active">Status Active*</label>
        <select name="is_active" id="is_active" required class="form-control">
            <option value="" selected disabled style="text-align: center">-- Silahkan Pilih Status Active</option>
            <option value="0" {{ $data->is_active == 0 ? 'selected' : '' }}>Not Active</option>
            <option value="1" {{ $data->is_active == 1 ? 'selected' : '' }}>Active</option>            
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-success" onclick="update({{$data->id}})">Update</button>
    </div>
</div>