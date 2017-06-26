<?php 
include("inc/connect.php");
// include("inc/functions.php");
include("inc/header.php");
?>

        <!-- ************************************************************* -->
    <!--Begin Site Content -->
      <div class="container"> 

         <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-megamenu" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <img src="" class="enlargeImageModalSource" style="width: 100%; height:auto;">
                    </div>
                    </div>
            </div>
         </div>

      <h2>Gallery of Lino&#8217;s Cuisine</h2>
      
        <div class="container" id="gallery">
            <div class="row no-gutter">
                 <div class="col-md-4 col-xs-12" style="padding: 2px;">
                      <img width="200" height="100" src="img/filet_and_lobster.jpg" title="Filet and Lobster" alt="Filet and Lobster" ></div>
                <div class="col-md-4 col-xs-12" style="padding: 2px;">
                    <img width="200" height="100" src="img/lamb-chops.jpg" title="Lamb Chops" alt="Lamb Chops" ></div>
                <div class="col-md-4 col-xs-12" style="padding: 2px;">
                    <img width="200" height="100" src="img/spaghetti.jpg" title="Spaghetti" alt="Spaghetti" ></div>
            </div>    
            <div class="clearfix visible-xs"></div>
            <div class="row no-gutter">
                 <div class="col-md-4 col-xs-12" style="padding: 2px;">
                      <img width="200" height="100" src="img/lasagne.jpg" title="Lasagne" alt="Lasagne" ></div>
                 <div class="col-md-4 col-xs-12" style="padding: 2px;">
                      <img width="200" height="100" src="img/shrimp-giardiniera.jpg" title="Shrimp Giardiniera" alt="Shrimp Giardiniera" ></div>
                 <div class="col-md-4 col-xs-12" style="padding: 2px;">
                      <img width="200" height="100" src="img/pasta-960x606.jpg" title="Pasta" alt="Pasta" ></div>
            </div>   
            <div class="clearfix visible-xs"></div>
            <div class="row no-gutter">
                 <div class="col-md-4 col-xs-12" style="padding: 2px;">
                      <img width="200" height="100" src="img/perch.jpg" title="Grilled Perch" alt="Grilled Perch"  ></div>
                 <div class="col-md-4 col-xs-12" style="padding: 2px;">
                      <img width="200" height="100" src="img/shrimp-provenzale.jpg" title="Shrimp Provenzale" alt="Shrimp Provenzale" ></div>
                 <div class="col-md-4 col-xs-12" style="padding: 2px;">
                      <img width="200" height="100" src="img/chicken-marsala.jpg" title="Chicken Marsala" alt="Chicken Marsala" ></div>
            </div>      
        </div>
          
    </div>
    <!--End Site Content -->
    <!-- ************************************************************************** --> 

<?php include("inc/footer.php");?>
