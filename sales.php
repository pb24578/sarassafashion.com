<html>
<body>
<header>
	<title>Sales | Buy Cultural Fashion Online USA</title>
	<!--style.css, favcon, googlefont, materializecss-->
	<link href="styles/categories_style.css" type="text/css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

	<!--jquery, materializejs-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!--navbar-->
	<div id="navbarHeader"></div>
	<div id="navbarTop">
		<a target="_blank" href="https://www.facebook.com/sarassafashion" style="margin-right: 5px"><img width="18" height="18" src="rsrc/index/facebook.png"></a>
		<a target="_blank" href="https://www.instagram.com/sarassa_official/" style="margin-right: 5px"><img width="18" height="18" src="rsrc/index/instagram.png"></a>
		<a target="_blank" href="https://twitter.com/SarassAbiz" style="margin-right: 110px;"><img width="18" height="18" src="rsrc/index/twitter.png"></a>
	</div>
	<div id="navbarTop">-</div>
	<div id="navbarMiddle">
		<h4 id="titleText"><a id="titleText" href="index.php">SarassA Fashion</a></h4>
	</div>
	<div id="checkOutNav">
		<a style="color: white; margin-right: 125px;" href="checkout.php">
		<i style="color: white;" class="material-icons">shopping_cart</i>
		<label style="color: white;" id="cart-number">0</label></a>
	</div>
	<div id="navbarBottom">
		<form id="searchForm" method="GET" action="search.php">
			<div class="input-field">
				<button type="submit" style="border:none; background-color:transparent;">
					<i class="material-icons" style="color: white;">search</i>
				</button>
				<input class="browser-default" name="search" placeholder="Search..." type="text" required id="search-text">
			</div>
		 </form>
	</div>

	<!--navbar and body white seperation-->
	<div id="seperator"></div>
</header>

<main>
	<!-- Dropdown Structure -->
	<ul id="womenDropDown" class="dropdown-content">
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=kurti">Kurtis</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=suit">3 Pc Suits</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=gararah">Gararahs</a></li>
	</ul>
	<ul id="menDropDown" class="dropdown-content">
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=kurta">Kurtas</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=suit">2 Pc Suits</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pajama">Pajamas</a></li>
	</ul>
	<ul id="jewelryDropDown" class="dropdown-content">
		<li style="background-color: white;"><a style="color: black;"><b>Pakistani</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pakistani%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pakistani%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pakistani%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pakistani%20necklace">Necklaces</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;"><b>Indian</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=indian%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=indian%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=indian%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=indian%20necklace">Necklaces</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;"><b>Turkish</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=turkish%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=turkish%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=turkish%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=turkish%20necklace">Necklaces</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;"><b>Bridal</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=bridal%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=bridal%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=bridal%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=bridal%20necklace">Necklaces</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;"><b>CZ</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=cz%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=cz%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=cz%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=cz%20necklace">Necklaces</a></li>
	</ul>

	<!-- Item Buttons -->
	<div class="row" style="margin-top: 10px;" align="center">
		<a href="new.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">New Arrivals</a>
		<a class='dropdown-button btn' data-activates="womenDropDown" href="women.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Women's Clothing</a>
		<a class='dropdown-button btn' data-activates="menDropDown" href="men.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Men's Clothing</a>
		<a class='jewelry-dropdown-button btn' data-activates="jewelryDropDown" href="jewelry.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Jewelry</a>
		<a href="sales.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Sales</a>
		<a href="events.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Events</a>
	</div>

	<!-- Items -->
	<div class="container">
	<p class="center-align" id="new-title-text">- Sales -</p>
	<div class="row center">
	<?php
        include_once("db/dbconnection.php");
        $foundResult = false;

        //get queries that have their saleprice > 0 (this means they're on sale)
        $queryJewelry = "SELECT * FROM jewelry WHERE saleprice > 0";
        $queryMen = "SELECT * FROM men WHERE saleprice > 0";
        $queryWomen = "SELECT * FROM women WHERE saleprice > 0";

        $results = array();
        $results[] = mysqli_query($link, $queryWomen);
        $results[] = mysqli_query($link, $queryJewelry);
        $results[] = mysqli_query($link, $queryMen);

        for ($i = 0; $i < 3; $i ++) {
            while ($row = mysqli_fetch_array($results[$i])) {
                $id = $row['id'];
                $category = $row['category'];
                $name = $row['name'];
                $price = $row['price'];
                $saleprice = $row['saleprice'];
                $sizes = $row['sizes'];
                $description = $row['description'];
                $picture = $row['picture'];
                echo '
				<div class="col s12 m6 l6 xl3">
					<div class="image-container">
					  <img src="'.$picture.'" class="image">
					  <div class="image-title">
						'.$name.'
					  </div>
					  <div class="image-price">
						<del>$'.$price.' USD</del> $'.$saleprice.' USD
					  </div>
					  <span class="new badge green" data-badge-caption="Sale!"></span>
					  <a href="view.php?category='.$category.'&id='.$id.'"><div class="image-button">
						<div class="image-text">Choose Options</div>
					  </div></a>
					</div>
				</div>
				';
                $foundResult = true;
            }
        }
        ?>
	</div>
	<?php
        if ($foundResult == false) {
            echo '<h5 style="color: white">No sales available...</h5>';
        }
    ?>
	</div>
	</div>
</main>
<footer class="page-footer" id="footer-page">
	<div class="container">
		<div class="row center-align">
			<div class="col s12 m6 l3 xl3">
				<h5 id="footer-header-text"><span><i class="material-icons" style="margin-right: 5px">email</i></span>Contact Us</h5>
				<ul>
				<li id="footer-sub-text"><span>info@sarassafashion.com</li>
				<li id="footer-sub-text">3401 Custer Rd Unit 157</li>
				<li id="footer-sub-text">Plano, TX 75023</li>
				<li id="footer-sub-text">331-454-4236</li>
				</ul>
			</div>
			<div class="col s12 m6 l3 xl3">
				<h5 id="footer-header-text"><span><i class="material-icons" style="margin-right: 5px">link</i></span>Quick Links</h5>
				<ul>
				<li><a id="footer-sub-text" href="privacy.php">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col s12 m6 l3 xl3">
				<h5 id="footer-header-text"><span><i class="material-icons" style="margin-right: 5px">assignment</i></span>Categories</h5>
				<ul>
				<li><a id="footer-sub-text" href="new.php">New Arrivals</a></li>
				<li><a id="footer-sub-text" href="women.php">Women's Clothing</a></li>
				<li><a id="footer-sub-text" href="men.php">Men's Clothing</a></li>
				<li><a id="footer-sub-text" href="jewelry.php">Jewelry</a></li>
				<li><a id="footer-sub-text" href="sales.php">Sales</a></li>
				<li><a id="footer-sub-text" href="events.php">Events</a></li>
				</ul>
			</div>
			<div class="col s12 m6 l3 xl3">
				<h5 id="footer-header-text"><span><i class="material-icons" style="margin-right: 5px">payment</i></span>Accepted Payments</h5>
				<ul>
				<li id="footer-sub-text">PayPal</li>
				<li id="footer-sub-text">VISA</li>
				<li id="footer-sub-text">MasterCard</li>
				<li id="footer-sub-text">American Express</li>
				<li id="footer-sub-text">Discover Card</li>
				</ul>
			</div>
		</div>
	</div>
			<div class="footer-copyright" id="footer-trademark">
				<div class="container" id="footer-sub-text">
				Copyright &copy 2018 SarassA Fashion All rights reserved.
				</div>
			</div>
</footer>

<script>
	//dropdown button
	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: true, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'left', // Displays dropdown with edge aligned to the left of button
		stopPropagation: false // Stops event propagation
		}
	);

	//jewelry dropdown button
	$('.jewelry-dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: false, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'left', // Displays dropdown with edge aligned to the left of button
		stopPropagation: false // Stops event propagation
		}
	);

	//get number of cart items within the browser
	function updateNumberOfCartItems() {
		var numberOfCartItems = 0;
		numberOfCartItems += (document.cookie.split('item_').length - 1);
		//set the number of items in the cart
		document.getElementById('cart-number').innerHTML = numberOfCartItems;
	}

	updateNumberOfCartItems();
</script>
</body>
</html>
