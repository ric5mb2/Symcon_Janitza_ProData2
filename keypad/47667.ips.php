<?

// Installationsanleitung des Javascript KeyPads
// 1. String-Variable erstellen mit Profil ~HTMLBox für Aufnahme der Tastatur ($id_KeyboardHTMLBox)
// 2. String-Variable erstellen ohne Profil für Aufnahme der Eingabe über die Tastatur ($id_Value)
// 3. Höhe des iFrames eintragen (anpassen an die Breite in der css-Datei)
// 4. Breite des iFrames eintragen (anpassen an die Breite in der css-Datei)
// 5. Ausführen zum befüllen der HTML-Box. Muss auch bei Änderung dieses Skriptes nochmals ausgeführt werden

// Das Aussehen der Tastatur kann komplett in der /webfront/user/keyboard/css/style geändert werden

// Anfang Config

// ID der String-Variable (Profil: ~HTML-Box)
$id_KeyboardHTMLBox 	= 45719;

// ID der String-Variable die den eingegebenen Passcode bekommt.
$id_Value	 			= 13059;

// Maße des iFrames wie es in der HTMLBox angezeigt wird.
$height_iframe       = 300;
$width_iframe        = 180;

// Ende Config

// String-Variable mit HTML-Code befüllen
SetValue($id_KeyboardHTMLBox,'<center><iframe src="user/keyboard/index.html?ipsValue='.$id_Value.'" frameborder=0 height='.$height_iframe.'px width='.$width_iframe.'px></iframe></center>');

?>