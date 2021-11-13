<?php


@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));                 system('clear');                                                                                                                                                                                function url($url){                                               $headers = array();                                         $headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";                                                   $ch = curl_init();                                                    curl_setopt($ch, CURLOPT_URL, $url);                            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);                 $res = curl_exec($ch);                                    return $res;                                                    }                                                                                                                                                                                               error_reporting(0);                                             system("clear");                                                                                                                $SC = "1";                                                                                                                      $res = url("https://controlc.com/86f48552");                    //echo $res."\n";
//exit;
$link1 = explode('Link: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('[tpcolor=#FF0000]',$res);
$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
//$pass="A";
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
}else{
$o = "\033[1;32m[ONLINE]";
}
if ($pass=="update"){
$o = "\033[1;32m[\033[1;91mUpdate\033[1;92m]";
}

$res = url("https://controlc.com/b27a1f06");
//echo $res."\n";
//exit;
$lg1 = explode('Login: ',$res);
$login = explode('/ajax_auth',$lg1[1]);
//echo $login[0]."\n";
//$pw1 = explode('[tpcolor=#FF0000]',$res);
//$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";
echo $baner = "
\033[1;31m ██████╗ ██████╗ ██╗   ██╗██╗██████╗       ██████╗  ██╗ \033[1;92m$o\033[1;91m
██╔════╝██╔═══██╗██║   ██║██║██╔══██╗      ╚════██╗███║
██║     ██║   ██║██║   ██║██║██║  ██║█████╗ █████╔╝╚██║\033[1;97m
██║     ██║   ██║╚██╗ ██╔╝██║██║  ██║╚════╝██╔═══╝  ██║
╚██████╗╚██████╔╝ ╚████╔╝ ██║██████╔╝      ███████╗ ██║
 ╚═════╝ ╚═════╝   ╚═══╝  ╚═╝╚═════╝       ╚══════╝ ╚═╝ SCRIPT V\033[1;92m$SC\n";
//echo $HJ2." ◼ SILAHKAN COPAS LINK. JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";

if ($link[0]==""){
echo " \033[1;91mKONEKSI TERPUTUS, SILAHKAN CEK KONEKSIMU\n";
echo " \033[3;91mConnection Lost, Please Check Your Connection\n";
exit;
}
if ($pass == 'update'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT Anda Sudah Tidak Terhubung ke Server \033[1;92mSugiono Official \n";
      echo "\033[1;92m ◼ \033[1;97mSilahkan Copy Paste Link \n\n";
      echo "\033[1;92m ◼ \033[1;97mLink Script Versi Update \033[1;92m$link[0]\n\n";
      exit;
}

//if($pass=='update'){
//echo " \033[1;92mMohon Tunggu Proses Update Script...\r";
//sleep(3);
//system("git clone $link[0]");
//exit;
//}
if ($pass == 'off'){

      echo "\033[1;92m ◼ \033[1;91mSCRIPT SEDANG OFFLINE \033[1;97matau \033[1;91mMAINTENANCE \n";
      exit;
}else{
if($read == $pass){
      echo "\033[1;91m ▶ \033[1;92mUPLOAD Password \r";
      sleep(5);
      system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
      sleep(1);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;91m ◼\033[1;97m Link Password :\033[1;92m $link[0]\n";
echo "\033[1;91m ◼ \033[1;97mMASUKAN PASSWORD DI SINI : \033[1;92m";
$p = trim(fgets(STDIN));
if ($p==""){
exit;
}
echo "\n \033[1;96mLoading \033[1;31m▪\r";
sleep(1);
echo "\033[1;96m Loading \033[1;31m▪ \033[1;31m▪\r";
sleep(1);
echo "\033[1;96m Loading \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo "\033[1;91m ◼ \033[1;92mOPEN SCRIPT SUCCESS            \r";
        system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        fclose($save);
        sleep(5);
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
        sleep(1);
        }else{
        echo "\033[1;92m ◼ \033[1;91mGAGAL...!!!, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(1);
echo "\033[1;97m   Silahkan Klik \033[1;32mENTER \033[1;37mUntuk Melanjutkan \033[1;92m";
$kkk = trim(fgets(STDIN));
system("clear");

function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
//        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
//        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }

function get($url){
  return curl($url,'',head())[1];
}

function post($url,$data){
  return curl($url,$data,head())[1];
}


function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}

function ban(){
$SC=1;
date_default_timezone_set("Asia/Jakarta");
system("clear");
echo "\033[1;92m";
system("toilet -f wideterm -F border '       SCRIPT  BNB  MINER       '");
echo $baner1 = " \033[102m      \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m      \033[0m \033[102m  \033[0m \033[102m      \033[0m \033[102m      \033[0m \033[102m      \033[0m \033[101m \033[1;97mO.F.F.I.C.I.A.L \033[0m
 \033[102m  \033[0m     \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m     \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m
 \033[102m      \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m \033[102m   \033[0m \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m \033[1;94mSERVER \033[0m \033[102m \033[1;94mON \033[0m
     \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m
 \033[102m      \033[0m \033[102m      \033[0m \033[102m      \033[0m \033[102m  \033[0m \033[102m      \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m      \033[0m \033[102m \033[1;94mSCRIPT VERSION \033[0m \033[102m \033[1;94m$SC \033[0m
\033[1;32m ===============================\033[1;31m404\033[1;32m===============================
\033[1;37m •Creator        :\033[1;32m Sugiono Official
\033[1;37m •Support By     :\033[1;32m All Admin
\033[1;37m •Group Tele     :\033[1;32m @SugionoSatoshi
\033[1;37m •Channel YT     :\033[1;32m Sugiono Official
\033[1;37m •Donation Doge  :\033[1;31m DFvVJc9pbty6Jrx94QuB7Da9LAsz7jnsso
\033[1;37m =================================================================
\033[1;31m •SCRIPT NOT FOR SALE •SCRIPT GRATIS GUNAKAN DENGAN BIJAK YA CUK
 •SEGALA RESIKO DI TANGGUNG CUCUK YA •KAKEK MAU KABUR DULU
 •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••\n\n";
}

ban();

if(!file_exists("data.json")){
while("true"){
system("clear");
ban();
  $r=readline("\033[1;97mInput Your Cookie : \033[1;92m");
if(!$r==""){
break;
}
}
$data=["Cookie"=>$r];
  save("data.json",$data);
//$a=next($ran);
}

function timer(){
     $timr=time()+10;
      while(true):
      echo "\r                                                           \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
  $str= str_repeat("\033[1;92m◼",$res)."              \r";
}
      echo " \033[1;97mPlease Wait \033[1;91m".date('i:s',$res)." $str";
      sleep(1);
      endwhile;
}

system("clear");
ban();
echo "\n";
function head(){
$cookie=json_decode(file_get_contents("data.json"),true)["Cookie"];
  $h[]="accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $h[]="user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.114 Mobile Safari/537.36";
  $h[]="cookie: $cookie"; //ci_session=7702d5998f1d67fe0b849dbc25>
 return $h;
}

$url="https://bnb-miner.live/";
$res= get($url);
$wal=explode('<',explode('address: <strong>',$res)[1])[0];
if($wal==""){
echo " \033[1;91mSession Expired ... \n";
system("rm data.json");
exit;
}
echo " \033[1;97mWallet BNB \033[1;90m: \033[1;92m$wal \n";
$bal=explode('<',explode('account__sum">',$res)[1])[0];
echo " \033[1;97mBalance    \033[1;90m: \033[1;92m$bal \n\n";

while("true"){
$url="https://bnb-miner.live/ajax.php";
$data="action=claim";
$claim=json_decode(post($url,$data))->message->answer;
$balance=json_decode(post($url,$data))->message->sum;
if(!$claim==""){
echo "\033[1;96m".$claim." \033[1;92m$balance \n";
}
timer();
}