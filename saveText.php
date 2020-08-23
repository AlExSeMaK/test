<?php
$post = $_POST;

$sms = $post['text'];

$lang = $post['trans'];
$db = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

if ($lang == 'ru' and strlen($sms) <= 70) {
    $stmt = $db->prepare('insert into sms(sms_body) value (:sms_body)');
    $stmt->execute([':sms_body' => $sms]);
}elseif ($lang == 'en' and strlen($sms) <= 160){
    $stmt = $db->prepare('insert into sms(sms_body) value (:sms_body)');
    $stmt->execute([':sms_body' => $sms]);
}elseif ($lang == 'ru' and strlen($sms) > 70){
    $arr_sms = str_split($sms, 67);
    $sms_count_id = uniqid();
    for ($i = 0; $i < count($arr_sms); $i++){
        $sms_serial_number = $i + 1;
        $stmt = $db->prepare('insert into sms(sms_body, sms_count, sms_count_id, sms_serial_number) 
                             value (:sms_body, :sms_count, :sms_count_id, :sms_serial_number)');
        $stmt->execute([
            ':sms_body' => $arr_sms[$i],
            ':sms_count' => count($arr_sms),
            ':sms_count_id' => $sms_count_id,
            ':sms_serial_number' => $sms_serial_number
        ]);

    }
}elseif ($lang == 'en' and strlen($sms) > 160){
    $arr_sms = str_split($sms, 153);
    $sms_count_id = uniqid();
    for ($i = 0; $i < count($arr_sms); $i++){
        $sms_serial_number = $i + 1;
        $stmt = $db->prepare('insert into sms(sms_body, sms_count, sms_count_id, sms_serial_number) 
                             value (:sms_body, :sms_count, :sms_count_id, :sms_serial_number)');
        $stmt->execute([
            ':sms_body' => $arr_sms[$i],
            ':sms_count' => count($arr_sms),
            'sms_count_id' => $sms_count_id,
            ':sms_serial_number' => $sms_serial_number
        ]);
    }
}



