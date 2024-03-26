<?php 
$content = ( isset( $this->strings['free_vs_pro'] ) ) ? $this->strings['free_vs_pro'] : array();
if ( empty( $content ) ) {
    return;
}
?>
<div class="cwwsection cww-comparision-wrapper">
<div class="compare-table table-responsive">
<table class="table">
    <thead>
        <tr>
            <th class="db-bk-color-one"><?php esc_html_e('Product Features', 'cww-portfolio'); ?></th>
            <th class="db-bk-color-two"><?php esc_html_e('Free', 'cww-portfolio'); ?></th>
            <th class="db-bk-color-two"><?php esc_html_e('Premium', 'cww-portfolio'); ?></th>
        </tr>
    </thead>
     <tbody>
        <?php foreach($content['features'] as $key => $value):
            $class_1 = isset($value[2]) ? 'dashicons-before '.$value[2] : '';
            $class_2 = isset($value[3]) ? 'dashicons-before '.$value[3] : '';
        ?>
        <tr>
            <td class="db-width-perticular"><?php echo esc_html($key); ?></td>
            <td class="<?php echo esc_attr($class_1); ?>"><?php echo esc_html($value[0]); ?></td>
            <td class="<?php echo esc_attr($class_2); ?>"><?php echo esc_html($value[1]); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

    </div><!-- .demo-description -->

<?php if(! class_exists('CWW_Portfolio_Pro')){ ?>
<div class="button-wrapper">
    <?php
    $pro_link = 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/';
    ?>
	<a href="<?php echo esc_url($pro_link);?>" class="btn" target="_blank"><?php esc_html_e('Buy Now - $19','cww-portfolio'); ?></a>
</div>
<?php } ?>
</div>
<?php

$this->admin_sidebar_contents();