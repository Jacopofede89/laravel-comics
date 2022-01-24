@extends('layouts.main-layout')
@section('content')
<section id="cards">
    <div class="btn series">current series</div>
    <div class="container">
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://upload.wikimedia.org/wikipedia/it/d/da/Wolverine_%28Jim_Lee%29.jpg" alt=""></a>
            </div>
            <h4>Wolverine Vol:#2</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0aThA1iQ8m6kx_P_188LhdnZpjE6eeQlGsfcXTOn27YguttdynigmhzwYgtDioF1mYxo&usqp=CAU" alt=""></a>
            </div>
            <h4>Wolverine Vol:#28</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://images-na.ssl-images-amazon.com/images/I/71Q6TW1rk6L.jpg" alt=""></a>
            </div>
            <h4>Wolverine Vol:#132</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://www.fumettologica.it/wp-content/uploads/2019/03/panini-ritorno-wolverine-marvel.jpg" alt=""></a>
            </div>
            <h4>Wolverine Vol:#290</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJCEXemumrujMX_QJ9qHx1ODmdOrU185gYWCg0EWqbsLKJyNTfVtp7sL3ooZQEIGzLoyI&usqp=CAU" alt=""></a>
            </div>
            <h4>Wolverine Vol:#20</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIG96WdRnB3iCykMUW88rBKNOGPOU708kxAU8himQ5l_4GWZi33CBjLFgZXYOVqWFZSjQ&usqp=CAU" alt=""></a>
            </div>
            <h4>Wolverine Vol:#340</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://m.media-amazon.com/images/I/71ADDKxvigL._AC_SY550_.jpg" alt=""></a>
            </div>
            <h4>Wolverine Vol:#169</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ6U2kiaATXZXruTEKwnj4jyKumLHjqCQ0Oh9nZHt91z7EA9w-Y5BKO9KXmattOkg_9dk&usqp=CAU" alt=""></a>
            </div>
            <h4>Wolverine Vol:#10</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRqJXdvciMiLsVhRUPhtVLgGp5oBK6jGzww38-JclRvjySGkagShiMiLNztMtPgJTtmsg&usqp=CAU" alt=""></a>
            </div>
            <h4>Wolverine Vol:#17</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz5nl1WB5YPlfp0KYqIrImzMBF0tmWvRCDk7VV5qMBtC7CUb7m3aZjzJa2Wew7zsED5Ak&usqp=CAU" alt=""></a>
            </div>
            <h4>Wolverine Vol:#501</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQj5XEuhcM1cJfC80XbDgKmLAzLl7yI8PuJr7OBt9juO4FsXvMhEA7z80S7SMPOwQMOCpQ&usqp=CAU" alt=""></a>
            </div>
            <h4>Wolverine Vol:#287</h4>
        </div>
        <div class="card">
            <div class="img-container">
                <a href="{{route('dettaglio')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTe7HY7XEedFLDi-ME3mNSxci3EN1L4_oN2si2ruOA8fxlTi5EF8BU2dSHrHv2GqcFHBZA&usqp=CAU" alt=""></a>
            </div>
            <h4>Wolverine Vol:#312</h4>
        </div>
    </div>
    <div class="btn more">load more</div>
</section>

<section id="banner">
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
</section>
@endsection
