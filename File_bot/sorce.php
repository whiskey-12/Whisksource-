<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

$sorceu = file_get_contents("data/sorceu.json");
if($text == "السورس" or $text == "سورس" or $text == "يا سورس" and in_array($from_id, $Dev)){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/whisky_bot003/28",
'caption'=>"*ᴡᴇʟᴄᴏᴍᴇ ᴛᴏ sᴏᴜʀᴄᴇ ᴡʜɪsᴋᴇʏ
✵⁞*[𝐒𝐎𝐔𝐑𝐂𝐄 𝐖𝐇𝐈𝐒𝐊𝐄𝐘 𝐁𝐎𝐓](https://t.me/whisky_bot003)*
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
⌯︙*[𝗦𝗢𝗨𝗥𝗖𝗘 𝗖𝗛𝗔𝗡𝗡𝗘𝗟 ⁦⁦ㇱ](https://t.me/whisky_bot003)*
⌯︙*[𝗦𝗢𝗨𝗥𝗖𝗘 𝗜𝗡𝗦𝗧𝗔𝗟𝗟](https://t.me/whisky_bot003)*
⌯︙*[𝐂𝐇𝐀𝐍𝐆𝐈𝐍𝐆 𝐈𝐃 𝐂𝐇𝐀𝐍𝐍𝐄𝑳](https://t.me/whisky_bot003)*
⌯︙*[𝐓𝐄𝐀𝐌 𝐒𝐎𝐔𝐑𝐂𝐄](lV_P_Nl)*
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ 
⌯︙*[𝗰𝗼𝗻𝗻𝗲𝗰𝘁 𝗱𝗲𝘃](https://t.me/$buy)**
",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- المطور 👨‍🔧",'url'=>"t.me/$buy"]],
]
]) 
]); 
}
$sorceu = file_get_contents("data/sorceu.json");
if($text == "السورس" or $text == "سورس" or $text == "يا سورس" and $sorceu != null){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"
$sorceu
",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
'reply_to_message_id'=>$message_id,
]); 
}
#######
if( $text=="تفطين" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$manger) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$eri) && !in_array($re_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn + 1;	
if ($warnplus >= $setwarn) {
$hardmodewarn = $settings["information"]["hardmodewarn"];
if($hardmodewarn == "بالتقييد"){
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل~⪼ [$re_name](t.me/$re_user)
".$em." تم تفطينك تفطيناتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
 }
else
{
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
     ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل~⪼ [$re_name](t.me/$re_user)
".$em." تم تفطينك تفطيناتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل~⪼ [$re_name](t.me/$re_user)
".$em." تم تفطينك تفطيناتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
 }
else
{
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- خطأ لا يمكن تفطين البوديقارد, المدير , المطور ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
if($text=="مسح التفطين" && $rt ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn - 1;	
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل~⪼ [$re_name](t.me/$re_user)
".$em."تم مسح تفطينك تفطيناتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
 }
}
}
if ( strpos($text , 'وضع تفطين') !== false  ) {
$newdec = str_replace(['وضع تفطين'],'',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
".$em." تم تعيين عدد التفطينات {*$newdec*}
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
- لا تستطيع وضع اكثر من 20 تفطين  
",
'reply_markup'=>$inlinebutton,
   ]);
 }
}
}
}
elseif( $text=="تفطيناتي"){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." تفطيناتك *$warn* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }
#######
$re = $update->message->reply_to_message->from->id;
$na1 = $update->message->reply_to_message->from->first_name;
$na2 = $update->message->reply_to_message->from->last_name;
if(!$na1){
$m1 = "لا يوجد اسم اول";
}elseif($na1){
$m1 = "$na1";
}
if(!$na2){
$m2 = "لا يوجد اسم ثاني";
}elseif($na2){
$m2 = "$na2";
}
if($text=="اسمه" and $re){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." الاسم الاول ⋙ {$m1}
".$em." الاسم الثاني ⋙ {$m2}
",
'reply_to_message_id'=>$message_id,
]);
}

$ameer = $message->from->first_name;
$saiko = $message->from->last_name;
if(!$ameer){
$p1 = "لا يوجد اسم اول";
}elseif($ameer){
$p1 = "$ameer";
}
if(!$saiko){
$p2 = "لا يوجد اسم ثاني";
}elseif($saiko){
$p2 = "$saiko";
}
if($text=="اسمي"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." لاسم الاول ⋙ {$p1}
".$em." الاسم الثاني ⋙ {$p2}
",
'reply_to_message_id'=>$message->message_id, 
]);
}
 if($text =="المنشئ"){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
$owner1 = $result[$key]['user']['first_name'];
   $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."l "."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
   }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
",
'reply_to_message_id'=>$message_id,'parse_mode'=>"MarkDown",
 ]);
 }
 if($text=="المنشئ"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." المنشئ ⋙ {[$owner1](tg://user?id=$owner)}
".$em." ايدي المنشئ ⋙ {$owner}
".$em." معرف المنشئ ⋙ {@$owner2}
",'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
]);
}
if($text=="الترجمه"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙اليك اوامر الترجمه 
⋄︙العربيه الي الانجليزي ~⪼ ar#en
⋄︙الانجليزي الي العربيه ~⪼ en#ar
⋄︙العربيه الي فارسي ~⪼ fr#ar
⋄︙فارسي الي العربيه ~⪼ ar#fr
⋄︙لتركي الي العربيه ~⪼ ar#tr
⋄︙ العربيه الي التركي ~⪼ tr#ar
⋄︙لانجليزي الي التركي ~⪼ tr#en
⋄︙التركي الي الانجليزي ~⪼ en#tr
⋄︙قم بنسخ اوامر الذي فوق 
⋄︙وقم بالرد علي الكلمة المطلوبا
",
'reply_to_message_id'=>$message_id,'parse_mode'=>"MarkDown",
]);
}
#######
$re = $message->reply_to_message;
if($text=="fr#ar" and $re){
$s = str_replace(' ','%20',$re->text);
$fr = file_get_contents("https://abu-ehab-vip.ml/Abuehab/api(carlos)translate.php?Language=ar&TO=fa&text=".$s);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$fr",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="en#ar" and $re){
$H = str_replace(' ','%20',$re->text);
$enar = file_get_contents("https://abu-ehab-vip.ml/Abuehab/api(carlos)translate.php?Language=en&TO=ar&text=".$H);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$enar",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="ar#fr" and $re){
$Q = str_replace(' ','%20',$re->text);
$arfr = file_get_contents("https://abu-ehab-vip.ml/Abuehab/api(carlos)translate.php?Language=fa&TO=ar&text=".$Q);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$arfr",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="ar#en" and $re){
$W = str_replace(' ','%20',$re->text);
$aren = file_get_contents("https://abu-ehab-vip.ml/Abuehab/api(carlos)translate.php?Language=ar&TO=en&text=".$W);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$aren",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="ar#tr" and $re){
$E = str_replace(' ','%20',$re->text);
$artr = file_get_contents("https://abu-ehab-vip.ml/Abuehab/api(carlos)translate.php?Language=ar&TO=tr&text=".$E);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$artr",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="tr#ar" and $re){
$R = str_replace(' ','%20',$re->text);
$trar = file_get_contents("https://abu-ehab-vip.ml/Abuehab/api(carlos)translate.php?Language=ar&TO=tr&text=".$R);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$trar",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="en#tr" and $re){
$Y = str_replace(' ','%20',$re->text);
$entr = file_get_contents("https://abu-ehab-vip.ml/Abuehab/api(carlos)translate.php?Language=en&TO=tr&text=".$Y);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$entr",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="tr#en" and $re){
$T = str_replace(' ','%20',$re->text);
$tren = file_get_contents("https://abu-ehab-vip.ml/Abuehab/api(carlos)translate.php?Language=tr&TO=en&text=".$T);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$tren",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
#######
$sttings = json_decode(file_get_contents("data/ban.json"),1);
$ban_on = str_replace("حظر عام ","",$text);
$ban_of = str_replace("الغاء حظر عام ","",$text);
$ban_onn = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$ban_on"),true);
$ban_off = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$ban_of"),true);
$id1 = $ban_onn['result']['id'];
$id2 = $ban_off['result']['id'];
$name1 = $ban_onn['result']['first_name'];
$name2 = $ban_off['result']['first_name'];
if($text == "حظر عام $ban_on" and preg_match('/([0-9])/i',$ban_on) and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل: [$name1](tg://user?id=$id1)
".$em." تم حظره عام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$sttings['ban'][] = "$ban_on";
file_put_contents("data/ban.json",json_encode($sttings));
}
if($text == "الغاء حظر عام $ban_of" and preg_match('/([0-9])/i',$ban_of) and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." لعسل : [$name2](tg://user?id=$id2)
".$em." تم الغاء حظره عام بنجاح
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($ban_of,$sttings["ban"]);
unset($sttings["ban"][$key]);
$sttings["ban"] = array_values($sttings["ban"]); 
$sttings = json_encode($sttings,true);
file_put_contents("data/ban.json",$sttings);
}
if ($message && in_array($from_id,$sttings['ban'])){
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
]);
}
$sttings = json_decode(file_get_contents("data/ban.json"),1);
if ($rt && $text == "حظر عام"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." تم حظره عام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$sttings['ban'][] = "$re_id";
file_put_contents("data/ban.json",json_encode($sttings));
}}
if ($rt && $text == "الغاء حظر عام"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." عسل ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." تم الغاء حظره عام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($re_id,$sttings["ban"]);
unset($sttings["ban"][$key]);
$sttings["ban"] = array_values($sttings["ban"]); 
$sttings = json_encode($sttings,true);
file_put_contents("data/ban.json",$sttings);
}}
if ($message && in_array($from_id,$sttings['ban'])){
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
]);
}
$banam = $sttings['ban'];
if( $text == "المحظورين عام" or $text == "⋄ المحظورين عام" and $sttings['ban']!== NULL){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$banam = $sttings['ban'];
for($z = 0;$z <= count($banam)-1;$z++){
$Apibanam = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$banam[$z]"));
$Usermbanam =$Apibanam->result->username;
$namebanam =$Apibanam->result->first_name;
$idbanam =$Apibanam->result->id;
$result = $result."".$em." $z ← [$namebanam](https://t.me/$Usermbanam) - $idbanam"."\n";
}
if(!$result){
$result1 = "".$em." لايوجد شخص في القائمه";
}elseif($result){
$result1 = "$result";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." اليك قائمة المحظورين عام : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result1",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
 ]);
}
}
$sttings = json_decode(file_get_contents("data/SAIKO.json"),1);
$ban_on = str_replace("كتم عام ","",$text);
$ban_of = str_replace("الغاء كتم عام ","",$text);
$ban_onn = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$ban_on"),true);
$ban_off = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$ban_of"),true);
$id1 = $ban_onn['result']['id'];
$id2 = $ban_off['result']['id'];
$name1 = $ban_onn['result']['first_name'];
$name2 = $ban_off['result']['first_name'];
if($text == "كتم عام $ban_on" and preg_match('/([0-9])/i',$ban_on) and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل: [$name1](tg://user?id=$id1)
".$em." تـم كـتـمه عـام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$sttings['Mute'][] = "$ban_on";
file_put_contents("data/SAIKO.json",json_encode($sttings));
}
if($text == "الغاء كتم عام $ban_of" and preg_match('/([0-9])/i',$ban_of) and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل: [$name2](tg://user?id=$id2)
".$em." تـم الـغـاء كـتـمه عـام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($ban_of,$sttings["Mute"]);
unset($sttings["Mute"][$key]);
$sttings["Mute"] = array_values($sttings["Mute"]); 
$sttings = json_encode($sttings,true);
file_put_contents("data/SAIKO.json",$sttings);
}
if ($message && in_array($from_id,$sttings['ban'])){
bot('deletemessage',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
]);
}
$sttings = json_decode(file_get_contents("data/SAIKO.json"),1);
if ($rt && $text == "كتم عام"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." تـم كـتـمه عـام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$sttings['Mute'][] = "$re_id";
file_put_contents("data/SAIKO.json",json_encode($sttings));
}}
if ($rt && $text == "الغاء كتم عام"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." تـم الـغـاء كـتـمه عـام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($re_id,$sttings["Mute"]);
unset($sttings["Mute"][$key]);
$sttings["Mute"] = array_values($sttings["Mute"]); 
$sttings = json_encode($sttings,true);
file_put_contents("data/SAIKO.json",$sttings);
}}
if ($message && in_array($from_id,$sttings['Mute'])){
bot('deletemessage',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
]);
}
$banam = $sttings['Mute'];
if( $text == "المكتومين عام" or $text == "⋄ المكتومين عام" and $sttings['Mute']!== NULL){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$Muteam = $sttings['Mute'];
for($z = 0;$z <= count($Muteam)-1;$z++){
$ApiMute = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$Muteam[$z]"));
$UsermMute =$ApiMute->result->username;
$nameMute =$ApiMute->result->first_name;
$idMute =$ApiMute->result->id;
$result = $result."⋄︙ $z ← [$nameMute](https://t.me/$UsermMute) - $idMute"."\n";
}
if(!$result){
$result2 = "".$em." لايوجد شخص في القائمه";
}elseif($result){
$result2 = "$result";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." اليك قائمة المكتومين عام : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result2",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
 ]);
}
}
if($text == "⋄ مسح المكتومين عام" or $text == "مسح المكتومين عام"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
file_put_contents("data/SAIKO.json","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
if($text == "⋄ مسح المحظورين عام" or $text == "مسح المحظورين عام"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
file_put_contents("data/ban.json","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
if($text == "⋄ مسح قائمة العام" or $text == "مسح قائمة العام"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
file_put_contents("data/ban.json","");
file_put_contents("data/SAIKO.json","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
#######
$re_msd = $update->message->reply_to_message;
if ($rt and $text == "تحويل" and $re_msd->video){
$file = "https://api.telegram.org/file/bot$token/".bot('getfile',['file_id'=>$re_msd->video->file_id])->result->file_path;
file_put_contents("data/carlos.ogg",file_get_contents($file));
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>new CURLFile("data/carlos.ogg"),
'caption'=>"".$em." تم تحويل الفيديو ← بصمة",
]);
unlink("data/carlos.ogg");
}
if ($rt and $text == "تحويل" and $re_msd->voice){
$file = "https://api.telegram.org/file/bot$token/".bot('getfile',['file_id'=>$re_msd->voice->file_id])->result->file_path;
file_put_contents("data/carlos.mp3",file_get_contents($file));
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>new CURLFile("data/carlos.mp3"),
'caption'=>"".$em." تم تحويل البصمة ← اغنية",
]);
unlink("data/carlos.mp3");
}
if ($rt and $text == "تحويل" and $re_msd->photo){
$file = "https://api.telegram.org/file/bot$token/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path;
file_put_contents("data/carlos.png",file_get_contents($file));
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>new CURLFile("data/carlos.png"),
]);
unlink("data/carlos.png");
}
if ($rt and $text == "تحويل" and $re_msd->sticker){
$file = "https://api.telegram.org/file/bot$token/".bot('getfile',['file_id'=>$re_msd->sticker->file_id])->result->file_path;
file_put_contents("data/carlos.jpg",file_get_contents($file));
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("data/carlos.jpg"),
'caption'=>"⋄︙تم تحويل الملصق ← صوره",
]);
unlink("data/carlos.jpg");
}
#######
$kabos = file_get_contents("data/kabos.json");
if($text =="⋄ تفعيل التبنيه" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"⋄︙تم تفعيل التنبيه بنجاح",
'reply_to_message_id'=>$message_id,
]);
file_put_contents("data/kabos.json","kabos");
} 
if($text =="/start" and $kabos == "kabos" and $from_id != $admin) {
$times = date('h:i:s');
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$mabcarlos = count($pirvate)-1;
$grocarlos = count($groups)-1;
if(!@$username){$casss = "لايوجد يوزر";}elseif(@$username){$casss = "@$username";}
 bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"⋄︙اهلأ عزيزي المطور الاساسي
--------------------------------
⋄︙اسمه ← $first_name
⋄︙ايديه ← $from_id
⋄︙يوزره ← $casss
--------------------------------
⋄︙الاعضاء ← $mabcarlos
⋄︙القروبات ← $grocarlos
⋄︙قام بدخول بوتك الان
⋄︙الوقت ← $times
"]);} 
if($text =="⋄ تعطيل التنبيه" and $from_id == $admin) {
 bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙تم تعطيل التنبيه بنجاح
",
'reply_to_message_id'=>$message_id,
]);
unlink("data/kabos.json");
}

########
if($text == "⋄ تجربة السورس"){if(in_array($from_id,$Dev) or in_array($from_id,$eri)) {bot("sendmessage",['chat_id'=>$chat_id,'text'=>"✵⁞ *اليك قائمة تجربة السورس*\n━━━━━━━━━━━━━\n⌯⁞ ['قروب تجربة السورس](https://t.me/$devchink)\n⌯⁞ [قناة شروحات السورس](https://t.me/whisky_bot003)\n━━━━━━━━━━━━━\n⌯⁞ [مبرمج السورس](https://t.me/$buy)",'parse_mode'=>"Markdown",'disable_web_page_preview'=> true ,'reply_to_message_id'=>$message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"⌯⁞ قروب تجربة السورس ⁞⌯",'url'=>"t.me/$devchink"]],[['text'=>"⌯⁞ مبرمج السورس ⁞⌯",'url'=>"t.me/$buy"]],]])]);}}
#######
if ($text == "⋄ تحديث" and in_array($from_id,$Dev)){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"⋄︙تم التحديث",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}
#-----------------------#
if($text == "ترتيب الاوامر" || $text == "⋄ ترتيب الاوامر" || $text == "ترتيب الازرار" and in_array($from_id,$Dev)){
	$ver = phpversion();
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⋄︙جاري ترتيب الاوامر.',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⋄︙جاري ترتيب الاوامر..',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر....',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر.',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر..',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر....',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر.',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر..',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر...',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر....',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⋄︙جاري ترتيب الاوامر.',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(4);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>"⋄︙تم ترتيب الاوامر بالشكل التالي :
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙ايدي ↫ ا
⋄︙رفع مميز ↫ م
⋄︙رفع بوديقارد↫ اد
⋄︙رفع مدير ↫ مد
⋄︙رفع منشئ ↫ من
⋄︙رفع منشئ اساسي ↫ اس
⋄︙تفعيل الايدي بالصوره ↫ تفع
⋄︙تعطيل الايدي بالصوره ↫ تعط
⋄︙تنزيل الكل ↫ تك
⋄︙مسح رسائلي ↫ رس
⋄︙مسح سحكاتي ↫ سح
⋄︙تغير الايدي ↫ تغ
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
[𝗦𝗢𝗨𝗥𝗖𝗘 𝙒𝙃𝙄𝙎𝙆𝙀𝙔](https://t.me/$devchink)",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message_id,
 ]);
 } 
 #---------------#
 $vi = $message->reply_to_message->text;
$photo = $message->reply_to_message->photo;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
if($text == "اذاعه" and $from_id == $sudo){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"جاري الاذاعه 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$vi",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
bot('sendphoto',[
          'chat_id'=>$groups[$i],
          'photo'=>"$photo",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
}
 #-----------------------#
$posrch = str_replace("صوره ", "", $text);
if($text == "صوره $posrch"){
$get = file_get_contents("https://www.google.com/search?hl=en&biw=1360&bih=652&tbs=isz%3Alt%2Cislt%3Asvga%2Citp%3Aphoto&tbm=isch&sa=1&q=$posrch&oq=$posrch&gs_l=psy-ab.12...0.0.0.10572.0.0.0.0.0.0.0.0..0.0....0...1..64.psy-ab..0.0.0.wFdNGGlUIRk");
preg_match_all('#alt="" src="(.*?)/>#',$get,$e);
for($i=0;$i<1;$i++){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$e[1][$i],
'caption' =>"".$em." تم تحميل صورة ← $posrch",
'reply_to_message_id'=>$message->message_id,
]);
}
}

#-----------------------#
$bot_id = "$idbot";
$carlos = file_get_contents("data/carlos.json");
$carloss = file_get_contents("data/carloss.json");
if($text=="ضع ترحيب عام"){
file_put_contents("data/carloss.json","$from_id");
if( in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." اهلا بك عزيزي
".$em." الان قم بارسال الترحيب عام
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/carlos.json","CARLOS");
}}
if($text and $carlos =="CARLOS" and $carloss == $from_id){
if( in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." اهلا بك عزيزي
".$em." تم حفض الترحيب عام بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/carllos.json","$text");
unlink("data/carlos.json");
}}
if( in_array($from_id,$Dev)){
  if($text == "تعين صورة ترحيب"){
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." اهلا بك عزيزي
".$em." ارسل صورة الترحيب عام ليتم حفظ
",'reply_to_message_id'=>$message_id,
]);
file_put_contents('data/photo.json','photo');
    }
    $ggett = file_get_contents('data/photo.json');
    if($message->photo and $ggett){
      bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." اهلا بك عزيزي
⋄︙ تم حفض صورة الترحيب عام
",'reply_to_message_id'=>$message_id,]);
file_put_contents('data/photo.json','');
file_put_contents('data/phooto.json',$update->message->photo[0]->file_id);
      }
  }
$new = $message->new_chat_member;
$carlloos = file_get_contents("data/carllos.json");
$phooto = file_get_contents('data/phooto.json');
if ($new and $new->id == $bot_id) {
  bot('sendphoto',[
      'chat_id'=>$chat_id,
     'caption'=>"$carlloos",   
       'photo'=>"$phooto",
'reply_to_message_id'=>$message_id,
    ]);
}
#-----------------------#
$tahmel = str_replace("تحميل ","",$text);
if($text == "تحميل $tahmel"){
$keyboard = [];
$search = json_decode(file_get_contents("https://ammar-jned.zzz.com.ua/api/Api-yotsearch.php?search=".urlencode($tahmel)),true);
for($b=1; $b <= 10; $b++){   
$keyboard['inline_keyboard'][] = [['text'=>$search['results'][$b]['title'], 'callback_data'=>"jaemax##".$search['results'][$b]['url']]];
$reply_markup=json_encode($keyboard);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'⋄︙عزيزي 
⋄︙قم بأختيار الاغنية ☑️',
'parse_mode'=>"MARKDOWN",
'reply_markup'=>$reply_markup
]);
}
$jaemax = explode("##", $data);
if($jaemax[0] == "jaemax"){
$api = json_decode(file_get_contents("https://ammar-jned.zzz.com.ua/api/Yt.php?url=http://www.youtube.com/watch?v=".$jaemax[1]),true);
$url = $api['info'][0]['url'];
$title = $api['info'][0]['title'];
$get = file_get_contents($url);
file_put_contents("carlos.ogg",$get);
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendmessage',[
'message_id'=>$update->callback_query->message->message_id,
'chat_id'=>$update->callback_query->message->chat->id,
'text'=>"يتم التحميل الان....♻️",
]);
bot('sendvoice',[ 
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'voice'=>new CURLFile("carlos.ogg"),
'caption' =>"*
⋄︙تم تحميل ← Voice
⋄︙الاغنية ← $title
*",
'parse_mode'=>"MARKDOWN",
  'title'=>"$title",
     ]);
unlink("carlos.ogg");
}
#---------#
if($text == "تحديث السورس" || $text == "⋄ تحديث السورس" || $text == "تحديث سورس" and in_array($from_id,$Dev)){
	$ver = phpversion();
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%
Open Games.php ...
• Updateing ...',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%
• Updateing ...
Open kickme.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%
• Updateing ...
Open Orders.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(10);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%
• Updateing ...
Open bot.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%
• Updateing ...
Open id.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%
• Updateing ...
Open photoshop.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%
• Updateing ...
Open Hello.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%
• Updateing ...
Open welcome.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%
• Updateing ...
Open replys.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%
• Updateing ...
Open fun.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
-',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(2);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
- -',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(3);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
- - -',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(4);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>"⋄︙تم تحديث البوت 
⋄︙لديك اخر اصدار للسورس 
⋄︙لاصدار ← <code>$ver</code>v",
'parse_mode'=>"HTML",'reply_to_message_id'=>$message_id,
 ]);
 } 
# --     Source TIGER     --
echo "source bloodi";