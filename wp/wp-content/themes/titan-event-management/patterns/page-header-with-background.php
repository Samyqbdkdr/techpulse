<?php
/**
 * Title: Page Header With Background
 * Slug: titan-event-management/page-header-with-background
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/innerbanner.png","className":"inner-banner-section","dimRatio":50,"isUserOverlayColor":true,"minHeight":232,"minHeightUnit":"px","tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main id="primary" class="wp-block-cover inner-banner-section" style="margin-top:0;margin-bottom:0;min-height:232px">
  <img class="wp-block-cover__image-background" alt=""
    src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/innerbanner.png"
    data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
  <div class="wp-block-cover__inner-container">
    <!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-large","fontFamily":"inter"} /-->

  </div>
</main>
<!-- /wp:cover -->