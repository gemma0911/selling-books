<div class="container">
    <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header">
        <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto"> <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false"
                aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span
                    class="navbar-toggler-icon"></span> </button>
        </nav>
        <div class="input-group mb-0" style="width:800px;">
            <input type="text" class="form-control" placeholder="Nhập sản phẩm bạn cần tìm kiếm"
                aria-label="Recipient's username" aria-describedby="button-addon2" id="inputsearch">
            <button class="btn btn-outline-secondary" type="button" onclick="searchproduct1()">Search</button>
        </div>
    </div>
    <nav class="my-4 d-flex justify-content-end">
        <ul class="pagination">
            @for ($j=1 ; $j<=3 ; $j++)
            <li class="page-item" aria-current="page"><span class="page-link">{{$j}}</span></li>
            @endfor
        </ul>
    </nav>
    <div id="content" class="my-5">
        <div id="filterbar" class="collapse">
            <div class="box border-bottom">
                <div class="form-group text-center">
                    <div class="btn-group" data-toggle="buttons"> <label class="btn btn-success form-check-label">
                            <input class="form-check-input" type="radio"> Reset </label> <label
                            class="btn btn-success form-check-label active"> <input class="form-check-input"
                                onclick="search()" type="radio"> Apply </label> </div>
                </div>
                <div>
                    <label class="tick">New <input type="checkbox" id="checkbox-new"> <span class="check"></span>
                    </label>
                </div>
                <div> <label class="tick">Sale <input type="checkbox" id="checkbox-sale"> <span class="check"></span>
                    </label> </div>
            </div>
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">Category <button class="btn ml-auto"
                        type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false"
                        aria-controls="inner-box" id="out" onclick="outerFilter()"> <span
                            class="fas fa-plus"></span> </button> </div>
                <div id="inner-box" class="collapse mt-2 mr-1">
                    <div class="my-1"> <label class="tick">Manga - LiveNovel <input type="checkbox" name="a1"
                                value="1">
                            <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Văn học <input type="checkbox" name="a1"
                                value="2">
                            <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Kinh tế <input type="checkbox" name="a1"
                                value="3"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Tâm lý kĩ năng sống <input type="checkbox"
                                name="a1" value="4"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Nuôi dạy con <input type="checkbox" name="a1"
                                value="5"> <span class="check"></span>
                        </label> </div>
                    <div class="my-1"> <label class="tick">Sách thiếu nhi <input type="checkbox" name="a1"
                                value="6"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Tiểu sử hồi kí <input type="checkbox" name="a1"
                                value="7"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Sách giáo khoa - Tham khảo <input type="checkbox"
                                name="a1" value="8">
                            <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Sách ngoại ngữ <input type="checkbox" name="a1"
                                value="9"> <span class="check"></span> </label> </div>

                </div>
            </div>
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">Price <button class="btn ml-auto"
                        type="button" data-toggle="collapse" data-target="#inner-box2" aria-expanded="false"
                        aria-controls="inner-box2"><span class="fas fa-plus"></span></button> </div>
                <div id="inner-box2" class="collapse mt-2 mr-1">
                    @foreach ($price as $prices)
                        <div class="my-1"> <label class="tick">{{ $prices->start }} - {{ $prices->end }}<input
                                    type="radio" name="idPrice" value="{{ $prices->idPrice }}">
                                <span class="check"></span> </label> </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="products">
            <div class="row mx-0" id="result">
                @foreach ($data as $product)
                    <div class="col-lg-4 col-md-6" onclick="detail({{ $product->idProduct }})">
                        <div class="card d-flex flex-column align-items-center">
                            <div class="product-name">{{ $product->name }}</div>
                            <div class="card-img"> <img src="/assets/images/{{ $product->images }}" alt="">
                            </div>
                            <div class="card-body pt-5">
                                <div class="text-muted text-center mt-auto"><button
                                        onclick="addtocart({{ $product->idProduct }},{{ session()->get('name') }})"
                                        style="background-color: white; border: none;">Thêm vào giỏ hàng</button></div>
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
                                    <div class="del mr-2"><span class="text-dark">Giá : </span></div>
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
