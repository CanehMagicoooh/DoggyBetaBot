<?

$token = "1006318218:AAG_FHs-B4xPW_pK00NOHPW2fwaJgxann9g";
$website = "https://api.telegram.org/bot".$token;

$update = file_get_contents('php://input');
$update = json_decode($update, true);

//VARIABILI
$text = $update['message']['text'];
$chatId = $update['message']['chat']['id'];
$userId = $update['message']['from']['id'];
$replyUserId = $update['message']['reply_to_message']['from']['id'];
$username = $update['message']['from']['username'];
$firstname = $update['message']['from']['first_name'];
$lastname = $update['message']['from']['last_name'];
$message_id = $update['message']['message_id'];

if($username == "") {
  $username == "-";
} else {
  $username == "@$username";
}

$query = $update['callback_query'];
$queryId = $query['id'];
$quid= $query['from']['id'];
$qcid= $query['message']['chat']['id'];
$queryUsername = $query['from']['username'];
$queryName = $query['from']['first_name'];
$querydata = $query['data'];
$qmsgid = $query['message']['message_id'];

//TASTIERE
$startkey = '[{"text":"📃 Vocaboli 📃","callback_data":"vocaboli"}],[{"text":"💾 Info 💾","callback_data":"info"},{"text":"💎 Vip 💎","callback_data":"vip"}],[{"text":"➕ Aggiungimi ad un gruppo ➕","url":"https://t.me/DoggyMagicBot?startgroup=start"}],[{"text":"🐕 Canile 🐕","callback_data":"canile"},{"text":"⚙️ Creatore ⚙️","url":"https://telegram.me/Reverseeh"}],[{"text":"💿 Patch Notes 💿","url":"https://t.me/joinchat/AAAAAFEGbgwg5tCQxdxxBQ"}]';
$privilegi = '[{"text":"🔑 Privilegi 🔑","callback_data":"privilegi"}]';
$back = '[{"text":"🔙 Torna Indietro 🔙","callback_data":"indietro"}]';
$priv = '[{"text":"📲 Vai In Chat","url":"https://t.me/DoggyMagicBot"}]';
$vipkey = '[{"text":"🔑 Privilegi 🔑","callback_data":"privilegi"}],[{"text":"🔙 Torna Indietro 🔙","callback_data":"indietro"}]';
$backvip = '[{"text":"🔙 Torna Indietro 🔙","callback_data":"indietrovip"}]';

$startmsg = "<b>Ciao $firstname$queryName sono Doggy🐶!\nSono un bot molto simpatico che serve a rendere la chat del vostro gruppo molto più bella!</b>\n\n<i>Clicca Vocaboli per vedere tutto quello che posso fare!</i>";
$comandi = "<b>Vocaboli📃</b>\n\n◽️ Ciao\n◽️ Come stai?\n◽️ Cosa hai mangiato oggi?\n◽️ Sad\n◽️ Rip\n◽️ Quirk\n◽️ Pillole\n◽️ Andiamo\n◽️ Oh My Godness\n◽️ Palla\n◽️ Doggy\n◽️ Ti voglio bene\n◽️ Tu / No tu\n◽️ Ti odio\n◽️ Doggy?\n◽️ Ma\n◽️ Sei stupido\n◽️ Non è vero\n◽️ 118\n◽️ ?\n◽️ Perchè?\n◽️ 666\n◽️ Xd\n◽️ Basta\n◽️ Non saprei\n◽️ Chi è il tuo pardone?\n◽️ Dove sei?\n◽️ Usciamo?\n◽️ No\n◽️ Si\n◽️ Nulla\n◽️ Ovvio\n◽️ Gesu\n◽️ Mi canti una canzone?\n◽️ Avada Kedavra\n◽️ Woof\n◽️ Io sono tuo padre\n◽️ Quand è il tuo compleanno?\n◽️ Fortnite\n◽️ Girati\n◽️ Sei un faschion blogger?\n◽️ Sai respirare?\n◽️ Fai schifo\n◽️ Sei sexy\n◽️ Ok\n◽️ Voglio suicidarmi\n◽️ Ho paura\n◽️ Katto\n◽️ Conosci Katto?\n◽️ Shh\n◽️ Sei un cancro\n◽️ Diesel\n◽️ Togliete Doggy\n◽️McDonald's (@NoQuitt)\n◽️ OverFive (@OFRiuh)\n◽️ Kebab (@OFdm4)\n◽️ Burger King (@Gius_00)\n◽️ Netflix (@easyjump)\n◽️ Reverse (@Sak3y)\n◽️ Chip (@Sak3y)\n◽️ Dazn (@Makries)\n◽️ Yanklee (@yankleecandle)\n\n<i>Per ora ci sono</i> <b>70</b> <i>vocaboli!</i>";
$vip = "<b>Zona Vip💎</b>\n\n<i>▫️@yankleecandle (5.00€) 💎\n▫️@easyjump (1.50€)\n▫️@notsoicyy (1.00€)\n▫️@ImNotAlex99 (1.00€)\n▫️@Diesel95 (1.00€)\n▫️@Gius_00 (1.00€)\n▫️@OFRiuh (0.75€)\n▫️@OFdm4 (0.50€)\n▫️@NoQuitt (0.50€)</i>";
$privilegimsg = "<b>Privilegi🔑</b>\n\n<i>Se diventi vip, potrai accedere ai seguenti privilegi</i>\n\n<i>▫️Vocaboli personali\n▫️Accesso ai vocaboli: Pesca una carta, Pesca due carte\n▫️Accesso ai comandi: /password\n\nOvviamente in futuro verranno aggiunti altri privilegi, per altre domande contatta @Reverseeh</i>";
$info = "<b>✏️Info\n\n⚙️Creator:</b> @Reverseeh\n<b>👤Group:</b> @DoggyGroup\n<b>🗣Channel:</b> @DoggyChannel\n<b>📱Twitter:</b> @CanehMagicooh\n<b>🖼Instagram:</b> CanehMagicooh";
$canile = "<b>Il canile🐕</b>\n\n<i>Nel canile ci sono tutti gli amici di Doggy</i>\n\n▫️@KattoRobot\n\n<i>⚙️Per essere aggiunti nel canile contattare @Reverseeh</i>";



if($querydata == "vocaboli") {
    editMessageText($qcid,$qmsgid,$comandi,$back);
    exit();
  }

  if($querydata == "vip") {
      editMessageText($qcid,$qmsgid,$vip,$vipkey);
      exit();
    }

    if($querydata == "privilegi") {
        editMessageText($qcid,$qmsgid,$privilegimsg,$backvip);
        exit();
      }

      if($querydata == "info") {
          editMessageText($qcid,$qmsgid,$info,$back);
          exit();
        }

        if($querydata == "canile") {
            editMessageText($qcid,$qmsgid,$canile,$back);
            exit();
          }


  if($querydata == "indietro") {
    editMessageText($qcid,$qmsgid,$GLOBALS[startmsg],$GLOBALS[startkey],"inline");
    exit();
  }

  if($querydata == "indietrovip") {
    editMessageText($qcid,$qmsgid,$GLOBALS[vip],$GLOBALS[vipkey],"inline");
    exit();
  }




if($chatId < 0) {
  switch(strtolower($text)) {
    case "/start": case "/start@doggymagicbot": case ".start": case "!start":
      sendMessage($chatId,"<code>Inviato in chat privata!</code>",$priv,"in");
      sendMessage($userId,$startmsg,$startkey,"in");
    break;
  }
} else {
  switch(strtolower($text)) {
    case "/start": case "/start@doggymagicbot": case ".start": case "!start":
      sendMessage($chatId,$startmsg,$startkey,"in");
    break;
  }
}


if($chatId < 0) {
  touch("dati/gruppi","$chatId");
} else {
  touch("dati/utenti","$userId");
}

$scangr = scandir("dati/gruppi");
$cntg = count($scangr);
$cntg = $cntg-1;

$scanus = scandir("dati/utenti");
$cntu = count($scanus);
$cntu = $cntu-1;

if($userId == 264577211) {
  if(strtolower($text == "/iscritti")) {
    sendMessage($chatId,"<b>Utenti :</b> $cntu\n<b>Gruppi :</b> $cntg");
  }
}

switch(strtolower($text)) {
  case "/comandi": case "/comandi@doggymagicbot": case ".comandi": case "!comandi":
  sendMessage($chatId,$comandi,$startkey,"inline");
  break;

  /*
  case "dado":
  sendDice($chatId,"🎲");
  break;
  */

  case "ciao":
  sendMessage($chatId,"Ciao @$username");
  break;
  case "paky":
  sendMessage($chatId,"Woof?");
  break;
  case "come stai?":
  sendMessage($chatId,"Bene, oggi mi sento un cane libero");
  break;
  case "cosa hai mangiato oggi?":
  sendMessage($chatId,"Croccantini, sempre e solo croccantini");
  break;
  case "rip":
  sendMessage($chatId,"Nooo mi era simpatico");
  break;
  case "sad":
  sendMessage($chatId,"Prova a far uscire la testa dal finestrino, a me rende felice");
  break;
  case "andiamo":
  sendMessage($chatId,"No, torniamo indietro");
  break;
  case "pillole": case "pillola":
  sendMessage($chatId,"Prova a cercare nel cassetto");
  break;
  case "voglio suicidarmi":
  sendMessage($chatId,"Ok, a dopo");
  break;
  case "quirk":
  sendMessage($chatId,"No, si dice Quork");
  break;
  case "oh my godness":
  sendMessage($chatId,"No, si dice Oh Mamma Bella!");
  break;
  case "palla":
  sendMessage($chatId,"La prendo io");
  break;
  case "doggy":
  sendMessage($chatId,"Dimmi tutto");
  break;
  case "ti voglio bene":
  sendMessage($chatId,"Anche io");
  break;
  case "tu":
  sendMessage($chatId,"No tu");
  break;
  case "no tu":
  sendMessage($chatId,"No tu");
  break;
  case "ti odio":
  sendMessage($chatId,"Dimmi cosa ti ho fatto di male, potremmo risolvere");
  break;
  case "ho paura":
  sendMessage($chatId,"Tranquillo ora c'è Doggy con te");
  break;
  case "?":
  sendMessage($chatId,"Cos'è che non hai capito?");
  break;
  case "118":
  sendMessage($chatId,"Non dirò quello che pensi, ormai questa meme è morta");
  break;
  case "...":
  sendMessage($chatId,"...");
  break;
  case "non è vero":
  sendMessage($chatId,"Ne sei proprio sicuro?");
  break;
  case "sei stupido":
  sendMessage($chatId,"perchè mi dici questo?");
  break;
  case "ma":
  sendMessage($chatId,"Cosa è successo?!");
  break;
  case "doggy?":
  sendMessage($chatId,"Si sono proprio io");
  break;
  case "diesel":
  sendMessage($chatId,"Goodbye");
  break;
  case "666":
  sendMessage($chatId,"Non invocarlo");
  break;
  case "xd":
  sendMessage($chatId,"Xdddd11!!1!!!");
  break;
  case "basta":
  sendMessage($chatId,"Ok mi sto zitto");
  break;
  case "ez":
  sendMessage($chatId,"Easy1111!!!!1!!!");
  break;
  case "perchè?": case "perche?": case "perché?":
  sendMessage($chatId,"Non saprei, prova a cercare su Wikipedia");
  break;
  case "ovvio":
  sendMessage($chatId,"Ovvviooooh!1!1!!111");
  break;
  case "nulla":
  sendMessage($chatId,"Sicuro sicuro?!");
  break;
  case "si":
  sendMessage($chatId,"Ok mi fido");
  break;
  case "no":
  sendMessage($chatId,"Mmm pensaci meglio");
  break;
  case "usciamo?":
  sendMessage($chatId,"Siii, adoro fare passeggiate!");
  break;
  case "dove sei?":
  sendMessage($chatId,"Nella mia cuccia a sgranocchiare un osso");
  break;
  case "chi è il tuo padrone?":
  sendMessage($chatId,"Un dawn");
  break;
  case "non saprei":
  sendMessage($chatId,"Nemmeno io");
  break;
  case "mcdonald's":
  sendMessage($chatId,"Ciccione dimagrisci, se vuoi @NoQuitt fa da dietologo");
  break;
  case "ok":
  sendMessage($chatId,"Ok");
  break;
  case "sei sexy":
  sendMessage($chatId,"Non sei il primo a dirmelo");
  break;
  case "fai schifo":
  sendMessage($chatId,"Scrivimi almeno cosa ho fatto");
  break;
  case "togliete sto doggy": case "togliete doggy": case "doggy esci": case "doggy vattene":
  sendMessage($chatId,"Ok addio");
  leaveChat($chatId,"");
  break;
  case "sai respirare?":
  sendMessage($chatId,"A cosa serve?");
  break;
  case "sei un faschion blogger?":
  sendMessage($chatId,"Si, cerca canemagicooh su Instagram");
  break;
  case "girati":
  sendMessage($chatId,"Gi-ra-ti e non rivolgere più lo sguardo!");
  break;
  case "fortnite":
  sendMessage($chatId,"Meglio Cod");
  break;
  case "quand'è il tuo compleanno?":
  sendMessage($chatId,"Il 28 Settembre");
  break;
  case "cosa ne pensi di paky?":
  sendMessage($chatId,"Scusa non ho capito bene");
  break;
  case "conosci paky?":
  sendMessage($chatId,"Sfortunatamente si, avrei preferito non conoscerlo");
  break;
  case "woof":
  sendMessage($chatId,"Woof wof f ww wof woof");
  break;
  case "avada kedavra":
  sendMessage($chatId,"Expecto Patronum!");
  break;
  case "io sono tuo padre":
  sendMessage($chatId,"No, il mio secondo padre è @AlonePlayer05");
  break;
  case "mi canti una canzone?":
  sendMessage($chatId,"Mi dispiace ma so solo abbaiare");
  break;
  case "overfive":
  sendMessage($chatId,"OverFive è bello, io prendo sempre da loro");
  break;
  case "kebab":
  sendMessage($chatId,"Non posso mangiarlo");
  break;
  case "dazn":
  sendMessage($chatId,"Contatta @Makries per account dazn");
  break;
  case "netflix":
  sendMessage($chatId,"Passa da @easyjump per averne qualcuno");
  break;
  case "reverse":
  sendMessage($chatId,"No si dice esrever");
  break;
  case "chip":
  sendMessage($chatId,"Scoiattolo! Scoiattolo! Scoiattolo!");
  break;
  case "burger king":
  sendMessage($chatId,"Che schifo! Meglio il McDonald's");
  break;
  case "gesu": case "gesù":
  sendMessage($chatId,"Preferisco essere chiamato Doggy");
  break;
  case "yanklee":
  sendMessage($chatId,"Miglior droga al mondo?\n@YankleeCandle ne vende molta.");
  break;
  case "sei un cancro":
  sendMessage($chatId,"Nooo vabbè, sei fortissimo, mi arrendo, perfavore non mi picchiare");
  break;
  case "katto":
  sendMessage($chatId,"Mi-mi- mia- Miao?");
  break;
  case "conosci katto?":
  sendMessage($chatId,"Si, è l'unico gatto che non voglio uccidere");
  break;
  case "shh":
  sendMessage($chatId,"Ok parliamo piano");
  break;

}







switch (strtolower($text))  {
    case "chi è il tuo padrone?":
    $num = rand(1,20);
    switch($num) {
  case 1:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 2:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 3:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 4:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 5:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 6:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 7:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 8:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 9:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 10:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 11:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 12:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 13:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 14:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 15:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 16:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 17:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 18:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 19:
  sendMessage($chatId, "Sono costretto a dire @Reverseeh");
  break;
  case 20:
  sendMessage($chatId,"Sono costretto a dire @Reverseeh");
  sendMessage($chatId,"Ma preferisco @AlonePlayer05 <i>(Abdul)</i>");
  break;
   }
  break;
}


$admins = [264577211,402879945];
if($userId == $admins) {
switch (strtolower($text))  {
    case "pesca una carta":
    $num = rand(1,7);
    $carta = rand(1,10);
    switch($num) {
case 1:
sendMessage($chatId, "Ho pescato: $carta ♠️");
break;
case 2:
sendMessage($chatId, "Ho pescato: $carta ♣️");
break;
case 3:
sendMessage($chatId, "Ho pescato: $carta ♥️");
break;
case 4:
sendMessage($chatId, "Ho pescato: $carta ♦️");
break;
case 5:
sendMessage($chatId, "Ho pescato: J ♦️");
break;
case 6:
sendMessage($chatId, "Ho pescato: Q ♦️");
break;
case 7:
sendMessage($chatId, "Ho pescato: K ♦️");
break;
case 8:
sendMessage($chatId, "Ho pescato: J ♥️");
break;
case 9:
sendMessage($chatId, "Ho pescato: Q ♥️");
break;
case 10:
sendMessage($chatId, "Ho pescato: K ♥️");
break;
case 11:
sendMessage($chatId, "Ho pescato: J ♣️");
break;
case 12:
sendMessage($chatId, "Ho pescato: Q ♣️");
break;
case13:
sendMessage($chatId, "Ho pescato: K ♣️");
break;
case 14:
sendMessage($chatId, "Ho pescato: J ♠️");
break;
case 15:
sendMessage($chatId, "Ho pescato: Q ♠️");
break;
case 16:
sendMessage($chatId, "Ho pescato: K ♠️");
break;
}
break;
}

switch (strtolower($text))  {
    case "pesca due carte":
    $num = rand(1,7);
    $carta1 = rand(1,10);
    $carta2 = rand(1,10);
    switch($num) {
case 1:
sendMessage($chatId, "Ho pescato: $carta1 ♠️ e $carta2 ♣️");
break;
case 2:
sendMessage($chatId, "Ho pescato: $carta1 ♠️ e $carta2 ♥️");
break;
case 3:
sendMessage($chatId, "Ho pescato: $carta1 ♠️ e $carta2 ♠️");
break;
case 4:
sendMessage($chatId, "Ho pescato: $carta1 ♠️ e $carta2 ♦️");
break;
case 5:
sendMessage($chatId, "Ho pescato: $carta1 ♣️ e $carta2 ♣️");
break;
case 6:
sendMessage($chatId, "Ho pescato: $carta1 ♣️ e $carta2 ♥️");
break;
case 7:
sendMessage($chatId, "Ho pescato: $carta1 ♣️ e $carta2 ♠️");
break;
case 8:
sendMessage($chatId, "Ho pescato: $carta1 ♣️ e $carta2 ♦️");
break;
case 9:
sendMessage($chatId, "Ho pescato: $carta1 ♥️ e $carta2 ♣️");
break;
case 10:
sendMessage($chatId, "Ho pescato: $carta1 ♥️ e $carta2 ♥️");
break;
case 11:
sendMessage($chatId, "Ho pescato: $carta1 ♥️ e $carta2 ♠️");
break;
case 12:
sendMessage($chatId, "Ho pescato: $carta1 ♥️ e $carta2 ♦️");
break;
case 13:
sendMessage($chatId, "Ho pescato: $carta1 ♦️ e $carta2 ♣️");
break;
case 14:
sendMessage($chatId, "Ho pescato: $carta1 ♦️ e $carta2 ♥️");
break;
case 15:
sendMessage($chatId, "Ho pescato: $carta1 ♦️ e $carta2 ♠️");
break;
case 16:
sendMessage($chatId, "Ho pescato: $carta1 ♦️ e $carta2 ♦️");
break;
}
break;
}
if(stripos($text,"/password ") ===  0) {
  $ps = explode(" ",$text,2);
  $ms = $ps[1];
  if($ms > 60) {
    sendMessage($chatId,"<i>La lunghezza massima è 60 caratteri!</i>");
  } else if($ms >= 8 and $ms <= 60) {
    sendMessage($chatId,passwordGen($ms));
  } else if($ms < 8) {
    sendMessage($chatId,"<i>La lunghezza minima è 8 caratteri!</i>");
  }
}
}

function sendDice($chatId,$emo) {
  }

function pinMessage($chatId,$message_id,$nonotif) {
  $url = $GLOBALS[website]."/pinChatMessage?chat_id=$chatId&message_id=$message_id&disable_notification=$nonotif";
  file_get_contents($url);
}

function unpinMessage($chatId,$message_id,$nonotif) {
  $url = $GLOBALS[website]."/unpinChatMessage?chat_id=$chatId";
  file_get_contents($url);
}


function sendMessage($chatId,$text,$tastiera,$message_id,$tipo)
  {
    if(isset($tastiera)){
      if($tipo == "fisica"){
        $key = '&reply_markup={"keyboard":['.urlencode($tastiera).'],"resize_keyboard":true}';
      } else {
        $key = '&reply_markup={"inline_keyboard":['.urlencode($tastiera).'],"resize_keyboard":true}';
      }
    }
    $url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&disable_web_page_preview=".true."&parse_mode=HTML&text=".urlencode($text).$key;
    file_get_contents($url);
  }

  function editMessageText($chatId,$message_id,$newText,$tastiera,$tipo)
    {
     if(isset($tastiera)){
        if($tipo == "fisica"){
          $key = '&reply_markup={"keyboard":['.urlencode($tastiera).'],"resize_keyboard":true}';
        }
        else {
          $key = '&reply_markup={"inline_keyboard":['.urlencode($tastiera).'],"resize_keyboard":true}';
        }
      }
      $url = $GLOBALS[website]."/editMessageText?chat_id=$chatId&message_id=$message_id&disable_web_page_preview=".true."&parse_mode=HTML&text=".urlencode($newText).$key;
      file_get_contents($url);
    }

function deleteMessage($chatId,$message_id) {
  $url = $GLOBALS[website]."/deleteMessage?chat_id=$chatId&message_id=$message_id";
  file_get_contents($url);
}

function passwordGen($length) {
$chars = "abcdefghilmnopqrstuvzjkwyxABCDEFGHILMNOPQRSTUVZJKWYZ1234567890-_=";
$password = substr(str_shuffle($chars), 0, $length);
return $password;
}

function leaveChat($chatId) {
  $url = $GLOBALS[website]."/leaveChat?chat_id=$chatId";
  file_get_contents($url);
}
