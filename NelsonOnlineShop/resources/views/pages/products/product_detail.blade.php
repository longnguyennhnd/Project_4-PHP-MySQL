@extends('layout.layout_shopping-cart')
@section('content')


<style>
    .rating {
      float:left;
    }
    .rating:not(:checked) > input {
        position:absolute;
        top:-9999px;
        clip:rect(0,0,0,0);
    }

    .rating:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        color:#ddd;
        font-size: 300%;
        font-size: 28px;
    }

    .rating:not(:checked) > label:before {
        content: '★ ';
    }

    .rating > input:checked ~ label {
        color: #020202;
        
    }

    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: #020202
        
    }

    .rating > input:checked + label:hover,
    .rating > input:checked + label:hover ~ label,
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label,
    .rating > label:hover ~ input:checked ~ label {
        color: #020202;
    }

    .rating > label:active {
        position:relative;
        top:2px;
        left:2px;
    }
/* .main-section{
	position: relative;
	top:50%;
	left:20%;
	right: 50%;
	box-shadow: 1px 1px 15px #FF6EB0;
	font-family: 'Abel', sans-serif;
	background-color: #E45641;
	transform: translate(-50%,50%);
} */
.rating-star{
	transform: translate(-75%,0%);
    height: 20px;
    position: relative;
    left: -5px;;
}
.rating-star > input { display: none; } 
.rating-star > label:before { 
  margin: 5px;
  font-size:18px;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}
.rating-star > .half:before { 
  content: "\f089";
  position: absolute;
}
.rating-star > label { 
  color: #ddd; 
 float: right; 
}
.rating-star > input:checked ~ label,
.rating-star:not(:checked) > label:hover,
.rating-star:not(:checked) > label:hover ~ label { color: #FFD700;  }
.rating-star > input:checked + label:hover,
.rating-star > input:checked ~ label:hover,
.rating-star > label:hover ~ input:checked ~ label,
.rating-star > input:checked ~ label:hover ~ label { color: #FFED85;  } 



.brown{
    background-color: brown;
    margin-left: 20px;
    width: 30px;
    border-radius: 50%;
    height: 30px;
}

.dark{
    background-color: black;
    margin-left: 20px;
    width: 30px;
    border-radius: 50%;
    height: 30px;
}

.light{
    background-color: gray;
    margin-left: 20px;
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div
    class="single-product-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-25 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-area">
                    <div class="row">
                        <div class="col-md-6 pr-35 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images">
                                    <div class="lg-image">
                                        <img src="{{url('/')}}/nelsononlineshop/{{$products->Image}}" alt="">
                                        <a href="{{url('/')}}/nelsononlineshop/{{$products->Image}}"
                                            class="popup-img venobox" data-gall="myGallery"><i
                                                class="fa fa-expand"></i></a>
                                    </div>
                                    @foreach($moreimg as $value)
                                    <div class="lg-image">
                                        <img src="{{url('/')}}/nelsononlineshop/{{$value}}" alt="">
                                        <a href="{{url('/')}}/nelsononlineshop/{{$value}}" class="popup-img venobox"
                                            data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                    </div>
                                    @endforeach
                                    {{-- <div class="lg-image">
                                        <img src="{{url('frontend/images/product-images')}}/{{$products->Image3}}"
                                    alt="">
                                    <a href="{{url('frontend/images/product-images')}}/{{$products->Image3}}"
                                        class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                <div class="lg-image">
                                    <img src="{{url('frontend/images/product-images')}}/{{$products->Image4}}" alt="">
                                    <a href="{{url('frontend/images/product-images')}}/{{$products->Image4}}"
                                        class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                <div class="lg-image">
                                    <img src="{{url('frontend/images/product-images')}}/{{$products->Image5}}" alt="">
                                    <a href="{{url('frontend/images/product-images')}}/{{$products->Image5}}"
                                        class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-details-thumbs">
                                <div class="sm-image">
                                    <img src="{{url('/')}}/nelsononlineshop/{{$products->Image}}" alt="">
                                </div>
                                @foreach($moreimg as $value)
                                <div class="sm-image"><img src="{{url('/')}}/nelsononlineshop/{{$value}}" alt="">
                                </div>
                                @endforeach
                                {{-- <div class="sm-image"><img
                                            src="{{url('frontend/images/product-images')}}/{{$products->Image3}}"
                                alt="">
                            </div>
                            <div class="sm-image"><img
                                    src="{{url('frontend/images/product-images')}}/{{$products->Image4}}" alt=""></div>
                            <div class="sm-image"><img
                                    src="{{url('frontend/images/product-images')}}/{{$products->Image5}}" alt=""></div>
                            --}}
                        </div>
                    </div>
                    <!--Product Details Left -->
                </div>
                <div class="col-md-6">
                    <!--Product Details Content Start-->
                    <div class="product-details-content">
                        <!--Product Nav Start-->
                        <div class="product-nav">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!--Product Nav End-->
                        <h2>{{$products->ProductName}}</h2>
                        @if((ceil($rating*2)/2) == 4.5)
                            <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" checked /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 5)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5" checked/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 4)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" checked /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 3)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" checked /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 2)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" checked /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 1)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" checked /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 3.5)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" checked /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 2.5)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" checked /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 1.5)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" checked /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 0.5)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" checked /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              @elseif((ceil($rating*2)/2) == 0)
                              <fieldset class="rating-star text-center pl-5 pb-5">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                        @endif
                        <label style="position: relative; top: -42px; left: 150px;" for="">({{$countcmt}} đánh giá)</label>

                        <div class="single-product-price">
                            @if($products->Date_sale >= $dtnow)
                            <span class="price new-price">{{number_format($products->Sale_price)}}đ</span>
                            <span class="regular-price">{{number_format($products->Price)}}đ</span>
                            @else
                            <span class="price new-price">{{number_format($products->Price)}}đ</span>
                            @endif
                        </div>
                        <div class="product-description">
                            <p>{!!$products->description!!}</p>
                        </div>
                        <div class="product-countdown-two" data-countdown2="{{$products->Date_sale}}"></div>

                        <div class="mau-kichthuoc">
                                <div style="margin-bottom: 27px;" id="mau" class="btn-group btn-group--colors btn-group-toggle" data-toggle="buttons">
                                    @foreach($mau as $key)
                                    @if($key == "Sáng xanh")
                                    <input class="light-blue">
                                    @elseif($key == "Nâu")
                                    <input class="brown">
                                    @elseif($key == "Đen")
                                    <input class="dark">
                                    @elseif($key == "Trắng sữa")
                                    <input class="light">
                                    @endif
                                    @endforeach
                                </div> 
                                <span style="position: relative; bottom: 10px; margin-left: 20px;">{{$products->size}}(inch)</span>
                        </div>

                        <div class="single-product-quantity">
                                <div class="product-quantity">
                                    <input value="1" type="number">
                                </div>
                                <div onclick="AddCart({{$products->Id}});" class="add-to-link">
                                    <button class="btn"><i class="fa fa-shopping-bag"></i>Thêm vào giỏ
                                        hàng</button>
                                </div>
                        </div>
                        <div class="wishlist-compare-btn">
                            <a href="#" class="wishlist-btn">Thêm vào yêu thích</a>
                            <a href="#" class="add-compare">So sánh</a>
                        </div>
                        <div class="product-meta">
                            <span class="posted-in">
                                Loại sản phẩm:
                                <a href="#">{{$products->productcategories->category_name}}</a>
                            </span>
                        </div>
                        <div class="single-product-sharing">
                            <h3>Chia sẻ</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Product Details Content End-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="product-description-review-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-review-tab section">
                    <!--Review And Description Tab Menu Start-->
                    <ul class="nav dec-and-review-menu">
                        <li>
                            <a data-toggle="tab" href="#reviews">Đánh giá ({{$countcmt}})</a>
                        </li>
                        <li>
                            <a class="active" data-toggle="tab" href="#description">Mô tả</a>
                        </li>

                    </ul>
                    <!--Review And Description Tab Menu End-->
                    <!--Review And Description Tab Content Start-->
                    <div class="tab-content product-review-content-tab" id="myTabContent-4">
                        <div class="tab-pane fade active show" id="description">


                            <div class="review-page-comment">
                                <h2>({{$countcmt}}) đánh giá cho {{$products->ProductName}}</h2>
                                <ul>
                                    <li>
                                        @foreach($comments as $item)
                                        <div class="product-comment">
                                            <img src="/frontend/images/nguoidung.jpg" style="width: 80px;" alt="">
                                            <div style="margin-left: 110px;" class="product-comment-content">
                                                @if($item->rating ==4)
                                                <div class="product-reviews">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                @elseif($item->rating ==3)
                                                <div class="product-reviews">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                @elseif($item->rating ==5)
                                                <div class="product-reviews">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                @elseif($item->rating ==2)
                                                <div class="product-reviews">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                @elseif($item->rating ==1)
                                                <div class="product-reviews">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div> 
                                                             @endif                  
                                                <p class="meta">
                                                    <strong>{{$item->name}}</strong> -
                                                    <span>{{$item->created_at}}</span>
                                                <div class="description">
                                                    <p>{{{$item->comment}}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </li>
                                </ul>
                                <div class="review-form-wrapper" style="margin-top: 50px;">
                                    <div class="review-form">
                                        <span style="font-weight: bold" class="comment-reply-title">Thêm đánh giá của bạn</span>
                                        <form id="sample_form" method="post">
                                            {{ csrf_field() }}
                                            <p class="comment-notes" style="margin: 30px 0px;">
                                                <span id="email-notes">Địa chỉ email của bạn sẽ không hiển thị</span>
                                            </p>
                                            <div style="margin: 30px 0px;" class="comment-form-rating">
                                                <label>Đánh giá của bạn</label>
                                                <div class="rating">
                                                    <input name="stars" value="5" id="e5" type="radio"></a><label for="e5">★</label>
                                                    <input name="stars" id="e4" value="4" type="radio"></a><label for="e4">★</label>
                                                    <input name="stars" id="e3"value="3" type="radio"></a><label for="e3">★</label>
                                                    <input name="stars" id="e2" value="2" type="radio"></a><label for="e2">★</label>
                                                    <input name="stars" id="e1" value="1" type="radio"></a><label for="e1">★</label>
                                                  </div>
                                            </div>
                                            <div class="input-element">
                                                <div class="comment-form-comment">
                                                    <label>Bình luận</label>
                                                    <textarea id="comment" name="comment" cols="40" rows="8"></textarea>
                                                </div>
                                                <div class="review-comment-form-author">
                                                    <label>Tên của bạn </label>
                                                    <input required name="name" id="name" required="required"
                                                        type="text">
                                                </div>
                                                <div class="review-comment-form-email">
                                                    <label>Email</label>
                                                    <input required name="email" id="email" required="required" value="<?php
                                                    $email = Session::get('Email');
                                                    if($email){
                                                        echo $email;
                                                    }
                                                    ?>"
                                                        type="email">
                                                </div>
                                                <input type="hidden" name="productid" id="productid"
                                                    value="{{$products->Id}}">

                                                <button onclick="AddCmt()" type="button"
                                                    class="btn btn-info">Thêm</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <div class="single-product-description">
                                <table class="table table-dotted table-extended table-header translation-table">
                                <tbody>
                                
                                
                                    <tr>
                                        <td>Chất liệu</td>
                                        <td>
                                            
                                                {{$products->material}}
                                            
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td>Loại sản phẩm</td>
                                        <td>
                                            
                                                {{$products->productcategories->category_name}}
                                            
                                        </td>
                                    </tr>
                                
                                    
                                
                                    <tr>
                                        <td>Màu sắc</td>
                                        <td>
                                            @foreach($mau as $key)
                                                {{$key}},
                                            @endforeach
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td>Chất liệu bọc</td>
                                        <td>
                                            
                                            {{$products->upholstery_material}}
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Kích thước</td>
                                        <td>
                                            
                                            {{$products->size}}
                                            
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td>Bảo hành</td>
                                        <td>
                                            
                                                2 năm
                                            
                                        </td>
                                    </tr>
                                
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <!--Review And Description Tab Content End-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection