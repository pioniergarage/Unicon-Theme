<?php global $minti_data; ?>
<?php if($minti_data['switch_metadata'] == '1') { ?>
<ul>
	<?php if($minti_data['check_metadata']['date'] == '1') { ?>	
		<li class="meta-date"><?php the_time(get_option('date_format')); ?></li>
	<?php } ?>

	<?php if($minti_data['check_metadata']['tags'] == '1') { ?>
		<?php if(is_single()){ ?>
	    <?php if(has_tag()) { ?><li class="meta-tags"><?php the_tags( '', ', ', ''); ?></li><?php } ?>
	    <?php } ?>
	<?php } ?>
</ul>
<?php } ?>