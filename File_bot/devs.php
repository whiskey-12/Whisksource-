<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

$DRPP = "$knditk";
$ckl = "@$devchink"; 
$ch2 = file_get_contents("https://api.telegram.org/bot$DRPP/getChatMember?chat_id=".$ckl."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot$DRPP/getChat?chat_id=".$ckl))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$ckl);
if($text == "/start" or $text == "text" or $text == "/Del" or $text == "تعطيل" or $text == "تفعيل" or $text == "ايدي" or $text == "رفع بوديقارد" or $text == "رفع مميز" or $text == "م1" or $text == "م2" or $text == "م3" or $text == "م4" or $text == "م5" or $text == "تصكير الصور" or $text == "تنزيل مميز" or $text == "تنزيل بوديقارد" or $text == "تصكير الفيديو" or $text == "فتح الفيديو" or $text == "تفعيل الايدي" or $text == "تعطيل الايدي" or $text == "فتح الروابط"  or $text == "البوديقاردية" || $text == "المميزين" || $text == "البوديقارديه" || $text == "تصكير الروابط" or $text == "تصكير التوجيه" or $text == "فتح التوجيه" or $text == "تفعيل الالعاب" or $text == "تعطيل الالعاب" or $text == "تفعيل الرابط" or $text == "تعطيل الرابط" or $text == "تفعيل جلب الصور" or $text == "تعطيل جلب الصور" or $text == "تفعيل التصميم"  or $text == "تعطيل التصميم" || $text == "تفعيل الزخرفه" || $text == "تعطيل الزخرفه" || $text == "تفعيل الاشتراك الاجباري" or $text == "تصكير المعرفات" or $text == "فتح المعرفات" or $text == "تصكير البوتات" or $text == "فتح البوتات" or $text == "تصكير المتحركه" or $text == "الاوامر" or $text == "تصكير الاشعارات" or $text == "تصكير البوتات بالطرد" or $text == "وضع رابط"  or $text == "حذف الرابط" || $text == "صنع رابط" || $text == "انشاء رابط" || $text == "تفعيل الرابط" or $text == "تعطيل الرابط" or $text == "تصكير الدردشة" or $text == "فتح الدردشة" or $text == "تصكير الدردشه" or $text == "فتح الدردشه" or $text == "كتم" or $text == "حظر" or $text == "طرد" or $text == "تقييد" or $text == "الغاء حظر" or $text == "الغاء كتم" or $text == "الغاء تقييد" or $text == "وضع ترحيب" or $text == "وضع توديع" or $text == "حذف التوديع" or $text == "حذف الترحيب" or $text =="اضف رد عام" or $text == "اضف رد عام" or $text == "مسح رد عام" or $text == "حذف رد عام" or $text == "مسح الردود العامه" or $text =="الردود العامه" or $text == "قائمة الردود العامه" or $text == "رفع مالك" or $text == "رفع منشئ اساسي" or $text == "تنزيل مالك" or $text == "تنزيل منشئ اساسي" or $text == "تنزيل منشئ" or $text == "غنيلي" or $text == "موال" or $text =="تحويل" or $text == "واسي" or $text == "واسيها" or preg_match("/زخرف /", $text) or preg_match("/ترجم /",$text) or preg_match("/بحث /",$text) or preg_match("/برج /",$text) or preg_match("/معنى /",$text) or preg_match("/العمر /",$text)){
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'*
| سامحني ياعسل ⚠️.
| لا يمكنك استخدام البوت 🔰.
| الا بعد الاشتراك بقناة 🚫.
 ىالقناة : '.$ckl.' ✅*
','parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}}

$setch = file_get_contents("data/setch.json");
$setchannel = file_get_contents("data/setchannel.json");
if($text == "تفعيل" or $text == "start" or $text == "/start" or $text == "حظر" or $text == "ايدي" or $text == "كتم" or $text == "تقييد" or $text == "الاوامر" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "تاق" or $text == "حذف امر" or $text == "اضف امر" or $text == "تاق للكل" or $text == "/start"){
if(!in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$eri)){
if($setchannel == "مفعل ✔️"){
$join = file_get_contents("https://api.telegram.org/bot$DRPP/getChatMember?chat_id=@$setch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌔︙مرحبا العسل\n⌔︙اشتررك في قناة البوت اولا [@$setch]",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎖اضغط هنا 🎖",'url'=>"t.me/$setch"]],]])]);
 bot("sendmessage",[
      "chat_id"=>$Devd,
      "text"=>"",
      ]);
      die('اا');
  }
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>" ",'reply_to_message_id'=>$message->message_id,]);}}}
###########
if( $text=="/start" &&  $tc == "private" or $text=="⋄ رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
امرحبا مطوري الحبيب الوسكي انت القائد هنا
 اضغط على الزر لي تبيه واختار الامر لي تبيه♥🤤

",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ نسخة إحتياطية"]],
[['text'=>"⋄ تعيين رموز السورس"],['text'=>"⋄ حذف رموز السورس"]],
[['text'=>"⋄ نقل الملكية"],['text'=>"⋄ حذف المالك الثاني"]],
[['text'=>"⋄ تحديث السورس"]],
[['text'=>"⋄ تعيين الاسم"],['text'=>"⋄ تحديث"],['text'=>"⋄ حذف الاسم"]],
[['text'=>"⋄ قسم كت تويت"],['text'=>"⋄ قسم الاستارت"]],
[['text'=>"⋄ قسم الاذاعه"],['text'=>"⋄ قسم الاوامر"],['text'=>"⋄ قسم الاشتراك"]],
[['text'=>"⋄ الاحصائيات"],['text'=>"⋄ المشتركين"],['text'=>"⋄ المجموعات"]],
[['text'=>"⋄ تفعيل بوت المطور"],['text'=>"⋄ تفعيل بوت الخدمي"]],
[['text'=>"⋄ وضع عدد التفعيل"]],
[['text'=>"⋄ تفعيل الاحصائيات"],['text'=>"⋄ تعطيل الاحصائيات"]],
[['text'=>"⋄ روابط الكروبات"]],
[['text'=>"⋄ تعيين كليشة المطور"],['text'=>"⋄ حذف كليشة المطور"]],
[['text'=>"⋄ حظر مجموعه"],['text'=>"⋄ قسم تواصل"]],
[['text'=>"⋄ قسم رد عام"]],
[['text'=>"⋄ تفعيل التبنيه"],['text'=>"⋄ تعطيل التنبيه"]],
[['text'=>"⋄ مسح المكتومين عام"]],
[['text'=>"⋄ مسح قائمة العام"]],
[['text'=>"⋄ المكتومين عام"],['text'=>"⋄ المحظورين عام"]],
[['text'=>"⋄ مسح المحظورين عام"]],
[['text'=>"⋄ ترتيب الاوامر"]],
[['text'=>"⋄ تجربة السورس"],['text'=>"⋄ المطورين الثانويه"]],
[['text'=>"⋄ مسح المطورين الثانويه"]],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم تواصل"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت توا!  في القسم العام بالتواصل
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ جلب تواصل"]],
[['text'=>"⋄ تعيين تواصل"],['text'=>"⋄ حذف تواصل"]],
[['text'=>"⋄ تعطيل تواصل"],['text'=>"⋄ تفعيل تواصل"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم الاستارت"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت توا!  في القسم الستارت
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ تفعيل الاستارت"],['text'=>"⋄ تعطيل الاستارت"]],
[['text'=>"⋄ جلب الاستارت"]],
[['text'=>"⋄ تعيين الاستارت"],['text'=>"⋄ حذف الاستارت"]],
[['text'=>"⋄ رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم كت تويت"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت توا!  في القسم الستارت
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ اضف كت"],['text'=>"⋄ حذف كت"]],
[['text'=>"⋄ عدد الاسئله"]],
[['text'=>"⋄ مسح الاسئله"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم الاذاعه"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت توا!  في القسم الاحصائيات و الاذاعه",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ الاحصائيات"]],
[['text'=>"⋄ توجيه خاص"]],
[['text'=>"⋄ اذاعه عام"],['text'=>"⋄ اذاعه خاص"]],
[['text'=>"⋄ توجيه عام"]],
[['text'=>"⋄ المجموعات"]],
[['text'=>"⋄ المشتركين"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم الاوامر"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت توا!  في القسم تعيين الاوامر",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ تعيين م1"],['text'=>"⋄ تعيين م2"]],
[['text'=>"⋄ تعيين م3"],['text'=>"⋄ تعيين م4"]],
[['text'=>"⋄ تعيين م5"],['text'=>"⋄ تعيين م6"]],
[['text'=>"⋄ اعادة تعيين"]],
[['text'=>"⋄ حذف م1"],['text'=>"⋄ حذف م2"]],
[['text'=>"⋄ حذف م3"],['text'=>"⋄ حذف م4"]],
[['text'=>"⋄ حذف م5"],['text'=>"⋄ حذف م6"]],
[['text'=>"⋄ تعيين السورس"],['text'=>"⋄ حذف السورس"]],
[['text'=>"⋄ رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="⋄ قسم الاشتراك"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت توا!  في القسم الاشتراك الاجباري",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ حذف الاشتراك"],['text'=>"⋄ تعيين الاشتراك"]],
[['text'=>"⋄ جلب الاشتراك"]],
[['text'=>"⋄ تفعيل الاشتراك"]],
[['text'=>"⋄ تعطيل الاشتراك"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="⋄ قسم رد عام"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت توا!  في القسم الردود العام  ",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ اضف رد عام"],['text'=>"⋄ حذف رد عام"]],
[['text'=>"⋄ حذف ردود المطور"],['text'=>"⋄ ردود المطور"]],
[['text'=>"⋄ رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}

$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers.""."$developers_infos ➖➖➖➖➖➖➖";
/*===== dev ~ @lV_P_Nl =====*/
$AUBEHABB_info = file_get_contents("data/AUBEHAB/AUBEHAB.txt");
$AUBEHAB = explode ("\n",$AUBEHABB_info);
$AUBEHABB_infos = file_get_contents("data/AUBEHAB/AUBEHABB.txt");
$AUBEHABB = explode("\n",$AUBEHABB_infos);
$list_AUBEHAB ="";
$list_AUBEHAB = $list_AUBEHAB.""."$AUBEHABB_infos";
/*===== dev ~ @lV_P_Nl =====*/
$nazarr_info = file_get_contents("data/nazar/$chat_id.txt");
$nazar  = explode("\n",$nazarr_info);
$nazarr_infos = file_get_contents("data/nazar/$chat_id/nazr.txt");
$nazarr = explode ("\n",$nazarr_infos);
/*===== dev ~ @lV_P_Nl =====*/
$carloss_info = file_get_contents("data/carlos/$chat_id.txt");
$carlos  = explode("\n",$carloss_info);
$carloss_infos = file_get_contents("data/carlos/$chat_id/crlo.txt");
$carloss = explode ("\n",$carloss_infos);
/*===== dev ~ @lV_P_Nl =====*/
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
/*===== dev ~ @lV_P_Nl =====*/
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
/*===== dev ~ @lV_P_Nl =====*/
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
/*===== dev ~ @lV_P_Nl =====*/
$motay_info = file_get_contents("data/motay/$chat_id.txt");
$motay  = explode("\n",$motay_info);
$motaya_infos = file_get_contents("data/motay/$chat_id/mange.txt");
$motaya = explode ("\n",$motaya_infos);
/*===== dev ~ @lV_P_Nl =====*/
$bans = file_get_contents("data/ban/$chat_id.txt");
$banids  = explode("\n",$bans);
$banslist = file_get_contents("data/ban/$chat_id/list.txt");
$banlist = explode ("\n",$banslist);
/*===== dev ~ @lV_P_Nl =====*/
mkdir("data");
mkdir("data/developers");
mkdir("data/AUBEHAB");
mkdir("data/nazar");
mkdir("data/nazar/$chat_id");
mkdir("data/ban");
mkdir("data/ban/$chat_id");
mkdir("data/carlos");
mkdir("data/carlos/$chat_id");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/motay");
mkdir("data/motay/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
mkdir("data/miss/$chat_id");
mkdir("data/miss/$chat_id/miss.json");
mkdir("statistics");



if(in_array($from_id,$eri)){
$info = "مطور السورس";
}
elseif(in_array($from_id,$developer) ){
$info = "مطور ثانوي";
}
elseif(in_array($from_id,$Dev) ){
$info = "مطور اساسي";
}
elseif(in_array($from_id,$nazar) ){
$info = "منشئ اساسي";
}
elseif(in_array($from_id,$carlos) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "بوديقارد";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!@$username){
$casss = "لايوجد يوزر";
}elseif(@$username){
$casss = "@$username";
}
if($text=="رتبتي" ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
".$em." رتبتك $info .
".$em." ايديك `$from_id`.
—",
'parse_mode'=>"html",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
]);
}
/*===== dev ~ @lV_P_Nl =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$settingdev = json_decode(file_get_contents("DEVER.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
if($text == "اضف امر" or $text == "وضع امر" or $text == "وظع امر" or $text == "وظع امر"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر القديم توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "رفع مميز" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⋄︙دز الامر الجديد توا!  .
*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.mmaz";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع بوديقارد" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.admi";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع مدير" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.modir";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع منشئ" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.mans";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع منشئ اساسي" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.mansas";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "تاق للكل" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.tagall";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "تنزيل الكل" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$nazar) || in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.tkal";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "ايدي" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.idse";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "كشف" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.ksh";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "حظر" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.kik";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "لز" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.kout";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "كتم" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.ktm";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "تقييد" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.tkeed";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.mmaz"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙دز الامر الجديد توا!  .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["mmaz"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.admi"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["admi"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.mansas"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["mansas"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.tkal"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["tkal"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.mans"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["mans"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.tagall"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["tagall"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.modir"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["modir"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.idse"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["idse"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.ksh"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["ksh"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.kik"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["kik"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.kout"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["kout"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.ktm"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["ktm"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.tkeed"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حفظته الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["tkeed"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$setmm = $settings["information"]["mmaz"];
$settagall = $settings["information"]["tagall"];
$setmans = $settings["information"]["mans"];
$setmansas = $settings["information"]["mansas"];
$setad = $settings["information"]["admi"];
$stmode = $settings["information"]["modir"];
$setid = $settings["information"]["idse"];
$setksh = $settings["information"]["ksh"];
$sethazr = $settings["information"]["kik"];
$setout = $settings["information"]["kout"];
$setktm = $settings["information"]["ktm"];
$settkal = $settings["information"]["tkal"];
$settkeed  = $settings["information"]["tkeed"];
if($text == "الاوامر المضافه" or $text == "الاوامر المختصره" or $text == "المضافه"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⋄︙اليك اوامر المضافه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙رفع منشئ اساسي ← $setmansas
⋄︙رفع منشئ ← $setmans
⋄︙رفع مدير ← $stmode
⋄︙رفع بوديقارد ← $setad
⋄︙رفع مميز ← $setmm
⋄︙تاق للكل ← $settagall
⋄︙تنزيل الكل ← $settkal
⋄︙كشف ← $setksh
⋄︙كتم ← $setktm
⋄︙تقييد ← $settkeed
⋄︙لز← $setout
⋄︙حظر ← $sethazr
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}}
if($text == "حذف الاوامر المضافه" or $text == "مسح المضافه" or $text == "تنظيف المضافه"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم مسح الاوامر المضافه .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["information"]["mmaz"] = "لايوجد امر";
$settings["information"]["admi"] = "لايوجد امر";
$settings["information"]["modir"] = "لايوجد امر";
$settings["information"]["idse"] = "لايوجد امر";
$settings["information"]["ksh"] = "لايوجد امر";
$settings["information"]["kik"] = "لايوجد امر";
$settings["information"]["tkal"] = "لايوجد امر";
$settings["information"]["kout"] = "لايوجد امر";
$settings["information"]["ktm"] ="لايوجد امر";
$settings["information"]["tagall"] = "لايوجد امر";
$settings["information"]["mans"] = "لايوجد امر";
$settings["information"]["mansas"] ="لايوجد امر";
$settings["information"]["tkeed"] = "لايوجد امر";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
###########
/*===== dev ~ @lV_P_Nl =====*/
if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) || in_array($from_id,$eri) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ↫「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` ، 
".$em." تم ترقية ليصبح مطور
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev) and  in_array($from_id,$eri) and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." ايديه ↫ `$re_id`
".$em." هوا اساسا مطور ذهب
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev) || in_array($from_id,$eri)){
if($re and $text == "تنزيل مطور" and in_array($re_id,$developer)){
$re_id_info = file_get_contents("data/developers/$chat_id.txt");
$devr = file_get_contents("data/developers/$chat_id/developer.txt");
$devr1 = explode("             \n",$devr);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ","",$devr1);
file_put_contents("data/developers/developer.txt",$str);
file_put_contents("data/developers/developers.txt",$str);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ↫ `$re_id` 
".$em." تم تنزيله من قائمة المطورين
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true, ]); }}

if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" and !in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." هو ليس مطور ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true, ]);}}

if($text == "مسح المطورين" and in_array($from_id,$Dev)){
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 
".$em." تم مسح قائمة المطورين من البوت
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين"  and in_array($from_id,$Dev) and $developers_info != NULL and $developers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⌔| اليك قائمة ⋙ المطورين
$list_developers
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين" and in_array($from_id,$Dev) and $developers_info == NULL || $developers_info == " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 
⌯⁞ لايوجد مطورين في البوت
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}

if($status == "creator" || in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri)) {
if($re and $text == "رفع منشئ اساسي" || $text == "رفع منشى اساسي" and !in_array($re_id,$manger)){
file_put_contents("data/nazar/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/nazar/$chat_id/nazr.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم ترقية ليصبح منشئ اساسي
",'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع منشئ اساسي" || $text == "رفع منشى اساسي" and in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ↫ `$re_id` 
".$em." هوا اساسا منشئ اساسي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المنشئين الاساسي" or $text == "حذف المنشئين الاساسي"){
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id/nazr.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 
⌔| تم مسح قائمة المنشئين الاساسي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل منشى اساسي" || $text == "تنزيل منشئ اساسي" and in_array($re_id,$nazar)){
	$re_id_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم تنزيله من قائمة المنشئين الاساسي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل منشى اساسي" || $text == "تنزيل منشئ اساسي" || $text == "ت م ا" || $text == "تنما" and !in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ↫ `$re_id` 
".$em." هو ليس منشئ اساسي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين الاساسي" || $text == "قائمه المنشئين الاساسي" and $nazarr_info != NULL and $nazarr_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ المشئين الاساسي
$nazarr_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين الاساسي" ||  $text == "قائمه المنشيئن الاساسي" and $nazarr_info == NULL || $nazarr_info == " " || $nazarr_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 
⌯⁞ لايوجد اي منشئ اساسي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" || in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($re and $text == "رفع منشئ" || $text == "رفع منشى" and !in_array($re_id,$manger)){
file_put_contents("data/carlos/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/carlos/$chat_id/crlo.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم ترقية ليصبح منشئ
",'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع منشئ" || $text == "رفع منشى" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$carlos)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم ترقيته منشى مسبقا 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المنشيئن" or $text == "حذف المنشئين"){
file_put_contents("data/carlos/$chat_id.txt","");
file_put_contents("data/carlos/$chat_id.txt","");
file_put_contents("data/carlos/$chat_id/crlo.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 
⌯⁞ تم مسح قائمة المنشئين من البوت
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل منشى" || $text == "تنزيل منشئ" and in_array($re_id,$carlos)){
	$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ←`$re_id` 
".$em." تم تنزيله من قائمة المنشئين
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل منشى" || $text == "تنزيل منشئ" || $text == "ت م" || $text == "تنم" and !in_array($re_id,$carlos)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." ليس منشئ ليتم تنزيله 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين" || $text == "قائمه المنشئين" and $carloss_info != NULL and $carloss_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ المشئينن
$carloss_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشيئن" || $text == "قائمه المنشيئن" and $carloss_info == NULL || $carloss_info == " " || $carloss_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⌯⁞ لايوجد منشئين في البوت
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" || in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri)  || in_array($from_id,$nazar)) {
if($re and $text == "رفع مدير" || $text == "رفع المدير"  || $text == "ر مدير"  and !in_array($re_id,$manger)){
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم ترقية ليصبح مدير
",'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مدير" || $text == "رفع المدير" and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." هوا اساسا مدير
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المدراء" ){
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
".$em." تم مسح قائمة المدراء
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم تنزيله من قائمة المدراء
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." ليس مدير ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" || $text == "قائمه المدراء" and $mangers_info != NULL and $mangers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ المدراء
$mangers_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" ||  $text == "قائمه المدراء" and $mangers_info == NULL || $mangers_info == " " || $mangers_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"

".$em." لايوجد اي مدراء حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($re and $text == "رفع بوديقارد" || $text == "ر بوديقارد"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم ترقية ليصبح بوديقارد
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع بوديقارد" || $text == "رفع بوديقارد" || $text == "ر بوديقارد"  and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." هوا اساسا بوديقارد
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح البوديقاردية" ){
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
".$em." تم مسح قائمة البوديقارديه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل بوديقارد" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم تنزيله من قائمة البوديقارديه
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل بوديقارد"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." هوه ليس بوديقارد ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "البوديقارديه" || $text == "قائمه البوديقارديه" and $admin_users_info != NULL and $admin_users_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ البوديقارديه
$admin_users_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "البوديقارديه" ||  $text == "قائمه البوديقارديه" and $admin_users_info == NULL || $admin_users_info == " " || $admin_users_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العسل ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ لايوجد اي بوديقارد حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger) or in_array($from_id,$carlos) or in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($re and $text == "رفع مميز" || $text == "رمميز"and !in_array($re_id,$mmyaz)){
			file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم ترقيه ليصبح مميز
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مميز"  || $text == "رمميز"  and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." ايديه ← `$re_id`
".$em." هوا اساسا مميز 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المميزين" ){
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
".$em." تم مسح قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم تنزيله من قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." هو ليس مميز ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $mmyazs_info != NULL and $mmyazs_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"".$em." اليك قائمة ⋙ المميزين
$mmyazs_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" ||  $text == "قائمه المميزين" and $mmyazs_info == NULL || $mmyazs_info == " " || $mmyazs_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 
".$em." لايوجد اي مميز حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($re and $text == "تنزيل الكل" || $text == "تنزيل من الكل" || $text == "تنزيله من الكل"){
if($status == "creator" ||in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$nazar)){
$re_id_info = file_get_contents("data/manger/$chat_id.txt");
$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/manger/$chat_id.txt",$str);
file_put_contents("data/manger/$chat_id/mange.txt",$str2);
$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admn1 = explode(" \n",$admn);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
file_put_contents("data/admin_user/$chat_id.txt",$str);
file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/mmyaz/$chat_id.txt",$str);
file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم تنزيله من كل الرتب
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}


if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if($status == "creator" || in_array($from_id,$Dev) || in_array($from_id,$eri) or in_array($from_id,$developer)) {
$re_id_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم تنزيله من جميع الترقية
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if(in_array($from_id,$nazar)) {
	$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم تنزيله من جميع الترقية
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if(in_array($from_id,$carlos)) {
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم تنزيله من جميع الرتب
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if(in_array($from_id,$manger)) {
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"".$em." العسل ⋙「 [$re_name](tg://user?id=$re_id) 」
".$em." ايديه ← `$re_id` 
".$em." تم تنزيله من جميع الرتب
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" and in_array($from_id,$Dev) and in_array($from_id,$eri) and in_array($from_id,$carlos) and in_array($from_id,$nazar)){
if($text == "مسح المرفوعين" or $text == "مسح الكل"){
$CMM = count($mmyazs)-1;
$CM = count($mangers)-1;
$CA = count($admin_users)-1;
$CALL = $CA + $CM + $CMM;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." بواسطـة $info
ـــ ـــ ـــ ــــ ــــ 
".$em." تم حذف {$CA} من البوديقارديه
".$em." تم حذف {$CM} من المدراء
".$em." تم حذف {$CMM} من المميزين
ـــ ـــ ـــ ــــ ــــ 
".$em." تم حذف {$CALL} من المرفوعين
".$em." تم حذف الكل بنجاح 
✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt","");
}
}
