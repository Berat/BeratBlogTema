
	<div id="footer">
	
		<div class="footer ortala">
		
			<div class="footer-sol">
			
			<span>
				Tasarım ve Kodlama : <a target="_blank" href="http://www.beratbozkurt.net/">Berat Bozkurt</a>
			</span>
			
			</div>
			
			<div class="footer-sag">
				
				<span>
					<?php
						$toplam_yazi = wp_count_posts( 'post' );
						$toplam_yazi = $toplam_yazi->publish;
						$toplam_kategori = wp_count_terms('category');
						$toplam_yorum = get_comment_count();
						$toplam_yorum = $toplam_yorum['approved'];
						echo 'Sitemizde '; echo $toplam_kategori; echo ' kategoride '; echo $toplam_yazi; echo ' adet yazı ve '; echo $toplam_yorum; echo' adet yorum bulunmaktadır.';
						?>
				</span>
			
			</div>

		</div>
	
	</div>

<!--#Footer -->
<?php wp_footer(); ?>
</body>
</html>