<div class="container py-4">
    <form action="{{ route('clientCheckoutSave') }}" method="post" class="require-validation" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"  style="background:white;border-radius:15px;padding:20px">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror bg-transparent" placeholder="Mike" value="{{ old('name') }}" required>
            @error('name') 
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <!-- <div class="form-group">
            <label for="phone">Email</label>
            <input type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror bg-transparent" placeholder="mike@gmail.com" value="{{ old('email') }}" required>
            @error('email') 
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div> -->
        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="text" name="phone" id="phone" class="form-control  @error('phone') is-invalid @enderror bg-transparent" placeholder="08122387xxxx" value="{{ old('phone') }}" required>
            @error('phone') 
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control  @error('address') is-invalid @enderror bg-transparent" placeholder="3425 Stone Street" value="{{ old('address') }}" required>
            @error('address') 
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <textarea name="note" id="note" cols="30" class="form-control @error('note') is-invalid @enderror bg-transparent" placeholder="Write instructions if any...">{{ old('note') }}</textarea>
            @error('note')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <h4 class="mt-5">Payment Details</h4>
            <div class="form-group">
                <label for="name_on_card" class="light-text">Name on card</label>
                <input type="text" placeholder="Mike" name="name_on_card" class="form-control bg-transparent name_on_card" required>
            </div>
            <div class="form-group">
                <label for="credit_card" class="light-text">Credit Card</label>
                <input type="text" name="credit_card" placeholder="4242424242424242" class="form-control bg-transparent credit_card" required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cvc" class="light-text">CVC</label>
                        <input type="number" placeholder="123" name="cvc" class="form-control bg-transparent cvc" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="exp" class="light-text">Exp</label>
                    <input type="number" placeholder="08" name="exp" class="form-control bg-transparent exp" min="1" max="12" required>
                </div>
                <div class="col-md-4">
                    <label for="year" class="light-text">Year</label>
                    <input type="number" name="year" placeholder="2025" class="form-control bg-transparent year" required>
                </div>
            </div>
        <button type="submit" class="btn btn-primary float-end">Order</button>
    </form>
</div>
@push('js')
    <script>
        autosize();
        function autosize(){
            var text = $('#note');

            text.each(function(){
                $(this).attr('rows',1);
                resize($(this));
                this.style.overflow = 'hidden';
                this.style.backgroundColor = 'transparent';
            });

            text.on('input', function(){
                resize($(this));
            });
            
            function resize ($text) {
                $text.css('height', 'auto');
                $text.css('height', $text[0].scrollHeight+'px');
            }
        }

    </script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });
            if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.credit_card').val(),
                cvc: $('.cvc').val(),
                exp_month: $('.exp').val(),
                exp_year: $('.year').val()
            }, stripeResponseHandler);
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>
@endpush