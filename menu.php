<?php 
include("inc/connect.php");
// include("inc/functions.php");
include("inc/header.php");
?>

    <!-- ************************************************************* -->
    <!--Begin Site Content -->
	<h2>Lino&#8217;s Menu</h2>
		<p><a href="download_docs/linos_dinnermenu.pdf" target="blank"><img src="img/pdf.png" />download dinner menu</a></p>
		<div>
			<p>Each dish is created by hand and in-house by using traditional <br/>cooking methods practiced by Italians for countless generations</p>
	       <p>Entr&eacute;es range from $13.00 to $25.00<br/>We offer a Full Service Bar with a Wide Wine Selection<br/>All Entr&eacute;es include a bread basket, choice of Minestrone Soup or house salad</p>   
	    </div>      

		<!-- JQuery dinner menu accordion -->
		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Appetizers</button>
				<div class="panel">
					<div class="row dinnermenu"> 
						<div class="col-sm-3 menu-item-name">Italian Sausage</div>
						<div class="col-sm-8 menu-item-desc">With red and green peppers</div>
						<div class="col-sm-1 menu-item-price">$10.95</div><p>&nbsp;</p>
					</div>
					<div class="row dinnermenu"> 
						<div class="col-sm-3 menu-item-name">Antipasto Italiano</div>
						<div class="col-sm-8 menu-item-desc">A delightful assortment of prosciutto, salami, cheese and olives</div>
						<div class="col-sm-1 menu-item-price">$9.95</div><p>&nbsp;</p>
					</div>
					<div class="row dinnermenu"> 
						<div class="col-sm-3 menu-item-name">Shrimp Cocktail</div>
						<div class="col-sm-8 menu-item-desc">4 Jumbo shrimp gilled accompanied by our home made cocktail sauce</div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>
					<div class="row dinnermenu"> 
						<div class="col-sm-3 menu-item-name">Calamari</div>
						<div class="col-sm-8 menu-item-desc">Fried calamari tossed with red and green peppers, red onions, crumbled blue cheese and our home made Italian dressig</div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>
				</div>
	         </div>
        </div>

		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Soup &amp Salad</button>
				<div class="panel">
					<div class="row dinnermenu"> 
						<div class="col-sm-3 menu-item-name">Caesar Salad</div>
						<div class="col-sm-8 menu-item-desc">Crispy Romaine lettuce with our home made Caesar dressing</div>
						<div class="col-sm-1 menu-item-price">$7.95</div><p>&nbsp;</p>
					</div>
					<div class="row dinnermenu"> 
						<div class="col-sm-3 menu-item-name">Farmer Salad</div>
						<div class="col-sm-8 menu-item-desc">Toss salad of red and green pepers, red onions, celery, cucumbers and tomoates in our house pine-nut dressing </div>
						<div class="col-sm-1 menu-item-price">$7.50</div><p>&nbsp;</p>
					</div>
					<div class="row dinnermenu"> 
						<div class="col-sm-3 menu-item-name">Minestrone Soup</div>
						<div class="col-sm-8 menu-item-desc">Our home made speciality with fresh vegetables, legumes and potatoes slowly simmered to perfection</div>
						<div class="col-sm-1 menu-item-price">$4.00</div><p>&nbsp;</p>
					</div>
					<div class="row dinnermenu"> 
						<div class="col-sm-3 menu-item-name">Tortellini in Brodo</div>
						<div class="col-sm-8 menu-item-desc">Meat filled pasta simmered in home made chicken broth</div>
						<div class="col-sm-1 menu-item-price">$4.50</div><p>&nbsp;</p>
					</div>
				</div>
	         </div>
        </div>

        

		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion" id="homemade-pasta">Homemade Pasta</button>
				<div class="panel">
					<div class="row dinnermenu">                                                
					<div class="col-sm-3 menu-item-name">Baked Lasagne ~ Meat</div> 
					<div class="col-sm-8 menu-item-desc">Homemade pasta strips baked with ground veal, ground beef, mozzarella, parmigiano and served with meat sauce </div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                            

					<div class="row dinnermenu"> 
					<div class="col-sm-3 menu-item-name">Baked Lasagne ~ Vegetable</div> 
					<div class="col-sm-8 menu-item-desc">Homemade spinach pasta strips baked with assorted vegetables, mozzarella and parmigiano served with tomato sauce </div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>

					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Ravioli</div> 
					<div class="col-sm-8 menu-item-desc">Homemade meat filled served with meat sauce or cheese filled served with tomato~basil sauce </div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>

					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Seafood Ravioli</div> 
					<div class="col-sm-8 menu-item-desc">Homemade spinach pasta, filled with lobster, scallops and shrimp served with a sherry sauce with sun-dried tomatoes </div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>

					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Gnocchi alla Gorgonzola</div> 
					<div class="col-sm-8 menu-item-desc">Homemade potato pasta served with a gorgonzola cheese sauce </div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>   
				</div>
	         </div>
        </div>		

		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Pasta</button>
				<div class="panel">
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Capellini al Pomodoro e Basilico</div> 
						<div class="col-sm-8 menu-item-desc">Angel hair pasta with tomato~basil sauce </div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Spaghetti</div> 
						<div class="col-sm-8 menu-item-desc">Served in a meat or tomato~basil sauce </div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Spaghetti con Salsiccia</div> 
						<div class="col-sm-8 menu-item-desc">with roasted Italian sausage </div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Spaghetti con Polpette</div> 
						<div class="col-sm-8 menu-item-desc">with homemade meat balls</div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Tortellini alla Panna</div> 
						<div class="col-sm-8 menu-item-desc">Cheese tortellini served with bits of prosciutto in a Sherry cream sauce </div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Tortellini</div> 
						<div class="col-sm-8 menu-item-desc">Meat or Cheese tortellini served with meat or tomato~basil sauce </div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Risotto</div> 
						<div class="col-sm-8 menu-item-desc">Italian rice with chicken and mushrooms, spinach, fresh tomatoes and green onions </div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Combination Platter</div> 
						<div class="col-sm-8 menu-item-desc">Linguine with meat sauce and Gnocchi alla Gorgonzola </div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Linguine ai Frutti di Mare</div> 
						<div class="col-sm-8 menu-item-desc">Calamari, shrimp, scallops in a white or red sauce </div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Linguine con Calamari</div> 
						<div class="col-sm-8 menu-item-desc">Served with a red or white sauce</div> 
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Fettuccine Alfredo</div>
						<div class="col-sm-8 menu-item-desc">Our own variation on the classic cream sauce </div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>                                     
						<div class="row dinnermenu">                             
						<div class="col-sm-3 menu-item-name">Portobello Ravioli</div> 
						<div class="col-sm-8 menu-item-desc">Pasta filled with Portobello mushrooms, served with a Sherry sauce and slices Portobello mushrooms</div>
						<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
						</div>   
				</div>
	         </div>
        </div>		

		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Seafood</button>
				<div class="panel">
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Lake Superior White Fish</div>
					<div class="col-sm-8 menu-item-desc">Prepared broiled or baked</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Shrimp Giardiniera</div>
					<div class="col-sm-8 menu-item-desc">Jumbo shrimp saut&eacute;ed in white wine tomato sauce with tomatoes, red and green peppers, mushrooms, green onions, and garlic </div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Shrimp Provenzale</div>
					<div class="col-sm-8 menu-item-desc">Jumbo shrimp saut&eacute;ed in white wine, with garlic, green onions, fresh tomatoes and sun dried tomatoes</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Deep Fried Shrimp</div>
					<div class="col-sm-8 menu-item-desc">Butterfly jumbo shrimp lightly breaded</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Atlantic Salmon</div>
					<div class="col-sm-8 menu-item-desc">Prepared broiled or baked with seasoned bread crumbs</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Herb Crusted Salmon</div>
					<div class="col-sm-8 menu-item-desc">Served on a bed of crisp potato cake &amp baby spinach, with caramelized onions and Dijon Mustard sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Filet &amp Shrimp *</div>
					<div class="col-sm-8 menu-item-desc">Broiled filet &amp ampthree jumbo shrimp saut&eacute;ed in garlic butter</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
				</div>
	         </div>
        </div>	

		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Chicken</button>
				<div class="panel">
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Pollo al Grand Marnier</div>
					<div class="col-sm-8 menu-item-desc">Boneless chicken breast in a cream and Grand Marnier sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             

					<div class="col-sm-3 menu-item-name">Pollo Marsala</div>
					<div class="col-sm-8 menu-item-desc">Boneless chicken breast saut&eacute;ed with mushrooms in a Marsala wine sauce</div> 
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             

					<div class="col-sm-3 menu-item-name">Pollo alla Cacciatore</div>
					<div class="col-sm-8 menu-item-desc">Boneless chicken breast saut&eacute;ed with mushrooms, red and green peppers, onions, garlic, tomatoes and rosemary in white wine sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             

					<div class="col-sm-3 menu-item-name">Pollo Bolognese</div>
					<div class="col-sm-8 menu-item-desc">Boneless chicken breast stuffed with prosciutto and parmigiano cheese topped with a cheese sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             

					<div class="col-sm-3 menu-item-name">Pollo al Limone</div>
					<div class="col-sm-8 menu-item-desc">Boneless chicken breast saut&eacute;ed in a mushroom, garlic, lemon and white wine sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             

					<div class="col-sm-3 menu-item-name">Pollo Parmigiana</div>
					<div class="col-sm-8 menu-item-desc">Boneless chicken breast topped with mozzarella cheese and tomato sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>
				</div>
	         </div>
        </div>	

		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Veal</button>
				<div class="panel">
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Veal al Limone</div>
					<div class="col-sm-8 menu-item-desc">Medallions of veal saut&eacute;ed in a lemon, garlic, mushrooms, in a white wine sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                                       

					<div class="col-sm-3 menu-item-name">Veal Parmigiana</div>
					<div class="col-sm-8 menu-item-desc">Veal cutlet topped with mozzarella cheese and tomato sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                                       

					<div class="col-sm-3 menu-item-name">Veal Giuliana</div>
					<div class="col-sm-8 menu-item-desc">Medallions of veal saut&eacute;ed with red and green peppers, mushrooms, garlic, tomatoes, in a Vodka sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                                       

					<div class="col-sm-3 menu-item-name">Veal Marsala</div>
					<div class="col-sm-8 menu-item-desc">Medallions of veal saut&eacute;ed with mushrooms and garlic, in a Marsala wine sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                                       

					<div class="col-sm-3 menu-item-name">Veal Piccata</div>
					<div class="col-sm-8 menu-item-desc">Medallions of veal saut&eacute;ed in a lemon wine butter sauce with capers &amp mushrooms</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>
				</div>
	         </div>
        </div>	


		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Beef</button>
				<div class="panel">
					<div class="row dinnermenu">                                       
					<div class="col-sm-3 menu-item-name">Broiled Filet Mignon *</div>
					<div class="col-sm-8 menu-item-desc">8 oz Filet choice charbroiled to your taste, served with a zip sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             

					<div class="col-sm-3 menu-item-name">Petit Filet Mignon</div>
					<div class="col-sm-8 menu-item-desc">6 oz Filet charbroiled to your taste, served with a zip sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             

					<div class="col-sm-3 menu-item-name">New York Strip *</div>
					<div class="col-sm-8 menu-item-desc">14 oz charbroiled to your taste, served with a zip sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>
				</div>
	         </div>
        </div>

		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Kids</button>
				<div class="panel">
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Ravioli</div>
					<div class="col-sm-8 menu-item-desc">Homemade meat or cheese filled, served with a meat or tomato~basil sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Gnocchi</div>
					<div class="col-sm-8 menu-item-desc">Homemade, served with meat or tomato~basil sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Spaghetti</div>
					<div class="col-sm-8 menu-item-desc">Served with meat or tomato~basil sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Tortellini</div>
					<div class="col-sm-8 menu-item-desc">Meat or cheese filled, served with meat or tomato~basil sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Fettuccine Alfredo</div>
					<div class="col-sm-8 menu-item-desc">Our own variation on the classic cream sauce</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Chicken Fingers</div>
					<div class="col-sm-8 menu-item-desc">Served with fries</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Mozzarella Sticks</div>
					<div class="col-sm-8 menu-item-desc">Served with fries</div> 
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div> 
				</div>
	         </div>
        </div>

		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Pizza</button>
				<div class="panel">
                      <div class="col-sm-3 menu-item-name">Toppings</div>
                      <div class="col-sm-8 menu-item-desc">
                                          Italian Sausage ~ Pepperoni ~ Mushrooms
                                          ~ Fresh Tomatoes ~ Green Olives ~ Spinach
                                          ~ Green Peppers ~ Red Peppers ~ Banana Peppers
                                          ~ Artichokes  </div>
				</div>
	         </div>
        </div>	

		<div class="row" > 
	        <div class="col-sm-12">
				<button class="accordion">Desserts</button>
				<div class="panel">
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Cannoli</div>
					<div class="col-sm-8 menu-item-desc">Homemade pastry shell filled with custard cream and chocolate chips, then dipped in crushed nuts</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Tiramisu</div>
					<div class="col-sm-8 menu-item-desc">Our own variation of this classic Italian dessert</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Ice Cream</div>
					<div class="col-sm-8 menu-item-desc">Choice fo Chocolate, Vanilla or Spumoni</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Cheese Cake</div>
					<div class="col-sm-8 menu-item-desc">Served with strawberries</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">ot Fudge Brownie</div>
					<div class="col-sm-8 menu-item-desc">Served with Vanilla ice cream and Sanders Hot Fudge</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Cream Puff Sundae</div>
					<div class="col-sm-8 menu-item-desc">Served with Vanilla ice cream and Sanders Hot Fudge</div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div>                                     
					<div class="row dinnermenu">                             
					<div class="col-sm-3 menu-item-name">Special Desserts</div>
					<div class="col-sm-8 menu-item-desc"></div>
					<div class="col-sm-1 menu-item-price">$11.95</div><p>&nbsp;</p>
					</div> 
				</div>
	         </div>
        </div>

	<br/>
	<hr>
    <div id="menu_disclaimer">
        <p>* Indicates Menu Item contains, or may contain, under cooked ingredients. </p>
        <p>Consuming raw or uncooked meats, poultry, seafood, shellfish, or eggs may increase your risk of food borne illness </td>
    </div>

	<!--End Site Content -->
	<!-- ************************************************************************** -->	


<?php include("inc/footer.php");?>