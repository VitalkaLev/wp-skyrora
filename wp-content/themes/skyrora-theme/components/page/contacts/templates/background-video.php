<div id="bannerVideoId" data-src="<?php echo get_sub_field('acf_contacts_background')['url'] ?>"
    data-srcfallback="<?php echo get_sub_field('acf_contacts_background')['url'] ?>" class="banner__video">
    <video autoplay="autoplay" playsinline muted loop="loop" data-prevent-transform="true" loading="lazy" class="bv-video">
        <source src="<?php echo get_sub_field('acf_contacts_video') ?>" type="video/mp4">
    </video>
</div>