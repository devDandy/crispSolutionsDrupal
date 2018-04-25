<div class="site-container">
    


    <!-- content -->
    <div class="content-container container">
        <div class="menu-container inner-container" id="mobile-menu">
            <?php 
                print theme('links',array('links'=>$main_menu));
            ?>
        </div>
        
        <!-- tabs will go here -->
        <!-- View, Edit -->
        <div class="tab-container container">
            <?php if ($tabs): ?>
                  <?php print render($tabs); ?>
            <?php endif; ?>
        </div>
        

        <!-- main content -->
            <div class="main-content">
                <div class="content">
                    
                    <!-- messages will go here -->
                    <!-- error messages and whatnot -->
                    <?php if ($messages): ?>
                        <div id="messages">
                            <div class="section clearfix">
                                <?php print $messages; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!--  -->
                  <?php print render($page['content']); ?>
                </div>
            </div>

    </div>

    <!-- About content -->
    <div id="about-section-knowledge">
            <?php if($page['about_region']): ?>
                <?php print render($page['about_region']); ?>
            <?php endif; ?>
    </div>

        <!-- what_we_do content -->
        <section id="#what-we-do" class="section-overlay what-we-do-section">
            <?php if($page['what_we_do_region']): ?>
                <div class='what-we-do-section-container'>
                    <div class="what-we-do-section-content">
                            <?php print render($page['what_we_do_region']); ?>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Modal Content -->
        <div id="what-we-do-modal">
                <?php if($page['services_modal_region']): ?>
                    <?php print render($page['services_modal_region']); ?>
                <?php endif; ?>
        </div>
        </section>

        <!-- partners_region  -->
        <div id="#partners" class="partners-section">
            <?php if($page['partners_and_vendors_region']): ?>
                <div class="">
                    <?php print render($page['partners_and_vendors_region']); ?>
                </div>
            <?php endif; ?>
        </div>
    <!-- contact_us_region  -->
        <div id="contact_us" class="contact-section">
            <div class="contact-section-info section-overlay">
                <div class="contact-section-info-contents">
                    <?php if($page['contact_us_main_column_region']): ?>
                            <?php print render($page['contact_us_main_column_region']); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="contact-container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-9 contact-form-col">
                            <?php if($page['contact_us_left_column_region']): ?>
                                    <?php print render($page['contact_us_left_column_region']); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-3 contact-info-col">
                            <?php if($page['contact_us_right_column_region']): ?>
                                    <?php print render($page['contact_us_right_column_region']); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer-container container">
        <?php if($page['footer']): ?>
            <div class="footer-content inner-container">
                <?php print render($page['footer']); ?>
            </div>
        <?php endif; ?>
    </div>
    
</div>
