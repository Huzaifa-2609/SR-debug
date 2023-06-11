@push('css')
    <link rel="stylesheet" href="{{ asset('client/components/molecules/hero/text-block.css') }}">
@endpush

<!-- <div class="text-center text-block-hero py-5 mb-5" style="background-image: url('{{asset('client/img/bg.jpg')}}'); background-repeat: no-repeat;background-size: cover;background-size: 100% 100%">
    <h1 style="color: white">We change the way you see the world</h1>
    <p style="color: white">"Experience eyewear like never before with our cutting-edge augmented reality technology. Try on our stylish frames virtually, right from the comfort of your own home. Discover the perfect pair that suits your unique style and see it come to life before your eyes."</p>
</div> -->
<div class="w3l-main-slider position-relative" id="home">
    <div class="w3l-bannerhny-content">
        <div class="container">
            <div class="w3l-bannerhny-info">
                <h3 class="mb-md-5 mb-4" id="animation1" style="color: white;">
                    We change the way you see the world
                </h3>
                <h3 class="mb-md-5 mb-4" id="animation2" style="color: white;">
                    Experience eyewear like never before with our cutting-edge augmented reality technology. Try on our stylish frames virtually, right from the comfort of your own home. Discover the perfect pair that suits your unique style and see it come to life before your eyes.
                </h3>
            </div>
        </div>
        <div class="video-container">
            <video autoplay preload loop muted plays-inline class="back-video">
                <source src="{{asset('client/img/bg-video.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
</div>

