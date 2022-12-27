<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

if($text == "محيبس"){
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👊1،👊2،👊3،👊4،👊5
اختار وجرب حظك 💬💢",
]);
}
$b = array("✅صح","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء");
$c = array_rand($b,1);
$armof = array("الحمد لله","سبحان الله","استغفر الله");
$adi = array_rand($armof,1);
if($text == "1" or $text == "2" or $text == "3" or $text == "4" or $text == "5"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⋄︙ جوابك - $b[$c]
⋄︙ $armof[$adi]*
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
####
$rand = rand("2","15");
if($text == "غنيلي" or $text == "غني"){
if($settings["lock"]["ahbgii"] == "مصكر"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"t.me/D_UIII/$rand",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"- 𝗦𝗢𝗨𝗥𝗖𝗘",'url'=>"t.me/$devchink"]],]])]);}}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$re = $update->message->reply_to_message;
$me = $message->reply_to_message;  
$mem = $me->message_id; 
$AEHAB = str_replace("كله ","$AEHAB",$text); 
if($re){
if($text == "كله $AEHAB"){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"اكلك $AEHAB", 
'reply_to_message_id'=>$mem, 
]); 
} 
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
elseif($text =="تعطيل التاق" or $text =="تعطيل الهاش تاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$AUBEHAB) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطه ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل التاق بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مصكر";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙البوت موش امفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل التاق" or $text =="تفعيل  الهاش تاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$AUBEHAB) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطه ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل التاق بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙البوت موش امفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$taag = $settings["$chat_id"]["tagusermy"];
$P=count($taag);
if($message and !in_array($from_id,$taag)){
if ($tc == 'group' || $tc == 'supergroup'){
if($P<200){
$settings["$chat_id"]["tagusermy"][]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}else{
unset($taag[0]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$settings["$chat_id"]["tagusermy"]=array_values($settings["$chat_id"]["tagusermy"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$settings["$chat_id"]["tagusermy"][]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}}
elseif($text == "تاق" or $text == "تاق الكل" or $text == "تاق للكل"  and $text==$settings["information"]["tagall"]){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$AUBEHAB) or in_array($from_id,$nazar)) {
$lockcmd = $settings["lock"]["tag"];
if($lockcmd == "مفتوح"){
$taag = $settings["$chat_id"]["tagusermy"];
for($z = 0;$z <=count($taag)-1;$z++){
$Apitag = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$taag[$z]"));
if($Apitag->ok==true){
@$Usertag = $Apitag->result->username;
$first_natg = $Apitag->result->first_name;
$idtg =$Apitag->result->id;
if(!$Usertag){
$Usertag = "[$idtg](tg://user?id=$idtg)";
}elseif($Usertag){
$Usertag = "[@$Usertag]";
}
$tagmy = $tagmy."⋄︙↵{ $Usertag }"."\n";
}else{
unset($settings["$chat_id"]["tagusermy"][$z]);
file_put_contents("data/$chat_id.json",json_encode($settings));
$settings["$chat_id"]["tagusermy"]=array_values($settings["$chat_id"]["tagusermy"]);
file_put_contents("data/$chat_id.json",json_encode($settings));
}
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙قائمه الاعضاء :*
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$tagmy
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}
if($text == "تاق" or $text == "تاق الكل" or $text == "تاق للكل"){
$lockcmd = $settings["lock"]["tag"];
if($lockcmd == "مصكر"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*عذرا التاق مصكر ❌*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);}}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$text = $message->text;
mkdir("data/kickme");
mkdir("data/kickmelist");
$TTKTT = "$Dev";
$TTK       = $message->message_id;
$Kickmetxt = file_get_contents("kickme.txt");
if ($text =="لزني" or $text == "ادفرني" or $text == "مغادره" and $from_id != $TTKTT){
if ($settings["lock"]["bannnnn"] == "مفتوح"){
 file_put_contents("kickme.txt","yes");
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• ارسل ( نعم ) ليتم لزك •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if($text == "نعم" && $Kickmetxt =="yes"){ file_put_contents("kickme.txt","");
bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
bot('banChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
  bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text" => "
تفضل الله معك
  ", 'parse_mode'=>"HTML",
  "reply_to_message_id"=>$TTK,
  ]);
file_put_contents("data/kickme/$chat_id.txt",$from_id . "\n" , FILE_APPEND);
file_put_contents("data/kickmelist/$chat_id.txt",".» @$username.". "\n" , FILE_APPEND);
  }
if ($text =="لزني" and $from_id == $TTKTT){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• موش هاين عليا نلزك انت حوبي🥺♥ •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if ($text =="لزني" and $status == 'administrator'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• كان نيتي نلزك بس مانقدرش نلزڪ لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if($from_id != $TTKTT){
if ($text =="لزني" and $status == 'craetor'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• كان نيتي نلزك بس مانقدرش نلزڪ لانك منشئ •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if($status == "member"){
if ($text =="لزني" and in_array($from_id,$mmyaz)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• كان نيتي نلزك بس مانقدرش نلزڪ لانك مميز •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if ($text =="لزني" and in_array($from_id,$admin_user)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• كان نيتي نلزك بس مانقدرش نلزڪ لانك بوديقارد•
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="لزني" and in_array($from_id,$manger)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• كان نيتي نلزك بس مانقدرش نلزڪ لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="لزني" and in_array($from_id,$nazar)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• كان نيتي نلزك بس مانقدرش نلزڪ لانك منشئ اساسي •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="لزني" and in_array($from_id,$carlos)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• كان نيتي نلزك بس مانقدرش نلزڪ لانك منشئ •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="لزني" and in_array($from_id,$eri)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• كان نيتي نلزك بس مانقدرش نلزڪ لانك مبرمج السورس •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }}
##########
$LOVEYOU = array("سـأكون دائـماً مـوجـود لك ولأجـلك 🤍،",
"♥️🌿


مشدوهه روحي ا؏ـليك ماگلهـه هـيدي
گمـت ادفـ؏ الڪاروك و اولـيدي بيدي!",
"انت وحدك من تجيني 
 منين ما تلزمني اطيح..❤",
"احببتك بطريقه لا يستحقها غيرك.💗");
$LOVEYOU2 = array_rand($LOVEYOU, 1);
if($text == "عاكسني" or $text == "عاكسوني"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$LOVEYOU[$LOVEYOU2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message_id, ]);}

$F_Uid = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$from_id"),true);
$bio = $F_Uid['result']['bio'];
if(!$bio){
$biio = "لايوجد بايو";
}elseif($bio){
$biio = "$bio";
}
if($text == "بايو"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⋄︙حبيبي♥ ← [$first_name](tg://user?id=$from_id)
".$em." بايو ← $biio
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id, ]);}


$x = 0;
$tags = 0;
$get = file_get_contents("data/$chat_id/all.json");
$getx = explode("\n", $get);
if($message and  ! in_array ($from_id, $getx)){
file_put_contents("data/$chat_id/all.json","$from_id\n", FILE_APPEND);
} 
if($text == "@all"){  
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {
for($i=0;$i<count($getx);$i++){
if ($x == 5 or $x == $tags or $i == 0 ){
$tags = $x + 5;
$t = "☆︙قيسكم غاطسين فالخاص ياجماعه\n";
}
$datainfo = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$getx[$i]"));
$names =$datainfo->result->first_name;
$ids =$datainfo->result->id;
$x = $x + 1;
$t = $t.", [".$names."](tg://user?id=".$ids.")";
if ($x == 5 or $x == $tags or $i == 0){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text'=>$t,
'parse_mode' =>"markdown", 
'disable_web_page_preview'=>true,
]);
}
}
}
}


if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$AUBEHAB) || in_array($from_id,$admin_user) || in_array($from_id,$manger) or in_array($from_id,$carlos) or in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($rt && $text == "رفع بغل" and !in_array($re_id,$motay)){
			file_put_contents("data/motay/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/motay/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." تم ترقيه ليصبح بغل😂👊🏻
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع بغل" and in_array($re_id,$motay)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." هوه بالفعل بغل😂👊🏻
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح البغوله" ){
file_put_contents("data/motay/$chat_id.txt","");
file_put_contents("data/motay/$chat_id.txt","");
file_put_contents("data/motay/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
".$em." تم مسح قائمة البغوله
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل بغل" and in_array($re_id,$motay)){
	$re_id_info = file_get_contents("data/motay/$chat_id.txt");
	$mdrs = file_get_contents("data/motay/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/motay/$chat_id.txt",$str);
	file_put_contents("data/motay/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." تم تنزيله من قائمة البغوله😂👊??
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل بغل" and !in_array($re_id,$motay)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." هوه ليس بغل ليتم تنزيله😂
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "البغوله" ||  $text == "قائمه البغوله" and $motay_info != NULL and $motay_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙ اليك قائمة ⋙ البغوله
$motaya_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "البغوله" ||  $text == "قائمه البغوله" and $motay_info == NULL || $motay_info == " " || $motay_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." حبيبي♥ ⋙「 [$first_name](tg://user?id=$from_id) 」 
".$em." لايوجد اي بغوله حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($text == "الغاء قائمة التثبيت" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { 
bot('unpinAllChatMessages',[
'chat_id'=>$chat_id,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"".$em." تم الغاء جميع التثبيتات
".$em." بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
#########
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
$statusrt = $statjsonrt['result']['status'];
$re = $update->message->reply_to_message;
if($rt && $text == "كلم" or $rt && $text == "التضبيح"){
if($settings["lock"]["WOL"] == "مصكر"){
$EHAB = "[$re_name](tg://user?id=$re_id)";
$ehab = "[$first_name](tg://user?id=$from_id)";
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
".$em." $EHAB
".$em." حبيبي♥ تعال هناك شخص كلمك
".$em." المكلم ~⪼ $ehab
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
]);
}
}
#####
if($text == "كلم" or $text == "التكليم"){
if($settings["lock"]["WOL"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." حبيبي♥ ~⪼ [$first_name](tg://user?id=$from_id)
".$em." امر كلم معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
########
$bot = json_decode(file_get_contents("data/bot.json"),1);
if($update->message->new_chat_member){
$bot[$update->message->new_chat_member->id]['new'] = $user;
file_put_contents("data/bot.json",json_encode($bot));
}
$b = $bot[$from_id]['new'];
if($text == "من ضافني" and $b != $user and $b != null){
if($settings["lock"]["nweadd"] == "مصكر"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"[".$em." *الشخص الذي اضافك* : @$b]",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text == "منو ضافني" and $b == null){
if($settings["lock"]["nweadd"] == "مصكر"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." *انت دخلت عبر الرابط*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
#####
if($text =="كلم المطور"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." حبيبي♥ ⋙「 [$first_name](tg://user?id=$from_id) 」 
".$em." اسم المطور ⋙ $NameDev
".$em." معرف المطور ⋙ [$DevUser]
".$em." هل انته متأكد من منادات المطور
".$em." اذا تقصد غير شخص اضغط الغاء"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ نعم ⁞✵' ,'callback_data'=>"NDVE"],['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"delDve"]],
[['text'=>"✵⁞ المطور ⁞✵",'url'=>"t.me/$buy"]],
]])
]); 
}
if($data == "NDVE" ){
$namegroup = $jsonlink->message->chat->title;
$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." تم منادات المطور انتظر للرد عليك",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'' ,'callback_data'=>"nb1"]],
]])
]); 
$IDMAMBRE = $message->from->id;
$export = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id2");
$jsonlink = json_decode($export, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',['chat_id'=>$Dev[0],'text'=>"✵⁞ هناك شخص بحاجه الي مساعدة
━━━━━━━━━━━━━
✵⁞ الاسم ⋙ $name2
✵⁞ الايدي ⋙ $from_id2
✵⁞ المعرف ⋙ [@$username2]
━━━━━━━━━━━━━
✵⁞ معلومات المجموعه
✵⁞ الايدي ⋙ $chat_id2
━━━━━━━━━━━━━
✵⁞ الرابط ⋙ $getlinkde
",]);}
if($data=="delDve"){
bot ('EditMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"".$em." تم الغاء امر منادات المطور",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);
sleep(15);
bot('deletemessage',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message->message_id2
]);}
#####
$zkrf = file_get_contents("zkrf.txt");
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
if($text == "حساب العمر" or $text == "العمر"){
if($settings["lock"]["zkrf"] == "مصكر"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." اهلا بك  في قسم حساب العمر
".$em." اهلا بك » [$first_name](tg://user?id=$from_id) 
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ حساب العمر الان ⁞✵','callback_data'=>'ii']],
]
])
]);
}
}
if($data == "ii" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
".$em." ارسل الامر الان 
".$em." بهذا الشكل :
".$em." العمر السنة/الشهر/اليوم
".$em." مثال : العمر 1998/3/5
 ┉ ┉ ┉ ┉ ┉ ┉ ┉
','parse_mode'=>"markdown",
]);   
}
if(strpos($text, 'العمر ') !== false){
$num= str_replace('العمر ','',$text);
$hours_in_day = 24;
$minutes_in_hour = 60;
$seconds_in_mins = 60;
$birth_date = new DateTime($num);
$current_date = new DateTime();
date_default_timezone_set("Asia/Baghdad");
$date = date('n');
$dat = date('j');
$diff = $birth_date->diff($current_date);
$years = $diff->y;
$mn = $diff->m;
$doy = $diff->d;
$months = ($diff->y * 12);
$weeks = floor($diff->days/7); echo "\n";
$days = $diff->days;
$hours = $diff->h + ($diff->days * $hours_in_day);
$mins = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour);
$seconds = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins);
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 
".$em." العسل » [$first_name](tg://user?id=$from_id) 
".$em." تم حساب عمرك بالتفصيل،
".$em." عمرك هوا الان : $years.» سنه  $mn.»اشهر،
".$em." مره على ولادتك : $months.» شهر،
".$em." مره على ولادتك : $weeks.» اسبوع،
".$em." مره على ولادتك : $days.» يوم،
".$em." مره على ولادتك : $hours.» ساعه،
".$em." مره على ولادتك : $mins.» دقيقه،
".$em." مره على ولادتك : $seconds.» ثانيه،

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ حساب العمر مجددأ ⁞✵','callback_data'=>'ii']],
]
])
]);
}
#####
if($text == "من ضافني" or $text == "من اضافني"){
if($settings["lock"]["nweadd"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." حبيبي♥ ~⪼ [$first_name](tg://user?id=$from_id)
".$em." امر ضافني معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
#######
if($text == "حساب العمر" or $text == "العمر"){
if($settings["lock"]["zkrf"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." حبيبي♥ ~⪼ [$first_name](tg://user?id=$from_id)
".$em." امر حساب العمر معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
#######
if($text == "رفع بوديقارد" or $text == "رفع مدير"){
if($settings["lock"]["rfaabot"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." حبيبي♥ ~⪼ [$first_name](tg://user?id=$from_id)
".$em." امر الرفع معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
#######
$P_UIII = str_replace("قول ","",$text);
if($text == "قول $P_UIII"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$P_UIII",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
#######
$namex = explode(" - ",$text);
if($namex[0] and $namex[1]){
if($settings["lock"]["mylove"] == "مصكر"){
	$SABREN = array("１０%","２０%","３０%","４０%","５０%","６０%","７０%","８０%","９０%","１００%");
$REEM = array_rand($SABREN,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
نـسبـهہ الحـب والـثـقهہ بـيـن $namex[0] و $namex[1] هـي 💕🔰*
 »  [$SABREN[$REEM]](https://t.me/$devchink)  «",
'parse_mode'=>"markdown", 
'reply_to_message_id'=>$message->message_id,
]);
}}
#############
if($text == "مبرمج السورس" or $text == "مبرمج سورس"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/TSS_X/26",
'caption' =>"┏•━•━•━ 『𝗦𝗢𝗨𝗥𝗖𝗘』 ━•━•━•┓
╏⍟ 𝚆𝙴𝙻𝙲𝙾𝙼𝙴 𝚃𝙾 
╏⍟ 𝙸𝙽𝙵𝙾 𝙳𝙴𝚅 𝗦𝗢𝗨𝗥𝗖𝗘  
╏⍟ $time
┗•━•━•━ 『𝗦𝗢𝗨𝗥𝗖𝗘』 ━•━•━•┛
╏⍟ 𝙲𝙾𝙼𝙼𝙺𝙽𝙸𝙲𝙰𝚃𝙸𝙾𝙽 𝙳𝙴𝚅𝙴𝙻𝙾𝙿𝙴𝚁
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"✵⁞ 𝙱𝙾𝚃 𝙳??𝚅 ⁞✵",'url'=>"t.me/$devchink"]],
[['text'=>"✵⁞ 𝙳𝙴𝚅 ⁞✵",'url'=>"t.me/$buy"],['text'=>"✵⁞ 𝙲𝙷  ⁞✵",'url'=>"t.me/$devchink"]],
]])
]); 
}
############     
elseif( $text =="تفعيل ملف game"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *Game*
⋄︙تم تفعيله في البوت بنجاح
⋄︙[تفاصيل الملف](https://t.me/X_SIII/2)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/geme.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف game"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *Game*
⋄︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/geme.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if ($text == "العاب"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"⋄︙العاب ⋙ *Game*
⋄︙لعرض الالعاب اضغط علي العبة
⋄︙لعرض كيبورد العب ⋙ Game",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"لعبة الرياضات",'url'=>"https://t.me/gamebot?game=MathBattle"],['text'=>"لعبة XO",'url'=>"http://t.me/Xo_motazbot?start3836619"]],
            [['text'=>"لعبة المتشابه",'url'=>"https://t.me/gamee?game=DiamondRows"]],
            [['text'=>"لعبة كرة القدم",'url'=>"https://t.me/gamee?game=FootballStar"],['text'=>"لعبة الورق",'url'=>"https://t.me/gamee?game=Hexonix"]],
            ]
        ])
        ]);
}
}

$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "Game"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⋄︙اوامر ⋙ *Game*
⋄︙لعرض الالعاب اونلاين 
⋄︙ارسل امر لعبة + العاب في الاسفل
⋄︙ كرة القدم 
⋄︙الرياضات
⋄︙المتشابه
⋄︙ الورق
⋄︙اكس او",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}

$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة الرياضات"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة الرياضات](https://t.me/gamebot?game=MathBattle)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة كرة القدم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة كرة القدم](https://t.me/gamee?game=FootballStar)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة الورق"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة الورق](https://t.me/gamee?game=Hexonix)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة اكس او"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة XO](http://t.me/Xo_motazbot?start3836619)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة المتشابه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة المتشابه](https://t.me/gamee?game=DiamondRows)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
############
$chat_id2 = $update->chat->id;
$message_id2 = $update->message_id;
$yotup = str_replace("تحميل ", "", $text);
if($text == "تحميل $yotup"){
$keyboard = [];
$search = json_decode(file_get_contents("https://ammar-jned.zzz.com.ua/api/yotopnizk.php?search=".urlencode($yotup)),true);
for($b=1; $b <= 10; $b++){   
$keyboard['inline_keyboard'][] = [['text'=>$search['results'][$b]['title'], 'callback_data'=>"jaemax##".$search['results'][$b]['url']]];
$reply_markup=json_encode($keyboard);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'⋄︙حبيبي♥ ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙قم بأختيار الاغنية ☑️',
'parse_mode'=>"MARKDOWN",
'reply_markup'=>$reply_markup
]);
}
$jaemax = explode("##", $data);
if($jaemax[0] == "jaemax"){
$api = json_decode(file_get_contents("https://ammar-jned.zzz.com.ua/api/yotopnizk.php?url=http://www.youtube.com/watch?v=".$jaemax[1]),true);
$url = $api['info'][0]['url'];
$title = $api['info'][0]['title'];
$get = file_get_contents($url);
file_put_contents("carlos.ogg",$get);
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendvoice',[ 
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'voice'=>new CURLFile("carlos.ogg"),
'caption' =>"*⋄︙تم تنزيل الاغنية بشكل بصمة ☑️*",
'parse_mode'=>"MARKDOWN",
  'title'=>"$title",
     ]);
unlink("carlos.ogg");
}
############
if ( $text =="⋄ تفعيل الاحصائيات" or $text == "تفعيل الاحصائيات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙بواسطه ← [$first_name](tg://user?id=$from_id)
⋄︙تم بالتأكيد تفعيل الاحصائيات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/addnambr.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if ( $text =="⋄ تعطيل الاحصائيات" or $text == "تعطيل الاحصائيات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙بواسطه ← [$first_name](tg://user?id=$from_id)
⋄︙تم بالتأكيد تعطيل الاحصائيات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/addnambr.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
############
$addnambr = file_get_contents('data/addnambr.json');
if($addnambr == "✔"){
if($text == "الاحصائيات"){
if (in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$eri)) {
$gr7 = count($groups)-1;
$gr8 = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
⋄︙تم عرض الاحصائيات
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙المجموعات ← $gr7
⋄︙المشتركين ← $gr8
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙المطور الاساسي ← [$DevUser]
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}}
############
if ( $text =="تفعيل ملف Zhrafa"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *Zhrafa*
⋄︙تم تفعيله في البوت بنجاح
⋄︙[تفاصيل الملف](https://t.me/X_SIII/3)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/Zhrafa.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف Zhrafa"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *Zhrafa*
⋄︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/Zhrafa.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$Zhrafajson = file_get_contents('data/Zhrafa.json');
if($Zhrafajson == "✔"){
if ($text =="تفعيل لزخرفه" or $text == "تفعيل لزخرفة"){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$AUBEHAB) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⋄︙ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⋄︙تم تفعيل لزخرفه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zkh"]="مصكر";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا حبيبي♥ المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}}
$Zhrafajson = file_get_contents('data/Zhrafa.json');
if($Zhrafajson == "✔"){
if($text =="تعطيل لزخرفه" or $text == "تعطيل لزخرفة" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$AUBEHAB) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⋄︙بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⋄︙تم تعطيل لزخرفه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zkh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا حبيبي♥ المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}}
$Zhrafajson = file_get_contents('data/Zhrafa.json');
if($Zhrafajson == "✔"){
$kindi = file_get_contents("kindi.txt");
if($settings["lock"]["zkh"] == "مصكر"){
if ($text == "زخرفه" or $text == "زخرفة" or $text == "زخرف" or $text == "ز"){
file_put_contents("kindi.txt","nam");
bot("sendMessage",[
 'chat_id'=>$chat_id,
"text"=>"⋄︙ قم بارسال النص الان
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text and $kindi =="nam" ){
file_put_contents("kindi.txt","");
$k = file_get_contents("https://alwsh.ml/api/apik.php?text=".$text);
bot('sendMessage',[
 'chat_id'=>$chat_id,
'text'=>"*$k
 ـ────────────
⋄︙ تمت لزخرفة بنجاح لـ ⋙ $text ؛
⋄︙ اضغط فوق اي نوع زخرفة للنسخ اعلاه ؛
*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"꙳.اخفاء لزخرفة.꙳",'callback_data'=>'deletamr']],
]])
]); 
}}
}
############
if ( $text =="تفعيل ملف ChangeName"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *ChangeName*
⋄︙تم تفعيله في البوت بنجاح
⋄︙[تفاصيل الملف](https://t.me/TH1BS/4)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/ChangeName.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف ChangeName"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *ChangeName*
⋄︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/ChangeName.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if ( $text =="تفعيل ملف ChangeUser"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *ChangeUser*
⋄︙تم تفعيله في البوت بنجاح
⋄︙[تفاصيل الملف](https://t.me/TH1BS/5)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/ChangeUser.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف ChangeUser"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *ChangeUser*
⋄︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/ChangeUser.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if ( $text =="تفعيل ملف Changephotos"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *Changephotos*
⋄︙تم تفعيله في البوت بنجاح
⋄︙[تفاصيل الملف](https://t.me/TH1BS/7)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/Changephotos.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف Changephotos"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙الملف ⋙ *Changephotos*
⋄︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/Changephotos.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$s = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$from_id"));
$sn =$s->result->first_name;
$su =$s->result->username;
$replace = json_decode(file_get_contents("replace.json"),true);
$user = $replace[$from_id]["user"];
$name = $replace[$from_id]["name"];
$photosss = $replace[$from_id]["photos"];
$ChangeUser = file_get_contents('data/ChangeUser.json');
if($ChangeUser == "✔"){
if($message and $su != $user and $user != null and $user != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"⋄︙غير معرفه كشفتك 😂
⋄︙معرف القديم : @$user
✵︙معرف الجديد : @$username",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($su,$user)){
$replace[$from_id]["user"] = "$su";
file_put_contents("replace.json",json_encode($replace));
}}
$ChangeName = file_get_contents('data/ChangeName.json');
if($ChangeName == "✔"){
if($message and $sn != $name and $name != null and $name != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"⋄︙غير اسمه الخايس 😂
⋄︙اسمه القديم : $name
⋄︙اسمه الجديد : $first_name
",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($sn,$name)){
$replace[$from_id]["name"] = "$sn";
file_put_contents("replace.json",json_encode($replace));
}}

############
if ( $text =="تفعيل جميع الملفات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم بالتأكيد تفعيل جميع الملفات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/geme.json',✔);
file_put_contents('data/Zhrafa.json',✔);
file_put_contents('data/ChangeUser.json',✔);
file_put_contents('data/Changephotos.json',✔);
file_put_contents('data/ChangeName.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if( $text =="مسح جميع الملفات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم بالتأكيد مسح جميع الملفات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/geme.json',✖️);
file_put_contents('data/Zhrafa.json',✖️);
file_put_contents('data/ChangeUser.json',✖️);
file_put_contents('data/Changephotos.json',✖️);
file_put_contents('data/ChangeName.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
############
if ($text == "المتجر"){
$GGAME = "$gamejson";
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⋄︙قائمة ملفات متجر سورس كارلوس
⋄︙الملفات المتوفره حاليا ↫ ⤈
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙[ملف العاب اونلاين](https://t.me/TH1BS/3) ↫ ⤈
1~ : game ↬ ($gamejson)
⋄︙[ملف زخرفه](https://t.me/TH1BS/4) ↫ ⤈
2~ : Zhrafa ↬ ($Zhrafajson)
⋄︙[ملف تنبيه عند تغير الاسم](https://t.me/TH1BS/5) ↫ ⤈
3~ : ChangeName ↬ ($ChangeName)
⋄︙[ملف تنبيه عند تغير المعرف](https://t.me/TH1BS/6) ↫ ⤈
4~ : ChangeUser ↬ ($ChangeUser)
⋄︙[ملف تنبيه عند تغير الصورة](https://t.me/TH1BS/7) ↫ ⤈
5~ : Changephotos ↬ ($Changephotos)
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙علامة ↫ (✔) تعني الملف مفعل
⋄︙علامة ↫ (✖️) تعني الملف معطل",
'parse_mode'=>'markdown','disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}}
############
$json = json_decode(file_get_contents("data/kit.json"),true);
$kitok = $json["kitok"];
$kitdel = $json["kitdel"];
$kit = $json["kit"];
if($text == "⋄ اضف كت" and $from_id == $sudo){
$json["kitok"] = "$from_id";
file_put_contents("data/kit.json",json_encode($json));
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⋄︙ارسل السؤال الان*",'reply_to_message_id'=>$message->message_id, 
]);
}
if($text != "⋄ اضف كت" and $kitok == $from_id){
$json["kit"][] = "$text";
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⋄︙تم حفظ السؤال في قائمه ( كت تويت )
⌔︙السؤال : $text *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitok"]);
file_put_contents("data/kit.json",json_encode($json)); 
}

if($text == "⋄ حذف كت" and $from_id == $sudo){
$json["kitdel"] = "$from_id";
file_put_contents("data/kit.json",json_encode($json));
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⋄︙ارسل السؤال الان لحذفه*",'reply_to_message_id'=>$message->message_id, 
]);
}

if($text != "⋄ حذف كت" and $kitdel == $from_id and in_array($text,$kit)){
$setwit = array_search("$text", $json["kit"]);
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⋄︙تم حذف السؤال من قائمه ( كت تويت )
✵⁞ السؤال : $text *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitdel"]);
unset($json["kit"][$setwit]);
file_put_contents("data/kit.json",json_encode($json)); 
}

if($text != "⌯ حذف كت" and $kitdel == $from_id and !in_array($text,$kit)){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⋄︙هذا السؤال لا يوجد في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitdel"]);
file_put_contents("data/kit.json",json_encode($json)); 
}

$malkbot = $coss['malkbot'];
$malkkbot = $coss['malkkbot'];
if($text=="نقل الملكية" or $text=="⋄ نقل الملكية"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☆︙حبيبي♥ ← [$name](tg://user?id=$from_id)
☆︙الان قم بأرسال ايدي المطور
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$coss['malkbot'] = "ok_malk";
$coss['malkkbot'] = "$from_id";
file_put_contents("data/carlos.json",json_encode($coss));
}
}
if($text and preg_match('/([0-9])/i',$text) and $malkbot == "ok_malk" and $malkkbot == $from_id){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☆︙بواسطة ← [$name](tg://user?id=$from_id)
☆︙تم تعين المطور جديد بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$coss['malk'] = $text;
$coss['malkbot'] = "on";
file_put_contents("data/carlos.json",json_encode($coss));
}
if($text=="حذف المالك الثاني" or $text=="⋄ حذف المالك الثاني"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☆︙حبيبي♥ ← [$name](tg://user?id=$from_id)
☆︙تم حذف المطور
☆︙تم اعادة المطور الاساسي
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$coss['malk'] = null;
file_put_contents("data/carlos.json",json_encode($coss));
}
}

$twit = array_rand($kit, 1);
$kit = $kit[$twit] ;
if($kit != null){
if($text == "كت" or $text == "تويت" or $text == "كت تويت"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⋄︙$kit *",'reply_to_message_id'=>$message->message_id, 
]);
}} 
$kit = $json["kit"];
if($kit == null){
if($text == "كت" or $text == "تويت" or $text == "كت تويت"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⋄︙لم تتم اضافة اسئلة في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
}}
$ctwit = count($json["kit"]);
if($text == "⋄ عدد الاسئله"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⋄︙تم اضافة $ctwit سؤال في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "⋄ مسح الاسئله"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⋄︙تم مسح الاسئله من قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kit"]);
file_put_contents("data/kit.json",json_encode($json));
}
############