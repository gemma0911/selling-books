@foreach ($data as $product)
    <div class="col-lg-4 col-md-6" id="result">
        <div class="card d-flex flex-column align-items-center">
            <div class="product-name">{{ $product->name }}</div>
            <div class="card-img"> <img src="/assets/images/{{ $product->images }}" alt="">
            </div>
            <div class="card-body pt-5">
                <div class="text-muted text-center mt-auto"><button
                        onclick="addtocart({{ $product->idProduct }},{{ session()->get('name') }})"
                        style="background-color: white; border: none;">Add to cart</button></div>
                <div class="d-flex align-items-center justify-content-center colors my-2">
                    <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right"
                        title="choose color"> <label class="btn btn-red form-check-label"> <input
                                class="form-check-input" type="radio" autocomplete="off"> </label> <label
                            class="btn btn-blue form-check-label active"> <input class="form-check-input" type="radio"
                                autocomplete="off"> </label>
                        <label class="btn btn-green form-check-label"> <input class="form-check-input" type="radio"
                                autocomplete="off"> </label> <label class="btn btn-orange form-check-label"> <input
                                class="form-check-input" type="radio" autocomplete="off"> </label> <label
                            class="btn btn-pink form-check-label"> <input class="form-check-input" type="radio"
                                autocomplete="off"> </label>
                    </div>
                </div>
                <div class="d-flex align-items-center price">
                    <div class="del mr-2"><span class="text-dark">5500 uah</span></div>
                    <div class="font-weight-bold">{{ $product->price }}</div>
                </div>
            </div>
        </div>
    </div>
@endforeach
