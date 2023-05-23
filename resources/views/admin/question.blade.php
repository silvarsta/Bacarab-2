@extends('layout.mainadmin')
@section('title', 'BACARAB | Admin - question')

@section('content')

    <!-- Contextual Classes -->

    <div class="card mt-5 mx-4">
        <div class="row">
            <div class="col col-10">
                <h5 class="card-header" id="question">User Question</h5>
            </div>

            @if (session()->has('pesan'))
                <div class="alert alert-success mx-3 col col-11">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <div class="table-responsive text-nowrap mt-3">
                <table class="table text-center" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th  style="width: 40%;">Massage</th>
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($question as $question)
                            <tr class="table-info">
                                <td style="text-align: left; ">{{ $question->name}}</td>
                                <td style="text-align: left; ">{{ $question->email}}</td>
                                <td style="text-align: left; ">{{ $question->subject}}</td>
                                <td style="text-align: left; ">{{ $question->message}}</td>
                                {{-- <td>
                                    <div class="button-row"
                                        style="
                                        display: flex;
                                        flex-wrap: nowrap;
                                        justify-content: center;
                                        align-items: center;
                                        gap: 10px;">
                                        <a href="" class="btn btn-info btn-sm mt-1" style="padding: 3px 20px;">Balas</a>
                                        {{ route('admin.edit', ['question' => $question->id]) }}
                                    </div>
                                </td> --}}
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
