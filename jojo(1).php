<?php

$API_KEY = '6773214205:AAEvR6uvbZ-p35jjBhtLGznLQSSqovO-v2A'; 
$dev =murtjaa_1; //@V_89T
define('api',$API_KEY); 
function bot($method,$datas=[]){
$url = "https://core.telegram.org/bots/api"/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$re_msgid  = $update->message->reply_to_message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$chat_id  = $message->chat->id;
$user  = $update->message->from->username;
$from_user = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$info  = json_decode($get, true);
$sudo = 554903465;//ID SUDO
$name = $update->message->from->first_name;
if($text == '/start'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'- مرحبا بك $name 👨🏻‍🏭
- في بوت رشق انستا 💳
- الأول في التلكرام 👮‍♂؛ البوت يحتوي على مواقع لرشق المتابعين والمواقع آمنه ✓
- كل ماعليك استخدام الكيبورد الذي في الاسفل ↓ 👨🏻‍🔧
- جديدنا على التيليجرام : @V_89T ✓', 
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"💳┋رشق انستا ؛📡"],['text'=>"📡┋ بوتات أخرى ؛🗳"]
],
[
['text'=>"🗳┋ رشق لايكات 👥"],['text'=>"👨🏻‍💻┋رشق مشاهدات ستوري ✓"]
],
[
['text'=>"🦁┋ JoKeR TeAm"],['text'=>"🍁┋INSTA OF IRAQ"]
],
[
['text'=>"⁉️┋ كيفية الاستخدام ⁉️"],['text'=>"🇮🇶┋صنع حساب وهمي"]                            
],
[
['text'=>"👨🏻‍✈️┋برنامج فالوركير ✓"]                   
],
],
  'resize_keyboard'=>true
])
]);
}
if ($text == '💳┋رشق انستا ؛📡') {
  bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- مرحبا بك ؛ [$name](tg://user?id=$chat_id)
في قائمة رشق انستا ؛🤖
استخدم موقع رشق الانستا زيادة خرافية استخدمه بحساب وهمي للرشق
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/V_89T)", 'parse_mode' => "MarkDown", 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "•موقع الرشق ؛⁦👁‍🗨⁩؛", 'url' => "https://igtools.in"]], ]]) ]);
}
if($text == '📡┋ بوتات أخرى ؛🗳'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- أهلا عزيزي ؛👨🏻‍🏭
جميع البوتات ستجدها هنا ؛ @V_89T 💳",
]);
}
if($text == "🦁┋ JoKeR TeAm"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "- اههلا عزيزي في سورس الجوكر
اشترك @V_89T 🥺"
]);
}
if($text == "👨🏻‍💻┋رشق مشاهدات ستوري ✓"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "- مرحبا عزيزي 🥺 $name
اليك موقع رشق مشاهدات ستوري 📸
 👁 ||• https://igtools.ooo/
الموقع مشهور في الوطن العربي 60M المستخدمين 👨🏻‍✈️
"
]);
}
if($text == "🗳┋ رشق لايكات 👥"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "مواقع تركيه للرشق ( زيادة متابعين حسابك بالانستا)✅

فوائد الرشق✅
١_ زيادة عدد متابعينك وهمي❤️
٢_تقويه حسابك حتى ليتبند❤️
٣_ يصعد حسابك اكسبلور❤️

الميعرف شلون يرشق تسويلك حسابات وهميه وتفتحهم بهالمواقع وترشق لحسابك الاساسي ( ميصير تفتح حسابك الاساسي بهالمواقع ) 😍😍

والمواقع كلها بدون باسورد❤️😍

ينطيك ١٠٠ متابع + لايكات وكومنتات 👇🏻👇🏻
 http://takipcisitem.com/?ref=77wusys

ينطيك ٥٠ متابع + لايكات وكومنتات 👇🏻👇🏻
https://4takipci.net/

ينطيك ١٥٠ متابع + لايكات وكومنتات 👇🏻👇🏻
https://www.instaore.com/inst

ينطيك ٧٥ متابع ولايكات وكومنتات 👇🏻👇🏻
https://instagram.begenapp.co/bayi-tx/send-follower/1054837070

ينطيك ٧٥ متابع ولايكات وكومنتات
https://instagram.anindabegeni.com/bayi-tx/send-follower



https://silvertakip.com
https://instagram.begenin.com
https://4takipci.com
https://instahobi.com
https://instafeym.com
https://takipcipanelim.com
https://instagram.begenapp.net
https://takipapp.com
https://www.panelinsta.com
http://ighoot.com
https://www.igflash.com
http://platintakip.com
http://instagram.fibertakip.com
http://takipcisepeti.com
https://piscode.me
https://www.bayinsta.com
https://takipcikazansana.com
http://takipcizevki.com
http://instagram.fibertakip.com
http://organiktakipci.com
http://instagramtakipcim.com
https://instagram.anindabegeni.com
https://hublaagram.me/index.php
https://www.instasende.com
http://instagy.net/login
http://sosialmedya.ml
https://realfollowers.net
https://freerealfollowers.net
https://freefollowersandlikes.net
https://freeandrealfollowers.com
https://realfreefollowers.net
https://s1.realfollowers.net
https://s1.freerealfollowers.net
https://s1.freefollowersandlikes.net
https://s1.freeandrealfollowers.com
https://s1.realfreefollowers.net
https://s2.freerealfollowers.net
https://s2.freefollowersandlikes.net
https://s2.freeandrealfollowers.com
https://s2.realfreefollowers.net


başka bir hesaba gönderme

https://takipde.com
https://instagramtakipci.net
https://takipcihilesipro.com
https://takipci.instager.net
http://instagramtakipcim.com/bot/login.php
http://www.takipcimedia.com
https://www.instakipci.pro
https://www.instaloji.com
https://www.takipcilerbizden.com
https://sosyalmedyakazan.com
http://instagram.sosyalmedya.store/takipci/index.php
https://xtakipci.com
https://instakipci.begen.co/index.php?sayfa=cikis


مواقع رشق جدد ممطروقات 2018

موقع يطي270
http://www.İntagramtakip.com
موقع يطي100
http://www.xTakipci.net
موقع يطي 200
https://takipde.com
موقع يطي 300
https://instaore.com/bayi-tx/send-follower/6370826084
موقع يطي 150
http://takipci.aba.ae
موقع يطي 30
https://instaore.com/insta
موقع يطي 300
https://instagram.begenapp.net/giris-yap

#ملاحضةةةة:اسخدم حساب وهمي للرشق حسابك اصلي☺️🖤
ملاحظه!استخدم حساب وهمي وارشق حسابك اصلي🖤✨
_____،_________،________"
]);
}
if($text == "🍁┋INSTA OF IRAQ"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "- قناة رشق انستا
@V89_T"
]);
}
if($text=="/start" and $type == "private"){
bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"https://t.me/qggaagga/3",
    'caption'=>"فالوركير اخر تحديث 2019↑ 🙃
    تابع جديدنا ؛ @V_89T",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 [['text'=>"-جديدنا على التيليجرام ✓",'url'=>"https://t.me/murtjaa_1"]]
    ]

  ])
  ]);
}
if($text == "⁉️┋ كيفية الاستخدام ⁉️"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "- كيفية استخدام بوت رشق انستا 🛠
- البوت يحتوي ع مواقع ل رشق الانستكرام 👨🏻‍✈️💳
- ما الفائدة من البوت 🤚
- اولا : أي موقع رشق مدفوع راح تلكاه بلبوت 🤖
- ثانيا : جميع نسخ الفالوركير موجوده بلبوت 👮‍♀
- اضغط /start للتحديث 👨🏻‍💻 🤴🏻
- لشراء نسخه من البوت : @V_99T 🙇‍♂"
]);
}
if($text == "🇮🇶┋صنع حساب وهمي"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "- اهلا عزيزي 
بوت صنع حسابات وهمية للرشق ؛
@Instamewbot"
]);
}
if($text == "/start"){$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@lll_q_lll&user_id=".$from_id);
$join2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@murtjaa_1&user_id=".$from_id);
$join3 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@teamivar&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join2,'"status":"left"') or strpos($join3,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- اهلا بك عزيزي 🔱 -
- ليمكنك استخدام البوت ✅ -
- عليك الاشتراك في القناة 🔽 -
- @V_89T ⚜️
]);return false;}
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->$message_id,
]);
}
$ary = array(554903465,2,3,4); # <<<== ايديك + ايديات الادمنية  #
$id = $message->from->id;
$admins = in_array($id,$ary);
$data = $update->callback_query->data;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$cut = explode("\n",file_get_contents("stats/users.txt"));
$users = count($cut)-1;
$mode = file_get_contents("stats/bc.txt");
#Start code 

if ($update && !in_array($id, $cut)) {
    mkdir('stats');
    file_put_contents("stats/users.txt", $id."\n",FILE_APPEND);
  }

    if(preg_match("/(admin)/",$text) && $admins) {
        bot('sendMessage',[
            'chat_id'=>$chat_id,
          'text'=>"
اهلا بك عزيزي *( المطور )* 📻 !
    
اليك كل احصائيات البوت ⚠️
يمكنك استخدام اعدادات بوتك بشكل كامل 
-",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    [['text'=>'العدد 👥 ','callback_data'=>'users'],['text'=>'ارسال للكل 📩 ','callback_data'=>'set']],
    [['text'=>'حالة البوت 🔋 ','callback_data'=>'stats']],
                ]
                ])
            ]);
    }
    if($data == 'homestats'){
    bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>"
اهلا بك عزيزي *( المطور )* 📻 !
        
اليك كل احصائيات البوت ⚠️
يمكنك استخدام اعدادات بوتك بشكل كامل 
-",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    [['text'=>'العدد 👥 ','callback_data'=>'users'],['text'=>'ارسال للكل 📩 ','callback_data'=>'set']],
    [['text'=>'حالة البوت 🔋 ','callback_data'=>'stats']],
                ]
                ])
    ]);
    file_put_contents('stats/bc.txt', 'no');
    }
    
    if($data == "users"){ 
        bot('answercallbackquery',[
            'callback_query_id'=>$update->callback_query->id,
            'text'=>"
⚠️ البوت فعال  ☑️ !
عدد المشتركين (  [ $users ] ) !
-",
            'show_alert'=>true,
    ]);
    }
    
    if($data == "set"){ 
        file_put_contents("stats/bc.txt","yas");
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$update->callback_query->message->message_id,
        'text'=>"
ارسل النص الان 📩 !
ليتم ارسالة الى ( $users ) مشتركاً 👥
ارسل *النص فقط ! * 📄
-
    ",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>' الغاء 🚫. ','callback_data'=>'homestats']]    
            ]
        ])
        ]);
    }
    if($text and $mode == "yas" && $admins){
        bot('sendMessage',[
              'chat_id'=>$chat_id,
              'text'=>"
تم ارسال رسالتك بنجاح ❕
وسيتم التوصيل الى ( $users ) 👥 !
-",
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'رجوع ','callback_data'=>'homestats']]    
            ]
        ])
    ]);
    for ($i=0; $i < count($cut); $i++) { 
     bot('sendMessage',[
    'chat_id'=>$cut[$i],
    'text'=>"$text",
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
    ]);
    file_put_contents("stats/bc.txt","no");
    } 
    }
    date_default_timezone_set("Asia/Baghdad");
    $getMe = bot('getMe')->result;
    $date = $message->date;
    $gettime = time();
    $sppedtime = $gettime - $date;
    $time = date('h:i');
    $date = date('y/m/d');
    $userbot = "{$getMe->username}";
    $userb = strtoupper($userbot);
    if($data == "stats"){ 
    if ($sppedtime == 3  or $sppedtime < 3) {
    $f = "ممتازة 👏🏻";
    }
    if ($sppedtime == 9 or $sppedtime > 9 ) {
    $f = "لا بأس 👍🏻";
    }
    if ($sppedtime == 10 or $sppedtime > 10) {
    $f = " سئ جدا 👎🏻";
    }
     bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$update->callback_query->message->message_id,
        'text' =>"
معلومات البوت 🔋:- 

📄معرف البوت :- @$userb
📈 حالة البوت :- ( $f ) 
⏰ الوقت الان : ( 20$date | $time ) 
-",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'رجوع ','callback_data'=>'homestats']]    
            ]
        ])
       ]);
    }
