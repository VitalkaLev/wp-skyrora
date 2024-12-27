<div id="bannerVideoId" data-src="<?php echo get_sub_field('acf_contacts_background')['url'] ?>"
    data-srcfallback="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" class="banner__video">
    <div class="bv-video-wrap bv-video-wrap-0" style="position: relative; overflow: hidden; z-index: 10;">
        <video autoplay="autoplay" playsinline muted loop="loop" loading="lazy" class="lazy"
            poster="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" class="bv-video" preload="metadata"
            style="position: absolute; z-index: 1;">
            <source src="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" type="video/mp4">
        </video>
    </div>
</div>