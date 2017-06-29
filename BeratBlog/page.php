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
							<h1 class="yazi-baslik">
							
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							
							</h1>
							
							<div class="yazi-icerik">
								<?php the_content(); ?>
							</div>
					
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