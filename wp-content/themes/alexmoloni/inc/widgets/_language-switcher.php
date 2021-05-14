<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 03-Jul-18
 * Time: 15:30
 */

//create custom language switcher
/**
 * @param $options
 */
function languageSwitcher( $options ) {
	$with_label = $options['with_label'] ?? true;
	$extra_css  = $options['extra_css'] ?? '';

	$args           = [
		'skip_missing' => 0,
	];
	$switcher_array = apply_filters( 'wpml_active_languages', null, $args );

	//search for index of the object in array where 'active' == 1
	$current_language_object_index_position = array_search( '1', array_column( $switcher_array, 'active' ) );

	$switcher_array_of_keys = array_keys( $switcher_array );

	$current_language_object_key_name = $switcher_array_of_keys[ $current_language_object_index_position ];


	$current_language_object = $switcher_array[ $current_language_object_key_name ];


	$switcher = [
		'switcher_array'          => $switcher_array,
		'current_language_object' => $current_language_object,
	];;
	?>

    <div class="dropdown language-switcher <?= $extra_css ?> ">
		<?php if ( $with_label ): ?>
            <span class="label"><?= __( 'Language' ) ?>:</span>
		<?php endif; ?>
        <a href="#" class="dropdown-toggle">
                <span class="flag-img-wrap">
                <img src="/images/prod/header/country-flag-<?= $switcher['current_language_object']['language_code'] ?>.png"
                     alt="<?= $switcher['current_language_object']['native_name'] ?>">
                </span>
        </a>

        <ul class="dropdown-menu">

			<?php
			foreach ( $switcher['switcher_array'] as $language_object ) { ?>
                <li class="language-row <?php if ( $language_object['active'] == 1 ) {
					echo 'active';
				} ?>">
                    <a class="language-link" href="<?= $language_object['url'] ?>">
                            <span class="flag-img-wrap">
                            <img src="/images/prod/header/country-flag-<?= $language_object['language_code'] ?>.png"
                                 alt="<?= $language_object['native_name'] ?>">
                            </span>
                        <span class="native-name"><?= $language_object['native_name'] ?></span>
                    </a>
                </li>
			<?php }
			?>
        </ul>
    </div>

<?php }