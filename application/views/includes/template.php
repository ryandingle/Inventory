<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<base href="<?php echo base_url();?>assets/ ">
		<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/login-nav.css" type="text/css" media="screen" />
		
		<!-JQUERY CODES-!>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/pop_out.js"></script>
		<script type="text/javascript" src="js/index_js.js"></script>
		<script type="text/javascript" src="js/upload_loop.js"></script>
		<script type="text/javascript" src="js/comment.js"></script>
		<script type="text/javascript" src="js/admin.js"></script>
		<script type="text/javascript" src="js/add_error.js"></script>
		<script type="text/javascript" src="js/index_error.js"></script>
		<script type="text/javascript" src="js/blogjs.js"></script>
		<script>
			function renderTime() {
			var currentTime = new Date();
			var diem = "AM";
			var h = currentTime.getHours();
			var m = currentTime.getMinutes();
		    var s = currentTime.getSeconds();
			setTimeout('renderTime()',1000);
		    if (h == 0) {
				h = 12;
			} else if (h > 12) { 
				h = h - 12;
				diem="PM";
			}
			if (h < 10) {
				h = "0" + h;
			}
			if (m < 10) {
				m = "0" + m;
			}
			if (s < 10) {
				s = "0" + s;
			}
		    var myClock = document.getElementById('clockDisplay');
			myClock.textContent = h + ":" + m + ":" + s + " " + diem;
			myClock.innerText = h + ":" + m + ":" + s + " " + diem;
		}
		renderTime();
		</script>
			
	</head>
	<body>
		<div id="whole_head">
			<div id="header">
				<div id="under-in">
					<div id="one">
						<div id="clockDisplay" class="clockStyle"></div>
						<div id="header-image"></div>
						<div id="extra">
						<div id="logo"></div>
						</div>
					</div>
				</div>
				<div id="headline">
					<div id="whole_nav">
						<?php $this->load->view('includes/main_nav'); ?>	
					</div>	
				</div>
				<div id="header-space"></div>
			</div>
		</div>
		<div id="container">
			<div id="content">
				<?php $this->load->view($main_content); ?>
			</div>
			<div id="footer">
				<?php $this->load->view('includes/footer'); ?>
			</div>
		</div>
	</body>
</html>