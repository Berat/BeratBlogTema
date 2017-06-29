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
            		<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>

					<div class="yazi-nerede">

					</div>
						<div class="yazi">
							<div class="yazi-resim">
							<?php if(has_post_thumbnail()){the_post_thumbnail();}else{?><div class="resim-yok"></div><?php }?>						
							</div>
								
								<div class="yazi-resim-gereksiz">
								
									<span class="yazi-gereksiz-kisi">
										<?php the_author(); ?>
									</span>
									<span class="yazi-gereksiz-kate">
										<?php the_category(', '); ?>
									</span>
									<span class="yazi-gereksiz-tarih">
											<?php the_time('d F Y') ?>
									</span>
									<span class="yazi-gereksiz-yorum">
										<a href="#">
											<?php comments_number('Yorum yok', '1 yorum', '% yorum'); ?>
										</a>
									</span>
								
								</div>
							
							<h1 class="yazi-baslik">
							
								<?php the_title(); ?>
							
							</h1>
							
							<div class="single-yazi">
								<div class="single-icerik">
									<?php the_content(); ?>
								</div>
							</div>							
						</div>
							<div class="yazi-alt">
							<div class="yazi-reklam">
									<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 468 x 60 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-5331942850747541"
     data-ad-slot="8003931517"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>			
							</div>
							<ul class="yazi-sosyal">
								<h3>Bu Yazıyı Paylaş</h3>
								<div class="yazi-sosyal-face">
									<a href="http://www.facebook.com/share.php?u=
<?php the_permalink('') ?>">
										<i class="fa fa-facebook"></i>
									</a>
								</div>
								<div class="yazi-sosyal-twi">
									<a href="http://twitter.com/home/?status=
<?php the_title(''); ?>+<?php the_permalink('') ?>">
										<i class="fa fa-twitter"></i>
									</a>
								</div>
								<div class="yazi-sosyal-goo">
									<a href="https://plus.google.com/share?url=
<?php the_permalink('') ?>">
										<i class="fa fa-google-plus"></i>
									</a>	
								</div>
							</ul>
						</div>
						<div class="rast ortala">
							<p class="rast-baslik">
								Rastgele Yazılar								
							</p>
							<?php 
								$args = array( 'posts_per_page' => 3, 'orderby' => 'rand' );
								$goster_baskan = get_posts( $args );
								foreach ( $goster_baskan as $post ) : setup_postdata( $post ); 
							?><div class="rast-yazi">
								<div class="rast-yazi-resim">
								<a href="<?php echo get_permalink();?>" width="75" height="75"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>" ><?php if(has_post_thumbnail()){the_post_thumbnail();}else{?><div class="benzer-resim-yok"></div><?php }?></a></div>
								
								<h2 class="rast-yazi-baslik">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<p class="rast-yazi-metin">
									<?php echo substr(get_the_excerpt(), 0,200); ?>[...]
								</p></div>
							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?><div class="temizle"></div></div>

						<div class="temizle"></div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>	
	<div id="yorum">

		<div class="yorum">

			<?php comments_template(); ?>

		</div>	
	
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