<?php
namespace FormKit;

/**
 * Form Widget Factory class
 */
class FormKit
{
    static $useCss    = true;
    static $useJs     = true;
    static $baseUrl   = '';

    static function text( $name, $attributes = array() )
    {
        return new Widget\TextInput( $name , $attributes );
    }

    static function checkbox( $name, $attributes = array() )
    {
        return new Widget\CheckboxInput( $name , $attributes );
    }

    static function select($name, $attributes = array() )
    {
        return new Widget\SelectInput( $name, $attributes );
    }


}
