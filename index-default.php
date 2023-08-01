<?php get_header(); ?>
<div class="ltdtitle">
	<div class="container_site">
    <div class="icon_lasstsend"><h1>آخرین ارسالی های سایت</h1></div>
    <div class="btn_archive">
    	
    </div>
    </div>
</div><!--END ltdtitle -->	
    <main class="container_main">
    
		<?php include("siderbar_right.php"); ?>
        
        <section class="Last_Updates">
        <?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
        	<div class="post_list">
            <div class="title_post_list">
            <a href="<?php the_permalink() ?>"><i class="fa fa-film" aria-hidden="true"></i> <?php the_title(); ?></a>
            <div class="like_post"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
            <div class="cm_post_list"> 
            <i class="fa fa-comments" aria-hidden="true"></i>	Comment :  <?php comments_popup_link('0', ' ۱ ', ' % '); ?>
            </div>
            <div class="imdb">
            <a href="<?php $post_meta = get_post_meta($post->ID, 'custom_imdb_movies',true); if (!empty($post_meta)) { ?>
						  <?php echo $post_meta; ?>
             			  <?php } ?>" original-title="مشاهده پروفایل فیلم" class="postimdb tips-teh"></a></div>
                          <div class="add-me"><?php if (function_exists('wpfp_link')) { wpfp_link(); } ?></div>
            </div>
            	<div class="img_post_list"><a href="<?php the_permalink() ?>"><?php if((function_exists('has_post_thumbnail'))&&(has_post_thumbnail())){
				  echo get_the_post_thumbnail($post->ID);}else{
				   echo default_image();}?>
				</a></div><!--img_post_list-->
                <div class="blog_post_list">
                	<ul>
                <li><i class="fa fa-video-camera" aria-hidden="true"></i> سال ساخت :  
                <a href=""><?php $post_meta = get_post_meta($post->ID, 'custom_enteshar',true); if (!empty($post_meta)) { ?>
				<?php echo $post_meta; ?>
                <?php } ?></a></li>
                        <li><i class="fa fa-flag" aria-hidden="true"></i> ژانر :  <a href=""> <?php the_category(', ') ?> </a></li>
                         <li><i class="fa fa-star-half-o" aria-hidden="true"></i> امتياز  : 
                          <a href="<?php $post_meta = get_post_meta($post->ID, 'custom_imdb_movies',true); if (!empty($post_meta)) { ?>
						  <?php echo $post_meta; ?>
             			  <?php } ?>"><?php $post_meta = get_post_meta($post->ID, 'custom_imdb_emtiaz',true); if (!empty($post_meta)) { ?>
						  <?php echo $post_meta; ?>
             			  <?php } ?>
                         <img src="<?php bloginfo('template_url'); ?>/images/imdb.png" /> </a></li>
                          <li><i class="fa fa-television" aria-hidden="true"></i> کیفیت :  
                          <a href="">  <?php $post_meta = get_post_meta($post->ID, 'custom_kefiat',true); if (!empty($post_meta)) { ?>
							<?php echo $post_meta; ?>
                            <?php } ?> </a></li>
                           <li><i class="fa fa-language" aria-hidden="true"></i> زیرنویس  : 
                            <a href="">  <?php $post_meta = get_post_meta($post->ID, 'custom_sub',true); if (!empty($post_meta)) { ?>
							<?php echo $post_meta; ?>
                            <?php } ?> </a></li>
                            <li><i class="glyphicon glyphicon-globe" aria-hidden="true"></i> کشور سازنده  :  
                            <a href="">  <?php $post_meta = get_post_meta($post->ID, 'custom_sazande',true); if (!empty($post_meta)) { ?>
							<?php echo $post_meta; ?>
                            <?php } ?> </a></li>
                             <li><i class="fa fa-user" aria-hidden="true"></i> کارگردان  :  
                             <a href=""> <?php $post_meta = get_post_meta($post->ID, 'custom_kargardan',true); if (!empty($post_meta)) { ?>
								<?php echo $post_meta; ?>
                                <?php } ?>  </a></li>
                              <li><i class="fa fa-pencil" aria-hidden="true"></i> نویسنده  : 
                               <a href="">  <?php $post_meta = get_post_meta($post->ID, 'custom_nevisande',true); if (!empty($post_meta)) { ?>
								<?php echo $post_meta; ?>
                                <?php } ?> </a></li>
                    </ul>
                </div><!--END blog_post_list-->
                <div class="star_film"><i class="fa fa-users" aria-hidden="true"></i><span>ستارگان  :  </span><p>  
                	<?php $post_meta = get_post_meta($post->ID, 'custom_bazigran',true); if (!empty($post_meta)) { ?>
					<?php echo $post_meta; ?>
                    <?php } ?>
                 </p></div>
                <div class="xolase_dastan">
                <p>
                <?php the_content_rss('', TRUE, '', 60); ?>
                </p>
                </div>
                <div class="footerpst">
                	<div class="littles"></div>
                	<div class="infos">
                    <p>
                    <i class="fa fa-clock-o fa-fw"></i><?php echo jdate ('l d F Y , H:i:s') ; ?></p>
                    <p>
                    <i class="fa fa-pie-chart fa-fw"></i><?php if(function_exists('the_views')) { the_views(); } ?></p>
                    
                    </div><!--infos-->
                    <a href="<?php the_permalink() ?>" class="readmore"><b>D</b>ownload</a>
                </div><!--footerpst-->
            </div><!--post_list-->
            
        <?php endwhile; ?>
		<?php endif; ?>
        <div class="pages_nav"><?php mrcode_numeric_posts_nav(); ?></div>
        </section>
    </main>
<?php get_footer(); ?>