<!-- Start home-about Area -->
<section class="home-about-area section-gap" id="about">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-8 col-md-12 home-about-left">
							<h6><?php the_field('hr_section_pre_header'); ?></h6>
							<h1>
								<?php the_field('hr_section_header');?>
							</h1>
							<p class="sub"><?php the_field('hr_section_sub_header'); ?></p>
							<div class="pb-20">
								<?php the_field('hr_section_content'); ?>
                            </div>
                            <?php
                                $link = get_field('hr_link');
                            ?>
                            <a class="primary-btn" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                <?php echo $link['title']; ?>
                            </a>
						</div>
                        <div class="col-lg-4 col-md-12 home-about-right relative" style="
                        background-image: url(<?php echo get_field('hr_contact_form_background')['sizes']['medium']; ?>);
                        background-repeat: no-repeat;
                        background-size: cover;">
                            <div class="overlay-bg px-3">
                                <div class="form-wrap">
                                    <?php echo do_shortcode(get_field('hr_contact_form')); ?>
                                </div>
                            </div>
							
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->