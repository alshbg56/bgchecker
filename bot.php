<?php
date_default_timezone_set("Asia/Baghdad");
error_reporting(0);
function bot($method, $datas = []) {
$token = file_get_contents("token");
$url = "https://api.telegram.org/bot$token/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);
return json_decode($res, true);
}
function getupdates($up_id) {
$get = bot('getupdates', ['offset' => $up_id]);
return end($get['result']);
}
$botuser = "@" . bot('getme', ['bot']) ["result"]["username"];
file_put_contents("_ad.txt", $botuser);
function stats($nn) {
	$st = "";
	$x = shell_exec("pm2 show $nn");
	if (preg_match("/online/", $x)) {
		$st = "run";
	}
	else {
		$st = "stop";
	}
	return $st;
}
function states($g) {
$st = "";
$x = shell_exec("pm2 show $g");
if(preg_match("/online/", $x)) {
$st = "run";
}else{
$st = "stop";
}
return $st;
}
function countUsers($u = "2", $t = "2") {
if ($t == "2") {
$users = explode("\n", file_get_contents("users"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;
}}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}}
if ($t == "1") {
$users = explode("\n", $u);
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;
}}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}}}
 $last_up = $last_up;
function ph($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("a.madeline");
	unlink("a.madeline.lock");
	$settings['app_info']['api_id'] = 24726477;
	$settings['app_info']['api_hash'] = 'ba993a0f5b0bccfbf2a25d061826eeed';
	$MadelineProto = new \danog\MadelineProto\API('a.madeline',$settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 1 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 1 - ،\n⌁ I can't Login"]);
		return false;
shell_exec("php step.php");	}
	
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Done Login ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Done Login ✅"]);
break;
}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Send password \n⌁ Ex : - karrar- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Done Login ✅"]);
break;
}}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}}}}}
sleep(1);
}}
$step = "";
$last_up = $last_up;
function p2($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("b.madeline");
	unlink("b.madeline.lock");
	$settings['app_info']['api_id'] = 24726477;
	$settings['app_info']['api_hash'] = 'ba993a0f5b0bccfbf2a25d061826eeed';
	$MadelineProto = new \danog\MadelineProto\API('b.madeline',$settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number2"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 2 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 2 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Send password \n⌁ Ex : - karrar- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Done Login  ✅"]);
break;
}}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}}}}}
sleep(1);
}}
$step = "";
 $last_up = $last_up;
function DH($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("c.madeline");
	unlink("c.madeline.lock");
	$settings['app_info']['api_id'] = 24726477;
	$settings['app_info']['api_hash'] = 'ba993a0f5b0bccfbf2a25d061826eeed';
	$MadelineProto = new \danog\MadelineProto\API('c.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number3"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 3 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 3 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Send password \n⌁ Ex : - karrar- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Done Login  ✅"]);
break;
}}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}}}}}
sleep(1);
}}
$step = "";
 $last_up = $last_up;
function p4($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("d.madeline");
	unlink("d.madeline.lock");
	$settings['app_info']['api_id'] = 24726477;
	$settings['app_info']['api_hash'] = 'ba993a0f5b0bccfbf2a25d061826eeed';
	$MadelineProto = new \danog\MadelineProto\API('d.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number4"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 4 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 4 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Send password \n⌁ Ex : - karrar-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Done Login  ✅"]);
break;
}}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}}}}}
sleep(1);
}}
$step = "";
 $last_up = $last_up;
function p5($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("e.madeline");
	unlink("e.madeline.lock");
	$settings['app_info']['api_id'] = 24726477;
	$settings['app_info']['api_hash'] = 'ba993a0f5b0bccfbf2a25d061826eeed';
	$MadelineProto = new \danog\MadelineProto\API('e.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number5"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 5 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 5 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Send password \n⌁ Ex : - karrar-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Done Login  ✅"]);
break;
}}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}}}}}
sleep(1);
}}
$step = "";
function run($update) {
global $step;
$nn = bot('getme', ['bot']) ["result"]["username"];
$message = $update['message'];
$userID = $message['from']['id'];
$chat_id = $message['chat']['id'];
$name = $message['from']['first_name'];
$text = $message['text'];
$date = $update['callback_query']['data'];
$cq = $update['callback_query'];
$data = $cq['data'];
$message_id = $cq['message']['message_id'];
$chat_id2 = $cq['message']['chat']['id'];
$group = file_get_contents("ID");
$url = "";
$g = file_get_contents($url);
$js = json_decode($g);
$da = $js->date;
$time = $js->time;
$day = $js->day;
$month = $js->month;

if ($chat_id == $group) {
if ($text) {
if ($text == "/start" or $text == "رجوع") {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text' => "Hi , [$name](tg://user?id=$chat_id)",
'parse_mode' => "MarkDown", 
'disable_web_page_preview' => true,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"Add Number"],["text" =>"Delet Number"]],
[["text" =>"Numbers"]],
[["text" =>"Add Users"],["text" =>"Delet User"]],
[["text" =>"Show list"]],
[["text" =>"To Account"],["text" =>"To Channel"]],
[["text" => "Run"], ["text" => "Stop Run"]],
[["text" =>"Requests"]],
[["text" =>"Pin All"]],
[["text" =>"Run All"],["text" =>"Stop All"]]], ]) 
])->result->message_id;
sleep(2);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
]);
}
####اضف رقم####
if ($chat_id == $group) {
if ($text == "Add Number") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ختار احد الازرار الاضافه رقم",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"Login1"],["text" =>"Login2"]],
[["text" =>"Login3"],["text" =>"Login4"]],
[["text" =>"Login5"]],[["text" =>"رجوع"]]], ]) ]);
}}
if ($text == "Login1") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop aa.php && pm2 stop ac.php && pm2 stop al.php");
unlink("a.madeline");
unlink("a.madeline.lock");
file_put_contents("step","2");
system('php g1.php');
}
if($text == "Login2") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop bu.php && pm2 stop bc.php && pm2 stop bl.php");
unlink("b.madeline");
unlink("b.madeline.lock");
file_put_contents("step2","2");
system('php g2.php');
}
if ($text == "Login3") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop cc.php && pm2 stop cl.php && pm2 stop ca.php");
unlink("c.madeline");
unlink("c.madeline.lock");
file_put_contents("step3","2");
system('php g3.php');
}
if ($text == "Login4") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop dl.php && pm2 stop da.php && pm2 stop dc.php");
unlink("d.madeline");
unlink("d.madeline.lock");
file_put_contents("step4","2");
system('php g4.php');
}
if ($text == "Login5") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop el.php && pm2 stop ea.php && pm2 stop ec.php");
unlink("e.madeline");
unlink("e.madeline.lock");
file_put_contents("step5","2");
system('php g5.php');
}
####حذف رقم####
if ($chat_id == $group) {
if ($text == "Delet Number") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ختار احد الازرار الحذف الرقم",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"Delet Login1"],["text" =>"Delet Login2"]],
[["text" =>"Delet Login3"],["text" =>"Delet Login4"]],
[["text" =>"Delet Login5"]],[["text" =>"رجوع"]]], ]) ]);
}}
if($text == "Delet Login1"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "تم حذف رقم بنجاح",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop aa.php && pm2 stop al.php && pm2 stop ac.php");
system('rm -rf a.madeline && rm -rf a.madeline.lock && rm -rf a.madeline.lightState.php && rm -rf a.madeline.lightState.php.lock && rm -rf a.madeline.safe.php && rm -rf a.madeline.safe.php.lock');
unlink("a.madeline"); 
unlink("a.madeline.lock");
unlink("a.madeline.lightState.php");
unlink("a.madeline.lightState.php.lock");
unlink("a.madeline.safe.php");
unlink("a.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($text == "Delet Login2"){
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "تم حذف رقم بنجاح",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop bu.php && pm2 stop bl.php && pm2 stop bc.php");
system('rm -rf b.madeline && rm -rf b.madeline.lock && rm -rf b.madeline.lightState.php && rm -rf b.madeline.lightState.php.lock && rm -rf b.madeline.safe.php && rm -rf b.madeline.safe.php.lock');
unlink("b.madeline"); 
unlink("b.madeline.lock");
unlink("b.madeline.lightState.php");
unlink("b.madeline.lightState.php.lock");
unlink("b.madeline.safe.php");
unlink("b.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number2"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($text == "Delet Login3"){
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "تم حذف رقم بنجاح",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop cc.php && pm2 stop cl.php && pm2 stop ca.php");
system('rm -rf c.madeline && rm -rf c.madeline.lock && rm -rf c.madeline.lightState.php && rm -rf c.madeline.lightState.php.lock && rm -rf c.madeline.safe.php && rm -rf c.madeline.safe.php.lock');
unlink("c.madeline"); 
unlink("c.madeline.lock");
unlink("c.madeline.lightState.php");
unlink("c.madeline.lightState.php.lock");
unlink("c.madeline.safe.php");
unlink("c.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number3"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($text == "Delet Login4"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "تم حذف رقم بنجاح",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop da.php && pm2 stop dl.php && pm2 stop dc.php");
system('rm -rf d.madeline && rm -rf d.madeline.lock && rm -rf d.madeline.lightState.php && rm -rf d.madeline.lightState.php.lock && rm -rf d.madeline.safe.php && rm -rf d.madeline.safe.php.lock');
unlink("d.madeline"); 
unlink("d.madeline.lock");
unlink("d.madeline.lightState.php");
unlink("d.madeline.lightState.php.lock");
unlink("d.madeline.safe.php");
unlink("d.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number4"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($text == "Delet Login5"){
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "تم حذف رقم بنجاح",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop ea.php && pm2 stop ec.php && pm2 stop el.php");
system('rm -rf e.madeline && rm -rf e.madeline.lock && rm -rf e.madeline.lightState.php && rm -rf e.madeline.lightState.php.lock && rm -rf e.madeline.safe.php && rm -rf e.madeline.safe.php.lock');
unlink("e.madeline"); 
unlink("e.madeline.lock");
unlink("e.madeline.lightState.php");
unlink("e.madeline.lightState.php.lock");
unlink("e.madeline.safe.php");
unlink("e.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number5"] = "No number";
file_put_contents('info.json', json_encode($info));
 }
####اضف يوزر###
if ($chat_id == $group) {
if ($text == "Add Users") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ختار احد الازرار الاضافة اليوزر",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"List 📋 1"],["text" =>"List 📋 2"]],
[["text" =>"List 📋 3"],["text" =>"List 📋 4"]],
[["text" =>"List 📋 5"]],[["text" =>"رجوع"]]], ]) ]);
}}
if($text == "List 📋 1"){
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ارسل السته او اليوزر التثبيته بقائمه رقم 1",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'addL');
} 
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('users'));
if(preg_match("/@+/", $text)){
if($mode == 'pinall'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("users", "\n" . $user, FILE_APPEND);
file_put_contents("users2", "\n" . $user, FILE_APPEND);
file_put_contents("users3", "\n" . $user, FILE_APPEND);
file_put_contents("users4", "\n" . $user, FILE_APPEND);
file_put_contents("users5", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "@$user : ⌁ Done Pin All.🚀",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 start aa.php && pm2 start ac.php && pm2 start bu.php && pm2 start bc.php && pm2 start cc.php && pm2 start ca.php && pm2 start da.php && pm2 start dc.php && pm2 start ea.php && pm2 start ec.php");
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "@$user : Already Exists.",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}
unlink('mode');
}
if($mode == 'addL'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("users"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}}
file_put_contents("users", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Added Users To List 1 :\n" . countUsers($userT, "1"),
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
}}}
if($text == "List 📋 2"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ارسل السته او اليوزر التثبيته بقائمه رقم 2",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'ad2');
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('users2'));
if(preg_match("/@+/", $text)){
if($mode == 'Pi0n'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("users2", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"⌁ Done Delet User List 2 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "@$user : Already Exists.",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}
unlink('mode');
} elseif($mode == 'ad2'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("users2"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}}
file_put_contents("users2", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Added Users To List 2 :\n" . countUsers($userT, "1"),
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
}}}
if($text == "List 📋 3"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ارسل السته او اليوزر التثبيته بقائمه رقم 3",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'ad3');
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('users3'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("users3", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "@$user : Already Exists.",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);}
unlink('mode');
}elseif($mode == 'ad3'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("users3"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}}
file_put_contents("users3", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Added Users To List 3 :\n" . countUsers($userT, "1"),
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
}}}
if($text == "List 📋 4"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ارسل السته او اليوزر التثبيته بقائمه رقم 4",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'ad4');
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('users4'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("users4", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "@$user : Already Exists.",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}
unlink('mode');
} elseif($mode == 'ad4'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("users4"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}}
file_put_contents("users4", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Added Users To List 4 :\n" . countUsers($userT, "1"),
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
}}}
if($text == "List 📋 5"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ارسل السته او اليوزر التثبيته بقائمه رقم 5",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'ad5');
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('users5'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("users5", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "@$user : Already Exists.",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}
unlink('mode');
} elseif($mode == 'ad5'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("users5"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}}
file_put_contents("users5", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Added Users To List 5 :\n" . countUsers($userT, "1"),
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
}}}
$info = json_decode(file_get_contents('info.json'),true);
$S1 = explode("\n",file_get_contents("users"));
$S2 = explode("\n",file_get_contents("users2"));
$S3 = explode("\n",file_get_contents("users3"));
$S4 = explode("\n",file_get_contents("users4"));
$S5 = explode("\n",file_get_contents("users5"));
$Sum1 = count($S1)-1;
$Sum2 = count($S2)-1;
$Sum3 = count($S3)-1;
$Sum4 = count($S4)-1;
$Sum5 = count($S5)-1;
$F = $Sum1+$Sum2+$Sum3+$Sum4+$Sum5;
$info["USERS"] = "$F";
file_put_contents('info.json', json_encode($info));
$sum = $info["USERS"];
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
###حذف يوزر###
if ($chat_id == $group) {
if ($text == "Delet User") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ختار احد الازرار الحذف اليوزر",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"List 🗑 1"],["text" =>"List 🗑 2"]],
[["text" =>"List 🗑 3"],["text" =>"List 🗑 4"]],
[["text" =>"List 🗑 5"]],[["text" =>"رجوع"]]], ]) ]);
}}
if($text == "List 🗑 1"){
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "ارسل اليوزر لان",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'Unpin');
}
if($mode == 'Unpin'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("users"));
file_put_contents("users", $data);
file_put_contents("users",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("users"))));
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Delet User List 1 :@$user",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
} 
if($text == "List 🗑 2"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "ارسل اليوزر لان",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'Unpin2');
}
if($mode == 'Unpin2'){
echo 'Unpin2';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("users2"));
file_put_contents("users2", $data);
file_put_contents("users2",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("users2"))));
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Done Delet User List 2 : @$user",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
}
if($text == "List 🗑 3"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "ارسل اليوزر لان",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'Unpin3');
}
if($mode == 'Unpin3'){
echo 'Unpin3';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("users3"));
file_put_contents("users3", $data);
file_put_contents("users3",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("users3"))));
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Done Delet User List 3 : @$user",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
}
if($text == "List 🗑 4"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "ارسل اليوزر لان",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'Unpin4');
}
if($mode == 'Unpin4'){
echo 'Unpin4';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("users4"));
file_put_contents("users4", $data);
file_put_contents("users4",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("users4"))));
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Done Delet User List 4 : @$user",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
}
if($text == "List 🗑 5"){
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "ارسل اليوزر لان",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'Unpin5');
 }
 if($mode == 'Unpin5'){
echo 'Unpin5';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("users5"));
file_put_contents("users5", $data);
file_put_contents("users5",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("users5"))));
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Done Delet User List 5 : @$user",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
unlink('mode');
}
##ثبيت بحساب#####
if ($chat_id == $group) {
if ($text == "To Account") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ختار احد الازرار التثبيت ع اليوزر بحساب",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"type Account 1"],["text" =>"type Account 2"]],
[["text" =>"type Account 3"],["text" =>"type Account 4"]],
[["text" =>"type Account 5"]],[["text" =>"رجوع"]]], ]) ]);
}}
if ($chat_id == $group) {
if($text == "type Account 1"){
shell_exec("pm2 stop ac.php");
$num1 = $info["num1"];
$type = file_get_contents("type");
if ($type == "a") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 1",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type", "a");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 1",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 start aa.php");
}}
if($text == "type Account"){
	shell_exec("pm2 stop bc.php");
$num2 = $info["num2"];
$type = file_get_contents("type2");
if ($type == "a") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 2",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type2", "a");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 2",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop bu.php && pm2 start bu.php && pm2 stop bl.php && pm2 start bl.php");
}}
if($text == "type Account 3"){
	shell_exec("pm2 stop cc.php");
$num3 = $info["num3"];
$type = file_get_contents("type3");
if ($type == "a") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 3",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type3", "a");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 3",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop ca.php && pm2 start ca.php && pm2 stop cl.php && pm2 start cl.php");
}}
if($text == "type Account 4"){
	shell_exec("pm2 stop dc.php");
$num4 = $info["num4"];
$type = file_get_contents("type4");
if ($type == "a") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 4",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type4", "a");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 4",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop da.php && pm2 start da.php && pm2 stop dl.php && pm2 start dl.php");
}}
if($text == "type Account 5"){
	shell_exec("pm2 stop ec.php");
$num5 = $info["num5"];
$type = file_get_contents("type5");
if ($type == "a") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 5",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type5", "a");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done type to Account ✅ 5",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop el.php && pm2 start el.php");
}}
####تثبيت بقناة#####
if ($chat_id == $group) {
if ($text == "To Channel") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ختار احد الازرار التثبيت ع اليوزر بقناة",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"type channel 1"],["text" =>"type channel 2"]],
[["text" =>"type channel 3"],["text" =>"type channel 4"]],
[["text" =>"type channel 5"]],[["text" =>"رجوع"]]], ]) ]);
}}
$info = json_decode(file_get_contents('info.json'),true);
if($text == "type channel 1"){
	shell_exec("pm2 stop aa.php");
$num1 = $info["num1"];
$type = file_get_contents("type");
if ($type == "ac") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 1",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type", "c");
$num1 = $info["num1"];
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 1",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 start aa.php");
}}
if($text == "type channel 2"){
	shell_exec("pm2 stop bu.php");
$num2 = $info["num2"];
$type = file_get_contents("type2");
if ($type == "ac") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 2",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type2", "c");
$num2 = $info["num2"];
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 2",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop bl.php && pm2 start bl.php");
}}
if($text == "type channel 3"){
	shell_exec("pm2 stop ca.php");
$num3 = $info["num3"];
$type = file_get_contents("type3");
if ($type == "ac") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 3",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type3", "c");
$num3 = $info["num3"];
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 3",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop cl.php && pm2 start cl.php");
}}
if($text == "type channel 4"){
	shell_exec("pm2 stop da.php");
$num4 = $info["num4"];
$type = file_get_contents("type4");
if ($type == "c") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 4",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type4", "c");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 4",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop dl.php && pm2 start dl.php");
}}
if($text == "type channel 5"){
	$num5 = $info["num5"];
$type = file_get_contents("type5");
if ($type == "ac") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 5",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}else{
file_put_contents("type5", "c");
$num5 = $info["num5"];
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "➧Done type to Channel ✅ 5",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop el.php && pm2 start el.php");
}}
#####رن###
if ($chat_id == $group) {
if ($text == "Run") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ختار احد الازرار العمل رن الصيد حته يبلش يصيد",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"Run ✅ 1"],["text" =>"Run ✅ 2"]],
[["text" =>"Run ✅ 3"],["text" =>"Run ✅ 4"]],
[["text" =>"Run ✅ 5"]],[["text" =>"رجوع"]]], ]) ]);
}}
if($text == "Run ✅ 1"){
	unlink('xa');
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Run Checker 1",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$type = file_get_contents("type");
if($type == "c"){
shell_exec("pm2 stop ac.php && pm2 start ac.php && pm2 stop al.php && pm2 start al.php");
$lop = 0;
file_put_contents("xa", $lop);
}
if($type == "a"){
shell_exec("pm2 stop aa.php && pm2 start aa.php && pm2 stop al.php && pm2 start al.php");
$lop = 0;
file_put_contents("xa", $lop);
}
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($text == "Run ✅ 2"){
	unlink('xb');
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Run Checker 2",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$type = file_get_contents("type2");
if($type == "c"){
shell_exec("pm2 stop bc.php && pm2 start bc.php && pm2 stop bl.php && pm2 start bl.php");
$lop = 0;
file_put_contents("xb", $lop);
}
if($type == "a"){
shell_exec("pm2 stop bu.php && pm2 start bu.php && pm2 stop bl.php && pm2 start bl.php");
$lop = 0;
file_put_contents("xb", $lop);
}
$info = json_decode(file_get_contents('info.json'),true);
$info["num2"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($text == "Run ✅ 3"){
	unlink('xc');
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Run Checker 3",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$type = file_get_contents("type3");
if($type == "c"){
shell_exec("pm2 stop cc.php && pm2 start cc.php && pm2 stop cl.php && pm2 start cl.php");
$lop = 0;
file_put_contents("xc", $lop);
}
if($type == "a"){
shell_exec("pm2 stop ca.php && pm2 start ca.php && pm2 stop cl.php && pm2 start cl.php");
$lop = 0;
file_put_contents("xc", $lop);
}

$info = json_decode(file_get_contents('info.json'),true);
$info["num3"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($text == "Run ✅ 4"){
	unlink('xd');
 bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Run Checker 4",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$type = file_get_contents("type4");
if($type == "c"){
shell_exec("pm2 stop dc.php && pm2 start dc.php && pm2 stop dl.php && pm2 start dl.php");
$lop = 0;
file_put_contents("xd", $lop);
}
if($type == "a"){
shell_exec("pm2 stop da.php && pm2 start da.php && pm2 stop dl.php && pm2 start dl.php");
$lop = 0;
file_put_contents("xd", $lop);
}

$info = json_decode(file_get_contents('info.json'),true);
$info["num4"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($text == "Run ✅ 5"){
unlink('xe');
shell_exec("pm2 stop el.php && pm2 start el.php");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Run Checker 5",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$type = file_get_contents("type5");
if($type == "c"){
shell_exec("pm2 stop ec.php && pm2 start ec.php");
$lop = 0;
file_put_contents("xe", $lop);
}
if($type == "a"){
shell_exec("pm2 stop ea.php && pm2 start ea.php");
$lop = 0;
file_put_contents("xe", $lop);
}
$info = json_decode(file_get_contents('info.json'),true);
$info["num5"] = "on";
file_put_contents('info.json', json_encode($info));
}
#####توقف رن #####
if ($chat_id == $group) {
if ($text == "Stop Run") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ختار احد الازرار التوقف رن",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"Stop ❌ 1"],["text" =>"Stop ❌ 2"]],
[["text" =>"Stop ❌ 3"],["text" =>"Stop ❌ 4"]],
[["text" =>"Stop ❌ 5"]],[["text" =>"رجوع"]]], ]) ]);
}}
if($text == "Stop ❌ 1"){
	unlink('xa');
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Stoped Checker \n- Checker Stoped List  1",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop aa.php && pm2 stop ac.php && pm2 stop al.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($text == "Stop ❌ 2"){
	unlink('xb');
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Stoped Checker \n- Checker Stoped List  2",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop bl.php && pm2 stop bu.php && pm2 stop bc.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($text == "Stop ❌ 3"){
	unlink('xc');
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Stoped Checker \n- Checker Stoped List  3",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop cl.php && pm2 stop cc.php && pm2 stop ca.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($text == "Stop ❌ 4"){
	unlink('xd');
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Stoped Checker \n- Checker Stoped List  4",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop dl.php && pm2 stop da.php && pm2 stop dc.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($text == "Stop ❌ 5"){
	unlink('xe');
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Stoped Checker \n- Checker Stoped List  5",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
shell_exec("pm2 stop ea.php && pm2 stop ec.php && pm2 stop el.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
}
#####عرض اليوزرات####
if ($chat_id == $group) {
if ($text == "Show list") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "حسنأ ختار احد الازرار العرض الستة المثبته",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"Show All ⌁ 1"],["text" =>"Show All ⌁ 2"]],
[["text" =>"Show All ⌁ 3"],["text" =>"Show All ⌁ 4"]],
[["text" =>"Show All ⌁ 5"]],[["text" =>"رجوع"]]], ]) ]);
}}
if($text == "Show All ⌁ 1"){
if(file_exists("users")){
$users = explode("\n", file_get_contents("users"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;}}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "The All Users List 1 !  \n".$list,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$list = "";
}}
if($text == "Show All ⌁ 2"){
if(file_exists("users2")){
$users = explode("\n", file_get_contents("users2"));
$list2 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list2 = $list2 . "\n$i  ➧ @$user";
$i++;}}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "The All Users List 2 !  \n".$list2,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$list2 = "";
}}
if($text == "Show All ⌁ 3"){
if(file_exists("users3")){
$users = explode("\n", file_get_contents("users3"));
$list3 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list3 = $list3 . "\n$i  ➧ @$user";
$i++;}}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "The All Users List 3 !  \n".$list3,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$list3 = "";
}}
if($text == "Show All ⌁ 4"){
if(file_exists("users4")){
$users = explode("\n", file_get_contents("users4"));
$list4 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list4 = $list4 . "\n$i  ➧ @$user";
$i++;}}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "The All Users List 4 !  \n".$list4,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$list4 = "";
}}
if($text == "Show All ⌁ 5"){
if(file_exists("users5")){
$users = explode("\n", file_get_contents("users5"));
$list5 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list5 = $list5 . "\n$i  ➧ @$user";
$i++;}}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "The All Users List 1 !  \n".$list5,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$list5 = "";
}}
####الضغطات####
$in = json_decode(file_get_contents('in.json'),true);
$loop1 = $in["loop1"];
$loop2 = $in["loop2"];
$loop3 = $in["loop3"];
$loop4 = $in["loop4"];
$loop5 = $in["loop5"];
if ($chat_id == $group) {
if ($text == "Requests") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "1 - Loops ➪ {$loop1}\n————————————\n2 - Loops ➪ {$loop2}\n————————————\n3 - Loops ➪ {$loop3}\n————————————\n4 - Loops ➪ {$loop4}\n————————————\n5 - Loops ➪ {$loop5}",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}}
###الرقام###
$info = json_decode(file_get_contents('info.json'),true);
$number1 = $info["number1"];
$number2 = $info["number2"];
$number3 = $info["number3"];
$number4 = $info["number4"];
$number5 = $info["number5"];
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
if ($chat_id == $group) {
if($text == "Numbers") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "1 - NUMBER ➪ {$number1}\n————————————\n2 - NUMBER ➪ {$number2}\n————————————\n3 - NUMBER ➪ {$number3}\n————————————\n4 - NUMBER ➪ {$number4}\n————————————\n5 - NUMBER ➪ {$number5}",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
}}
####تثبيت بل كل الستات####
if ($text == "Pin All") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "ارسل اليوزر التثبيته بكل الستات",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
file_put_contents('mode', 'pinall');
shell_exec("pm2 stop aa.php && pm2 stop ac.php && pm2 stop bu.php && pm2 stop bc.php && pm2 stop cc.php && pm2 stop ca.php && pm2 stop da.php && pm2 stop dc.php && pm2 stop ea.php && pm2 stop ec.php");
unlink('users');
unlink('users2');
unlink('users3');
unlink('users4');
unlink('users5');
}

#####رن الكل####
if ($text == "Run All") {
$type = file_get_contents("type");
if($type == "c"){
shell_exec("pm2 stop ac.php && pm2 start ac.php");
}
if($type == "a"){
shell_exec("pm2 stop aa.php && pm2 start aa.php");
}
$type = file_get_contents("type2");
if($type == "c"){
shell_exec("pm2 stop bc.php && pm2 start bc.php");
}
if($type == "a"){
shell_exec("pm2 stop bu.php && pm2 start bu.php");
}
$type = file_get_contents("type3");
if($type == "c"){
shell_exec("pm2 stop cc.php && pm2 start cc.php");
}
if($type == "a"){
shell_exec("pm2 stop ca.php && pm2 start ca.php");
}
$type = file_get_contents("type4");
if($type == "c"){
shell_exec("pm2 stop dc.php && pm2 start dc.php");
}
if($type == "a"){
shell_exec("pm2 stop da.php && pm2 start da.php");
}
$type = file_get_contents("type5");
if($type == "c"){
shell_exec("pm2 stop ec.php && pm2 start ec.php");
}
if($type == "a"){
shell_exec("pm2 stop ea.php && pm2 start ea.php");
}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Run all checkers 🐊",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "on";
file_put_contents('info.json', json_encode($info));
}
if ($text == "Stop All") {
shell_exec("pm2 stop al.php && pm2 stop bl.php && pm2 stop cl.php && pm2 stop dl.php && pm2 stop el.php && pm2 stop aa.php && pm2 stop ac.php && pm2 stop bu.php && pm2 stop bc.php && pm2 stop cc.php && pm2 stop ca.php && pm2 stop da.php && pm2 stop dc.php && pm2 stop ea.php");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done stop all checkers ⚓",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"رجوع"]]], ]) ]);
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
}
}}}}
while (true) {
global $last_up;
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
run($get_up);
sleep(1);
}}
?>