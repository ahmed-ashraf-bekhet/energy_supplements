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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
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
          manager dashboard
        </div>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="">
              <i class="now-ui-icons design_app"></i>
              <p>Orders</p>
            </a>
          </li>
          <li class="">
            <a href="addProduct">
              <i class="now-ui-icons design_app"></i>
              <p>Add Product</p>
            </a>
          </li>
          {{-- <li>
            <a href="createReport">
              <i class="now-ui-icons education_atom"></i>
              <p>create report</p>
            </a>
          </li> --}}
          <li>
            <a href="/addCategory">
              <i class="now-ui-icons education_atom"></i>
              <p>add category</p>
            </a>
          </li>
          <li>
            <a href="/showProducts">
              <i class="now-ui-icons education_atom"></i>
              <p>Show Products</p>
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
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

  });
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

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-storage.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyAQwQXiivP3qDKM7lm1pYlRInHunqcg4UY",
    authDomain: "laravel-firebase-39c14.firebaseapp.com",
    databaseURL: "https://laravel-firebase-39c14.firebaseio.com",
    projectId: "laravel-firebase-39c14",
    storageBucket: "laravel-firebase-39c14.appspot.com",
    messagingSenderId: "120616917067",
    appId: "1:120616917067:web:6fc9f70da1d696c04ed5ce",
    measurementId: "G-P6LH5NL097"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);



  // Initialize Firebase
$('#fire').click(function(e)
{
//   e.preventDefault();
  console.log("fdjtwy")
  const file = document.getElementById('input_file').files[0];
  if (file!=null)
  {
  let storageRef = firebase.storage().ref();
  let fileRef = storageRef.child("online-shopping/"+file.name);


  fileRef.put(file).then(function(response){
    fileRef.getDownloadURL().then(function(url){
    var fireUrl=url;
    console.log(fireUrl)
    var input = document.createElement("input");

    input.setAttribute("type", "hidden");

    input.setAttribute("name", "fileURL");

    input.setAttribute("id", "fileURL");

    input.setAttribute("value", fireUrl);

    //append to form element that you want .
    document.getElementById("addForm").appendChild(input);
    document.getElementById("addForm").submit();

    console.log(fireUrl)
    // console.log($('#addForm').submit())

    $('#addForm').submit();

    });
  });


  }


});

</script>

</body>

</html>

