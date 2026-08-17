<?php
/**
 * Title: Blogs
 * Slug: titan-event-management/blogs
 * Categories: blogs
 * Block Types: core/template-part/blogs
 */

?>

<!-- wp:group {"className":"blogs-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%"},"anchor":"blogs-section"} -->
<div id="blogs-section" class="wp-block-group blogs-section" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0px;padding-bottom:var(--wp--preset--spacing--30);padding-left:0px">
    <!-- wp:group {"className":"blogs-head-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group blogs-head-box">
        <!-- wp:heading {"className":"blog-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"30px","textTransform":"none","fontStyle":"normal","fontWeight":"600","textAlign":"center"}},"textColor":"contrast","fontFamily":"lato"} -->
        <h2 class="wp-block-heading has-text-align-center blog-sec-title has-contrast-color has-text-color has-link-color has-lato-font-family"
            style="font-size:30px;font-style:normal;font-weight:600;text-transform:none">
            <?php esc_html_e('Latest Blogs & News', 'titan-event-management'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:buttons {"className":"blog-sec-btn"} -->
        <div class="wp-block-buttons blog-sec-btn">
            <!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"typography":{"fontSize":"14px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"10px","right":"10px","top":"7px","bottom":"7px"}},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"fontFamily":"lato","borderColor":"contrast"} -->
            <div class="wp-block-button"><a
                    class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color has-border-color has-contrast-border-color has-lato-font-family has-custom-font-size wp-element-button"
                    href="#"
                    style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:7px;padding-right:10px;padding-bottom:7px;padding-left:10px;font-size:14px;font-style:normal;font-weight:600;text-transform:capitalize">
                    <?php esc_html_e('View All', 'titan-event-management'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"className":"blogs-btm-box"} -->
    <div class="wp-block-query blogs-btm-box">
        <!-- wp:post-template {"className":"blog-boxes","style":{"typography":{"fontSize":"15px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"blog-img-box-main","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"},"width":"1px"},"shadow":"var:preset|shadow|natural","spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"borderColor":"contrast","layout":{"type":"default"}} -->
        <div class="wp-block-group blog-img-box-main has-border-color has-contrast-border-color"
            style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;box-shadow:var(--wp--preset--shadow--natural)">
            <!-- wp:group {"align":"wide","className":"blog-img-box","style":{"dimensions":{"minHeight":"300px"},"color":{"background":"#aeaeae"},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide blog-img-box has-background"
                style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#aeaeae;min-height:300px">
                <!-- wp:post-featured-image {"isLink":true,"sizeSlug":"full","align":"wide","className":"blog-sec-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-contrast-color has-text-color has-link-color"
                style="padding-top:20px;padding-bottom:0px">
                <!-- wp:post-date {"datetime":"2026-05-11T04:48:11.976Z","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->

                <!-- wp:post-author {"showAvatar":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-title {"level":3,"isLink":true,"className":"blog-sec-title","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"5px","bottom":"5px"}}},"textColor":"contrast","fontFamily":"lato"} /-->

            <!-- wp:post-excerpt {"moreText":"continue reading","excerptLength":15,"className":"blog-sec-desc","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast"} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->