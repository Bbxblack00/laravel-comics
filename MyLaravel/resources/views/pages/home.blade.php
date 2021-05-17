@extends('layouts.main-layout')

@section('content')

    <div class="container">

        <img src="{{ asset ('/storage/assets/jumbotron.jpg/') }}">

     <div class="row current">

        <div class="lt-title">

            @foreach ($collection as $item)
                
            @endforeach

        </div>

     </div>
    </div>

@endsection

