<?php
/**
 * Title: About Us Section
 * Slug: titan-event-management/about-section
 * Categories: about-section
 * Block Types: core/template-part/about-section
 */
?>

<!-- wp:group {"tagName":"main","className":"about-section wp-block-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"30px","bottom":"30px"}}},"backgroundColor":"secondary-fourth","layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group about-section has-secondary-fourth-background-color has-background"
    style="margin-top:0;margin-bottom:0;padding-top:30px;padding-right:0;padding-bottom:30px;padding-left:0">
    <!-- wp:columns {"verticalAlignment":"center","className":"about-main-div","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center about-main-div">
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"className":"about-column"} -->
            <div class="wp-block-columns about-column"><!-- wp:column {"width":"60%"} -->
                <div class="wp-block-column" style="flex-basis:60%">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"right","className":"about-img-1"} -->
                    <figure class="wp-block-image alignright size-full about-img-1"><img
                            src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/about1.png" alt=""
                            class="" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"40%"} -->
                <div class="wp-block-column" style="flex-basis:40%">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"about-img-2"} -->
                    <figure class="wp-block-image size-full about-img-2"><img
                            src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/about2.png" alt=""
                            class="" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"className":"image-bottom-box about-column"} -->
            <div class="wp-block-columns image-bottom-box about-column"><!-- wp:column {"width":"60%"} -->
                <div class="wp-block-column" style="flex-basis:60%">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"right","className":"about-img-3"} -->
                    <figure class="wp-block-image alignright size-full about-img-3"><img
                            src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/about3.png" alt=""
                            class="" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"40%","className":"main-exprience-box"} -->
                <div class="wp-block-column main-exprience-box" style="flex-basis:40%">
                    <!-- wp:group {"className":"exprience-box","style":{"border":{"radius":"50%","color":"#1a1a1a","width":"7px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0"},"dimensions":{"minHeight":"150px"}},"backgroundColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
                    <div class="wp-block-group exprience-box has-border-color has-primary-background-color has-background"
                        style="border-color:#1a1a1a;border-width:7px;border-radius:50%;min-height:150px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"45px","fontStyle":"normal","fontWeight":"900","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"contrast","fontFamily":"lato"} -->
                        <h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-lato-font-family"
                            style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:45px;font-style:normal;font-weight:900">
                            <?php esc_html_e('15+', 'titan-event-management'); ?>
                        </h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"contrast"} -->
                        <p class="has-text-align-center has-contrast-color has-text-color has-link-color"
                            style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:16px;font-style:normal;font-weight:600">
                            <?php esc_html_e('Experience', 'titan-event-management'); ?>
                        </p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","className":"about-right-content"} -->
        <div class="wp-block-column is-vertically-aligned-center about-right-content">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"className":"short-title","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"25px","right":"25px"},"margin":{"top":"0","bottom":"12px","left":"0","right":"0"}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"700"},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"primary","textColor":"contrast","fontFamily":"lato"} -->
                <h2 class="wp-block-heading short-title has-contrast-color has-primary-background-color has-text-color has-background has-link-color has-lato-font-family"
                    style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;margin-top:0;margin-right:0;margin-bottom:12px;margin-left:0;padding-top:10px;padding-right:25px;padding-bottom:10px;padding-left:25px;font-size:15px;font-style:normal;font-weight:700">
                    <?php esc_html_e('About Us', 'titan-event-management'); ?>
                </h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-second"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"5px"}}},"textColor":"secondary-second","fontFamily":"lato"} -->
            <h2 class="wp-block-heading has-secondary-second-color has-text-color has-link-color has-lato-font-family"
                style="margin-top:0;margin-bottom:5px;font-size:30px;font-style:normal;font-weight:700">
                <?php esc_html_e('Creating lasting memories for every occasion is our number one priority', 'titan-event-management'); ?>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast","fontFamily":"lato"} -->
            <p class="has-contrast-color has-text-color has-link-color has-lato-font-family"
                style="margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:400">
                <?php esc_html_e('With years of experience in event planning, our dedicated team specializes in designing exceptional events that reflect your unique style.', 'titan-event-management'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"verticalAlignment":"center","className":"about-icon-column","style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center about-icon-column">
                <!-- wp:column {"verticalAlignment":"center","width":"10%","className":"about-icon-main"} -->
                <div class="wp-block-column is-vertically-aligned-center about-icon-main" style="flex-basis:10%">
                    <!-- wp:group {"className":"about-icon","style":{"border":{"radius":{"topLeft":"50.1%","topRight":"50.1%","bottomLeft":"50.1%","bottomRight":"50.1%"}},"dimensions":{"minHeight":"70px"}},"backgroundColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group about-icon has-contrast-background-color has-background"
                        style="border-top-left-radius:50.1%;border-top-right-radius:50.1%;border-bottom-left-radius:50.1%;border-bottom-right-radius:50.1%;min-height:70px">
                        <!-- wp:html -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path fill="var(--wp--preset--color--primary)"
                                d="M155.6 81.3C163 67 179.9 60.4 195 65.9L320 111.5L445 65.9C460.1 60.4 477 67 484.4 81.3L563.2 234.2C592 290 573.5 356.5 524.7 390.8L556 477L597 462C613.6 456 632 464.5 638 481.1C644 497.7 635.5 516.1 618.9 522.1C571.5 539.4 524.1 556.6 476.7 573.9C460.1 580 441.7 571.4 435.7 554.8C429.7 538.2 438.2 519.8 454.8 513.8L495.8 498.8L464.5 412.6C405.1 417.8 348.3 378.7 334.5 317.4L319.9 252.7L305.3 317.4C291.5 378.7 234.7 417.8 175.3 412.6L144 498.8L185 513.8C201.6 519.9 210.2 538.2 204.1 554.8C198 571.4 179.7 580 163.1 573.9C115.7 556.6 68.3 539.3 20.9 522.1C4.3 516-4.3 497.7 1.8 481.1C7.9 464.5 26.3 456 42.9 462L83.9 477L115.2 390.8C66.5 356.5 48.1 290 76.9 234.2L155.6 81.3zM199.6 135.7L172.4 188.5L261.6 221L274.7 163.1L199.6 135.7zM440.5 135.7L365.4 163.1L378.5 221L467.7 188.5L440.5 135.7z" />
                        </svg>
                        <!-- /wp:html -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%">
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize","textAlign":"left"},"spacing":{"margin":{"bottom":"5px"}}},"textColor":"contrast","fontFamily":"lato"} -->
                        <h6 class="wp-block-heading has-text-align-left has-contrast-color has-text-color has-link-color has-lato-font-family"
                            style="margin-bottom:5px;font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize">
                            <?php esc_html_e('Experienced Event Coordinators', 'titan-event-management'); ?>
                        </h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <p
                            style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:14px;font-style:normal;font-weight:300">
                            <?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'titan-event-management'); ?>
                        </p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"verticalAlignment":"center","className":"about-icon-column","style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center about-icon-column">
                <!-- wp:column {"verticalAlignment":"center","width":"10%","className":"about-icon-main"} -->
                <div class="wp-block-column is-vertically-aligned-center about-icon-main" style="flex-basis:10%">
                    <!-- wp:group {"className":"about-icon","style":{"border":{"radius":{"topLeft":"50.1%","topRight":"50.1%","bottomLeft":"50.1%","bottomRight":"50.1%"}},"dimensions":{"minHeight":"70px"}},"backgroundColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group about-icon has-contrast-background-color has-background"
                        style="border-top-left-radius:50.1%;border-top-right-radius:50.1%;border-bottom-left-radius:50.1%;border-bottom-right-radius:50.1%;min-height:70px">
                        <!-- wp:html -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path fill="var(--wp--preset--color--primary)"
                                d="M182.4 53.5L157.8 95.6C154 102.1 152 109.6 152 117.2L152 120C152 142.1 169.9 160 192 160C214.1 160 232 142.1 232 120L232 117.2C232 109.6 230 102.2 226.2 95.6L201.6 53.5C199.6 50.1 195.9 48 192 48C188.1 48 184.4 50.1 182.4 53.5zM310.4 53.5L285.8 95.6C282 102.1 280 109.6 280 117.2L280 120C280 142.1 297.9 160 320 160C342.1 160 360 142.1 360 120L360 117.2C360 109.6 358 102.2 354.2 95.6L329.6 53.5C327.6 50.1 323.9 48 320 48C316.1 48 312.4 50.1 310.4 53.5zM413.8 95.6C410 102.1 408 109.6 408 117.2L408 120C408 142.1 425.9 160 448 160C470.1 160 488 142.1 488 120L488 117.2C488 109.6 486 102.2 482.2 95.6L457.6 53.5C455.6 50.1 451.9 48 448 48C444.1 48 440.4 50.1 438.4 53.5L413.8 95.6zM224 224C224 206.3 209.7 192 192 192C174.3 192 160 206.3 160 224L160 277.5C122.7 290.6 96 326.2 96 368L96 388.8C116.9 390.1 137.6 396.1 156.3 406.8L163.4 410.9C189.7 425.9 222.3 424.3 247 406.7C290.7 375.5 349.3 375.5 393 406.7C417.6 424.3 450.3 426 476.6 410.9L483.7 406.8C502.4 396.1 523 390.1 544 388.8L544 368C544 326.2 517.3 290.6 480 277.5L480 224C480 206.3 465.7 192 448 192C430.3 192 416 206.3 416 224L416 272L352 272L352 224C352 206.3 337.7 192 320 192C302.3 192 288 206.3 288 224L288 272L224 272L224 224zM544 437C531.3 438.2 518.9 442 507.5 448.5L500.4 452.6C457.8 476.9 405 474.3 365.1 445.8C338.1 426.5 301.9 426.5 274.9 445.8C235 474.3 182.2 477 139.6 452.6L132.5 448.5C121.1 442 108.7 438.1 96 437L96 512C96 547.3 124.7 576 160 576L480 576C515.3 576 544 547.3 544 512L544 437z" />
                        </svg>
                        <!-- /wp:html -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%">
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize","textAlign":"left"},"spacing":{"margin":{"bottom":"5px"}}},"textColor":"contrast","fontFamily":"lato"} -->
                        <h6 class="wp-block-heading has-text-align-left has-contrast-color has-text-color has-link-color has-lato-font-family"
                            style="margin-bottom:5px;font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize">
                            <?php esc_html_e('Creative Theme and Decoration', 'titan-event-management'); ?>
                        </h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <p
                            style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:14px;font-style:normal;font-weight:300">
                            <?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'titan-event-management'); ?>
                        </p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","textColor":"contrast","className":"about-btn","style":{"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"fontFamily":"lato"} -->
                <div class="wp-block-button about-btn"><a
                        class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background has-link-color has-lato-font-family has-custom-font-size wp-element-button"
                        style="border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e('Discover More', 'titan-event-management'); ?></a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->