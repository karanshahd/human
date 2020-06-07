<?php

session_start();
error_reporting(E_ALL);

// include 'mysqli_connect.php';
// $loginQuery =  $dbc->prepare('INSERT INTO generallogin VALUES(?, ? ,?, ?);');
// $loginQuery->bind_param("ssss", $uid, $username, $password, $type);

// $infoQuery = $dbc->prepare('INSERT INTO basicinfo VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
// $infoQuery->bind_param("sssissisiissss", $username, $name, $dob, $gender, $address, $contact, $emailId, $height, $weight, $blood, $profilePicUrl);

// $habitsQuery = $dbc->prepare('INSERT INTO habits VALUES(?, ?, ?, ?, ?, ?);');
// $habitsQuery->bind_param('ssssss', $username, $diet, $alcohol, $tobacco, $drugs, $allergies);

// $pastDiseasesQuery = $dbc->prepare('INSERT INTO pastdisease VALUES(?, ?, ?, ?, ?, ?, ?);');
// $pastDiseasesQuery->bind_param('sssssss', $username, $diseasename, $date_from, $date_to, $hospital_name, $medicines, $doctor);

// $currentDiseasesQuery = $dbc->prepare('INSERT INTO currentdisease VALUES(?, ?, ?, ?, ?, ?);');
// $currentDiseasesQuery->bind_param('ssssss', $username, $diseasename, $date_from, $hospital_name, $medicines, $doctor);

// $familyQuery =  $dbc->prepare('INSERT INTO family VALUES(?, ?, ?);');
// $familyQuery->bind_param('sss', $username, $familyMemberUsername, $relation);

// $insuranceQuery = $dbc->prepare('INSERT INTO insurance VALUES(?, ?, ?, ?);');
// $insuranceQuery->bind_param('sssiis', $username, $insuranceId $company, $premium, $limit, $insuranceType);

$genders = ['M', 'F', 'T'];
$addresses = ['London', 'Paris', 'New York', 'Tokyo', 'Barcelona', 'Moscow', 'Chicago', 'Singapore', 'Dubai', 'San Francisco', 'Madrid', 'Amsterdam', 'Los Angeles', 'Rome', 'Delhi', 'Boston', 'San Jose', 'Toronto', 'Washington DC', 'Zurich', 'Hong Kong', 'Beijing', 'Berlin', 'Sydney', 'Las Vegas', 'Mumbai', 'Frankfurt', 'Miami', 'San Diego', 'Seoul', 'Prague', 'Munich', 'Houston', 'Milan', 'Dublin', 'Bangalore', 'Seattle', 'Dallas', 'Istanbul', 'Vancouver', 'Melbourne', 'Vienna', 'Abu Dhabi', 'Calgary', 'Brussels', 'Denver', 'Doha', 'Oslo', 'Orlando', 'Austin', 'Stockholm', 'Montreal', 'Philadelphia', 'Brisbane', 'Atlanta', 'Copenhagen', 'Saint Petersburg', 'Perth', 'Minneapolis', 'Lisbon', 'Venice', 'Portland', 'Hamburg', 'Tel Aviv', 'Kolkata', 'Lyon', 'Florence', 'Stuttgart', 'Luxembourg', 'Edmonton', 'Osaka', 'Auckland', 'Ottawa', 'Budapest', 'Helsinki', 'Athens', 'Cologne', 'Bangkok', 'Charlotte', 'Phoenix', 'New Orleans', 'Baltimore', 'Valencia', 'Manchester', 'Nashville', 'Salt Lake City', 'Dusseldorf', 'Sao Paulo', 'Rio de Janeiro', 'Raleigh', 'Warsaw', 'Marseille', 'San Antonio', 'Birmingham', 'Columbus', 'Shanghai', 'St. Louis', 'Detroit', 'Sacramento', 'Milwaukee', 'Kansas City', 'Tampa', 'Nuremberg', 'Bristol'];
$bl_types1 = ['A', 'B', 'AB', 'O'];
$bl_types2 = ['+', '-'];
$email_domains = ['gmail', 'outlook', 'rediff', 'hotmail'];
$height_vars = [50, 70, 85, 95, 105, 112, 118, 124, 130, 135, 140, 145, 150, 155, 160, 165, 170, 174, 177, 180];
$diets = ['LactoVegeterian', 'NonVegeterian', 'Vegan', 'Eggeterian'];
$companies = ['bduhiqubyl ', 'keruh ', 'jivlzr luozora bamz ', 'kouakocuy iupuovthe idmzlh ', 'rzcsu ', 'iuoebu fsy ', 'puachobsmiw hylihc kanltzs ', 'vlla jhsh jztyuzty ', 'lojum ', 'eaqugte ', 'fyiyldohz teep ', 'shdszdtafumo lihy jouzso ', 'cmlaqubs ', 'wiryep ', 'vsusha ', 'byteee ', 'nyhioqudys ', 'casmelzposap ', 'tlset ', 'muq xujsupiff cmysu ', 'ihtanaac wont ', 'ovddzcd mhb laachhoaoy ', 'bukz aw ', 'oecme ayilz ', 'nhonesikuy hjmtzc ', 'cmhjm yz ', 'imusmadilsy ltzyhur pyamhl ', 'ejtuxozz ldlewu ', 'xikhstymhld irahy yaa ', 'quog rsaphdyset pamlle ', 'larpts eyz ', 'bdyuje ', 'owipubyszu ', 'kmyhsm ', 'qubb awsosthai ', 'sslu ', 'sollta noipy xiefyhtelu ', 'wayatuotmt ctysmao ', 'eheneju uhamaklbsu aglmoze ', 'byysleggana chc itholyav ', 'lymivd rzqusub zpirfhai ', 'ocehtegsl ', 'hcagilorfiz nayyixi vmlbbuyo ', 'apsep ', 'jyajs chi gludmll ', 'atyenone xifba nhchj ', 'vltst seryhci ', 'quxecti lukmubyag ', 'nyohmy ', 'yuze mtzsltsszz vsahtiexi'];


function generate_name() {
    $char_start = 'abcdefghijklmnopqrstuvwxyz';
    $random_string = $char_start[random_int(0, 25)];
    $w_length = random_int(1, 3);

    for($i = 0; $i < $w_length; $i++) {
    $name_len = random_int(4, 12);
    for($j = 1; $j < $name_len; $j++) {
        if($random_string[-1] == 'a') {
            $chars = 'abcdfghijklmnopqrstuvwxyz';
        } elseif($random_string[-1] == 'b') {
            $chars = 'abdehimostuy';
        } elseif($random_string[-1] == 'c') {
            $chars = 'acdehikmostuy';
        }elseif($random_string[-1] == 'd') {
            $chars = 'adehilmostuyz';
        }elseif($random_string[-1] == 'e') {
            $chars = 'abcdefghjklmnpqrstuvwxyz';
        }elseif($random_string[-1] == 'f') {
            $chars = 'abdefhilmostuyz';
        }elseif($random_string[-1] == 'g') {
            $chars = 'abdeghilmostuyz';
        }elseif($random_string[-1] == 'h') {
            $chars = 'abcdehijlmostuyz';
        }elseif($random_string[-1] == 'i') {
            $chars = 'bcdefghjklmnopqrstuvwxyz';
        }elseif($random_string[-1] == 'j') {
            $chars = 'aehilmostuyz';
        }elseif($random_string[-1] == 'k') {
            $chars = 'aehilmostuyz';
        }elseif($random_string[-1] == 'l') {
            $chars = 'abdehilmostuyz';
        }elseif($random_string[-1] == 'm') {
            $chars = 'aehilmnostuyz';
        }elseif($random_string[-1] == 'n') {
            $chars = 'aehilmostuy';
        }elseif($random_string[-1] == 'n') {
            $chars = 'aehilmostuyz';
        }elseif($random_string[-1] == 'o') {
            $chars = 'abcdefghijklmnopqrstuvwxyz';
        }elseif($random_string[-1] == 'p') {
            $chars = 'aehilmostuyz';
        }elseif($random_string[-1] == 'q') {
            $chars = 'u';
        }elseif($random_string[-1] == 'r') {
            $chars = 'abdfehilmopstuyz';
        }elseif($random_string[-1] == 's') {
            $chars = 'aehilmostuyz';
        }elseif($random_string[-1] == 't') {
            $chars = 'aehilmosuyz';
        }elseif($random_string[-1] == 'u') {
            $chars = 'abcdefghijklmnopqrstvwxyz';
        }elseif($random_string[-1] == 'v') {
            $chars = 'abdehilmostuyz';
        }elseif($random_string[-1] == 'w') {
            $chars = 'aehilosuyz';
        }elseif($random_string[-1] == 'x') {
            $chars = 'aieou';
        }elseif($random_string[-1] == 'y') {
            $chars = 'aehilmostuyz';
        } elseif($random_string[-1] == 'z') {
            $chars = 'acdehilopqrstuxyz';
        } elseif($random_string[-1] == ' ') {
            $chars = 'abcdefghijklmnopqrstuvwxyz';
        }
        $char_len = strlen($chars);
        $random_character = $chars[random_int(0, $char_len)];
        $random_string .= $random_character;
    }
    $random_string .= ' ';
}
    return $random_string;
}

$insuranceTypes = ['Individual', 'Family', 'Employee'];

$uid = bin2hex((random_bytes(4)));
$username = bin2hex((random_bytes(random_int(2, 4)))).bin2hex((random_bytes(random_int(2, 4))));
$password = bin2hex((random_bytes(random_int(2, 4)))).bin2hex((random_bytes(random_int(2, 4))));
$type = 'Patient';

$name = generate_name();

$year = random_int(1970, 2010);
$month = random_int(1, 12);
if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
 $date = random_int(1, 31);
} elseif($month == 2) {
    if(($year % 4 == 0 && $year % 100 != 0)||($year % 400 == 0)) {
        $date = random_int(1, 29);
    } else {
        $date = random_int(1, 28);
    }
} else {
    $date = random_int(1, 30);
}
if($month < 10) {
    $strmonth = "0".strval($month);
} else {
    $strmonth = strval($month);
}
if($date < 10) {
    $strdate = "0".strval($date);
} else {
    $strdate = strval($date);
}

$dob = strval($year)."-".$strmonth."-".$strdate;
$age = (date("Y") - $year);

$gender = $genders[random_int(0, 1)];
$address = $addresses[random_int(0, 103)];
$contact = random_int(7000000000, 9999000000);
$emailId = $username."@".$email_domains[random_int(0, 3)].".com";
$blood = $bl_types1[random_int(0,3)].$bl_types2[random_int(0, 1)];

if($age == 0) {
    $height = random_int(40, 70);
}
elseif($age < 18) {
    $height = $height_vars[$age] + random_int(random_int(-20,0), random_int(0,25));
} else {
    $height = random_int(140, 220);
}

if($age == 0) {
    $weight = random_int(8, 30);
}
elseif($age < 18) {
    $weight = ($age * 5) + 20 + random_int(0,9);
} else {
    $weight = random_int(50, 150);
}

$profilePicUrl = 'images/cal1.jpg';
$diet = $diets[random_int(0, 3)];
$alcohol = boolval(random_int(0,1)) ? 'Yes' : 'No';
$tobacco = boolval(random_int(0,1))? 'Yes' : 'No';
$drugs = boolval(random_int(0,1)) ? 'Yes' : 'No';

$no_past_diseases = random_int(0, $age);
$no_curr_diseases = random_int(0, 5);

for ($i = 0; $i < $no_past_diseases; $i++) {
    // echo $i;
}


$company = $companies[random_int(0, 49)];
$insuranceId = bin2hex((random_bytes(8)));
$insuranceType = $insuranceTypes[random_int(0, 2)];
$premium = random_int(0,5000);

if($age == 0) {
    $limit = $premium * random_int(990, 1010);
}
elseif($age < 65) {
    $limit = $premium * (65 - $age) * random_int(7, 13);
} else {
    $limit = $premium * random_int(8, 12);
}

$limit = $premium * random_int(0,5000);

if($age <18) {
    $no_of_parents = random_int(0, 2);
    $no_of_children = 0;
    $no_of_siblings = random_int(0, 1);
}
else {
    $no_of_parents = random_int(0, 2);
    $no_of_children = random_int(0, 5);
    $no_of_siblings = random_int(0, 5);
}


echo("Username - ".$username);
echo("<br>");
echo("Password - ".$password);
echo("<br>");
echo($type);
echo("<br>");
echo("Name - ".$name);
echo("<br>");
echo("Date of Birth - ".$dob);
echo("<br>");
echo("Address - ".$address);
echo("<br>");
echo("Contact - ".$contact);
echo("<br>");
echo("Email - ".$emailId);
echo("<br>");
echo("Blood Group - ".$blood);
echo("<br>");
echo("Height - ".$height."cm");
echo("<br>");
echo("Weight - ".$weight."kg");
echo("<br>");
echo($imageType);
echo("<br>");
echo($imageData);
echo("<br>");
echo("Diet Style - ".$diet);
echo("<br>");
echo("Consumes alcohol - ".$alcohol);
echo("<br>");
echo("Consumes tobacco - ".$tobacco);
echo("<br>");
echo("Consumes drugs - ".$drugs);
echo("<br>");

if($no_of_parents == 1) {
    $familyMemberUsername = bin2hex((random_bytes(4)));
    $relations = ['Father', 'Mother'];
    $relation = $relations[random_int(0, 1)];
    echo($relation." - ".$familyMemberUsername."<br>");
}

if($no_of_parents == 2) {
    $familyMemberUsername = bin2hex((random_bytes(4)));
    $relation = 'Father';
    echo($relation." - ".$familyMemberUsername."<br>");
    $familyMemberUsername = bin2hex((random_bytes(4)));
    $relation = 'Mother';
    echo($relation." - ".$familyMemberUsername."<br>");
}

for ($i = 0; $i < $no_of_siblings; $i++) {
    $familyMemberUsername = bin2hex((random_bytes(4)));
    $relations = ['Brother', 'Sister'];
    $relation = $relations[random_int(0, 1)];
    echo($relation." - ".$familyMemberUsername."<br>");
}

for ($i = 0; $i < $no_of_children; $i++) {
    $familyMemberUsername = bin2hex((random_bytes(4)));
    $relations = ['Son', 'Daughter'];
    $relation = $relations[random_int(0, 1)];
    echo($relation." - ".$familyMemberUsername."<br>");
}

echo("Insurance - ".$company);
echo("<br>");
echo("Insurance id - ".$insuranceId);
echo("<br>");
echo("Insurance type - ".$insuranceType);
echo("<br>");
echo("Inurance Premium - ".$premium);
echo("<br>");
echo("Insurance Limit - ".$limit);


// $allergies
// $diseasename;
// $date_from;
// $date_to;
// $hospital_name;
// $medicines;
// $doctor;
// $familyMemberUsername;
// $relation;





// $loginQuery->execute();
// $infoQuery->execute();
// $habitsQuery->execute();
// $pastDiseasesQuery->execute();
// $currentDiseasesQuery->execute();
// $insuranceQuery->execute();

?>