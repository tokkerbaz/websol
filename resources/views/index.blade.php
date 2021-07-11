<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>

<header>
    <a href="#" class="logo"><img src="/img/logo.png" alt="Company Logo"></a>
    <div class="h_btns">
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Software</a></li>
            <li><a href="#">Pricing</a></li>
        </ul>
        <a href="#" class="btn-orange">Get started</a>
    </div>
</header>

<main>
    <div class="action-block">
        <picture>
            <img src="/img/hero.jpg" alt="Call To Action">
        </picture>
        <div class="action-block_content container">
            <h1>What is Lorem Ipsum?</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="#" class="btn-orange">Button</a>
        </div>
    </div>
    <div class="privileges">
        <div class="container">
            <div class="privileges-item">
                <img src="/img/check-icon.png" alt="CheckIcon">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text</p>
            </div>
            <div class="privileges-item">
                <img src="/img/check-icon.png" alt="CheckIcon">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="privileges-item">
                <img src="/img/check-icon.png" alt="CheckIcon">
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
            </div>
        </div>
    </div>
    <div class="questions">
        <div class="container">
            <h2>Where does it come from?</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            <p>&nbsp;</p>
            <h2>Where can I get some?</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                in the middle of text. </p>
        </div>
    </div>
    <div class="discounts">
        <div class="container">
            <h2>Discounts</h2>
            <div class="list">
                @foreach($discounts as $discount)
                    <div class="item"
                         @if(array_key_exists('banner',$discount)) data-flash="{{$discount['banner']}}" @endif>
                        <div class="info">
                            <div class="heading">
                                <h3 class="title">{{$discount['title']}}</h3>
                                <hr>
                                <p class="excerpt">{{$discount['excerpt']}}</p>
                            </div>
                            <div class="options">
                                @foreach($discount['options'] as $key=>$option)
                                    <div class="opt {{$key}}">{{$option}}</div>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{$discount['link']}}" class="btn-orange">Button</a>
                        <p class="desc">{{$discount['description']}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="faqs">
        <div class="container">
            <h2>FAQ’s</h2>
            <div class="list">
                @foreach($faqs as $faq)
                    <div class="faq-item">
                        <button><strong>{{$faq['title']}}</strong><i class="arrow"></i></button>
                        <div class="panel">
                            <p>{{$faq['text']}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <p class="copyright">2021 All rights reserved</p>
        <div class="btns">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Copyright Policy</a>
        </div>
    </div>
</footer>

<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
