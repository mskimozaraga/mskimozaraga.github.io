<!DOCTYPE html>
<html>
<body>

<center>

<h2>Pindot2 lang</h2>


<button onclick="myFunction()">Click me</button>

<p id="demo"></p>

<script>
function myFunction() {
  var txt;
  
  if (confirm("I date ko nimo sa valentines? Pinduta ang OK para hapsay imong panginabuhi. Pinduta ang CANCEL ug gusto ka malason.")) {
    txt = "Thank you! XD" ;
	
  } 
  else if (confirm("Hmm?")){
  }
  else if (confirm("Whyyy?")){
  }
  else if (confirm("Bakeeet?")){
  }
  else if (confirm("Nganooooo?")){
  }
  else {
  txt = "K byeee! -_-";
  }
  document.getElementById("demo").innerHTML = txt;
}


</script>


<br>
<?php
 
	echo "<img src='1.jpg' width='200' height='200' >"; 
	?>
</center>

</body>
</html>