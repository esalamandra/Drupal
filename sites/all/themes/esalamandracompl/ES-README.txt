SPECYFIKACJA STRUKTURY STRONY ESALAMANDRA.COM.PL // PB


> Postanowienia ogólne 
	Menu budowane w Nice Menus (tymczasowo);
	Tytuły h1,h2,h3,h4... zawierają klasy .block__title dla tytułów bloków;


> Postanowienia szczegółowe:
	REGION[LOGO]:
		- blok zawierający znaczniki h1{Tytuł strony} oraz h2{slogan};
		- Struktura:
			<h1>TYTUŁ</h1><h2>SLOGAN</h2>
	REGION[SUBMENU]:
		- menu Nice menus;
		- Linki wg. projektu:
			*O firmie *Pomoc *FAQ *Kontakt *Zaloguj się
	REGION[SOCIAL]:
		- oparte o VIEWS;
		- menu oparte na liście zawierające tylko menu obrazkowe (bez tytułu);
		- Struktura:
			<div id="social_content">
				<ul>
					<li><IMG "OBRAZEK1"></li>
					...
					<li><IMG "OBRAZEK4"></li>
				</ul>
			</div>
	REGION[MAINMENU]:
		- Nice menus;
		- Linki wg. projektu:
			*Strona Główna *Forum *Sklep *Technologie *Usługi *Baza wiedzy *Portfolio
	REGION[SLIDER]:
		- VIEWS;
		- Struktura
			<div id="sliderwrapp">
				<FIELD TYPE IMAGE>
				<div id="slider_body">
					<h2>TYTUL SLAJDU</h2>
					<p>TEKST SLAJDU</p>
					<div id="buttons">
						<a class="more">LINK WIĘCEJ</a>
						<a class="details">LINK SZCZEGOLY</a>
					</div>
				</div>
			</div>
	REGIONS[OURPORTALS]
		- VIEWS
		- Struktura: 
			h2.block__title
				ul
					li
						IKONA LINK
						IKONA LINK
						IKONA LINK
						IKONA LINK

						// ZAMYKANIE ZNACZNIKOW

	REGION[CONTENT]:
		- brak, region opcjonalny (dla newsow itp);
	REGION[LEFTCONTENT]
		- VIEWS;
		- Struktura:
			<h2 class="block__title"></h2>
			<div id="technologie">
				<div class="views-row-one">
					<h3>
					<p>
					<div class="more">MORE</div>

					//zamykanie elementow
	REGION[RIGHTCOLUMN]:
		- j.w.
	REGION[BOTTOM]:
		- ostatnie na blogu, brak wytycznych;
	REGION[PARTNERS]:
		- nasi partnerzy;
		- wyświetlanie obrazków/icon jako link do partnera;
	REGION[FOOTER]:
		- własna mapa strony, menu, wg projektu


AKTUALNE ZADANIA DLA pbasiak:
	- dorzucić tła;
	- dostosować kolory;
	- ostylować slider (po dodaniu go);
	- edycja template.php i theme-settings.php;
	- dodanie wymaganych regionów;

