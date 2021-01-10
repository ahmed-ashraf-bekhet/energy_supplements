

<!doctype html>
<html lang="en">

<head>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('css2/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{asset('css2/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css2/autoComplete.css')}}" rel='stylesheet' type='text/css' />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
    <!-- js -->
    <script src="{{asset('js2/jquery-1.11.1.min.js')}}"></script>
    <!-- //js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('js2/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js2/easing.js')}}"></script>
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
          event.preventDefault();
          $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
        });
      });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="{{asset('css2/font-awesome.css')}}" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->
  <link rel="stylesheet" href="{{asset('css2/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript"></script>
    <!---//End-rate---->


  <meta charset="UTF-8">
  <meta name="description" content="PONIGYM Template">
  <meta name="keywords" content="PONIGYM, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Energy</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricss2on, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //for-mobile-apps -->
  <link href="{{asset('css2/bootstrap.css')}}" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <link href="{{asset('css2/style.css')}}" rel='stylesheet' type='text/css' />
  <link href="{{asset('css2/autoComplete.css')}}" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css2/bootstrap.min.css2">
  <!-- js2 -->
  <script src="{{asset('js2/jquery-1.11.1.min.js')}}"></script>
  <!-- //js2 -->
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="{{asset('js2/move-top.js')}}"></script>
  <script type="text/javascript" src="{{asset('js2/easing.js')}}"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
      });
    });
  </script>
  <!-- start-smoth-scrolling -->
  <link href="{{asset('css2/font-awesome.css')}}" rel="stylesheet">
  <link href='//fonts2.googleapis.com/css2?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='//fonts2.googleapis.com/css2?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
  <!--- start-rate---->
<link rel="stylesheet" href="{{asset('css2/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
  <script type="text/javascript"></script>
  <!---//End-rate---->

</head>
<body>
        <!-- Header Section Begin -->
        <header class="header-section header-normal">
            <div class="container">
                <div class="logo">
                    <a href="./index.html">
                        {{-- <img src="img/logo-normal.png" alt=""> --}}
                    </a>
                </div>
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <ul>
                                <li><a                        href="/              ">Home</a></li>
                                <li class="active"><a         href="/products      ">Go Shopping</a></li>
                                <li><a                        href="/about         ">About</a></li>
                                <li><a                        href="/login         ">Login</a></li>
                                <li><a                        href="/register      ">Register</a></li>
                                @auth
                                    <li><a                    href="/logout        ">Logout</a>  </li>
                                @endauth
                            </ul>
                        </ul>
                    </nav>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </header>
        <!-- Header End -->


    <!-- Site Breadcrumb Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/about-breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-text">
                        <h2>Make a Shopping in Our Market</h2>
                        <div class="site-breadcrumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site Breadcrumb End -->

        <div class="container">
                <div class="cart">
                    <div class="cart" >

						<span class="fa fa-shopping-cart my-cart-icon">
                            <span class="badge badge-notify my-cart-badge" id="selected_num">
                                8
                            </span>
                        </span>

					</div>
                    <div class="clearfix"></div>
                    <script>
                        localStorage.user_id = $("#user_id").text()
                    </script>
                </div>
                <div class="clearfix"></div>

        </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

<!--content-->
<div class="content-top ">
    <div class="container ">
        <div class="tab-head ">
            <div class=" tab-content tab-content-t ">
                <div class="tab-pane active text-style" id="tab1">
                    <div class=" con-w3l">
                        @foreach ($products as $product)
                            <div class="col-md-4 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                    <img src="{{$product->image}}" id="image" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                        <h4><a href="#">{{$product->category->name}}</a></h4>
                                        <h3><a href="#">{{$product->name}}</a></h3>
                                        </div>
                                        <div class="mid-2">
                                        <p><em class="item_price">{{$product->price}} L.E.</em><br>
                                        <em class="item_price">Available Now <b>{{$product->quantity}}</> Unit</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="d-flex">
                                    <div class="add">

                                            <div class="add-to">
                                                <button class="btn btn-danger my-cart-btn my-cart-b"
                                                        data-id="{{$product->id}}" data-name="{{$product->name}}"
                                                        data-summary="{{$product->description}}" data-price="{{$product->price}}"
                                                        data-quantity="1" data-image="{{$product->image}}" data-cost="{{$product->cost}}">
                                                        Add to Cart
                                                </button>
                                            </div>
                                    </div>
                                        </div>
                                        </div>

                                        </div>
                                </div>
                            </div>
                        @endforeach


                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>

<br><br><br><br><br>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33245.297803635964!2d-73.76987401620775!3d40.704774398815005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1575866843291!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe>
                        <div class="map-widget">
                            <i class="fa fa-map-marker"></i>
                            <div class="map-address">
                                <img src="img/map-location.jpg" alt="">
                                <ul class="map-text">
                                    <li><span>Address:</span> Iris Watson, Box 283, NY</li>
                                    <li><span>Phone:</span> 12-456-791</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-form set-bg" data-setbg="img/contact-form-bg.jpg">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="section-title">
                                    <h2>Request A Call Back</h2>
                                    <p>Shape your body and burn fat with strength training. With the right equipment
                                        such as free weights or resistance machines.</p>
                                </div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Email">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" placeholder="Subject">
                                            <textarea placeholder="Message"></textarea>
                                            <button type="submit">Submit <i class="ti-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="register normal-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="footer-widget">
                            <ul>
                                <li class="active">Privacy Policy</li>
                                <li>Terms Of Service</li>
                                <li>Careers</li>
                            </ul>
                        </div>
                        <div class="footer-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @auth
            <input id="customer_id" type="text" value="{{Auth::User()->id}}">
        @endauth
        @guest
            <input id="customer_id" type="text" value="0">
        @endguest
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
	<div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->




<script>
    var images = document.querySelectorAll("#image")
    var modalBody = document.querySelector("#modalBody")
    images.forEach(element => {
        element.addEventListener('click',function(){
            console.log('touched')
            console.log(this.getAttribute('data-name'))
            $("#modalBody").html(
            	'<div class="col-md-5 span-2">'+
						'<div class="item">'+
                            '<img src="'+this.getAttribute('src')+'" class="img-responsive" alt="">'+
                        '</div>'+
				'</div>'+
				'<div class="col-md-7 span-1 ">'+
					'<h3>'+this.getAttribute('data-name')+'</h3>'+
					'<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>'+
					'<div class="price_single">'+
					'<span class="reducedfrom ">'+this.getAttribute('data-price')+'$</span>'+

					'<div class="clearfix"></div>'+
					'</div>'+
					'<h4 class="quick">Quick Overview:</h4>'+
					'<p class="quick_desc">'+this.getAttribute('data-summary')+'</p>'+
                    '<div class="form-group row">'+
                    '<label for="inputPassword" class="col-sm-12 col-form-label">Quantity</label>'+
                    '<div class="col-sm-3"></div>'+
                    '<div class="col-sm-6">'+
                    '<input id="quantity" type="number" class="form-control" id="quantity">'+
                    '</div>'+
                    '</div>'+
                    '<div class="add-to">'+
						'<button id="modal_image" class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="'+this.getAttribute('data-id')+'" data-name="'+this.getAttribute('data-name')+'" data-summary="'+this.getAttribute('data-summary')+'" data-price="'+this.getAttribute('data-price')+'" data-quantity="1" data-image="'+this.getAttribute('src')+'">Add to Cart</button>'+
					'</div>'+
				'</div>'+
                '<div class="clearfix"> </div>'
            )
        })
    });

    $(document).on('click', '#modal_image', function() {
        var Arr = ["ds","sda"]
        Arr.push("ads")
        var prodArr = []
        if(localStorage.products.length != 0){
            prodArr = JSON.parse(localStorage.products)
        }
        console.log(this)
        console.log(prodArr)
        prodArr.push({
            id: this.getAttribute('data-id'),
            name: this.getAttribute('data-name'),
            summary: this.getAttribute('data-summary'),
            price: this.getAttribute('data-price'),
            quantity: $('#quantity').val(),
            image: this.getAttribute('data-image')
        });
        localStorage.products = JSON.stringify(prodArr)
        $("#my-cart-modal").modal("hide")
        alert("You Added This Product To Your Cart Successfully")
        location.reload()
    });
</script>

{{-- <script>
    var modal_image = document.querySelector("#modal_image")
    modal_image.addEventListener('click',function(){
        console.log("das")
        console.log(this.getAttribute('data-name'))
    })
</script> --}}

<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
    /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
    */
    $().UItoTop({ easingType: 'easeOutQuart' });
    });

</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
<!-- //for bootstrap working -->
{{-- <script type='text/javascript' src="js2/jquery.mycart.js2"></script> --}}

{{-- <script type='text/javascript' src="{{ asset('js2/jquery.mycart.js2') }}"></script> --}}
<script type="text/javascript">
$(function () {

  var goToCartIcon = function($addTocartBtn){
    var $cartIcon = $(".my-cart-icon");
    console.log($cartIcon)
    var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
    $addTocartBtn.prepend($image);
    var position = $cartIcon.position();
    $image.animate({
      top: position.top,
      left: position.left
    }, 500 , "linear", function() {
      $image.remove();
    });
  }

  $('.my-cart-btn').myCart({
    classCartIcon: 'my-cart-icon',
    classCartBadge: 'my-cart-badge',
    affixCartIcon: true,
    checkoutCart: function(products) {
      $.each(products, function(){
        console.log(this);
        console.log("sad");
      });
    },
    clickOnAddToCart: function($addTocart){
        console.log("hello")
      goToCartIcon($addTocart);
    },
    getDiscountPrice: function(products) {
      var total = 0;
      $.each(products, function(){
        total += this.quantity * this.price;
      });
      return total * 1;
    }
  });

});
</script>


{{-- <script src="{{asset('js2/autoComplete.js2')}}"></script> --}}

<script>
    function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
  }

  /*An array containing all the country names in the world:*/
  /*An array containing all the country names in the world:*/
  var products = [];
  var product_names = [];
  var flag = false

  $("#searchBtn").click(function(){
    products.forEach(element => {
        if(element['name']==$("#myInput").val()){
            flag=true
            $("#modalBody").html(
            	'<div class="col-md-5 span-2">'+
						'<div class="item">'+
                            '<img src="images/'+element['image']+'" class="img-responsive" alt="">'+
                        '</div>'+
				'</div>'+
				'<div class="col-md-7 span-1 ">'+
					'<h3>'+element['name']+'</h3>'+
					'<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>'+
					'<div class="price_single">'+
					'<span class="reducedfrom ">'+element['salary']+'$</span>'+

					'<div class="clearfix"></div>'+
					'</div>'+
					'<h4 class="quick">Quick Overview:</h4>'+
					'<p class="quick_desc">'+element['description']+'</p>'+
                    '<div class="form-group row">'+
                    '<label for="inputPassword" class="col-sm-12 col-form-label">Quantity</label>'+
                    '<div class="col-sm-3"></div>'+
                    '<div class="col-sm-6">'+
                    '<input id="quantity" type="number" class="form-control" id="quantity">'+
                    '</div>'+
                    '</div>'+
                    '<div class="add-to">'+
						'<button id="modal_image" class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="'+element['id']+'" data-name="'+element['name']+'" data-summary="'+element['description']+'" data-price="'+element['salary']+'" data-quantity="1" data-image="images/ab.jpg">Add to Cart</button>'+
					'</div>'+
				'</div>'+
                '<div class="clearfix"> </div>'
            )
        }
    });
    if(flag==false){
        $("#modalBody").html(
            '<div class="row">'+
                '<h4 class="text-primary">Product you search not exist , Please choose one of shown items in search list . </h4>'+
            '</div>'+
            '<div class="row">' +
            '<button type="button" class="btn btn-warning center-block" data-dismiss="modal">Close</button>'+
            '</div>'+
            '<div class="clearfix"> </div>'
        )
    }
  })


  autocomplete(document.getElementById("myInput"), product_names);
</script>

<script>
    (function ($) {

"use strict";

var OptionManager = (function () {
  var objToReturn = {};

  var defaultOptions = {
    classCartIcon: 'my-cart-icon',
    classCartBadge: 'my-cart-badge',
    classProductQuantity: 'my-product-quantity',
    classProductRemove: 'my-product-remove',
    classCheckoutCart: 'my-cart-checkout',
    affixCartIcon: true,
    showCheckoutModal: true,
    clickOnAddToCart: function($addTocart) {},
    clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) { },
    checkoutCart: function(products, totalPrice, totalQuantity) { },
    getDiscountPrice: function(products, totalPrice, totalQuantity) { return null; }
  };


  var getOptions = function (customOptions) {
    var options = $.extend({}, defaultOptions);
    if (typeof customOptions === 'object') {
      $.extend(options, customOptions);
    }
    return options;
  }

  objToReturn.getOptions = getOptions;
  return objToReturn;
}());


var ProductManager = (function(){
  var objToReturn = {};

  /*
  PRIVATE
  */
  localStorage.products = localStorage.products ? localStorage.products : "";
  var getIndexOfProduct = function(id){
    var productIndex = -1;
    var products = getAllProducts();
    $.each(products, function(index, value){
      if(value.id == id){
        productIndex = index;
        return;
      }
    });
    return productIndex;
  }
  var setAllProducts = function(products){
    localStorage.products = JSON.stringify(products);
  }
  var addProduct = function(id, name, summary, price, quantity, image, cost) {
    console.log("we")
    // var products = getAllProducts();
    products.push({
      id: id,
      name: name,
      summary: summary,
      price: price,
      cost: cost,
      quantity: quantity,
      image: image
    });
    console.log("haaa")
    console.log(products)
    setAllProducts(products);
  }

  /*
  PUBLIC
  */
  var getAllProducts = function(){
    try {
      var products = JSON.parse(localStorage.products);
      return products;
    } catch (e) {
      return [];
    }
  }
  var updatePoduct = function(id, quantity) {
    var productIndex = getIndexOfProduct(id);
    if(productIndex < 0){
      return false;
    }
    var products = getAllProducts();
    products[productIndex].quantity = typeof quantity === "undefined" ? products[productIndex].quantity * 1 + 1 : quantity;
    setAllProducts(products);
    return true;
  }
  var setProduct = function(id, name, summary, price, quantity, image ,cost) {
    if(typeof id === "undefined"){
      console.error("id required")
      return false;
    }
    if(typeof name === "undefined"){
      console.error("name required")
      return false;
    }
    if(typeof image === "undefined"){
      console.error("image required")
      return false;
    }
    if(!$.isNumeric(price)){
      console.error("price is not a number")
      return false;
    }
    if(!$.isNumeric(quantity)) {
      console.error("quantity is not a number");
      return false;
    }
    summary = typeof summary === "undefined" ? "" : summary;

    if(!updatePoduct(id)){
      addProduct(id, name, summary, price, quantity, image ,cost);
    }
  }
  var clearProduct = function(){
    setAllProducts([]);
  }
  var removeProduct = function(id){
    var products = getAllProducts();
    products = $.grep(products, function(value, index) {
      return value.id != id;
    });
    setAllProducts(products);
  }
  var getTotalQuantity = function(){
    var total = 0;
    var products = getAllProducts();
    $.each(products, function(index, value){
      total += value.quantity * 1;
    });
    return total;
  }
  var getTotalPrice = function(){
    var products = getAllProducts();
    var total = 0;
    $.each(products, function(index, value){
      total += value.quantity * value.price;
    });
    return total;
  }

  objToReturn.getAllProducts = getAllProducts;
  objToReturn.updatePoduct = updatePoduct;
  objToReturn.setProduct = setProduct;
  objToReturn.clearProduct = clearProduct;
  objToReturn.removeProduct = removeProduct;
  objToReturn.getTotalQuantity = getTotalQuantity;
  objToReturn.getTotalPrice = getTotalPrice;
  return objToReturn;
}());


var loadMyCartEvent = function(userOptions){

  var options = OptionManager.getOptions(userOptions);
  var $cartIcon = $("." + options.classCartIcon);
  var $cartBadge = $("." + options.classCartBadge);
  var classProductQuantity = options.classProductQuantity;
  var classProductRemove = options.classProductRemove;
  var classCheckoutCart = options.classCheckoutCart;

  var idCartModal = 'my-cart-modal';
  var idCartTable = 'my-cart-table';
  var idGrandTotal = 'my-cart-grand-total';
  var idEmptyCartMessage = 'my-cart-empty-message';
  var idDiscountPrice = 'my-cart-discount-price';
  var classProductTotal = 'my-product-total';
  var classAffixMyCartIcon = 'my-cart-icon-affix';

  $cartBadge.text(ProductManager.getTotalQuantity());

  if(!$("#" + idCartModal).length) {
    $('body').append(
      '<div class="modal fade" id="' + idCartModal + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
      '<div class="modal-dialog" role="document">' +
      '<div class="modal-content">' +
      '<div class="modal-header">' +
      '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
      '</div>' +
      '<div class="modal-body">' +
      '<table class="table table-hover table-responsive" id="' + idCartTable + '"></table>' +
      '</div>' +
      '<div class="modal-footer">' +
      '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
      '<button type="button" class="btn btn-warning" id="purchase">Purchase</button>' +
      '</div>' +
      '</div>' +
      '</div>' +
      '</div>'
    );
  }

  $("#purchase").click(function(){
    // alert("thanks");
    // var product_total = 0
    var total = 0
    var total_cost = 0
    var total_net = 0
    var products = localStorage.products
    console.log(products)
    $.each(JSON.parse(products), function(){
      var product_total = this.quantity * this.price;
      var product_total_cost = this.quantity * this.cost;
      var product_total_net = this.quantity * (this.price - this.cost);
      console.log(this.id)
      total += product_total
      total_cost += product_total_cost
      total_net += product_total_net
    });
    console.log(total)
    console.log(total_cost)
    console.log(total_net)
    if(total == 0){
      alert("No products Selected !")
      return
    }
    var pros = new Array();
    pros = products;
    console.log("asd "+pros)
    var pill = {
      "total_price" : total,
      "total_cost" : total_cost,
      "total_net" : total_net,
      "branch_id" : null,
      "customer_id" : $('#customer_id').val(),
      "products" : pros
    }
    console.log(products)
    $.ajax({
      url:'/api/purchase',
      type:'POST',
      dataType:'json',
      data:pill,
      success: function(data){
          console.log(data)
          localStorage.products = []
          $("#my-cart-modal").modal("hide")
          alert('شكرا طلبك تم بنجاح .. سنتواصل معك الان ونرسله اليك خلال دقائق')
          location.reload()
      },
      error:function(x,y,z){
        localStorage.products = []

          console.log('error')
          alert('نعتذر لك عملية فاشلة .. اعد ارسال طلبك او تواصل معنا');
      }
    });
  });


  var drawTable = function(){
    var $cartTable = $("#" + idCartTable);
    $cartTable.empty();

    var products = ProductManager.getAllProducts();
    $.each(products, function(){
      var total = this.quantity * this.price;
      $cartTable.append(
        '<tr title="' + this.summary + '" data-id="' + this.id + '" data-price="' + this.price + '">' +
        '<td class="text-center" style="width: 300px;"><img width="30px" height="30px" src="' + this.image + '"/></td>' +
        '<td>' + this.name + '</td>' +
        '<td title="Unit Price">$' + this.price + '</td>' +
        '<td title="Quantity"><input type="number" min="1" style="width: 70px;" class="' + classProductQuantity + '" value="' + this.quantity + '"/></td>' +
        '<td title="Total" class="' + classProductTotal + '">$' + total + '</td>' +
        '<td title="Remove from Cart" class="text-center" style="width: 30px;"><a href="javascript:void(0);" class="btn btn-xs btn-danger ' + classProductRemove + '">X</a></td>' +
        '</tr>'
      );
    });

    $cartTable.append(products.length ?
      '<tr>' +
      '<td></td>' +
      '<td><strong>Total</strong></td>' +
      '<td></td>' +
      '<td></td>' +
      '<td><strong id="' + idGrandTotal + '">$</strong></td>' +
      '<td></td>' +
      '</tr>'
      : '<div class="alert alert-danger" role="alert" id="' + idEmptyCartMessage + '">Your cart is empty</div>'
    );

    var discountPrice = options.getDiscountPrice(products, ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
    if(products.length && discountPrice !== null) {
      $cartTable.append(
        '<tr style="color: red">' +
        '<td></td>' +
        '<td><strong>Total (including discount)</strong></td>' +
        '<td></td>' +
        '<td></td>' +
        '<td><strong id="' + idDiscountPrice + '">$</strong></td>' +
        '<td></td>' +
        '</tr>'
      );
    }

    showGrandTotal();
    showDiscountPrice();
  }
  var showModal = function(){
    drawTable();
    $("#" + idCartModal).modal('show');
  }
  var updateCart = function(){
    $.each($("." + classProductQuantity), function(){
      var id = $(this).closest("tr").data("id");
      ProductManager.updatePoduct(id, $(this).val());
    });
  }
  var showGrandTotal = function(){
    $("#" + idGrandTotal).text("$" + ProductManager.getTotalPrice());
  }
  var showDiscountPrice = function(){
    $("#" + idDiscountPrice).text("$" + options.getDiscountPrice(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity()));
  }

  /*
  EVENT
  */
  if(options.affixCartIcon) {
    var cartIconBottom = $cartIcon.offset().top * 1 + $cartIcon.css("height").match(/\d+/) * 1;
    var cartIconPosition = $cartIcon.css('position');
    $(window).scroll(function () {
      if ($(window).scrollTop() >= cartIconBottom) {
        $cartIcon.css('position', 'fixed').css('z-index', '999').addClass(classAffixMyCartIcon);
      } else {
        $cartIcon.css('position', cartIconPosition).css('background-color', 'inherit').removeClass(classAffixMyCartIcon);
      }
    });
  }

  $cartIcon.click(function(){
    options.showCheckoutModal ? showModal() : options.clickOnCartIcon($cartIcon, ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
  });

  $(document).on("input", "." + classProductQuantity, function () {
    var price = $(this).closest("tr").data("price");
    var id = $(this).closest("tr").data("id");
    var quantity = $(this).val();

    $(this).parent("td").next("." + classProductTotal).text("$" + price * quantity);
    ProductManager.updatePoduct(id, quantity);

    $cartBadge.text(ProductManager.getTotalQuantity());
    showGrandTotal();
    showDiscountPrice();
  });

  $(document).on('keypress', "." + classProductQuantity, function(evt){
    if(evt.keyCode == 38 || evt.keyCode == 40){
      return ;
    }
    evt.preventDefault();
  });

  $(document).on('click', "." + classProductRemove, function(){
    var $tr = $(this).closest("tr");
    var id = $tr.data("id");
    $tr.hide(500, function(){
      ProductManager.removeProduct(id);
      drawTable();
      $cartBadge.text(ProductManager.getTotalQuantity());
    });
  });

  $("." + classCheckoutCart).click(function(){
    var products = ProductManager.getAllProducts();
    if(!products.length) {
      $("#" + idEmptyCartMessage).fadeTo('fast', 0.5).fadeTo('fast', 1.0);
      return ;
    }
    updateCart();
    options.checkoutCart(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
    ProductManager.clearProduct();
    $cartBadge.text(ProductManager.getTotalQuantity());
    $("#" + idCartModal).modal("hide");
  });

}


var MyCart = function (target, userOptions) {
  /*
  PRIVATE
  */
  var $target = $(target);
  var options = OptionManager.getOptions(userOptions);
  var $cartIcon = $("." + options.classCartIcon);
  var $cartBadge = $("." + options.classCartBadge);

  /*
  EVENT
  */
  $target.click(function(){
      console.log($('#customer_id').val())
      if ($('#customer_id').val()==0) {
          alert("من فضلك قم بتسجيل الدخول او انشاء حساب اولا ثم استكمل شراء منتجاتنا")
          window.location.href = "/login"
      }
    options.clickOnAddToCart($target);

    var id = $target.data('id');
    var name = $target.data('name');
    var summary = $target.data('summary');
    var price = $target.data('price');
    var cost = $target.data('cost');
    var quantity = $target.data('quantity');
    var image = $target.data('image');
    console.log("dskn")
    ProductManager.setProduct(id, name, summary, price, quantity, image ,cost);
    $cartBadge.text(ProductManager.getTotalQuantity());
  });

}


$.fn.myCart = function (userOptions) {
  loadMyCartEvent(userOptions);
  return $.each(this, function () {
    new MyCart(this, userOptions);
  });
}


})(jQuery);

</script>

<script src="{{asset('js2/bootstrap.js')}}"></script>
<script src="{{asset('js2/popper.js')}}"></script>
<!-- Js Plugins -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>
