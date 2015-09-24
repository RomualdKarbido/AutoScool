<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>



<section class="no-results not-found">
	
		<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyfifteen' ); ?></h1>
	

  <div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyfifteen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyfifteen' ); ?></p>
     
      
<form class="" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>
      <input type="text" class="form-control" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s">
      </td>
   	 <td style="width:50px; padding-left:10px;"> <button type="submit" id="searchsubmit" value="найти" class="btn btn-success" style="float:left;">Искать</button>
    </td>
    </tr>
  </tbody>
</table>
</form>
   
    
		<?php else : ?>

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfifteen' ); ?></p>
			
    <form class="" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s">
          </div>
          <button type="submit" id="searchsubmit" value="найти" class="btn btn-default">Искать</button>
   	</form>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
