@push('css')
    <style>
        .about-text h4{
          font-weight: 300;
          width: 80%;
          margin: 0 auto;
        }

        .img-about-us img{
          /* width: 100%; */
        }

        @media screen and (max-width:576px){
            .about-text h4{
                font-weight: 300;
                width: 100%;
                margin: 0 auto;
                font-size: 16px;
            }
        }
    </style>
@endpush

<div class="py-md-5 py-2">
    <div class="container about-text">
    <h1 class="font-primary text-center mt-5">About Us</h1>
    <h4 class="font-secondary text-center">{{$shop->desc}}</h4>
    </div>

    <div class="img-about-us mt-4" style='    display: flex;
    gap: 20px;
    border: 1px solid #4e596bad;
    padding: 15px;
    border-radius: 15px;
    margin-left: 10px;
    margin-right: 10px;'>
    <img src="https://i.pinimg.com/564x/9a/31/ee/9a31eea33f69c4068a12e79423567888.jpg" alt="" class="img-fluid">
    <p style="    font-weight: 500;
    width: 60%;
    margin: 0 auto;font-size:20px;color:#5f6e87ad">
    We are passionate about providing high-quality eyewear that combines style, comfort, and functionality. We understand the importance of clear vision and how it enhances your everyday life, and that's why we are committed to offering a wide range of eyeglasses and sunglasses to suit your unique needs
    </p>
    </div>
</div>