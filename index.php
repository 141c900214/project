<?php require('header.php') ?>
		<div class="col-md-2 menu-left">
			<ul>
				<li class="active"><a href=""><i class="fa fa-home"></i> Trang chủ</a></li>
				<li><a href="">Tài khoản</a></li>
				<li><a href="">trử tình</a></li>
			</ul>
		</div>
		<div class="col-md-10 content">
			<?php  
							$qr="select * from tbl_theloai";
							$theloai = $db -> query($qr);
							foreach ($theloai as $theloaivideo) {				
						?>
			<div class="wp-video">
						
						<div class="col-md-12">
							<h3><?php echo $theloaivideo['theloai'] ?></h3>
						</div>
						
						<div class="col-md-12 category">
						<?php 
							$qrs="select * from tbl_video where id_theloai=$theloaivideo[id_theloai]";
							$slide_video = $db ->query($qrs);
						foreach ($slide_video as $key) { 
							$chuyendoi=unicode_convert($key['tieude']);
						?>
							<div class="col-md-2 slide-list">
								<a href="http://localhost:8080/karaokeonline/<?php echo $key['id_video'] ?>-<?php echo $chuyendoi ?>.html">
									<img src="images/1.png" class="img-responsive" alt="">
								</a>
								<h3><a href="http://localhost:8080/karaokeonline/<?php echo $key['id_video'] ?>-<?php echo $chuyendoi ?>.html"><?php echo $key['tieude'] ?></a></h3>
								<p><span><?php echo $key['soluotxem'] ?> lượt xem </span> - <span>Ca sĩ: <?php echo $key['casi'] ?></span></p>
							</div>
							<?php } ?>
						</div>
		
			</div>
			<?php } ?>
			
			<script type="text/javascript">
					$('.category').slick({
					  dots: false,
					  infinite: false,
					  speed: 300,
					  slidesToShow: 5,
					  slidesToScroll: 1,
					  responsive: [
					    {
					      breakpoint: 1024,
					      settings: {
					        slidesToShow: 3,
					        slidesToScroll: 1,
					        infinite: true,
					        dots: true
					      }
					    },
					    {
					      breakpoint: 600,
					      settings: {
					        slidesToShow: 1,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					    // You can unslick at a given breakpoint now by adding:
					    // settings: "unslick"
					    // instead of a settings object
					  ]
					});
			</script>
		</div>
	</div>
</div>
<?php require('footer.php') ?>