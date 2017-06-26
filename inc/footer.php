	<!-- start of the footer -->
	<br/>
	<div class="row copyright-text">
 		<footer class="col-sm-12" style="padding: 20px 0px;">
			  <div class="col-sm-4"><a href="index.php">&copy; Lino&#8217;s 2017</a> All Rights Reserved </div>
			  <div class="col-sm-4"><a href="contact.php" id="directions">Get Directions</a></div>
			  <div class="col-sm-4">
				<a target="_blank" href="https://www.facebook.com/LinosRestaurant/"><img src="img/facebook.png" /></a>
				<a target="_blank" href="https://twitter.com/linosrestaurant"><img src="img/twitter.png" /></a>
				<a target="_blank" href="https://www.pinterest.com/linosrestaurant/"><img src="img/pintrest.png" /></a>
			  </div>
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


		// gallery modal 
		$(function() {
		    	$('img').on('click', function() {
					$('.enlargeImageModalSource').attr('src', $(this).attr('src'));
					$('#enlargeImageModal').modal('show');
				});
		});


		// stop modal on back or refresh
		$('#myModal').on('show.bs.modal', function(e) {
		        window.location.hash = "modal";
		    });

		    $(window).on('hashchange', function (event) {
		        if(window.location.hash != "#modal") {
		            $('#myModal').modal('hide');
		        }
		    });

</script>
</body>
</html>
