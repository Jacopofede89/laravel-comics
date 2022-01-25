
<header>
    <div id="bord"></div>
    <div class="container">
        <div id="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" alt="">
        </div>
        <nav>
            <ul>
                
                @foreach ($menu as $item)
                <li>
                    <a href="#">{{$item}}</a> 
                </li>
                @endforeach
                {{-- <a href="#">Characters</a> --}}
                
                {{-- <li>
                    <a href="#">Comics</a>
                </li>
                <li>
                    <a href="#">Movies</a>
                </li>
                <li>
                    <a href="#">tv</a>
                </li>
                <li>
                    <a href="#">games</a>
                </li>
                <li>
                    <a href="#">collectibles</a>
                </li>
                <li>
                    <a href="#">videos</a>
                </li>
                <li>
                    <a href="#">fans</a>
                </li>
                <li>
                    <a href="#">news</a>
                </li>
                <li>
                    <a href="#">shop</a>
                </li> --}}
            </ul>
        </nav>
    </div>
</header>
<div id="jumbo">
    <img src="https://leganerd.com/wp-content/uploads/2019/01/wolverine-768x461.jpg" alt="">
</div>