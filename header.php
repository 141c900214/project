<?php  
require("model/db.php");
require("model/function.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Karaoke online</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Open+Sans+Condensed:300,300i,700" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<!-- css -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.shorten.1.0.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<style type="text/css">
	.search{
	    background: #FFF;
	    border: solid 1px #CCC;
	    position: absolute;
	    width: 423px;
	    max-width: 423px;
	    list-style-type: none;
	    padding-left: 0;
	  /*   display: none; */
	}
	.search li{
		overflow: hidden
		
	}
	.search li a{
		text-decoration: none;
		color: #999;
		padding: 3px 5px 3px 10px;
		display: block;
	}
	.search li:hover{
		background: #666
	}
	.slide-list h3{
		font-size: 14px;
		margin-top: 5px;
		margin-bottom: 5px;
	}
	.slide-list p{
		font-size: 12px
	}
	@media (max-width: 274px)
	{
		.link-icon ul{
			padding-left: 15px;
		}
		.link-icon ul li{
			margin-bottom: 15px
		}
		.coppyright p{
			line-height: 25px;
			text-align: center;
		}
	}
	</style>
</head>
<body >
	<!-- header -->
	<div class="top-header">
		<div class="container-fluid">
			<div class="logo col-md-3 col-sm-3">
				<h3><a href="http://localhost:8080/karaokeonline/"> Karaoke Online <i class="fa fa-play-circle-o" aria-hidden="true"></i></a></h3>
			</div>
			<div class="col-md-7 col-sm-9 wp-search">
				<div class="form-search">
				<form action="" method="get" name="form-search" autocomplete="off">
					<input type="text" class="" name="keyword" id="txtsearch" placeholder="Tìm kiếm video">
					<button type="button"><i class="fa fa-search"></i></button>
				</form>
				</div>
				<script type="text/javascript" src="js/search.js"></script>
				<div class="">
					<ul class="search">
						
					
					</ul>
				</div>
			</div>
			<div class="col-md-2 user">
				<div class="idadmin"><a href="" class="login">Đăng nhập</a></div>
				<!-- <div class="idadmin">Admin <i class="fa fa-angle-down" aria-hidden="true"></i></div> -->
				<!-- <ul class="idtoggle">
					<li><a href="">Chỉnh sửa</a></li>
					<li><a href="">Đăng bài</a></li>
					<li><a href="">Đăng xuất</a></li>
				</ul> -->
				<script type="text/javascript">
					$(document).ready(function(){
						
						$(".idadmin").click(function(){
							$(".idtoggle").slideToggle();
						});

						$(".click-menu").click(function(){
							$(".menu-left").slideToggle();
						});
					})
				</script>
			</div>
		</div>
	</div>
	<div class="wp-main">
	<div class="container-fluid wp">
		<!-- <div class="col-md-2 menu-left">
			<ul>
				<li class="active"><a href=""><i class="fa fa-home"></i> Trang chủ</a></li>
				<li><a href="">Tài khoản</a></li>
				<li><a href="">trử tình</a></li>
			</ul>
		</div> -->