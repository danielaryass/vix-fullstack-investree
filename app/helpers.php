<?php
if (! function_exists('limit_words')) {
    function limit_words($string, $word_limit)
    {
        $words = explode(' ', $string);

        if (count($words) > $word_limit) {
            $words = array_slice($words, 0, $word_limit);
            $string = implode(' ', $words) . '...';
        }

        return $string;
    }
}
