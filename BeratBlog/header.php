<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title><?php if(get_option('bb_tit')) { 
echo get_option('bb_tit'); 
}else { 
echo bloginfo('name');
} ?>
  </title>
  <meta name="keywords" content="<?php echo get_option('bb_kw'); ?>" />
  <meta name="description" content="<?php echo get_option('bb_ds'); ?>" />
  <meta name="robots" content="index, follow" />
  <?php wp_get_archives('type=monthly&format=link'); ?>
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="author" href="<?php echo get_option('bb_author') ?>"/>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/reset.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/font.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" />
  <link rel="shortcut icon" href="<?php echo get_option('bb_favicon'); ?>" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51812599-1', 'auto');
  ga('send', 'pageview');

</script>
  <?php wp_head(); ?>
</head>
<body topmargin="0" leftmargin="0">

    <div class="header">
            
    <!-- Header -->

        <div class="ortala">

            <!--logo-->

            <div class="logo">
                    
                <a href="<?php bloginfo('url'); ?>">
                    <?php if (get_option('bb_logo') == "" ) { ?>
                        <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('description'); ?>" title="<?php bloginfo('description'); ?>" width="275" height="65" />
                    <?php }else { ?>
                        <img src="<?php echo get_option('bb_logo'); ?>"  alt="<?php bloginfo('description'); ?>" title="<?php bloginfo('description'); ?>" width="275" height="65" />
                    <?php } ?>
                </a>

            </div>

           <!--logo-->

           <!--Menu-->
    
                <div class="menu">
                    <ul>
                        <li>
                                    <a href="<?php if(get_option('bb_1-menu-url')) { 
echo get_option('bb_1-menu-url'); 
}else { 
?>#<?php } ?>" title="<?php if(get_option('bb_1-menu-bas')) { 
echo get_option('bb_1-menu-bas'); 
}else { 
?>Ayarlanacak<?php } ?>">
        <div class="menuisim"><?php if(get_option('bb_1-menu-bas')) { 
echo get_option('bb_1-menu-bas'); 
}else { 
?>Ayarlanacak<?php } ?><span><?php if(get_option('bb_1-menu-desc')) { 
echo get_option('bb_1-menu-desc'); 
}else { 
?>Ayarlanacak<?php } ?></span></div>   
        </a>  
                        </li>
                         <li>
                              <a href="<?php if(get_option('bb_2-menu-url')) { 
echo get_option('bb_2-menu-url'); 
}else { 
?>#<?php } ?>" title="<?php if(get_option('bb_2-menu-bas')) { 
echo get_option('bb_2-menu-bas'); 
}else { 
?>Ayarlanacak<?php } ?>">
        <div class="menuisim"><?php if(get_option('bb_2-menu-bas')) { 
echo get_option('bb_2-menu-bas'); 
}else { 
?>Ayarlanacak<?php } ?><span><?php if(get_option('bb_2-menu-desc')) { 
echo get_option('bb_2-menu-desc'); 
}else { 
?>Ayarlanacak<?php } ?></span></div>   
        </a>
                        </li>
                         <li>
                              <a href="<?php if(get_option('bb_3-menu-url')) { 
echo get_option('bb_3-menu-url'); 
}else { 
?>#<?php } ?>" title="<?php if(get_option('bb_3-menu-bas')) { 
echo get_option('bb_3-menu-bas'); 
}else { 
?>Ayarlanacak<?php } ?>">
        <div class="menuisim"><?php if(get_option('bb_3-menu-bas')) { 
echo get_option('bb_3-menu-bas'); 
}else { 
?>Ayarlanacak<?php } ?><span><?php if(get_option('bb_3-menu-desc')) { 
echo get_option('bb_3-menu-desc'); 
}else { 
?>Ayarlanacak<?php } ?></span></div>   
        </a> 
                        </li>
                         <li>
                             <a href="<?php if(get_option('bb_4-menu-url')) { 
echo get_option('bb_4-menu-url'); 
}else { 
?>#<?php } ?>" title="<?php if(get_option('bb_4-menu-bas')) { 
echo get_option('bb_4-menu-bas'); 
}else { 
?>Ayarlanacak<?php } ?>">
        <div class="menuisim"><?php if(get_option('bb_4-menu-bas')) { 
echo get_option('bb_4-menu-bas'); 
}else { 
?>Ayarlanacak<?php } ?><span><?php if(get_option('bb_4-menu-desc')) { 
echo get_option('bb_4-menu-desc'); 
}else { 
?>Ayarlanacak<?php } ?></span></div>   
        </a> 
                        </li>
                    </ul>

                </div>

           <!--Menu-->

        </div>

    </div>
