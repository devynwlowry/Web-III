<?php

class Element {
    var $tagger;
    
    var $html;

    var $attributes;

    
    public function __construct($tagger, $html, $attributes=array()) { //Sets equal to empty array for when output.php does its magic by adding content and eventually printing it
        $this -> tagger = $tagger;
        $this -> html = $html;
        $this -> attributes = $attributes;
    }

    public function setAttribute($thingOne, $thingTwo) {
        $this -> attributes[$thingOne] = $thingTwo;
    }

    public function __toString() {
        $string = '<' . $this->tagger . ' ';

        foreach($this->attributes as $thingOne => $thingTwo) {
            $string .= "$thingOne = $thingTwo";
        }

        return $string . '>' . $this->html . '</' . $this->tagger . '>';
    }
}

