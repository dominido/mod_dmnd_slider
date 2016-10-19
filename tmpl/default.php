<?php
defined('_JEXEC') or die('Restricted access');
?>

<link rel="stylesheet" href="<?php echo JURI::base(); ?>modules/mod_dmnd_slider/assets/slick.css">
<link rel="stylesheet" href="<?php echo JURI::base(); ?>modules/mod_dmnd_slider/assets/slider.css">
<script src="<?php echo JURI::base(); ?>modules/mod_dmnd_slider/assets/slick.min.js"></script>

<script type="text/javascript">

    jQuery(document).ready(function() {

        jQuery('.dmnd-slider').slick({
            speed: 1300,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            adaptiveHeight: true,
            responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            ]
        }); 

        jQuery('.slide-item-a').hover(
            function(){
                jQuery(this).find('.slide-item-span').stop().animate({opacity: 0.8});
            },
            function(){
                jQuery(this).find('.slide-item-span').stop().animate({opacity: 0});
            }
        ); 

    });
</script>

    
<div class="dmnd-slider">
    <?php for ($i=0; $i < count($slides); $i++) { ?>
    <div class="slide-item">
        <a class="slide-item-a" href="<?php echo JRoute::_('index.php?Itemid=142') .'/'. $slides[$i]->city_alias.'/'.$slides[$i]->alias; ?>">   
            <div class="slide-item-mask">                             
                <img src="images/hotels/prev/<?php echo $slides[$i]->prev; ?>" alt="">
                <div class="slide-item-span">
                    <div class="slide-item-span-span"><?php echo $slides[$i]->city; ?></div>
                    <div class="slide-item-span-span"><?php echo $slides[$i]->title; ?></div>
                </div>
            </div>    
        </a>
    </div>
    <?php } ?> 
</div>