@extends('layout.mainadmin')
@section('title', 'BACARAB | Admin - Dictionary')

@section('content')

    <div class="container pt-5" style="margin-bottom: 110px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                {{-- form --}}
                <form action="{{ route('admin.storePrint') }}" method="POST" class="shadow p-3 mb-5 bg-white"
                    enctype="multipart/form-data">
                    @csrf
                    <h3 style="margin-bottom: 20px;"><b> Form Printable </b></h3>
                    <hr>
                    <div class="form-group">
                        {{-- gambar --}}
                        <div class="form-group">
                            <label for="gambar" class="mb-2"><strong>Gambar</strong> </label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
                                name="gambar" value="{{ old('gambar') }}">
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Src Gambar --}}
                        <div class="form-group mt-3">
                            <label for="src_gambar" class="mb-2"><strong> Keterangan Gambar</strong></label>
                            <input type="text" class="form-control @error('src_gambar') is-invalid @enderror"id="src_gambar" name="src_gambar" value="{{ old('src_gambar') }}">
                            @error('src_gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Kelompok --}}
                        <div class="form-group mb-1 mt-3">
                            <label class="mb-2"><strong>Kelompok</strong> </label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="angka"
                                        value="angka" {{ old('kelompok') == 'angka' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="angka"> Angka </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="huruf"
                                        value="huruf" {{ old('kelompok') == 'huruf' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="huruf"> Huruf </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="kata"
                                        value="kata" {{ old('kelompok') == 'kata' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kata"> Kata </label>
                                </div>
                            </div>
                            @error('kelompok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Button --}}
                        <center><button type="submit" class="btn btn-primary mt-4" style="padding: 5px 40px;">Send</button></center>
                    </div>
                </form>
                {{-- end form --}}

            </div>
        </div>
    </div>

@endsection
