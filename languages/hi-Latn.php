<?php
if (!isset($badWords)) {
    $badWords = array();
}

$temp = array('aand' => 0, 'aandu' => 1, 'balatkar' => 2, 'balatkari' => 3, 'behen chod' => 4, 'behenchod' => 4, 'beti chod' => 5, 'betichod' => 5,  'bhadva' => 6, 'bhadve' => 7, 'bhandve' => 8, 'bhangi' => 9, 'bhootni ke' => 10, 'bhosad' => 11, 'bhosadi ke' => 12, 'bsdk' => 12, 'boobe' => 13, 'chakke' => 14, 'chinaal' => 15, 'chinki' => 16, 'chod' => 17, 'chodu' => 18, 'chodu bhagat' => 19, 'chooche' => 20, 'choochi' => 21, 'choope' => 22, 'choot' => 23, 'choot ke baal' => 24, 'chootia' => 25, 'chutiya' => 25, 'chootiya' => 26, 'chuche' => 27, 'chuchi' => 28, 'chudaap' => 29, 'chudai khanaa' => 30, 'chudam chudai' => 31, 'chude' => 32, 'chut' => 33, 'chut ka chuha' => 34, 'chut ka churan' => 35, 'chut ka mail' => 36, 'chut ke baal' => 37, 'chut ke dhakkan' => 38, 'chut maarli' => 39, 'chutad' => 40, 'chutadd' => 41, 'chutan' => 42, 'chutia' => 43, 'gaand' => 45, 'gaandfat' => 46, 'gaandmasti' => 47, 'gaandufad' => 48, 'gandfattu' => 49, 'gandu' => 50, 'gashti' => 51, 'gasti' => 52, 'ghassa' => 53, 'ghasti' => 54, 'gucchi' => 55, 'gucchu' => 56, 'harami' => 57, 'haramzade' => 58, 'hawas' => 59, 'hawas ke pujari' => 60, 'hijda' => 61, 'hijra' => 62, 'jhant' => 63, 'jhant chaatu' => 64, 'jhant ka keeda' => 65, 'jhant ke baal' => 66, 'jhant ke pissu' => 67, 'jhantu' => 68, 'kamine' => 69, 'kaminey' => 70, 'kanjar' => 71, 'kutta' => 72, 'kutta kamina' => 73, 'kutte ki aulad' => 74, 'kutte ki jat' => 75, 'kuttiya' => 76, 'loda' => 77, 'lodu' => 78, 'lund' => 79, 'lund choos' => 80, 'lund ka bakkal' => 81, 'lund khajoor' => 82, 'lundtopi' => 83, 'lundure' => 84, 'maa ki chut' => 85, 'maal' => 86, 'madar chod' => 87, 'madarchod' => 88, 'madharchod' => 88, 'madhavchod' => 89, 'mooh mein le' => 90, 'muh me le' => 96, 'mutth' => 91, 'mutthal' => 92, 'najayaz' => 93, 'najayaz aulaad' => 94, 'najayaz paidaish' => 95, 'paki' => 96, 'pataka' => 97, 'patakha' => 98, 'raand' => 99, 'randaap' => 100, 'randi' => 101, 'randi rona' => 102, 'saala' => 103, 'saala kutta' => 104, 'saali kutti' => 105, 'saali randi' => 106, 'suar' => 107, 'suar ke lund' => 108, 'suar ki aulad' => 109, 'tatte' => 110, 'tatti' => 111, 'teri maa ka bhosada' => 112, 'teri maa ka boba chusu' => 113, 'teri maa ki behenchod ' => 114, 'teri maa ki chut' => 115, 'tharak' => 116, 'tharki' => 117, 'tu chuda' => 118, 'chodna' => 119, 'chudne' => 120, 'ghodii' => 121, 'balatkaar' => 122);
// add temp to bad words
$badWords = array_merge($badWords, $temp);