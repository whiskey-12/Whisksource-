<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);


$kock = file_get_contents("kock.txt");
$kocke = file_get_contents("kocke.txt");
if ($text == "وضع عدد التفعيل" or $text == "وضع شرط التفعيل" or $text == "⋄ وضع عدد التفعيل" and in_array($from_id,$Dev)){
file_put_contents("kock.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
".$em." تمام حبيبي الوسكي دز العدد لي تبيه🤤♥
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kock =="nam" and in_array($from_id,$Dev)){
file_put_contents("kocke.txt",$text); 
file_put_contents("kock.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
".$em." تم حفظ العدد 
".$em." عدد التفعيل - $text
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

$sek = file_get_contents("sek.txt");
$sekk = file_get_contents("sekk.txt");
if ($text == "تفعيل بوت الوسكي" or $text == "⋄ تفعيل بوت الوسكي" and in_array($from_id,$Dev)){
file_put_contents("sek.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
".$em." حسنأ حبيبي♥ - المطور
".$em." ارسل (`نعم`) لتأكيد الامر
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "نعم" && $sek =="nam" and in_array($from_id,$Dev)){
file_put_contents("sekk.txt","للمطور"); 
file_put_contents("sek.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
".$em." حسنأ حبيبي♥ - المطور
".$em." الان اصبح وضع البوت 
 للمطور فقط
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$sek = file_get_contents("sek.txt");
$sekk = file_get_contents("sekk.txt");
if ($text == "تفعيل بوت الخدمي" or $text == "⋄ تفعيل بوت الخدمي" and in_array($from_id,$Dev)){
file_put_contents("sek.txt","namm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
".$em." حسنأ حبيبي♥ - المطور
".$em." ارسل (`نعم`) لتأكيد الامر
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "نعم" && $sek =="namm" and in_array($from_id,$Dev)){
file_put_contents("sekk.txt","متاح"); 
file_put_contents("sek.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
".$em." حسنأ حبيبي♥ - المطور
".$em." لان اصبح وضع البوت 
متاح للكل
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
if ($tc == 'group' | $tc == 'supergroup'){
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
 if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
$add = $settings["information"]["added"];
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." مبروك فعلت المجموعه خلي الباقي شوري✓
".$em." بواسطة - [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,	
 ]);  
bot('sendmessage',[
'chat_id'=>$Dev[0],
'text'=>"
✵⁞ تم تفعيل مجموعه جديده
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
✵⁞ اسم المجموعه - $namegroup
✵⁞ ايدي المجموعه - $chat_id
✵⁞ رابط المجموعه - [اضغط هنا]($link)
✵⁞ عدد المجموعه - $MEMH
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
✵⁞ بواسطة - [$first_name](tg://user?id=$from_id)
✵⁞ ايديه - $from_id
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]); 
$dateadd = date('Y-m-d', time());
$getlink = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."✵⁞"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
file_put_contents("data/$chat_id/idpic.txt","✔");
file_put_contents("data/$chat_id/morder.txt","
".$em." هناك {5} اوامر لعرضها
‌‏━ ━ ‏━‏ ━‏ ━‏ ━‏ ━‏ ━‏ ━‏
".$em." م1 ~⪼ لعرض اوامر الحمايه
".$em." م2 ~⪼ لعرض اوامر بوديقارديه
".$em." م3 ~⪼ لعرض اوامر المدراء
".$em." م4 ~⪼ لعرض اوامر المنشئين
".$em." م5 ~⪼ لعرض اوامر المطورين
‌‏━ ━ ‏━‏ ━‏ ━‏ ━‏ ━‏ ━‏ ━‏ ━‏ ━‏
".$em." CH ← $DevUser
");
}
}
}
file_put_contents("data/$chat_id/idpic","مفعل");
file_put_contents("data/$chat_id/ser.txt","معطل");
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
              "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفعل",
                "getlink": "مفعل",
                "audio": "مفتوح",
                "iduser": "مفعل",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "spam": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفعل",
				"zhr": "مفعله",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"userk": "مفتوح",
				"userw": "مفتوح",
				"userr": "مفتوح",
				"forwardk": "مفتوح",
				"forwardr": "مفتوح",
				"forwardw": "مفتوح",
				"linkw": "مفتوح",
				"linkr": "مفتوح",
				"linkk": "مفتوح",
				"botk": "مفتوح",
				"rdodsg": "مفعله",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفعله",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"bye": "مصكر",
			"add": "مفتوح",
			"spamx": "5",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العسل ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك حبيبي♥",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';
$settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
        file_put_contents("data/$chat_id/ser.txt","مفعل");
        file_put_contents("data/$chat_id/idpic.txt","مفعل");
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." البوت مفعل من زمان ياحجي
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == null){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
if ($tc == 'group' | $tc == 'supergroup'){
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
if($link != null){
$link = $link;
$link2 = $link;
}else{
$link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
}
$add = $settings["information"]["added"];
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
".$em." مبروك فعلت المجموعه خلي الباقي شوري✓
".$em." بواسطة - [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,		
 ]);  
 bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
✵⁞ تم تفعيل مجموعه جديده
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
✵⁞ اسم المجموعه - $namegroup
✵⁞ ايدي المجموعه - $chat_id
✵⁞ رابط المجموعه - [اضغط هنا]($link)
✵⁞ عدد المجموعه - $MEMH
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
✵⁞ بواسطة - [$first_name](tg://user?id=$from_id)
✵⁞ ايديه - $from_id
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
 if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."✵⁞"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
file_put_contents("data/$chat_id/idpic.txt","✔");
}
}
}
file_put_contents("data/$chat_id/ser.txt","معطل");
file_put_contents("data/$chat_id/spamxe.txt","100");
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                             "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفعل",
                "getlink": "مفعل",
                "audio": "مفتوح",
                "iduser": "مفعل",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "spam": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفعل",
				"zhr": "مفعله",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"userk": "مفتوح",
				"userw": "مفتوح",
				"userr": "مفتوح",
				"forwardk": "مفتوح",
				"forwardr": "مفتوح",
				"forwardw": "مفتوح",
				"linkw": "مفتوح",
				"linkr": "مفتوح",
				"linkk": "مفتوح",
				"botk": "مفتوح",
				"rdodsg": "مفعله",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفعله",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفعل",
			"bye": "معطل",
			"add": "مفتوح",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العسل ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك حبيبي♥",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
        file_put_contents("data/$chat_id/ser.txt","مفعل");
        file_put_contents("data/$chat_id/idpic.txt","مفعل");
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
".$em." البوت مفعل من زمان ياحجي
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH <= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
".$em." عذرأ حبيبي♥ 
".$em." عدد المجموعه قليل 
".$em." العدد المطلوب - $kocke
",'parse_mode'=>"html",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,	
 ]);  
 }
 }
 }
 }
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "للمطور"){
if(!in_array($from_id,$Dev)){
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
".$em." البوت للمطور فقط 
".$em." لتفعيل البوت قم بمراسلة المطور
المطور - $DevUser",
]);
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "للمطور") {
if (in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
 if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
$add = $settings["information"]["added"];
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
".$em." مبروك فعلت المجموعه خلي الباقي شوري✓
".$em." بواسطة - [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
✵⁞ تم تفعيل مجموعه جديده
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
✵⁞ اسم المجموعه - $namegroup
✵⁞ ايدي المجموعه - $chat_id
✵⁞ رابط المجموعه - [اضغط هنا]($link)
✵⁞ عدد المجموعه - $MEMH
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
✵⁞ بواسطة - [$first_name](tg://user?id=$from_id)
✵⁞ ايديه - $from_id
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$getlink = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."✵"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
file_put_contents("data/$chat_id/idpic.txt","✔");
file_put_contents("data/$chat_id/morder.txt","
".$em." هناك {5} اوامر لعرضها
━━━━━━━━━━━━━
".$em." م1 ~⪼ لعرض اوامر الحمايه
".$em." م2 ~⪼ لعرض اوامر بوديقارديه
".$em." م3 ~⪼ لعرض اوامر المدراء
".$em." م4 ~⪼ لعرض اوامر المنشئين
".$em." م5 ~⪼ لعرض اوامر المطورين
━━━━━━━━━━━━━
".$em." CH - $DevUser
");
}
}
}
file_put_contents("data/$chat_id/ser.txt","معطل");
file_put_contents("data/$chat_id/spamxe.txt","100");
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
              "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفتوح",
                "getlink": "مفتوح",
                "audio": "مفتوح",
                "iduser": "مفتوح",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "spam": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفتوح",
				"zhr": "مفتوح",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"linkr": "مفتوح",
				"linkk": "مفتوح",
				"botk": "مفتوح",
				"userr": "مفتوح",
				"forwardr": "مفتوح",
				"rdodsg": "مصكر",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"bye": "مصكر",
			"add": "مفتوح",
			"spamx": "5",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العسل ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك حبيبي♥",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';

        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
        file_put_contents("data/$chat_id/ser.txt","مفعل");
        file_put_contents("data/$chat_id/idpic.txt","مفعل");
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." المجموعه بالتأكيد مفعله
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
]); 
}
}
}
}
if($text== 'اطلع'){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ← [$first_name](tg://user?id=$from_id)
".$em." تم الماطلعة من المجموعة بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
bot('LeaveChat',[
'chat_id'=>$chat_id,
]);
}
else
{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." عذرأ الامر ليس اليك حبيبي♥",
]);
}
}
elseif($text== 'تعطيل' ){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." تم تعطيل المجموعة بنجاح
".$em." بواسطة - [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
unlink("data/$chat_id.json");
}
}
elseif($text== "تصكير الكل"or $text== "automatic" or $text== "تصكير كل") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ← [$first_name](tg://user?id=$from_id)
".$em." تم تصكير الكل بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="مصكر";
$settings["lock"]["username"]="مصكر";
$settings["lock"]["bot"]="مصكر";
$settings["lock"]["forward"]="مصكر";
$settings["lock"]["tgservices"]="مصكر";
$settings["lock"]["contact"]="مصكر";
$settings["lock"]["is_sticker"]="مصكر";
$settings["lock"]["sticker"]="مصكر";
$settings["lock"]["gif"]="مصكر";
$settings["lock"]["voice"]="مصكر";
$settings["lock"]["fosh"]="مصكر";
$settings["lock"]["lockcharacter"]="مصكر";
$settings["lock"]["inline"]="مصكر";
$settings["lock"]["en"]="مصكر";
$settings["lock"]["photo"]="مصكر";
$settings["lock"]["markdown"]="مصكر";
$settings["lock"]["ar"]="مصكر";
$settings["lock"]["document"]="مصكر";
$settings["lock"]["video"]="مصكر";
$settings["lock"]["edit"]="مصكر";
$settings["lock"]["game"]="مصكر";
$settings["lock"]["location"]="مصكر";
$settings["lock"]["editmd"]="مصكر";
$settings["lock"]["tag"]="مصكر";
$settings["lock"]["audio"]="مصكر";
$settings["lock"]["iduser"]="مصكر";
$settings["lock"]["reply"]="مصكر";
$settings["lock"]["tgservic"]="مصكر";
$settings["lock"]["video_msg"]="مصكر";
$settings["lock"]["bot"]="مصكر";
$settings["lock"]["sigmidia"]="مصكر";
$settings["lock"]["downloadmid"]="مصكر";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"?? يجب تفعيل البوت في المجموعة
ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}}
elseif($text =="unmute all" or $text =="فتح الكل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ← [$first_name](tg://user?id=$from_id)
".$em." تم فتح الكل بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings["lock"]["username"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["forward"]="مفتوح";
$settings["lock"]["tgservices"]="مفتوح";
$settings["lock"]["contact"]="مفتوح";
$settings["lock"]["text"]="مفتوح";
$settings["lock"]["is_sticker"]="مفتوح";
$settings["lock"]["sticker"]="مفتوح";
$settings["lock"]["gif"]="مفتوح";
$settings["lock"]["voice"]="مفتوح";
$settings["lock"]["fosh"]="مفتوح";
$settings["lock"]["lockcharacter"]="مفتوح";
$settings["lock"]["inline"]="مفتوح";
$settings["lock"]["en"]="مفتوح";
$settings["lock"]["photo"]="مفتوح";
$settings["lock"]["markdown"]="مفتوح";
$settings["lock"]["ar"]="مفتوح";
$settings["lock"]["document"]="مفتوح";
$settings["lock"]["video"]="مفتوح";
$settings["lock"]["edit"]="مفتوح";
$settings["lock"]["game"]="مفتوح";
$settings["lock"]["location"]="مفتوح";
$settings["lock"]["editmd"]="مفتوح";
$settings["lock"]["tag"]="مفتوح";
$settings["lock"]["audio"]="مفتوح";
$settings["lock"]["iduser"]="مفتوح";
$settings["lock"]["reply"]="مفتوح";
$settings["lock"]["tgservic"]="مفتوح";
$settings["lock"]["video_msg"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["sigmidia"]="مفتوح";
$settings["lock"]["downloadmid"]="مفتوح";
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
}}}

if($text =="الاعدادات" or $text == "عرض"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$locklink = $settings["lock"]["link"];
$markdown = $settings["lock"]["markdown"];
$editmd = $settings["lock"]["editmd"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$rdodsg = $settings["lock"]["rdodsg"];
$ar = $settings["lock"]["ar"];
$inline = $settings["lock"]["inline"];
$en = $settings["lock"]["en"];
$is_sticker = $settings["lock"]["is_sticker"]; 
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$iduser = $settings["lock"]["iduser"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$sigchange = $settings["lock"]["downloadmid"];
$Middown = $settings["lock"]["downloadmid"];
$text = str_replace("| فعال |","","
*".$em." اعدادات المجموعه : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." التاك » { $locktag }
".$em." العربية » { $ar }
".$em." الاتجليزية » { $en }
".$em." المعرفات » { $lockusername }
".$em." التعديل » { $lockedit }
".$em." الروابط » { $locklink }
".$em." المتحركة » { $lockgif }
".$em." الصور » { $lockphoto }
".$em." الايدي » { $iduser }
".$em." الموسيقى » { $lockaudio }
".$em." البصمات » { $lockvoice }
".$em." الكلايش » { $lockcharacter }
".$em." الالعاب » { $lockgame }
".$em." التوجيه » { $lockforward }
".$em." الانلاين » { $inline }
".$em." السيئات » { $lockfosh }
".$em." الكلايش » { $lockcharacter }
".$em." الرد » { $lockreply }
".$em." الاشعارات » { $locktg }
".$em." بصمة الفيديو » { $lockvideo_note }
".$em." الموقع » { $locklocation }
".$em." الملفات » { $lockdocument }
".$em." الجهات » { $lockcontact }
".$em." الماركدوان » { $markdown }
".$em." تعديل الميديا { $locklink }
".$em." الملصقات » { $locksticker }
".$em." الدردشة » { $locktext }
".$em." البوتات » { $lockbots }
".$em." الردود » { $rdodsg }
".$em." تحويل الصيغ » { $sigchange }
".$em." تحميل الميديا » { $Middown }
".$em." الملصقات المتحركة » { $is_sticker }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
".$em." قناة البوت ← $chsource*
");
$text2 = str_replace("| غير مفعل |","","$text");
bot('sendmessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"$text2",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"꙳.اخفاء الاعدادات.꙳",'callback_data'=>'deletamr']],
]])
]); 
}
}
if( $text== "تفعيل الحمايه" or $text== "تفعيل الحماية") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ← [$first_name](tg://user?id=$from_id)
".$em." تم بالتأكيد تفعيل الحمايه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="مصكر";
$settings["lock"]["is_sticker"]="مصكر";
$settings["lock"]["sticker"]="مصكر";
$settings["lock"]["gif"]="مصكر";
$settings["lock"]["photo"]="مصكر";
$settings["lock"]["video"]="مصكر";
$settings["lock"]["edit"]="مصكر";
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
}}}}
if( $text== "تعطيل الحمايه" or $text== "تعطيل الحماية") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطة ← [$first_name](tg://user?id=$from_id)
".$em." تم بالتأكيد تعطيل الحماية
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="مفتوح";
$settings["lock"]["is_sticker"]="مفتوح";
$settings["lock"]["sticker"]="مفتوح";
$settings["lock"]["gif"]="مفتوح";
$settings["lock"]["photo"]="مفتوح";
$settings["lock"]["video"]="مفتوح";
$settings["lock"]["edit"]="مفتوح";
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
}}}}
$HAMD = file_get_contents("data/tiger.json");
$HHAMDD = file_get_contents("data/hhamdd.json");
if($text=="ضع ترحيب" or $text == "ضع الترحيب" or $text == "وضع ترحيب" or $text == "وضع الترحيب"){
file_put_contents("data/hhamdd.json","$from_id");
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." اهلا بك حبيبي♥
".$em." لان قم بارسال الترحيب
".$em." يمكنك اضافة
".$em." لعرض الاسم ← {Name}
".$em." لعرض الايدي ← {id}
".$em." لعرض المعرف ← {User}
".$em." لعرض مطور البوت ← {Dev}
".$em." لعرض اسم مجموعه ← {Grop}
".$em." لعرض الوقت ← {time}
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/tiger.json","CARLOS");
}}
if($text and $HAMD =="CARLOS" and $HHAMDD == $from_id){
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." اهلا بك حبيبي♥
".$em." تم حفظ الترحيب بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/tiiger.json","$text");
unlink("data/tiger.json");
}}
if(!@$username){
$Useeer = "لايوجد يوزر";
}elseif(@$username){
$Useeer = "@$username";
}
if($text=="الترحيب"){
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
 $times = date('h:i:s');
 $crlos = file_get_contents("data/tiiger.json");
 $text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$crlos");
$text = str_replace('{Name}',$name,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$text",'reply_to_message_id'=>$message->message_id,'parse_mode'=>"MarkDown",]);}}
// welcome enbale and disable
elseif($text== "تفعيل الترحيب" or $text == "فتح الترحيب") {
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em. "بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل الترحيب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مصكر";
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
}}}
elseif($text== "تعطيل الترحيب" or $text == "تصكير الترحيب") {
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل الترحيب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مفتوح";
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
}}}
if($update->message->new_chat_member){
	if($settings["information"]["welcome"] == "مصكر"){
if($tc == "group" | $tc == "supergroup"){
$ameer = file_get_contents("data/tiiger.json");
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$ameer");
$text = str_replace('{Name}',$name2,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$text",
'reply_to_message_id'=>$message_id,
]);
}
}}
if($text=="حذف ترحيب" or $text == "حذف الترحيب" or $text == "مسح ترحيب" or $text == "مسح الترحيب"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." تم مسح الترحيب بنجاح
",'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/tiiger.json","");
}
}
$crlos = file_get_contents("data/tiiger.json");
if($text=="الترحيب" and $crlos == null){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." حبيبي♥ لايوجد ترحيب حاليأ
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}}
$EHB = file_get_contents("data/ehb.json");
$EHBB = file_get_contents("data/ehbb.json");
if($text=="ضع التوديع"){
	file_put_contents("data/ehbb.json","$from_id");
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." اهلا بك حبيبي♥
".$em." لان قم بارسال التوديع
".$em." يمكنك اضافة
".$em." لعرض الاسم ← {Name}
".$em." لعرض الايدي ← {id}
".$em." لعرض المعرف ← {User}
".$em." لعرض مطور البوت ← {Dev}
".$em." لعرض اسم مجموعه ← {Grop}
".$em." لعرض الوقت ← {time}
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/ehb.json","ehab");
}}
if($text and $EHB =="ehab" and $EHBB == $from_id){
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." اهلا بك حبيبي♥
".$em." تم حفظ التوديع بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/eehb.json","$text");
unlink("data/ehb.json");
}}
if($text=="التوديع"){
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
 $times = date('h:i:s');
 $karlos = file_get_contents("data/eehb.json");
 $text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$karlos");
$text = str_replace('{Name}',$name2,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$text",'reply_to_message_id'=>$message->message_id,'parse_mode'=>"MarkDown",]);}}
// welcome enbale and disable
elseif($text== "تفعيل التوديع" or $text == "فتح التوديع") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل التوديع بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["bye"]="مصكر";
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
}}}
elseif($text== "تعطيل التوديع" or $text == "تصكير التوديع") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل التوديع بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["bye"]="مفتوح";
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
}}}
if($settings["information"]["bye"] == "مصكر"){
if($update->message->left_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$karlos = file_get_contents("data/eehb.json");
$newmemberuser = $update->message->left_chat_member->username;
$namenew = $update->message->left_chat_member->first_name;
$newidd = $update->message->left_chat_member->id;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$namenew","$newidd"],"$karlos");
$text = str_replace('{Name}',$name2,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
'reply_to_message_id'=>$message_id,
	]);
}
}}
if($text=="مسح التوديع"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." تم مسح التوديع بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/eehb.json","");
}
}
$karlos = file_get_contents("data/eehb.json");
if($text=="التوديع" and $karlos == null){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." حبيبي♥ لايوجد توديع حاليأ
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}}

if ($text =="تفعيل اللز" ){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$AUBEHAB) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل اللز بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["katei"]="مصكر";
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
elseif($text =="تعطيل اللز" ){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$AUBEHAB) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل اللز بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["katei"]="مفتوح";
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
if ($text =="تفعيل الحظر" ){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$AUBEHAB) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل الحظر بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["banuser"]="مصكر";
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
elseif($text =="تعطيل الحظر"){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$AUBEHAB) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل حظر بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["banuser"]="مفتوح";
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
if ( $rt && $text == "لز" or $text == "الز" and $text==$settings["information"]["kout"] ){
if ($settings["lock"]["katei"] =="مصكر"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$mmyaz) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." العسل ← [$re_name](tg://user?id=$re_id) 
".$em." تم لزه من المجموعة بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
} 
else	
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙لا استطيع لز ( $infor )",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
$kickuser = str_replace('لز ','',$text);
if ($text =="لز $kickuser" and preg_match('/([0-9])/i',$kickuser)){
if ($settings["lock"]["katei"] =="مصكر"){
$kickuser= str_replace('لز ','',$text);
$kickinfo = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$kickuser"));
$kickname =$kickinfo->result->first_name;
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && !in_array($kickuser,$Dev) && !in_array($kickuser,$manger) && !in_array($kickuser,$mmyaz) && !in_array($kickuser,$admin_user) && !in_array($kickuser,$mmyaz) && !in_array($kickuser,$developer) && !in_array($kickuser,$carlos) && !in_array($kickuser,$nazar) && !in_array($kickuser,$eri)) {
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." العسل ← [$kicmname](tg://user?id=$kickuser) 
".$em." تم لزه من المجموعة بنجاح",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
} 
else	
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙لا استطيع لز ( $infor )",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
elseif($status == "creator" || $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger) || in_array($from_id,$nazar) || in_array($from_id,$carlos) || in_array($from_id,$eri)) {
if($text == "المجموعه" or $text == "معلومات المجموعه" or $text == "معلومات المجموعة"){
$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg = explode("\n",$cmg);
$cmsg = count($cmssg);
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*
⋄︙معلومات المجموعة :-*
*ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ*
*".$em."ايدي المجموعة ؛* [$chat_id]
*".$em."اسم المجموعة ؛* [$namegroup]
*".$em."رابط المجموعة ؛* [$getlinkde]
*".$em."عدد الاعضاء ؛* $mem
*".$em."عدد الرسائل ؛،* $message_id
*".$em."عدد بوديقارديه ؛* $cmsg
*ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,]);}}

$reid_info = $settings["info_idr"]["frid_g"];
$idre = file_get_contents("ok.json");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if($text == "تعيين كليشة كشف" or $text == "تعيين كشف"){
file_put_contents("ok.json",$chat_id);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙اهلا بك حبيبي♥
⋄︙الان قم بارسال كليشة كشف
⋄︙يمكنك اضافة
⋄︙لعرض الاسم ⋙ `{الاسم}`
⋄︙لعرض الايدي ⋙ `{الايدي}`
⋄︙لعرض المعرف ⋙ `{المعرف}`
⋄︙لعرض الرتبه ⋙ `{الرتبه}`
⋄︙لعرض مطور البوت ⋙ `{المطور}`
⋄︙لعرض الوقت ⋙ `{الوقت}`
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $idre == $chat_id){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
file_put_contents("ok.json","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم تعيين كليشة الكشف
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["info_idr"]["frid_g"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "حذف كليشة كشف" or $text == "مسح كشف"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." بواسطه ← [$first_name](tg://user?id=$from_id)
".$em." تم حذف كليشة الكشف
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["info_idr"]["frid_g"]="";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$re_user = $update->message->reply_to_message->from->username;
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
$re = $update->message->reply_to_message;
if(in_array($re_id,$eri)){
$infor = "مبرمج السورس 👨‍🔧";
}
elseif(in_array($re_id,$nazar) ){
$infor = "منشئ اساسي";
}
elseif(in_array($re_id,$carlos) ){
$infor = "المنشئ";
}
elseif(in_array($re_id,$Dev) ){
$infor = "مطور اساسي";
}
elseif(in_array($re_id,$developer) ){
$infor = "مطور ثانوي";
}
elseif($statusrt == "creator"){
$infor = "المالك";
}
elseif(in_array($re_id,$manger) ){
$infor = "المدير";
}
elseif(in_array($re_id,$AUBEHAB) ){
$infor = "مدير عام ";
}
elseif(in_array($re_id,$admin_user) ){
$infor = "بوديقارد";
}
elseif(in_array($re_id,$mmyaz) ){
$infor = "عضو مميز";
}elseif($statusrt !== "creator" || $statusrt !== "administrator" || $statusrt !== "member" || !in_array($re_id,$admin_user) || !in_array($re_id,$mmyaz) || !in_array($re_id,$manger) || !in_array($re_id,$developer) ){
$infor = "فقط عضو";
}elseif($statusrt == "member" ){
$infor = "فقط عضو";
}
if(!$re_user){
$re_s = "لايوجد يوزر";
}elseif($username){
$re_s = "@$re_user";
}
$ch = "@LSS_E";
$reid_info = $settings["info_idr"]["frid_g"];
if($rt and $text == "كشف" || $text == "ك"){
$reid_info = $settings["info_idr"]["frid_g"];
	if($reid_info == null){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*
".$em." الاسم ← $re_name 
".$em." الايدي ← *'$re_id'*
".$em." المعرف ← $re_s
".$em." الرتبة ← $infor*
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"꙳.اخفاء الامر.꙳",'callback_data'=>'deletamr']],
]])
]); 
}
}

$reid_info = $settings["info_idr"]["frid_g"];
if($rt and $text == "كشف" || $text == "ك" and $text==$settings["information"]["ksh"]){
	$date1 = date("h:i:s");
$reid_info = $settings["info_idr"]["frid_g"];
	if($reid_info !== null){
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$reid_info");
$text = str_replace('{الاسم}',$re_name,$text);
$text = str_replace('{المجموعه}',$namegroup,$text);
$text = str_replace('{الايدي}',$re_id,$text);
$text = str_replace('{الرتبه}',$infor,$text);
$text = str_replace('{المعرف}',@$re_s,$text);
$text = str_replace('{المطور}',$buy,$text);
$text = str_replace('{الوقت}',$date1,$text);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$text
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}}

 $result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$count=$result["result"]["total_count"]; 
$pr = str_replace("صورتي ", "", $text);
if($text=="صورتي $pr" && $pr <= $count){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][$pr-1][0]["file_id"];
$count=$result["result"]["total_count"];var_dump(
  
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption' =>"هذه هي الصوره رقم $pr
عدد صورك $count", 'reply_to_message_id'=>$message->message_id, 
]));
}elseif($text == "صورتي $pr" && $pr > $count){
bot('sendMessage',[
'chat_id' =>$chat_id,
'text' =>"عذرا انت تمتلك $count صوره فقط",'reply_to_message_id'=>$message->message_id, 
]);
}

$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/ص/', 'ص', $d);$aa =preg_replace('/م/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
$blod1 = "http://api.telegram.org/bot".$token."/getChatMembersCount?chat_id=$chat_id";
$blod2 = file_get_contents($blod1);
$blod3 = json_decode($blod2);
$blod4 = $blod3->result;
$title = $message->chat->title;
if($text == "الساعة" or $text == "الساعه"){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"
⋄︙الساعه حاليأ ← $times $aa
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}
if($text == "الزمن" or $text == "التاريخ"){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"
⋄︙التاريخ ← ".date("Y")."/".date("n")."/".date("d")."
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}

 $setnamebot = file_get_contents("data/set.txt");
$namebot = file_get_contents("data/namebot.txt");
if(in_array($from_id,$Dev)){
if ($text == "⋄ تعيين الاسم" or $text == "وضع اسم البوت" or $text == "تغيير اسم البوت" and $namebot == null){
file_put_contents("data/set.txt","setnamebot");
bot("sendMessage",["chat_id"=>$chat_id,'text'=>"⋄︙ قم بأرسال اسم البوت الان ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if(in_array($from_id,$Dev)){
if ($text == "⋄ حذف الاسم" or $text == "مسح اسم البوت"){
file_put_contents("data/namebot.txt","نارمين");
bot("sendMessage",["chat_id"=>$chat_id,'text'=>"⋄︙ تم مسح اسم البوت",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
# --     Source carlos     --
if($text && $setnamebot =="setnamebot" and in_array($from_id,$Dev)){
file_put_contents("data/namebot.txt",$text); 
file_put_contents("data/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text" => "
⋄︙تم تغير اسم البوت بنجاح
⋄︙ اسمي توا  ⋙ $text
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

$botproxre = array(
"متضايقنيش 😾",
"تقريبا اسمي مكتوب بالخط العريض🙂 ☹️🌿",
"اللهم صل على محمد 🤲"
);
$reproxbot = array_rand($botproxre, 1);
if($text == "بوت" || $text == "البوت شنو اسمه" || $text == "شسمه البوت" || $text == "البوت شسمه" || $text == "اسم البوت" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"$botproxre[$reproxbot]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
$botre = array(
"- متضايقنيش 😾",
"- اسمي $namebot☹️🌿",
"- بطل تهريس اهو معاك $namebot 😺",
"- $namebot تحت الخدمة 👨‍🔧"
);
$rebot = array_rand($botre, 1);
if($text == "بوت" || $text == "البوت شنو اسمه" || $text == "شسمه البوت" || $text == "البوت شسمه" || $text == "اسم البوت" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"$botre[$rebot]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
$namere = array(
"- نعموش معاك$namebot 😽",
"- تفضل ياخي معاك $namebot🌝💞",
"- تامرني بشي 🥺💞",
"- اذكرالله معك $namebot🍁",
"- وحد الله معاك $namebot 🫶"
);
$rename = array_rand($namere, 1);
if($text == "$namebot" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>$namere[$rename],'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

$abuehab = array("هلا قلبي معك نارمين","تفضل حبيبي انا نارمين🌝💞","جنبك يانمي شنتبي 🥺💞","هلكتنني وانت كل شوي نارمين","يابااتتي نخدم عندد امك نا كل شوي نارمين🙂");
$ehab = array_rand($proxre, 1);
if($text == "نارمين" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>$abuehab[$ehab],'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if($text && $settingdev["rmz"]=="$from_id" and in_array($from_id,$Dev)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*تم تحديث رموز السورس $text *",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id
]);
$settingdev["rmz"]="done";
$settingdev["source"]="$text";
$settingdev = json_encode($settingdev,128|34|256);
file_put_contents("DEVER.json",$settingdev);
}
elseif($text == "⋄ تعيين رموز السورس" or $text == "تعيين رموز السورس"){
if(in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*ارسل الرمز الجديد*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
]);
$settingdev["rmz"]="$from_id";
$settingdev = json_encode($settingdev,128|34|256);
file_put_contents("DEVER.json",$settingdev);
}}
elseif($text == "⋄ حذف رموز السورس" or $text == "حذف رموز السورس"){
if(in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*تم الحذف*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
]);
unset($settingdev["source"]);
$settingdev = json_encode($settingdev,128|34|256);
file_put_contents("DEVER.json",$settingdev);
}}
