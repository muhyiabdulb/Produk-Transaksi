<div class="form-row">
    <div class="form-group col-md-12">
        <label for="nama_produk">Nama</label>
        <input type="text" name="nama_produk" value="{{ old('nama_produk') ?? $produk->nama_produk }}" class="form-control"
            placeholder="Nama">
        @error('nama_produk')
            <div class="invalid text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="harga">Harga</label>
        <input type="number" name="harga" value="{{ old('harga') ?? $produk->harga }}" class="form-control"
            placeholder="Harga">
        @error('harga')
            <div class="invalid text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6" style="padding-top: 29px;">
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> {{ $submit ?? 'Ubah' }}</button>
    </div>
</div>