@extends('layouts.main-layout')

@section('content')

    <main>

        <section class="container main">
            <div class="tit-home">
                <h1>
                    CURRENT SERIES
                </h1>
            </div>

            @foreach ($comics as $comic)

            <div class="card" style="background-image: url({{ $comic['thumb']}})">
                <h3>{{ $comic['title'] }}</h3>
            </div>
                
            @endforeach
        </section>

    </main>

@endsection

