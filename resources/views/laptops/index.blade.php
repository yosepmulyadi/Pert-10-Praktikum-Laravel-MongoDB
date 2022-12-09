@extends('laptops.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-3">
            <h2>Data Laptop</h2>
            <a class="btn btn-success mt-3 mb-3" href="{{ route('laptop.create') }}">Buat Data Laptop</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Merk</th>
            <th>Prosesor</th>
            <th>Penyimpanan</th>
            <th>Ram</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($laptops as $laptop)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $laptop->merk }}</td>
            <td>{{ $laptop->prosesor }}</td>
            <td>{{ $laptop->penyimpanan }}</td>
            <td>{{ $laptop->ram }}</td>
            <td>
                <form action="{{ route('laptop.destroy',$laptop->id) }}" method="POST">
                @csrf
                    <a class="btn btn-info" href="{{ route('laptop.show',$laptop->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('laptop.edit',$laptop->id) }}">Edit</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection