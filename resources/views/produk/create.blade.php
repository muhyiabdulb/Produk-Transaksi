@extends('layouts.master', ['title' => 'Tambah Data'])

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="text-center">Tambah Data</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="card-header-action">
                        <a href={{ route('produks.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i>
                            Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('produks.store') }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        @include('produk.form.form', ['submit' => 'Tambah'])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection