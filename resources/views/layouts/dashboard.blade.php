<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta charset="UTF-8">
  <meta name="description" content="Energy Supplements Template">
  <meta name="keywords" content="PONIGYM, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Energy</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<style type="text/css">
    @media (min-width: 992px){
        .dropdown-menu .dropdown-toggle:after{
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid;
        }
        .dropdown-menu .dropdown-menu{
            margin-left:0; margin-right: 0;
        }
        .dropdown-menu li{
            position: relative;
        }
        .nav-item .submenu{
            display: none;
            position: absolute;
            left:100%; top:-7px;
        }
        .nav-item .submenu-left{
            right:100%; left:auto;
        }
        .dropdown-menu > li:hover{ background-color: #f1f1f1 }
        .dropdown-menu > li:hover > .submenu{
            display: block;
        }
    }
</style>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <div class="simple-text logo-mini">
          admin dashboard
        </div>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="/addOrder">
              <i class="now-ui-icons design_app"></i>
              <p>Add Order</p>
            </a>
          </li>
          <li>
            <a href="/createReport">
              <i class="now-ui-icons education_atom"></i>
              <p>create report</p>
            </a>
          </li>
          <li>
            <a href="/adminOrders">
              <i class="now-ui-icons education_atom"></i>
              <p>My orders</p>
            </a>
          </li>
          <li>
            <a href="/logout">
              <i class="now-ui-icons education_atom"></i>
              <p>LOGOUT</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    @yield('content')
</div>


  <!-- Modal -->
  <div class="modal fade" id="orderDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Total Cost</th>
                    <th scope="col">Total Net</th>
                  </tr>
                </thead>
                <tbody id="modal_table">

                </tbody>
              </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>

<script>
    var products = []
    var total_price = 0
    var total_cost = 0
    var total_net = 0
    $('#addProduct').click(function(){
        console.log(products)
        // $('#total_price').val()=0
        // $('#quantity').val()=0
        // return
        $.ajax({
            url:`/api/get_cost/${$('#products').val()}`,
            type:'GET',
            dataType:'json',
            success: function(data){
            products.push({
              product_id: $('#products').val(),
              quantity: $('#quantity').val(),
              total_price: $('#total_price').val(),
              total_cost: data * $('#quantity').val(),
              total_net: $('#total_price').val() - (data * $('#quantity').val()),
            });
            total_price += parseInt($('#total_price').val());
            total_cost += parseInt(data * $('#quantity').val());
            console.log(products)
            alert("تمت اضافة هذا المنتج بنجاح .. اضف غيره او اغلق هذه النافذة ونفذ الطلب")
            $('#products').val('empty')
            $('#total_price').val("")
            $('#quantity').val("")
            },
            error:function(x,y,z){
                console.log('error')
            }
            });
    })

    $("#purchase").click(function(){
        console.log("ds")
        console.log(products)
        total_net = parseInt(total_price - total_cost);
        console.log(total_price)
        console.log(total_cost)
        console.log(total_net)
        var pill = {
          "total_price" : total_price,
          "total_cost" : total_cost,
          "total_net" : total_net,
          "branch_id" : $('#branch_id').val(),
          "products" : products
        }
    $.ajax({
      url:'api/purchase',
      type:'POST',
      dataType:'json',
      data:pill,
      success: function(data){
          console.log(data)
          console.log("ds")
          alert('عملية ناجحة')
          location.reload()
        },
        error:function(x,y,z){
            console.log('error')
            alert('عملية فاشلة .. املا تفاصيل الطلب ولا تضع سعر بيع المنتج اقل من تكلفته');
            location.reload()
        }
    });
    })
</script>

<script>
    $('#details').on('click','button',function() {
        console.log($(this).data('id'))
        var id = $(this).data('id')
        console.log(id)
        $.ajax({
          url:`api/order_details/${id}`,
          type:'GET',
          dataType:'json',
          success: function(data){
                console.log(data)
                $('#modal_table').html("")
                data.forEach(element => {
                    $('#modal_table').append("<tr><th>"+element.product.name+"</th><td>"+element.quantity+"</td><td>"+element.total_price+"</td><td>"+element.total_cost+"</td><td>"+element.total_net_profit+"</td></tr>");

                });
            },
            error:function(x,y,z){
                console.log('error')
            }
        });
    });

</script>


</body>

</html>

