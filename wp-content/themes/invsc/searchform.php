<?php
/**
 * Template for displaying search forms in Invsc
 *
 * @package WordPress
 * @subpackage Invsc
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'invsc' ); ?></span>
	</label>

    <div class="form-row align-items-center">
        <div class="col-sm-12 my-1">
            <label class="sr-only" for="inlineFormInputGroupUsername">Digite aqui</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fa fa-search"></i></div>
                </div>
                <input
                        type="search"
                        id="<?php echo $unique_id; ?>"
                        class="form-control"
                        placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'invsc' ); ?>"
                        value="<?php echo get_search_query(); ?>" name="s"
                >
            </div>
        </div>

        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>