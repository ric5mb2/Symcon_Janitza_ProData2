<?

// Installationsanleitung des Javascript KeyPads
// 1. String-Variable erstellen mit Profil ~HTMLBox f�r Aufnahme der Tastatur ($id_KeyboardHTMLBox)
// 2. String-Variable erstellen ohne Profil f�r Aufnahme der Eingabe �ber die Tastatur ($id_Value)
// 3. H�he des iFrames eintragen (anpassen an die Breite in der css-Datei)
// 4. Breite des iFrames eintragen (anpassen an die Breite in der css-Datei)
// 5. Ausf�hren zum bef�llen der HTML-Box. Muss auch bei �nderung dieses Skriptes nochmals ausgef�hrt werden

// Das Aussehen der Tastatur kann komplett in der /webfront/user/keyboard/css/style ge�ndert werden

// Anfang Config

// ID der String-Variable (Profil: ~HTML-Box)
$id_KeyboardHTMLBox 	= 45719;

// ID der String-Variable die den eingegebenen Passcode bekommt.
$id_Value	 			= 13059;

// Ma�e des iFrames wie es in der HTMLBox angezeigt wird.
$height_iframe       = 300;
$width_iframe        = 180;

// Ende Config

// String-Variable mit HTML-Code bef�llen
SetValue($id_KeyboardHTMLBox,'<center><iframe src="user/keyboard/index.html?ipsValue='.$id_Value.'" frameborder=0 height='.$height_iframe.'px width='.$width_iframe.'px></iframe></center>');

?>