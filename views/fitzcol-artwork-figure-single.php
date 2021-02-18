<?php
/**
 * Template used to display a single artwork figure.
 *
 * @package finds-org-uk-artworks-and-coins
 */
?>

<figure class="fitzcol-figure wp-caption alignnone">

    <img class="fitzcol-size-medium size-medium"
         src="https://collection.beta.fitz.ms/imagestore/<?php esc_html_e( $this->get_artwork_record()->get_medium_image() );?>"
         alt="<?php esc_html_e( $this->get_caption_text_display() ); ?>
         (<?php esc_html_e( $this->get_artwork_record()->get_image_copyright_holder() ); ?>
         <?php _e( $this->get_artwork_record()->get_image_license_acronym() ); ?> 2.0)"
    >
    <small class="fitzcol-copyright">
        <?php esc_html_e( $this->get_artwork_record()->get_image_copyright_holder() ); ?>
        <a href="https://creativecommons.org/licenses/<?php _e( strtolower( $this->get_artwork_record()->get_image_license_acronym() ) ); ?>/2.0/">
            <?php _e( $this->get_artwork_record()->get_image_license_acronym() ); ?> 2.0
        </a>
        <?php if ( 'none' == $this->get_caption_option() ): ?>
            (<a href="https://collection.beta.fitz.ms/id/object/<?php esc_html_e($this->get_artwork_record()->get_id());?>"><?php esc_html_e( $this->get_artwork_record()->get_title() );?></a>)
        <?php endif; ?>
    </small>
    <figcaption class="fouaac-caption-text wp-caption-text">
        <?php esc_html_e( $this->get_caption_text_display() ); ?>
        <?php if ( 'auto' == $this->get_caption_option() ): ?>
        <a href="https://collection.beta.fitz.ms/id/object/<?php esc_html_e($this->get_artwork_record()->get_id());?>"><?php esc_html_e( $this->get_artwork_record()->get_title() );?></a>
        <?php endif; ?>
    </figcaption>

</figure>
