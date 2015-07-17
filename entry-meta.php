<?php global $authordata; ?>
<div class="entry-meta">
<i class="fa fa-calendar"></i>
<span class="entry-date published"><?php the_time( get_option('date_format') ); ?></span>
<?php edit_post_link( 'Muokkaa', '<div class="edit-link">', '</div>' ) ?>
</div>