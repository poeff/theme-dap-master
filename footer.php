<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 *
 *
 */

$sponsors   = get_field('sponsors', options);
$privacy    = get_field('privacy_policy', options);
$copyright  = get_field('copyright_site', options);
$legal      = get_field('legal_info', options);

?>

    </div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                    <div class="sponsors">
                        <?php
                        if ( $sponsors ) {
                            foreach ( $sponsors as $sponsor ) {
                                $logo = $sponsor[ 'sponsor_logo' ];
                                $link = $sponsor[ 'sponsor_link' ];
                                if ( $link ) {
                                    echo '<a href="' . $link . '" target="_blank">';
                                }
                                if ( $logo ) {
                                    echo '<img class="img-responsive center-block" src="' . $logo['url'] . '" alt="' . $logo['alt'] . '" />';
                                }
                                if ( $link ) {
                                    echo '</a>';
                                }
                            }
                        }
                        ?>
                    </div><!-- .sponsors -->

            </div><!-- .col-sm-6 -->
            <div class="col-sm-8">

                    <div class="site-info">
                        <?php do_action( 'upbootwp_credits' ); ?>
                        <p>&copy; <?php echo date('Y') ?> <?php if ( $copyright ) echo $copyright; ?></p>
                        <p><small><?php if ( $legal ) echo $legal; ?></small></p>
                    </div><!-- .site-info -->

            </div><!-- .col-sm-6 -->

        </div><!-- .row -->
    </div><!-- container -->
                </footer><!-- #colophon -->
</div><!-- #page -->

<?php if ( $privacy ) : ?>
    <div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="privacyModalLabel">Privacy Policy</h3>
                </div>
                <div class="modal-body">
                    <?php echo $privacy; ?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
