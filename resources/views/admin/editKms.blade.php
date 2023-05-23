@extends('layout.mainadmin')
@section('title', 'BACARAB | Admin - Dictionary')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="{{ route('admin.updateKamus', $kamus->id) }}" method="POST" class="shadow p-3 mb-5 bg-white">
                    @method('PATCH')
                    @csrf
                    <h3 style="margin-bottom: 20px;"><b> Edit {{ $kamus->indonesia }} </b></h3>
                    <hr>
                    <div class="form-group">
                        {{-- gambar --}}
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            @if ($kamus->gambar)
                                <br>
                                <img src="{{ asset('assets/img/kamus/' . $kamus->gambar) }}" alt="{{ $kamus->indonesia }}"
                                    style="max-width: 200px;">
                                <br><br>
                                <div class="custom-file">
                                    <input type="file" name="gambar" id="gambar"
                                        class="custom-file-input @error('gambar') is-invalid @enderror">
                                    <label class="custom-file-label" for="gambar">{{ $kamus->gambar }}</label>
                                </div>
                            @else
                                <input type="file" name="gambar" id="gambar"
                                    class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            @endif

                        </div>
                        {{-- indonesia --}}
                        <div class="form-group mt-3">
                            <label for="indonesia">Kata Dalam Bahasa Indonesia</label>
                            <input type="text" class="form-control @error('indonesia') is-invalid @enderror"
                                id="indonesia" name="indonesia" value="{{ old('indonesia') ?? $kamus->indonesia }}">
                            @error('indonesia')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- arab --}}
                        <div class="form-group mt-3">
                            <label for="arab">Kata Dalam Bahasa Arab</label>
                            <input type="text" class="form-control @error('arab') is-invalid @enderror" id="arab"
                                name="arab" value="{{ old('arab') ?? $kamus->arab }}">
                            @error('arab')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-1 mt-3">
                            <label>Kelompok</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="angka"
                                        value="angka"
                                        {{ (old('kelompok') ?? $kamus->kelompok) == 'angka' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="angka"> Angka </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="huruf"
                                        value="huruf"
                                        {{ (old('kelompok') ?? $kamus->kelompok) == 'huruf' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="huruf"> Huruf </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="kata"
                                        value="kata"
                                        {{ (old('kelompok') ?? $kamus->kelompok) == 'kata' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kata"> Kata </label>
                                </div>
                            </div>
                            @error('kelompok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- pelafalan --}}
                        <div class="form-group mt-3">
                            <label for="alamat">Pelafalan</label>
                            <input type="text" class="form-control @error('pelafalan') is-invalid @enderror"
                                id="pelafalan" name="pelafalan" value="{{ old('pelafalan') ?? $kamus->pelafalan }}">
                        </div>
                        {{-- button --}}
                        <button type="submit" class="btn btn-primary mt-2" name="submit">Update</button>
                    </div>
                </form>
                {{-- end form --}}

            </div>
        </div>
    </div>
@endsection
