<?php require('header.php'); $id=$_GET['id'];?>

			<div class="col-md-9 video">
				<?php  
					$qr="select * from tbl_video where id_video=$id";
					$videos = $db ->query($qr);
					foreach ($videos as $video) :
				?>
				<div class="play-video">
					<center><?php echo $video['link'] ?></center>
					<!-- ?rel=0&autoplay=1 -->
				</div>
				<div class="title-play">
					
					<h3><a href="javascript:void(0)" title="<?php echo $video['tieude'] ?>"><?php echo $video['tieude'] ?></a></h3>
					<p>
					Ngày đăng : <?php echo $video['ngaydang'] ?> 
					<?php  
						$qr="update tbl_video set soluotxem = soluotxem + 1 where id_video=$id";
						$update =$db ->exec($qr);
						
						
					?> 
					<span>Lượt xem: <?php //echo $ke['soluotxem'] ?></span>
					
					</p>
					<p class="lyrics">Lời bài hát<br>
					<span class="more"><?php echo $video['loibaihat'] ?></span>
					</p>
					<script type="text/javascript">
						$(document).ready(function() {
						    // Configure/customize these variables.
						    var showChar = 100;  // How many characters are shown by default
						    var ellipsestext = "...";
						    var moretext = "Đọc tiếp";
						    var lesstext = "Rút gọn";
						    

						    $('.more').each(function() {
						        var content = $(this).html();
						 
						        if(content.length > showChar) {
						 
						            var c = content.substr(0, showChar);
						            var h = content.substr(showChar, content.length - showChar);
						 
						            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span><a style="text-decoration: none !important;color: #333 !important;padding-top:25px;font-weight:bold" href="" class="morelink">' + moretext + '</a></span>';
						 
						            $(this).html(html);
						        }
						 
						    });
						 
						    $(".morelink").click(function(){
						        if($(this).hasClass("less")) {
						            $(this).removeClass("less");
						            $(this).html(moretext);
						        } else {
						            $(this).addClass("less");
						            $(this).html(lesstext);
						        }
						        $(this).parent().prev().toggle();
						        $(this).prev().toggle();
						        return false;
						    });
						});
					</script>
					<!-- readmore -->
					<style type="text/css">
						.morecontent span {
						    display: none;
						}
						.morelink {
						    display: block;

						}
						.morelink:hover{
							color: blue !important;
						}
					</style>
				</div>
			<?php endforeach ?>
				<div class="comment-play">
					<div class="fb-comments" data-href="https://www.facebook.com/huynh.long.330?id=<?php echo $id ?>" data-width="100%"></div>
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=219797951827872";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<!-- commet-facebook -->
				</div>
			</div>
			<div class="clear-fix"></div>
			<div class="col-md-3 wp-list" style="padding-right: 0">
				<div class="list col-md-12">
					<!-- <div class="title">
						<h3>Danh sách ngẫu nhiên <span class="fa fa-refresh" style="float: right;padding-right: 30px;font-size: 16px;line-height: 30px"></span></h3>
					</div> -->
					<?php  
						$qr="select * from tbl_video where id_video <> $id order by rand() limit 6";
						$list_video = $db ->query($qr);
						foreach ($list_video as $listvideo) {
						$chuyendoi=unicode_convert($listvideo['tieude']);
					?>
					<div class="side-bar col-md-12">
						<div class="col-md-5 col-sm-12 img">
							<img src="images/1.png" class="img-responsive" alt="karaokeonline">
						</div>
						<div class="col-md-7 col-sm-12">
								<h3><a href="http://localhost:8080/karaokeonline/<?php echo $listvideo['id_video'] ?>-<?php echo $chuyendoi ?>.html" title="<?php echo $listvideo['tieude'] ?>" ><?php echo $listvideo['tieude'] ?></a></h3>
								<p>Lượt xem <span><?php echo $listvideo['soluotxem'] ?></span></p>
						</div>
					</div>
					<?php  
						}
					?>
					

				</div>
			</div>
		</div>
	</div>
<?php require('footer.php'); ?>