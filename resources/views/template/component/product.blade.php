<div class="container">
    <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header">
        <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto"> <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false"
                aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav d-lg-flex align-items-lg-center">
                    <li class="nav-item active"> <select name="sort" id="sort">
                            <option value="" hidden selected>Sort by</option>
                            <option value="price">Price</option>
                            <option value="popularity">Popularity</option>
                            <option value="rating">Rating</option>
                        </select> </li>
                    <li class="nav-item d-inline-flex align-items-center justify-content-between mb-lg-0 mb-3">
                        <div class="d-inline-flex align-items-center mx-lg-2" id="select2">
                            <div class="pl-2">Products:</div> <select name="pro" id="pro">
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                        <div class="font-weight-bold mx-2 result">18 from 200</div>
                    </li>
                    <li class="nav-item d-lg-none d-inline-flex"> </li>
                </ul>
            </div>
        </nav>
        <div class="ml-auto mt-3 mr-2">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <nav aria-label="Page navigation">
                        <nav>
                            <ul class="pagination">
                                @for ($i = 1; $i <= $data->lastPage(); $i++)
                                    <li class="page-item" aria-disabled="page">
                                        <span class="page-link">{{ $i }}</span>
                                    </li>
                                @endfor
                            </ul>
                        </nav>
                    </nav>
                </ul>
            </nav>
        </div>
    </div>
    <div id="content" class="my-5">
        <div id="filterbar" class="collapse">
            <div class="box border-bottom">
                <div class="form-group text-center">
                    <div class="btn-group" data-toggle="buttons"> <label class="btn btn-success form-check-label">
                            <input class="form-check-input" type="radio"> Reset </label> <label
                            class="btn btn-success form-check-label "> <input class="form-check-input"
                                onclick="search()" type="radio"> Apply </label> </div>
                </div>
                <div>
                    <label class="tick">New <input type="checkbox" id="checkbox-new"> <span class="check"></span>
                    </label>
                </div>
                <div> <label class="tick">Sale <input type="checkbox" id="checkbox-sale"> <span class="check"></span> </label> </div>
            </div>
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">Outerwear <button class="btn ml-auto"
                        type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false"
                        aria-controls="inner-box" id="out" onclick="outerFilter()"> <span
                            class="fas fa-plus"></span> </button> </div>
                <div id="inner-box" class="collapse mt-2 mr-1">
                    <div class="my-1"> <label class="tick">Windbreaker <input type="checkbox" checked="checked">
                            <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Jumpsuit <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Jacket <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Coat <input type="checkbox"> <span class="check"></span>
                        </label> </div>
                    <div class="my-1"> <label class="tick">Raincoat <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Handbag <input type="checkbox" checked> <span
                                class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Warm vest <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Wallets <input type="checkbox" checked> <span
                                class="check"></span> </label> </div>
                </div>
            </div>
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">season <button class="btn ml-auto"
                        type="button" data-toggle="collapse" data-target="#inner-box2" aria-expanded="false"
                        aria-controls="inner-box2"><span class="fas fa-plus"></span></button> </div>
                <div id="inner-box2" class="collapse mt-2 mr-1">
                    <div class="my-1"> <label class="tick">Spring <input type="checkbox" checked="checked">
                            <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Summer <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Autumn <input type="checkbox" checked> <span
                                class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Winter <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Rainy <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                </div>
            </div>
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">price <button class="btn ml-auto"
                        type="button" data-toggle="collapse" data-target="#price" aria-expanded="false"
                        aria-controls="price"><span class="fas fa-plus"></span></button> </div>
                <div class="collapse" id="price">
                    <div class="middle">
                        <div class="multi-range-slider"> <input type="range" id="input-left" min="0"
                                max="100" value="10"> <input type="range" id="input-right"
                                min="0" max="100" value="50">
                            <div class="slider">
                                <div class="track"></div>
                                <div class="range"></div>
                                <div class="thumb left"></div>
                                <div class="thumb right"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <div> <span id="amount-left" class="font-weight-bold"></span> uah </div>
                        <div> <span id="amount-right" class="font-weight-bold"></span> uah </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-label text-uppercase d-flex align-items-center">size <button class="btn ml-auto"
                        type="button" data-toggle="collapse" data-target="#size" aria-expanded="false"
                        aria-controls="size"><span class="fas fa-plus"></span></button> </div>
                <div id="size" class="collapse">
                    <div class="btn-group d-flex align-items-center flex-wrap" data-toggle="buttons"> <label
                            class="btn btn-success form-check-label"> <input class="form-check-input"
                                type="checkbox"> 80 </label> <label class="btn btn-success form-check-label"> <input
                                class="form-check-input" type="checkbox" checked> 92 </label> <label
                            class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox"
                                checked> 102 </label> <label class="btn btn-success form-check-label"> <input
                                class="form-check-input" type="checkbox" checked> 104 </label> <label
                            class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox"
                                checked> 106 </label> <label class="btn btn-success form-check-label"> <input
                                class="form-check-input" type="checkbox" checked> 108 </label> </div>
                </div>
            </div>
        </div>
        <div id="products">
            <div class="row mx-0" id="result">
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
                                    <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip"
                                        data-placement="right" title="choose color"> <label
                                            class="btn btn-red form-check-label"> <input class="form-check-input"
                                                type="radio" autocomplete="off"> </label> <label
                                            class="btn btn-blue form-check-label active"> <input
                                                class="form-check-input" type="radio" autocomplete="off"> </label>
                                        <label class="btn btn-green form-check-label"> <input class="form-check-input"
                                                type="radio" autocomplete="off"> </label> <label
                                            class="btn btn-orange form-check-label"> <input class="form-check-input"
                                                type="radio" autocomplete="off"> </label> <label
                                            class="btn btn-pink form-check-label"> <input class="form-check-input"
                                                type="radio" autocomplete="off"> </label>
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
            </div>
        </div>
    </div>
</div>
</div>
