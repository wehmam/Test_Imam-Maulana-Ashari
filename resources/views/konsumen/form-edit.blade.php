@extends('layouts.master')
@section('title','Edit Konsumen')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-3 mb-3 text-center">Edit Data Konsumen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('konsumen.update',$konsumen->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $konsumen->id }}">
                    <div class="form-group">
                        <label for="konsumen">Nama</label>
                        <input type="text" name="konsumen" id="konsumen" class="form-control @error('konsumen') is-invalid @enderror" value="{{ old('konsumen') ?? $konsumen->konsumen }}">
                        @error('konsumen')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                        <select name="jenis_kendaraan" id="jenis_kendaraan" class="form-control @error('jenis_kendaraan') is-invalid @enderror">
                            @foreach($jenis_kendaraan as $jenis)
                                <option value="{{ $jenis }}" {{ $jenis === $konsumen->jenis_kendaraan ? 'selected' : '' }}>{{ $jenis }}</option>
                            @endforeach
                        </select>
                        @error('jenis_kendaraan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_polisi">No Polisi</label>
                        <input type="text" name="no_polisi" id="no_polisi" class="form-control @error('no_polisi') is-invalid @enderror" value="{{ old('no_polisi') ?? $konsumen->no_polisi }}">
                        @error('no_polisi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') ?? $konsumen->tanggal_lahir }}">
                        @error('tanggal_lahir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin')is-invalid @enderror">
                            <option value="L" {{ $konsumen->jenis_kelamin === 'L' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="P" {{ $konsumen->jenis_kelamin === 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomer Handphone</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') ?? $konsumen->no_hp }}">
                        @error('no_hp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection