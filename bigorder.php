<?php

if(!isset($_COOKIE["bcoffee"])) {
    $coffee = 0;
} else {
    $coffee = $_COOKIE["bcoffee"];
}

if(!isset($_COOKIE["btea"])) {
    $tea = 0;
} else {
    $tea = $_COOKIE["btea"];
}

if(!isset($_COOKIE["bmilk"])) {
    $milk = 0;
} else {
    $milk = $_COOKIE["bmilk"];
}

if(!isset($_COOKIE["bsweet1"])) {
    $sweet1 = 0;
} else {
    $sweet1 = $_COOKIE["bsweet1"];
}

if(!isset($_COOKIE["bsweet2"])) {
    $sweet2 = 0;
} else {
    $sweet2 = $_COOKIE["bsweet2"];
}

if(!isset($_COOKIE["bsweet3"])) {
    $sweet3 = 0;
} else {
    $sweet3 = $_COOKIE["bsweet3"];
}

if(!isset($_COOKIE["bsweet4"])) {
    $sweet4 = 0;
} else {
    $sweet4 = $_COOKIE["bsweet4"];
}

if(!isset($_COOKIE["bsweet5"])) {
    $sweet5 = 0;
} else {
    $sweet5 = $_COOKIE["bsweet5"];
}

if(!isset($_COOKIE["bsnack1"])) {
    $snack1 = 0;
} else {
    $snack1 = $_COOKIE["bsnack1"];
}

if(!isset($_COOKIE["bsnack2"])) {
    $snack2 = 0;
} else {
    $snack2 = $_COOKIE["bsnack2"];
}

if(!isset($_COOKIE["bsnack3"])) {
    $snack3 = 0;
} else {
    $snack3 = $_COOKIE["bsnack3"];
}

if(!isset($_COOKIE["bsnack4"])) {
    $snack4 = 0;
} else {
    $snack4 = $_COOKIE["bsnack4"];
}

if(!isset($_COOKIE["bsnack5"])) {
    $snack5 = 0;
} else {
    $snack5 = $_COOKIE["bsnack5"];
}

if(!isset($_COOKIE["bsnack6"])) {
    $snack6 = 0;
} else {
    $snack6 = $_COOKIE["bsnack6"];
}

if(!isset($_COOKIE["bsnack7"])) {
    $snack7 = 0;
} else {
    $snack7 = $_COOKIE["bsnack7"];
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Madras Coffee House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel='stylesheet' href='./style.css' type='text/css' media='all' />

  <script type="text/javascript">
    


var today = new Date();
  var expiry = new Date(today.getTime() + 10 * 60 * 1000); // plus 10 minutes

  function setCookie(name, value)
  {
    document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }


function myFunction() {
  var coffee = parseInt(document.getElementById("coffee").value);
  var tea = parseInt(document.getElementById("tea").value);
  var milk = parseInt(document.getElementById("milk").value);
  var sweet1 = parseInt(document.getElementById("sweet1").value);
  var sweet2 = parseInt(document.getElementById("sweet2").value);
  var sweet3 = parseInt(document.getElementById("sweet3").value);
  var sweet4 = parseInt(document.getElementById("sweet4").value);
  var sweet5 = parseInt(document.getElementById("sweet5").value);
  var snack1 = parseInt(document.getElementById("snack1").value);
  var snack2 = parseInt(document.getElementById("snack2").value);
  var snack3 = parseInt(document.getElementById("snack3").value);
  var snack4 = parseInt(document.getElementById("snack4").value);
  var snack5 = parseInt(document.getElementById("snack5").value);
  var snack6 = parseInt(document.getElementById("snack6").value);
  var snack7 = parseInt(document.getElementById("snack7").value);
  
    var res = (sweet1 * 35) + (sweet2 * 30) + (sweet3 * 35) + (sweet4 * 35) + (sweet5 * 50) + (snack1 * 25) + (snack2 * 25) + (snack3 * 25) + (snack4 * 35) + (snack5 * 35) + (snack6 * 25) + (snack7 * 25) + (coffee * 25) + (tea * 25) + (milk * 25);
var result = coffee + tea + milk;
  var reslt =(sweet1 * 35) + (sweet2 * 30) + (sweet3 * 35) + (sweet4 * 35) + (sweet5 * 50) + (snack1 * 25) + (snack2 * 25) + (snack3 * 25) + (snack4 * 35) + (snack5 * 35) + (snack6 * 25) + (snack7 * 25);
   var bal = 625 - reslt;
  document.getElementById("cost").innerHTML = res;
  document.getElementById("balance").innerHTML = bal;
   if (bal > 0) {
  document.getElementById("more").style.display = "block";
  document.getElementById("mainmenu").style.display = "none";
  } else {
  document.getElementById("mainmenu").style.display = "block";
  document.getElementById("more").style.display = "none";
  }

   if((((milk >= 300)&&(coffee >= 300)&&(tea >= 300))||((milk >= 300)&&(coffee == 0)&&(tea == 0))||((milk == 0)&&(coffee >= 300)&&(tea == 0))||((milk == 0)&&(coffee == 0)&&(tea >= 300))||((milk >= 300)&&(coffee == 0)&&(tea >= 300))||((milk == 0)&&(coffee >= 300)&&(tea >= 300))||((milk >= 300)&&(coffee >= 300)&&(tea == 0)))&&(res>=7500)&&((bal <= 0)||(bal == 625)))
   {
  order.style.display = "block";
  } else {
  order.style.display = "none";    
  }
 /*if((((milk >= 300)&&(coffee >= 300)&&(tea >= 300))||((milk >= 300)&&(coffee == 0)&&(tea == 0))||((milk == 0)&&(coffee >= 300)&&(tea == 0))||((milk == 0)&&(coffee == 0)&&(tea >= 300))||((milk >= 300)&&(coffee == 0)&&(tea >= 300))||((milk == 0)&&(coffee >= 300)&&(tea >= 300))||((milk >= 300)&&(coffee >= 300)&&(tea == 0)))&&(res>=7500)&&&(bal <= 0)&&(bal = 625))
   {
  orders.style.display = "none";
  } else {
  orders.style.display = "block";    
  } */

  document.getElementById("cost").innerHTML = res;
  
    setCookie("brestotal", res);
    setCookie("bcoffee", coffee);
    setCookie("btea", tea);
    setCookie("bmilk", milk);
    setCookie("bsweet1", sweet1);
    setCookie("bsweet2", sweet2);
    setCookie("bsweet3", sweet3);
    setCookie("bsweet4", sweet4);
    setCookie("bsweet5", sweet5);
    setCookie("bsnack1", snack1);
    setCookie("bsnack2", snack2);
    setCookie("bsnack3", snack3);
    setCookie("bsnack4", snack4);
    setCookie("bsnack5", snack5);
    setCookie("bsnack6", snack6);
    setCookie("bsnack7", snack7);
  
    return true;



  
}



$('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });


  </script>



</head>



<body onload="myFunction()" >

<nav class="navbar navbar-default" style="background-color: #E31E24;">
  <div class="container-fluid">
    <div class="brand-centered">
      <a class="navbar-brand" href="#"><img style="margin-right: 10px; padding: 0;" src="./logo.png" alt="Madras Coffee House"></a>
    </div>

    <ul class="nav navbar-nav">
      <li><a href="#" onclick="history.go(-1)"><i class="fa fa-arrow-left"></i></a></li>
    </ul>
  </div>
</nav>

<form method="post">

<div class="wrapper center-block">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
          Main Menu
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <section class="menu">
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img src="./coffee.jpg" height="40px" width="40px"></th>
      <td>Coffee</td>
      <td>&#8377; 25</td>
      <td id="myinpc"><input type="number" class="form-control" min="300" id="coffee" onchange="myFunction()" value="<?php echo $coffee; ?>" name="coffee"></td>
    </tr>
    <tr>
      <th scope="row"><img src="./tea.jpg" height="40px" width="40px"></th>
      <td>Tea</td>
      <td>&#8377; 25</td>
      <td id="myinpt"><input type="number" class="form-control" min="300" id="tea" onchange="myFunction()" value="<?php echo $tea; ?>" name="tea"></td>
    </tr>
    <tr>
      <th scope="row"><img src="./milk.png" height="40px" width="40px"></th>
      <td>Milk</td>
      <td>&#8377; 25</td>
      <td id="myinpm"><input type="number" class="form-control" min="300" id="milk" onchange="myFunction()" value="<?php echo $milk; ?>" name="milk"></td>
    </tr>
  </tbody>
</table>
</div>
</section>
      </div>
    </div>
  </div>
  </br>
  
  <div class="alert alert-success" align="center" style="align:center">
    You can order Sweets and Snacks here.
  </div>
  </div>
 
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Snacks
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <section class="menu">
  <div class="container">
  <table class="table">
  <tbody>
     <tr>
      <th scope="row"><img src="Snacks/6.jpg" height="40px" width="40px"></th>
      <td>Puff</td>
      <td>&#8377; 25</td>
      <td id="myinpsw1" ><input type="number" class="form-control" min="0" id="snack1" onchange="myFunction()" value="<?php echo $snack1; ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Snacks/3.jpg" height="40px" width="40px"></th>
      <td>Aloo Samosa</td>
      <td>&#8377; 25</td>
      <td id="myinpsw1" ><input type="number" class="form-control" min="0" id="snack2" onchange="myFunction()" value="<?php echo $snack2; ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Snacks/1.jpg" height="40px" width="40px"></th>
      <td>Cocktail</td>
      <td>&#8377; 25</td>
      <td id="myinpsn3"><input type="number" class="form-control" min="0" id="snack3" onchange="myFunction()" value="<?php echo $snack3  ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Snacks/2.jpg" height="40px" width="40px"></th>
      <td>Sundal</td>
      <td>&#8377; 35</td>
      <td id="myinpsn4" ><input type="number" class="form-control" min="0" id="snack4" onchange="myFunction()" value="<?php echo $snack4  ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Snacks/7.jpg" height="40px" width="40px"></th>
      <td>Verkadalai</td>
      <td>&#8377; 35</td>
      <td id="myinpsn5" ><input type="number" class="form-control" min="0" id="snack5" onchange="myFunction()" value="<?php echo $snack5  ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Snacks/4.jpg" height="40px" width="40px"></th>
      <td>MCH Cookies</td>
      <td>&#8377; 25</td>
      <td id="myinpsn6"><input type="number" class="form-control" min="0" id="snack6" onchange="myFunction()" value="<?php echo $snack6  ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Snacks/5.jpg" height="40px" width="40px"></th>
      <td>Mixture</td>
      <td>&#8377; 25</td>
      <td id="myinpsn7"><input type="number" class="form-control" min="0" id="snack7" onchange="myFunction()" value="<?php echo $snack7  ?>" name="qty"></td>
    </tr>
  </tbody>
</table>
</div>
</section>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Sweets
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <section class="menu">
  <div class="container">
  <table class="table">
  <tbody>
    <tr>
      <th scope="row"><img src="Sweets/Milk kova.jpeg" height="40px" width="40px"></th>
      <td>Paalkova</td>
      <td>&#8377; 35</td>
      <td id="myinpsw1" ><input type="number" class="form-control" min="0" id="sweet1" onchange="myFunction()" value="<?php echo $sweet1  ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Sweets/Kaju Katli.gif" height="40px" width="40px"></th>
      <td>Kaju Katli</td>
      <td>&#8377; 30</td>
      <td id="myinpsw2" ><input type="number" class="form-control" min="0" id="sweet2" onchange="myFunction()" value="<?php echo $sweet2  ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Sweets/Gulab Jamun.jpg" height="40px" width="40px"></th>
      <td>Gulab Jamun</td>
      <td>&#8377; 35</td>
      <td id="myinpsw3"><input type="number" class="form-control" min="0" id="sweet3" onchange="myFunction()" value="<?php echo $sweet3  ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Cake/Brownie.jpg" height="40px" width="40px"></th>
      <td>Cake</td>
      <td>&#8377; 35</td>
      <td id="myinpsw4"><input type="number" class="form-control" min="0" id="sweet4" onchange="myFunction()" value="<?php echo $sweet4  ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="Cake/Brownie.jpg" height="40px" width="40px"></th>
      <td>Brownnie</td>
      <td>&#8377; 50</td>
      <td id="myinpsw5" ><input type="number" class="form-control" min="0" id="sweet5" onchange="myFunction()" value="<?php echo $sweet5  ?>" name="qty"></td>
    </tr>
  </tbody>
</table>
</div>
</section>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer" class="container footter">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
       <h3 id="more">Add <span style="color: red;font-weight: 800;">&#8377;<span id="balance">625</span></span>  More to Order  </h3>
       <h3 id="mainmenu" style="display: none;">Main Menu</h3>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <h3 style="color: red;font-weight: 800;"> &#8377; <span id="cost">0</span>  </h3>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <h3><a type="button" href="contact.html" class="btn btn-danger" id="order" style="width: 100px;" type="submit" >Order Now</a></h3>
      </div> 
  </div>
</div>
</form>
</body>
</html>