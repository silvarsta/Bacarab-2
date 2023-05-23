@extends('layout.mainadmin')
@section('title', 'BACARAB | Admin - Dictionary')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="{{ route('admin.updatePrint', $printable->id) }}" method="POST" class="shadow p-3 mb-5 bg-white">
                    @method('PATCH')
                    @csrf
                    <h3 style="margin-bottom: 20px;"><b> Edit {{ $printable->src_gambar }} </b></h3>
                    <hr>
                    <div class="form-group">
                        {{-- gambar --}}
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            @if ($printable->gambar)
                                <br>
                                <img src="{{ asset('assets/img/printable/' . $printable->gambar) }}" alt="{{ $printable->src_gambar }}"
                                    style="max-width: 200px;">
                                <br><br>
                                <div class="custom-file">
                                    <input type="file" name="gambar" id="gambar"
                                        class="custom-file-input @error('gambar') is-invalid @enderror">
                                    <label class="custom-file-label" for="gambar">{{ $printable->gambar }}</label>
                                </div>
                            @else
                                <input type="file" name="gambar" id="gambar"
                                    class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            @endif

                        </div>
                        {{-- Keterangan Gambar --}}
                        <div class="form-group mt-3">
                            <label for="src_gambar">Keterangan Gambar</label>
                            <input type="text" class="form-control @error('src_gambar') is-invalid @enderror"
                                id="src_gambar" name="src_gambar" value="{{ old('src_gambar') ?? $printable->src_gambar }}">
                            @error('src_gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Kelompok --}}
                        <div class="form-group mb-1 mt-3">
                            <label>Kelompok</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="angka"
                                        value="angka"
                                        {{ (old('kelompok') ?? $printable->kelompok) == 'angka' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="angka"> Angka </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="huruf"
                                        value="huruf"
                                        {{ (old('kelompok') ?? $printable->kelompok) == 'huruf' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="huruf"> Huruf </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="kata"
                                        value="kata"
                                        {{ (old('kelompok') ?? $printable->kelompok) == 'kata' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kata"> Kata </label>
                                </div>
                            </div>
                            @error('kelompok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
