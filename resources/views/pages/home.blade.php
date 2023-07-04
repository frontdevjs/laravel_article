@extends('layouts.app')

@section('title')Home @endsection

@section('content')
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
            @foreach($data as $el)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="../storage/{{ $el->image }}" alt="{{ $el->name }}">
                        <div class="card-body">
                            <p class="card-text text-truncate">{{ $el->name }}</p>
                            <p class="card-text">Автор: {{ $el->author->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

    @endforeach
@endsection
