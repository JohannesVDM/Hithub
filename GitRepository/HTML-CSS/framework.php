<?php 
echo <html>  
echo <body>  
echo <p> This is an example of adding multiple events to the same element. </p>  
echo <p> Click the following button to see the effect. </p>  
echo <button id = "btn"> Click me </button>  
echo echo echo <p id = "para"></p>  
echo echo <p id = "para1"></p>  
echo <script>  
function fun() {  
    alert("Welcome to the javaTpoint.com");  
}  
   
function fun1() {  
   document.getElementById("para").innerHTML =  "This is second function";  
  
}  
function fun2() {  
   document.getElementById("para1").innerHTML =  "This is third function";  
}  
var mybtn = document.getElementById("btn");  
mybtn.addEventListener("click", fun);  
mybtn.addEventListener("click", fun1);  
mybtn.addEventListener("click", fun2);  
echo </script>  
echo </body>  
echo </html>  
?>
