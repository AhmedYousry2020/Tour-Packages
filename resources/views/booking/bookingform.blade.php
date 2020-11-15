@extends("layouts.app")

@section("content")
<div class="container maincheck">

      <div class="col-md-8 order-md-1 maindp">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" method="post" action="{{Route('booking.book',$package->id)}}">
         @csrf
         @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
          <div class="mb-3">
            <label for="username">Name</label>
            <div class="input-group">
              <input type="text" class="form-control" id="name" value="{{$user->name}}">

            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-dark">(Optional)</span></label>
            <input type="email" class="form-control" id="email"value="{{$user->email}}">

          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">

          </div>

          <div class="mb-3">
            <label for="address2">Individuals</label>
            <input type="number" class="form-control" id="individuals" placeholder="Number of individuals" name="individuals">
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Country</label>
              <input type="text" class="form-control" id="country" value="{{$user->country}}">

            </div>
            <div class="col-md-4 mb-3">
              <label for="state">City</label>
              <input type="text" class="form-control" id="city" value="{{$user->city}}">

            </div>
            <div class="col-md-3 mb-3">
              <label for="zip">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" name="zip">

            </div>
          </div>
          <hr class="mb-4">
          <h4 class="mb-3">Payment</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="credit" checked>
              <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="debit">
              <label class="custom-control-label" for="debit">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" value="paypal">
              <label class="custom-control-label" for="paypal">PayPal</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" name="name_on_card">
              <small class="text-info">Full name as displayed on card</small>

            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" name="credit_number">

            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" name="expiration">

            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-cvv">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" name="cvv">

            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
      </div>

</div>
@endsection
