<?php 
function swipex_input_text( $name, $placeholder, $fieldLabel, $className) { ?>
    <div class="form-group">
        <div class="input-wrap">
            <?php if(!empty($fieldLabel)) { ?>
                <label for="<?php echo esc_attr($name); ?>" class="input-label"><span><?php echo $fieldLabel;?></span><sup>*</sup></label>
            <?php } ?>
            <span class="wpcf7-form-control-wrap <?php echo esc_attr($name); ?>">
                <input type="text" name="<?php echo esc_attr($name); ?>" 
                <?php if(!empty($placeholder)) { ?>
			    placeholder="<?php echo esc_attr($placeholder);?>" <?php } ?> 
                required="required" id="<?php echo esc_attr($name); ?>" 
                class="form-control wpcf7-form-control wpcf7-text <?php echo esc_attr($className);?>" aria-invalid="false">
            </span>
        </div>
    </div>
<?php }


function swipex_input_email( $name, $placeholder, $fieldLabel, $className) { ?>
    <div class="form-group">
        <div class="input-wrap">
            <?php if(!empty($fieldLabel)) { ?>
                <label for="<?php echo esc_attr($name); ?>" class="input-label"><span><?php echo $fieldLabel;?></span><sup>*</sup></label>
            <?php } ?>
            <span class="wpcf7-form-control-wrap <?php echo esc_attr($name); ?>">
                <input type="email" name="<?php echo esc_attr($name); ?>" 
                <?php if(!empty($placeholder)) { ?>
			    placeholder="<?php echo esc_attr($placeholder);?>" 
                <?php } ?> 
                required="required" 
                id="<?php echo esc_attr($name); ?>" 
                class="form-control wpcf7-form-control wpcf7-email <?php echo esc_attr($className);?>" aria-invalid="false">
            </span>
        </div>
    </div>
<?php } 


function swipex_input_textarea( $name, $placeholder, $fieldLabel, $className){ ?>
    <div class="form-group">
        <div class="input-wrap">
        <?php if(!empty($fieldLabel)) { ?>
            <label for="<?php echo esc_attr($name); ?>" class="input-label"><?php echo $fieldLabel;?></label>
        <?php } ?>
        <span class="wpcf7-form-control-wrap <?php echo esc_attr($name); ?>">
            <textarea 
                name="<?php echo esc_attr($name); ?>" 
                <?php if(!empty($placeholder)) { ?>
			        placeholder="<?php echo esc_attr($placeholder);?>" 
                <?php } ?>
                required="required" 
                id="<?php echo esc_attr($name); ?>" 
                class="form-control wpcf7-form-control wpcf7-textarea <?php echo esc_attr($className); ?>" 
                aria-invalid="false"
                aria-required="true"></textarea>
        </span>
        </div>
    </div>
<?php }


function swipex_submit($name){ ?>
    <div class="popup-form__submit">
        <button type="submit" class="wpcf7-form-control wpcf7-submit button button--blue" aria-invalid="false">
            <span><?php echo $name; ?></span>
            <svg width="1em" height="1em" class="icon icon-arrow-right ">
                <use xlink:href="<?=THEME?>/dist/s/images/useful/svg/theme/symbol-defs.svg#icon-arrow-right"></use>
            </svg>
        </button>
    </div>
<?php }