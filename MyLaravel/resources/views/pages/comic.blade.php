@extends('layouts.main-layout')

@section('content')

    <main>

        <section class="container main elem">
            <div class="tit-home">
                <div class="card" style="background-image: url({{ $elem['thumb']}})">
                </div>
            </div>

            <div class="row description">
                <div class="row">
                    <h1>{{ $elem['title'] }}</h1>

                    <div>
                        {{-- da sistemare con il prezzo e la formattazione --}}
                    </div>

                    <p>{{ $elem['description'] }}</p>
                </div>
            </div>

    </main>

@endsection
