<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

if(preg_match('/^(بحث) (.*)/s', $text, $stor)){
if($settings["lock"]["serhi"] == "مصكر"){
$rs = 'https://play.google.com/store/search?q='.urlencode($stor[2]);
$rs1 = 'http://www.mobogenie.com/search.html?q='.urlencode($stor[2]);
$rs2 = 'http://www.mobomarket.net/search?keyword='.urlencode($stor[2]);
$rs3 = "http://www.apkmirror.com/?s=".urlencode($stor[2])."&post_type=app_release&searchtype=apk";
$rs4 = 'http://www.appsodo.com/search_'.urlencode($stor[2])."_1";
$rs5 = 'https://es.aptoide.com/search?query='.urlencode($stor[2])."&type=apps";
$rs6 = 'http://html5.oms.apps.opera.com/en_in/catalog.php?search='.urlencode($stor[2]);
$rs7 = 'https://www.androiddrawer.com/search-results/?q='.urlencode($stor[2]);
bot('sendChatAction', [
'chat_id'=>$chat_id,
'action'=>'typing',]);
sleep(1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"✵⁞  اهلا حبيبي♥ ⋙ [$first_name](tg://user?id=$from_id)
✵⁞ اليك نتائج البحث ( $text )
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>"Googli Play Market", 'url'=>"$rs"]],
       [['text'=>"Mobogenie Market", 'url'=>"$rs1"]],  
       [['text'=>"Mobo Market", 'url'=>"$rs2"]],
          [['text'=>"Apkmirror Market", 'url'=>"$rs3"]],
       [['text'=>"Appsodo Market", 'url'=>"$rs4"]],
       [['text'=>"Appoide Market", 'url'=>"$rs5"]],  
       [['text'=>"Opera Market", 'url'=>"$rs6"]],
          [['text'=>"Androide Dwar Market", 'url'=>"$rs7"]],
 ]])]);}
 }
$startt = file_get_contents("data/set.txt");
$starttext = file_get_contents("data/start.txt");
if ($text == "تعيين رد الخاص" or $text == "تعيين الستارت" or $text == "⋄ تعين الاستارت" and in_array($from_id,$Dev)){
file_put_contents("data/set.txt","setstart");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"✵⁞ حسنأ حبيبي♥ $info
⌯⁞ ارسل الان كليشة الاستارت 
⌯⁞ لعرض الاسم ~⪼ `{Name}`
⌯⁞ لعرض الاسم البوت ~⪼ `{bot}`
⌯⁞ لعرض المعرف ~⪼ `@[{User}]`
⌯⁞ لعرض معرف المطور ~⪼ `@[{Dev}]`
⌯⁞ لعرض الايدي ~⪼ `{Id}`
⌯⁞ قناة التعيين : @$devchink
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source nizk     --
if($text && $startt =="setstart" and in_array($from_id,$Dev)){
file_put_contents("data/start.txt",$text); 
file_put_contents("data/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text" => "✵⁞ حسنأ حبيبي♥ $info
⌯⁞ تم حفظ كليشة الاستارت
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source nizk     --
if ($text == "حذف رد الخاص" or $text == "حذف الستارت" or $text == "⋄ حذف الاستارت" and in_array($from_id,$Dev)){
file_put_contents("data/start.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"✵⁞ حسنأ حبيبي♥ $info
⌯⁞ ابشر حذفـت  كليشة الاستارت
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source carlos -     
$user = $update->message->from->username;
$times = date('h:i:s');
$pirvate = explode("\n",file_get_contents("statistics/pirvate.txt"));
$statspv = count($pirvate)-1;
$startt = file_get_contents("data/set.txt");
$starttext = file_get_contents("data/start.txt");
if($text=="/start" and $starttext != null){
$st1 = file_get_contents("data/startlock.txt");
if($st1 == "رد الخاص مفعل"){
if($tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"ـ المطـور 🙇‍♂",'url'=>"t.me/$buy"]],]])]);}}}}
$starttext = file_get_contents("data/start.txt");
if($text=="/start" and $starttext != null){
if($tc == "private"){
$st1 = file_get_contents("data/startlock.txt");
if($st1 == "رد الخاص مفعل"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
$starttext = str_replace('{Name}',$first_name,$starttext);
$starttext = str_replace('{bot}',$namebot,$starttext);
$starttext = str_replace('{san}',$time,$starttext);
$starttext = str_replace('{Id}',$from_id,$starttext);
$starttext = str_replace('{User}',$user,$starttext);
$starttext = str_replace('{Dev}',$buy,$starttext);
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>" $starttext
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"ـ المطـور 🙇‍♂",'url'=>"t.me/$buy"]],
]])]);}}}}
# --     Source nizk     --
$startt = file_get_contents("data/set.txt");
$starttext = file_get_contents("data/start.txt");
if($text=="جلب الستارت" or $text=="جلب رد الخاص" or $text=="⋄ جلب الاستارت" and $starttext == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){

$starttext = str_replace('{Name}',$first_name,$starttext);
$starttext = str_replace('{bot}',$namebot,$starttext);
$starttext = str_replace('{san}',$time,$starttext);
$starttext = str_replace('{Id}',$from_id,$starttext);
$starttext = str_replace('{User}',$user,$starttext);
$starttext = str_replace('{Dev}',$buy,$starttext);

if(!$starttext){
$starttext ="لايوجد ستارت";
}elseif($starttext){
$starttext ="$starttext";
}

bot('sendmessage',['chat_id'=>$chat_id,'text'=>"

$starttext
$startt

",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}}
# --     Source nizk     --
$starttext = file_get_contents("data/start.txt");
if($text=="جلب الستارت" or $text=="جلب رد الخاص" or $text=="⋄ جلب الاستارت" and $starttext != null){
if($tc == "private"){
$starttext = str_replace('{Name}',$first_name,$starttext);
$starttext = str_replace('{bot}',$namebot,$starttext);
$starttext = str_replace('{san}',$time,$starttext);
$starttext = str_replace('{Id}',$from_id,$starttext);
$starttext = str_replace('{User}',$user,$starttext);
$starttext = str_replace('{Dev}',$buy,$starttext);
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"$starttext
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}} 
# --     Source nizk     --
if($text =="تعطيل رد الخاص" or $text =="⋄ تعطيل الاستارت"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✵⁞ حسنأ حبيبي♥ $info
⌯⁞ تعطيل رد الاستارت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("data/startlock.txt","رد الخاص معطل");}}

if($text =="تفعيل رد الخاص" or $text =="⋄ تفعيل الاستارت"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✵⁞ حسنأ حبيبي♥ $info
⌯⁞ تفعيل رد الاستارت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("data/startlock.txt","رد الخاص مفعل");}}

if($text =="⋄ تعطيل تواصل" ){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵ تم تعطيل التواصل بنجاح
⌯ بواسطة ⋙ [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✖");
}}
if($text =="⋄ تفعيل تواصل"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵ تم تفعيل التواصل بنجاح
⌯ بواسطة ⋙ [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✔");
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl == null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
✵ تم ارسال رسالتك لـ المطور ✓
⌯ معرف المطور ⋙ $DevUser
⌯ [للمزيد اضغط هنا](t.me/$channel)
➖
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
               ]])]);}}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl != null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$Twasl",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'','url'=>'https://t.me/$channel']],
               ]])]);}}}

if($message->reply_to_message->forward_from->id and in_array($from_id,$Dev)){
    bot('sendMessage',[ 
'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$Dev[0],
        'text'=>"⌯ تم ارسال رسالتك بنجاح",
]);}
$twasl = file_get_contents("twasl.txt");
if($text=="⋄ جلب تواصل" and $twasl == null){
if($tc == "private"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الحالي` } •

✵ تم ارسال رسالتك لـ المطور ✓
⌯ معرف المطور ⋙ $DevUser
⌯ [للمزيد اضغط هنا](t.me/$buy)
➖
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
               ]])]);}}}

$twasl = file_get_contents("twasl.txt");
if($text=="⋄ جلب تواصل" and $twasl != null){
if($tc == "private"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الجديد` } •

$twasl
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/$channel"]],
]])
]);
}}}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
if ($text == "⋄ تعين تواصل" or $text == "تعيين رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twassl.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"⌯ قم بارسال الرد الان حبيبي♥
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف تواصل" or $text == "حذف رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✵ ابشر حذفـت  رد التواصل بنجاح
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $Twassl =="nam" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt",$text); 
file_put_contents("twassl.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "⌯ ابشر عيـنت  رد التواصل بنجاح
✵ $text
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

if($text == "نزلني" || $text == "$namebot نزلني"){
	if($settings["lock"]["rfabot"] == "مصكر"){
$from_id_info = file_get_contents("data/manger/$chat_id.txt");
$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($from_id,"",$from_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $username ."] *𓆪* " . "»" . " *𓆩* `". $from_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/manger/$chat_id.txt",$str);
file_put_contents("data/manger/$chat_id/mange.txt",$str2);
$from_id_info = file_get_contents("data/admin_user/$chat_id.txt");
$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admn1 = explode(" \n",$admn);
$str = str_replace($from_id,"",$from_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $username ."] *𓆪* " . "»" . " *𓆩* `". $from_id ."` *𓆪* ","",$admn1);
file_put_contents("data/admin_user/$chat_id.txt",$str);
file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
$from_id_info = file_get_contents("data/carlos/$chat_id.txt");
$cas = file_get_contents("data/carlos/$chat_id/crlo.txt");
$cas1 = explode(" \n",$cas);
$str = str_replace($from_id,"",$from_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $username ."] *𓆪* " . "»" . " *𓆩* `". $from_id ."` *𓆪* ","",$cas1);
file_put_contents("data/carlos/$chat_id.txt",$str);
file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
$from_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($from_id,"",$from_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $username ."] *𓆪* " . "»" . " *𓆩* `". $from_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/mmyaz/$chat_id.txt",$str);
file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('restrictChatMember',[
'user_id'=>$from_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
".$em." حبيبي♥ ⋙「 [$first_name](tg://user?id=$from_id) 」 
".$em." تم تنزيلك من جميع الرتب
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
elseif($rt && $text =="رفع مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." العضو ⋙ [$re_name](tg://user?id=$re_id)
".$em." تم ترقية ليصبح مشرف  
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false
]);
	}
}
elseif($rt && $text =="تنزيل مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." العضو ⋙ [$re_name](tg://user?id=$re_id)
".$em." تم تنزيله من قائمة المشرفين
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
	}
}

$ti = explode("وضع لقب",$text);
if($ti[1] && $rt){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri) || in_array($from_id,$carlos) || in_array($from_id,$nazar)) {
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
'can_change_info'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>false,
'can_delete_messages'=>false,
'can_invite_users'=>true,
'can_promote_members'=>false,
]);
bot('setChatAdministratorCustomTitle',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
'custom_title'=>$ti[1],
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." تم وضع ($ti[1]) لقب اليه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}else{
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*✵ عذرأ حبيبي♥ الامر ليس اليك*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
elseif($rt and $text == "لقبه"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri) || in_array($from_id,$carlos) || in_array($from_id,$nazar)) {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$re_id"));
$b = $a->result->custom_title;
if($b){
$b = "$b";}
elseif(!$b){
$b = "✵ ليس لديه لقب";}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." لقبه ⋙ $b
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}else{
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*✵ عذرأ حبيبي♥ الامر ليس اليك*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
elseif($text == "لقبي"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$from_id"));
$b = $a->result->custom_title;
if($b){
$b = "$b";}
elseif(!$b){
$b = "✵ ليس لديه لقب";}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." حبيبي♥ ⋙「 [$re_name](tg://user?id=$re_id) 」 
".$em." لقبك ⋙ $b
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}

mkdir("msiss/$chat_id");
$rt = $update->message->reply_to_message;
$kakeii = json_decode(file_get_contents("msiss/$chat_id/miss.json"),1);
if($rt && $text == "كتم" or $rt && $text == "اكتم" and $text==$settings["information"]["ktm"] ){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." العضو ⋙ [$re_name](tg://user?id=$re_id)
".$em." تم كتمه من المجموعة",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$kakeii['kakei'][] = "$re_id";
file_put_contents("msiss/$chat_id/miss.json",json_encode($kakeii));
}else
{
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>"- لا استطيع كتم - ( $infor )",
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>$inlinebutton,
]);
}
}
}
if ($rt && $text == "الغاء كتم"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العضو ⋙ [$re_name](tg://user?id=$re_id)
".$em." تم الغاء الكتم بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($re_id,$kakeii["kakei"]);
unset($kakeii["kakei"][$key]);
$kakeii["kakei"] = array_values($kakeii["kakei"]); 
$kakeii = json_encode($kakeii,true);
file_put_contents("msiss/$chat_id/miss.json",$kakeii);
}else
{
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>"⋄︙لا استطيع الغاء كتم - ( $infor )",
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>$inlinebutton,
]);
}
}
}
if ($message && in_array($from_id,$kakeii['kakei'])){
bot('deletemessage',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
]);
}
$kakeiic = $kakeii['kakei'];
if( $text == "المكتومين" or $text == "مكتومين" and $kakeii['kakei']!== NULL){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$kakeiic = $kakeii['kakei'];
for($z = 0;$z <= count($kakeiic)-1;$z++){
$Apikakeiic = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$kakeiic[$z]"));
$Usermkakeiic =$Apikakeiic->result->username;
$namekakeiic =$Apikakeiic->result->first_name;
$idkakeiic =$Apikakeiic->result->id;
$result = $result."⋄︙ $z ← [$namekakeiic](https://t.me/$Usermkakeiic) - $idkakeiic"."\n";
}
if(!$result){
$result3 = "⋄︙لايوجد شخص في القائمه";
}elseif($result){
$result3 = "$result";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙اليك قائمة المكتومين : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result3",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
 ]);
}
}
if($text == "مسح المكتومين" or $text == "مسح مكتومين"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
file_put_contents("msiss/$chat_id/miss.json","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em."  تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
$silent = $settings["silentlist"];
if($rt && $text == "تقييد" or $rt && $text == "تقيد" and $text==$settings["information"]["tkeed"] and !in_array($re_id,$silent)){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true){
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>false,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." العضو - [$re_name](tg://user?id=$re_id)
".$em." تم تـقـيده بـنـجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ قم بتفيل البوت اولا",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ لايمكنني تقييد الادمنية او المدراء اواو المميزين",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text, "تقييد لمدة ") !== false && $rt) {
if(!in_array($re_id,$silent)){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
$add = $settings["information"]["added"];
$we = str_replace(['كتم لمدة '],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
 bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"".$em." العضو - [$re_name](tg://user?id=$re_id)
".$em." تم تـقـيده لـمدة $we بـنـجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*60,
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
 'text'=>"⋄︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙خطاء قم بأختيار عدد من 1 الي 1000
",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>"✵ لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
'reply_markup'=>$inlinebutton,
]);
}
}
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if($rt and $text == "الغاء تقيد" or $rt and $text == "الغاء تقييد" or $rt and $text == "الغاء التقييد"){
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"".$em." العضو - [$re_name](tg://user?id=$re_id)
".$em." تم الـغـاء تـقـيده بـنـجاح
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
}
$silent = $settings["silentlist"];
if($text == "المقيدين" or $text == "قائمة المقيدين" or $text == "قائمه المقيدين" and $settings["silentlist"]!== NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$Apimktom = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$silent[$z]"));
$Usermktom =$Apimktom->result->username;
$result = $result."┇$z- @$Usermktom"."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." اليك قائمة المقيدين :
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$result",
 ]);
}
}
if($text == "مسح المقيدين" or $text == "مسح المقيديين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true){
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
'user_id'=>$silent[$z],
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." تم مسح المقيدين بنجاح
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text == "ابراج" or $text == "الابراج"){
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"
⋄︙حبيبي♥ ← [$first_name](tg://user?id=$from_id)
⋄︙قم بأختيار برجك ليتم العرض الاحداث
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الحمل.",'callback_data'=>"الحمل#$from_id2"],['text'=>"الثور.",'callback_data'=>"الثور#$from_id2"],['text'=>"الجوزاء.",'callback_data'=>"الجوزاء#$from_id2"]],
[['text'=>"السرطان.",'callback_data'=>"السرطان#$from_id2"],['text'=>"الاسد.",'callback_data'=>"الاسد#$from_id2"],['text'=>"العذراء.",'callback_data'=>"العذراء#$from_id2"]],
[['text'=>"الميزان.",'callback_data'=>"الميزان#$from_id2"],['text'=>"العقرب.",'callback_data'=>"العقرب#$from_id2"],['text'=>"القوس.",'callback_data'=>"القوس#$from_id2"]],
[['text'=>"الجدي.",'callback_data'=>"الجدي#$from_id2"],['text'=>"الدلو.",'callback_data'=>"الدلو#$from_id2"],['text'=>"الحوت.",'callback_data'=>"الحوت#$from_id2"]],
[['text'=>"𝘁??𝗲𝗺 𝗰𝗮𝗿𝗹𝗼𝘀.",'url'=>"https://t.me/QQ2_Q"]],
]])]);}
$ex = explode("#",$data);
$array = array("الحمل","الثور","الجوزاء","السرطان","الاسد","العذراء","الميزان","العقرب","القوس","الجدي","الدلو","الحوت");
if(in_array($ex[0],$array)){
if($ex[1] == $from_id2){
$get = file_get_contents("https://ammar-jned.zzz.com.ua/apii/Api-abrage.php?Text=$ex[0]");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
*$get*
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الحمل.",'callback_data'=>"الحمل#$from_id2"],['text'=>"الثور.",'callback_data'=>"الثور#$from_id2"],['text'=>"الجوزاء.",'callback_data'=>"الجوزاء#$from_id2"]],
[['text'=>"السرطان.",'callback_data'=>"السرطان#$from_id2"],['text'=>"الاسد.",'callback_data'=>"الاسد#$from_id2"],['text'=>"العذراء.",'callback_data'=>"العذراء#$from_id2"]],
[['text'=>"الميزان.",'callback_data'=>"الميزان#$from_id2"],['text'=>"العقرب.",'callback_data'=>"العقرب#$from_id2"],['text'=>"القوس.",'callback_data'=>"القوس#$from_id2"]],
[['text'=>"الجدي.",'callback_data'=>"الجدي#$from_id2"],['text'=>"الدلو.",'callback_data'=>"الدلو#$from_id2"],['text'=>"الحوت.",'callback_data'=>"الحوت#$from_id2"]],
[['text'=>"𝘁𝗲𝗲𝗺 𝗰𝗮𝗿𝗹𝗼𝘀.",'url'=>"https://t.me/QQ2_Q"]],
]]),'parse_mode'=>"MarkDown",
]);}}
$array = array("الحمل","الثور","الجوزاء","السرطان","الاسد","العذراء","الميزان","العقرب","القوس","الجدي","الدلو","الحوت");
if(in_array($text,$array)){
bot('sendmessage',[
      'chat_id'=>$chat_id2,
      "text"=>"
*$get*
      ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الحمل.",'callback_data'=>"الحمل#$from_id2"],['text'=>"الثور.",'callback_data'=>"الثور#$from_id2"],['text'=>"الجوزاء.",'callback_data'=>"الجوزاء#$from_id2"]],
[['text'=>"السرطان.",'callback_data'=>"السرطان#$from_id2"],['text'=>"الاسد.",'callback_data'=>"الاسد#$from_id2"],['text'=>"العذراء.",'callback_data'=>"العذراء#$from_id2"]],
[['text'=>"الميزان.",'callback_data'=>"الميزان#$from_id2"],['text'=>"العقرب.",'callback_data'=>"العقرب#$from_id2"],['text'=>"القوس.",'callback_data'=>"القوس#$from_id2"]],
[['text'=>"الجدي.",'callback_data'=>"الجدي#$from_id2"],['text'=>"الدلو.",'callback_data'=>"الدلو#$from_id2"],['text'=>"الحوت.",'callback_data'=>"الحوت#$from_id2"]],
[['text'=>"𝘁𝗲𝗲𝗺 𝗰𝗮𝗿𝗹𝗼𝘀.",'url'=>"https://t.me/QQ2_Q"]],
]]),'parse_mode'=>"MarkDown",
]);}

$from_id = $message->from->id;
$username = $update->message->from->username;
$rt = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
$iid = $rep->id; 
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$title = $message->chat->title;
$name = $message->from->first_name;
$idbot = $id_bot; 
if($rt and !in_array($re_id,$from_id) and !in_array($re_id,$idbot)){
if($text == "نادي"){
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
 if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => '".$em." العضو ← ['.$re_name.'](tg://user?id=$re_id)  
".$em." تمت مناداته بواسطة 
".$em." » ['.$name.'](tg://user?id=$from_id)
',
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
bot('sendmessage',[
'chat_id' =>$re_id,
'text' => "
".$em." حبيبي♥ ←  [$re_name](tg://user?id=$re_id)
".$em." قام ← [$name](tg://user?id=$from_id)  بمناداتك  
".$em." name group : $title

⋄︙$link
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
}
if($rt and in_array($re_id,$from_id)){
if($text == "نادي"){
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => '⋄︙لايمكنك منادات نفسك يا اهبل.🙂💕',
'reply_to_message_id' =>$message->message_id,
]);}}
if($rt and in_array($re_id,$idbot)){
if($text == "نادي"){
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => '⋄︙شلون اكدر انادي نفسي يا اهبل.🙂💕',
'reply_to_message_id' =>$message->message_id,
]);}}
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = $sudo; // ايديك.
$bot_id       = $idbot; // ايدي بوتك .
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;

mkdir("Fri3nd_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "⋄ توجيه عام" || $text == "اذاعه للكل بالتوجيه" || $text =="🖇¦ اذاعه عام توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*✵⁞ اهلا حبيبي♥ الـمطور ، 
⌯⁞ قم بتوجيه رسالتك الان ...
*
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*✵⁞ اهلا حبيبي♥ الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى ⋙ $MOhaMMed عضوا
و ⋙ $MoHaMMedd مجموعة*
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
} 

if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}

if($text == "اذاعه خاص" || $text =="⋄ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*✵⁞ اهلا حبيبي♥ الـمطور ، قم بأرسال رسالتك
⌯⁞ ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*✵⁞ اهلا حبيبي♥ الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى $MOhaMMed عضوا ،*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" ||$text == "⋄ اذاعه عام" || $text =="📤¦  عام" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*✵⁞ اهلا حبيبي♥ الـمطور ، قم بأرسال رسالتك
⌯⁞ ملاحظةهہ : يمكنك استعمال الماركداون ، *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*
✵⁞ اهلا حبيبي♥ الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى ⋙ $MOhaMMed عضوا
و ⋙ $MoHaMMedd مجموعة*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "اذاعه خاص بالتوجيه" || $text == "⋄ توجيه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*✵⁞ اهلا حبيبي♥ الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*✵⁞ اهلا حبيبي♥ الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى ⋙ $MOhaMMed عضوا
و ⋙ $MoHaMMedd مجموعة*",
'parse_mode'=>"MARKDOWN",
   'reply_to_message_id'=>$message->message_id
   ]);
}

if($from_id == $sudo){
if($text == "⋄ الاحصائيات"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"✵ احصائيات البوت 

⌯ عدد المجموعات ~ $c
⌯ عدد المشتركين ~ $MOhaMMed
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}
if($from_id == $sudo){
if($text == "⋄ المشتركين" or $text == "المشتركين"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"✵ احصائيات المشتركين

⌯ عدد المشتركين ~ $MOhaMMed
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}
if($from_id == $sudo){
if($text == "⋄ المجموعات" or $text == "المجموعات"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"✵ احصائيات المجموعات

⌯ عدد المجموعات ~ $c
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}


elseif($text =="⋄ حظر مجموعه" ){
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 
⌯⁞ حسننا حبيبي♥ المطور،
⌯⁞ الان ارسل غادر + ايدي مجموعة
√
",
'reply_to_message_id'=>$message_id,
 ]);
}
}
}
elseif(strpos($text  , "غادر" ) !== false or strpos($text  , "/left " ) !== false) {
$text = str_replace(['/left ','غادر'],'',$text );
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙تم حظر مجموعه بنجاح 
━━━━━━━━━━━━━
ايدي المجموعه: $text
━━━━━━━━━━━━━
",
  ]);
bot('LeaveChat',[
  'chat_id'=>$text,
  ]);
unlink("data/$text.json");
}
}
}
####
if($text =="⋄ تعطيل الترحيب" ){
if (in_array($from_id,$Dev)){
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
".$em." تم تعطيل الترحيب عام 
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("data/welco.json","✖");
}
}
if($text =="⋄ تفعيل الترحيب" ){
if (in_array($from_id,$Dev)){
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
".$em." تم تفعيل الترحيب عام 
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("data/welco.json","✔");
}
}

$wel = file_get_contents("data/wel.json");
if($text=="⋄ جلب الترحيب" and $wel == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { رد الترحيب الحالي } •

".$em." اهلأ انا اسمي ← $namebot

".$em." وزير ملف الصحه وحماية القروبات من التخريب
".$em." خالي من الاعلانات امن 
".$em." قم برفعي مشرف وارسل كلمة تفعيل
".$em." مطور البوت ← [$DevUser]",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/FT_III"]],
]])
]);
}}}
$wel = file_get_contents("data/wel.json");
if($text=="⋄ جلب الترحيب" and $wel != null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { رد الترحيب الجديد } •

$wel
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/FT_III"]],
]])
]);
}}}

$wel = file_get_contents("data/wel.json");
$well = file_get_contents("data/well.json");
if ($text == "⋄ تعين الترحيب" or $text == "تعيين الترحيب" and in_array($from_id,$Dev)){
file_put_contents("data/well.json","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
".$em." قم بأرسال كليشة الترحيب عام
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $well =="nam" and in_array($from_id,$Dev)){
file_put_contents("data/wel.json",$text); 
file_put_contents("data/well.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
".$em." تم تعين كليشة الترحيب عام 
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⋄ حذف الترحيب" or $text == "حذف الترحيب" and in_array($from_id,$Dev)){
file_put_contents("data/wel.json","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
".$em." ابشر حذفـت  كليشة الترحيب عام 
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
####
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)){
if($rt and $text == "ضع صوره" or $text == "ضع صورة" and $re_msd->photo){
 $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path; file_put_contents("$chat_id.jpg",file_get_contents($file));
bot('setChatPhoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("$chat_id.jpg"),
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
".$em." ابشر عيـنت  صورة المجموعة  
".$em." بواسطة* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("$chat_id.jpg");
}
}
if($status != 'creator' or $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$carlos) and !in_array($from_id,$nazar) and !in_array($from_id,$eri)){
if($rt and $text == "ضع صوره" or $text == "ضع صورة" and $re_msd->photo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
- هذا الامر ليس لك   
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}