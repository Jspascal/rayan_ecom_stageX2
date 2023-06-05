@extends('layouts.front')

@section('title', $products->name)



@section('content')

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('category') }}">
                    Categories
                </a> /
                <a href="{{ url('viewcategory/'.$products->category->id) }}">
                    {{ $products->category->name }}
                </a> /
                <a href="{{ url('category/'.$products->category->id.'/'.$products->slug) }}">
                    {{ $products->name }}
                </a>
            </h6>
        </div>
    </div>


    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('asset/uploids/products/'.$products->image) }}" class="w-100" alt="produit">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{$products->name}}
                            <label style="font-size: 16px" class="float-end badge bg-danger trending_tag">{{ $products->trending == '1' ? 'Tendance':'' }}</label>
                        </h2>
                        <br>
                        <hr>
                        <label class="me-3" style="text-decoration: line-through ">Prix d'origine : {{ $products->original_price }} XAF</label>
                        <label class="fw-bold">Prix de vente : {{ $products->selling_price }} XAF</label>
                        <p class="mt-3">
                            {!! $products->small_description !!}
                        </p>
                        <br>
                        <hr>
                        <br>
                        @if($products->qty > 0)
                            <label class="badge bg-success">En stock</label>
                        @else
                            <label class="badge bg-danger">Fini</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <input type="hidden" value="{{$products->id}}" class="prod_id">
                                <label for="Quantity">Quantite</label>
                                <div class="input-group text-center mb-3">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" value="1" class="form-control qty-input">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br/>
                                @if($products->qty > 0)
                                    <label class="badge bg-success">En stock</label>
                                    <button type="button" class="btn btn-primary addtocartbtn me-3 float-start">panier <ion-icon name="cart-outline"></ion-icon></button>
                                @else

                                @endif
                                <button type="button" class="btn btn-success  me-3 float-start">Wishlist <ion-icon name="heart-outline"></ion-icon></button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <hr>
                    <br>
                    <h3 class="mb-0">
                        Description
                    </h3>
                    <br>
                    <p>
                        {!! $products->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {

            $('.addtocartbtn').click(function (e) {
                e.preventDefault();

                var product_id = $(this).closest('.product_data').find('.prod_id').val();
                var product_qty = $(this).closest('.product_data').find('.qty-input').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/add-to-cart",
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'product_id': product_id,
                        'product_qty': product_qty,
                    },
                    success: function (response){
                        swal("",response.status, "success");

                    },
                    error: function (response) {
                        // Affiche un message d'erreur
                        swal("",response.status, "error");
                    }


                });
            });

        });
    </script>

@endsection
