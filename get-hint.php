<?php

//Let's fill up array

$a[]="Afghanistan";
$a[]="Albania";
$a[]="Algeria";
$a[]="Andorra";
$a[]="Angola";
$a[]="Antigua";
$a[]="Argentina";
$a[]="Armenia";
$a[]="Australia";
$a[]="Austria";
$a[]="Azerbaijan";
$a[]="Bahamas";
$a[]="Bahrain";
$a[]="Bangladesh";
$a[]="Barbados";
$a[]="Belarus";
$a[]="Belgium";
$a[]="Belize";
$a[]="Benin";
$a[]="Bhutan";
$a[]="Bolivia";
$a[]="Bosnia Herzegovina";
$a[]="Botswana";
$a[]="Brazil";
$a[]="Brunei";
$a[]="Bulgaria";
$a[]="Burkina";
$a[]="Burundi";
$a[]="Cambodia";
$a[]="Cameroon";
$a[]="Canada";
$a[]="Cape Verde";
$a[]="Central African Rep";
$a[]="Chad";
$a[]="Chile";
$a[]="China";
$a[]="Colombia";
$a[]="Comoros";
$a[]="Congo";
$a[]="Congo {Democratic Rep}";
$a[]="Costa Rica";
$a[]="Croatia";
$a[]="Cuba";
$a[]="Cyprus";
$a[]="Czech Republic";
$a[]="Denmark";
$a[]="Djibouti";
$a[]="Dominica";
$a[]="Dominican Republic";
$a[]="East Timor";
$a[]="Ecuador";
$a[]="Egypt";
$a[]="El Salvador";
$a[]="Equatorial Guinea";
$a[]="Eritrea";
$a[]="Estonia";
$a[]="Ethiopia";
$a[]="Fiji";
$a[]="Finland";
$a[]="France";
$a[]="Gabon";
$a[]="Gambia";
$a[]="Georgia";
$a[]="Germany";
$a[]="Ghana";
$a[]="Greece";
$a[]="Grenada";
$a[]="Guatemala";
$a[]="Guinea";
$a[]="Guinea-Bissau";
$a[]="Guyana";
$a[]="Haiti";
$a[]="Honduras";
$a[]="Hungary";
$a[]="Iceland";
$a[]="India";
$a[]="Indonesia";
$a[]="Iran";
$a[]="Iraq";
$a[]="Ireland {Republic}";
$a[]="Israel";
$a[]="Italy";
$a[]="Ivory Coast";
$a[]="Jamaica";
$a[]="Japan";
$a[]="Jordan";
$a[]="Kazakhstan";
$a[]="Kenya";
$a[]="Kiribati";
$a[]="Korea North";
$a[]="Korea South";
$a[]="Kosovo";
$a[]="Kuwait";
$a[]="Kyrgyzstan";
$a[]="Laos";
$a[]="Latvia";
$a[]="Lebanon";
$a[]="Lesotho";
$a[]="Liberia";
$a[]="Libya";
$a[]="Liechtenstein";
$a[]="Lithuania";
$a[]="Luxembourg";
$a[]="Macedonia";
$a[]="Madagascar";
$a[]="Malawi";
$a[]="Malaysia";
$a[]="Maldives";
$a[]="Mali";
$a[]="Malta";
$a[]="Montenegro";
$a[]="Marshall Islands";
$a[]="Mauritania";
$a[]="Mauritius";
$a[]="Mexico";
$a[]="Micronesia";
$a[]="Moldova";
$a[]="Monaco";
$a[]="Mongolia";
$a[]="Morocco";
$a[]="Mozambique";
$a[]="Myanmar";
$a[]="{Burma}";
$a[]="Namibia";
$a[]="Nauru";
$a[]="Nepal";
$a[]="Netherlands";
$a[]="New Zealand";
$a[]="Nicaragua";
$a[]="Niger";
$a[]="Nigeria";
$a[]="Norway";
$a[]="Oman";
$a[]="Pakistan";
$a[]="Palau";
$a[]="Panama";
$a[]="Papua New Guinea";
$a[]="Paraguay";
$a[]="Peru";
$a[]="Philippines";
$a[]="Poland";
$a[]="Portugal";
$a[]="Qatar";
$a[]="Romania";
$a[]="Russian Federation";
$a[]="Rwanda";
$a[]="St Kitts & Nevis";
$a[]="St Lucia";
$a[]="Saint Vincent & the Grenadines";
$a[]="Samoa";
$a[]="San Marino";
$a[]="Sao Tome & Principe";
$a[]="Saudi Arabia";
$a[]="Senegal";
$a[]="Serbia";
$a[]="Seychelles";
$a[]="Sierra Leone";
$a[]="Singapore";
$a[]="Slovakia";
$a[]="Slovenia";
$a[]="Solomon Islands";
$a[]="Somalia";
$a[]="South Africa";
$a[]="Spain";
$a[]="Sri Lanka";
$a[]="Sudan";
$a[]="Suriname";
$a[]="Swaziland";
$a[]="Sweden";
$a[]="Switzerland";
$a[]="Syria";
$a[]="Taiwan";
$a[]="Tajikistan";
$a[]="Tanzania";
$a[]="Thailand";
$a[]="Togo";
$a[]="Tonga";
$a[]="Trinidad & Tobago";
$a[]="Tunisia";
$a[]="Turkey";
$a[]="Turkmenistan";
$a[]="Tuvalu";
$a[]="Uganda";
$a[]="Ukraine";
$a[]="United Arab Emirates";
$a[]="United Kingdom";
$a[]="United States";
$a[]="Uruguay";
$a[]="Uzbekistan";
$a[]="Vanuatu";
$a[]="Vatican City";
$a[]="Venezuela";
$a[]="Vietnam";
$a[]="Yemen";
$a[]="Zambia";
$a[]="Zimbabwe";


$q = $_GET["q"];
//$sid = $_GET["sid"];

if(strlen($q)>0) {
	$hint = "";
	for ($i=0; $i < count($a); $i++) { 
		if(strtolower($q)==strtolower(substr($a[$i], 0, strlen($q)))){ // have match!
			if($hint == "") {
				$hint = $a[$i]; // first (one) choice
			}
			else {
				$hint = $hint . ", " . $a[$i]; // build multiple choice
			}
		}
	}
}

if ($hint== "") {
	$response = " no suggestions, sorry!";
} else {
	$response = $hint;
}

echo ($response);

//echo ($a[rand(0, count($a) - 1)] . " " . $q . " " . $sid);

?>