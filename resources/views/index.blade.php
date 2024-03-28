@extends('base')
@section('content')

    <div class="row">
        <div class="col-12">
            <button
                class="btn btn-lg btn-outline-success ms-4"
                data-bs-toggle="modal" data-bs-target="#createModal">
                create
            </button>
            @include('modal-create')
        </div>
    </div>

    {{-- TODO ->
        1 - Cierre y Apertura del modal
        2 - Limpiar los inputs cada vez que se cierra el modal
        3 - Logica de creacion (store)
        4 - Renderizado de tabla dinamico
    --}}

    <div class="row">
        <div class="col-12">
            <div class="d-flex align-content-center justify-content-center p-lg-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($todos as $todo)
                            <tr>
                                <td>{{$todo->id}}</td>
                                <td>{{$todo->title}}</td>
                                <td>{{$todo->description}}</td>
                                <td>{{$todo->date}}</td>
                                <td>{{$todo->type_id}}</td>
                                <td>{{$todo->status_id }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Not found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
