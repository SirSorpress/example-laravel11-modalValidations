@extends('base')
@section('content')

    <div class="row">
        <div class="col-12">
            <button
                class="btn btn-lg btn-outline-success ms-4"
                onclick="openModalCreate()">
                create
            </button>
            @include('modal-create')
        </div>
    </div>

    {{-- TODO ->
        1 - Limpiar los inputs cada vez que se cierra el modal
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
                    <tbody id="todoTable">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
