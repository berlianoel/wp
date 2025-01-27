<?php $unique_id = esc_attr(wp_unique_id('search-form-')); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="<?php echo $unique_id; ?>">
        <span class="screen-reader-text"><?php _e('Search for:', 'berliano'); ?></span>
        <input type="search" id="<?php echo $unique_id; ?>" class="search-form__input" placeholder="<?php echo esc_attr_x('Search', 'Placeholder', 'berliano'); ?>" value="<?php echo get_search_query(); ?>" name="s" />

        <?php berliano_the_theme_svg('search'); ?>
    </label>
</form>