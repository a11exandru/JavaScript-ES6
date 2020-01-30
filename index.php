<!DOCTYPE html>
<html>
	<!-- Acesta este head-ul -->
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

	<!-- Aici incepe magia -->
	<body>
		<main>
			<?php require_once("parts/header.php"); ?>
			<?php require_once("parts/menu.php"); ?>
			<div class = "pagina-de-pornire" id="home">
				<h1>C++</h1>
			</div>
			<div id= "ce-este-cpp">
				<h1>Ce este C++?</h1>
				<div class = "definitie">
					<p id="animatie-definitie" class = "ce-este-js" style="position: relative"><strong>C++</strong> este un limbaj de programare general, compilat. Este un  limbaj multi-paradigmă, cu verificarea statică a tipului variabilelor ce suportă programare procedurală, abstractizare a datelor, programare orientată pe obiecte. </p>
				</div>
			</div>

			<div id = "istoria-limbajului">
				<h1 class = "definitie">Istorie</h1>
				<p id = "schema">Bjarne Stroustrup a început să lucreze la C cu clase în 1979. Ideea crearii unui nou limbaj a venit din experienta de programare pentru pregatirea tezei sale de doctorat. Stroustrup a descoperit ca Simula (program din anii '60) avea facilitati foarte utile pentru proiecte mari, însa era prea lent, în timp ce BCPL era rapid, însa nu era de nivel înalt si era nepotrivit pentru proiecte mari. Cand a început să lucreze pentru Bell Labs, avea sarcina de a analiza nucleul UNIX referitor la calcul distribuit. Amintindu-si de experiența sa din perioada lucrsrii de doctorat, Stroustrup a început sa îmbunatatească C cu facilitati asemanatoare Simula. C a fost ales deoarece era rapid si portabil. La început facilitatile adaugate C-ului au fost clase, clase derivate, verificare a tipului, inline si argumente cu valori implicite.</p>
				<img src="image/cpplogo.gif" id = "gif" class = "gif">
			</div>

			<div id = "clase">
				<h1 class = "definitie" id ="versus">Diferentele dintre C si C++</h1>
				<p>Multa lume care vrea sa inceapa programarea nu cunoaste diferenta dintre limbajul C si limbajul C++, de accea va vom expune cateva caracteristici ale fiecaruia:<br>– C++ este un limbaj mai modern si suporta programare pe obiecte. Este ca un punct de start pentru mai toate limbajele de programare moderne. A inspirat dezvoltarea Java si are si urmasi, vezi C#.</br><br>– C este un limbaj de nivel mediu, mai aproape de low-level, care este folosit pentru a construi cod mai rapid si mai eficient. Kernel-ul Linux este scris intr-o proportie foarte mare in limbajul C, de exemplu.</br></p>
					<p>Unde ar trebui sa folositi C:</p>
				<ul>
					<li>Implementari academice de algoritmi;</li>
					<li>Servere de toate genurile;</li>
					<li>Programare de sistem;</li>
					<li>Compilatoare;</li>
					<li>Masini virtuale;</li>
					<li>Drivere;</li>
					<li>Aplicatii real-time;</li>
				</ul>
				<p>Unde ar trebui sa folositi C++:</p>
				<ul>
					<li>Desktop;</li>
					<li>Jocuri;</li>
					<li>+ orice altceva iti doresti;</li>

				</ul>
				<p>Iata si cateva exemple de porgrame in c++.</p>
				<pre style="text-align: left;">
#include iostream
	using namespace std;
	int main() {
		cout << "Hello World" <<  endl;
		return 0;
	}
};</pre>
				 <p class = "margin-top">Acest program afiseaza textul "Hello World"</p>
				<pre style="text-align: left;">
#include iostream
using namespace std;
int main() {
	int a, b, r;
	cin >> a;
	cin >> b;
	r = a % b;
	while(r) {
		a = b;
		b = r;
		r = a % b;
	}

	cout << b << endl;
	return 0;
}</pre>
				<p style=" padding: 1rem">Algoritm pentru aflarea celui mai mare divizor comun</p>
			</div>
			<footer>
				<div class = "echipa">
					<div class = "creator">
						<h2>Creators:</h2>
						<p>Alexandru Puiu</p>
						<a href="https://www.facebook.com/a11exandru">
							<span class = "fa fa-facebook-official"></span>
						</a>
						<a href="https://github.com/a11exandru">
							<span class = "fa fa-github"></span>
						</a>
						<a href="https://www.linkedin.com/in/a11exandru/">
							<span class = "fa fa-linkedin"></span>
						</a>
						<p>Iustin Morosanu </p>
						<a href="https://www.facebook.com/iustin.morosanu">
							<span class = "fa fa-facebook-official"></span>
						</a>
						<a href="https://github.com/IustinM">
							<span class = "fa fa-github"></span>
						</a>
						<p>Silviu Nechita</p>
						<a href="https://www.facebook.com/nechita.silviu.7">
							<span class = "fa fa-facebook-official"></span>
						</a>
						<a href="https://github.com/silviu90">
							<span class = "fa fa-github"></span>
						</a>
						<p>Alina Duca</p>
						<a href="https://www.facebook.com/duca.alina2002">
							<span class = "fa fa-facebook-official"></span>
						</a>
					</div>
					<div class = "profesor">
						<h2>Profesor:</h2>
						<p>Cosnita Emilia-Felicia</p>
						<a href="https://www.facebook.com/otilia.cosnita">
							<span class = "fa fa-facebook-official"></span>
						</a>
					</div>
				</div>
			</footer>
			<!-- Sageata catre top -->
			<a href="#top" id="top-arrow" class="top-arrow">
				<span class="fa fa-angle-up"></span>
			</a>
		</main>
	</body>
</html>
<script src="app.js"></script>
