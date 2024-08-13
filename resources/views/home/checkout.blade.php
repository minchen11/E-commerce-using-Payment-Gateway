@extends('layout.home')

@section('title', 'Checkout')

@section('content')
    <!-- Checkout -->
    <section class="section-wrap checkout pb-70">
        <div class="container relative">
            <div class="row">

                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <div class="alert alert-danger">
                            {{ $e }}
                        </div>
                    @endforeach
                @endif

                <div class="ecommerce col-xs-12">

                    <form name="checkout" class="checkout ecommerce-checkout row" method="POST" action="/payments">
                        @csrf
                        <input type="hidden" name="id_order" value="{{ $orders->id }}">
                        <div class="col-md-12" id="customer_details">
                            <div>
                                <h2 class="heading uppercase bottom-line full-grey mb-30">billing address</h2>
                                <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field"
                                    id="billing_first_name_field">
                                    <label for="billing_first_name">Detail Alamat
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" class="input-text" placeholder value name="detail_alamat"
                                        id="billing_first_name">
                                </p>
                                <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field"
                                    id="billing_first_name_field">
                                    <label for="billing_first_name">Atas Nama
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" class="input-text" placeholder value name="atas_nama"
                                        id="billing_first_name">
                                </p>
                                <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field"
                                    id="billing_first_name_field">
                                    <label for="billing_first_name">No Rekening
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" class="input-text" placeholder value name="no_rekening"
                                        id="billing_first_name">
                                </p>
                                <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field"
                                    id="billing_first_name_field">
                                    <label for="billing_first_name">Nominal Transfer
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" class="input-text" value="{{ $orders->grand_total }}" placeholder
                                        value name="jumlah" id="billing_first_name" readonly>
                                </p>

                                <div class="clear"></div>

                            </div>

                            <div class="clear"></div>

                        </div> <!-- end col -->

                        <div class="form-row place-order">
                            <input type="submit" name="ecommerce_checkout_place_order" class="btn btn-lg btn-dark"
                                id="place_order" value="Bayar Rong">
                        </div>

                        <!-- Your Order -->
                        <!-- end order review -->
                    </form>

                </div> <!-- end ecommerce -->


            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end checkout -->


@endsection



@push('js')
    <script>
        $(function() {
            $('.provinsi').change(function() {
                $.ajax({
                    url: '/get_kota/' + $(this).val(),
                    success: function(data) {
                        data = JSON.parse(data)
                        option = ""
                        data.rajaongkir.results.map((kota) => {
                            option +=
                                `<option value=${kota.city_id}>${kota.city_name}</option>`
                        })
                        $('.kota').html(option)
                    }
                });
            });
        })
    </script>
@endpush
