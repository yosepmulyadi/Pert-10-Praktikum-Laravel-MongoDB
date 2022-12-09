@extends('laptops.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 mt-3">
        <h2>Detail Laptop</h2>
        <a class="btn btn-success mt-3 mb-3" href="{{ route('laptop.index') }}">Kembali</a>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <strong>Merk:</strong>
            {{ $laptop->merk }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <strong>Prosesor:</strong>
            {{ $laptop->prosesor }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <strong>Penyimpanan:</strong>
            {{ $laptop->penyimpanan }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <strong>Ram:</strong>
            {{ $laptop->ram }}
        </div>
    </div>
</div>

@endsection