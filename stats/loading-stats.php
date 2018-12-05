

			
				

	
		<h1 class="title-post entry-title">Globální statistiky</h1><!-- .entry-header -->

<div class="entry-content">

<!---------------TABLES OF SINGLE NUMBER STATISTICS --------------->	




dataset:<input type="radio" id="dataset"  onclick="showStats()" name="radio-check"> online: <input type="radio" id="online" onclick="showStats()" name="radio-check"> 
<div id="global-stats-div-data-set">	
	
<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfResource" class="in-column-link" title="Počet zdrojů - mappings.dbpedia.org" target="_blank">Počet zdrojů</a></h5>
<span id="numberOfResource"></span>
</div>

<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfUniqeResources" class="in-column-link" title="Počet unikátních zdrojů - mappings.dbpedia.org" target="_blank">Počet unikátních zdrojů</a></h5>
<span id="numberOfUniqeResources"></span>
</div>


<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfResourceWithType" class="in-column-link" title="Počet zdrojů s definovaným typem - mappings.dbpedia.org" target="_blank">Počet zdrojů s definovaným typem</a></h5>
<span id="numberOfResourceWithType"></span>
</div>
		
		
<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfClasses" class="in-column-link" title="Počet definovaných tříd - mappings.dbpedia.org" target="_blank">Definované třídy</a></h5>
<span id="numberOfClasses"></span>
</div>

<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfClassesWithResource" class="in-column-link" title="Počet tříd se zdroji - mappings.dbpedia.org" target="_blank">Počet tříd se zdroji</a></h5>
<span id="numberOfClassesWithResource"></span>
</div>


<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfDisambiguates" class="in-column-link" title="Počet rozcestníků - mappings.dbpedia.org" target="_blank">Počet rozcestníků</a></h5>
<span id="numberOfDisambiguates"></span>
</div>

<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfOutdegree" class="in-column-link" title="Počet interních odkazů - mappings.dbpedia.org" target="_blank">Počet interních odkazů</a></h5>
<span id="numberOfOutdegree"></span>
</div>

<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfProperties" class="in-column-link" title="Počet definovaných propert - mappings.dbpedia.org" target="_blank">Počet definovaných propert</a></h5>
<span id="numberOfProperties"></span>
</div>

<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfPropertiesUsed" class="in-column-link" title="Počet používaných propert - mappings.dbpedia.org" target="_blank">Počet používaných propert</a></h5>
<span id="numberOfPropertiesUsed"></span>
</div>

<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfPredicates" class="in-column-link" title="Počet predikátů - mappings.dbpedia.org" target="_blank">Počet predikátů</a></h5>
<span id="numberOfPredicates"></span>
</div>

<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfRedirectedResource" class="in-column-link" title="Počet redirectů - mappings.dbpedia.org" target="_blank">Počet redirectů</a></h5>
<span id="numberOfRedirectedResource"></span>
</div>

<div class="column">
<h5 class="in-column"><a href="http://mappings.dbpedia.org/index.php/OntologyProperty:NumberOfTriples" class="in-column-link" title="Počet trojic - mappings.dbpedia.org" target="_blank">Počet trojic</a></h5>
<span id="numberOfTriples"></span>
</div>
<!---------------END OF TABLES OF SINGLE NUMBER STATISTICS --------------->	


<!--------------- DIV WITH SELECT OPTION GLOBAL STATS--------------->
<div class="center">
<span class="select-option-description">Tabulkové globální statistiky:</span>
  <select id="select" class="select-option">
    <option value="0" i="0">
     SKRÝT TABULKU
    </option>
    <option value="1" id="1">
     Třídy podle počtu entit
    </option>
    <option value="2" id="2">
      Počet užití propert - TOP 100
    </option>
	<option value="3" id="3">
      Počet OutDegree zdrojů - TOP 100
    </option>
	<option value="4" id="4">
      Počet InDegree zdrojů - TOP 100
    </option>
	<option value="5" id="5">
      Počet InDegree Tříd
    </option>
	<option value="6" id="6">
      Entity podle počtu InDegree - TOP 100
    </option>

  </select>
  <button onclick="selectFunction()" type="button" class="button-show">
    ZOBRAZIT
  </button>


<div class="column-table-select">
	<h5 class="in-column" id="columnName"></h5>
		<table id="result" class="select-table"></table>
</div>

</div>
</div>





<div id="global-stats-div-online" style="display:none;">	
<div class="global-stat-column">
		<div id="statBox"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT COUNT(?s) as ?PocetZdroju 
											WHERE {
											?s rdfs:label ?o .
											}

		">
		</div>
		</div>
<div class="global-stat-column">		
		<div id="statBox1"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT COUNT(?s) as ?PocetUnikatnichZdroju
										  WHERE {
										  ?s rdfs:label ?o .
										  FILTER(NOT EXISTS { ?s <http://dbpedia.org/ontology/wikiPageRedirects> ?o1 })
										 }

		">
		</div>
		</div>
		
		
		<div class="global-stat-column">
		<div id="statBox2"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT COUNT(?resource ) AS ?PocetZdrojuSDefinovanymTypem
											WHERE
											{ ?resource rdf:type owl:Thing
											}
		">
		</div>
		</div>
		
		
		<div class="global-stat-column">
		<div id="statBox3"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT COUNT (DISTINCT (?subject)) as ?definovaneTridy
											WHERE {
												?subject rdf:type owl:Class .
													}
		">
		</div>
		</div>
		
		
		<div class="global-stat-column">
		<div id="statBox4"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT COUNT(DISTINCT(?subject)) as ?PocetTridSeZdroji
											WHERE {
											?subject rdf:type owl:Class .
											?x a ?subject. 
											}
		">
		</div>
		</div>
		
		<div class="global-stat-column">
		<div id="statBox5"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT COUNT(DISTINCT ?s) as ?PocetRozcestniku 
											WHERE {
											?s <http://dbpedia.org/ontology/wikiPageDisambiguates> ?o .
											}
		">
		</div>
		</div>

		
		<div class="global-stat-column">
		<div id="statBox6"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT COUNT (?object) AS ?PocetInternichOdkazu 
											WHERE{ 
											?subject <http://dbpedia.org/ontology/wikiPageWikiLink> ?object. 
											}
		">
		</div>
		</div>
		
		<div class="global-stat-column">
		<div id="statBox7"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT DISTINCT (COUNT(?subject)) as ?PocetDefinovanychPropert
											 WHERE {
											?subject a rdf:Property . 
											}
		">
		</div>
		</div>
		
		<div class="global-stat-column">
		<div id="statBox8"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT COUNT (DISTINCT(?predicate)) as ?PocetPouzivanychPropert
											WHERE {
											?subject ?predicate  ?object.
											?predicate a rdf:Property.
											}
		">
		</div>
		</div>
		
		<div class="global-stat-column">
		<div id="statBox9"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT (COUNT(DISTINCT ?predicate)) AS ?PocetPredikatu
											WHERE {
											?subject ?predicate ?object .
											}
		">
		</div>
		</div>
		
		<div class="global-stat-column">
		<div id="statBox10"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT COUNT(?s)as ?PocetRedirectu
											WHERE {
											?s rdfs:label ?o .
											FILTER(EXISTS {?s <http://dbpedia.org/ontology/wikiPageRedirects> ?o1}
												  )
											}
		">
		</div>
		</div>
		
		<div class="global-stat-column">
		<div id="statBox11"
					   data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
					   data-sgvizler-query="SELECT (COUNT(*)) AS ?PocetTrojic
											 WHERE {
													?s ?p ?o .
												   } 
		">
		</div>
		</div>
		
	<div class="center">	<span class="select-option-description">Tabulkové globální statistiky:</span>
				<select id="choose-stats-global" class="option-input-select">
					  <option value="statBox12">Třídy podle počtu entit</option>
					  <option value="statBox13">Počet užití propert - TOP 100</option>
					  <option value="statBox14">Počet OutDegree zdrojů - TOP 100</option>
					  <option value="statBox15">Počet InDegree zdrojů - TOP 100</option>
					  <option value="statBox16">Počet InDegree Tříd</option>
					  <option value="statBox17">Entity podle počtu InDegree - TOP 100</option>


				</select>
				
				<button onclick="doSelectGlobal()" type="button"class="button-show">
					ZOBRAZIT
				</button>
</div>



<div id="sparql-result-global">


</div>
						
		
</div>






<!---------------END OF DIV WITH SELECT OPTION GLOBAL STATS --------------->
<h1 class="title-post entry-title">Statistiky pro jednotlivé třídy</h1>	

<!---------------SELECT OPTION OF MAPPED CLASS --------------->
<div class="center">
<select id="select-class" name="select-class" class="select-class">
<option disabled selected value="A">------------------------------A------------------------------</option>
		<option value="album">Album (Album)</option>
		<option value="atlet">Atlet (Athlete)</option>
		<option value="automobil">Automobil (Automobile)</option>
<option disabled selected value="B">------------------------------B------------------------------</option>
		<option value="barva">Barva (Colour)</option>
		<option value="bojove-vozidlo">Bojové vozidlo (MilitaryVehicle)</option>
		<option value="budova">Budova (Building)</option>
<option disabled selected value="C">------------------------------C------------------------------</option>
		<option value="cyklisticky-zavod">Cyklistický závod (CyclingCompetition)</option>
		<option value="ceska-obec">Česká obec (Settlement)</option>
<option disabled selected value="D">------------------------------D------------------------------</option>
		<option value="deskova-hra">Desková hra (Game)</option>
<option disabled selected value="E">------------------------------E------------------------------</option>
<option disabled selected value="F">------------------------------F------------------------------</option>
		<option value="farnost">Farnost (Parish)</option>
		<option value="film">Film (Film)</option>
		<option value="filmovy-festival">Filmovy Festival (FilmFestival)</option>
		<option value="firma">Firma (Company)</option>
		<option value="fotbalista">Fotbalista (SoccerPlayer)</option>
		<option value="fotbalova-sezona">Fotbalová sezóna (SoccerLeagueSeason)</option>
		<option value="fotbalovy-klub">Fotbalový klub (SoccerClub)</option>
		<option value="francouzsky-kanton">Francouzský kanton (Region)</option>
<option disabled selected value="G">------------------------------G------------------------------</option>
<option disabled selected value="H">------------------------------H------------------------------</option>
		<option value="herec">Herec (Actor)</option>
		<option value="hokejista">Hokejista (IceHockeyPlayer)</option>
		<option value="hokejovy-klub">Hokejový klub (HockeyTeam)</option>
		<option value="hora">Hora (Mountain)</option>
		<option value="hudebni-festival">Hudební festival (MusicFestival)</option>
		<option value="hudebni-nastroj">Hudební nástroj (Instrument)</option>
		<option value="hudebni-umelec">Hudební umělec (MusicalArtist)</option>
		<option value="hudebni-zanr">Hudební žánr (MusicGenre)</option>
<option disabled selected value="CH">------------------------------CH-----------------------------</option>
		<option value="chemicka-sloucenina">Chemická sloučenina (ChemicalCompound)</option>
		<option value="chemicka-sloucenina">Chemický prvek (ChemicalElement)</option>
		<option value="choroba">Choroba (Disease)</option>
		<option value="chranene-uzemi-v-cesku">Chráněné území v Česku (ProtectedArea)</option>
<option disabled selected value="I">------------------------------I------------------------------</option>
<option disabled selected value="J">------------------------------J------------------------------</option>
		<option value="jazyk">Jazyk (Language)</option>
		<option value="jezero">Jezero (Lake)</option>
		<option value="jmeno">Jméno (Name)</option>
<option disabled selected value="K">------------------------------K------------------------------</option>
		<option value="kniha">Kniha (Book)</option>
		<option value="kosmicka-lod">Kosmická loď (Spacecraft)</option>
		<option value="kosmonaut">Kosmonaut (Astronaut)</option>
		<option value="kostel">Kostel (Church)</option>
		<option value="krasobruslar">Krasobruslař (FigureSkater)</option>
		<option value="krestansky-vudce">Křesťanský vůdce (Pope)</option>
<option disabled selected value="L">------------------------------L------------------------------</option>
		<option value="letadlo">Letadlo (Aircraft)</option>
		<option value="letecka-spolecnost">Letecká společnost (Airline)</option>
		<option value="letiste">Letiště (Airport)</option>
		<option value="liga-ledniho-hokeje">Liga ledního hokeje (IceHockeyLeague)</option>
		<option value="lyzar">Lyžař (Skier)</option>
<option disabled selected value="M">------------------------------M------------------------------</option>
		<option value="mena">Měna (Currency)</option>
		<option value="mineral">Minerál (Mineral)</option>
		<option value="mobilni-telefon">Mobilní telefon (MobilePhone)</option>
		<option value="model">Model (Model)</option>
		<option value="motocykl">Motocykl (MotorCycle)</option>
		<option value="more">Moře (Sea)</option>
		<option value="muzeum">Muzeum (Museum)</option>
		<option value="mrakodrap">Mrakodrap (Skyscraper)</option>
		<option value="ms-v-hokeji">MS v hokeji (SportsEvent)</option>
<option disabled selected value="N">------------------------------N------------------------------</option>
		<option value="noviny">Noviny (Newspaper)</option>
<option disabled selected value="O">------------------------------O------------------------------</option>
		<option value="okres">Okres (District)</option>
		<option value="organizace">Organizace (Organisation)</option>
		<option value="osoba">Osoba (Person)</option>
		<option value="ostrov">Ostrov (Island)</option>
<option disabled selected value="P">------------------------------P------------------------------</option>
		<option value="panovnik">Panovník (Monarch)</option>
		<option value="pilot-f1">Pilot F1 (FormulaOneRacer)</option>
		<option value="pivovar">Pivovar (Brewery)</option>
		<option value="planeta">Planeta (Planet)</option>
		<option value="politik">Politik (Politician)</option>
		<option value="politicka-strama">Politická strana (PoliticalParty)</option>
		<option value="programovaci-jazyk">Programovací jazyk (ProgrammingLanguage)</option>
<option disabled selected value="Q">------------------------------Q------------------------------</option>
<option disabled selected value="R">------------------------------R------------------------------</option>
		<option value="region">Region (region)</option>
		<option value="reziser">Režisér (MovieDirector)</option>
		<option value="rychlobruslar">Rychlobruslař (SpeedSkater)</option>
<option disabled selected value="S">------------------------------S------------------------------</option>
		<option value="sidlo">Sídlo (Settlement)</option>
		<option value="sidlo-sveta">Sídlo světa (City)</option>
		<option value="singl">Singl (Single)</option>
		<option value="skladba">Skladba (Song)</option>
		<option value="software">Software (Software)</option>
		<option value="spisovatel">Spisovatel (Writer)</option>
		<option value="sportovec">Sportovec (Athlete)</option>
		<option value="sportovni-disciplina">Sportovní disciplína (Sport)</option>
		<option value="stadion">Stadion (Stadium)</option>
		<option value="stat">Stát (Country)</option>
		<option value="stromy">Stromy (Plant)</option>
		<option value="svatek">Svátek (Holiday)</option>
		<option value="svetec">Světec (Saint)</option>
		<option value="svetove-dedictvi">Světové dědictví (WorldHeritageSite)</option>
<option disabled selected value="T">------------------------------T------------------------------</option>
		<option value="televizni-porad">Televizní pořad (TelevisionShow)</option>
		<option value="tenista">Tenista (TennisPlayer)</option>
		<option value="tepna">Tepna (Artery)</option>
<option disabled selected value="U">------------------------------U------------------------------</option>
		<option value="ulice">Ulice (Street)</option>
		<option value="umelec">Umělec (Artist)</option>
		<option value="univerzita">Univerzita (University)</option>
<option disabled selected value="V">------------------------------V------------------------------</option>
		<option value="valecna-lod">Válečná loď (Ship)</option>
		<option value="valka">Válka (MilitaryConflict)</option>
		<option value="vedec">Vědec (Scientist)</option>
		<option value="videohra">Videohra (VideoGame)</option>
		<option value="vodni-plocha">Vodní plocha (Lake)</option>
		<option value="vodni-tok">Vodní tok (River)</option>
		<option value="vojensky-velitel">Vojenský velitel (Artist)</option>
		<option value="volejbalista">Volejbalista (VolleyballPlayer)</option>
<option disabled selected value="W">------------------------------W------------------------------</option>
		<option value="webova-stranka">Webová stránka (Website)</option>
<option disabled selected value="X">------------------------------X------------------------------</option>
<option disabled selected value="Y">------------------------------Y------------------------------</option>
<option disabled selected value="Z">------------------------------Z------------------------------</option>
		<option value="zavod-formule1">Závod Formule 1 (GrandPrix)</option>
		<option value="zbran">Zbraň (Weapon)</option>
		<option value="zeme-na-hrach">Země na hrách (OlympicResult)</option>
		<option value="zeleznicni-trat">Železniční trať (RailwayLine)</option>

</select>
<!---------------END OF SELECT OPTION OF MAPPED CLASS --------------->

<!---------------SELECT OPTION FOR STATS OF MAPPED CLASS --------------->

<select id="choose-stats" name ="choose-stats" class="option-input-select">
  
	<option value="sparql-album1" data-pub="album">Počet entit</option>
	<option value="sparql-album2" data-pub="album">Počet trojic</option>
	<option value="sparql-album3" data-pub="album">Počet OutDegree všech entit</option>
	<option value="sparql-album4" data-pub="album">Počet InDegree všech entit</option>
	<option value="sparql-album5" data-pub="album">Počty entit podle druhu alba</option>
	<option value="sparql-album6" data-pub="album">Počty entit podle umělce</option>
	<option value="sparql-album7" data-pub="album">Počty entit podle žánru</option>
	<option value="sparql-album8" data-pub="album">Počty entit podle jazykových verzí</option>
	<option value="sparql-album9" data-pub="album">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-album10" data-pub="album">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-atlet1" data-pub="atlet">Počet entit</option>
	<option value="sparql-atlet2" data-pub="atlet">Počet trojic</option>
	<option value="sparql-atlet3" data-pub="atlet">Počet OutDegree všech entit</option>
	<option value="sparql-atlet4" data-pub="atlet">Počet InDegree všech entit</option>
	<option value="sparql-atlet5" data-pub="atlet">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-atlet6" data-pub="atlet">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-automobil1" data-pub="automobil">Počet entit</option>
	<option value="sparql-automobil2" data-pub="automobil">Počet trojic</option>
	<option value="sparql-automobil3" data-pub="automobil">Počet OutDegree všech entit</option>
	<option value="sparql-automobil4" data-pub="automobil">Počet InDegree všech entit</option>
	<option value="sparql-automobil5" data-pub="automobil">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-automobil6" data-pub="automobil">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-barva1" data-pub="barva">Počet entit</option>
	<option value="sparql-barva2" data-pub="barva">Počet trojic</option>
	<option value="sparql-barva3" data-pub="barva">Počet OutDegree všech entit</option>
	<option value="sparql-barva4" data-pub="barva">Počet InDegree všech entit</option>
	<option value="sparql-barva5" data-pub="barva">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-barva6" data-pub="barva">Entity podle počtu InDegree - TOP 100</option>
	
	
	<option value="sparql-bojove-vozidlo1" data-pub="bojove-vozidlo">Počet entit</option>
	<option value="sparql-bojove-vozidlo2" data-pub="bojove-vozidlo">Počet trojic</option>
	<option value="sparql-bojove-vozidlo3" data-pub="bojove-vozidlo">Počet OutDegree všech entit</option>
	<option value="sparql-bojove-vozidlo4" data-pub="bojove-vozidlo">Počet InDegree všech entit</option>
	<option value="sparql-bojove-vozidlo5" data-pub="bojove-vozidlo">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-bojove-vozidlo6" data-pub="bojove-vozidlo">Entity podle počtu InDegree - TOP 100</option>
  
  	<option value="sparql-budova1" data-pub="budova">Počet entit</option>
	<option value="sparql-budova2" data-pub="budova">Počet trojic</option>
	<option value="sparql-budova3" data-pub="budova">Počet OutDegree všech entit</option>
	<option value="sparql-budova4" data-pub="budova">Počet InDegree všech entit</option>
	<option value="sparql-budova5" data-pub="budova">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-budova6" data-pub="budova">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-cyklisticky-zavod1" data-pub="cyklisticky-zavod">Počet entit</option>
	<option value="sparql-cyklisticky-zavod2" data-pub="cyklisticky-zavod">Počet trojic</option>
	<option value="sparql-cyklisticky-zavod3" data-pub="cyklisticky-zavod">Počet OutDegree všech entit</option>
	<option value="sparql-cyklisticky-zavod4" data-pub="cyklisticky-zavod">Počet InDegree všech entit</option>
	<option value="sparql-cyklisticky-zavod5" data-pub="cyklisticky-zavod">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-cyklisticky-zavod6" data-pub="cyklisticky-zavod">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-ceska-obec1" data-pub="ceska-obec">Počet entit</option>
	<option value="sparql-ceska-obec2" data-pub="ceska-obec">Počet trojic</option>
	<option value="sparql-ceska-obec3" data-pub="ceska-obec">Počet OutDegree všech entit</option>
	<option value="sparql-ceska-obec4" data-pub="ceska-obec">Počet InDegree všech entit</option>
	<option value="sparql-ceska-obec5" data-pub="ceska-obec">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-ceska-obec6" data-pub="ceska-obec">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-deskova-hra1" data-pub="deskova-hra">Počet entit</option>
	<option value="sparql-deskova-hra2" data-pub="deskova-hra">Počet trojic</option>
	<option value="sparql-deskova-hra3" data-pub="deskova-hra">Počet OutDegree všech entit</option>
	<option value="sparql-deskova-hra4" data-pub="deskova-hra">Počet InDegree všech entit</option>
	<option value="sparql-deskova-hra5" data-pub="deskova-hra">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-deskova-hra6" data-pub="deskova-hra">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-farnost1" data-pub="farnost">Počet entit</option>
	<option value="sparql-farnost2" data-pub="farnost">Počet trojic</option>
	<option value="sparql-farnost3" data-pub="farnost">Počet OutDegree všech entit</option>
	<option value="sparql-farnost4" data-pub="farnost">Počet InDegree všech entit</option>
	<option value="sparql-farnost5" data-pub="farnost">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-farnost6" data-pub="farnost">Entity podle počtu InDegree - TOP 100</option>
  
	<option value="sparql-film1" data-pub="film">Počet entit</option>
	<option value="sparql-film2" data-pub="film">Počet trojic</option>
	<option value="sparql-film3" data-pub="film">Počet OutDegree všech entit</option>
	<option value="sparql-film4" data-pub="film">Počet InDegree všech entit</option>
	<option value="sparql-film5" data-pub="film">Počet filmů podle žánrů</option>
	<option value="sparql-film6" data-pub="film">Filmy podle délky</option>
	<option value="sparql-film7" data-pub="film">Filmy podle zemí původu</option>
	<option value="sparql-film8" data-pub="film">Počet filmů dle jazykové verze </option>
	<option value="sparql-film9" data-pub="film">Filmy podle rozpočtu</option>
	<option value="sparql-film10" data-pub="film">Filmy podle tržeb</option>
	<option value="sparql-film11" data-pub="film">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-film12" data-pub="film">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-filmovy-festival1" data-pub="filmovy-festival">Počet entit</option>
	<option value="sparql-filmovy-festival2" data-pub="filmovy-festival">Počet trojic</option>
	<option value="sparql-filmovy-festival3" data-pub="filmovy-festival">Počet OutDegree všech entit</option>
	<option value="sparql-filmovy-festival4" data-pub="filmovy-festival">Počet InDegree všech entit</option>
	<option value="sparql-filmovy-festival5" data-pub="filmovy-festival">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-filmovy-festival6" data-pub="filmovy-festival">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-firma1" data-pub="firma">Počet entit</option>
	<option value="sparql-firma2" data-pub="firma">Počet trojic</option>
	<option value="sparql-firma3" data-pub="firma">Počet OutDegree všech entit</option>
	<option value="sparql-firma4" data-pub="firma">Počet InDegree všech entit</option>
	<option value="sparql-firma5" data-pub="firma">Počty firem podle sídla</option>
	<option value="sparql-firma6" data-pub="firma">Počty firem podle průmyslů</option>
	<option value="sparql-firma7" data-pub="firma">Počty firem podle služeb</option>
	<option value="sparql-firma8" data-pub="firma">Firmy podle počtu zaměstnanců</option>
	<option value="sparql-firma9" data-pub="firma">Firmy podle výsledku hospodaření</option>
	<option value="sparql-firma10" data-pub="firma">Firmy podle aktiv</option>
	<option value="sparql-firma11" data-pub="firma">Firmy podle kapitálu</option>
	<option value="sparql-firma12" data-pub="firma">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-firma13" data-pub="firma">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-fotbalista1" data-pub="fotbalista">Počet entit</option>
    <option value="sparql-fotbalista2" data-pub="fotbalista">Počet trojic</option>
    <option value="sparql-fotbalista3" data-pub="fotbalista">Počet OutDegree všech entit</option>
    <option value="sparql-fotbalista4" data-pub="fotbalista">Počet InDegree všech entit</option>
	<option value="sparql-fotbalista5" data-pub="fotbalista">Počet hráčů v klubu (TOP 100 klubů)</option>
	<option value="sparql-fotbalista6" data-pub="fotbalista">Fotbalisté dle výšky (TOP 100)</option>
	<option value="sparql-fotbalista7" data-pub="fotbalista">Fotbalisté podle váhy (TOP 100)</option>
	<option value="sparql-fotbalista8" data-pub="fotbalista">Fotbalisté podle počtu gölů v ligových zápasech (TOP 100) </option>
    <option value="sparql-fotbalista9" data-pub="fotbalista">Fotbalisté podle počtu gölů v reprezentačních zápasech (TOP 100) </option>
	<option value="sparql-fotbalista10" data-pub="fotbalista">Počty fotbalistů podle místa narození</option>
	<option value="sparql-fotbalista11" data-pub="fotbalista">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-fotbalista12" data-pub="fotbalista">Entity podle počtu InDegree - TOP 100</option>
  
	<option value="sparql-fotbalova-sezona1" data-pub="fotbalova-sezona">Počet entit</option>
	<option value="sparql-fotbalova-sezona2" data-pub="fotbalova-sezona">Počet trojic</option>
	<option value="sparql-fotbalova-sezona3" data-pub="fotbalova-sezona">Počet OutDegree všech entit</option>
	<option value="sparql-fotbalova-sezona4" data-pub="fotbalova-sezona">Počet InDegree všech entit</option>
	<option value="sparql-fotbalova-sezona5" data-pub="fotbalova-sezona">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-fotbalova-sezona6" data-pub="fotbalova-sezona">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-fotbalovy-klub1" data-pub="fotbalovy-klub">Počet entit</option>
	<option value="sparql-fotbalovy-klub2" data-pub="fotbalovy-klub">Počet trojic</option>
	<option value="sparql-fotbalovy-klub3" data-pub="fotbalovy-klub">Počet OutDegree všech entit</option>
	<option value="sparql-fotbalovy-klub4" data-pub="fotbalovy-klub">Počet InDegree všech entit</option>
	<option value="sparql-fotbalovy-klub5" data-pub="fotbalovy-klub">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-fotbalovy-klub6" data-pub="fotbalovy-klub">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-francouzsky-kanton1" data-pub="francouzsky-kanton">Počet entit</option>
	<option value="sparql-francouzsky-kanton2" data-pub="francouzsky-kanton">Počet trojic</option>
	<option value="sparql-francouzsky-kanton3" data-pub="francouzsky-kanton">Počet OutDegree všech entit</option>
	<option value="sparql-francouzsky-kanton4" data-pub="francouzsky-kanton">Počet InDegree všech entit</option>
	<option value="sparql-francouzsky-kanton5" data-pub="francouzsky-kanton">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-francouzsky-kanton6" data-pub="francouzsky-kanton">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-herec1" data-pub="herec">Počet entit</option>
	<option value="sparql-herec2" data-pub="herec">Počet trojic</option>
	<option value="sparql-herec3" data-pub="herec">Počet OutDegree všech entit</option>
	<option value="sparql-herec4" data-pub="herec">Počet InDegree všech entit</option>
	<option value="sparql-herec5" data-pub="herec">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-herec6" data-pub="herec">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-hokejista1" data-pub="hokejista">Počet entit</option>
	<option value="sparql-hokejista2" data-pub="hokejista">Počet trojic</option>
	<option value="sparql-hokejista3" data-pub="hokejista">Počet OutDegree všech entit</option>
	<option value="sparql-hokejista4" data-pub="hokejista">Počet InDegree všech entit</option>
	<option value="sparql-hokejista5" data-pub="hokejista">Hokejisté podle výšky</option>
	<option value="sparql-hokejista6" data-pub="hokejista">Hokejisté podle váhy</option>
	<option value="sparql-hokejista7" data-pub="hokejista">Počet hokejistů podle draftujících týmu</option>	
	<option value="sparql-hokejista8" data-pub="hokejista">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-hokejista9" data-pub="hokejista">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-hokejovy-klub1" data-pub="hokejovy-klub">Počet entit</option>
	<option value="sparql-hokejovy-klub2" data-pub="hokejovy-klub">Počet trojic</option>
	<option value="sparql-hokejovy-klub3" data-pub="hokejovy-klub">Počet OutDegree všech entit</option>
	<option value="sparql-hokejovy-klub4" data-pub="hokejovy-klub">Počet InDegree všech entit</option>
	<option value="sparql-hokejovy-klub5" data-pub="hokejovy-klub">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-hokejovy-klub6" data-pub="hokejovy-klub">Entity podle počtu InDegree - TOP 100</option>
		  
	<option value="sparql-hora1" data-pub="hora">Počet entit</option>
	<option value="sparql-hora2" data-pub="hora">Počet trojic</option>
	<option value="sparql-hora3" data-pub="hora">Počet OutDegree všech entit</option>
	<option value="sparql-hora4" data-pub="hora">Počet InDegree všech entit</option>
	<option value="sparql-hora5" data-pub="hora">Hory podle výšky vrcholu - TOP 100</option>
	<option value="sparql-hora6" data-pub="hora">Počet hor podle pohoří</option>
	<option value="sparql-hora7" data-pub="hora">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-hora8" data-pub="hora">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-hudebni-festival1" data-pub="hudebni-festival">Počet entit</option>
	<option value="sparql-hudebni-festival2" data-pub="hudebni-festival">Počet trojic</option>
	<option value="sparql-hudebni-festival3" data-pub="hudebni-festival">Počet OutDegree všech entit</option>
	<option value="sparql-hudebni-festival4" data-pub="hudebni-festival">Počet InDegree všech entit</option>
	<option value="sparql-hudebni-festival5" data-pub="hudebni-festival">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-hudebni-festival6" data-pub="hudebni-festival">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-hudebni-nastroj1" data-pub="hudebni-nastroj">Počet entit</option>
	<option value="sparql-hudebni-nastroj2" data-pub="hudebni-nastroj">Počet trojic</option>
	<option value="sparql-hudebni-nastroj3" data-pub="hudebni-nastroj">Počet OutDegree všech entit</option>
	<option value="sparql-hudebni-nastroj4" data-pub="hudebni-nastroj">Počet InDegree všech entit</option>
	<option value="sparql-hudebni-nastroj5" data-pub="hudebni-nastroj">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-hudebni-nastroj6" data-pub="hudebni-nastroj">Entity podle počtu InDegree - TOP 100</option>

	<option value="sparql-hudebni-umelec1" data-pub="hudebni-umelec">Počet entit</option>
	<option value="sparql-hudebni-umelec2" data-pub="hudebni-umelec">Počet trojic</option>
	<option value="sparql-hudebni-umelec3" data-pub="hudebni-umelec">Počet OutDegree všech entit</option>
	<option value="sparql-hudebni-umelec4" data-pub="hudebni-umelec">Počet InDegree všech entit</option>
	<option value="sparql-hudebni-umelec5" data-pub="hudebni-umelec">Počty umělců podle hudebního nástroje</option>
	<option value="sparql-hudebni-umelec6" data-pub="hudebni-umelec">Počty umělců podle žánrů</option>
	<option value="sparql-hudebni-umelec7" data-pub="hudebni-umelec">Počty umělců podle zemí původu</option>
	<option value="sparql-hudebni-umelec8" data-pub="hudebni-umelec">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-hudebni-umelec9" data-pub="hudebni-umelec">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-hudebni-zanr1" data-pub="hudebni-zanr">Počet entit</option>
	<option value="sparql-hudebni-zanr2" data-pub="hudebni-zanr">Počet trojic</option>
	<option value="sparql-hudebni-zanr3" data-pub="hudebni-zanr">Počet OutDegree všech entit</option>
	<option value="sparql-hudebni-zanr4" data-pub="hudebni-zanr">Počet InDegree všech entit</option>
	<option value="sparql-hudebni-zanr5" data-pub="hudebni-zanr">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-hudebni-zanr6" data-pub="hudebni-zanr">Entity podle počtu InDegree - TOP 100</option>
		
	<option value="sparql-chemicka-sloucenina1" data-pub="chemicka-sloucenina">Počet entit</option>
	<option value="sparql-chemicka-sloucenina2" data-pub="chemicka-sloucenina">Počet trojic</option>
	<option value="sparql-chemicka-sloucenina3" data-pub="chemicka-sloucenina">Počet OutDegree všech entit</option>
	<option value="sparql-chemicka-sloucenina4" data-pub="chemicka-sloucenina">Počet InDegree všech entit</option>
	<option value="sparql-chemicka-sloucenina5" data-pub="chemicka-sloucenina">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-chemicka-sloucenina6" data-pub="chemicka-sloucenina">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-chemicky-prvek1" data-pub="chemicky-prvek">Počet entit</option>
	<option value="sparql-chemicky-prvek2" data-pub="chemicky-prvek">Počet trojic</option>
	<option value="sparql-chemicky-prvek3" data-pub="chemicky-prvek">Počet OutDegree všech entit</option>
	<option value="sparql-chemicky-prvek4" data-pub="chemicky-prvek">Počet InDegree všech entit</option>
	<option value="sparql-chemicky-prvek5" data-pub="chemicky-prvek">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-chemicky-prvek6" data-pub="chemicky-prvek">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-choroba1" data-pub="choroba">Počet entit</option>
	<option value="sparql-choroba2" data-pub="choroba">Počet trojic</option>
	<option value="sparql-choroba3" data-pub="choroba">Počet OutDegree všech entit</option>
	<option value="sparql-choroba4" data-pub="choroba">Počet InDegree všech entit</option>
	<option value="sparql-choroba5" data-pub="choroba">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-choroba6" data-pub="choroba">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-chranene-uzemi-v-cesku1" data-pub="chranene-uzemi-v-cesku">Počet entit</option>
	<option value="sparql-chranene-uzemi-v-cesku2" data-pub="chranene-uzemi-v-cesku">Počet trojic</option>
	<option value="sparql-chranene-uzemi-v-cesku3" data-pub="chranene-uzemi-v-cesku">Počet OutDegree všech entit</option>
	<option value="sparql-chranene-uzemi-v-cesku4" data-pub="chranene-uzemi-v-cesku">Počet InDegree všech entit</option>
	<option value="sparql-chranene-uzemi-v-cesku5" data-pub="chranene-uzemi-v-cesku">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-chranene-uzemi-v-cesku6" data-pub="chranene-uzemi-v-cesku">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-jazyk1" data-pub="jazyk">Počet entit</option>
	<option value="sparql-jazyk2" data-pub="jazyk">Počet trojic</option>
	<option value="sparql-jazyk3" data-pub="jazyk">Počet OutDegree všech entit</option>
	<option value="sparql-jazyk4" data-pub="jazyk">Počet InDegree všech entit</option>
	<option value="sparql-jazyk5" data-pub="jazyk">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-jazyk6" data-pub="jazyk">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-jezero1" data-pub="jezero">Počet entit</option>
	<option value="sparql-jezero2" data-pub="jezero">Počet trojic</option>
	<option value="sparql-jezero3" data-pub="jezero">Počet OutDegree všech entit</option>
	<option value="sparql-jezero4" data-pub="jezero">Počet InDegree všech entit</option>
	<option value="sparql-jezero5" data-pub="jezero">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-jezero6" data-pub="jezero">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-jmeno1" data-pub="jmeno">Počet entit</option>
	<option value="sparql-jmeno2" data-pub="jmeno">Počet trojic</option>
	<option value="sparql-jmeno3" data-pub="jmeno">Počet OutDegree všech entit</option>
	<option value="sparql-jmeno4" data-pub="jmeno">Počet InDegree všech entit</option>
	<option value="sparql-jmeno5" data-pub="jmeno">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-jmeno6" data-pub="jmeno">Entity podle počtu InDegree - TOP 100</option>
   
	<option value="sparql-kniha1" data-pub="kniha">Počet entit</option>
	<option value="sparql-kniha2" data-pub="kniha">Počet trojic</option>
	<option value="sparql-kniha3" data-pub="kniha">Počet OutDegree všech entit</option>
	<option value="sparql-kniha4" data-pub="kniha">Počet InDegree všech entit</option>
	<option value="sparql-kniha5" data-pub="kniha">Počty knih podle překladatele</option>
	<option value="sparql-kniha6" data-pub="kniha">Počty knih podle autora</option>
	<option value="sparql-kniha7" data-pub="kniha">Počty knih podle ilustrátora</option>
	<option value="sparql-kniha8" data-pub="kniha">Počet knih podle zemí vydání</option>
	<option value="sparql-kniha9" data-pub="kniha">Počet knih podle originálního jazyka</option>	
	<option value="sparql-kniha10" data-pub="kniha">Počet knih podle žánru</option>	
	<option value="sparql-kniha11" data-pub="kniha">Počet knih podle vydavatele</option>	
	<option value="sparql-kniha12" data-pub="kniha">Pořadí knih podle počtu stran</option>
	<option value="sparql-kniha13" data-pub="kniha">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-kniha14" data-pub="kniha">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-kosmicka-lod1" data-pub="kosmicka-lod">Počet entit</option>
	<option value="sparql-kosmicka-lod2" data-pub="kosmicka-lod">Počet trojic</option>
	<option value="sparql-kosmicka-lod3" data-pub="kosmicka-lod">Počet OutDegree všech entit</option>
	<option value="sparql-kosmicka-lod4" data-pub="kosmicka-lod">Počet InDegree všech entit</option>
	<option value="sparql-kosmicka-lod5" data-pub="kosmicka-lod">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-kosmicka-lod6" data-pub="kosmicka-lod">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-kosmonaut1" data-pub="kosmonaut">Počet entit</option>
	<option value="sparql-kosmonaut2" data-pub="kosmonaut">Počet trojic</option>
	<option value="sparql-kosmonaut3" data-pub="kosmonaut">Počet OutDegree všech entit</option>
	<option value="sparql-kosmonaut4" data-pub="kosmonaut">Počet InDegree všech entit</option>
	<option value="sparql-kosmonaut5" data-pub="kosmonaut">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-kosmonaut6" data-pub="kosmonaut">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-kostel1" data-pub="kostel">Počet entit</option>
	<option value="sparql-kostel2" data-pub="kostel">Počet trojic</option>
	<option value="sparql-kostel3" data-pub="kostel">Počet OutDegree všech entit</option>
	<option value="sparql-kostel4" data-pub="kostel">Počet InDegree všech entit</option>
	<option value="sparql-kostel5" data-pub="kostel">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-kostel6" data-pub="kostel">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-krasobruslar1" data-pub="krasobruslar">Počet entit</option>
	<option value="sparql-krasobruslar2" data-pub="krasobruslar">Počet trojic</option>
	<option value="sparql-krasobruslar3" data-pub="krasobruslar">Počet OutDegree všech entit</option>
	<option value="sparql-krasobruslar4" data-pub="krasobruslar">Počet InDegree všech entit</option>
	<option value="sparql-krasobruslar5" data-pub="krasobruslar">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-krasobruslar6" data-pub="krasobruslar">Entity podle počtu InDegree - TOP 100</option>
  
  	<option value="sparql-krestansky-vudce1" data-pub="krestansky-vudce">Počet entit</option>
	<option value="sparql-krestansky-vudce2" data-pub="krestansky-vudce">Počet trojic</option>
	<option value="sparql-krestansky-vudce3" data-pub="krestansky-vudce">Počet OutDegree všech entit</option>
	<option value="sparql-krestansky-vudce4" data-pub="krestansky-vudce">Počet InDegree všech entit</option>
	<option value="sparql-krestansky-vudce5" data-pub="krestansky-vudce">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-krestansky-vudce6" data-pub="krestansky-vudce">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-letadlo1" data-pub="letadlo">Počet entit</option>
	<option value="sparql-letadlo2" data-pub="letadlo">Počet trojic</option>
	<option value="sparql-letadlo3" data-pub="letadlo">Počet OutDegree všech entit</option>
	<option value="sparql-letadlo4" data-pub="letadlo">Počet InDegree všech entit</option>
	<option value="sparql-letadlo5" data-pub="letadlo">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-letadlo6" data-pub="letadlo">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-letecka-spolecnost1" data-pub="letecka-spolecnost">Počet entit</option>
	<option value="sparql-letecka-spolecnost2" data-pub="letecka-spolecnost">Počet trojic</option>
	<option value="sparql-letecka-spolecnost3" data-pub="letecka-spolecnost">Počet OutDegree všech entit</option>
	<option value="sparql-letecka-spolecnost4" data-pub="letecka-spolecnost">Počet InDegree všech entit</option>
	<option value="sparql-letecka-spolecnost5" data-pub="letecka-spolecnost">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-letecka-spolecnost6" data-pub="letecka-spolecnost">Entity podle počtu InDegree - TOP 100</option>
 
	<option value="sparql-letiste1" data-pub="letiste">Počet entit</option>
	<option value="sparql-letiste2" data-pub="letiste">Počet trojic</option>
	<option value="sparql-letiste3" data-pub="letiste">Počet OutDegree všech entit</option>
	<option value="sparql-letiste4" data-pub="letiste">Počet InDegree všech entit</option>
	<option value="sparql-letiste5" data-pub="letiste">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-letiste6" data-pub="letiste">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-liga-ledniho-hokeje1" data-pub="liga-ledniho-hokeje">Počet entit</option>
	<option value="sparql-liga-ledniho-hokeje2" data-pub="liga-ledniho-hokeje">Počet trojic</option>
	<option value="sparql-liga-ledniho-hokeje3" data-pub="liga-ledniho-hokeje">Počet OutDegree všech entit</option>
	<option value="sparql-liga-ledniho-hokeje4" data-pub="liga-ledniho-hokeje">Počet InDegree všech entit</option>
	<option value="sparql-liga-ledniho-hokeje5" data-pub="liga-ledniho-hokeje">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-liga-ledniho-hokeje6" data-pub="liga-ledniho-hokeje">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-lyzar1" data-pub="lyzar">Počet entit</option>
	<option value="sparql-lyzar2" data-pub="lyzar">Počet trojic</option>
	<option value="sparql-lyzar3" data-pub="lyzar">Počet OutDegree všech entit</option>
	<option value="sparql-lyzar4" data-pub="lyzar">Počet InDegree všech entit</option>
	<option value="sparql-lyzar5" data-pub="lyzar">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-lyzar6" data-pub="lyzar">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-mineral1" data-pub="mineral">Počet entit</option>
	<option value="sparql-mineral2" data-pub="mineral">Počet trojic</option>
	<option value="sparql-mineral3" data-pub="mineral">Počet OutDegree všech entit</option>
	<option value="sparql-mineral4" data-pub="mineral">Počet InDegree všech entit</option>
	<option value="sparql-mineral5" data-pub="mineral">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-mineral6" data-pub="mineral">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-mobilni-telefon1" data-pub="mobilni-telefon">Počet entit</option>
	<option value="sparql-mobilni-telefon2" data-pub="mobilni-telefon">Počet trojic</option>
	<option value="sparql-mobilni-telefon3" data-pub="mobilni-telefon">Počet OutDegree všech entit</option>
	<option value="sparql-mobilni-telefon4" data-pub="mobilni-telefon">Počet InDegree všech entit</option>
	<option value="sparql-mobilni-telefon5" data-pub="mobilni-telefon">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-mobilni-telefon6" data-pub="mobilni-telefon">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-model1" data-pub="model">Počet entit</option>
	<option value="sparql-model2" data-pub="model">Počet trojic</option>
	<option value="sparql-model3" data-pub="model">Počet OutDegree všech entit</option>
	<option value="sparql-model4" data-pub="model">Počet InDegree všech entit</option>
	<option value="sparql-model5" data-pub="model">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-model6" data-pub="model">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-motocykl1" data-pub="motocykl">Počet entit</option>
	<option value="sparql-motocykl2" data-pub="motocykl">Počet trojic</option>
	<option value="sparql-motocykl3" data-pub="motocykl">Počet OutDegree všech entit</option>
	<option value="sparql-motocykl4" data-pub="motocykl">Počet InDegree všech entit</option>
	<option value="sparql-motocykl5" data-pub="motocykl">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-motocykl6" data-pub="motocykl">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-more1" data-pub="more">Počet entit</option>
	<option value="sparql-more2" data-pub="more">Počet trojic</option>
	<option value="sparql-more3" data-pub="more">Počet OutDegree všech entit</option>
	<option value="sparql-more4" data-pub="more">Počet InDegree všech entit</option>
	<option value="sparql-more5" data-pub="more">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-more6" data-pub="more">Entity podle počtu InDegree - TOP 100</option>		
	
	<option value="sparql-mrakodrap1" data-pub="mrakodrap">Počet entit</option>
	<option value="sparql-mrakodrap2" data-pub="mrakodrap">Počet trojic</option>
	<option value="sparql-mrakodrap3" data-pub="mrakodrap">Počet OutDegree všech entit</option>
	<option value="sparql-mrakodrap4" data-pub="mrakodrap">Počet InDegree všech entit</option>
	<option value="sparql-mrakodrap5" data-pub="mrakodrap">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-mrakodrap6" data-pub="mrakodrap">Entity podle počtu InDegree - TOP 100</option>	

	<option value="sparql-muzeum1" data-pub="muzeum">Počet entit</option>
	<option value="sparql-muzeum2" data-pub="muzeum">Počet trojic</option>
	<option value="sparql-muzeum3" data-pub="muzeum">Počet OutDegree všech entit</option>
	<option value="sparql-muzeum4" data-pub="muzeum">Počet InDegree všech entit</option>
	<option value="sparql-muzeum5" data-pub="muzeum">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-muzeum6" data-pub="muzeum">Entity podle počtu InDegree - TOP 100</option>		
	
	<option value="sparql-mena1" data-pub="mena">Počet entit</option>
	<option value="sparql-mena2" data-pub="mena">Počet trojic</option>
	<option value="sparql-mena3" data-pub="mena">Počet OutDegree všech entit</option>
	<option value="sparql-mena4" data-pub="mena">Počet InDegree všech entit</option>
	<option value="sparql-mena5" data-pub="mena">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-mena6" data-pub="mena">Entity podle počtu InDegree - TOP 100</option>		
	
	<option value="sparql-ms-v-hokeji1" data-pub="ms-v-hokeji">Počet entit</option>
	<option value="sparql-ms-v-hokeji2" data-pub="ms-v-hokeji">Počet trojic</option>
	<option value="sparql-ms-v-hokeji3" data-pub="ms-v-hokeji">Počet OutDegree všech entit</option>
	<option value="sparql-ms-v-hokeji4" data-pub="ms-v-hokeji">Počet InDegree všech entit</option>
	<option value="sparql-ms-v-hokeji5" data-pub="ms-v-hokeji">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-ms-v-hokeji6" data-pub="ms-v-hokeji">Entity podle počtu InDegree - TOP 100</option>		
 
 	<option value="sparql-noviny1" data-pub="noviny">Počet entit</option>
	<option value="sparql-noviny2" data-pub="noviny">Počet trojic</option>
	<option value="sparql-noviny3" data-pub="noviny">Počet OutDegree všech entit</option>
	<option value="sparql-noviny4" data-pub="noviny">Počet InDegree všech entit</option>
	<option value="sparql-noviny5" data-pub="noviny">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-noviny6" data-pub="noviny">Entity podle počtu InDegree - TOP 100</option>		
	
	<option value="sparql-okres1" data-pub="okres">Počet entit</option>
	<option value="sparql-okres2" data-pub="okres">Počet trojic</option>
	<option value="sparql-okres3" data-pub="okres">Počet OutDegree všech entit</option>
	<option value="sparql-okres4" data-pub="okres">Počet InDegree všech entit</option>
	<option value="sparql-okres5" data-pub="okres">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-okres6" data-pub="okres">Entity podle počtu InDegree - TOP 100</option>

	<option value="sparql-organizace1" data-pub="organizace">Počet entit</option>
	<option value="sparql-organizace2" data-pub="organizace">Počet trojic</option>
	<option value="sparql-organizace3" data-pub="organizace">Počet OutDegree všech entit</option>
	<option value="sparql-organizace4" data-pub="organizace">Počet InDegree všech entit</option>
	<option value="sparql-organizace5" data-pub="organizace">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-organizace6" data-pub="organizace">Entity podle počtu InDegree - TOP 100</option>	
 
	<option value="sparql-osoba1" data-pub="osoba">Počet entit</option>
	<option value="sparql-osoba2" data-pub="osoba">Počet trojic</option>
	<option value="sparql-osoba3" data-pub="osoba">Počet OutDegree všech entit</option>
	<option value="sparql-osoba4" data-pub="osoba">Počet InDegree všech entit</option>
	<option value="sparql-osoba5" data-pub="osoba">Počty osob dle národností</option>
	<option value="sparql-osoba6" data-pub="osoba">Počty osob podle povolání (TOP 50)</option>
	<option value="sparql-osoba7" data-pub="osoba">Počty osob podle univerzit (TOP 10)</option>
	<option value="sparql-osoba8" data-pub="osoba">Počet osob podle místa narození (TOP 50)</option>
	<option value="sparql-osoba9" data-pub="osoba">Pořadí osob podle výšky (TOP 100)</option>	
	<option value="sparql-osoba10" data-pub="osoba">Pořadí osob podle váhy (TOP 100)</option>
	<option value="sparql-osoba11" data-pub="osoba">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-osoba12" data-pub="osoba">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-ostrov1" data-pub="ostrov">Počet entit</option>
	<option value="sparql-ostrov2" data-pub="ostrov">Počet trojic</option>
	<option value="sparql-ostrov3" data-pub="ostrov">Počet OutDegree všech entit</option>
	<option value="sparql-ostrov4" data-pub="ostrov">Počet InDegree všech entit</option>
	<option value="sparql-ostrov5" data-pub="ostrov">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-ostrov6" data-pub="ostrov">Entity podle počtu InDegree - TOP 100</option>	
   
	<option value="sparql-panovnik1" data-pub="panovnik">Počet entit</option>
	<option value="sparql-panovnik2" data-pub="panovnik">Počet trojic</option>
	<option value="sparql-panovnik3" data-pub="panovnik">Počet OutDegree všech entit</option>
	<option value="sparql-panovnik4" data-pub="panovnik">Počet InDegree všech entit</option>
	<option value="sparql-panovnik5" data-pub="panovnik">Počty panovníků podle dynastií</option>
	<option value="sparql-panovnik6" data-pub="panovnik">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-panovnik7" data-pub="panovnik">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-pilot-f11" data-pub="pilot-f1">Počet entit</option>
	<option value="sparql-pilot-f12" data-pub="pilot-f1">Počet trojic</option>
	<option value="sparql-pilot-f13" data-pub="pilot-f1">Počet OutDegree všech entit</option>
	<option value="sparql-pilot-f14" data-pub="pilot-f1">Počet InDegree všech entit</option>
	<option value="sparql-pilot-f15" data-pub="pilot-f1">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-pilot-f16" data-pub="pilot-f1">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-pivovar1" data-pub="pivovar">Počet entit</option>
	<option value="sparql-pivovar2" data-pub="pivovar">Počet trojic</option>
	<option value="sparql-pivovar3" data-pub="pivovar">Počet OutDegree všech entit</option>
	<option value="sparql-pivovar4" data-pub="pivovar">Počet InDegree všech entit</option>
	<option value="sparql-pivovar5" data-pub="pivovar">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-pivovar6" data-pub="pivovar">Entity podle počtu InDegree - TOP 100</option>

	<option value="sparql-planeta1" data-pub="planeta">Počet entit</option>
	<option value="sparql-planeta2" data-pub="planeta">Počet trojic</option>
	<option value="sparql-planeta3" data-pub="planeta">Počet OutDegree všech entit</option>
	<option value="sparql-planeta4" data-pub="planeta">Počet InDegree všech entit</option>
	<option value="sparql-planeta5" data-pub="planeta">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-planeta6" data-pub="planeta">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-politicka-strana1" data-pub="politicka-strama">Počet entit</option>
	<option value="sparql-politicka-strana2" data-pub="politicka-strama">Počet trojic</option>
	<option value="sparql-politicka-strana3" data-pub="politicka-strama">Počet OutDegree všech entit</option>
	<option value="sparql-politicka-strana4" data-pub="politicka-strama">Počet InDegree všech entit</option>
	<option value="sparql-politicka-strana5" data-pub="politicka-strama">Počty politických stran podle sídla strany</option>
	<option value="sparql-politicka-strana6" data-pub="politicka-strama">Počty politických stran podle ideologií</option>
	<option value="sparql-politicka-strana7" data-pub="politicka-strama">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-politicka-strana8" data-pub="politicka-strama">Entity podle počtu InDegree - TOP 100</option>
  
	<option value="sparql-politik1" data-pub="politik">Počet entit</option>
	<option value="sparql-politik2" data-pub="politik">Počet trojic</option>
	<option value="sparql-politik3" data-pub="politik">Počet OutDegree všech entit</option>
	<option value="sparql-politik4" data-pub="politik">Počet InDegree všech entit</option>
	<option value="sparql-politik5" data-pub="politik">Počty politiků podle studované školy</option>
	<option value="sparql-politik6" data-pub="politik">Počty politiků podle politických stran</option>
	<option value="sparql-politik7" data-pub="politik">Počty politiků podle národností</option>
	<option value="sparql-politik8" data-pub="politik">Počty politiků podle politických funkcí</option>
	<option value="sparql-politik9" data-pub="politik">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-politik10" data-pub="politik">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-programovaci-jazyk1" data-pub="programovaci-jazyk">Počet entit</option>
	<option value="sparql-programovaci-jazyk2" data-pub="programovaci-jazyk">Počet trojic</option>
	<option value="sparql-programovaci-jazyk3" data-pub="programovaci-jazyk">Počet OutDegree všech entit</option>
	<option value="sparql-programovaci-jazyk4" data-pub="programovaci-jazyk">Počet InDegree všech entit</option>
	<option value="sparql-programovaci-jazyk5" data-pub="programovaci-jazyk">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-programovaci-jazyk6" data-pub="programovaci-jazyk">Entity podle počtu InDegree - TOP 100</option>	
   
	<option value="sparql-region1" data-pub="region">Počet entit</option>
	<option value="sparql-region2" data-pub="region">Počet trojic</option>
	<option value="sparql-region3" data-pub="region">Počet OutDegree všech entit</option>
	<option value="sparql-region4" data-pub="region">Počet InDegree všech entit</option>
	<option value="sparql-region5" data-pub="region">Pořadí regionů podle rozlohy</option>
	<option value="sparql-region6" data-pub="region">Pořadí regionů podle počtů obyvatel</option>
	<option value="sparql-region7" data-pub="region">Pořadí regionů podle hustoty zalidnění</option>
	<option value="sparql-region8" data-pub="region">Pořadí regionů podle nejvyšší hory</option>
	<option value="sparql-region9" data-pub="region">Pořadí regionů podle náboženství</option>
	<option value="sparql-region10" data-pub="region">Počty regionů podle jazyka</option>
	<option value="sparql-region11" data-pub="region">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-region12" data-pub="region">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-reziser1" data-pub="reziser">Počet entit</option>
	<option value="sparql-reziser2" data-pub="reziser">Počet trojic</option>
	<option value="sparql-reziser3" data-pub="reziser">Počet OutDegree všech entit</option>
	<option value="sparql-reziser4" data-pub="reziser">Počet InDegree všech entit</option>
	<option value="sparql-reziser5" data-pub="reziser">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-reziser6" data-pub="reziser">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-rychlobruslar1" data-pub="rychlobruslar">Počet entit</option>
	<option value="sparql-rychlobruslar2" data-pub="rychlobruslar">Počet trojic</option>
	<option value="sparql-rychlobruslar3" data-pub="rychlobruslar">Počet OutDegree všech entit</option>
	<option value="sparql-rychlobruslar4" data-pub="rychlobruslar">Počet InDegree všech entit</option>
	<option value="sparql-rychlobruslar5" data-pub="rychlobruslar">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-rychlobruslar6" data-pub="rychlobruslar">Entity podle počtu InDegree - TOP 100</option>	
	  
	<option value="sparql-sidlo1" data-pub="sidlo">Počet entit</option>
	<option value="sparql-sidlo2" data-pub="sidlo">Počet trojic</option>
	<option value="sparql-sidlo3" data-pub="sidlo">Počet OutDegree všech entit</option>
	<option value="sparql-sidlo4" data-pub="sidlo">Počet Indegree všech entit</option>
	<option value="sparql-sidlo5" data-pub="sidlo">Počet sídel podle zemí (TOP 50)</option>
	<option value="sparql-sidlo6" data-pub="sidlo">Pořadí sídel podle výměry</option>
	<option value="sparql-sidlo7" data-pub="sidlo">Pořadí sídel podle počtů obyvatel</option>
	<option value="sparql-sidlo8" data-pub="sidlo">Pořadí sídel podle nadmořských výšek</option>
	<option value="sparql-sidlo9" data-pub="sidlo">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-sidlo10" data-pub="sidlo">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-sidlo-sveta1" data-pub="sidlo-sveta">Počet entit</option>
	<option value="sparql-sidlo-sveta2" data-pub="sidlo-sveta">Počet trojic</option>
	<option value="sparql-sidlo-sveta3" data-pub="sidlo-sveta">Počet OutDegree všech entit</option>
	<option value="sparql-sidlo-sveta4" data-pub="sidlo-sveta">Počet InDegree všech entit</option>
	<option value="sparql-sidlo-sveta5" data-pub="sidlo-sveta">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-sidlo-sveta6" data-pub="sidlo-sveta">Entity podle počtu InDegree - TOP 100</option>	

	<option value="sparql-skladba1" data-pub="skladba">Počet entit</option>
	<option value="sparql-skladba2" data-pub="skladba">Počet trojic</option>
	<option value="sparql-skladba3" data-pub="skladba">Počet OutDegree všech entit</option>
	<option value="sparql-skladba4" data-pub="skladba">Počet InDegree všech entit</option>
	<option value="sparql-skladba5" data-pub="skladba">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-skladba6" data-pub="skladba">Entity podle počtu InDegree - TOP 100</option>	

	<option value="sparql-software1" data-pub="software">Počet entit</option>
	<option value="sparql-software2" data-pub="software">Počet trojic</option>
	<option value="sparql-software3" data-pub="software">Počet OutDegree všech entit</option>
	<option value="sparql-software4" data-pub="software">Počet InDegree všech entit</option>
	<option value="sparql-software5" data-pub="software">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-software6" data-pub="software">Entity podle počtu InDegree - TOP 100</option>			
	  
	<option value="sparql-spisovatel1" data-pub="spisovatel">Počet entit</option>
	<option value="sparql-spisovatel2" data-pub="spisovatel">Počet trojic</option>
	<option value="sparql-spisovatel3" data-pub="spisovatel">Počet OutDegree všech entit</option>
	<option value="sparql-spisovatel4" data-pub="spisovatel">Počet InDegree všech entit</option>
	<option value="sparql-spisovatel5" data-pub="spisovatel">Počet entit podle národnosti</option>
	<option value="sparql-spisovatel6" data-pub="spisovatel">Počet entit podle vzdělání</option>
	<option value="sparql-spisovatel7" data-pub="spisovatel">Počty entit podle žánru</option>
	<option value="sparql-spisovatel8" data-pub="spisovatel">Počty entit podle vystudovaných škol</option>
	<option value="sparql-spisovatel9" data-pub="spisovatel">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-spisovatel10" data-pub="spisovatel">Entity podle počtu InDegree - TOP 100</option>
  
	<option value="sparql-singl1" data-pub="singl">Počet entit</option>
	<option value="sparql-singl2" data-pub="singl">Počet trojic</option>
	<option value="sparql-singl3" data-pub="singl">Počet OutDegree všech entit</option>
	<option value="sparql-singl4" data-pub="singl">Počet Indegree všech entit</option>
	<option value="sparql-singl5" data-pub="singl">Počty singlů podle žánrů</option>
	<option value="sparql-singl6" data-pub="singl">Počty singlů podle autora</option>
	<option value="sparql-singl7" data-pub="singl">Počty singlů podle umělců</option>
	<option value="sparql-singl8" data-pub="singl">Počty singlů podle producentů</option>
	<option value="sparql-singl9" data-pub="singl">Počty singlů podle vydavatelství</option>
	<option value="sparql-singl10" data-pub="singl">Pořadí singlů podle délky</option>
	<option value="sparql-singl11" data-pub="singl">Pořadí singlů podle ranku</option>
	<option value="sparql-singl12" data-pub="singl">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-singl13" data-pub="singl">Entity podle počtu InDegree - TOP 100</option>
  
	<option value="sparql-sportovec1" data-pub="sportovec">Počet entit</option>
	<option value="sparql-sportovec2" data-pub="sportovec">Počet trojic</option>
	<option value="sparql-sportovec3" data-pub="sportovec">Počet OutDegree všech entit</option>
	<option value="sparql-sportovec4" data-pub="sportovec">Počet Indegree všech entit</option>
	<option value="sparql-sportovec5" data-pub="sportovec">Počty sportovců podle občanství</option>
	<option value="sparql-sportovec6" data-pub="sportovec">Počty sportovců podle sportů</option>
	<option value="sparql-sportovec7" data-pub="sportovec">Počty sportovců podle atletických disciplín</option>
	<option value="sparql-sportovec8" data-pub="sportovec">Pořadí sportovců podle výšky</option>
	<option value="sparql-sportovec9" data-pub="sportovec">Pořadí sportovců podle váhy</option>
	<option value="sparql-sportovec10" data-pub="sportovec">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-sportovec11" data-pub="sportovec">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-sportovni-disciplina1" data-pub="sportovni-disciplina">Počet entit</option>
	<option value="sparql-sportovni-disciplina2" data-pub="sportovni-disciplina">Počet trojic</option>
	<option value="sparql-sportovni-disciplina3" data-pub="sportovni-disciplina">Počet OutDegree všech entit</option>
	<option value="sparql-sportovni-disciplina4" data-pub="sportovni-disciplina">Počet InDegree všech entit</option>
	<option value="sparql-sportovni-disciplina5" data-pub="sportovni-disciplina">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-sportovni-disciplina6" data-pub="sportovni-disciplina">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-stadion1" data-pub="stadion">Počet entit</option>
	<option value="sparql-stadion2" data-pub="stadion">Počet trojic</option>
	<option value="sparql-stadion3" data-pub="stadion">Počet OutDegree všech entit</option>
	<option value="sparql-stadion4" data-pub="stadion">Počet InDegree všech entit</option>
	<option value="sparql-stadion5" data-pub="stadion">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-stadion6" data-pub="stadion">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-stromy1" data-pub="stromy">Počet entit</option>
	<option value="sparql-stromy2" data-pub="stromy">Počet trojic</option>
	<option value="sparql-stromy3" data-pub="stromy">Počet OutDegree všech entit</option>
	<option value="sparql-stromy4" data-pub="stromy">Počet InDegree všech entit</option>
	<option value="sparql-stromy5" data-pub="stromy">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-stromy6" data-pub="stromy">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-stat1" data-pub="stat">Počet entit</option>
	<option value="sparql-stat2" data-pub="stat">Počet trojic</option>
	<option value="sparql-stat3" data-pub="stat">Počet OutDegree všech entit</option>
	<option value="sparql-stat4" data-pub="stat">Počet InDegree všech entit</option>
	<option value="sparql-stat5" data-pub="stat">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-stat6" data-pub="stat">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-svatek1" data-pub="svatek">Počet entit</option>
	<option value="sparql-svatek2" data-pub="svatek">Počet trojic</option>
	<option value="sparql-svatek3" data-pub="svatek">Počet OutDegree všech entit</option>
	<option value="sparql-svatek4" data-pub="svatek">Počet InDegree všech entit</option>
	<option value="sparql-svatek5" data-pub="svatek">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-svatek6" data-pub="svatek">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-svetec1" data-pub="svetec">Počet entit</option>
	<option value="sparql-svetec2" data-pub="svetec">Počet trojic</option>
	<option value="sparql-svetec3" data-pub="svetec">Počet OutDegree všech entit</option>
	<option value="sparql-svetec4" data-pub="svetec">Počet InDegree všech entit</option>
	<option value="sparql-svetec5" data-pub="svetec">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-svetec6" data-pub="svetec">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-svetove-dedictvi1" data-pub="svetove-dedictvi">Počet entit</option>
	<option value="sparql-svetove-dedictvi2" data-pub="svetove-dedictvi">Počet trojic</option>
	<option value="sparql-svetove-dedictvi3" data-pub="svetove-dedictvi">Počet OutDegree všech entit</option>
	<option value="sparql-svetove-dedictvi4" data-pub="svetove-dedictvi">Počet InDegree všech entit</option>
	<option value="sparql-svetove-dedictvi5" data-pub="svetove-dedictvi">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-svetove-dedictvi6" data-pub="svetove-dedictvi">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-televizni-porad1" data-pub="televizni-porad">Počet entit</option>
	<option value="sparql-televizni-porad2" data-pub="televizni-porad">Počet trojic</option>
	<option value="sparql-televizni-porad3" data-pub="televizni-porad">Počet OutDegree všech entit</option>
	<option value="sparql-televizni-porad4" data-pub="televizni-porad">Počet InDegree všech entit</option>
	<option value="sparql-televizni-porad5" data-pub="televizni-porad">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-televizni-porad6" data-pub="televizni-porad">Entity podle počtu InDegree - TOP 100</option>

	<option value="sparql-tenista1" data-pub="tenista">Počet entit</option>
	<option value="sparql-tenista2" data-pub="tenista">Počet trojic</option>
	<option value="sparql-tenista3" data-pub="tenista">Počet OutDegree všech entit</option>
	<option value="sparql-tenista4" data-pub="tenista">Počet InDegree všech entit</option>
	<option value="sparql-tenista5" data-pub="tenista">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-tenista6" data-pub="tenista">Entity podle počtu InDegree - TOP 100</option>

	<option value="sparql-tepna1" data-pub="tepna">Počet entit</option>
	<option value="sparql-tepna2" data-pub="tepna">Počet trojic</option>
	<option value="sparql-tepna3" data-pub="tepna">Počet OutDegree všech entit</option>
	<option value="sparql-tepna4" data-pub="tepna">Počet InDegree všech entit</option>
	<option value="sparql-tepna5" data-pub="tepna">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-tepna6" data-pub="tepna">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-ulice1" data-pub="ulice">Počet entit</option>
	<option value="sparql-ulice2" data-pub="ulice">Počet trojic</option>
	<option value="sparql-ulice3" data-pub="ulice">Počet OutDegree všech entit</option>
	<option value="sparql-ulice4" data-pub="ulice">Počet InDegree všech entit</option>
	<option value="sparql-ulice5" data-pub="ulice">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-ulice6" data-pub="ulice">Entity podle počtu InDegree - TOP 100</option>	
	  
	<option value="sparql-umelec1" data-pub="umelec">Počet entit</option>
	<option value="sparql-umelec2" data-pub="umelec">Počet trojic</option>
	<option value="sparql-umelec3" data-pub="umelec">Počet OutDegree všech entit</option>
	<option value="sparql-umelec4" data-pub="umelec">Počet Indegree všech entit</option>
	<option value="sparql-umelec5" data-pub="umelec">Počty umělců podle národnosti</option>
	<option value="sparql-umelec6" data-pub="umelec">Počty umělců podle vzdělání</option>
	<option value="sparql-umelec7" data-pub="umelec">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-umelec8" data-pub="umelec">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-univerzita1" data-pub="univerzita">Počet entit</option>
	<option value="sparql-univerzita2" data-pub="univerzita">Počet trojic</option>
	<option value="sparql-univerzita3" data-pub="univerzita">Počet OutDegree všech entit</option>
	<option value="sparql-univerzita4" data-pub="univerzita">Počet InDegree všech entit</option>
	<option value="sparql-univerzita5" data-pub="univerzita">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-univerzita6" data-pub="univerzita">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-videohra1" data-pub="videohra">Počet entit</option>
	<option value="sparql-videohra2" data-pub="videohra">Počet trojic</option>
	<option value="sparql-videohra3" data-pub="videohra">Počet OutDegree všech entit</option>
	<option value="sparql-videohra4" data-pub="videohra">Počet InDegree všech entit</option>
	<option value="sparql-videohra5" data-pub="videohra">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-videohra6" data-pub="videohra">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-vodni-plocha1" data-pub="vodni-plocha">Počet entit</option>
	<option value="sparql-vodni-plocha2" data-pub="vodni-plocha">Počet trojic</option>
	<option value="sparql-vodni-plocha3" data-pub="vodni-plocha">Počet OutDegree všech entit</option>
	<option value="sparql-vodni-plocha4" data-pub="vodni-plocha">Počet InDegree všech entit</option>
	<option value="sparql-vodni-plocha5" data-pub="vodni-plocha">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-vodni-plocha6" data-pub="vodni-plocha">Entity podle počtu InDegree - TOP 100</option>

	<option value="sparql-vodni-tok1" data-pub="vodni-tok">Počet entit</option>
	<option value="sparql-vodni-tok2" data-pub="vodni-tok">Počet trojic</option>
	<option value="sparql-vodni-tok3" data-pub="vodni-tok">Počet OutDegree všech entit</option>
	<option value="sparql-vodni-tok4" data-pub="vodni-tok">Počet InDegree všech entit</option>
	<option value="sparql-vodni-tok5" data-pub="vodni-tok">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-vodni-tok6	" data-pub="vodni-tok">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-vojensky-velitel1" data-pub="vojensky-velitel">Počet entit</option>
	<option value="sparql-vojensky-velitel2" data-pub="vojensky-velitel">Počet trojic</option>
	<option value="sparql-vojensky-velitel3" data-pub="vojensky-velitel">Počet OutDegree všech entit</option>
	<option value="sparql-vojensky-velitel4" data-pub="vojensky-velitel">Počet InDegree všech entit</option>
	<option value="sparql-vojensky-velitel5" data-pub="vojensky-velitel">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-vojensky-velitel6" data-pub="vojensky-velitel">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-volejbalista1" data-pub="volejbalista">Počet entit</option>
	<option value="sparql-volejbalista2" data-pub="volejbalista">Počet trojic</option>
	<option value="sparql-volejbalista3" data-pub="volejbalista">Počet OutDegree všech entit</option>
	<option value="sparql-volejbalista4" data-pub="volejbalista">Počet InDegree všech entit</option>
	<option value="sparql-volejbalista5" data-pub="volejbalista">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-volejbalista6" data-pub="volejbalista">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-valecna-lod1" data-pub="valecna-lod">Počet entit</option>
	<option value="sparql-valecna-lod2" data-pub="valecna-lod">Počet trojic</option>
	<option value="sparql-valecna-lod3" data-pub="valecna-lod">Počet OutDegree všech entit</option>
	<option value="sparql-valecna-lod4" data-pub="valecna-lod">Počet InDegree všech entit</option>
	<option value="sparql-valecna-lod5" data-pub="valecna-lod">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-valecna-lod6" data-pub="valecna-lod">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-valka1" data-pub="valka">Počet entit</option>
	<option value="sparql-valka2" data-pub="valka">Počet trojic</option>
	<option value="sparql-valka3" data-pub="valka">Počet OutDegree všech entit</option>
	<option value="sparql-valka4" data-pub="valka">Počet InDegree všech entit</option>
	<option value="sparql-valka5" data-pub="valka">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-valka6" data-pub="valka">Entity podle počtu InDegree - TOP 100</option>

	<option value="sparql-vedec1" data-pub="vedec">Počet entit</option>
	<option value="sparql-vedec2" data-pub="vedec">Počet trojic</option>
	<option value="sparql-vedec3" data-pub="vedec">Počet OutDegree všech entit</option>
	<option value="sparql-vedec4" data-pub="vedec">Počet InDegree všech entit</option>
	<option value="sparql-vedec5" data-pub="vedec">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-vedec6" data-pub="vedec">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-webova-stranka1" data-pub="webova-stranka">Počet entit</option>
	<option value="sparql-webova-stranka2" data-pub="webova-stranka">Počet trojic</option>
	<option value="sparql-webova-stranka3" data-pub="webova-stranka">Počet OutDegree všech entit</option>
	<option value="sparql-webova-stranka4" data-pub="webova-stranka">Počet InDegree všech entit</option>
	<option value="sparql-webova-stranka5" data-pub="webova-stranka">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-webova-stranka6" data-pub="webova-stranka">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-zbran1" data-pub="zbran">Počet entit</option>
	<option value="sparql-zbran2" data-pub="zbran">Počet trojic</option>
	<option value="sparql-zbran3" data-pub="zbran">Počet OutDegree všech entit</option>
	<option value="sparql-zbran4" data-pub="zbran">Počet InDegree všech entit</option>
	<option value="sparql-zbran5" data-pub="zbran">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-zbran6" data-pub="zbran">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-zeme-na-hrach1" data-pub="zeme-na-hrach">Počet entit</option>
	<option value="sparql-zeme-na-hrach2" data-pub="zeme-na-hrach">Počet trojic</option>
	<option value="sparql-zeme-na-hrach3" data-pub="zeme-na-hrach">Počet OutDegree všech entit</option>
	<option value="sparql-zeme-na-hrach4" data-pub="zeme-na-hrach">Počet InDegree všech entit</option>
	<option value="sparql-zeme-na-hrach5" data-pub="zeme-na-hrach">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-zeme-na-hrach6" data-pub="zeme-na-hrach">Entity podle počtu InDegree - TOP 100</option>	
	
	<option value="sparql-zavod-formule11" data-pub="zavod-formule1">Počet entit</option>
	<option value="sparql-zavod-formule12" data-pub="zavod-formule1">Počet trojic</option>
	<option value="sparql-zavod-formule13" data-pub="zavod-formule1">Počet OutDegree všech entit</option>
	<option value="sparql-zavod-formule14" data-pub="zavod-formule1">Počet InDegree všech entit</option>
	<option value="sparql-zavod-formule15" data-pub="zavod-formule1">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-zavod-formule16" data-pub="zavod-formule1">Entity podle počtu InDegree - TOP 100</option>
	
	<option value="sparql-zeleznicni-trat1" data-pub="zeleznicni-trat">Počet entit</option>
	<option value="sparql-zeleznicni-trat2" data-pub="zeleznicni-trat">Počet trojic</option>
	<option value="sparql-zeleznicni-trat3" data-pub="zeleznicni-trat">Počet OutDegree všech entit</option>
	<option value="sparql-zeleznicni-trat4" data-pub="zeleznicni-trat">Počet InDegree všech entit</option>
	<option value="sparql-zeleznicni-trat5" data-pub="zeleznicni-trat">Entity podle počtu OutDegree - TOP 100</option>
	<option value="sparql-zeleznicni-trat6" data-pub="zeleznicni-trat">Entity podle počtu InDegree - TOP 100</option>	
	
</select>

<!---------------END OF SELECT OPTION FOR STATS OF MAPPED CLASS --------------->

<button onclick="doSelect()" type="button"class="button-show">
    ZOBRAZIT
  </button>
</div>
  


<script type="text/javascript" src="/js/class-second-option.js"></script>
<script type="text/javascript" src="/js/draw-table-for-select-of-class.js"></script>
<script type="text/javascript" src="/js/draw-table-class-select-online.js"></script>	
<script type="text/javascript" src="/js/show-single-number-stats-offline.js"></script>	
<script type="text/javascript" src="/js/online-or-offline.js"></script>	
<script type="text/javascript" src="/js/draw-table-offline.js"></script>	



<div id="sparql-result">

</div>
</div>
