if('serviceWorker' in navigator){
  navigator.serviceWorker.register('./sw.js')
  .then((reg) => console.log('service worker registered', reg))
  .catch((err) => console.log('service worker not registered', err));
}







function Functionc() {
  var x = document.getElementById("myinpc");
  var y = document.getElementById("myinc");
  var z = document.getElementById("footer");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "block";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}

function Functiont() {
  var a = document.getElementById("myinpt");
  var b = document.getElementById("myint");
  var c = document.getElementById("footer");
  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
    c.style.display = "block";
  } else {
    a.style.display = "none";
    b.style.display = "block";
  }  
}

function Functionm() {
  var p = document.getElementById("myinpm");
  var q = document.getElementById("myinm");
  var r = document.getElementById("footer");
  if (p.style.display === "none") {
    p.style.display = "block";
    q.style.display = "none";
    r.style.display = "block";
  } else {
    p.style.display = "none";
    q.style.display = "block";
  }
}

function myFunction() {
  var coffee = parseInt(document.getElementById("coffee").value);
  var tea = parseInt(document.getElementById("tea").value);
  var milk = parseInt(document.getElementById("milk").value);
  var res = coffee + tea + milk;
  var result = res * 25;
  document.getElementById("cost").innerHTML = result;
  setCookie("coffee", coffee);
    setCookie("tea", tea);
    setCookie("milk", milk);
    return true;
}


function Functionsw1() {
  var x = document.getElementById("myinpsw1");
  var y = document.getElementById("myinsw1");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}

function Functionsw2() {
  var a = document.getElementById("myinpsw2");
  var b = document.getElementById("myinsw2");
  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
  } else {
    a.style.display = "none";
    b.style.display = "block";
  }  
}

function Functionsw3() {
  var p = document.getElementById("myinpsw3");
  var q = document.getElementById("myinsw3");
  if (p.style.display === "none") {
    p.style.display = "block";
    q.style.display = "none";
  } else {
    p.style.display = "none";
    q.style.display = "block";
  }
}

function Functionsn1() {
  var x = document.getElementById("myinpsn1");
  var y = document.getElementById("myinsn1");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}

function Functionsn2() {
  var a = document.getElementById("myinpsn2");
  var b = document.getElementById("myinsn2");
  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
  } else {
    a.style.display = "none";
    b.style.display = "block";
  }  
}

function Functionsn3() {
  var p = document.getElementById("myinpsn3");
  var q = document.getElementById("myinsn3");
  if (p.style.display === "none") {
    p.style.display = "block";
    q.style.display = "none";
  } else {
    p.style.display = "none";
    q.style.display = "block";
  }
}

function myFunctionsnack() {
  var sweet1 = parseInt(document.getElementById("sweet1").value);
  var sweet2 = parseInt(document.getElementById("sweet2").value);
  var sweet3 = parseInt(document.getElementById("sweet3").value);
  var snack1 = parseInt(document.getElementById("snack1").value);
  var snack2 = parseInt(document.getElementById("snack2").value);
  var snack3 = parseInt(document.getElementById("snack3").value);
  var res = sweet1 + sweet2 + sweet3 + snack1 + snack2 + snack3;
  var result = res * 25;
  document.getElementById("cost").innerHTML = result;
}





$('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });

  var today = new Date();
  var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

  function setCookie(name, value)
  {
    document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }

  total(){
    getCookie("coffee")
     document.getElementById("cost").innerHTML = coffee;
  }