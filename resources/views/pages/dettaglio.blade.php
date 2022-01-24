@extends('layouts.main-layout')
{{-- @section('title', 'Pagina Test') --}}
@section('content')
<section>
    <div class="bord_blue"></div>
    <div id="card_dettaglio">
        <p>ACTION COMICS #100: THE DELUXE EDITION</p>
        <div class="container_bord">
            <div class="bord_green">
                <span>U.S. Price:<span class="color">$19.90</span></span>
                <span>AVAILABLE</span>
            </div>
            <div class="bord_">
                <span>Check Availablility</span>
            </div>
        </div>
        <div class="text">
            <span>“The Warworld Saga, Part III.” Everything has changed. After the heart-stopping events of Action Comics #1037, Superman and the surviving members of the Authority see a side of Warworld they never knew existed. In the lower catacombs, Superman finds another survivor of the lost Phaelosian race of Krypton, a scientist turned enslaved gladiator with much to teach Superman of his new home, including how to survive…and maybe, in time, how to escape. Meanwhile, Superman’s quest to turn the hordes of Warworld against their masters begins.</span>
        </div>
        <div class="container">
            <div class="card">
                <div class="img-container">
                    <a href="{{route('index')}}"><img src="https://upload.wikimedia.org/wikipedia/it/d/da/Wolverine_%28Jim_Lee%29.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div id="banner_dettaglio">
        <div class="container">
            <div>
                <img src="/storage/assets/img/buy-comics-digital-comics.png" alt="">
                <span>digital comics</span>
            </div>
            <div>
                <img src="/storage/assets/img/buy-comics-merchandise.png" alt="">
                <span>dc merchandise</span>
            </div>
            <div>
                <img src="/storage/assets/img/buy-comics-subscriptions.png" alt="">
                <span>subscription</span>
            </div>
            <div>
                <img src="/storage/assets/img/buy-comics-shop-locator.png" alt="">
                <span>comic shop locator</span>
            </div>
            <div>
                <img class="smaller" src="/storage/assets/img/buy-dc-power-visa.svg" alt="">
                <span>dc power visa</span>
            </div>
        </div>
    </div>
</section>
    
@endsection