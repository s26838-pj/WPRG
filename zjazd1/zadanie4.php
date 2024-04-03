<?php

$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$word_array = explode(" ", $text);

for ($i = 0; $i < count($word_array); $i++) {
    $word_array[$i] = trim(preg_replace('/[^a-zA-Z0-9]/', '', $word_array[$i]));
}

$asso_array = [];
foreach ($word_array as $index => $word) {
    if ($index % 2 !== 0) {
        $key = $word_array[$index - 1];
        $asso_array[$key] = $word;
    }
}

foreach ($asso_array as $key => $value) {
    echo $key . ": " . $value . "\n";
}

?>
