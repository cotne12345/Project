<style media="screen">

.bg {
background: url('https://logodownload.org/wp-content/uploads/2021/03/united-states-postal-service-usps-logo-1.png');
background-repeat: no-repeat;
background-position: top;
margin-top: 100px;
background-size: contain;
height: 600px;
}
</style>

<?php
$index_url='index.php';
$posts_url='posts/posts.php';
$post_url='posts/post.php';
$newpost_url='posts/newpost.php';
$login_url='users/login.php';
$logout_url='users/logout.php';
$register_url='users/register.php';
$search_url='posts/search.php';
$contact_us_url='users/contact_us.php';

session_start();

include("include/navbar.php");
include("include/bootstrap_cdn.php");


?>

<div class="row">
	<div class="bg"></div>
</div>
