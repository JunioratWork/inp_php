<?php

    $ch = curl_init();
    curl_setopt($ch, option: CURLOPT_URL, value: 'https://api.micuentaweb.pe/api-payment/V4/Charge/CreatePayment');
    curl_setopt($ch, option: CURLOPT_RETURNTRANSFER, value:1);
    curl_setopt($ch, option: CURLOPT_SSL_VERIFYHOST, value:0);
    curl_setopt($ch, option: CURLOPT_SSL_VERIFYPEER, value:0);
    curl_setopt($ch, option: CURLOPT_POST, value:1);
    curl_setopt($ch, option: CURLOPT_POSTFIELDS, value:"cmd=_notify-validate&".http_build_query($_POST));

    $respuesta = curl_exec($ch);
    curl_close($ch);

    file_put_contents(filename:"test.txt");
?>