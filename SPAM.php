<?php
// Rahim 
class bomWithMsg{
  public $no;
  public $msg;
  
  public function sendMsg($no, $msg){
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_URL, "http://server1-kreonrinto452786.codeanyapp.com/?no=$no&msg=$msg");
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch1, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
    $ex = curl_exec($ch1);
    curl_close($ch1);
    preg_match_all("/\"respone\":\"(.*?)\"/", $ex, $rest);
    echo "[ ".$rest[1][0]." ] [ ".$no." ] [ ".$msg." ]\n";
  }
  public function bNer(){
    echo "SIMPLE SPAM SMS RECODE BY X-Mr.R4h1M";
    echo "
Special Thanks To Con7ext \n";
  }
}
$c7e = new bomWithMsg();
$c7e->bNer();
echo "Masukin Target 08xxxxx : ";
$no = trim(fgets(STDIN));
$c7e->no = "$no";
echo "Pesan/Message : ";
$msg = trim(fgets(STDIN));
$c7e->msg = "$msg";
echo "Jumlah Kirim : ";
$kirim = trim(fgets(STDIN));
for ($i=0; $i < $kirim; $i++) { 
    $c7e->sendMsg($c7e->no,$c7e->msg);
}
