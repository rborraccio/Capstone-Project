	<!-- start of the footer -->
	<hr/>
	<div class="row copyright-text">
		<footer class="col-sm-12">
				<a href="index.php">&copy; Lino&#8217;s</a> ~ All Rights Reserved ~ 
				<a href="contact.php" target="_blank" id="directions">Get Directions</a> <br/>
				<a target="_blank" href="https://www.facebook.com/LinosRestaurant/"><img src="img/facebook.png" /></a>
				<a target="_blank" href="https://twitter.com/linosrestaurant"><img src="img/twitter.png" /></a>
				<a target="_blank" href="https://www.pinterest.com/linosrestaurant/"><img src="img/pintrest.png" /></a>
			</p>
	    </footer>			
	</div>
    <!-- ************************************************************* -->  
</div> <!-- end container-fluid -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
</body>
</html>
