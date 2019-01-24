<?php

// Variables

$ID = 0;
$IDs = 0;
$saisie=0;
$validation = false;
$nul = "NULL";
$Skills=array();
$informations=array();
$candidats=csv_to_array('hrdata.csv');
$compteur= 0;
$four = "4 - Recherche  ";


//FONCTIONS

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


function affichage($candidats)
{
    print PHP_EOL;
    print PHP_EOL;
    foreach($candidats as $key => $value)
    {
        print($key);
        print(" ");
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

function csv_to_array($filename='hrdata.csv', $delimiter=';')
{
	$nul= "NULL";
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;
    
    $candidats = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($information = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            $temp=array();
            $temps=array();
            $temp["LastName"] = $information[1];
            $temp["FirstName"] = $information[2];
            $temp["Age"] = age($information[4]);
            $temp["Birthdate"] = $information[4];
            $temp["Address1"] = $information[5];
            $temp["Address2"]= $information[6];
            $temp["Postcode"]=$information[7];
            $temp["Town"]=$information[8];
            $temp["Mobile"] = $information[9];
            $temp["Phone"] =$information[10];
            $temp["Mail"] = $information[11];
            $temp["Profile"] = $information[12];
			$count_skills=0;
            for($i=0; $i<10; $i++)
            {    
				
				if ($information[$i+13] !=$nul)
				{
					$count_skills++;
					$temps[]=$information[$i+13];
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
function age ($DOB)
{
    $DOB = str_replace("/", "-", $DOB);
    $today = date("d-m-Y");
    $cal = strtotime($today) - strtotime($DOB);
    $age = intval($cal/(60*60*24*365.25));
	return $age;
}
//DÉBUT DU PROGRAMME:
csv_to_array('hrdata.csv');


//General menu:
a:
print PHP_EOL;
print("Menu, ou voulez vous aller? "). PHP_EOL;
print PHP_EOL;
print "1 - Liste des candidats ". PHP_EOL;
print "2 - Ajout de candidat ". PHP_EOL;
print "3 - Modification des informations d'un candidat ". PHP_EOL;
print "4 - Recherche  ". PHP_EOL;
print "5 - Quitter ". PHP_EOL;
$menu=readline("Votre choix: ");
print  PHP_EOL;
switch ($menu) {
    case "1":
    goto li;
    case "2":
    goto ad;
    case "3":
    goto mo;
    case "4":   
    goto se;
    case "5":
    goto qu;
    default:
    print "Choisir un chiffre entre 1 et 5". PHP_EOL;
    print PHP_EOL;
    goto a;
}


// Candidates list's menu et affichage de la liste

li:
print "Liste des candidats: ". PHP_EOL;
print PHP_EOL;

foreach($candidats as $key => $informations) 
{
    $LastNamesA[$key] = $informations["LastName"];
}
array_multisort($LastNamesA, SORT_ASC, $candidats);
affichage($candidats);

tri:
print "De quelle facon voulez vous trier la liste?". PHP_EOL;
print PHP_EOL;
print PHP_EOL;
print "1 - Trier par nom (descendant)". PHP_EOL;
print "2 - Trier par ville (ascendant)". PHP_EOL;
print "3 - Trier par ville (descendant)". PHP_EOL;
print "4 - Trier par age (ascendant)". PHP_EOL;
print "5 - Trier par age (descendant)". PHP_EOL;
print "6 - Trier par profil (ascendant)". PHP_EOL;
print "7 - Trier par profil (descendant)". PHP_EOL;
print "8 - RETOUR AU MENU PRINCIPAL". PHP_EOL;
print PHP_EOL;
$choices= readline("Votre choix: ");
print PHP_EOL;
switch ($choices) {

    case "1":
    goto nomD;

    case "2":
    goto villeA;

    case "3":
    goto villeD;

    case "4":
    goto ageA;

    case "5":
    goto ageD;

    case "6":
    goto profileA;

    case "7":
    goto profileD;

    case "8":
    goto retour;

    default:
    print "Votre choix: ".PHP_EOL;
    print PHP_EOL;
    goto li;
}


nomD:
//Sort Last Names Z->A
foreach($candidats as $key => $informations) 
{
   /* if ($informations["LastName"] == $nul) 
    {
        $informations["LastName"] = " ";
    }*/
    $LastNamesD[$key] = $informations["LastName"];
}
array_multisort($LastNamesD, SORT_DESC, $candidats);
affichage($candidats);
goto tri;


villeA:
//Sort Town A->Z
foreach($candidats as $key => $informations) 
{ 
    if ($informations["Town"] == $nul) 
    {
        $informations["Town"] = "zzz";
    }
    $TownsA[$key] = $informations["Town"];
    
}
array_multisort($TownsA, SORT_ASC, $candidats);
affichage($candidats);
goto tri;

villeD:
//Sort Town Z->A
foreach($candidats as $key => $informations) 
{
    if ($informations["Town"] == $nul) 
    {
        $informations["Town"] = " ";
    }
    $TownsD[$key] = $informations["Town"];
}
array_multisort($TownsD, SORT_DESC, $candidats);
affichage($candidats);
goto tri;

ageA:
//Sort by ascending age
foreach($candidats as $key => $informations) 
{
    $agesA[$key] = $informations["Age"];
}
array_multisort($agesA, SORT_ASC, $candidats);
affichage($candidats);
goto tri;

ageD:
//Sort by descending age
foreach($candidats as $key => $informations) 
{
    $agesD[$key] = $informations["Age"];
}
array_multisort($agesD, SORT_DESC, $candidats);
affichage($candidats);
goto tri;

profileA:
//Sort by ascending profile
foreach($candidats as $key => $informations) 
{
    $profileA[$key] = $informations["Profile"];
}
array_multisort($profileA, SORT_ASC, $candidats);
affichage($candidats);
goto tri;

profileD:
//Sort by descending profile
foreach($candidats as $key => $informations) 
{
    
    $profileD[$key] = $informations["Profile"];
}
array_multisort($profileD, SORT_DESC, $candidats);
affichage($candidats);
goto tri;

retour:
goto a;


//Ajout d'un nouveau candidat:
ad:
print PHP_EOL;
print "Nouveau Candidat" .PHP_EOL;
print PHP_EOL;
print("Nom: ");
$informations["LastName"]=readline();
while (empty($informations["LastName"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Nom: ");
	$informations["LastName"]=readline();
}	
print("Prénom: ");
$informations["FirstName"]=readline();
while (empty($informations["FirstName"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Prénom: ");
	$informations["FirstName"]=readline();
}
print("Date de naissance au format dd-mm-yyyy: ");
$informations["Birthdate"]=readline();
while (empty($informations["Birthdate"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Date de naissance au format dd-mm-yyyy: ");
	$informations["Birthdate"]=readline();
}
$informations["Birthdate"];
print("Âge: ");
print $informations["Age"]= age ($informations["Birthdate"]) .PHP_EOL;
print("Adresse: ");
$informations["Address1"]=readline();
print("Adresse suite: ");
$informations["Address2"]= readline();
print("Code postal: ");
$informations["Postcode"]= readline();
print("Ville: ");
$informations["Town"]= readline();
print("Téléphone fixe: ");
$informations["Phone"]=readline();
print("Téléphone portable: ");
$informations["Mobile"]=readline ();
while (empty($informations["Mobile"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Téléphone portable: ");
	$informations["Mobile"]=readline ();
}
print("Mail: ");
$informations["Mail"]= readline();
while (empty($informations["Mail"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Mail: ");
	$informations["Mail"]= readline();
}
print("Profil recherché: ");
$informations["Profile"]=readline ();
while (empty($informations["Profile"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Profil recherché: ");
	$informations["Profile"]=readline ();
}	
print("Compétences, de 5 minimum à 10 maximum: ") .PHP_EOL;
for($i=0; $i < 10; $i++)
{
     $NumComp = $i+1;
    print("Compétence n°".$NumComp) .PHP_EOL;
    $buffer = readline();
        if($i < 5 && empty($buffer))
        {
            while(empty($buffer))
            {
                print("Il y a moins de cinq compétences, merci de rentrer cinq compétences minimum") .PHP_EOL;
                $buffer = readline();
            }
        }
    $Skills[$i] = $buffer;
}
$informations["Skills"]=$Skills;
$candidats[]=$informations;
print_r($informations);
print PHP_EOL;
print "Voulez-vous retourner au Menu principal?". PHP_EOL;
print "Si oui, tapez 1. Sinon, tapez 2 : ";
$saisie= readline();
print PHP_EOL;
$saisie= intval ($saisie); //Fonction pour convertir une chaîne en numérique
if ($saisie!=1) //Si pas de fontion de conversion, mettre la valeur entrez guillemets " " => ($saisie != "1")
{
	goto qu;
}
else
{
	goto a;
}


//Modification du fichier candidat:
mo:
print PHP_EOL;
print("Quel profil voulez vous modifier . ");
$search ="";
$search= readline();
foreach($candidats as $key => $value)
{
        if(in_array($search , $value))
        {
            print" ";
            print("Une ou plusieurs correspondance trouvée") .PHP_EOL;
            print("ID:" . $key);
            foreach($value as $key1 => $value1)
            {
                if($key1 == "Skills")
                {
                    print PHP_EOL;
                    print("Skills: ");
                    print PHP_EOL;
                    for($i = 0; $i < count($value1); $i++)
                    {
                        print($value1[$i]." | ");
                    }
                }
                else
                {
                    print($key1.": ");
                    print($value1." | ");
                    print " ";
                }
            }
        }
    } 
print("Entrez l'ID de la personne que vous souhaitez modifier") .PHP_EOL;
$ID = readline();
print("Que voulez vous modifier -Entrer un clé-") .PHP_EOL;
$Askey = readline();
if($Askey == "Skills")
{
    for($i = 0; $i < count($value1) ; $i++)
        {
            print("Compétence N°".$i." ");
            print($value1[$i]) .PHP_EOL;
        }
        print("Entrez l'ID de la compétence à éditer") .PHP_EOL;
        $IDs = readline();

        print("Entrez la nouvelle valeur");
        $candidats[$ID][$Askey][$IDs] = readline();
}
else
{
    print("Entrez la nouvelle valeur");
    $candidats[$ID][$Askey] = readline();
}

goto a;


//Recherche de candidat  selon variable:
se:
$temp= 0;
$choice = 0;
$search = "";
$validation = false;
print PHP_EOL;
print("Selectionnez le type de recherche souhaité") .PHP_EOL;
print("1 ֍ Par Nom") .PHP_EOL;
print("2 ֍ Par Ville") .PHP_EOL;
print("3 ֍ Par Age") .PHP_EOL;
print("4 ֍ Par compétences") .PHP_EOL;
$choice = readline();
switch($choice)
{
    case(1):
        print("Entrez le nom recherché") .PHP_EOL;
        $search=readline();
        foreach($candidats as $key => $value)
        {
                if(in_array($search , $value))
                {
                    print("Une ou plusieurs correspondance trouvée") .PHP_EOL;
                    foreach($value as $key1 => $value1)
                    {
                        if($key1 == "Skills")
                        {
                            print PHP_EOL;
                            print("Skills: ");
                            print PHP_EOL;
                            for($i = 0; $i < 10; $i++)
                            {
                                print($value1[$i]." | ");
                            }
                        }
                        else
                        {
                            print($key1.": ");
                            print($value1." | ");
                            print " ";
                        }
                    }
                }
            } 
        goto se;  
    case(2):            
        print("Entrez la ville recherchée") .PHP_EOL;
        $search=readline();
        strtoupper($search);
        foreach($candidats as $key => $value)
        {
                if(in_array($search , $value))
                {
                    print("Une ou plusieurs correspondance trouvée") .PHP_EOL;
                    foreach($value as $key1 => $value1)
                    {
                        if($key1 == "Skills")
                        {
                            print PHP_EOL;
                            print("Skills: ");
                            print PHP_EOL;
                            for($i = 0; $i < 10; $i++)
                            {
                                print($value1[$i]." | ");
                            }
                        }
                        else
                        {
                            print($key1.": ");
                            print($value1." | ");
                            print " ";
                        }
                    }
                }    
            }
            goto se;
            
        case(3):    
        print("Entrez l'âge") .PHP_EOL;
        $search=readline();
        while(!is_numeric($search))
        {
            print("Mauvaise saisie, merci de d'entrer un nombre");
            $search=readline();
        }
        floor($search);
        foreach($candidats as $key => $value)
            {
                if(in_array($search , $value))
                {
                    if($value["Age"] == $search)
                    {
                    
                    print("Une ou plusieurs correspondance trouvée") .PHP_EOL;
                    foreach($value as $key1 => $value1)
                    {
                        if($key1 == "Skills")
                        {
                            $validation = true;
                            print PHP_EOL;
                            print("Skills: ");
                            print PHP_EOL;
                            for($i = 0; $i < 10; $i++)
                            {
                                print($value1[$i]." | ");
                            }
                        }
                        else
                        {
                            print($key1.": ");
                            print($value1." | ");
                            print " ";
                        }
                    }
                    }
                } 
            }
            if($validation == false)
            {
                print("Result not founds") .PHP_EOL;
            }   
            goto se;
        case(4):            
        print("Entrez la compétence recherchée") .PHP_EOL;
        $search=readline();
        foreach($candidats as $key => $value)
        {
            {
            foreach($value as $key1 => $value1)
                {
                    if($key1 == "Skills")
                    {
                        for($i = 0; $i < 10; $i++)
                        {
                            if(in_array($search , $value1))
                            {
                                foreach($value as $key1 => $value1)
                                    {
                                    if($key1 == "Skills")
                                    {
                                        $validation = true;
                                        print("Skills: ");
                                        print PHP_EOL;
                                        for($i = 0; $i < count($value1); $i++)
                                        {
                                         print($value1[$i]." | ");
                                        }
                                    }
                                    else
                                    {
                                        print($key1.": ");
                                        print($value1." | ");
                                        print " ";
                                    }
                                    print PHP_EOL;
                                    }
                            }
                        }
                    }
                }
                print " ";
                print PHP_EOL;    
            }
        }
    if($validation == false)
    {
        print("Result not founds") .PHP_EOL;
    }   
    goto se;
}


//Fin du programme:
qu: 
print PHP_EOL;
print "Voulez-vous vraiment quitter le programme ? y/N ";
$YesNo = readline();
$YesNo = strtoupper($YesNo);
    if($YesNo[0] == "Y")
    {
        print "Vous quittez le programme". PHP_EOL;
        goto end;
    }
    else
    {
        goto a;
    }
    end:
?>
?>