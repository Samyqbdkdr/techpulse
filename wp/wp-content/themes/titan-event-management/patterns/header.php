<?php
/**
 * Title: Header
 * Slug: titan-event-management/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"className":"header-box-upper header-section","style":{"spacing":{"padding":{"left":"0","right":"0"},"margin":{"top":"0px","bottom":"0"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|contrast","width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group header-box-upper header-section"
    style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0px;margin-bottom:0;padding-right:0;padding-left:0">
    <!-- wp:group {"className":"header-middle","style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"left":"0px","right":"0px","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group header-middle"
        style="margin-top:0px;margin-bottom:0;padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px">
        <!-- wp:columns {"verticalAlignment":"center","className":"header-middle-inner","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"bottom":"0px","top":"0px","left":"0px","right":"0px"},"blockGap":{"top":"15px","left":"15px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center header-middle-inner"
            style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
            <!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo"} -->
            <div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:20%">
                <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"27px","textTransform":"capitalize"}},"textColor":"contrast","fontFamily":"lato"} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"60%","className":"header-menus"} -->
            <div class="wp-block-column is-vertically-aligned-center header-menus" style="flex-basis:60%">
                <!-- wp:navigation {"textColor":"contrast","overlayTextColor":"base","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"20px","right":"20px","top":"9px","bottom":"9px"},"blockGap":"var:preset|spacing|40"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"fontFamily":"lato","layout":{"type":"flex","justifyContent":"center"}} -->

                <!-- wp:navigation-link {"label":"<?php esc_html_e('Home', 'titan-event-management'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

                <!-- wp:navigation-link {"label":"<?php esc_html_e('Gallery', 'titan-event-management'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

                <!-- wp:navigation-link {"label":"<?php esc_html_e('About Us', 'titan-event-management'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

                <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'titan-event-management'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

                <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact Me', 'titan-event-management'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
                
                <!-- wp:navigation-link {"label":"<?php esc_html_e('Buy Now','titan-event-management'); ?>","type":"link","opensInNewTab":true,"url":"https://www.titanthemes.net/products/event-management-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"menu-upsell-nav"} /-->

                <!-- /wp:navigation -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-inner-meta-icons"} -->
            <div class="wp-block-column is-vertically-aligned-center header-inner-meta-icons" style="flex-basis:20%">
                <!-- wp:group {"className":"header-social-icons","layout":{"type":"constrained"}} -->
                <div class="wp-block-group header-social-icons">
                    <!-- wp:social-links {"iconColor":"base","iconColorValue":"#000000","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","className":"header-social-inner-div is-style-default","style":{"spacing":{"blockGap":{"top":"0","left":"10px"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
                    <ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color header-social-inner-div is-style-default"
                        style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">
                        <!-- wp:social-link {"url":"https://www.facebook.com","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"https://www.instagram.com","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"https://www.tiktok.com","service":"tiktok"} /-->

                        <!-- wp:social-link {"url":"https://www.twitter.com","service":"twitter"} /-->

                        <!-- wp:social-link {"url":"https://www.whatsapp.com","service":"whatsapp"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"15%","className":"header-inner-meta-button"} -->
            <div class="wp-block-column is-vertically-aligned-center header-inner-meta-button" style="flex-basis:15%">
                <!-- wp:group {"className":"header-button","layout":{"type":"constrained"}} -->
                <div class="wp-block-group header-button"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"contrast","textColor":"primary","style":{"spacing":{"padding":{"left":"10px","right":"10px","top":"5px","bottom":"5px"}},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}},"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
                        <div class="wp-block-button"><a
                                class="wp-block-button__link has-primary-color has-contrast-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button"
                                style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;font-size:16px"><?php esc_html_e('Contact Us', 'titan-event-management'); ?></a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->