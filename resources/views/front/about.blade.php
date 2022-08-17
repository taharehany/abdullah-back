@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--about me-->
<section class="about">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="text">
                        <h1>about me </h1>
                        <p>I have spent three years of my life learning and developing my graphic design career Graphic design helped me a lot in finding myself renewing my passion for art and everything related to it since my childhood I love drawing, colors and nature, besides my special love for engineering graphics And abstract graphics . Since then, I have dreamed of doing anything related to art and I found that in my work as a graphic designer and user interface designer.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="icon"><img src="{{ asset('front/images/about/horn.png') }}" alt="alt"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about me -->
<!--download cv-->
<section class="cv">
    <div class="container">
        <div class="content">
            <div class="main-title">
                <h2>you can download my cv from here</h2>
            </div>
            <div class="icon"><img class="img-fluid" src="{{ asset('front/images/icons/pdf.svg') }}" alt="alt"></div>
            <div class="button"><a class="btn" href="">cv<img class="img-fluid" src="{{ asset('front/images/icons/download.svg') }}" alt="alt"></a></div>
        </div>
    </div>
</section>
<!--download cv-->
<!--reason behind-->
<section class="reason-behind">
    <div class="container">
        <div class="content">
            <div class="main-title">
                <h2>the reason behind:</h2>
            </div>
            <div class="image"><img class="img-fluid" src="{{ asset('front/images/message.svg') }}" alt="alt"></div>
            <div class="text">
                <p>It is self-evident to know that the design is not just visual elements, but it must be certain that the design is a message that communicates through the visual elements of the human being to interact with his unconscious feeling and address his subconscious mind.</p>
                <p>Therefore, when working with me, I like to pay attention to the smallest of details to work on developing a clear vision and a meaningful message to your client.</p>
            </div>
        </div>
    </div>
</section>
<!--reason behind-->
<!--links-->
<section class="links">
    <div class="container">
        <div class="content">
            <div class="main-title">
                <h2>links<img class="img-fluid" src="{{ asset('front/images/icons/link.svg') }}" alt=""></h2>
            </div>
            <div class="text">
                <p>Here are links to some of my social media platforms. You can find me on any of these platforms and contact me if you would like to work with me on your next project and inquire about prices for the services I provide</p>
            </div>
            <div class="social-media"><a href=""><i class="fa-brands fa-behance"> </i></a><a href=""><i class="fa-solid fa-envelope"> </i></a><a href=""><i class="fa-brands fa-facebook"> </i></a><a href=""><i class="fa-brands fa-instagram"> </i></a><a href=""><i class="fa-brands fa-whatsapp"> </i></a></div>
        </div>
    </div>
</section>
<!--links-->

<!--contacts-->
<section class="contacts">
    <div class="container">
        <div class="content">
            <div class="main-title">
                <h2>contacts </h2>
                <p>My personal numbers and emails, if you want to contact me there, I am always there for you</p>
            </div>
            <div class="info">
                <div class="box"><a href="01063075478"> <i class="fa-solid fa-phone-flip"> </i><span>01063075478</span></a></div>
                <div class="box"><a href="abdallahdesigns3@gmail.com"> <i class="fa-solid fa-envelope"> </i><span>abdallahdesigns3@gmail.com</span></a></div>
                <div class="box"><a href="01148803505"> <i class="fa-solid fa-phone-flip"> </i><span>01148803505</span></a></div>
                <div class="box"><a href="abdalla.ebra500@gmail.com"> <i class="fa-solid fa-envelope"> </i><span>abdalla.ebra500@gmail.com</span></a></div>
            </div>
        </div>
    </div>
</section>
<!--contacts-->
@endsection
