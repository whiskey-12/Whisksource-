<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

$kdeveloper = file_get_contents("kdevelopers.txt");
$kdevelopers = file_get_contents("kdeveloper.txt");
if ($text == "⋄ تعين كليشة المطور" || $text == "وضع كليشة المطور" and in_array($from_id,$Dev)){
file_put_contents("kdevelopers.txt","namdev");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"⋄︙حسننا حبيبي المطور،
⋄︙الان ارسل كليشة المطور
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kdeveloper =="namdev" and in_array($from_id,$Dev)){
file_put_contents("kdeveloper.txt",$text); 
file_put_contents("kdevelopers.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
⋄︙حسننا حبيبي المطور،
⋄︙ تم حفظ  كليشة المطور متاعك
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "المطور" and $kdevelopers != null || $kdevelopers != " "){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$kdevelopers",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}
if($text == "المطور"and $kdevelopers == null || $kdevelopers == " "){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[$NameDev](https://t.me/$buy)",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}
if ($text == "⋄ حذف كليشة المطور" or $text == "مسح المطور"){
if (in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ اهلا حبيبي ~⪼ $info 
⋄︙ تم حذف كليشة المطور
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("kdeveloper.txt",""); 
file_put_contents("kdevelopers.txt","");
}
}

if($text =="⋄ تعطيل الاشتراك"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✵⁞ تم تعطيل الاشتراك الاجباري",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("data/setchannel.json","معطل ✖️");}}

if($text =="⋄ تفعيل الاشتراك"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✵⁞ تم تفعيل الاشتراك الاجباري",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("data/setchannel.json","مفعل ✔️");}}
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$from_id2 = $update->callback_query->from->id;
if($text =="من سيربح المليون"){
file_put_contents("game/$chat_id/game.txt","gamemil");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." اليك لعبة من سيربح المليون 
".$em." اتبع القوانين - مندون تكرار 
".$em." اذا لم يعجبك العب اضغط الغاء"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- ابدء الان','callback_data'=>"mai1"],['text'=>'✵ الغاء ✵' ,'callback_data'=>"deletmil"]],
[['text'=>"- مبرمج السورس",'url'=>"t.me/$buy"]],
]])
]); 
}
if($data == "nd3" ){
file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." تم العودة الان
".$em." اليك لعبة من سيربح المليون 
".$em." اتبع القوانين - مندون تكرار 
".$em." اذا لم يعجبك العب اضغط الغاء",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵ ابدء ✵' ,'callback_data'=>"mai1"],['text'=>'✵ الغاء ✵' ,'callback_data'=>"deletmil"]],
[['text'=>"✵ مبرمج السورس ✵",'url'=>"t.me/$buy"]],
]])
]); 
}
if($data == "nb" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." جـابـتـك كانـت خـاطـئـة لـلاسـف‼️",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵ رجوع ✵' ,'callback_data'=>"nd3"]],
[['text'=>'✵ الغاء ✵' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "nb1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." قـد خـسـرت لـلاسـف اجـابـتـك كـانـت خـاطـئـه‼️",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵ رجوع ✵' ,'callback_data'=>"nd3"]],
[['text'=>'✵ الغاء ✵' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai1" ){
file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." مـا هـي عـاصـمـة ليبيا",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ بنغازي ⁞✵' ,'callback_data'=>"nb1"]],
[['text'=>'✵⁞ طرابلس ⁞✵' ,'callback_data'=>"mai2"]],
[['text'=>'✵⁞ المرج ⁞✵' ,'callback_data'=>"nb"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai2" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ اللي بعدو طايح سعدو⁞✵' ,'callback_data'=>"mil3"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil3" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." كم عدد فقرات عنق الزرافة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ خمسه ⁞✵' ,'callback_data'=>"nb1"]],
[['text'=>'✵⁞ سبعه ⁞✵' ,'callback_data'=>"mai4"]],
[['text'=>'✵⁞ ثلاث ⁞✵' ,'callback_data'=>"nb"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai4" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ اللي بعدو طايح سعدو⁞✵' ,'callback_data'=>"mil5"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil5" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙كم قلب للأخطبوطة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ واحد ⁞✵' ,'callback_data'=>"nb1"]],
[['text'=>'✵⁞ ثلاث ⁞✵' ,'callback_data'=>"mai6"]],
[['text'=>'✵⁞ ثنين ⁞✵' ,'callback_data'=>"nb"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai6" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ اللي بعدو طايح سعدو⁞✵' ,'callback_data'=>"mil7"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil7" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙ماهو اكبر اقتصاد للمواد المحترقه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ الفحم ⁞✵' ,'callback_data'=>"nb1"]],
[['text'=>'✵⁞ البانزين ⁞✵' ,'callback_data'=>"mai8"]],
[['text'=>'✵⁞ الغاز ⁞✵' ,'callback_data'=>"nb"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai8" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ اللي بعدو طايح سعدو⁞✵' ,'callback_data'=>"mil9"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil9" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙من هو خاتم الانبياء ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ النبي محمد ⁞✵' ,'callback_data'=>"mai10"]],
[['text'=>'✵⁞ النبي عيسئ ⁞✵' ,'callback_data'=>"nb1"]],
[['text'=>'✵⁞ النبي ابراهيم ⁞✵' ,'callback_data'=>"nb"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai10" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ اللي بعدو طايح سعدو⁞✵' ,'callback_data'=>"mil11"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil11" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙ماهي عاصمة فرنسا",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ لندن ⁞✵' ,'callback_data'=>"nb1"]],
[['text'=>'✵⁞ باريس ⁞✵' ,'callback_data'=>"mil12"]],
[['text'=>'✵⁞ واشنطن ⁞✵' ,'callback_data'=>"nb"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mil12" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊
⋄︙تم انتهاء الاسئلة يمكنك العودة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ العودة ⁞✵' ,'callback_data'=>"nd3"]],
[['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
$game = json_decode(file_get_contents('data/game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("data/game.txt");
$game1 = explode("\n",$get_game);
 if($text =="الالعاب" or $text =="العاب"){
 $lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){	
file_put_contents("game/$chat_id/game.json","game");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙حبيبي ← [$name](tg://user?id=$from_id)
⋄︙اليك قائمة الالعاب 
⋄︙نقاطك حاليأ ← .".$game['game'][$chat_id][$from_id].".
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ معاني ⋄' ,'callback_data'=>"man1"],['text'=>'⋄ محيبس ⋄' ,'callback_data'=>"mas"]],
[['text'=>'⋄ قريبأ ⋄' ,'callback_data'=>"OFF"],['text'=>'⋄ قريبأ ⋄' ,'callback_data'=>"OFF"]],
[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
[['text'=>"⋄ قناة السورس ⋄",'url'=>"t.me/TH1BS"]],
]])
]); 
}
}
if($data == "back" ){
file_put_contents("game/$chat_id/game.json","game");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"︙حبيبي ← [$name2](tg://user?id=$from_id2)
⋄︙تم العودة الي قائمة الالعاب
⋄︙نقاطك حاليأ ← .".$game['game'][$chat_id2][$from_id2].".",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ معاني ⋄' ,'callback_data'=>"man1"],['text'=>'⋄ محيبس ⋄' ,'callback_data'=>"mas"]],
[['text'=>'⋄ قريبأ ⋄' ,'callback_data'=>"OFF"],['text'=>'⋄ قريبأ ⋄' ,'callback_data'=>"OFF"]],
[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
[['text'=>"⋄ قناة السورس ⋄",'url'=>"t.me/$devchink"]],
]])
]); 
}
if($data == "cht" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙اجـابـتـك كانـت خـاطـئـة لـلاسـف",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],
[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "cht1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙لقـد خـسـرت لـلاسـف اجـابـتـك كـانـت خـاطـئـه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],
[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man1" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حبيبي ماهو معني ← 🐴",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ حصان ⋄' ,'callback_data'=>"man2"]],
[['text'=>'⋄ مطي ⋄' ,'callback_data'=>"cht"]],
[['text'=>'⋄ كلب ⋄' ,'callback_data'=>"cht1"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man2" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ اللي بعدو طايح سعدو⋄' ,'callback_data'=>"man3"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man3" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حبيبي ماهو معني ← 🦒",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ فيل ⋄' ,'callback_data'=>"cht"]],
[['text'=>'⋄ زرافه ⋄' ,'callback_data'=>"man4"]],
[['text'=>'⋄ بقرة ⋄' ,'callback_data'=>"cht1"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man4" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ اللي بعدو طايح سعدو⋄' ,'callback_data'=>"man5"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man5" ){
file_put_contents("game/$chat_id/game.json","game");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حبيبي ماهو معني ← 🦁",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ خروف ⋄' ,'callback_data'=>"cht1"]],
[['text'=>'⋄ ذئب ⋄' ,'callback_data'=>"cht"]],
[['text'=>'⋄ اسد ⋄' ,'callback_data'=>"man6"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man6" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ اللي بعدو طايح سعدو⋄' ,'callback_data'=>"man7"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man7" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حبيبي ماهو معني ← 🐫",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ جمل ⋄' ,'callback_data'=>"man8"]],
[['text'=>'⋄ زرافه ⋄' ,'callback_data'=>"cht"]],
[['text'=>'⋄ حصان ⋄' ,'callback_data'=>"cht1"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man8" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ اللي بعدو طايح سعدو⋄' ,'callback_data'=>"man9"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man9" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حبيبي ماهو معني ← 🐒",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ قرد ⋄' ,'callback_data'=>"man10"]],
[['text'=>'⋄ شاذي ⋄' ,'callback_data'=>"cht"]],
[['text'=>'⋄ فأر ⋄' ,'callback_data'=>"cht1"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man10" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ اللي بعدو طايح سعدو⋄' ,'callback_data'=>"man11"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man11" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حبيبي ماهو معني ← 🐄",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ بقره ⋄' ,'callback_data'=>"man12"]],
[['text'=>'⋄ اسد ⋄' ,'callback_data'=>"cht"]],
[['text'=>'⋄ ذئب ⋄' ,'callback_data'=>"cht1"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man12" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ اللي بعدو طايح سعدو⋄' ,'callback_data'=>"man13"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man13" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حبيبي ماهو معني ← 🐏",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ كلب ⋄' ,'callback_data'=>"cht1"]],
[['text'=>'⋄ نعجه ⋄' ,'callback_data'=>"cht"]],
[['text'=>'⋄ خروف ⋄' ,'callback_data'=>"man14"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man14" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ اللي بعدو طايح سعدو⋄' ,'callback_data'=>"man15"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man15" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙حبيبي ماهو معني ← 🐁",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ فأر ⋄' ,'callback_data'=>"man16"]],
[['text'=>'⋄ قنفذ ⋄' ,'callback_data'=>"cht"]],
[['text'=>'⋄ قط ⋄' ,'callback_data'=>"cht1"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man16" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ اللي بعدو طايح سعدو⋄' ,'callback_data'=>"man9"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data=="mas"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas1"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas112"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يرجع 😹😹✨",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],
[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas113"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يرجع 😹😹✨",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],
[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas1"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ملاعبي ثاريتك☹️ 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⋄ اعادة العب ⋄",'callback_data'=>"mas2"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas2"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas3"]],
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas3"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ملاعبي ثاريتك☹️ 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⋄ اعادة العب ⋄",'callback_data'=>"mas4"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas4"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas5"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas5"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ملاعبي ثاريتك☹️ 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⋄ اعادة العب ⋄",'callback_data'=>"mas6"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas6"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>"👊",'callback_data'=>"mas7"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas7"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ملاعبي ثاريتك☹️ 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⋄ اعادة العب ⋄",'callback_data'=>"mas8"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas8"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' =>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas9"]],
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas9"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ملاعبي ثاريتك☹️ 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⋄ اعادة العب ⋄",'callback_data'=>"mas10"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"back"]],[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="deletmil"){
bot ('EditMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"⋄︙تم الغاء قائمة العب بنجاح",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);
sleep(15);
bot('deletemessage',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message->message_id,
]);}
$m = "⋄︙حبيبي ← [$name](tg://user?id=$from_id)
⋄︙الان قم ب تحديد الرتبه";
$time = date('h:i A');
date_default_timezone_set('Asia/Baghdad');
$idcarlos = file_get_contents("data/carlos.json");
if($re and $text == "تنزيل" and $text == "رفع"){
file_put_contents("data/carlos.json","$re_id");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ قائمة الرفع ⋄' ,'callback_data'=>"mnas"],['text'=>'⋄ قائمة تنزيل ⋄' ,'callback_data'=>"mnas"]],
[['text'=>'⋄ منشئ اساسي ⋄' ,'callback_data'=>"mnas"],['text'=>'⋄ منشئ اساسي ⋄' ,'callback_data'=>"mnas"]],
[['text'=>'⋄ منشئ ⋄' ,'callback_data'=>"mn"],['text'=>'⋄ منشئ ⋄' ,'callback_data'=>"delmd"]],
[['text'=>'⋄ مدير ⋄' ,'callback_data'=>"md"],['text'=>'⋄ مدير ⋄' ,'callback_data'=>"delmd"]],
[['text'=>'⋄ بوديقارد  ⋄' ,'callback_data'=>"ad"],['text'=>'⋄ بوديقارد  ⋄' ,'callback_data'=>"delad"]],
[['text'=>'⋄ مميز ⋄' ,'callback_data'=>"mz"],['text'=>'⋄ مميز ⋄' ,'callback_data'=>"delmz"]],
[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
[['text'=>"⋄ قناة السورس ⋄",'url'=>"t.me/$devchink"]],
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
}}}}