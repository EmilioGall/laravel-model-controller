@extends('layouts.app')

@section('content')
   <main class="container-fluid my-3">

      <h1 class="fs-1 fw-bold text-center mb-3"> Movies List </h1>

      <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-lg-5">

         @foreach ($moviesArray as $movie)
            <div class="col d-flex align-items-stretch">

               <div class="card">

                  <img src="{{ $movie['image'] }}" class="card-img-top" alt="Poster of {{ $movie['title'] }}">

                  <div class="card-body">

                     <h3 class="card-title m-0">{{ $movie['title'] }}</h3>

                     <h5 class="card-subtitle mb-2"><em>{{ $movie['original_title'] }}</em></h5>

                     <p class="card-text m-0">{{ $movie['date'] }}</p>

                     <p class="card-text m-0">Nationality: {{ $movie['nationality'] }}.</p>

                     <p class="card-text m-0">{{ $movie['vote'] }} /10</p>
                  </div>

               </div>

            </div>
         @endforeach

      </div>

   </main>
@endsection
