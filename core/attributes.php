<?php
/**
 * The attributes class.
 *
 * @since 1.0
 */
class Momtaz_Nmwdhj_Attributes {

    /*** Properties ***********************************************************/

    /**
     * Attributes list.
     *
     * @since 1.0
     * @var array
     */
    protected $attributes;


    /*** Magic Methods ********************************************************/

    /**
     * The Attributes class constructor.
     *
     * @since 1.0
     */
    public function __construct ( $atts = null ) {

        // Reset the attributes.
        $this->reset_atts();

        // Set the attributes.
        $this->set_atts( $atts );

    } // end __construct()


    /*** Methods **************************************************************/

    // Getters

    /**
     * Get all the attributes array.
     *
     * @since 1.0
     * @return array
     */
    public function get_atts() {
        return $this->attributes;
    } // end get_atts()

    /**
     * Get an attribute value.
     *
     * @since 1.0
     * @return string
     */
    public function get_attr( $key, $def = '' ) {

        if ( is_string( $key ) ) {

            $key = strtolower( $key );

            if ( isset( $this->attributes[$key] ) )
                return $this->attributes[$key];

            if ( is_scalar( $def ) )
                return $def;

        } // end if

    } // end get_attr()

    // Checks

    /**
     * Check for an attribute existence.
     *
     * @since 1.0
     * @return boolean
     */
    public function has_attr( $key ) {

        if ( ! is_string( $key ) )
            return false;

        $key = strtolower( $key );

        if ( ! isset( $this->attributes[$key] ) )
            return false;

        if ( $this->attributes[$key] === false )
            return false;

        return true;

    } // end has_attr()

    // Setters

    /**
     * Set many attributes at once.
     *
     * @since 1.0
     * @return Momtaz_Nmwdhj_Attributes
     */
    public function set_atts( $atts, $override = true ) {

        if ( $atts instanceof Momtaz_Nmwdhj_Attributes )
            $atts = $atts->get_atts();

        if ( is_array( $atts ) ) {

            foreach( $atts as $key => $value )
                $this->set_attr( $key, $value, $override );

        } // end if

        return $this;

    } // end set_atts()

    /**
     * Set an attribute value.
     *
     * @since 1.0
     * @return Momtaz_Nmwdhj_Attributes
     */
    public function set_attr( $key, $value, $override = true ) {

        if ( is_string( $key ) ) {

            $key = strtolower( $key );

            if ( ! empty( $key ) && is_scalar( $value ) ) {

                if ( $override || ! isset( $this->attributes[$key] ) )
                    $this->attributes[$key] = $value;

            } // end if

        } // end if

        return $this;

    } // end set_attr()

    // Remove

    /**
     * Remove many attributes at once.
     *
     * @since 1.0
     * @return Momtaz_Nmwdhj_Attributes
     */
    public function remove_atts( array $keys ) {

        foreach( $keys as $key )
            $this->remove_attr( $key );

        return $this;

    } // end remove_atts()

    /**
     * Remove an attribute.
     *
     * @since 1.0
     * @return Momtaz_Nmwdhj_Attributes
     */
    public function remove_attr( $key ) {

        if ( is_string( $key ) ) {

            $key = strtolower( $key );

            unset( $this->attributes[$key] );

        } // end if

        return $this;

    } // end remove_attr()

    // Reset

    /**
     * Reset the attributes array.
     *
     * @since 1.0
     * @return Momtaz_Nmwdhj_Attributes
     */
    public function reset_atts() {
        $this->attributes = array();
        return $this;
    } // end reset_atts()

    // Converters

    /**
     * Convert the attributes array to string.
     *
     * @since 1.0
     * @return string
     */
    public function to_string( array $args = null ) {

        $output = '';
        $atts = $this->get_atts();

        if ( count( $atts ) === 0 )
            return $output;

        $args = wp_parse_args( $args, array(
            'after' => '',
            'before' => ' ',
            'escape' => true,
        ) );

        foreach ( $atts as $key => $value ) {

            $key = strtolower( $key );

             if ( is_bool( $value ) ) {

                 if ( $value === true )
                      $value = $key;

                 if ( $value === false )
                      continue;

             } // end if

             if ( $args['escape'] == true )
                $value = esc_attr( $value );

             // @note: Trailing space is important.
             $output .= $key . '="' . $value . '" ';

        } // end foreach

         if ( ! empty( $output ) )
             $output = $args['before'] . trim( $output ) . $args['after'];

        return $output;

    } // end to_string()

    public function __toString() {
        return $this->to_string();
    } // end __toString()

} // end Momtaz_Nmwdhj_Attributes

/**
 * Get a Momtaz Nmwdhj Attributes class instance.
 *
 * @return Momtaz_Nmwdhj_Attributes
 * @since 1.0
 */
function momtaz_nmwdhj_atts( $atts ) {

    if ( ! is_a( $atts, 'Momtaz_Nmwdhj_Attributes' ) ) {

        if ( ! is_array( $atts ) )
            $atts = null;

        $atts = new Momtaz_Nmwdhj_Attributes( $atts );

    } // end if

    return $atts;

} // end momtaz_nmwdhj_atts()