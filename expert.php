<?php
declare(strict_types=1);

// === Exercise 1 ===
echo "Exercise 1 starts here:";

new_exercise(2);
// === Exercise 2 ===

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;
new_exercise(3);
// === Exercise 3 ===

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

new_exercise(4);
// === Exercise 4 ===
foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);


new_exercise(5);
// === Exercise 5 ===

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}
print_r($arr);

new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
// $arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    if ($params[0] == "") {
        $params[0] = randomHeroFirstName();
    }
    if ($params[1] == "") {
        $params[1] = randomHeroLastName();
    }
    return ucwords(implode(" ", $params));
};

function randomHeroFirstName()
{
    $heroes_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    return $heroes_firstnames[rand(0,count($heroes_firstnames) - 1)];
}

function randomHeroLastName()
{
    $heroes_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    return $heroes_lastnames[rand(0,count($heroes_lastnames) - 1)];
}

echo "Here is the name: " . combineNames();


new_exercise(7);
function copyright($year) {
    echo "&copy; $year BeCode";
}
//print the copyright
copyright(idate('Y'));


new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    } else if ($email == 'john@example.be' && $password != 'pocahontas') {
        return 'Wrong password John';
    } else {
        return 'Login failed';
    }
}

//do not change anything below
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
echo " / ";
//no access
echo login('john@example.be', 'dfgidfgdfg');
echo " / ";
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!


new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:', '.doc', '.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) > -1) {
            echo 'Unacceptable Found<br />';
            return;
        }
    }
    echo 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');

new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
for($i=0; $i <= count($areTheseFruits) +1; $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this


function new_exercise($x=2) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
