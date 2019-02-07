<script type="text/javascript">
	jQuery(document).ready(function($){
		
		$('#edit').submit(function(e){
			e.preventDefault();
			
			var id = "<?php echo $this->getData('block_id'); ?>";
			var type = $('#type').val();
			
			<?php if ($this->getData('block_type') == 'wysiwyg') { ?>
				tinyMCE.triggerSave();
			<?php } ?>
			
			var content = encodeURIComponent($('#field').val());
			
			var dataString = 'id=' + id + '&field=' + content + '&type=' + type;
			
			$.ajax({
				type: "POST",
				url: "<?php echo SITE_PATH; ?>app/cms/edit.php",
				data: dataString,
				cache: false,
				success: function(html) {
					$('#cboxLoadedContent').html(html);
				}
			});
		});
		
		$('#fp_cancel').on('click', function(e){
			tinyMCE.execCommand('mceFocus', false, 'field');                    
			tinyMCE.execCommand('mceRemoveEditor', false, 'field');
			
			e.preventDefault();
			$.colorbox.close();
		});
		
	});
</script>
<?php if ($this->getData('block_type') == 'wysiwyg')
{ ?>
<script type="text/javascript">
	tinyMCE.init({
        // General options
        width : "700",
        height : "205",
        theme : "modern",
        statusbar : "bottom",
        resize : true,
        plugins : "table,image,link,media,contextmenu,paste,fullscreen,noneditable",

        // Theme options
        menubar : false,
        toolbar1 : "styleselect,formatselect,fontselect,fontsizeselect,|,forecolor,backcolor,bold,italic,underline,strikethrough",
        toolbar2 : "bullist,numlist,|,outdent,indent,blockquote,|, cut,copy,paste,undo,redo,|,link,unlink,anchor,image,|code,fullscreen",

        // Example content CSS (should be your site CSS)
        content_css : "<?php echo SITE_CSS; ?>, <?php echo APP_RESOURCES; ?>css/tiny_mce_style.css"
});
setTimeout(function() {tinyMCE.execCommand('mceAddEditor', false, 'field');}, 0);

</script>
<?php } ?>

<div id="fp_wrapper">

		<h1>Edit Content Block: <i><?php echo $this->getData('block_id'); ?></i></h1>
		<div id="fp_content">
		
			<form action="" method="post" id="edit">
			<div>
				
				<div class="row">
					<label for="field">Block Content:</label>
				</div>
				<div class="row">
					<?php echo $this->getData('cms_field'); ?>
					<input type="hidden" id="type" value="<?php $this->getData('block_type'); ?>">
				</div>
			
				<div class="row submitrow">
					
					<input type="submit" name="submit" class="submit" value="Submit">
					&nbsp;<a href="#" id="fp_cancel">Cancel</a>
				</div>

			</div>
			</form>
		
		</div>
</div>