<?php
/**
 * Title: Banner
 * Slug: titan-event-management/banner
 * Categories: banner
 * Block Types: core/template-part/banner
 */
?>

<!-- wp:group {"className":"banner-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","bottom":"0px","top":"0px"},"margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group banner-section"
    style="margin-top:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
    <!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"isDark":false,"sizeSlug":"large","className":"banner-bg","style":{"spacing":{"padding":{"top":"20px","right":"0","bottom":"30px","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-cover is-light banner-bg"
        style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:0;padding-bottom:30px;padding-left:0"><span
            aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:columns {"className":"banner-inner","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
            <div class="wp-block-columns banner-inner"
                style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:column {"verticalAlignment":"top","width":"70%","className":"banner-div-one","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"2px","bottomRight":"2px"}}}} -->
                <div class="wp-block-column is-vertically-aligned-top banner-div-one"
                    style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:2px;flex-basis:70%">
                    <!-- wp:group {"className":"group-one owl-carousel","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group group-one owl-carousel"
                        style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                        <!-- wp:group {"className":"banner-div-caro","layout":{"type":"default"}} -->
                        <div class="wp-block-group banner-div-caro">
                            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"banner-bg-image"} -->
                            <figure class="wp-block-image size-full banner-bg-image"><img
                                    src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-bg.png"
                                    alt="" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:cover {"className":"banner-cover-div","overlayColor":"contrast","isUserOverlayColor":true,"minHeight":550,"isDark":false,"style":{"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
                            <div class="wp-block-cover is-light banner-cover-div"
                                style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:550px">
                                <span aria-hidden="true"
                                    class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span>
                                <div class="wp-block-cover__inner-container">
                                    <!-- wp:group {"className":"banner-content","layout":{"type":"default"}} -->
                                    <div class="wp-block-group banner-content">
                                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                        <div class="wp-block-group">
                                            <!-- wp:paragraph {"placeholder":"Write title…","className":"banner-sub-title","style":{"typography":{"textAlign":"center","fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"width":"1px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"10px","right":"10px"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","borderColor":"primary"} -->
                                            <p class="has-text-align-center banner-sub-title has-border-color has-primary-border-color has-primary-color has-text-color has-link-color"
                                                style="border-width:1px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;font-size:15px">
                                                <?php esc_html_e('Professional Event Planning', 'titan-event-management'); ?>
                                            </p>
                                            <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:heading {"className":"banner-title","style":{"typography":{"fontStyle":"normal","fontWeight":"900","textAlign":"left"}}} -->
                                        <h2 class="wp-block-heading has-text-align-left banner-title"
                                            style="font-style:normal;font-weight:900">
                                            <?php esc_html_e('Creating Unforgettable Events That Inspire Every Celebration', 'titan-event-management'); ?>
                                        </h2>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"className":"banner-para","style":{"typography":{"fontSize":"14px"},"color":{"text":"#484848"},"elements":{"link":{"color":{"text":"#484848"}}}}} -->
                                        <p class="banner-para has-text-color has-link-color"
                                            style="color:#484848;font-size:14px">
                                            <?php esc_html_e('From corporate conferences and luxury weddings to private parties and large-scale festivals, we transform your vision into extraordinary experiences with flawless planning, creative execution, and attention to every detail.', 'titan-event-management'); ?>
                                        </p>
                                        <!-- /wp:paragraph -->

                                        <!-- wp:buttons {"className":"banner-button-main-div"} -->
                                        <div class="wp-block-buttons banner-button-main-div">
                                            <!-- wp:button {"backgroundColor":"primary","className":"banner-button","style":{"spacing":{"padding":{"left":"12px","right":"12px","top":"6px","bottom":"6px"}},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}},"typography":{"fontSize":"15px"}}} -->
                                            <div class="wp-block-button banner-button"><a
                                                    class="wp-block-button__link has-primary-background-color has-background has-custom-font-size wp-element-button"
                                                    style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px;font-size:15px"><?php esc_html_e('Plan Your Event', 'titan-event-management'); ?></a>
                                            </div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                            </div>
                            <!-- /wp:cover -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"banner-div-caro","layout":{"type":"default"}} -->
                        <div class="wp-block-group banner-div-caro">
                            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"banner-bg-image"} -->
                            <figure class="wp-block-image size-full banner-bg-image"><img
                                    src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-bg.png"
                                    alt="" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:cover {"className":"banner-cover-div","overlayColor":"contrast","isUserOverlayColor":true,"minHeight":550,"isDark":false,"style":{"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
                            <div class="wp-block-cover is-light banner-cover-div"
                                style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:550px">
                                <span aria-hidden="true"
                                    class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span>
                                <div class="wp-block-cover__inner-container">
                                    <!-- wp:group {"className":"banner-content","layout":{"type":"default"}} -->
                                    <div class="wp-block-group banner-content">
                                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                        <div class="wp-block-group">
                                            <!-- wp:paragraph {"placeholder":"Write title…","className":"banner-sub-title","style":{"typography":{"textAlign":"center","fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"width":"1px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"10px","right":"10px"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","borderColor":"primary"} -->
                                            <p class="has-text-align-center banner-sub-title has-border-color has-primary-border-color has-primary-color has-text-color has-link-color"
                                                style="border-width:1px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;font-size:15px">
                                                <?php esc_html_e('Professional Event Planning', 'titan-event-management'); ?>
                                            </p>
                                            <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:heading {"className":"banner-title","style":{"typography":{"fontStyle":"normal","fontWeight":"900","textAlign":"left"}}} -->
                                        <h2 class="wp-block-heading has-text-align-left banner-title"
                                            style="font-style:normal;font-weight:900">
                                            <?php esc_html_e('Turning Every Celebration Into an Unforgettable Experience', 'titan-event-management'); ?>
                                        </h2>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"className":"banner-para","style":{"typography":{"fontSize":"14px"},"color":{"text":"#484848"},"elements":{"link":{"color":{"text":"#484848"}}}}} -->
                                        <p class="banner-para has-text-color has-link-color"
                                            style="color:#484848;font-size:14px">
                                            <?php esc_html_e('From corporate conferences and luxury weddings to private parties and large-scale festivals, we transform your vision into extraordinary experiences with flawless planning, creative execution, and attention to every detail.', 'titan-event-management'); ?>
                                        </p>
                                        <!-- /wp:paragraph -->

                                        <!-- wp:buttons {"className":"banner-button-main-div"} -->
                                        <div class="wp-block-buttons banner-button-main-div">
                                            <!-- wp:button {"backgroundColor":"primary","className":"banner-button","style":{"spacing":{"padding":{"left":"12px","right":"12px","top":"6px","bottom":"6px"}},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}},"typography":{"fontSize":"15px"}}} -->
                                            <div class="wp-block-button banner-button"><a
                                                    class="wp-block-button__link has-primary-background-color has-background has-custom-font-size wp-element-button"
                                                    style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px;font-size:15px"><?php esc_html_e('Plan Your Event', 'titan-event-management'); ?></a>
                                            </div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                            </div>
                            <!-- /wp:cover -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"banner-div-caro","layout":{"type":"default"}} -->
                        <div class="wp-block-group banner-div-caro">
                            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"banner-bg-image"} -->
                            <figure class="wp-block-image size-full banner-bg-image"><img
                                    src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-bg.png"
                                    alt="" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:cover {"className":"banner-cover-div","overlayColor":"contrast","isUserOverlayColor":true,"minHeight":550,"isDark":false,"style":{"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
                            <div class="wp-block-cover is-light banner-cover-div"
                                style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:550px">
                                <span aria-hidden="true"
                                    class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span>
                                <div class="wp-block-cover__inner-container">
                                    <!-- wp:group {"className":"banner-content","layout":{"type":"default"}} -->
                                    <div class="wp-block-group banner-content">
                                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                        <div class="wp-block-group">
                                            <!-- wp:paragraph {"placeholder":"Write title…","className":"banner-sub-title","style":{"typography":{"textAlign":"center","fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"width":"1px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"10px","right":"10px"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","borderColor":"primary"} -->
                                            <p class="has-text-align-center banner-sub-title has-border-color has-primary-border-color has-primary-color has-text-color has-link-color"
                                                style="border-width:1px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;font-size:15px">
                                                <?php esc_html_e('Professional Event Planning', 'titan-event-management'); ?>
                                            </p>
                                            <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:heading {"className":"banner-title","style":{"typography":{"fontStyle":"normal","fontWeight":"900","textAlign":"left"}}} -->
                                        <h2 class="wp-block-heading has-text-align-left banner-title"
                                            style="font-style:normal;font-weight:900">
                                            <?php esc_html_e('Elevating Every Celebration with Unforgettable Experiences', 'titan-event-management'); ?>
                                        </h2>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"className":"banner-para","style":{"typography":{"fontSize":"14px"},"color":{"text":"#484848"},"elements":{"link":{"color":{"text":"#484848"}}}}} -->
                                        <p class="banner-para has-text-color has-link-color"
                                            style="color:#484848;font-size:14px">
                                            <?php esc_html_e('From corporate conferences and luxury weddings to private parties and large-scale festivals, we transform your vision into extraordinary experiences with flawless planning, creative execution, and attention to every detail.', 'titan-event-management'); ?>
                                        </p>
                                        <!-- /wp:paragraph -->

                                        <!-- wp:buttons {"className":"banner-button-main-div"} -->
                                        <div class="wp-block-buttons banner-button-main-div">
                                            <!-- wp:button {"backgroundColor":"primary","className":"banner-button","style":{"spacing":{"padding":{"left":"12px","right":"12px","top":"6px","bottom":"6px"}},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}},"typography":{"fontSize":"15px"}}} -->
                                            <div class="wp-block-button banner-button"><a
                                                    class="wp-block-button__link has-primary-background-color has-background has-custom-font-size wp-element-button"
                                                    style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px;font-size:15px"><?php esc_html_e('Plan Your Event', 'titan-event-management'); ?></a>
                                            </div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                            </div>
                            <!-- /wp:cover -->
                        </div>
                        <!-- /wp:group -->

                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top","width":"30%","className":"banner-div-two"} -->
                <div class="wp-block-column is-vertically-aligned-top banner-div-two" style="flex-basis:30%">
                    <!-- wp:group {"className":"group-two","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group group-two"
                        style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                        <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner.png","dimRatio":0,"isUserOverlayColor":true,"minHeight":550,"isDark":false,"sizeSlug":"full","className":"banner-img-div","style":{"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}}},"layout":{"type":"default"}} -->
                        <div class="wp-block-cover is-light banner-img-div"
                            style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;min-height:550px">
                            <img class="wp-block-cover__image-background size-full" alt=""
                                src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner.png"
                                data-object-fit="cover" /><span aria-hidden="true"
                                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
                            <div class="wp-block-cover__inner-container">
                                <!-- wp:group {"className":"banner-img-div-inner","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"},"margin":{"top":"350px","bottom":"0"},"blockGap":"15px"},"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group banner-img-div-inner has-contrast-background-color has-background"
                                    style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;margin-top:350px;margin-bottom:0;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px">
                                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group">
                                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full"><img
                                                src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/teams.png"
                                                alt="" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group">
                                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"5px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                        <div class="wp-block-group"
                                            style="min-height:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                            <!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"}},"textColor":"base"} -->
                                                <h6 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">
                                                <?php esc_html_e('Happy Customer', 'titan-event-management'); ?></h6>
                                            <!-- /wp:heading -->

                                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"base"} -->
                                                <p class="has-base-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:400">
                                                <?php esc_html_e('10256+', 'titan-event-management'); ?></p>
                                            <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->