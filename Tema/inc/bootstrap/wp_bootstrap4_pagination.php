<?php
/**
 * WordPress Bootstrap Pagination
 *
 * Based on: https://github.com/talentedaamer/Bootstrap-wordpress-pagination
 *
 * License: GNU GENERAL PUBLIC LICENSE
 *
 *
 * <ul class="pagination" data-pg-collapsed wp-bs-post-pagination>
<li class="page-item">
<a class="page-link" href="#">Previous</a>
</li>

<li class="page-item">
<a class="page-link" href="#">1</a>
</li>

<li class="page-item">
<a class="page-link" href="#">2</a>
</li>

<li class="page-item">
<a class="page-link" href="#">3</a>
</li>

<li class="page-item">
<a class="page-link" href="#">Next</a>
</li>
</ul>
 * 
 */
function wp_bootstrap4_pagination( $args = array() ) {

    $text_domain = null;

    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( '&laquo;', 'aarn' ),
        'next_string'     => __( '&raquo;', 'aarn' ),
        'first_string'    => __( 'First', 'aarn'),
        'last_string'     => __( 'Last', 'aarn'),
        'before_output'   => '<ul class="pagination">',
        'after_output'    => '</ul>'
    );

    $args = wp_parse_args(
        $args,
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );

    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );

    if ( $count <= 1 )
        return FALSE;

    if ( !$page )
        $page = 1;

    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }

    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );

    $firstpage = esc_attr( get_pagenum_link(1) );
    if ( $firstpage && (1 != $page || true) )
        $echo .= '<li class="page-item previous'.($page == 1 ? ' disabled' : '').'"><a class="page-link" href="' . $firstpage . '" aria-label="'.__( 'First', 'aarn' ).'">' . $args['first_string'] . '</a></li>';
    if ( $previous && (1 != $page || true) )
        $echo .= '<li'.($page == 1 ? ' class="page-item disabled"' : '').'><a class="page-link" href="' . $previous . '" title="' . __( 'previous', 'aarn') . '" aria-label="' . __( 'previous', 'aarn') . '">' . $args['previous_string'] . '</a></li>';

    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                //$echo .= '<li class="active"><span class="active">' . str_pad( (int)$i, 2, '0', STR_PAD_LEFT ) . '</span></li>';
                $echo .= sprintf( '<li class="page-item active"><a class="page-link active" href="%s">%d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            } else {
                $echo .= sprintf( '<li class="page-item"><a class="page-link" href="%s">%d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }

    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page || true) )
        $echo .= '<li'.($page == $count ? ' class="page-item disabled"' : '').'><a class="page-link" href="' . $next . '" title="' . __( 'next', 'aarn') . '" aria-label="' . __( 'next', 'aarn') . '">' . $args['next_string'] . '</a></li>';

    $lastpage = esc_attr( get_pagenum_link($count) );
    if ( $lastpage ) {
        $echo .= '<li class="page-item next'.($page == $count ? ' disabled' : '').'"><a class="page-link" href="' . $lastpage . '" aria-label="' . __( 'Last', 'aarn') . '">' . $args['last_string'] . '</a></li>';
    }
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}
