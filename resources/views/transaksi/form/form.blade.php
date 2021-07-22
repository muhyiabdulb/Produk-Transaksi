<div class="form-row">
    <div class="form-group col-md-12">
        <label for="kode_transaksi">Kode Transaksi</label>
        <input type="text" name="kode_transaksi" value="{{ old('kode_transaksi') ?? $transaksi->kode_transaksi }}" class="form-control">
        @error('kode_transaksi')
            <div class="invalid text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="kode_produk">Kode Produk</label>
        <input type="text" name="kode_produk" value="{{ old('kode_produk') ?? $transaksi->kode_produk }}" class="form-control">
        @error('kode_produk')
            <div class="invalid text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" value="{{ old('quantity') ?? $transaksi->quantity }}" class="form-control">
        @error('quantity')
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