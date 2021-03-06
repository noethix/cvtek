<?php
//FONCTIONS
//--FONCTION QUI SUPPRIME LES ACCENTS
function removeAccents($str) {
    $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή');
    $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η');
    return str_replace($a, $b, $str);
}
//--FONCTION QUI NETTOIE LA SAISIE
function cleanInput($str) {
	//si l'utilisateur par mégarde met des espaces avant ou après le mot
	
	$str=trim($str);
	
	//si l'utilisateur saisit des caractères accentués, on remplace ces caractères par les mêmes caractères mais sans accentués
	$str=removeAccents($str);
	
	//si l'utilisateur saisit des majuscules, on met la saisie en minuscules
	$str=strtoupper($str);
	
	return $str;
}
//--FONCTION AFFICHAGE DES CANDIDATS UTILISEE SUR L'AFFICHAGE SIMPLE + AFFICHAGE DU TRI. LA FONCTION "RECHERCHE" NE FAIT PAS APPEL A CETTE FONCTION.
function affichage($candidats)
{
    print PHP_EOL;
    print PHP_EOL;
    foreach($candidats as $key => $value)
    {
        print ("ID: ".$key);
        print PHP_EOL;
        foreach($value as $key1 => $value1)
        {
            if($key1 == "Skills")
                {
                print($key1.":") .PHP_EOL;
                for($i = 0; $i <  count($value1); $i++)
                    {
                     print($value1[$i]." | ");
                    }
                }
            else
            {
            print($key1);
            print(" ");
            print($value1);
            print(" ") .PHP_EOL;
            }
        }
        print PHP_EOL;
        print PHP_EOL;
        print PHP_EOL;
    }
}
//--FONCTION EXTRACTION DU FICHIER CSV
function csv_to_array($filename='hrdata.csv', $delimiter=';')
{
    $nul= "NULL";
    if(!file_exists($filename) || !is_readable($filename))
    {
        return FALSE;
    }
    $candidats = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($information = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            $temp=array();
            $temps=array();
            $temp["LastName"] = strtoupper(removeAccents(trim($information[1])));
            $temp["FirstName"] = strtoupper(removeAccents(trim($information[2])));
            $temp["Birthdate"] = trim($information[4]);
            $temp["Age"] = age($information[4]);
            $temp["Address1"] = strtoupper(removeAccents(trim($information[5])));
            $temp["Address2"]= strtoupper(removeAccents(trim($information[6])));
            $temp["Postcode"]=strtoupper(removeAccents(trim($information[7])));
            $temp["Town"]=strtoupper(removeAccents(trim($information[8])));
            $temp["Mobile"] = trim($information[9]);
            $temp["Phone"] =trim($information[10]);
            $temp["Mail"] = strtoupper(removeAccents(trim($information[11])));
            $temp["Profile"] = strtoupper(removeAccents(trim($information[12])));
			$count_skills=0;
            for($i=0; $i<10; $i++)
            {    
                if ($information[$i+13] !=$nul)
				{
					$count_skills++;
					$temps[]=strtoupper(removeAccents(trim($information[$i+13])));
				}
            }
            $temp["Skills"] = $temps;
			if ($count_skills>=5 && $temp["LastName"]!=$nul && $temp["FirstName"]!=$nul && $temp["Birthdate"]!=$nul && $temp["Mobile"]!=$nul && $temp["Mail"]!=$nul && $temp["Profile"]!=$nul)
			{
            $candidats[] = $temp;
			}
        }
        fclose($handle);    
    }   
    unset($candidats[0]);
    return $candidats;
}
//--FONCTION CALCULE L'AGE A PARTIR DE L'ANNEE DE NAISSANCE
function age ($DOB)
{
    $DOB = str_replace("/", "-", $DOB);
    $today = date("d-m-Y");
    $cal = strtotime($today) - strtotime($DOB);
    $age = intval($cal/(60*60*24*365.25));
	return $age;
}
?>