<?php /* Template Name: Unsubscribe-Page */ ?>

<?php get_header(); ?>
<style>
    #unsubscribe-section a {
        background: #2a5dea;
        color: white;
        padding: 10px 20px;
        margin: 25px 0;
        display: inline-block;
    }
    .mailpoet_confirm_unsubscribe {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 25px;
    }
</style>



<?php if( get_field('acf_header_style') == 'opacity'){ ?>
	<main class="main">
<?php } else { ?>
	<main class="main main--landing">
<?php } ?>
        <section id="unsubscribe-section" class="section">
            <div class="container">
                <?php 
                the_content(); 
                add_filter( 'mailpoet_unsubscribe_confirmation_page', 'mp_modify_unsubscribe_confirmation_page', 10, 2);
                    function mp_modify_unsubscribe_confirmation_page( $HTML, $unsubscribeUrl ) {
                    	$HTML = '<hr>';
                     	$HTML .= '<center>You can <a href="'.$unsubscribeUrl.'">click here</a> to unsubscribe.</center>';
                     	$HTML .= '<hr>';
                        return $HTML;
                    }
                ?>
                
            </div>
        <section>
    </main>
            
<?php get_footer(); ?>