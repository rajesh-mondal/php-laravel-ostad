<?php
/* Create a program that reads a long text and formats it into paragraphs with a specified maximum line length. Ensure that words are not split. */
function formatText( $inputText, $lineLength ) {
    return wordwrap( $inputText, $lineLength, "\n", true );
}

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$lineLength = 20;
$formatedText = formatText($text, $lineLength);
echo $formatedText;