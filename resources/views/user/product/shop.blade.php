@extends('layouts.user-layout')

@section('title', 'Orders')

@push('style_1')
<style>
    .product-img {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 300px;
        object-fit: cover;
        position: relative;
    }
    .list-view {
        width: 400px;
    }
    .product-img::after {
        content: '';
        position: absolute;
        height: 300px;
        width: 100%;
        top: 0;
        left: 0;
        z-index: -10;
        background-color: #f8f8f8;
    }
    .add-to-cart {
        cursor: pointer;
    }
</style>
@endpush

@section('content')
   <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Shop</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Shop Left Sidebar</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 mb-100">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                               <div class="showing-product-number text-right">
                                    <span>Showing {{ $products->perPage() }} of {{ $products->total() }} results</span>
                                </div> 
                            </li>
                            <li>
                               <div class="short-by text-center">
                                    <select class="nice-select" id="sort_by">
                                        <option value="">Default sorting</option>
                                        <option value="latest">Sort by new arrivals</option>
                                        <option value="low_to_high">Sort by price: low to high</option>
                                        <option value="high_to_low">Sort by price: high to low</option>
                                    </select>
                                </div>
                                {{-- <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="icon-grid"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="icon-menu"></i></a>
                                    </div>
                                </div>  --}}
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row" id="product-grid-view">
                                    @foreach ($products as $product)
                                        <!-- ltn__product-item -->
                                        <div class="col-xl-4 col-sm-6 col-12">
                                            <div class="ltn__product-item text-center">
                                                <div class="product-img">
                                                    <a href="#"><img src="{{ asset($product->image) }}" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            {{-- <li class="badge-1">New</li> --}}
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action product-hover-action-2">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('user.product.show', $product->id) }}" title="Quick View">
                                                                    <i class="icon-magnifier"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <a class="cart-text d-none d-xl-block user-select-none" id="{{ $product->code }}" onclick="addToCart({{ $product->id }}, '{{ $product->code }}')"> 
                                                                        @if(collect(session()->get('cart'))->pluck('id')->contains($product->id))
                                                                            <i class="fa fa-check-circle"></i> Added
                                                                        @else
                                                                            Add to Cart
                                                                        @endif
                                                                    </a>
                                                                    <button class="cart-text w-100 d-block d-xl-none" id="mobile_{{$product->code}}" onclick="addToCart({{ $product->id }}, '{{ $product->code }}')">
                                                                        
                                                                        @if(collect(session()->get('cart'))->pluck('id')->contains($product->id))
                                                                            <i class="fa fa-check-circle pe-2"></i> Added
                                                                        @else
                                                                            <i class="icon-handbag pe-2"></i>  Add to Cart
                                                                        @endif
                                                                    </button>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h2 class="product-title"><a href="product-details.html">{{ $product->name }}</a></h2>
                                                    <div class="product-price">
                                                        <span>{{ Helper::convertPrice($product->price) }}</span>
                                                        <del>$21.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row" id="product-list-view">
                                    @foreach ($products as $product)
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item">
                                                <div class="product-img list-view">
                                                    <a href="#"><img src="{{ asset($product->image) }}" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            {{-- <li class="badge-1">Hot</li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h2 class="product-title"><a href="#">{{ $product->name }}</a></h2>
                                                    <div class="product-price">
                                                        <span>{{ Helper::convertPrice($product->price) }}</span>
                                                        <del>$21.00</del>
                                                    </div>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-brief">
                                                        <p>{{ $product->description }}</p>
                                                    </div>
                                                    <div class="product-hover-action product-hover-action-2">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('user.product.show', $product->id) }}" title="Quick View">
                                                                    <i class="icon-magnifier"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart">
                                                                <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                    <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                                                    <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__pagination-area text-center">
                        @if($products->hasPages())
                            <div class="ltn__pagination ltn__pagination-2">
                                <ul>
                                    {{-- first & previous --}}
                                    @if($products->onFirstPage())
                                        <li>
                                            <a href="#"><i class="icon-arrow-left"></i></a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $products->previousPageUrl() }}"><i class="icon-arrow-left"></i></a>
                                        </li>
                                    @endif

                                    @foreach($products->getUrlRange($products->currentPage(), $products->lastPage()) as $index => $page)
                                        
                                        @if($page) 
                                            <li class="{{ $products->currentPage() == $index ? 'active': '' }}">
                                                <a href="{{ $page }}">{{ $index }}</a>
                                            </li>
                                        @endif
                                    @endforeach

                                    {{-- next --}}
                                     @if ($products->hasMorePages()) 
                                        <li>
                                            <a href="{{ $products->nextPageUrl() }}">
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="#">
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </li> 
                                    @endif 
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3  mb-100">
                    <aside class="sidebar ltn__shop-sidebar">
                        <!-- Search Widget -->
                        <div class="widget ltn__search-widget">
                            <form action="#">
                                <input type="text" name="search" id="search-input" placeholder="Search your keyword...">
                                <button type="submit"><i class="icon-magnifier"></i></button>
                            </form>
                        </div>
                        <!-- Price Filter Widget -->
                        <div class="widget ltn__price-filter-widget">
                            <h4 class="ltn__widget-title">Price</h4>
                            <div class="price_filter" onmouseup="">
                                <div class="price_slider_amount">
                                    <input type="submit"  value="Your range:"/> 
                                    <input type="text" class="amount_label" name="price"  placeholder="Add Your Price" /> 
                                </div>
                                <div class="slider-range1"></div>
                            </div>
                        </div>
                        <!-- Category Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title">categories</h4>
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <input type="checkbox" class="category" id="category_{{ $category->id }}" value="{{ $category->id}}" class="pe-2"/>
                                        <label for="category_{{ $category->id }}">
                                            {{ $category->name }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{--
                        <!-- Color Widget -->
                        <div class="widget ltn__color-widget">
                            <h4 class="ltn__widget-title">Color</h4>
                            <ul>
                                <li class="theme"><a href="#"></a></li>
                                <li class="green-2"><a href="#"></a></li>
                                <li class="blue-2"><a href="#"></a></li>
                                <li class="white"><a href="#"></a></li>
                                <li class="red"><a href="#"></a></li>
                                <li class="yellow"><a href="#"></a></li>

                                <!-- <li class="black"><a href="#"></a></li>
                                <li class="silver"><a href="#"></a></li>
                                <li class="gray"><a href="#"></a></li>
                                <li class="maroon"><a href="#"></a></li>
                                <li class="olive"><a href="#"></a></li>
                                <li class="lime"><a href="#"></a></li>
                                <li class="aqua"><a href="#"></a></li>
                                <li class="teal"><a href="#"></a></li>
                                <li class="blue"><a href="#"></a></li>
                                <li class="navy"><a href="#"></a></li>
                                <li class="fuchsia"><a href="#"></a></li>
                                <li class="purple"><a href="#"></a></li>
                                <li class="pink"><a href="#"></a></li>
                                <li class="nude"><a href="#"></a></li>
                                <li class="orange"><a href="#"></a></li> -->
                            </ul>
                        </div>
                        <!-- Size Widget -->
                        <div class="widget ltn__size-widget">
                            <h4 class="ltn__widget-title">Size</h4>
                            <ul>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">XXL</a></li>
                            </ul>
                        </div>
                        <!-- Tagcloud Widget -->
                        <div class="widget ltn__tagcloud-widget">
                            <h4 class="ltn__widget-title">Tags</h4>
                            <ul>
                                <li><a href="#">Popular</a></li>
                                <li><a href="#">desgin</a></li>
                                <li><a href="#">ux</a></li>
                                <li><a href="#">usability</a></li>
                                <li><a href="#">develop</a></li>
                                <li><a href="#">icon</a></li>
                                <li><a href="#">Car</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Repairs</a></li>
                                <li><a href="#">Auto Parts</a></li>
                                <li><a href="#">Oil</a></li>
                                <li><a href="#">Dealer</a></li>
                                <li><a href="#">Oil Change</a></li>
                                <li><a href="#">Body Color</a></li>
                            </ul>
                        </div>
                        --}}

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->
@endsection
@push('script_1')
<script>
    const productGridView = document.querySelector('#product-grid-view');
    const productListView = document.querySelector('#product-list-view');

    const sortBySelect = document.querySelector('#sort_by');
    const searchInput = document.querySelector('#search-input');

    searchInput.onkeyup = () => {
        filter_products({
            categories: categories,
            minPrice: minPrice, 
            maxPrice: maxPrice,
            sortBy: sortBy
        });
    }

    var categories = [];
    var minPrice = 0;
    var maxPrice = 100;
    var sortBy = '';

    sortBySelect.onchange = (e) => {
        sortBy = e.target.value;
        filter_products({
            categories: categories,
            minPrice: minPrice, 
            maxPrice: maxPrice,
            sortBy: sortBy
        }); 
    }

    const categoryCheckBoxs = document.querySelectorAll('.category');
    categoryCheckBoxs.forEach((categoryCheckBox, index) => {
        categoryCheckBox.onclick = () => {
            if(categoryCheckBoxs[index].checked) {
                categories.push(categoryCheckBoxs[index].value);

                // filter product
                filter_products({
                    categories: categories,
                    minPrice: minPrice, 
                    maxPrice: maxPrice,
                    sortBy: sortBy
                }); 
            } else {
                categories.pop(index);
                filter_products({
                    categories: categories,
                    minPrice: minPrice, 
                    maxPrice: maxPrice,
                    sortBy: sortBy
                }); 
            }
        }
    });

    // price slider 
    $('.slider-range1').slider({
        range: true,
        min: 0,
        max: 10000,
        values: [ 0, 1000 ],
        slide: function( event, ui ) {
            $( ".amount_label" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
        },
        change: function(event, ui) { 
            minPrice = ui.values[0], 
            maxPrice = ui.values[1];

            filter_products({
                minPrice: minPrice, 
                maxPrice: maxPrice
            });
        },
    });
    $( ".amount_label" ).val("₹0 - ₹ 1000");

    // product ui
    const productGridHtml = (data) => {
        console.log(data)
        var url = "{{ route('user.product.show', ':id') }}";
        url = url.replace(':id', data.id);

        return `
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="#"><img src='${data.image}' alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                {{-- <li class="badge-1">New</li> --}}
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="${url}" title="Quick View">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart">
                                        <a class="cart-text d-none d-xl-block user-select-none" id="${data.code}" onclick="addToCart(${data.id}, '${data.code}')"> 
                                            @if(collect(session()->get('cart'))->pluck('id')->contains(1))
                                                <i class="fa fa-check-circle"></i> Added
                                            @else
                                                Add to Cart
                                            @endif
                                        </a>
                                        <button class="cart-text w-100 d-block d-xl-none" id="mobile_${data.code}" onclick="addToCart(${data.id}, '${data.code}')">
                                            
                                            @if(collect(session()->get('cart'))->pluck('id')->contains(1))
                                                <i class="fa fa-check-circle pe-2"></i> Added
                                            @else
                                                <i class="icon-handbag pe-2"></i>  Add to Cart
                                            @endif
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">${data.name}</a></h2>
                        <div class="product-price">
                            <span>₹ ${data.price}</span>
                            <del>$21.00</del>
                        </div>
                    </div>
                </div>
            </div>`;
    }

    // filter api
    function filter_products({categories, minPrice, maxPrice, sortBy}) {
        console.log(categories, minPrice, maxPrice, sortBy, searchInput.value);

        axios.get('{{ route("user.product.filter") }}', { 
            params : {
                "categories": categories,
                "min_price": minPrice, 
                "max_price": maxPrice,
                "sort_by": sortBy,
                "keyword": searchInput.value
            }
        })
        .then(response => {
            productGridView.innerHTML = '';

            for(let data of response.data) {
                productGridView.innerHTML += productGridHtml(data);
            }

        })
        .catch(error => console.log(error));
    }
</script>
@endpush