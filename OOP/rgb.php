<?php
class RGB {
    private $color; // #ff0000
    private $red;
    private $green;
    private $blue;

    function __constructor( $colorCode = '' ) {
        $this->color = ltrim( $colorCode, '#' );
        $this->parseColor();
    }
    function getColor() {
        return $this->color;
    }
    function setColor( $colorCode ) {
        $this->color = ltrim( $colorCode, '#' );
        $this->parseColor();
    }
    private function parseColor() {
        if ( $this->color ) {
            $colors = sscanf( $this->color, '%02x%02x%02x' );
            print_r( $colors );
        }
    }
}
new RGB( "#ffef27" );
