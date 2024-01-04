<?php
/*  Create a function that takes a text input and converts newline characters into HTML line breaks (<br>) for displaying text in HTML. */
function convertToHtmlLineBreaks( $inputText ) {
    return nl2br( $inputText );
}

$text = "Hello\nWorld";
$htmlText = convertToHtmlLineBreaks( $text );
echo $htmlText;