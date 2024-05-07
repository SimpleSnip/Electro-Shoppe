
<?php

if(isset($include_page) and $include_page == "vendor_store"){
	
$store_back_url = "../";

}else{

$store_back_url = "";
	
}

?>

<div id="footer"><!-- footer Starts -->

<div class="container"><!-- container Starts -->

<div class="row" ><!-- row Starts -->

<div class="col-md-3 col-sm-6" ><!-- col-md-3 col-sm-6 Starts -->

<h4>Pages</h4>

<ul><!-- ul Starts -->

<li><a href="<?php echo $store_back_url; ?>cart.php">Shopping Cart</a></li>

<li><a href="<?php echo $store_back_url; ?>contact.php">Contact Us</a></li>

<li><a href="<?php echo $store_back_url; ?>shop.php">Shop</a></li>

<li>

<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='$store_back_url" . "checkout.php' >My Account</a>";

}
else{

echo "<a href='$store_back_url" . "customer/my_account.php?my_orders'>My Account</a>";

}


?>

</li>

<?php 

if(isset($_SESSION['customer_email'])){
	
$customer_email = $_SESSION['customer_email'];

$select_customer = "select * from customers where customer_email='$customer_email'";

$run_customer = mysqli_query($con,$select_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_role = $row_customer['customer_role'];

if($customer_role == "vendor"){ 

?>

<li>

<a href="<?php echo $store_back_url; ?>vendor_dashboard/index.php"> Vendor Dashboard </a>

</li>

<?php } } ?>

</ul><!-- ul Ends -->

<hr>

<h4>User Section</h4>

<ul><!-- ul Starts -->

<?php 

if(isset($_SESSION['customer_email'])){
	
$customer_email = $_SESSION['customer_email'];

$select_customer = "select * from customers where customer_email='$customer_email'";

$run_customer = mysqli_query($con,$select_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_role = $row_customer['customer_role'];

if($customer_role == "vendor"){ 

?>

<li>

<a href="<?php echo $store_back_url; ?>vendor_dashboard/index.php"> Vendor Dashboard </a>

</li>

<?php } } ?>

<li>

<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='$store_back_url" . "checkout.php' >Login</a>";

}
else{

echo "<a href='$store_back_url" . "customer/my_account.php?my_orders'>My Account</a>";

}


?>

</li>

<li><a href="<?php echo $store_back_url; ?>customer_register.php">Register</a></li>

<li><a href="<?php echo $store_back_url; ?>terms.php">Terms And Conditions </a></li>



</ul><!-- ul Ends -->

<hr class="hidden-md hidden-lg hidden-sm" >

</div><!-- col-md-3 col-sm-6 Ends -->

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<h4> Top Products Categories </h4>

<ul><!-- ul Starts -->

<?php

$get_p_cats = "select * from product_categories";

$run_p_cats = mysqli_query($con,$get_p_cats);

while($row_p_cats = mysqli_fetch_array($run_p_cats)){

$p_cat_id = $row_p_cats['p_cat_id'];

$p_cat_title = $row_p_cats['p_cat_title'];

echo "<li> <a href='$store_back_url" . "shop.php?p_cat_id=$p_cat_id'> $p_cat_title </a> </li>";

}

?>

</ul><!-- ul Ends -->

<hr class="hidden-md hidden-lg">

</div><!-- col-md-3 col-sm-6 Ends -->


<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<h4>Where to find us</h4>

<p><!-- p Starts -->
<strong>Arka Jain University</strong>
<br>Gamharia
<br>Jharkhand
<br>7779974039
<br>Gouthame@gmail.com
<br>
<strong>G Gouthame</strong>

</p><!-- p Ends -->

<a href="<?php echo $store_back_url; ?>contact.php">Go to Contact us page</a>

<hr class="hidden-md hidden-lg">

</div><!-- col-md-3 col-sm-6 Ends -->

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<h4>Get the news</h4>

<p align="justify" class="text-muted">
At Electro Shoppe, we know that staying informed about current events is important to many of our customers. That's why we recommend checking out some of the top news sources online such as The New York Times, CNN, BBC News, The Guardian, and Reuters. Whether you're interested in the latest developments in business, politics, sports, or entertainment, these sources offer reliable and up-to-date news coverage. Stay informed and make the most of your shopping experience at Electro Shoppe.
</p>



<hr>

<h4> Stay in touch </h4>

<p class="social"><!-- social Starts --->

<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-google-plus"></i></a>
<a href="#"><i class="fa fa-envelope"></i></a>

</p><!-- social Ends --->

</div><!-- col-md-3 col-sm-6 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->
</div><!-- footer Ends -->

<div id="copyright"><!-- copyright Starts -->

<div class="container" ><!-- container Starts -->

<div class="col-md-6" ><!-- col-md-6 Starts -->

<p class="pull-left"> &copy; 2024 G Gouthame </p>

</div><!-- col-md-6 Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->



</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->

</div><!-- copyright Ends -->