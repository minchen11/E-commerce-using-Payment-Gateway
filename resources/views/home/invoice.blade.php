@extends('layout.home')

@section('title', 'Checkout')

@section('content')
    <section class="section-wrap checkout pb-70">
        <div class="container relative">
            <div class="row">
                <div class="ecommerce col-xs-12">

                    <div class="col-md-12">
                        <div class="order-review-wrap ecommerce-checkout-review-order" id="order_review">
                            <h2 class="heading uppercase bottom-line full-grey">Your Order</h2>
                            <table class="table shop_table ecommerce-checkout-review-order-table">
                                <tbody>
                                    <tr class="order-total">
                                        <th><strong>Order Total</strong></th>
                                        <td>
                                            <strong><span class="amount">Rp.
                                                    {{ number_format($orders->grand_total) }}</span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div id="payment" class="ecommerce-checkout-payment">
                                <h2 class="heading uppercase bottom-line full-grey">Payment Method</h2>
                                <ul class="payment_methods methods">

                                    <li class="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio"
                                            name="payment_method" value="bacs" checked="checked">
                                        <label for="payment_method_bacs">Direct Bank Transfer</label>
                                        <div class="payment_box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order
                                                ID as the payment reference. Your order wont be shipped until the funds
                                                have cleared in our account.</p>
                                            <p>Atas Nama : {{ $about->atas_nama }}</p>
                                            <p>No Rekening : {{ $about->no_rekening }}</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-row place-order">
                                    <input type="submit" name="ecommerce_checkout_place_order" class="btn btn-lg btn-dark"
                                        id="place_order" value="Place order">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end ecommerce -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end checkout -->

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('place_order');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
            // Also, use the embedId that you defined in the div above, here.
            window.snap.pay('{{ $snapToken }}', {
                // embedId: 'snap-container',
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    window.location.href = '/orders'
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            });
        });
    </script>
@endsection
