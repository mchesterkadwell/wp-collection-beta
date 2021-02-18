<?php
/**
* Template used to display a single artwork figure.
*
*/
?>

<figure class="fitzcol-figure wp-caption">

  <img class="figure-img img-fluid rounded"
  src="https://collection.beta.fitz.ms/imagestore/<?php esc_html_e( $this->get_artwork_record()->get_medium_image() );?>"
  alt="<?php esc_html_e( $this->get_caption_text_display() ); ?>
  <?php esc_html_e( $this->get_artwork_record()->get_image_copyright_holder() ); ?>
  <?php _e( $this->get_artwork_record()->get_image_license_acronym() ); ?> 4.0"
  >

  <figcaption class="figure-caption small mt-2">
    <?php if ( 'auto' == $this->get_caption_option() ): ?>
      <h3>
        <a href="https://collection.beta.fitz.ms/id/object/<?php esc_html_e($this->get_artwork_record()->get_id());?>"><?php esc_html_e($this->get_artwork_record()->get_accession_number());?>:<?php esc_html_e( $this->get_artwork_record()->get_title() );?></a>
      </h3>
    <?php endif; ?>
  </figcaption>

  <span class="fitzcol-copyright small">
    <p>
      Legal note: <?php esc_html_e( $this->get_artwork_record()->get_image_copyright_holder() ); ?>
    <br />
    License: <a href="https://creativecommons.org/licenses/<?php esc_html_e( strtolower( $this->get_artwork_record()->get_image_license() ) ); ?>/4.0/">
      <?php esc_html_e( $this->get_artwork_record()->get_image_license_acronym() ); ?>
    </a>
    </p>
  </span>

</figure>
