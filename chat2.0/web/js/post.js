

 let url = "web/php/post.php";
 let myForm = "formValues"; 
  
 window.addEventListener( "load", function(){
 
     function sendData(){
 
           const XHR = new XMLHttpRequest();
 

           const FD = new FormData(FORM); 

           XHR.addEventListener( "load", function(event) {
             printOut(event.target.responseText);
           } );
       
           XHR.addEventListener("error", function(event) {
             alert( 'Oops! Something went wrong.' );
           } );
       

           XHR.open( "POST",url);
    
           XHR.send(FD);
     }

     const FORM = document.getElementById(myForm);
   

     FORM.addEventListener("submit", function(event) {
       event.preventDefault();
       sendData();
     });
 })
 

 function printOut(info)
 {
   document.getElementById('output').innerHTML = info; 
 }