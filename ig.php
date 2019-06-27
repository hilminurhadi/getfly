<?php
# by koenurf
# fb.com/koe.nurf
echo "\n# k{}enurf #\n\n";
function ig($jumlah, $jeda){
$headers = array("Host: themediakings.com",
"Connection: keep-alive",
"Cache-Control: max-age=0",
"Upgrade-Insecure-Requests: 1",
"User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Mobile Safari/537.36",
"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3",
"Accept-Encoding: gzip, deflate",
"Accept-Language: en-US,en;q=0.9,id;q=0.8",
"Cookie: __cfduid=d7f3c4d3f0a61cbfbdc43b30e6be87f061561614081"
);
    $x = 0; 
    while($x < $jumlah) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://themediakings.com/instafly/app/android/postback.php?prov=appo&data1={data1}&data2={data2}&data1=E03B972ED178361171FA430C9A231967&data2=ACAC441C79AC5AC15C824605E04F34487DA59D0487EB859336ADAF5EFE8336D115E75A21FD977D5CCB8877660101FF4D1AE40D7BF82FC298645A265AFCEADE7F52919EE98FFBAD19F365E7D324166631B35B73E5F1CA869A2A77EC6D0FE183F3473D2297E9BFECC7923866468EF16A96693E3FD1C9B11D6A9D4BB6CAD9F40268623921C8AE83C980252FA6672D76DEE8E52F8F52A084F80B526A82CAEE55E2AA5F3BE597BD045C34EBE0AA7FD282078F");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output."\n";
        sleep($jeda);
        $x++;
        flush();    
    }
}
echo "Jumlah: ";
$jumlah = trim(fgets(STDIN));
echo "Jeda: ";
$jeda = trim(fgets(STDIN));
$do = ig($jumlah,$jeda);
print $do;
?>
