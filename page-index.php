<?php
get_header();
?>

<section class="hero padding-top-250">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h2 class="title">Introduce Your Product Quickly & Effectively</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus </p>
                <p>mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                    enim.</p>
                <a class="btn btn-primary mt-3" href="#">Purchase UI Kit</a>
                <a class="btn btn-outline-primary mt-3" href="#">Learn More</a>
            </div>
            <div class="col-12 col-lg-6">

            </div>
        </div>
    </div>
</section>

<section class="powerful padding-top-150">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h2 class="title">Light, Fast & Powerful</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus </p>
                <p>mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                    enim.</p>
                <div class="powerful__list">
                    <div class="powerful__item">
                        <img src="<?= assets('images/powerful-icon.svg'); ?>" alt="powerful-icon">
                        <div class="powerful__item-title">Title Goes Here</div>
                        <div class="powerful__item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor.</div>
                    </div>
                    <div class="powerful__item">
                        <img src="<?= assets('images/powerful-icon.svg'); ?>" alt="powerful-icon">
                        <div class="powerful__item-title">Title Goes Here</div>
                        <div class="powerful__item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="<?= assets('images/powerful.svg'); ?>" alt="powerful">
            </div>
        </div>
    </div>
</section>

<section class="light padding-top-150 padding-bottom-150">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="<?= assets('images/light.svg'); ?>" alt="light">
            </div>
            <div class="col-12 col-lg-6">
                <h2 class="title">Light, Fast & Powerful</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus </p>
                <p>mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                    enim.</p>
            </div>
        </div>
    </div>
</section>

<section class="rewiews padding-top-150">
    <div class="container container-carousel">

        <!-- Вставляем шорткод с дополнительными классами стилизации -->
        <div class="recent-works-carousel-wrapper" style="text-align: center">
            <?php echo do_shortcode('[recent-works-list count="3"]'); ?>

        </div>
    </div>
</section>

<section class="fast padding-top-150">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="<?= assets('images/fast.png'); ?>" alt="fast">
            </div>
            <div class="col-12 col-lg-6">
                <h2 class="title">Light, Fast & Powerful</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus </p>
                <p>mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                    enim.</p>
                <a class="btn btn-primary mt-3" href="#">Purchase Now</a>
            </div>
        </div>
    </div>
</section>

    <section class="price padding-top-150 padding-bottom-150">
        <div class="container">
            <h2 class="title">A Price To Suit Everyone</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus </p>
            <h2>$40</h2>
            <p>UI Design Kit</p></br></br>
            <p>See, One price. Simple.</p>
            <a class="btn btn-primary mt-3" href="#">Purchase Now</a>
        </div>
    </section>

<?php
get_footer();
