<!-- Header -->
<?php get_header(); ?>
<!--#Header -->

<!-- İcerik -->

	<div class="icerik">

    <div class="ortala">
        
        <!--Sidebar-->

      		<?php get_sidebar(); ?>

        <!--Sidebar-->

        <!--Content-->

			<div id="content">
			
			<!-- Yazı-Kısım-1 -->
			
				<div class="content">
					<!-- Yazı üsü Çizgi -->
            
					<div class="content-ust-cizgi"></div>
					<div class="ust-bas">
						<?php printf( __( '"%s" Kategorisindeki Yazılar', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>					</div>
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<div class="yazi">
							<div class="yazi-resim">
							
								<a href="<?php echo get_permalink();?>" width="660" height="182"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>" ><?php if(has_post_thumbnail()){the_post_thumbnail();}else{?><div class="resim-yok"></div><?php }?></a>	
							
							</div>
								
								<div class="yazi-resim-gereksiz">
								
									<span class="yazi-gereksiz-kisi">
										<?php the_author(); ?>
									</span>
									<span class="yazi-gereksiz-kate">
										<?php the_category(', '); ?>
									</span>
									<span class="yazi-gereksiz-tarih">
											<?php the_time('d F y') ?>
									</span>
									<span class="yazi-gereksiz-yorum">
										<a href="#">
											<?php comments_number('Yorum yok', '1 yorum', '% yorum'); ?>
										</a>
									</span>
								
								</div>
							
							<div class="yazi-baslik">
							
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							
							</div>
							
							<p class="yazi-icerik">
								<?php wpn_content_limit(get_the_content(),125); ?>
							</p>
					
						</div>
					<?php endwhile; ?>
					<?php sayfalama(); ?>
				<?php endif; ?>
				</div>
			
			<!-- Yazı-Kısım-1 -->
           
        </div>

        <!--Content-->
			<div class="temizle"></div>
    </div>

</div>
<!--#İcerik -->

<!-- Footer -->
<?php get_footer(); ?>
<!--#Footer -->