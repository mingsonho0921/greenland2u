@extends('layouts.app')
@section('head')
<style>
.banner {
    position: relative;
    padding-top: 6%;
    animation: banner 0.8s ease-in;
    background-color: rgba(255, 255, 255, 1);
}    
@keyframes banner {
    from {
        opacity: 0;
        visibility: hidden;
    }
    to {
        opacity: 1;
        visibility: visible;
    }
}
.banner img {
    aspect-ratio: 16 / 9;
    filter: invert(80%) sepia(100%) saturate(460%) hue-rotate(165deg) brightness(100%) contrast(115%);
    transform: scaleX(-1);
}
.banner-textbox {
    width: 100%;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 45%;
    padding-left: 10%;
/*    text-align: right;*/
    font-style: italic;
}
.banner-text1 {
    font-size: 4.8rem;
    font-family: Copperplate Gothic; font-weight: bolder;
    padding-left: 2rem;
    animation: text1 2s ease-in;
}
@keyframes text1 {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
.banner-text2 {
    font-size: 5.5rem;
    font-family: Copperplate Gothic; font-weight: bolder;
    animation: text2 2.2s ease-in;
}
@keyframes text2 {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* mobile responsive */
@media(max-width: 1200px) {
    .banner {
        padding-top: 150px;
    }
}
@media(max-width: 992px) {
    .banner {
        padding-top: 200px;
    }
}
@media(max-width: 767.5px) {
    .banner-text1 {
        font-size: 4rem;
    }
    .banner-text2 {
        font-size: 4.5rem;
    }
}
@media(max-width: 575.5px) {
    .banner {
        padding-top: 300px;
    }
    .banner-textbox {
        left: 50%;
        padding: 6%;
    }
    .banner-text1 {
        padding-left: 0;
    }
}
@media(max-width: 500px) {
    .banner-text1 {
        font-size: 3rem;
    }
    .banner-text2 {
        font-size: 3.5rem;
    }
}
@media(max-width: 380px) {
    .banner-text1 {
        font-size: 2.2rem;
    }
    .banner-text2 {
        font-size: 3.0rem;
    }
}
</style>
@endsection

@section('content')
<section class="home">
    <div class="banner">
        <img class="w-100" src="images/home_banner.png" alt="Greenland Malaysia" />
        <div class="banner-textbox">
            <div class="banner-text1">Your Total Industrial</div>
            <div class="banner-text2">Cleaning Convenience</div>
        </div>
    </div> 
</section>
@endsection
