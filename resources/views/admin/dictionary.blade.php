@extends('layout.mainadmin')
@section('title', 'BACARAB | Admin - Dictionary')

@section('content')

    <!-- Contextual Classes -->

    <div class="card mt-5 mx-4">
        <div class="row">
            <div class="col col-10">
                <h5 class="card-header" id="dictionary">Dictionary</h5>
            </div>
            <div class="col col-2">
                {{-- ADD --}}
                <a href="{{ route('admin.createKms') }}" class="btn btn-info btn-sm mt-4">Tambah Kamus</a>

            </div>
            @if (session()->has('pesan'))
                <div class="alert alert-success mx-3 col col-11">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <div class="table-responsive text-nowrap mt-3">
                <table class="table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Gambar</th>
                            <th>Kata B.Arab</th>
                            <th>Kata B.Indonesia</th>
                            <th>Pengucapan</th>
                            <th>Kelompok</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($kamus->sortByDesc('created_at') as $kamus)
                            <tr class="table-info">
                                <td>
                                    @if ($kamus->gambar)
                                        <img src="{{ asset('assets/img/kamus/' . $kamus->gambar) }}"
                                            alt="{{ $kamus->indonesia }}" class="img-fluid" style="width: 60px;">
                                    @else
                                        <img src="{{ asset('assets/img/kamus/default.jpg') }}" alt="gambar-default"
                                            class="img-fluid" style="width: 100px;">
                                    @endif
                                </td>
                                <td>{{ $kamus->arab }}</td>
                                <td>{{ $kamus->indonesia }}</td>
                                <td>{{ $kamus->pelafalan }}</td>
                                <td><span class="badge bg-label-info me-1">{{ $kamus->kelompok }}</span></td>
                                <td>
                                    <div class="button-row"
                                        style="
                                        display: flex;
                                        flex-wrap: nowrap;
                                        justify-content: flex-start;
                                        align-items: center;
                                        gap: 10px;">
                                        <a href="{{ route('admin.editKms', ['kamus' => $kamus->id]) }}"
                                            class="btn btn-info btn-sm mt-1" style="padding: 3px 20px;">Edit</a>
                                        <form action="{{ route('admin.destroyKamus', ['kamus' => $kamus->id]) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-info btn-sm mt-1"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus kamus ini?')" style="padding:
                                                3px 12px;">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            @empty
                        @endforelse

            </div>
        </div>
        </td>
        </tr>
        </tbody>
        </table>
    </div>

    <!--/ Contextual Classes -->


@endsection
