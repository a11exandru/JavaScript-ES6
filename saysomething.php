<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ce este C++ | Prezentare web">
        <meta name="author" content="Alexandru Puiu,Nechita Silviu, Morosanu Iustin">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>C++</title>
        <link rel="stylesheet" href="style.css">
        <!-- pentru iconita de la meniu -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- font gothic de pe google -->
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
        <!-- pt top arrow icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <!-- <body style="background-image: url('image/background.jpeg')"> -->
    <body style="background-color: purple">
        <?php
            include_once("parts/header.php");
            include_once("parts/menuSay.php");
        ?>
        <div class="bigdiv">
            <h1 style="margin-bottom:25px">Scrie ceva in C++</h1>
            <div class="explanation">
                <p>Poti afisa textul "<b>Salut</b>" in C++ folosind comanda <i>cout<<"Salut";</i></p>
            </div>
            <div class="type">
                <div class="relative" style="width: 400px; height:200px; margin: 0 auto">
<textarea id="inserare">
#include <iostream>
using namespace std;
int main() {
    // mai jos de acest rand puteti folosi comanda cout pentru a afisa textul pe ecran.
    
    return 0;
}
</textarea>
                    <input type="submit" class="submit" value="Run" id="submit"></input>
                </div>
            </div>
            <p style="margin-top:17px">Textul va aparea aici</p>
            <div class="cout">
                <textarea id="cout", style="height:150px" disabled></textarea>
            </div>
        </div>
    </body>
</html>
<script src = "app.js"></script>