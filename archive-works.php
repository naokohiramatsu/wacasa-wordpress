<?php get_header(); ?>

<main class="l-main p-works l-container">
    <section class="p-works__wrapper" id="works">

        <h1 class="section_ttl">
            <span class="section_ttl--en en">WORKS</span>
            <span class="section_ttl--jp">施工事例</span>
        </h1>

        <div class="works__container">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="works__container__item">
                        <a href="<?php the_permalink(); ?>" class="works__card">

                            <div class="works__img">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('medium');
                                endif; ?>
                            </div>

                            <div class="works__content l-content">
                                <h3 class="works__ttl"><?php the_title(); ?></h3>
                                <p class="works__date"><?php the_time('Y.m.d'); ?></p>

                                <div class="works__btn">
                                    <span class="btn-more">VIEW MORE &gt;</span>
                                </div>
                            </div>

                        </a>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <!-- ページネーション -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total'   => $wp_query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'prev_text' => '',
                'next_text' => '',
                'mid_size'  => 1,
                'end_size'  => 1,
            ));
            ?>
        </div>

    </section>


    <section class="l-content p-contact" id="contact">
        <h1 class="section_ttl">
            <p class="section_ttl--en en">CONTACT</p>
            <p class="section_ttl--jp">お問い合わせ</p>
        </h1>

        <p class="seciton_sub-ttl-desc">
            家づくりを考えはじめたら、<br
                class="sp-br" />ガーデン・エクステリアも早い段階で<br />
            お気軽にお電話または、お問い合わせフォームよりご相談ください。
        </p>

        <div class="company_information">
            <a href="080-3906-2723" class="tel-link"><span class="tel">Tel</span> 080-3906-2723</a>
            <p class="address">〒560-0056　大阪府豊中市宮山町2-16-14</p>
            <p class="open">OPEN　10:00〜18:00</p>
            <p class="close">OPEN　日曜日・祝日・第2・第4水曜日</p>

            <div class="btn">
                <a href="#" class="contact-btn en">CONTACT FORM</a>
            </div>
        </div>
        <div class="company_map pc_only">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3275.969214188086!2d135.45629947620193!3d34.806716377516345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000fa87f92115b1%3A0xc12ebc44bf729dea!2s2-ch%C5%8Dme-16-14%20Miyayamach%C5%8D%2C%20Toyonaka%2C%20Osaka%20560-0056!5e0!3m2!1sen!2sjp!4v1771246647283!5m2!1sen!2sjp"
                width="1000"
                height="500"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="company_map sp_only">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3275.969214188086!2d135.45629947620193!3d34.806716377516345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000fa87f92115b1%3A0xc12ebc44bf729dea!2s2-ch%C5%8Dme-16-14%20Miyayamach%C5%8D%2C%20Toyonaka%2C%20Osaka%20560-0056!5e0!3m2!1sen!2sjp!4v1771246647283!5m2!1sen!2sjp"
                width="300"
                height="270"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

</main>

<?php get_footer(); ?>