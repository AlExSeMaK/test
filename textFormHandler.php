<?php

$post = $_POST;
//var_dump($post);

if ($post['trans'] == 'en') {
    $converter = array(
        'а' => 'a', 'А' => 'A',
        'б' => 'b', 'Б' => 'B',
        'в' => 'v', 'В' => 'V',
        'г' => 'g', 'Г' => 'G',
        'д' => 'd', 'Д' => 'D',
        'е' => 'e', 'Е' => 'E',
        'ё' => 'yo', 'Ё' => 'Yo',
        'ж' => 'zh', 'Ж' => 'Zh',
        'з' => 'z', 'З' => 'Z',
        'и' => 'i', 'И' => 'I',
        'й' => 'y', 'Й' => 'Y',
        'к' => 'k', 'К' => 'K',
        'л' => 'l', 'Л' => 'L',
        'м' => 'm', 'М' => 'M',
        'н' => 'n', 'Н' => 'N',
        'о' => 'o', 'О' => 'O',
        'п' => 'p', 'П' => 'P',
        'р' => 'r', 'Р' => 'R',
        'с' => 's', 'С' => 'S',
        'т' => 't', 'Т' => 'T',
        'у' => 'u', 'У' => 'U',
        'ф' => 'f', 'Ф' => 'F',
        'х' => 'h', 'Х' => 'H',
        'ц' => 'ts', 'Ц' => 'Ts',
        'ч' => 'ch', 'Ч' => 'Ch',
        'ш' => 'sh', 'Ш' => 'Sh',
        'щ' => 'sch', 'Щ' => 'Sch',
        'ъ' => '\'', 'Ъ' => '\'',
        'ы' => '\'i', '\'I' => 'I',
        'ь' => '\'', 'Ь' => '\'',
        'э' => '\'e', 'Э' => '\'E',
        'ю' => '\'u', 'Ю' => '\'U',
        'я' => 'ya', 'Я' => 'Ya',
        '«' => '\'\'', '»' => '\"',
        '–' => '-', '--' => '--',
        '№' => '#', '`' => '`',
    );
}else
    $converter = array(
        'a' => 'а', 'A' => 'А',
        'b' => 'б', 'B' => 'Б',
        'v' => 'в', 'V' => 'В',
        'g' => 'п', 'G' => 'Г',
        'd' => 'д', 'D' => 'Д',
        'e' => 'е', 'E' => 'Е',
        'yo' => 'ё', 'Yo' => 'Ё',
        'zh' => 'ж', 'Zh' => 'Ж',
        'z' => 'з', 'Z' => 'З',
        'i' => 'и', 'I' => 'И',
        'y' => 'й', 'Y' => 'Й',
        'k' => 'к', 'K' => 'К',
        'l' => 'л', 'L' => 'Л',
        'm' => 'м', 'M' => 'М',
        'n' => 'н', 'N' => 'Н',
        'o' => 'о', 'O' => 'О',
        'p' => 'п', 'P' => 'П',
        'r' => 'р', 'R' => 'Р',
        's' => 'с', 'S' => 'С',
        't' => 'т', 'T' => 'Т',
        'u' => 'у', 'U' => 'У',
        'f' => 'ф', 'F' => 'Ф',
        'h' => 'х', 'H' => 'Х',
        'ts' => 'ц', 'Ts' => 'Ц',
        'ch' => 'ч', 'Ch' => 'Ч',
        'sh' => 'ш', 'Sh' => 'Ш',
        'sch' => 'щ', 'Sch' => 'Щ',
        /*'\'' => 'ъ'*/ /*'\'' => 'Ъ',*/
        '\'i' => 'ы', '\'I' => 'Ы',
        '\'' => 'ь', /*'\'' => 'Ь',*/
        '\'e' => 'э', '\'E' => 'Э',
        '\'u' => 'ю', '\'U' => 'Ю',
        'ya' => 'я', 'Ya' => 'Я',
        '\'\'' => '«', '\"' => '»',
        '-' => '-', '--' => '--',
        '#' => '№', '`' => '`',


    );

$value = strtr($post['text'], $converter);
$_POST = [];
echo $value;

