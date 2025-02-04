<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = strtoupper(trim($_POST["message"]));
    
    $morseCode = [
        "A" => ".-", "B" => "-...", "C" => "-.-.", "D" => "-..", "E" => ".", "F" => "..-.",
        "G" => "--.", "H" => "....", "I" => "..", "J" => ".---", "K" => "-.-", "L" => ".-..",
        "M" => "--", "N" => "-.", "O" => "---", "P" => ".--.", "Q" => "--.-", "R" => ".-.",
        "S" => "...", "T" => "-", "U" => "..-", "V" => "...-", "W" => ".--", "X" => "-..-",
        "Y" => "-.--", "Z" => "--..", " " => "/", "1" => ".----", "2" => "..---", 
        "3" => "...--", "4" => "....-", "5" => ".....", "6" => "-....", "7" => "--...",
        "8" => "---..", "9" => "----.", "0" => "-----"
    ];

    $encodedMessage = "";
    for ($i = 0; $i < strlen($message); $i++) {
        $char = $message[$i];
        $encodedMessage .= isset($morseCode[$char]) ? $morseCode[$char] . " " : "";
    }

    echo json_encode(["encrypted" => trim($encodedMessage)]);
}
?>