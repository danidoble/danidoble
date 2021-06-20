<?php

namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Http\Request;

class AuxiliarController extends Controller
{
    public static function imgWysi($string)
    {
        $doc = new DOMDocument();
        $doc->loadHTML(preg_replace("/&(?!\S+;)/", "&amp;", $string));
        $imageTags = $doc->getElementsByTagName('img');


        foreach($imageTags as $tag) {
            $init = $doc->saveXML($tag);
            $tag->setAttribute('data-src',$tag->getAttribute('src'));
            $tag->setAttribute('src',asset('img/loading.svg'));
            $tag->setAttribute('style','');
            $tag->setAttribute('class',$tag->getAttribute('class').' my-6 rounded-md w-full lazy shadow-md');

            $string = str_replace($init,$doc->saveXML($tag),$string);
            $string = str_replace(rtrim($init,'/>').'>',$doc->saveXML($tag),$string);
        }
        return $string;
    }
}
