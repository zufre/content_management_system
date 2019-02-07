<script type="text/javascript">
	jQuery(document).ready(function($){
		
		$('#login').submit(function(e){
			e.preventDefault();
			
			var username = $('input#username').val();
			var password = $('input#password').val();
			
			var dataString = 'username=' + username + '&password=' + password;
			
			$.ajax({
				type: "POST",
				url: "<?php echo SITE_PATH; ?>app/login.php",
				data: dataString,
				cache: false,
				success: function(html) {
					$('#cboxLoadedContent').html(html);
				}
			});
		});
		
		$('#fp_cancel').on('click', function(e){
			e.preventDefault();

			$.colorbox.close();
			var page = window.location.href;
			page = page.substring(0, page.lastIndexOf('?'));
			window.location = page;
		});
		
	});
</script>

<div id="fp_wrapper">

		<h1>FlightPath CMS</h1>
		<div id="fp_content">
		
			<form action="" method="post" id="login">
			<div>
			
				<?php
					$alerts = $this->getAlerts();
					if ($alerts != '') { echo '<ul class="alerts">' . $alerts . '</ul>'; }
				?>
				
				<div class="row">
					<label for="username">Username: *</label>
					<input type="text" id="username" name="username" value="<?php echo $this->getData('input_user'); ?>" class="<?php echo $this->getData('error_user'); ?>">
				</div>
				<div class="row">
					<label for="password">Password: *</label>
					<input type="password" id="password" name="password" value="<?php echo $this->getData('input_pass'); ?>" class="<?php echo $this->getData('error_pass'); ?>">
				</div>
			
				<div class="row submitrow">
					
					<input type="submit" name="submit" class="submit" value="Log In">
					&nbsp;<a href="#" id="fp_cancel">Cancel</a>
				</div>

			</div>
			</form>
		
		</div>
</div>