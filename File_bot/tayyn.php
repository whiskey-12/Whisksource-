<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);


$re = $update->message->reply_to_message;
$replay = $message->reply_to_message->message_id; 
$json = json_decode(file_get_contents("data/sticker.json"),true);
$stickers = $json[$chat_id]["stickers"];
$re_sticker = $update->message->reply_to_message->sticker;
$st = str_replace("اضف ملصق ","",$text);
if($re_sticker and $text == "اضف ملصق $st"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$json[$chat_id]["$st"][] = "$re_sticker->file_id";
file_put_contents("data/sticker.json",json_encode($json));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙بواسطة ←  [$first_name](tg://user?id=$from_id)
⋄︙تم اضافة ملصق في حزمه ( $st )
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
 ]);
 }
 }

if($re_sticker and $text == "اضف ملصق $st" and !in_array($st,$stickers)){
$json[$chat_id]["stickers"][] = "$st";
file_put_contents("data/sticker.json",json_encode($json));
}
$st = str_replace("دزله ملصق ","",$text);
if($re and $text == "دزله ملصق $st"){
$sti = $json[$chat_id]["$st"];
$sti1 = array_rand($sti,1);
$sticker = $sti[$sti1];
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>"$sticker",
'reply_to_message_id'=>$replay,
]);
}
if($re and $text == "دزله ملصق $st"){
if( !isset($json[$chat_id]["$st"])){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙حبيبي ←  [$first_name](tg://user?id=$from_id)
⋄︙جربت تفكر تنشاء الحزمه بالاسم هذا",
'reply_to_message_id'=>$replay,
]);
}}

$st = str_replace("حذف حزمه ","",$text);

if($text == "حذف حزمه $st" and !isset($json[$chat_id]["$st"])){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ماصارش منها الحزمه بالاسم هذا ( $st ) ",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
]);
}
}
 
if($text == "حذف حزمه $st" and isset($json[$chat_id]["$st"])){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$namest = array_search("$st",$json[$chat_id]["stickers"]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙بواسطة ←  [$first_name](tg://user?id=$from_id)
⋄︙⌯ تم حذف حزمه ( $st ) ",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
]);
unset($json[$chat_id]["$st"]);
unset($json[$chat_id]["stickers"]["$namest"]);
file_put_contents("data/sticker.json",json_encode($json));
}
}

if($text == "الحزم المضافه" and $stickers != null){
for($i=0;$i<count($json[$chat_id]["stickers"]);$i++){
$all = $all."⌯ ".$json[$chat_id]["stickers"][$i]."\n";
}
$sticker =" $all";
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙قائمه الحزم المضافه ⤈

$sticker",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
]);
}

if($text == "الحزم المضافه" and $stickers == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙حبيبي ←  [$first_name](tg://user?id=$from_id)
⋄︙لم تقم بإضافة اي حزمة سابقاً",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
]);
}

$set = file_get_contents("data/taen.json");
$m1 = file_get_contents("data/m1.json");
if ($text == "⋄ تعين م1" or $text == "تغير امر م1" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙قم بأرسال كليشة امر م1 
⋄︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nam" and in_array($from_id,$Dev)){
file_put_contents("data/m1.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
⋄︙تم تعين امر م1 
⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف م1" or $text == "حذف امر م1" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙تم حذف كليشة امر م1
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m1.json",""); 
}
$set = file_get_contents("data/taen.json");
$m2 = file_get_contents("data/m2.json"); 
if ($text == "⋄ تعين م2" or $text == "تغير امر م2" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","namm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙قم بأرسال كليشة امر م2
⋄︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="namm" and in_array($from_id,$Dev)){
file_put_contents("data/m2.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
⋄︙تم تعين امر م2 
⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف م2" or $text == "حذف امر م2" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙تم حذف كليشة امر م2
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m2.json",""); 
}
$set = file_get_contents("data/taen.json");
$m3 = file_get_contents("data/m3.json");
if ($text == "⋄ تعين م3" or $text == "تغير امر م3" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","nammm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙قم بأرسال كليشة امر م3
⋄︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nammm" and in_array($from_id,$Dev)){
file_put_contents("data/m3.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
⋄︙تم تعين امر م3 
⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف م3" or $text == "حذف امر م3" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙تم حذف كليشة امر م3
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m3.json",""); 
}
$set = file_get_contents("data/taen.json");
$m4 = file_get_contents("data/m4.json");
if ($text == "⋄ تعين م4" or $text == "تغير امر م4" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","nammmm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙قم بأرسال كليشة امر م4
⋄︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nammmm" and in_array($from_id,$Dev)){
file_put_contents("data/m4.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
⋄︙تم تعين امر م4 
⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف م4" or $text == "حذف امر م4" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙تم حذف كليشة امر م4
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m4.json",""); 
}
$set = file_get_contents("data/taen.json");
$m5 = file_get_contents("data/m5.json");
if ($text == "⋄ تعين م5" or $text == "تغير امر م5" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","ser");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙قم بأرسال كليشة امر م5
⋄︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="ser" and in_array($from_id,$Dev)){
file_put_contents("data/m5.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
⋄︙تم تعين امر م5 
⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف م5" or $text == "حذف امر م5" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙تم حذف كليشة امر م5
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m5.json",""); 
}
$set = file_get_contents("data/taen.json");
$m6 = file_get_contents("data/m6.json");
if ($text == "⋄ تعين م6" or $text == "تغير امر م6" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","nammn");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙قم بأرسال كليشة امر م6
⋄︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nammn" and in_array($from_id,$Dev)){
file_put_contents("data/m6.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
⋄︙تم تعين امر م6 
⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف م6" or $text == "حذف امر م6" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙تم حذف كليشة امر م6
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m6.json",""); 
}
$set = file_get_contents("data/taen.json");
$morder = file_get_contents("data/oamer.json");
if ($text == "⋄ تعين الاوامر" or $text == "تغير امر الاوامر" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","oamer");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙قم بأرسال كليشة امر الاوامر
⋄︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="oamer" and in_array($from_id,$Dev)){
file_put_contents("data/oamer.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
⋄︙تم تعين امر الاوامر 
⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف الاوامر" or $text == "حذف امر الاوامر" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙تم حذف كليشة امر الاوامر
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/oamer.json",""); 
}
$set = file_get_contents("data/taen.json");
$sorceu = file_get_contents("data/sorceu.json");
if ($text == "⋄ تعين السورس" or $text == "تغير امر السورس" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","sorceu");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙قم بأرسال كليشة امر السورس
⋄︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nnam" and in_array($from_id,$Dev)){
file_put_contents("data/sorceu.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
⋄︙تم تعين امر السورس
⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف السورس" or $text == "حذف امر السورس" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙حبيبي ← [$first_name](tg://user?id=$from_id)
⋄︙تم حذف كليشة امر السورس
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/sorceu.json",""); 
}
elseif($text == "اعادة تعين" or $text == "⋄ اعادة تعين"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ تم اعادة تعين الاوامر 
⋄︙بواسطة ← [$first_name](tg://user?id=$from_id)
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/m1.json","");
file_put_contents("data/m2.json",""); 
file_put_contents("data/m3.json","");
file_put_contents("data/m4.json",""); 
file_put_contents("data/m5.json","");
file_put_contents("data/m6.json",""); 
file_put_contents("data/sorceu.json",""); 
}
}
elseif($text =="م1" and $m1 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if (!in_array($status,$member) && !in_array($from_id,$mmyaz)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*".$em." اوامر الحمايه سورس 𝑾𝑯𝑰𝑺𝑲𝑬𝒀
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." قفل ، فتح ← الامر 
".$em." تستطيع قفل حمايه كما يلي ...
".$em." ← { بالتقيد ، بالطرد ، بالكتم }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." الروابط
".$em." المعرفات
".$em." التاك
".$em." الشارحه
".$em." التعديل
".$em." التثبيت
".$em." المتحركه
".$em." الملفات
".$em." الصور
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." الماركداون
".$em." البوتات
".$em." التكرار
".$em." الكلايش
".$em." السيلفي
".$em." الملصقات
".$em." الفيديو
".$em." الانلاين
".$em." الدردشه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." التوجيه
".$em." الاغاني
".$em." الصوت
".$em." الجهات
".$em." الاشعارات
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." قناة البوت ← @$devchink*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙دز تفعيل عشان نخدم يابوصاحب",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}}
if($text =="م1" and $m1 != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m1
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⋄︙دز تفعيل عشان نخدم يابوصاحب",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
elseif($text =="م2" and $m2 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if (!in_array($status,$member) && !in_array($from_id,$mmyaz)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*".$em." اوامر بوديقاردية المجموعه ...
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." رفع، تنزيل ← مميز
".$em." تاك للكل ، عدد الكروب
".$em." كتم ، حظر ، طرد ، تقيد
".$em." الغاء كتم ، الغاء حظر ، الغاء تقيد
".$em." منع ، الغاء منع 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄".$em." عرض القوائم ...
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." المكتومين
".$em." المميزين 
".$em." قائمه المنع
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." تثبيت ، الغاء تثبيت
".$em." الرابط ، الاعدادات
".$em." الترحيب ، القوانين
".$em." تفعيل ، تعطيل ← الترحيب
".$em." تفعيل ، تعطيل ← الرابط 
".$em." جهاتي ،ايدي ، رسائلي
".$em." سحكاتي ، مجوهراتي
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." وضع ، ضع ← الاوامر التاليه 
".$em." اسم ، رابط ، صوره
".$em." قوانين ، وصف ، ترحيب
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." حذف ، مسح ← الاوامر التاليه
".$em." قائمه المنع ، المحظورين 
".$em." المميزين ، المكتومين ، القوانين
".$em." المطرودين ، البوتات ، الصوره
".$em." الرابط
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." قناة البوت ← @$devchink*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙دز تفعيل عشان نخدم يابوصاحب",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}}
if($text =="م2"  and $m2 != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m2
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⋄︙دز تفعيل عشان نخدم يابوصاحب",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
elseif($text =="م3" and $m3 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if (!in_array($status,$member) && !in_array($from_id,$mmyaz)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙اوامر المدراء في المجموعه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙رفع ، تنزيل ← بوديقارد
⋄︙البوديقارديه 
⋄︙رفع، كشف ← القيود
⋄︙تنزيل الكل ← { بالرد ، بالمعرف }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تفعيل ، تعطيل ← الاوامر التاليه ↓
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙الايدي ، الايدي بالصوره
⋄︙ردود المطور ، ردود المدير
⋄︙اطردني ، الالعاب ، الرفع
⋄︙الحظر ، الرابط
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تعين ، مسح ←{ الايدي }
⋄︙رفع البوديقارديه ، مسح البوديقارديه
⋄︙ردود المدير ، مسح ردود المدير
⋄︙اضف ، حذف ← { رد }
⋄︙تنظيف ← { عدد }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← @$devchink*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙دز تفعيل عشان نخدم يابوصاحب",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}}}
if($text =="م3" and $m3 != null ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m3
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⋄︙دز تفعيل عشان نخدم يابوصاحب",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}


elseif($text =="م4" and $m4 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if (!in_array($status,$member) && !in_array($from_id,$mmyaz)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙اوامر المنشئ الاساسي
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙رفع ، تنزيل ←{ منشئ }
⋄︙المنشئين ، مسح المنشئين
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ 
⋄︙اوامر المنشئ المجموعه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙رفع ، تنزيل ← { مدير }
⋄︙المدراء ، مسح المدراء
⋄︙اضف رسائل ← { بالرد او الايدي }
⋄︙اضف مجوهرات ← { بالرد او الايدي }
⋄︙اضف ، حذف ← { امر }
⋄︙الاوامر المضافه ، مسح الاوامر المضافه
⋄︙تنزيل الكل
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← @$devchink*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙دز تفعيل عشان نخدم يابوصاحب",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}}
if($text =="م4"  and $m4 != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m4
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⋄︙دز تفعيل عشان نخدم يابوصاحب",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
elseif($text == "م5" and $m5 == null){
if(in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$eri)){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙اوامر المطور الاساسي  
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙حظر عام ، الغاء العام
⋄︙اضف ، حذف ← { مطور } 
⋄︙قائمه العام ، مسح قائمه العام
⋄︙المطورين ، مسح المطورين
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙اضف ، حذف ← { رد عام }
⋄︙وضع ، حذف ← { كليشه المطور } 
⋄︙مسح ردود المطور ، ردود المطور 
⋄︙تحديث ،  تحديث السورس 
⋄︙تعين عدد الاعضاء ← { العدد }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تفعيل ، تعطيل ← { الاوامر التاليه ↓}
⋄︙البوت الخدمي ، المغادرة ، الاذاعه
⋄︙ملف ← { اسم الملف }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙مسح جميع الملفات 
⋄︙المتجر
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙اوامر المطور في البوت
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تفعيل ، تعطيل ، الاحصائيات
⋄︙رفع، تنزيل ← { منشئ اساسي }
⋄︙مسح الاساسين ، المنشئين الاساسين 
⋄︙غادر ، غادر ← { والايدي }
⋄︙اذاعه ، اذاعه بالتوجيه 
⋄︙اذاعه خاص ، اذاعه خاص بالتوجيه 
⋄︙تغير امر الاوامر ← تغير امر م6
⋄︙حذف امر الاوامر ← حذف امر م6
⋄︙تعين امر السورس ← حذف امر السورس
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← @$devchink*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙الامر لـ ← ( المطور الاساسي - المطور الثانوي - مبرمج السورس )",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}
if($text =="م5" and $m5 != null ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m5
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⋄︙دز تفعيل عشان نخدم يابوصاحب",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
elseif($text == "م6" and $m6 == null){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙اوامر الاعضاء لسورس 𝑾𝑯𝑰𝑺𝑲𝑬𝒀
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تحويل/بالرد - لتحويل صيغ 
⋄︙ملصق ← صوره
⋄︙صوره ← ملصق
⋄︙فيديو ← بصمه
⋄︙بصمه ← اغنيه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙غني - غنيلي
⋄︙← { جماله ، ذكائه ، مهنته }
⋄︙← { بوسه ، هينه ، مصه }
⋄︙← { رسائلي ، مسح رسائلي }
⋄︙← { سحكاتي ، مسح سحكاتي }
⋄︙السورس لعرض ← سورس البوت
⋄︙← { صورتي ، صورتي + عدد }
⋄︙← { اسمي ، يوزري }
⋄︙انطق + كلام 
⋄︙كله + كلام بالرد
⋄︙الابراج ← لعرض توقعات برجك
⋄︙نادي ← بالرد ← لمنادات شخص
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← @$devchink*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
}
elseif($text == "م6" and $m6 != null){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m6
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}

$chup = "whisky_bot003";
$m = "⋄︙توجد ← 6 اوامر في البوت
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙ارسل {م1} ← اوامر الحمايه
⋄︙ارسل {م2} ← اوامر البوديقارديه
⋄︙ارسل {م3} ← اوامر المدراء
⋄︙ارسل {م4} ← اوامر المنشئين
⋄︙ارسل {م5} ← اوامر المطورين
⋄︙ارسل {م6} ← اوامر الاعضاء
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← [@$devchink]";
$m1 = "⋄︙اوامر الحمايه سورس 𝑾𝑯𝑰𝑺𝑲𝑬𝒀
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قفل ، فتح ← الامر 
⋄︙تستطيع قفل حمايه كما يلي ...
⋄︙← { بالتقيد ، بالطرد ، بالكتم }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙الروابط
⋄︙المعرف
⋄︙التاك
⋄︙الشارحه
⋄︙التعديل
⋄︙التثبيت
⌔︙المتحركه
⋄︙الملفات
⋄︙الصور
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙الماركداون
⋄︙البوتات
⋄︙التكرار
⋄︙الكلايش
⋄︙السيلفي
⋄︙الملصقات
⋄︙الفيديو
⋄︙الانلاين
⋄︙الدردشه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙التوجيه
⋄︙الاغاني
⋄︙الصوت
⋄︙الجهات
⋄︙الاشعارات
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← [@$devchink]";
$m2 = "⋄︙اوامر بوديقاردية المجموعه ...
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙رفع، تنزيل ← مميز
⋄︙تاك للكل ، عدد الكروب
⋄︙كتم ، حظر ، طرد ، تقيد
⋄︙الغاء كتم ، الغاء حظر ، الغاء تقيد
⋄︙منع ، الغاء منع 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙عرض القوائم ...
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙المكتومين
⋄︙المميزين 
⋄︙قائمه المنع
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تثبيت ، الغاء تثبيت
⋄︙الرابط ، الاعدادات
⋄︙الترحيب ، القوانين
⋄︙تفعيل ، تعطيل ← الترحيب
⋄︙تفعيل ، تعطيل ← الرابط 
⋄︙جهاتي ،ايدي ، رسائلي
⌔︙سحكاتي ، مجوهراتي
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙وضع ، ضع ← الاوامر التاليه 
⋄︙اسم ، رابط ، صوره
⋄︙قوانين ، وصف ، ترحيب
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙حذف ، مسح ← الاوامر التاليه
⋄︙قائمه المنع ، المحظورين 
⋄︙المميزين ، المكتومين ، القوانين
⋄︙المطرودين ، البوتات ، الصوره
⋄︙الرابط
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← [@$devchink]";
$m3 ="⋄︙اوامر المدراء في المجموعه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙رفع ، تنزيل ← بوديقارد
⋄︙البوديقارديه 
⋄︙رفع، كشف ← القيود
⋄︙تنزيل الكل ← { بالرد ، بالمعرف }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تفعيل ، تعطيل ← الاوامر التاليه ↓
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙الايدي ، الايدي بالصوره
⋄︙ردود المطور ، ردود المدير
⋄︙اطردني ، الالعاب ، الرفع
⋄︙الحظر ، الرابط
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تعين ، مسح ←{ الايدي }
⋄︙رفع البوديقارديه ، مسح البوديقارديه
⋄︙ردود المدير ، مسح ردود المدير
⋄︙اضف ، حذف ← { رد }
⋄︙تنظيف ← { عدد }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← [@$devchink]";
$m4 = "⋄︙اوامر المنشئ الاساسي
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙رفع ، تنزيل ←{ منشئ }
⋄︙المنشئين ، مسح المنشئين
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ 
⋄︙اوامر المنشئ المجموعه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙رفع ، تنزيل ← { مدير }
⋄︙المدراء ، مسح المدراء
⋄︙اضف رسائل ← { بالرد او الايدي }
⋄︙اضف مجوهرات ← { بالرد او الايدي }
⋄︙اضف ، حذف ← { امر }
⋄︙الاوامر المضافه ، مسح الاوامر المضافه
⋄︙تنزيل الكل
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← [@$devchink]";
$m5 = "⋄︙اوامر المطور الاساسي  
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙حظر عام ، الغاء العام
⋄︙اضف ، حذف ← { مطور } 
⋄︙قائمه العام ، مسح قائمه العام
⋄︙المطورين ، مسح المطورين
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙اضف ، حذف ← { رد عام }
⋄︙وضع ، حذف ← { كليشه المطور } 
⋄︙مسح ردود المطور ، ردود المطور 
⋄︙تحديث ،  تحديث السورس 
⋄︙تعين عدد الاعضاء ← { العدد }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تفعيل ، تعطيل ← { الاوامر التاليه ↓}
⋄︙البوت الخدمي ، المغادرة ، الاذاعه
⋄︙ملف ← { اسم الملف }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙مسح جميع الملفات 
⋄︙المتجر
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙اوامر المطور في البوت
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تفعيل ، تعطيل ، الاحصائيات
⋄︙رفع، تنزيل ← { منشئ اساسي }
⋄︙مسح الاساسين ، المنشئين الاساسين 
⋄︙غادر ، غادر ← { والايدي }
⋄︙اذاعه ، اذاعه بالتوجيه 
⋄︙اذاعه خاص ، اذاعه خاص بالتوجيه 
⋄︙تغير امر الاوامر ← تغير امر م6
⋄︙حذف امر الاوامر ← حذف امر م6
⋄︙تعين امر السورس ← حذف امر السورس
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← [@$devchink]";
$m6 = "⋄︙اوامر الاعضاء لسورس 𝑾𝑯𝑰𝑺𝑲𝑬𝒀
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙تحويل/بالرد - لتحويل صيغ 
⋄︙ملصق ← صوره
⋄︙صوره ← ملصق
⋄︙فيديو ← بصمه
⋄︙بصمه ← اغنيه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙غني - غنيلي
⋄︙← { جماله ، ذكائه ، مهنته }
⋄︙← { بوسه ، هينه ، مصه }
⋄︙← { رسائلي ، مسح رسائلي }
⋄︙← { سحكاتي ، مسح سحكاتي }
⋄︙السورس لعرض ← سورس البوت
⋄︙← { صورتي ، صورتي + عدد }
⋄︙← { اسمي ، يوزري }
⋄︙انطق + كلام 
⋄︙كله + كلام بالرد
⋄︙الابراج ← لعرض توقعات برجك
⋄︙نادي ← بالرد ← لمنادات شخص
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙قناة البوت ← [@$devchink]";
$time = date('h:i A');
date_default_timezone_set('Asia/Baghdad');
if($text =="الاوامر"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$carlos) or in_array($from_id2,$eri)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*$m*"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☆︙*عذرأ حبيبي عليك تفعيل البوت*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}
if($data == "1" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$carlos) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"*$m1*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"الامر موش شورك ياطيب🙂 لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "2" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$carlos) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"*$m2*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"الامر موش شورك ياطيب🙂 لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "3" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$carlos) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"*$m3*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"الامر موش شورك ياطيب🙂 لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "4" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$carlos) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"*$m4*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"الامر موش شورك ياطيب🙂 لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "5" ){
if ( in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"*$m5*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"الامر موش شورك ياطيب🙂 لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "6" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$carlos) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"*$m6*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"الامر موش شورك ياطيب🙂 لك", 
'show_alert'=>true 
 ]); 
} 
}


if($data=="deletamr"){
bot('deletemessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);}

$tofcarlos = array("خشوف وجهه يستاهل تفله","دي لك يخره شوف وجهك حرامت اذب تفلتي عليه😈👋🏿","دمشي لاتفل بخشمك🥱👏🏿","لك ياحيوان حترم لا اهينك اتفل بعينك😟🤘🏿","انته شايف وجهكك ب امرايه☹️🤘🏿");
$tofcarlos2 = array_rand($tofcarlos, 1);
if($rt and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"حاضر ستادي هسه شبعه تفال😻🤘🏿", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$tofcarlos[$tofcarlos2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لك تريد اتفل عله تاج راسك وراسي🥱🤫",'parse_mode'=>"Markdown",'reply_to_message_id'=>$message->message_id, ]); }}

$boscra = array("مواححح افيـش عافيههه😍🔥💗","امممووااهحح شهلعسـل🥺🍯💘","مواححح،ءوفف اذوب🤤💗");
$boscra2 = array_rand($boscra, 1);
if($rt  and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "بوسه" or $text == "بعد بوسه" or $text == "بوسه بعد" or $text == "بوسها" or $text == "بوسهه" or $text == "ضل بوس" or $text == "بعد بوسها" or $text == "بوسها بعد" and $from_id != $bot_id){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$boscra[$boscra2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "بوسه" or $text == "بعد بوسه" or $text == "بوسه بعد" or $text == "بوسها" or $text == "بوسهه" or $text == "ضل بوس" or $text == "بعد بوسها" or $text == "بوسها بعد"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"مواححح احلاا بوسةة المطوريي😻🔥💗",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }
if($rt and $from_id == $bot_id){
if($text == "بوسه" or $text == "بعد بوسه" or $text == "بوسه بعد" or $text == "بوسها" or $text == "بوسهه" or $text == "ضل بوس" or $text == "بعد بوسها" or $text == "بوسها بعد"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"يمطي شلون ابوس نفسي.🤨👊🏻",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

$sahcar = array("تعال لكك ديصيحوك😐🖤","عمري اكو شخص ديناديك.🙂💕","تعال محتاجينك🙄💕","هلووو وينك تعال هنا.😡👊");
$sahcar2 = array_rand($sahcar, 1);
if($rt and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "صيحه" or $text == "صحيها" or $text == "صيحهه" or $text == "صيحو"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$sahcar[$sahcar2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "صيحه" or $text == "صحيها" or $text == "صيحهه" or $text == "صيحو"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"تعال مطوريي محتاجيكك🏃🏻‍♂️♥️",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

$mascar = array("مممممممحححححح احله مصه🥺💕","مححححح وووف ءذوب .🥺💞","مح مح مح مصه من لخدود وووف.🥺💕");
$mascar2 = array_rand($mascar, 1);
if($rt and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "مصه" or $text == "مصهه" or $text == "مصها" or $text == "مصي"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$mascar[$mascar2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "مصه" or $text == "مصهه" or $text == "مصها" or $text == "مصي"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"محححح احله مصه من مطوري🥺💋",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

$henacar = array("لكك جرجف احترم اسيادكك لا اكتلكك وازربب على كبركك،💩🖐🏿","هشش فاشل لتضل تمسلت لا اخربط تضاريس وجهك جنه ابط عبده، 😖👌🏿","دمشي لك ينبوع الفشل مو زين ملفيك ونحجي وياك هي منبوذ 😏🖕🏿","ها الغليض التفس ابو راس المربع متعلملك جم حجايه وجاي تطكطكهن علينه دبطل😒🔪","حبيبي راح احاول احترمكك هالمره بلكي تبطل حيونه، 🤔🔪");
$henacar2 = array_rand($henacar, 1);
if($rt and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$henacar[$henacar2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لكك تريد اهينن تاج راسكك؟😏🖕🏿",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]);}}

if(!@$username){
$usere = "⋄︙لايوجد لديك معرف";
}elseif(@$username){
$usere = "⋄︙معرفك ← @$username";
}
if($text == "معرفي" || $text == "يوزري"){ bot("SendMessage",[ 'chat_id'=>$chat_id, 'text'=>"$usere", 'reply_to_message_id'=>$message->message_id, ]); }

$photo = $update->message->photo;
$chat_id = $update->message->chat->id;
$ar1 = array("1%","10%","30%","50%", "80%","100%");
$ar2 = array_rand($ar1, 1);
$per = $ar1[$ar2] ;
$re_id = $update->message->reply_to_message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$rt = $update->message->reply_to_message;
$re_msd = $update->message->reply_to_message;
if($rt and $text == "جماله" and $re_msd->photo){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"⋄︙العسل ← [$re_name](tg://user?id=$re_id) 
⋄︙نسبة جماله هيه ← $per",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,
]);
}

$photo = $update->message->photo;
$chat_id = $update->message->chat->id;
$carmah1 = array("مدرس","مبرمج","طبيب","ممرض","بيطري","تاجر","حرامي");
$carmah2 = array_rand($carmah1, 1);
$carmah = $carmah1[$carmah2] ;
$re_id = $update->message->reply_to_message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$rt = $update->message->reply_to_message;
$re_msd = $update->message->reply_to_message;
if($rt and $text == "مهنته" and $re_msd->photo){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"⋄︙العسل ← [$re_name](tg://user?id=$re_id) 
⋄︙مهنتة في المستقبل هيه ← $carmah ",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,
]);
}

$photo = $update->message->photo;
$chat_id = $update->message->chat->id;
$crlzaka1 = array("1%","10%","30%","50%", "80%","100%");
$crlzaka2 = array_rand($crlzaka1, 1);
$crlzaka = $crlzaka1[$crlzaka2] ;
$re_id = $update->message->reply_to_message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$rt = $update->message->reply_to_message;
$re_msd = $update->message->reply_to_message;
if($rt and $text == "ذكائه" and $re_msd->photo){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"⋄︙العسل ← [$re_name](tg://user?id=$re_id) 
⋄︙نسبة دكائه هيه ← $crlzaka",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,
]);
}
