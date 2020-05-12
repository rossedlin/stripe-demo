<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 31/08/2017
 * Time: 15:16
 *
 * @var Cryslo\Object\WordPress\Item[] $latest_posts
 */
?>
<!-- Footer -->
<footer class="footer g-py-60">
    <div class="container">
        <div class="row">
            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">About Me</h2>
                </div>

                <p>
                    Hey, my name is Ross Edlin, I'm a web developer. As you can see by this website I love to travel
                    too!<br/>
                    It's quite new so expect a lot more content soon.
                </p>
            </div>
            <!-- End Footer Content -->

            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Latest Posts</h2>
                </div>

                <?php $count = count($latest_posts);
                foreach ($latest_posts as $key => $latest_post)
                { ?>
                @include('snippets.latest-post')
                <?php } ?>

            </div>
            <!-- End Footer Content -->

            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Useful Links</h2>
                </div>

                <nav class="text-uppercase1">
                    <ul class="list-unstyled g-mt-minus-10 mb-0">
                        <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                            <h4 class="h6 g-pr-20 mb-0">
                                <a class="g-color-white--hover" href="/about">About Me</a>
                                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                            </h4>
                        </li>
                        <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                            <h4 class="h6 g-pr-20 mb-0">
                                <a class="g-color-white--hover"
                                   href="/blog">Blog</a>
                                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                            </h4>
                        </li>
                        <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                            <h4 class="h6 g-pr-20 mb-0">
                                <a class="g-color-white--hover"
                                   href="/portfolio">Portfolio</a>
                                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                            </h4>
                        </li>
                        <li class="g-pos-rel g-py-10">
                            <h4 class="h6 g-pr-20 mb-0">
                                <a class="g-color-white--hover" href="/contact">Contact Me</a>
                                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                            </h4>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Footer Content -->

            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">My Contacts</h2>
                </div>

                <address class="g-bg-no-repeat g-font-size-12 mb-0"
                         style="background-image: url(/img/maps/map2.png);">

                <?php /*
					<!-- Location -->
					<div class="d-flex g-mb-20">
						<div class="g-mr-10">
                    <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                      <i class="fa fa-map-marker"></i>
                    </span>
						</div>
						<p class="mb-0">795 Folsom Ave, Suite 600, <br> San Francisco, CA 94107 795</p>
					</div>
					<!-- End Location -->
                    */ ?>

                <?php /*
					<!-- Phone -->
					<div class="d-flex g-mb-20">
						<div class="g-mr-10">
                    <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                      <i class="fa fa-phone"></i>
                    </span>
						</div>
						<p class="mb-0" style="margin-top: 8px;">
							<a class="g-color-white--hover" href="tel:+442032907017">(+44) 020 3290 7017</a>
						</p>
					</div>
					<!-- End Phone -->
 					*/ ?>

                <!-- Email and Website -->
                    <div class="d-flex g-mb-20">
                        <div class="g-mr-10">
                    <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                      <i class="fa fa-globe"></i>
                    </span>
                        </div>
                        <p class="mb-0">
                            <a class="g-color-white--hover"
                               href="mailto:contact@rossedlin.com">contact@rossedlin.com</a>
                            <br>
                            <a class="g-color-white--hover"
                               href="https://www.rossedlin.com">www.rossedlin.com</a>
                        </p>
                    </div>
                    <!-- End Email and Website -->
                </address>
            </div>
            <!-- End Footer Content -->
        </div>
    </div>
</footer>
<!-- End Footer -->