<?php
function astra_child_enqueue_styles() {
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');


function display_sustainability_filter() {
    if (is_shop()) {
        ?>
         <form method="GET" id="sustainability-filter" class="sustainability-filter-shop">
         <div class="sustainability_filter_reset">
                <a class="" href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><?php _e('Reset Filter', 'woocommerce'); ?></a>
            </div>
             <select name="sustainability_rating" onchange="this.form.submit()">
                 <option value=""><?php _e('Filter by Sustainability Rating', 'woocommerce'); ?></option>
                 <option value="A" <?php echo isset($_GET['sustainability_rating']) ? selected('A', $_GET['sustainability_rating'], false) : ''; ?>>A</option>
                 <option value="B" <?php echo isset($_GET['sustainability_rating']) ? selected('B', $_GET['sustainability_rating'], false) : ''; ?>>B</option>
                 <option value="C" <?php echo isset($_GET['sustainability_rating']) ? selected('C', $_GET['sustainability_rating'], false) : ''; ?>>C</option>
                 <option value="D" <?php echo isset($_GET['sustainability_rating']) ? selected('D', $_GET['sustainability_rating'], false) : ''; ?>>D</option>
             </select>
         </form>
        <?php
    }
}
add_action('woocommerce_before_shop_loop', 'display_sustainability_filter', 10);


function filter_products_by_sustainability_rating($query) {
    if (!is_admin() && $query->is_main_query() && is_shop()) {
        if (isset($_GET['sustainability_rating']) && $_GET['sustainability_rating'] != '') {
            $meta_query = $query->get('meta_query');
            $meta_query[] = array(
                'key' => 'sustainability_rating',
                'value' => sanitize_text_field($_GET['sustainability_rating']),
                'compare' => '='
            );
            $query->set('meta_query', $meta_query);
        }
    }
}
add_action('pre_get_posts', 'filter_products_by_sustainability_rating');





function custom_display_products_shortcode($atts) {
    ob_start();

    $atts = shortcode_atts(array(
        'number' => 4, 
    ), $atts, 'display_products');


    $args = array(
        'post_type' => 'product',
        'posts_per_page' => intval($atts['number']),
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        ?>
        <div class="custom-product-grid">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="custom-product-item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="product-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                        </div>
                        <h2 class="product-title"><?php the_title(); ?></h2>
                        <div class="custom-product-price"><?php woocommerce_template_loop_price(); ?></div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
        <?php
    else :
        echo '<p>' . __('No products found', 'woocommerce') . '</p>';
    endif;

    wp_reset_postdata();

    return ob_get_clean();
}
add_shortcode('display_products', 'custom_display_products_shortcode');

