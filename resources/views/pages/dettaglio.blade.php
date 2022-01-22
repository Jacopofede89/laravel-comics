@extends('layouts.main-layout')
{{-- @section('title', 'Pagina Test') --}}
@section('content')
<section>
    <div id="cards">
        <div class="container">
            <div class="card">
                <div class="img-container">
                    <img src="https://upload.wikimedia.org/wikipedia/it/d/da/Wolverine_%28Jim_Lee%29.jpg" alt="">
                </div>
                <h4>Wolverine</h4>
            </div>
        </div>
        <a href="{{route('index')}}">Home</a>
    </div>
</section>
    
@endsection