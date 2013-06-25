<?php
/**
 * The Checkbox element view class.
 *
 * @since 1.0
 */
class Momtaz_Nmwdhj_View_Checkbox extends Momtaz_Nmwdhj_View_Input {

    /**
     * Check the element.
     *
     * @since 1.0
     * @return boolean
     */
    public function check( Momtaz_Nmwdhj_Element $element ) {

        if ( ! parent::check( $element ) )
            return false;

        // Get the 'type' attribute.
        $type = $element->get_attr( 'type' );

        // Check the 'type' attribute.
        if ( strcasecmp( $type, 'checkbox' ) !== 0 )
            return false;

        return true;

    } // end check()

    /**
     * Prepare the Input element.
     *
     * @since 1.0
     * @return void
     */
    public function prepare( Momtaz_Nmwdhj_Element $element ) {

        parent::prepare( $element );

        // Set the 'checked' attribute.
        if ( $element->is_checked() )
            $element->set_attr( 'checked', 'checked' );

        // Set the 'value' attribute.
        if ( ! $element->has_attr( 'value' ) )
            $element->set_attr( 'value', $element->get_checked_value() );

    } // end prepare()

} // end Class Momtaz_Nmwdhj_View_Checkbox