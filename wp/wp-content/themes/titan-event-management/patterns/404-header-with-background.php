<?php
 /**
  * Title: 404 Header With Background
  * Slug: titan-event-management/404-header-with-background
  */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/innerbanner.png","className":"inner-banner-section","dimRatio":50,"isUserOverlayColor":true,"minHeight":232,"minHeightUnit":"px","tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main id="primary" class="wp-block-cover inner-banner-section" style="margin-top:0;margin-bottom:0;min-height:232px">
  <img class="wp-block-cover__image-background" alt=""
    src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/innerbanner.png"
    data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
  <div class="wp-block-cover__inner-container">
    <!-- wp:heading {"style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"700","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontFamily":"inter"} -->
    <h2
      class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-inter-font-family"
      style="font-size:50px;font-style:normal;font-weight:700"><?php esc_html_e('404 Not Found', 'titan-event-management'); ?></h2>
    <!-- /wp:heading -->
  </div>
</main>
<!-- /wp:cover -->