<?php
  //------------------------------------------------------
	//------------DEFINIZIONE RESPONSABILE SITO-------------
	//------------------------------------------------------
	define("RESPONSABILE_NOME","Il Nemeton - APS");
	define("RESPONSABILE_EMAIL","nemeton.aps@gmail.com");
	//------------------------------------------------------

	//------------------------------------------------------
	//-----------------DEFINIZIONE URL SITO-----------------
	//------------------------------------------------------
	define("BASE_URL_ALTERVISTA","www.avid3916020.altervista.org");
	define("BASE_URL_CUSTOM","www.animapagana.it");
	//------------------------------------------------------

  function CreaPaginaTerminiCondizioni(){
    echo '<main class="pt-4">
    <div class="altezza-minima-schermo py-4 px-4 d-flex flex-column flex-wrap justify-content-center align-items-center gap-4">';
    CreaTitolo();
    CreaSezioneIntroduttiva();
    CreaSezioneCondizioniUso();
    CreaSezioneLimitazioniResponsabilitaManleva();
    CreaSezioneDisposizioniComuni();
    CreaSezioneDefinizioniRiferimentiLegali();
    CreaSezioneUltimoAggiornamento();
    echo '</div>
    </main>';
  }

  function AggiungiGestionePrivacy(){
    echo '
    <!-- Includes IUBENDA Banner -->
    <!-- <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"countryDetection":true,"enableLgpd":true,"enableUspr":true,"floatingPreferencesButtonDisplay":"bottom-right","lgpdAppliesGlobally":false,"perPurposeConsent":true,"siteId":3048880,"whitelabel":false,"cookiePolicyId":13227633,"lang":"it", "banner":{ "acceptButtonColor":"#FF5500","acceptButtonDisplay":true,"backgroundColor":"#FFFFFF","backgroundOverlay":true,"closeButtonDisplay":false,"customizeButtonColor":"#8E3286C5","customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"logo":null,"linksColor":"#000000","position":"bottom","rejectButtonColor":"#FF5500","rejectButtonDisplay":true,"showPurposesToggles":true,"textColor":"#000000" }};
    </script> -->
    <script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
    ';
  }

	function AggiungiGestioneMetaDati(){
    echo '
    <!-- Other meta tags of the page -->
    <meta name="description" content="Pagina dei termini e delle condizioni dell\'evento neopagano Anima Pagana, che si terrà il 4 Maggio 2024 presso Il Nemeton di Cavaria con Premezzo (VA)">
    <meta name="keywords" content="Anima Pagana, neopaganesimo, Wicca, Neodruidismo, Candomblè, Sciamanesimo">
    <meta name="author" content="Totaro Christian">
    <meta property="og:title" content="Anima Pagana" />
    <meta property="og:description" content="Pagina dei termini e delle condizioni dell\'evento neopagano Anima Pagana, che si terrà il 4 Maggio 2024 presso Il Nemeton di Cavaria con Premezzo (VA)" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="it_IT" />
    <meta property="og:url" content="https://www.animapagana.it/" />
    <meta property="og:image" content="https://www.animapagana.it/assets/img/logo/logo_gradient.jpg" />
    <meta property="og:image:secure_url" content="https://www.animapagana.it/assets/img/logo/logo_gradient.jpg" />
    <meta property="og:image:alt" content="Logo di Anima Pagana"/>
    <meta name="google" value="notranslate">
    ';
  }

  function CreaTitolo(){
    echo "<h2 class='mt-4 pt-4 text-center text-lg-start'>Termini e Condizioni di <strong>".BASE_URL_CUSTOM."</strong></h2>";
  }

  function CreaSezioneIntroduttiva(){
    echo "
    <div class='col-12 col-md-8 col-lg-6 p-4 my-4'>
      <p>Questi Termini disciplinano in maniera vincolante:
        <ul>
          <li>l'utilizzo di ".BASE_URL_CUSTOM."</li>
          <li>qualsiasi altro Accordo o rapporto giuridico con il Titolare</li>
        </ul>
      </p>
      <p>Le espressioni con l'iniziale maiuscola sono definite nella relativa sezione di questo documento.</p>
      <p><strong>L'Utente è pregato di leggere attentamente questo documento.</strong></p>
      <hr>
      <p>Il soggetto responsabile di ".BASE_URL_CUSTOM." è:</p>
      <p>".RESPONSABILE_NOME."</p>
      <p class='mb-4'><strong>Indirizzo email del responsabile</strong>: ".RESPONSABILE_EMAIL."</p>
      <p class='pt-3'>
        <h4 class='mb-4'>Da sapere a colpo d'occhio</h4>
        <ul>
          <li>Si fa presente che determinate disposizioni di questi Termini potrebbero essere solo applicabili ad alcune categorie di Utenti. In particolare, alcune disposizioni potrebbero applicarsi solo a Consumatori o solo a Utenti che non agiscono come Consumatori. Tali limitazioni sono sempre menzionate esplicitamente in ciascuna clausola interessata. In caso di mancata menzione, le clausole si applicano a tutti gli Utenti.</li>
        </ul>
      </p>
      <hr>
    </div>";
  }

  function CreaSezioneCondizioniUso(){
    echo "
    <div class='col-12 col-md-8 col-lg-6 px-4'>
      <h3 class='text-uppercase pb-4'>Condizioni d'uso</h3>
      <p>Salvo ove diversamente specificato, le condizioni d'uso di ".BASE_URL_CUSTOM." esposte in questa sezione hanno validità generale.</p>
      <p>Ulteriori condizioni d'uso o d'accesso applicabili in particolari situazioni sono espressamente indicate in questo documento.</p>
      <p>Utilizzando ".BASE_URL_CUSTOM." l'Utente dichiara di soddisfare i seguenti requisiti:
        <ul><li>Non ci sono restrizioni riferite agli Utenti rispetto al fatto che essi siano Consumatori o Utenti Professionisti;</li></ul>
      </p>";
      CreaParagrafoContenuti();
      CreaParagrafoAccessoRisorseEsterne();
      CreaParagrafoUsoAmmesso();
    echo "</div>";
  }

  function CreaParagrafoContenuti(){
    echo "
      <div class='py-4'>
        <h4 class='pt-3'>Contenuti su ".BASE_URL_CUSTOM."</h4>
        <div class='pb-4'>
          <p>Salvo ove diversamente specificato o chiaramente riconoscibile, tutti i contenuti disponibili su ".BASE_URL_CUSTOM." sono di proprietà di o forniti dal Titolare o dei/dai suoi licenzianti.</p>
          <p>Il Titolare adotta la massima cura affinché il contenuto disponibile su ".BASE_URL_CUSTOM." non violi la normativa applicabile o diritti di terze parti. Tuttavia, non sempre è possibile raggiungere tale risultato.</p>
          <p>In tali casi, senza alcun pregiudizio ai diritti ed alle pretese legalmente esercitabili, gli Utenti sono pregati di indirizzare i relativi reclami ai recapiti specificati in questo documento.</p>
        </div>
        <h5>Diritti sui contenuti di ".BASE_URL_CUSTOM."</h5>
        <div>
          <p>Il Titolare detiene e si riserva espressamente ogni diritto di proprietà intellettuale sui suddetti contenuti.</p>
          <p>Gli Utenti non sono autorizzati ad usare i contenuti in alcun modo che non sia necessario od implicito nel corretto utilizzo del Servizio.</p>
          <p>In particolare, ma senza esclusioni, è fatto divieto agli Utenti di copiare, scaricare, condividere oltre i limiti sotto specificati, modificare, tradurre, elaborare, pubblicare, trasmettere, vendere, concedere sottolicenze, trasformare, trasferire/alienare a terze parti o creare opere derivate a partire dal contenuto disponibile su ".BASE_URL_CUSTOM.", di permettere a terze parti di intraprendere tali attività tramite il proprio account Utente o dispositivo, anche a propria insaputa.</p>
          <p>Ove espressamente indicato su ".BASE_URL_CUSTOM.", l'Utente è autorizzato a scaricare, copiare e/o condividere determinati contenuti disponibili su ".BASE_URL_CUSTOM." esclusivamente per scopi personali e non commerciali ed a condizione che sia osservata l'attribuzione della paternità dell'opera nonché l'indicazione di ogni altra circostanza rilevante richiesta dal Titolare.</p>
          <p>Restano ferme le limitazioni ed esclusioni previste dalla normativa sul diritto d'autore.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoAccessoRisorseEsterne(){
    echo "
      <div class='py-4'>
        <h4>Accesso a risorse esterne</h4>
        <div>
          <p>Tramite ".BASE_URL_CUSTOM." gli Utenti potrebbero avere accesso a risorse fornite da terzi. Gli Utenti riconoscono ed accettano che il Titolare non ha alcun controllo su tali risorse e che pertanto non risponde del loro contenuto e della loro disponibilità.</p>
          <p>Le condizioni applicabili alle risorse fornite da terzi, ivi incluse quelle applicabili a eventuali concessioni di diritti su contenuti, sono determinate dagli stessi terzi e regolate nei relativi termini e condizioni o, in loro assenza, dalla legge.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoUsoAmmesso(){
    echo "
      <div class='py-4'>
        <h4>Uso ammesso</h4>
        <div>
          <p><span class='text-capitalize'>".BASE_URL_CUSTOM."</span> ed il Servizio possono essere utilizzati solo per gli scopi per i quali sono offerti, secondo questi Termini ed ai sensi della legge applicabile.</p>
          <p>È responsabilità esclusiva dell'Utente di far sì che l'uso di ".BASE_URL_CUSTOM." e/o del Servizio non violi la legge, i regolamenti o i diritti di terzi.</p>
          <p>Pertanto, il Titolare si riserva il diritto di adottare ogni misura idonea a proteggere i propri interessi legittimi, ed in particolare di negare all'Utente l'accesso a ".BASE_URL_CUSTOM." o al Servizio, risolvere contratti, denunciare ogni attività censurabile svolta tramite ".BASE_URL_CUSTOM." o il Servizio alle autorità competenti - p. es. l'autorità giudiziaria o amministrativa - ogniqualvolta l'Utente ponga in essere o vi sia il sospetto che ponga in essere:
            <ul>
              <li>violazioni di legge, regolamenti e/o dei Termini;</li>
              <li>lesioni di diritti di terzi;</li>
              <li>atti che possono pregiudicare considerevolmente i legittimi interessi del Titolare;</li>
              <li>offese al Titolare o a un terzo.</li>
            </ul>
          </p>
        </div>
      </div>
    ";
  }

  function CreaSezioneLimitazioniResponsabilitaManleva(){
    echo "
    <div class='col-12 col-md-8 col-lg-6 px-4'>
      <h3 class='pb-4'>Limitazione di responsabilità e manleva</h3>";
      CreaParagrafoLimitazioniUtentiEuropei();
      CreaParagrafoLimitazioniUtentiAustraliani();
      CreaParaggrafoLimitazioniUtentiUSA();
    echo "</div>";
  }

  function CreaParagrafoLimitazioniUtentiEuropei(){
    echo "
      <div class='py-4'>
        <h4>Utenti Europei</h4>
        <div class='pt-4'>
          <h5>Manleva</h5>
          <p>L'Utente si impegna a manlevare e tenere indenne il Titolare e i suoi sottoposti, affiliati, funzionari, agenti, contitolari del marchio, partner e dipendenti da qualsivoglia rivendicazione o pretesa - compresi, senza alcuna limitazione, oneri e spese legali - avanzata da terzi a causa di o in collegamento con comportamenti colposi quali l'utilizzo o la connessione al servizio, la violazione dei presenti Termini, la violazione di diritti di terze parti o di leggi da parte dell'Utente, dei suoi affiliati, funzionari, agenti, contitolari del marchio, partner e dipendenti, nella misura di legge.</p>
        </div>
        <div class='pt-4'>
          <h5>Limitazione della responsabilità per le attività dell'Utente su ".BASE_URL_CUSTOM."</h5>
          <p>Salvo ove diversamente specificato e fatte salve le disposizioni di legge applicabili in materia di responsabilità per danno da prodotto, è esclusa ogni pretesa risarcitoria nei confronti del Titolare (o di qualsiasi persona fisica o giuridica che agisca per suo conto).</p>
          <p>Quanto precede non limita la responsabilità del Titolare per morte, danno alla persona o all'integrità fisica o mentale, danni derivanti dalla violazione di obblighi contrattuali essenziali, quali gli obblighi strettamente necessari al raggiungimento della causa del contratto, e/o ai danni provocati con dolo o colpa grave, a condizione che l'utilizzo di ".BASE_URL_CUSTOM." da parte dell'Utente sia stato idoneo e corretto.</p>
          <p>Salvo che i danni siano stati causati con dolo o colpa grave o incidano sulla vita e/o l'integrità personale, fisica o mentale, il Titolare risponde solo nella misura del danno tipico per il tipo di contratto e prevedibile al momento della conclusione.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoLimitazioniUtentiAustraliani(){
    echo "
      <div class='py-4'>
        <h4>Utenti Australiani</h4>
        <div class='pt-4'>
          <h5>Limitazione della responsabilità</h5>
          <p>Nessuna disposizione di questi Termini esclude, limita o modifica alcuna garanzia, condizione, manleva, diritto o tutela che l'Utente possa avere ai sensi del Competition and Consumer Act 2010 (Cth) o di altre simili legislazioni statali e territoriali e che costituisca un diritto che non può in alcun modo essere escluso, limitato o modificato (diritto non escludibile). Nei limiti massimi consentiti dalla legge, la nostra responsabilità nei confronti dell'Utente, inclusa la responsabilità per la violazione di un diritto non escludibile e ogni altra responsabilità non altrimenti esclusa ai sensi di questi Termini e Condizioni, è limitata, a discrezione del Titolare, ad una nuova fornitura dei servizi o al pagamento del costo per la ripetizione della loro fornitura.</p>
        </div>
      </div>
    ";
  }

  function CreaParaggrafoLimitazioniUtentiUSA(){
    echo "
      <div class='py-4'>
        <h4>Utenti USA</h4>
        <div class='pt-4 fw-bold'>
          <h5>Esclusione di garanzia</h5>
          <p>Il Titolare fornisce ".BASE_URL_CUSTOM." \"così com'è\" e secondo disponibilità. L'utilizzo del Servizio è a rischio e pericolo dell'Utente. Nei limiti massimi consentiti dalla legge, il Titolare esclude espressamente le condizioni, pattuizioni e garanzie di qualsiasi tipo - siano esse espresse, implicite, statuarie o di altro tipo, comprese, a titolo esemplificativo ma non esaustivo, eventuali garanzie implicite di commerciabilità, di idoneità per un fine particolare o di non-violazione dei diritti di terzi. Nessuna consulenza o informazione, sia essa orale o scritta, che l'Utente abbia ottenuto dal Titolare o tramite il Servizio creerà garanzie non espressamente previste nel presente documento</p>
          <p>Fermo restando quanto sopra, il Titolare e i suoi sottoposti, affiliati, funzionari, agenti, contitolari del marchio, partner, fornitori e dipendenti non garantiscono che il contenuto sia accurato, affidabile o corretto; che il Servizio sarà disponibile, in maniera ininterrotta e sicura, in qualsiasi momento o luogo particolare; che eventuali difetti o errori saranno corretti; o che il Servizio sia privo di virus o altri componenti dannosi. Qualsiasi contenuto scaricato o altrimenti ottenuto tramite l'utilizzo del Servizio è scaricato a rischio e pericolo dell'Utente e l'Utente è l'unico responsabile per qualsiasi danno al sistema informatico o al dispositivo mobile o per la perdita di dati risultante da tale operazione o dall'uso del Servizio da parte dell'Utente.</p>
          <p>Il Titolare non garantisce, approva, assicura o si assume la responsabilità per nessun prodotto o servizio pubblicizzato o offerto da parti terze attraverso il Servizio né nessun sito web o servizio collegato tramite hyperlink. Inoltre il Titolare non prende parte né in alcun modo monitora nessuna transazione tra Utenti e fornitori terzi di prodotti o servizi.</p>
          <p>Il Servizio potrebbe diventare inaccessibile o non funzionare correttamente con il browser, dispositivo e/o sistema operativo dell'Utente. Il Titolare non può essere ritenuto responsabile per nessun danno, sia esso percepito o effettivo, derivante dal contenuto, funzionamento o utilizzo del Servizio.</p>
          <p>Leggi federali, alcuni stati e altre giurisdizioni non consentono l'esclusione e la limitazione di determinate garanzie implicite. Le esclusioni di cui sopra potrebbero non applicarsi agli Utenti. Questo Accordo conferisce agli Utenti diritti legali particolari. Gli Utenti potrebbero godere di diritti ulteriori che variano da stato a stato. Le limitazioni ed esclusioni previste da questo Accordo si applicano nei limiti previsti dalla legge.</p>
        </div>
        <div class='pt-4 fw-bold'>
          <h5>Limitazione delle responsabilità</h5>
          <p>Nei limiti massimi consentiti dalla legge applicabile, in nessun caso il Titolare e i suoi sottoposti, affiliati, funzionari, agenti, contitolari del marchio, partner, fornitori e dipendenti potranno essere ritenuti responsabili per
            <ul>
              <li>qualsiasi danno indiretto, intenzionale, collaterale, particolare, consequenziale o esemplare, inclusi, a titolo esemplificativo ma non esaustivo, danni derivanti dalla perdita di profitti, di avviamento, d'uso, di dati o altre perdite immateriali, derivanti da o relativi all'uso, o all'impossibilità di usare il Servizio; e</li>
              <li>qualsiasi danno, perdita o lesione risultante da hackeraggio, manomissione o da altro acceso o uso non autorizzato del Servizio o dell'account Utente o delle informazioni in esso contenute;</li>
              <li>qualsiasi errore, mancanza o imprecisione nei contenuti;</li>
              <li>lesioni personali o danni materiali, di qualsiasi natura, derivanti dall'accesso o dall'utilizzo del Servizio da parte dell'Utente;</li>
              <li>qualsiasi acceso non autorizzato ai server di sicurezza del Titolare e/o a qualsivoglia informazione personale ivi memorizzata</li>
              <li>qualsiasi interruzione o cessazione delle trasmissioni da o verso il Servizio;</li>
              <li>qualsiasi bug, virus, trojan o simili che possono essere trasmessi al o tramite il Servizio;</li>
              <li>qualsiasi errore o omissione in qualsiasi contenuto o per qualsiasi perdita o danno subiti a seguito dell'uso di qualsiasi contenuto pubblicato, inviato via email, trasmesso o altrimenti reso disponibile attraverso il Servizio; e/o</li>
              <li>la condotta diffamatoria, offensiva o illegale di qualsiasi Utente o di terzi. In nessun caso il Titolare e i suoi sottoposti, affiliati, funzionari, agenti, contitolari del marchio, partner, fornitori e dipendenti potranno essere ritenuti responsabili per qualsiasi richiesta di risarcimento, procedimento, responsabilità, obbligo, danno, perdita o costo per un importo superiore a quello pagato dall'Utente al Titolare nel corso dei 12 mesi precedenti, o per il periodo di durata di questo Accordo tra il Titolare e l'Utente, a seconda di quale dei due è più breve.</li>
            </ul>
          </p>
          <p>Questa sezione sulla limitazione di responsabilità si applica nei limiti massimi consentiti dalla legge nella giurisdizione applicabile, indipendentemente dal fatto che la presunta responsabilità derivi da contratto, atto illecito, negligenza, responsabilità oggettiva o da qualsiasi altro fondamento, anche se il Titolare era stato avvisato della possibilità del verificarsi di tale danno. Alcune giurisdizioni non consentono l'esclusione o la limitazione dei danni collaterali e consequenziali, pertanto le limitazioni o esclusioni di cui sopra potrebbero non applicarsi all'Utente. Questi Termini conferiscono all'Utente diritti legali specifici e l'Utente potrebbe godere di altri diritti che variano da giurisdizione a giurisdizione. Le deroghe, esclusioni o limitazioni di responsabilità previste da questi Termini non si applicano oltre i limiti previsti dalla legge applicabile.</p>
        </div>
        <div class='pt-4 fw-bold'>
          <h5>Manleva</h5>
          <p>L'Utente si impegna a difendere, manlevare e tenere indenne il Titolare e i suoi sottoposti, affiliati, funzionari, agenti, contitolari del marchio, partner, fornitori e dipendenti da e contro qualsivoglia rivendicazione o pretesa, danno, obbligazione, perdita, responsabilità, onere o debito e spesa, compresi, senza alcuna limitazione, oneri e spese legali derivanti da
            <ul>
              <li>l'uso o l'accesso al Servizio da parte dell'Utente, compresi gli eventuali dati o contenuti trasmessi o ricevuti dall'Utente;</li>
              <li>la violazione di questi Termini da parte dell'Utente, comprese, a titolo esemplificativo ma non esaustivo, eventuali violazioni da parte dell'Utente di qualsivoglia dichiarazione o garanzia prevista da questi Termini;</li>
              <li>la violazione da parte dell'Utente di qualsiasi diritto di terzi, compreso, ma non limitato a, qualsiasi diritto relativo alla privacy o alla proprietà intellettuale;</li>
              <li>la violazione da parte dell'Utente di qualsiasi legge, norma o regolamento vigente</li>
              <li>qualsiasi contenuto inviato dall'account dell'Utente, incluse, a titolo esemplificativo ma non esaustivo, informazioni fuorvianti, false o imprecise e compreso anche il caso in cui l'accesso venga effettuato da terzi con username e password personali dell'Utente o altre misure di sicurezza, se presenti;</li>
              <li>la condotta dolosa dell'Utente; o</li>
              <li>la violazione di qualsivoglia disposizione legale da parte dell'Utente o dei suoi affiliati, funzionari, agenti, contitolari del marchio, partner, fornitori e dipendenti, nei limiti consentiti dalla legge applicabile</li>
            </ul>
          </p>
        </div>
      </div>
    ";
  }

  function CreaSezioneDisposizioniComuni(){
    echo "
    <div class='col-12 col-md-8 col-lg-6 px-4'>
      <h3 class='pb-4'>Disposizioni comuni</h3>";
      CreaParagrafoNessunaRinunciaImplicita();
      CreaParagrafoInterruzioneServizio();
      CreaParagrafoRivenditaServizio();
      CreaParagrafoPrivacyPolicy();
      CreaParagrafoProprietaIntellettuale();
      CreaParagrafoModificcheTermini();
      CreaParagrafoCessioneContratto();
      CreaParagrafoContatti();
      CreaParagrafoClausolaSalvaguardia();
      CreaParagrafoLeggeApplicabile();
      CreaParagrafoForoCompetente();
    echo "</div>";
  }

  function CreaParagrafoNessunaRinunciaImplicita(){
    echo "
      <div class='py-3'>
        <h4>Nessuna rinuncia implicita</h4>
        <div class='pt-3'>
          <p>Il mancato esercizio di diritti di legge o pretese derivanti da questi Termini da parte del Titolare non costituisce rinuncia agli stessi. Nessuna rinuncia può essere considerata definitiva in relazione ad uno specifico diritto o a qualsiasi altro diritto.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoInterruzioneServizio(){
    echo "
      <div class='py-3'>
        <h4>Interruzione del Servizio</h4>
        <div class='pt-3'>
          <p>Per garantire il miglior livello di servizio possibile, il Titolare si riserva di interrompere il Servizio per finalità di manutenzione, aggiornamenti di sistema o per qualsiasi altra modifica, dandone idonea notizia agli Utenti.</p>
          <p>Nei limiti di legge, il Titolare si riserva di sospendere o terminare completamente il Servizio. In caso di terminazione del Servizio, il Titolare si adopererà affinché gli Utenti possano estrarre i propri Dati Personali e le informazioni secondo le disposizioni di legge.</p>
          <p>Inoltre, il Servizio potrebbe non essere disponibile per cause che si sottraggono al ragionevole controllo del Titolare, quali cause di forza maggiore (p. es. scioperi, malfunzionamenti infrastrutturali, blackout etc.).</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoRivenditaServizio(){
    echo "
      <div class='py-3'>
        <h4>Rivendita del Servizio</h4>
        <div class='pt-3'>
          <p>Gli Utenti non sono autorizzati a riprodurre, duplicare, copiare, vendere, rivendere o sfruttare ".BASE_URL_CUSTOM." o il Servizio in toto o in parte senza previo consenso scritto del Titolare, espresso direttamente o attraverso un legittimo programma di rivendite.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoPrivacyPolicy(){
    echo "
      <div class='py-3'>
        <h4>Privacy policy</h4>
        <div class='pt-3'>
          <p>Le informazioni sul trattamento dei Dati Personali sono contenute nella privacy policy di ".BASE_URL_CUSTOM.".</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoProprietaIntellettuale(){
    echo "
      <div class='py-3'>
        <h4>Proprietà intellettuale</h4>
        <div class='pt-3'>
          <p>Senza pregiudizio ad alcuna previsione più specifica contenuta nei Termini, i diritti di proprietà intellettuale ed industriale, quali ad esempio diritti d'autore, marchi, brevetti e modelli relativi a ".BASE_URL_CUSTOM." sono detenuti in via esclusiva dal Titolare o dai suoi licenzianti e sono tutelati ai sensi della normativa e dei trattati internazionali applicabili alla proprietà intellettuale.</p>
          <p>Tutti i marchi - denominativi o figurativi - ed ogni altro segno distintivo, ditta, marchio di servizio, illustrazione, immagine o logo che appaiono in collegamento con ".BASE_URL_CUSTOM." sono e restano di esclusiva proprietà del Titolare o dei suoi licenzianti e sono tutelati ai sensi della normativa e dei trattati internazionali applicabili alla proprietà intellettuale.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoModificcheTermini(){
    echo "
      <div class='py-3'>
        <h4>Modifiche dei Termini</h4>
        <div class='pt-3'>
          <p>Il Titolare si riserva il diritto di modificare i Termini in ogni momento. In tal caso, il Titolare darà opportuna notizia delle modifiche agli Utenti.</p>
          <p>Le modifiche avranno effetti sul rapporto con l'Utente solo per il futuro.</p>
          <p>L'utilizzo continuato del Servizio implica l'accettazione dell'Utente dei Termini aggiornati. Se l'Utente non desidera accettare le modifiche, deve cessare l'utilizzo del Servizio. La mancata accettazione dei Termini aggiornati potrebbe comportare la facoltà di ciascuna parte di recedere dall'Accordo.</p>
          <p>La versione precedente applicabile continua a disciplinare il rapporto fino all'accettazione dell'Utente. Tale versione può essere richiesta al Titolare.</p>
          <p>Se richiesto dalla legge applicabile, il Titolare specificherà la data entro cui le modifiche ai Termini entreranno in vigore.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoCessioneContratto(){
    echo "
      <div class='py-3'>
        <h4>Cessione del contratto</h4>
        <div class='pt-3'>
          <p>Il Titolare si riserva il diritto di trasferire, cedere, disporre di, novare o appaltare singoli o tutti i diritti e le obbligazioni secondo questi Termini, avendo riguardo per gli interessi legittimi degli Utenti.</p>
          <p>Si applicano le disposizioni relative alla modifica di questi Termini.</p>
          <p>L'Utente non è autorizzato a cedere o trasferire i propri diritti e le proprie obbligazioni secondo i Termini senza il consenso scritto del Titolare.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoContatti(){
    echo "
      <div class='py-3'>
        <h4>Contatti</h4>
        <div class='pt-3'>
          <p>Tutte le comunicazioni inerenti all'uso di ".BASE_URL_CUSTOM." devono essere inviate ai recapiti indicati in questo documento.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoClausolaSalvaguardia(){
    echo "
      <div class='py-3'>
        <h4>Clausola di salvaguardia</h4>
        <div class='pt-3'>
          <p>Qualora alcuna delle disposizioni di questi Termini dovesse essere o divenire nulla o inefficace ai sensi della legge applicabile, la nullità o inefficacia di tale disposizione non provoca inefficacia delle restanti previsioni, che permangono pertanto valide ed efficaci.</p>
        </div>
        <div class='pt-2'>
          <h5>Utenti USA</h5>
          <p>Qualsiasi disposizione invalida o inefficace sarà interpretata ed adattata nei limiti necessari per renderla valida, efficace e conforme alla finalità originaria.
          Questi Termini costituiscono l'intero accordo tra Utente e Titolare con riferimento all'oggetto regolato e prevalgono su ogni altra comunicazione, compresi eventuali accordi precedenti, tra le parti in merito all'oggetto regolato.
          Questi Termini saranno attuati nella più ampia misura consentita dalla legge.</p>
        </div>
        <div class='pt-2'>
          <h5>Utenti Europei</h5>
          <p>Qualora una disposizione di questi Termini dovesse essere o divenire nulla, invalida o inefficace, le parti si adopereranno per individuare in via amichevole una disposizione valida ed efficace sostitutiva di quella nulla, invalida o inefficace.
          In caso di mancato accordo nei termini predetti, se permesso o previsto dalla legge applicabile, la disposizione nulla, invalida o inefficace sarà sostituita dalla disciplina legale applicabile.</p>
          <p>Fermo restando quanto sopra, la nullità, invalidità o inefficacia di una specifica disposizione di questi Termini non comporta nullità dell'intero Accordo, a meno che le disposizioni nulle, invalidi o inefficaci nel quadro dell'Accordo siano essenziali o di tale importanza, che le parti non avrebbero concluso il contratto se avessero saputo che la disposizione sarebbe stata invalida, ovvero in casi in cui le disposizioni residue comporterebbero un onere eccessivo ed inaccettabile per una delle parti.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoLeggeApplicabile(){
    echo "
      <div class='py-3'>
        <h4>Legge applicabile</h4>
        <div class='pt-3'>
          <p>I Termini sono disciplinati dalla legge del luogo in cui è stabilito il Titolare, così come indicato nella relativa sezione di questo documento a prescindere dalle norme di conflitto.</p>
        </div>
        <div class='pt-2'>
          <h5>Eccezione per Consumatori Europei</h5>
          <p>Tuttavia, a prescindere da quanto precede, se l'Utente agisce come Consumatore Europeo ed ha residenza abituale in un paese la cui legge prevede un livello di tutela dei consumatori superiore, prevale tale superiore livello di tutela.</p>
        </div>
      </div>
    ";
  }

  function CreaParagrafoForoCompetente(){
    echo "
      <div class='py-3'>
        <h4>Foro competente</h4>
        <div class='pt-3'>
          <p>La competenza esclusiva a conoscere qualsiasi controversia derivante da o in collegamento con i Termini spetta al giudice del luogo in cui il Titolare è stabilito, così come indicato nella relativa sezione di questo documento.</p>
        </div>
        <div class='pt-2'>
          <h5>Eccezione per Consumatori Europei</h5>
          <p>Quanto precede non si applica a Utenti che agiscono come Consumatori Europei o Consumatori situati in Svizzera, Norvegia o Islanda.</p>
        </div>
      </div>
    ";
  }

  function CreaSezioneDefinizioniRiferimentiLegali(){
    echo '
    <div class="col-12 col-md-8 col-lg-6 px-4">
      <hr>
      <div class="accordion my-4" id="accordionDefinizioniRiferimentiLegali">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDefinizioniRiferimentiLegali" aria-expanded="false" aria-controls="collapseDefinizioniRiferimentiLegali">
            <b>Definizioni e riferimenti legali</b>
            </button>
          </h2>
          <div id="collapseDefinizioniRiferimentiLegali" class="accordion-collapse collapse">
            <div class="accordion-body">
              <div class="pt-4">
                <h6 class="text-capitalize">'.BASE_URL_CUSTOM.' (o questa Applicazione)</h6>
                <p>La struttura che consente la fornitura del Servizio.</p>
              </div>
              <div class="pt-4">
                <h6 class="text-capitalize">Accordo</h6>
                <p>Qualsiasi rapporto legalmente vincolante o contrattuale tra il Titolare e l\'Utente disciplinato dai Termini.</p>
              </div>
              <div class="pt-4">
                <h6 class="text-capitalize">Utente Commerciale</h6>
                <p>Qualsiasi Utente che non corrisponde alla definizione di Consumatore.</p>
              </div>
              <div class="pt-4">
                <h6 class="text-capitalize">Europeo (o Europa)</h6>
                <p>Definisce un Utente fisicamente presente o con sede legale nell\'Unione Europea, a prescindere dalla nazionalità.</p>
              </div>
              <div class="pt-4">
                <h6 class="text-capitalize">Titolare (o Noi)</h6>
                <p>Indica la persona fisica o giuridica che fornisce '.BASE_URL_CUSTOM.' e/o offre il Servizio agli Utenti.</p>
              </div>
              <div class="pt-4">
                <h6 class="text-capitalize">Servizio</h6>
                <p>Il servizio offerto tramite '.BASE_URL_CUSTOM.' così come descritto nei Termini e su '.BASE_URL_CUSTOM.'.</p>
              </div>
              <div class="pt-4">
                <h6 class="text-capitalize">Termini</h6>
                <p>Tutte le condizioni applicabili all\'utilizzo di '.BASE_URL_CUSTOM.' e/o alla fornitura del Servizio così come descritti in questo documento nonché in qualsiasi altro documento o accordo ad esso collegato, nella versione rispettivamente più aggiornata.</p>
              </div>
              <div class="pt-4">
                <h6 class="text-capitalize">Utente (o Tu)</h6>
                <p>Indica qualsiasi persona fisica che utilizzi '.BASE_URL_CUSTOM.'.</p>
              </div>
              <div class="pt-4">
                <h6 class="text-capitalize">Consumatore</h6>
                <p>Qualsiasi persona fisica che, in qualità di Utente, utilizza beni o servizi per scopi personali e, in generale, agisce per scopi estranei alla propria attività imprenditoriale, commerciale, artigianale o professionale.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>';
  }

  function CreaSezioneUltimoAggiornamento(){
    echo "<div class='col-12 col-md-8 col-lg-6 px-4'>
            <div class='pt-2 pb-4 mb-4 text-start'>
              <p>Ultimo aggiornamento: 9 aprile 2024</p>
            </div>
          </div>";
  }