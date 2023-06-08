<div class="sub-footer py-5 mt-5" style="background:#b1bfd7ad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="short-about text-lg-start text-md-start text-center">
            <img src="{{ asset('shop/'.$shop->path) }}" alt="" width="80px">
            <h1 class="mt-3">{{$shop->name_shop}}</h1>
            <p>{{$shop->desc}}</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6 ">
          <h6>Company</h6>
          <a href="/about" class="text-decoration-none"><p>About Us</p></a>
          <a href="/products" class="text-decoration-none"><p>Product</p></a>
          <a href="/about#address" class="text-decoration-none text-dark"><p>Address</p></a>
        </div>
        <div class="col-lg-3 col-md-3 col-6 ">
          <h6>Support</h6>
          <a href="/about#faq" class="text-decoration-none text-dark"><p>FAQ</p></a>
          <a href="/about#shippingandreturns" class="text-decoration-none text-dark"><p>Shipping & Returns</p></a>
          <a href="/about#warranty" class="text-decoration-none text-dark"><p>Warranty</p></a>
        </div>
        <div class="col-lg-2 col-md-2 col-6 d-flex flex-column">
          <h6>Contact Us</h6>
          <p class="d-flex align-items-center"><img src="{{ asset('client/img/telephone.png') }}" alt="" class="img-fluid me-2" style="width: 25px;
    height: 25px;">{{$shop->phone}}</p>
          <p class="d-flex align-items-center"><img src="{{ asset('client/img/gmail.png') }}" alt="" class="img-fluid me-2" style="width: 25px;
    height: 25px;">hello{!! '@'.str_replace(' ', '', strtolower($shop->name_shop)) !!}.com</p>
          <div class="d-lg-block d-md-block d-none">
            <div style="display:flex;align-items:center;gap:10px">
              <div class="col-3">
                <img src="{{ asset('client/img/instagram.png') }}" alt="" class="img-fluid" style="width: 25px;
    height: 25px;">
              </div>
              <div class="col-3">
                <a href="https://www.linkedin.com/company/94871647/admin/?shareMsgArgs=null" target="_blank">
                <img src="{{ asset('client/img/linkedin.png') }}" alt="" class="img-fluid" style="width: 25px;
    height: 25px;">
                </a>
 
              </div>
              <div class="col-3">
                <img src="{{ asset('client/img/facebook.png') }}" alt="" class="img-fluid" style="width: 25px;
    height: 25px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6 d-lg-none d-md-none d-block">
          <h6>Social Media</h6>
          <div style="display:flex;align-items:center;gap:10px">
            <div class="col-3">
              <img src="{{ asset('client/img/instagram.png') }}" alt="" class="img-fluid" style="width: 25px;
    height: 25px;">
            </div>
            <div class="col-3">
            <a href="https://www.linkedin.com/company/94871647/admin/?shareMsgArgs=null" target="_blank">
                <img src="{{ asset('client/img/linkedin.png') }}" alt="" class="img-fluid" style="width: 25px;
    height: 25px;">
                </a>
            </div>
            <div class="col-3">
              <img src="{{ asset('client/img/facebook.png') }}" alt="" class="img-fluid" style="width: 25px;
    height: 25px;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div style="display:flex;align-items:center;justify-content:center;width:100%;background:#b1bfd7ad;" >
  <footer style='margin-top:0'>
    <div style="display:flex;gap:10px"><img src="{{ asset('client/img/copyright.png') }}" alt="" class="img-fluid" style="width: 25px;
    height: 25px;" /><p>	 {{ now()->year }} {{ $shop->name_shop }}. All rights reserved.</p></div>
  </footer>

  </div>