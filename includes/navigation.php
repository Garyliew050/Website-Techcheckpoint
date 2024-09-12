
<!-- to enable dropdown menu functionality -->
<script src="dropdown.js"> </script>

<!-- creates a navigation menu to display menu items -->
<nav class="pageNavi">
	<ul class="naviUl">

		<!-- link to home page and product list page -->
		<li class="naviIl"><a href="../Home/main_page.php">Home</a></li>
		<li class="naviIl"><a href="../item/item_list.php">Products</a>
			<ul>
				<!-- link to product pages for keyboard, headset, and mice -->
				<li class="naviIl"><a href="../item/item_list.php?item_type=keybord">Keyboard</a></li>
				<li class="naviIl"><a href="../item/item_list.php?item_type=headset">Headset</a></li>
				<li class="naviIl"><a href="../item/item_list.php?item_type=mice">Mice</a></li>
			</ul>
		</li>
		<!-- link to shopping cart page -->
		<li class="naviIl"><a href="../Cart/cart.php">Cart</a>
		</li>
		<!-- link to contact us page-->
		<li class="naviIl"><a href="../contact us/contact us.php">Contact</a></li>
		<li class="naviIl" id="cart"> <a href="../Cart/cart.php">
				<img src="../img/cart Icon.png" alt="Cart Icon" float: right margin: 0 0 10px 10px width="50"
					height="50">
			</a></li>
	</ul>
</nav>