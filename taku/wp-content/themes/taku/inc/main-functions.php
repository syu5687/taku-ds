<?php
/**
 * MAIN FUNCTIONS
 */




// THE TAXS IN A POST
function theTaxsPost( $tax_slug = 'category' ) {
    global $post;
    if( !$post ) return false;
    $tax_slug = ($tax_slug) ? $tax_slug : 'category';
    // GET RESULT
    $taxs_html = '';
    $taxonomies = wp_get_post_terms( $post->ID, $tax_slug );
    foreach($taxonomies as $taxonomy) {
        if($taxonomy->term_id != 1) {
            $taxs_html .= '<li><a href="'. get_term_link($taxonomy) .'">'.$taxonomy->name.'</a></li>';
        }
    }
    echo $taxs_html;
}


// THE LIST TAX
function theTaxs( $tax_slug = 'category' ) {
    $tax_slug = ($tax_slug) ? $tax_slug : 'category';
    // GET RESULT
    $taxs_html = '';
    $taxonomies = get_terms( array(
        'taxonomy'   => $tax_slug,
        'hide_empty' => false,
    ) );
    foreach($taxonomies as $taxonomy) {
        if($taxonomy->term_id != 1) {
            $taxs_html .= '<li><a href="'. get_term_link($taxonomy) .'">'.$taxonomy->name.'</a></li>';
        }
    }
    echo $taxs_html;
}


// THEME PAGINATION FUNCTION
function theme_pagination( $post_query = null ) {
    global $paged, $wp_query;
    
    $translate['next'] = '>';
    $translate['prev'] = '<'; 
    
    if( empty( $paged ) ) $paged = 1;
    $prev = $paged - 1;             
    $next = $paged + 1;
    
    $end_size = 1;
    $mid_size = 2;
    $show_all = false;
    $dots = false;

    $pagi_query = $wp_query;
    if( isset($post_query) && $post_query ) {
        $pagi_query = $post_query;
    }

    if( ! $total = $pagi_query->max_num_pages ) $total = 1;
    
    if( $total > 1 )
    {
        echo '<div class="pagingNav">';
        echo '<ul class="pagi_nav_list">';
        
        if( $paged > 1 ){
            echo '<li class="p-control prev"><a href="'. previous_posts(false) .'">'. $translate['prev'] .'</a></li>';
        }

        for( $i = 1; $i <= $total; $i++ ){
            if ( $i == $paged ){
                echo '<li class="active"><a>'. $i .'</a></li>';
                $dots = true;
            } else {
                if ( $show_all || ( $i <= $end_size || ( $paged && $i >= $paged - $mid_size && $i <= $paged + $mid_size ) || $i > $total - $end_size ) ){
                    echo '<li><a href="'. get_pagenum_link($i) .'">'. $i .'</a></li>';
                    $dots = true;
                } elseif ( $dots && ! $show_all ) {
                    echo '<li class="dots"><a>...</a></li>';
                    $dots = false;
                }
            }
        }
      
        if( $paged < $total ){
            echo '<li class="p-control next"><a href="'. next_posts(0,false) .'">'. $translate['next'] .'</a></li>';
        }

      	echo '</ul>';
      	echo '</div>';
    }
}


// GET QUERY PAGED NUMBER
function get_query_paged() {
	return (get_query_var('paged')) ? get_query_var('paged') : 1;
}


// THE SINGLE PAGINATION
function the_single_pagination() {
    $prev_post = get_previous_post();
    $next_post = get_next_post();
?>
    <ul class="pagination">
        <?php if( $prev_post ): ?>
            <li><a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="prev">ウィンターセール開催 !</a></li>
        <?php endif; ?>
        <?php if( $next_post ): ?>
            <li><a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next">マリアナ　イベント開催 !</a></li>
        <?php endif; ?>
    </ul>
<?php
}