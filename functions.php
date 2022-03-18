<?php 
/* -----------------------------------------------------------
 * add by shortcode star rating 
 * ----------------------------------------------------------- */
/*
 * Parms to be used.
 * total_stars = integer maximum 5 ex: total_stars="5"
 * rated_stars = integer maximum 5 ex: rated_stars="5"
 * color_rated_stars = string ex: orange
 * alignment = string ex: center
 * font-size = string ex: 16px
 
 Shortcode ex:
 * [star_rate total_stars="5" rated_stars="3"  alignment="center" font-size="22px" ]
 */

function addStarRating ( $attr ) {

    $args = shortcode_atts( array(
        'total_stars' => 5,
        'rated_stars' => 0,    
        'color_rated_stars' => 'orange',   
        'alignment' => 'center',
        'font-size' => '16px',        
    ), $attr);
    
    define( 'STARS_LIMIT' , 5 );

    $total_stars = $args['total_stars'];
    $rated_stars = $args['rated_stars'];
    $color_rated_stars = $args['color_rated_stars'];
    $text_alignment = $args['alignment'];
    $font_size = $args['font-size'];
    
    $output = '<div id="starsRate" style="text-align:'. $text_alignment .'">';
    
    if ( $total_stars <= STARS_LIMIT ) {
       
        // loop to render the stars
        for ( $count = 0; $count < $total_stars; $count++ ) {                                      
            
            // controls the colors of stars to be rendered            
            $rated_stars > $count ?  $color_rated_stars : $color_rated_stars = '#c7c7c7';            
            
            $output.='<span  
                        class="dashicons dashicons-star-filled" 
                        style="font-size:'. $font_size .'; 
                        color:' . $color_rated_stars . '"
                      >
                    </span>';                 
        };
    }

    $output.= '</div>';
   
   return $output;
}
add_shortcode('star_rate', 'addStarRating');
