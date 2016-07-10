<?php
/**
 * Taxonomy field class which set post terms when saving.
 */
class RWMB_Taxonomy_Field extends RWMB_Object_Choice_Field
{
	/**
	 * Add default value for 'taxonomy' field
	 *
	 * @param $field
	 * @return array
	 */
	static function normalize( $field )
	{
		/**
		 * Backwards compatibility with field args
		 */
		if ( isset( $field['options']['args'] ) )
			$field['query_args'] = $field['options']['args'];
		if ( isset( $field['options']['taxonomy'] ) )
			$field['taxonomy'] = $field['options']['taxonomy'];
		if ( isset( $field['options']['type'] ) )
			$field['field_type'] = $field['options']['type'];

		/**
		 * Set default field args
		 */
		$field = parent::normalize( $field );
		$field = wp_parse_args( $field, array(
			'taxonomy'   => 'category',
		) );

		/**
		 * Set default query args
		 */
		$field['query_args'] = wp_parse_args( $field['query_args'], array(
			'hide_empty' => false,
		) );

		/**
		 * Set default placeholder
		 * - If multiple taxonomies: show 'Select a term'
		 * - If single taxonomy: show 'Select a %taxonomy_name%'
		 */
		if ( empty( $field['placeholder'] ) )
		{
			$field['placeholder'] = us_translate_with_external_domain( 'Select a term', 'meta-box' );
			if ( is_string( $field['taxonomy'] ) && taxonomy_exists( $field['taxonomy'] ) )
			{
				$taxonomy_object      = get_taxonomy( $field['taxonomy'] );
				$field['placeholder'] = sprintf( us_translate_with_external_domain( 'Select a %s', 'meta-box' ), $taxonomy_object->labels->singular_name );
			}
		}

		/**
		 * Prevent cloning for taxonomy field
		 */
		$field['clone'] = false;

		return $field;
	}

	/**
	 * Get field names of object to be used by walker
	 *
	 * @return array
	 */
	static function get_db_fields()
	{
		return array(
			'parent' => 'parent',
			'id'     => 'term_id',
			'label'  => 'name',
		);
	}

	/**
	 * Get options for selects, checkbox list, etc via the terms
	 *
	 * @param array $field Field parameters
	 *
	 * @return array
	 */
	static function get_options( $field )
	{
		$options = get_terms( $field['taxonomy'], $field['query_args'] );
		return $options;
	}

	/**
	 * Save meta value
	 *
	 * @param mixed $new
	 * @param mixed $old
	 * @param int   $post_id
	 * @param array $field
	 *
	 * @return string
	 */
	static function save( $new, $old, $post_id, $field )
	{
		$new = array_unique( array_map( 'intval', (array) $new ) );
		$new = empty( $new ) ? null : $new;
		wp_set_object_terms( $post_id, $new, $field['taxonomy'] );
	}

	/**
	 * Standard meta retrieval
	 *
	 * @param int   $post_id
	 * @param bool  $saved
	 * @param array $field
	 *
	 * @return array
	 */
	static function meta( $post_id, $saved, $field )
	{
		$meta = get_the_terms( $post_id, $field['taxonomy'] );
		$meta = (array) $meta;
		$meta = wp_list_pluck( $meta, 'term_id' );

		return $meta;
	}

	/**
	 * Get the field value
	 * Return list of post term objects
	 *
	 * @param  array    $field   Field parameters
	 * @param  array    $args    Additional arguments. Rarely used. See specific fields for details
	 * @param  int|null $post_id Post ID. null for current post. Optional.
	 *
	 * @return array List of post term objects
	 */
	static function get_value( $field, $args = array(), $post_id = null )
	{
		$value = get_the_terms( $post_id, $field['taxonomy'] );

		// Get single value if necessary
		if ( ! $field['clone'] && ! $field['multiple'] && is_array( $value ) )
		{
			$value = reset( $value );
		}
		return $value;
	}

	/**
	 * Get option label
	 *
	 * @param string   $value Option value
	 * @param array    $field Field parameter
	 *
	 * @return string
	 */
	static function get_option_label( $value, $field )
	{
		return sprintf(
			'<a href="%s" title="%s">%s</a>',
			esc_url( get_term_link( $value ) ),
			esc_attr( $value->name ),
			$value->name
		);
	}
}
