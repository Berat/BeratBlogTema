<?php
/*Öne Çıkarılan görsel*/
add_theme_support( 'post-thumbnails');
set_post_thumbnail_size( 660, 182, true );
add_image_size( 'single-post-thumbnail', 660, 182 );
/*öne çıkarılan görsel son */

/* Ozet ayarlari */
function wpn_content_limit($content, $ilimit = false)
{
 $limit = ($ilimit) ? $ilimit : 650;
 $pad="...";
 $content = strip_tags($content);
 if(strlen($content) > $limit)
 {
 $content = substr($content,0,$limit);
 }
 echo $content.$pad;
}
/* Ozet Ayarlari */

// YORUM LISTELE
function sinyor_comment($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>
<?php
    $postAuthor = false;
    if($comment->comment_author_email == get_the_author_email()) {
    $postAuthor = true;}
    elseif($comment->comment_author_email == 'beratbozkurt12@gmail.com') {
    $postAuthor = true;}
?>
<li <?php if($postAuthor) {echo "class='authorcomment' ";} ?> id="li-yorum-<?php comment_ID() ?>">
<div class="y-sonyorum">
    <div id="comment-<?php comment_ID(); ?>">
        <div class="yorumavatar"><?php echo get_avatar($comment,$size='62'); ?></div>
        <div style="padding:10px 0px 5px 0px;margin:0px 0px 0px 80px;">
			<?php printf(__('<span class="y-baslik">%s</span>'), get_comment_author_link()) ?>   
			<span class="y-tarih" style="margin-left:20px;"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(get_comment_date()); ?></a></span>
			<?php if ($comment->comment_approved == '0') : ?>
			<em class="comment-awaiting-moderation">Yorumunuz onaylandıktan sonra yayınlanacaktır.</em>
			<?php endif; ?>
			<p><?php comment_text() ?></p><br />
			<div class="cevapla"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div> 
		</div>
    </div>
</div>
<?php }

/* sayfalama ba? */
function sayfalama($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }
     if(1 != $pages)
     {
         echo "<div class='sayfalama'>";
 
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'><span class='sayf'>İlk</span></a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'><span class='sayf'>Önceki</span></a>";
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='sayf-secili'>".$i."</span>":"<a href='".get_pagenum_link($i)."'><span class='sayf'>".$i."</span></a>";
             }
         }
         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'><span class='sayf'>Sonraki</span></a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'><span class='sayf'>Son</span></a>";
         echo "</div>";
     }
}
/* sayfalama son */

/* Widget Uyumu bas */
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => __( 'Sidebar Alanı', 'bb' ),
'before_widget' => '<div class="sidebar">',
'after_widget' => '</div>',
'before_title' => '<div class="side-baslik"><div class="side-cigi"></div><h3 class="side-bas">',
'after_title' => '</h3></div>',
));
/* Widget Uyumu son */

/* Özel Menuler Başlangıç*/
?>
<?php

/*

 * Plugin Name: BeratBlog - Kategori Bileşeni

 * Plugin URI: http://www.beratbozkurt.net

 * Description: Bu bileşen ile kategorileri güzel bir biçimde sunabilirsiniz.

 * Version: 1.0

 * Author: Berat Bozkurt

 * Author URI: http://www.beratbozkurt.net

 */



add_action( 'widgets_init', 'bb_kategori_widgets' );



function bb_kategori_widgets() {

    register_widget( 'bb_kategori_widget' );

}



class bb_kategori_widget extends WP_Widget {



function bb_kategori_widget() {

    

        /* Widget settings */

        $widget_ops = array( 'classname' => 'widget_kategori', 'description' => __('Bu bileşen ile kategorileri güzel bir biçimde sunabilirsiniz.', 'bb') );



        /* Create the widget */

        $this->WP_Widget( 'bb_kategori_widget', __('BeratBlog - Kategori Bileşeni', 'bb'), $widget_ops );

    }

    

function widget( $args, $instance ) {

            

    ?>

         <!--Kategoriler Alanı-->
                
                <div class="sidebar">
                
                    <div class="side-baslik">
                        
                        <span class="kategori-cigi"></span>

                            <span class="side-bas">Kategoriler</span>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="side-u">
                        
                        <ul class="side-kategori">
                           <span> 
	         <?php
                        $variable = wp_list_categories('echo=0&show_count=1&title_li=');?>
	
                        <?php $variable = preg_replace('~\((\d+)\)(?=\s*+<)~', '$1', $variable); ?>
                        <?php echo $variable;
                        ?></span>
                        </ul>

                    </div>
                
                </div>
                
        <?php

        echo $after_widget;

    }

    

function update( $new_instance, $old_instance ) {}



    function form( $instance ) {

    

        $instance = wp_parse_args( (array) $instance, $defaults ); ?>

        

        <p>

            Bu özel kategori bileşeni ile görünümünüze şıklık katabilirsiniz.

        </p>  
    <?php

    }

}

?>
<?php 


/*

 * Plugin Name: BeratBlog - Sosyal Medya Bileşeni

 * Plugin URI: http://www.beratbozkurt.net

 * Description: Bu bileşen ile sosyal medyayi güzel bir biçimde sunabilirsiniz.

 * Version: 1.0

 * Author: Berat Bozkurt

 * Author URI: http://www.beratbozkurt.net

 */



add_action( 'widgets_init', 'bb_sosyal_widgets' );



function bb_sosyal_widgets() {

    register_widget( 'bb_sosyal_widget' );

}



class bb_sosyal_widget extends WP_Widget {



function bb_sosyal_widget() {

    

        /* Widget settings */

        $widget_ops = array( 'classname' => 'widget_sosyal', 'description' => __('Bu bileşen ile sosyal medyayı güzel bir biçde sunabilirsiniz.
', 'bb') );



        /* Create the widget */

        $this->WP_Widget( 'bb_sosyal_widget', __('BeratBlog - Sosyal Medya Bileşeni', 'bb'), $widget_ops );

    }

    

function widget( $args, $instance ) {

            

    ?>
   <!--Sosyal Alanı-->
                
                <div class="sidebar">
                    
                    <ul class="sosyal">
                    
                        <div class="facebook">
                            <a href="<?php if(get_option('bb_facebook')) { 

echo get_option('bb_facebook'); 

}else { 

?>#<?php } ?>" title="Facebook Sayfam">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>
                    
                        <div class="twitter">
                            <a href="<?php if(get_option('bb_twitter')) { 

echo get_option('bb_twitter'); 

}else { 

?>#<?php } ?>" title="Twitter Sayfam">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    
                        <div class="google">
                            <a href="<?php if(get_option('bb_google')) { 

echo get_option('bb_google'); 

}else { 

?>#<?php } ?>" title="Google Sayfam">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    
                        <div class="rss">
                            <a href="<?php if(get_option('bb_rss')) { 

echo get_option('bb_rss'); 

}else { 

?>#<?php } ?>" title="RSS">
                                <i class="fa fa-rss"></i>
                            </a>
                        </div></ul>
                    
                </div> 
        <?php

        echo $after_widget;

    }

    

function update( $new_instance, $old_instance ) {}



    function form( $instance ) {

    

        $instance = wp_parse_args( (array) $instance, $defaults ); ?>

        

        <p>

            Bu özel sosyal medya bileşeni ile görünümünüze şıklık katabilirsiniz. Bileşenin ayalarını tema panelinden yapabilirsiniz

        </p>
    <?php

    }

}
?>
<?php

/*

 * Plugin Name: BeratBlog - Popüler Yazılar Bileşeni

 * Plugin URI: http://www.beratbozkurt.net

 * Description: Bu bileşen ile popüler yazıları güzel bir biçimde sunabilirsiniz.

 * Version: 1.0

 * Author: Berat Bozkurt

 * Author URI: http://www.beratbozkurt.net

 */



add_action( 'widgets_init', 'bb_popi_widgets' );



function bb_popi_widgets() {

    register_widget( 'bb_popi_widget' );

}



class bb_popi_widget extends WP_Widget {



function bb_popi_widget() {

    

        /* Widget settings */

        $widget_ops = array( 'classname' => 'widget_popi', 'description' => __('Bu bileşen ile Popüler Yazıları güzel bir biçimde sunabilirsiniz.
', 'bb') );



        /* Create the widget */

        $this->WP_Widget( 'bb_popi_widget', __('BeratBlog - Popüler Yazılar Bileşeni', 'bb'), $widget_ops );

    }

    

function widget( $args, $instance ) {

            

    ?>
                <!--Popüler Yazılar-->
                
                <div class="sidebar">
                    <div class="side-baslik">
                        <span class="popi-cizgi"></span>
                        <span class="side-bas">Popüler Yazılar</span>           
                    </div>
                <div style="clear:both;"></div>
                <div class="side-u">
                    <div class="popi-ust">
                        <?php $the_query = new WP_Query("showposts=3&orderby=comment_count"); while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="popi-yazi">
                        <span class="popi-resim">   
                            <a href="<?php echo get_permalink();?>" width="660" height="182"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>" ><?php if(has_post_thumbnail()){the_post_thumbnail();}else{?><div class="popi-resim-yok"></div><?php }?></a>
                        </span>
                        <span class="popi-baslik">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                        </span>
                        <div class="popi-gereksiz">
                                <span class="popi-gereksiz-tarih"><?php the_time('d/m/Y') ?></span> - 
                                <span class="popi-gereksiz-yorum"><a href="<?php comments_link(); ?>">
                                    <?php comments_number('Yorum yok', '1 yorum', '% yorum'); ?></span>
                                </a>
                        </div>
                    </div><?php endwhile; ?><?php wp_reset_query(); ?>
                </div>
            </div>
            </div> 
        <?php

        echo $after_widget;

    }

    

function update( $new_instance, $old_instance ) {}



    function form( $instance ) {

    

        $instance = wp_parse_args( (array) $instance, $defaults ); ?>

        

        <p>

            Bu popüler yazılar bileşeni ile görünümünüze şıklık katabilirsiniz.

        </p>
    <?php
    }
}
/*Özel Menu Bitiş*/
?>
<?php
/* TEMA PANELI */
if ( STYLESHEETPATH == TEMPLATEPATH ) {
define('OF_FILEPATH', TEMPLATEPATH);
define('OF_DIRECTORY', get_bloginfo('template_directory'));
} else {
define('OF_FILEPATH', STYLESHEETPATH);
define('OF_DIRECTORY', get_bloginfo('stylesheet_directory'));
}
require_once (OF_FILEPATH . '/admin/admin-functions.php');
require_once (OF_FILEPATH . '/admin/admin-interface.php');
require_once (OF_FILEPATH . '/admin/theme-options.php');
require_once (OF_FILEPATH . '/admin/theme-functions.php');
/* #TEMA PANELI */
?>