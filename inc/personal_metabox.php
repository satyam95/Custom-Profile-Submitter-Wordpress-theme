<?php

class Rational_Meta_Box_1 {
	private $screens = array(
		'profile_post_type',
	);
	private $fields = array(
		array(
			'id' => 'email',
			'label' => 'Email',
			'type' => 'email',
		),
		array(
			'id' => 'gender',
			'label' => 'Gender',
			'type' => 'radio',
			'options' => array(
				'Male',
				'Female',
			),
		),
		array(
			'id' => 'phone-number',
			'label' => 'Phone Number',
			'type' => 'number',
		),
		array(
			'id' => 'state',
			'label' => 'State',
			'type' => 'select',
			'options' => array(
				'Andhra Pradesh (AP)',
				'Arunachal Pradesh (AR)',
				'Assam (AS)',
				'Bihar (BR)',
				'Chhattisgarh (CG)',
				'Goa (GA)',
				'Gujarat (GJ)',
				'Haryana (HR)',
				'Himachal Pradesh (HP)',
				'Jammu and Kashmir (JK)',
				'Jharkhand (JH)',
				'Karnataka (KA)',
				'Kerala (KL)',
				'Madhya Pradesh (MP)',
				'Maharashtra (MH)',
				'Manipur (MN)',
				'Meghalaya (ML)',
				'Mizoram (MZ)',
				'Nagaland (NL)',
				'Odisha(OR)',
				'Punjab (PB)',
				'Rajasthan (RJ)',
				'Sikkim (SK)',
				'Tamil Nadu (TN)',
				'Telangana (TS)',
				'Tripura (TR)',
				'Uttar Pradesh (UP)',
				'Uttarakhand (UK)',
				'West Bengal (WB)',
				'Andaman and Nicobar Islands(AN)',
				'Chandigarh (CH)',
				'Dadra and Nagar Haveli (DN)',
				'Daman and Diu (DD)',
				'National Capital Territory of Delhi (DL)',
				'Lakshadweep (LD)',
				'Pondicherry (PY)',
			),
		),
		array(
			'id' => 'city',
			'label' => 'City',
			'type' => 'text',
		),
	);

	/**
	 * Class construct method. Adds actions to their respective WordPress hooks.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Hooks into WordPress' add_meta_boxes function.
	 * Goes through screens (post types) and adds the meta box.
	 */
	public function add_meta_boxes() {
		foreach ( $this->screens as $screen ) {
			add_meta_box(
				'personal',
				__( 'Personal', 'wp6' ),
				array( $this, 'add_meta_box_callback' ),
				$screen,
				'advanced',
				'default'
			);
		}
	}

	/**
	 * Generates the HTML for the meta box
	 * 
	 * @param object $post WordPress post object
	 */
	public function add_meta_box_callback( $post ) {
		wp_nonce_field( 'personal_data', 'personal_nonce' );
		echo 'Please Add Personal Information ';
		$this->generate_fields( $post );
	}

	/**
	 * Generates the field's HTML for the meta box.
	 */
	public function generate_fields( $post ) {
		$output = '';
		foreach ( $this->fields as $field ) {
			$label = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
			$db_value = get_post_meta( $post->ID, 'personal_' . $field['id'], true );
			switch ( $field['type'] ) {
				case 'radio':
					$input = '<fieldset>';
					$input .= '<legend class="screen-reader-text">' . $field['label'] . '</legend>';
					$i = 0;
					foreach ( $field['options'] as $key => $value ) {
						$field_value = !is_numeric( $key ) ? $key : $value;
						$input .= sprintf(
							'<label><input %s id="%s" name="%s" type="radio" value="%s"> %s</label>%s',
							$db_value === $field_value ? 'checked' : '',
							$field['id'],
							$field['id'],
							$field_value,
							$value,
							$i < count( $field['options'] ) - 1 ? '<br>' : ''
						);
						$i++;
					}
					$input .= '</fieldset>';
					break;
				case 'select':
					$input = sprintf(
						'<select id="%s" name="%s">',
						$field['id'],
						$field['id']
					);
					foreach ( $field['options'] as $key => $value ) {
						$field_value = !is_numeric( $key ) ? $key : $value;
						$input .= sprintf(
							'<option %s value="%s">%s</option>',
							$db_value === $field_value ? 'selected' : '',
							$field_value,
							$value
						);
					}
					$input .= '</select>';
					break;
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$field['type'] !== 'color' ? 'class="regular-text"' : '',
						$field['id'],
						$field['id'],
						$field['type'],
						$db_value
					);
			}
			$output .= $this->row_format( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	/**
	 * Generates the HTML for table rows.
	 */
	public function row_format( $label, $input ) {
		return sprintf(
			'<tr><th scope="row">%s</th><td>%s</td></tr>',
			$label,
			$input
		);
	}
	/**
	 * Hooks into WordPress' save_post function
	 */
	public function save_post( $post_id ) {
		if ( ! isset( $_POST['personal_nonce'] ) )
			return $post_id;

		$nonce = $_POST['personal_nonce'];
		if ( !wp_verify_nonce( $nonce, 'personal_data' ) )
			return $post_id;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		foreach ( $this->fields as $field ) {
			if ( isset( $_POST[ $field['id'] ] ) ) {
				switch ( $field['type'] ) {
					case 'email':
						$_POST[ $field['id'] ] = sanitize_email( $_POST[ $field['id'] ] );
						break;
					case 'text':
						$_POST[ $field['id'] ] = sanitize_text_field( $_POST[ $field['id'] ] );
						break;
				}
				update_post_meta( $post_id, 'personal_' . $field['id'], $_POST[ $field['id'] ] );
			} else if ( $field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, 'personal_' . $field['id'], '0' );
			}
		}
	}
}
new Rational_Meta_Box_1;