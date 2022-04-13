@extends('rifqi_01.layout')

@section('title', 'Edit Tas')

@section('content')
<div class="container-fluid">
    <h3 class="text-center">Tas Create</h3>
    <div class="container mt-5">
        <a href="{{ route('tas.index') }}" class="btn btn-secondary">Back</a><br><br>
        <form action="{{ route('tas.update', [$ta->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Tas :</label>
                <input type="text" id="nama" name="nama" placeholder="Input Nama Tas..." class="form-control @error('nama') is-invalid @enderror" value="{{ $ta->nama }}">

                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Tas :</label>
                <input type="text" id="jenis" name="jenis" placeholder="Input Jenis Tas..." class="form-control @error('jenis') is-invalid @enderror" value="{{ $ta->jenis }}">

                @error('jenis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga Tas :</label>
                <input type="number" id="harga" name="harga" placeholder="Input Harga Tas..." class="form-control @error('harga') is-invalid @enderror" value="{{ $ta->harga }}">

                @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection