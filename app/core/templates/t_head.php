<link href="<?php echo APP_RESOURCES; ?>css/fp_style.css" media="screen" rel="stylesheet" type="text/css">

<!-- jquery & colorbox -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">$.noConflict();</script>

<!-- tiny_mce -->
<script type="text/javascript" src="<?php echo APP_RESOURCES; ?>javascript/tiny_mce/tinymce.min.js"></script>

<script type="text/javascript" src="<?php echo APP_RESOURCES; ?>javascript/colorbox/colorbox.js"></script>
<link href="<?php echo APP_RESOURCES; ?>javascript/colorbox/colorbox.css" media="screen" rel="stylesheet" type="text/css" />

<script type="text/javascript">

	jQuery(document).ready(function($) {
		
		$('.fp_edit').each(function() {
			var height = $(this).outerHeight();
			if (height < 25) { height = 25; }
			var width = $(this).parent().width();
			
			$(this).height(height).width(width);
			$(this).find('.fp_edit_link').height(height-2).width(width-2);
		});
		
		$('.fp_edit_type').mouseenter(function() {
			$(this).parent().find('.fp_edit_link').addClass('hover');
		}).mouseleave(function() {
			$(this).parent().find('.fp_edit_link').removeClass('hover');  
		});	
		
		$('#edit_toggle').click(function(e) {
			e.preventDefault();
			
			if ($(this).text() == 'Preview Page')
			{
				$(this).text('Edit Page');
			}
			else
			{
				$(this).text('Preview Page');
			}
			$('.fp_edit_type').toggle();
			$('.fp_edit_link').toggle();
		});
		
		$('.fp_edit_type, .fp_edit_link').click(function(e) {
			$(this).colorbox({
				transition: 'fade',
				initialWidth: '50px',
				initialHeight: '50px',
				overlayClose: false,
				escKey: false,
				opacity: .6
			});
		});
		
		$('.fp_dashboard, .fp_password').click(function(e) {
			$(this).colorbox({
				transition: 'fade',
				initialWidth: '50px',
				initialHeight: '50px',
				overlayClose: true,
				escKey: true,
				opacity: .6,
				
				iframe: true,
				top: '28px',
				width: '940px',
				height: '80%'
			});
		});
		
		$('#fp_cancel').on('click', function(e){
			e.preventDefault();
			$.colorbox.close();
		});
		
	});

</script>