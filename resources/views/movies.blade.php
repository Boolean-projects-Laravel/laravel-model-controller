@extends('layouts.base')

@section('contents')
    <h2>Lista Movies</h2>

    <div class="row g-3 row-cols-3">
        @foreach ($arrMovies as $movie)
            <div class="col">
                <div class="card rounded-4 h-100">
                    {{-- <img src="{{ Vite::asset('resources/img/' . $movie->img) }}" class="card-img-top" alt="{{ $book->title }}"> --}}
                    <img src="{{ Vite::asset('resources/img/' . $movie->image) }}" class="h-100 image-fluid rounded-4" alt="">

                    <div class="information">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text"> <span style="font-weight: 700">Date: </span>{{ $movie->date }}</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                    
                </div>
                
            </div>
        @endforeach
    </div>

@endsection