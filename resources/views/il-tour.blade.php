@extends ('template.main')
@section ('header')
  <!--Page header & Title-->
     <section id="page_header">
         <div class="page_title">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <h2 class="title">Il Tour</h2>
                         <p>Un percorso denso di memoria e ricco di testimonianze uniche </p>
                     </div>
                 </div>
             </div>
         </div>
     </section>
@endsection
@section ('body')

  <section id="first" class="padding">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h2 class="heading">Benvenuti nel Museo</h2>
                      <hr class="heading_space">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-7 col-sm-6">
                      <p class="half_space">
                           Il Museo si apre con un’ampia e suggestiva esposizione di ben <b>80 uniformi</b> dei Pompieri e
                          della
                          Croce Rossa Italiana, che risalgono alla prima metà dell’800 fino alla fine del ‘900.<br><br>
                          Lungo tutto il percorso potrai ammirare ogni genere di reperti, medaglie, pubblicazioni, mezzi e
                          attrezzature, moltissimi dei quali <b>unici al mondo</b>, appartenuti ai Pompieri e alla Croce
                          Rossa
                          Italiana nelle varie epoche storiche. Tutto questo all’interno di uno spettacolare allestimento
                          che ti circonda, ti cattura e ti immerge nella storia di questi gloriosi Corpi che per anni
                          hanno salvato innumerevoli vite.<br><br>
                          Il Museo si compone di <b>quattro diversi padiglioni</b>, ciascuno dedicato ad un pezzo di
                          storia dei
                          Pompieri e della Croce Rossa Italiana. Ogni padiglione è stato progettato e curato nei minimi
                          dettagli da Michele Guerra e sapientemente ricostruito dall’artigiano Sipontino Maestro d’ascia
                          Antonio Berardinetti.<br><br>
                          L’atmosfera che è stata così ricreata per ogni singolo ambiente è davvero incantevole, tanto da
                          lasciare tutti estasiati! Proviamo a scoprire insieme un po’ di questa magia…


                      </p>
                  </div>
                  <div class="col-md-5 col-sm-6">
                      <img class="img-responsive" src="/image/tour/benvenuti.jpg">
                  </div>
              </div>
          </div>
      </section>
      <!-- Our cheffs -->
      <section id="cheffs" class="padding">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <h2 class="heading">  Alla scoperta del Museo</h2>
                      <hr class="heading_space">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="cheffs_wrap_slider">
                          <div id="our-cheffs" class="owl-carousel">
                              <div class="item">
                                  <div class="cheffs_wrap">
                                      <img src="/image/padiglioni/san lorenzo.jpg" alt="Kitchen Staff">
                                      <h3>San Lorenzo Martire</h3>
                                      <small>1° padiglione</small>
                                      <p>Il primo piazzale è dedicato a San Lorenzo martire, primo santo protettore dei
                                          pompieri. Qui potrai immergerti letteralmente nella storia dei Pompieri. È
                                          esposta, infatti, la più ricca e straordinaria raccolta di notificazioni,
                                          regolamenti, libri, stampe, cataloghi, incisioni, foto, cartoline,
                                          illustrazioni, diplomi, ecc. che ha consentito di ricostruire nei minimi
                                          dettagli la storia del glorioso Corpo dei Pompieri. </p>
                                  </div>
                              </div>
                              <div class="item">
                                  <div class="cheffs_wrap">
                                      <img src="/image/padiglioni/sant-antonio abate.jpg" alt="Kitchen Staff">
                                      <h3>Sant’Antonio Abate</h3>
                                      <small>2° padiglione</small>
                                      <p>Il secondo padiglione è dedicato a Sant’Antonio Abate, protettore di quanti
                                          lavorano con il fuoco e, dunque, anche dei pompieri. Il carro lettiga e lettighe
                                          di varie epoche, l’ambulanza ippotrainata, la bici soccorso, le uniformi: sono
                                          solo alcuni degli straordinari e preziosi cimeli che hanno fatto la storia della
                                          Croce Rossa Italiana e che potrai visionare in questo padiglione. </p>
                                  </div>
                              </div>
                              <div class="item">
                                  <div class="cheffs_wrap">
                                      <img src="/image/padiglioni/santa barbara.jpg" alt="Kitchen Staff">
                                      <h3>Santa Barbara</h3>
                                      <small>3° padiglione</small>
                                      <p>È dedicato a Santa Barbara il terzo padiglione, attuale protettrice dei pompieri.
                                          Qui sono esposte attrezzature, mezzi, uniformi e molti altri reperti che
                                          raccontano la storia dei Vigili del Fuoco aziendali ai quali si sono ispirati i
                                          più importanti corpi pompieristici del mondo. </p>
                                  </div>
                              </div>
                              <div class="item">
                                  <div class="cheffs_wrap">
                                      <img src="/image/padiglioni/San Floriano di Lorch.jpg" alt="Kitchen Staff">
                                      <h3>San Floriano di Lorch</h3>
                                      <small>4° padiglione</small>
                                      <p>L’ultimo padiglione è dedicato a San Floriano di Lorch, particolarmente venerato
                                          nei paesi del Nord-Est della nostra penisola ed invocato contro le inondazioni e
                                          gli incendi. Qui sono raccolti tutti i sistemi di salvamento aerei impiegati nel
                                          corso dei secoli, tra cui la rete di salvataggio, i teli circolari da salto,
                                          lenzuola e teli tubolari di salvataggio, la rampa di discesa dei pompieri, scale
                                          a corda ed a pioli, ecc.  </p>
                                  </div>
                              </div>
                              <div class="item">
                                  <div class="cheffs_wrap">
                                      <img src="/image/padiglioni/Centrale di allarme.jpg" alt="Kitchen Staff">
                                      <h3>La Centrale di Allarme</h3>
                                      <small>Magazzeno dei Pompieri</small>
                                      <p>Qui sono esposti i vari sistemi di allarme impiegati nel corso dei secoli. Dai
                                          più rudimentali come campane, tamburi, trombe, cornette, fischietti normali e
                                          bitonali, fino ai più “recenti” telefoni in legno e metallici, che venivano
                                          posizionati nei diversi quartieri e collegati direttamente al magazzeno del
                                          pompiere trombettista. </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section id="first" class="padding">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h2 class="heading">La lotta al fuoco nei secoli</h2>
                      <hr class="heading_space">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-7 col-sm-6">
                      <p class="half_space">
                           Ed eccoci in un’area che fa sognare ogni volta grandi e piccini. Si tratta di una magnifica
                          esposizione dei <b>mezzi antincendio manuali</b>, ippotrainati, motorizzati e dotati di apposita
                          attrezzatura: dalla famosa bici dei pompieri equipaggiata per il primo intervento alle scale
                          portatili, ippotrainate e motorizzate.<br><br>
                          Da qui sono stati ricostruiti nei minimi particolari i più <b>importanti eventi calamitosi</b>
                          che
                          hanno caratterizzato la nostra storia e quella dei pompieri, tra cui quelli verificatisi durante
                          il ventennio di attività del IV Centro Petrolchimico di Manfredonia, in particolare lo scoppio
                          della colonna di lavaggio dell’Ammoniaca del 1976 e l’incendio del magazzino del Caprolattame
                          del 1984.<br><br>
                          Tragici incidenti dei quali ancora oggi, nonostante siano trascorsi oltre quarant’anni, chi li
                          ha vissuti ne porta i segni. Come lo stesso Michele Guerra che all’epoca dei fatti era capo
                          servizio dei pompieri di stabilimento e, unitamente ai suoi colleghi ha compiuto un’<b>impresa
                              eroica</b> mettendo a repentaglio la propria vita nell’opera di spegnimento dell’incendio
                          del
                          deposito di caprolattame.


                      </p>
                  </div>
                  <div class="col-md-5 col-sm-6">
                      <img class="img-responsive" src="/image/tour/lotta-al-fuoco.jpg" alt="welcome bistro">
                  </div>
              </div>
          </div>
      </section>
      <section id="second" class="padding">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h2 class="heading">Spazio ludico-ricreativo per i bimbi</h2>
                      <hr class="heading_space">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-7 col-sm-6">
                      <p class="half_space">    Al termine di questo straordinario tour ricco di <b>fascino, storia e cultura</b>, i bambini
                          possono
                          dare libero sfogo al divertimento e diventare perfino dei “piccoli pompieri”.<br><br>
                          Lo spazio ludico a loro dedicato, infatti, non solo è attrezzato con diversi <b>giochi
                              ricreativi</b> e
                          playground gonfiabili, ma è adibito anche per coinvolgerli in prove di abilità, prove di
                          spegnimento fatte con lance idriche ed estintori su simulatori di fuoco, prove di evacuazione
                          dagli ambienti invasi dal fumo, ecc.<br><br>
                          Inoltre, potranno arricchire questa esperienza, già così unica, con la visione di due <b>cartoni
                              animati</b> ed una lezione tenuta dagli istruttori di Euroambiente sull’importanza della
                          prevenzione
                          e lotta agli incendi.<br><br>
                          A questo punto i bambini saranno davvero pronti per <b>diventare dei veri eroi</b> e ritirare il
                          loro
                          attestato del <em>“Piccolo Pompiere”!</em><br><br>
                          Ma prima di tornare a casa…. fermatevi ancora qualche minuto nella zona <em>Food & Beverage</em>
                          all’ingresso del Museo, per gustare una <b>squisita merenda</b> tutti insieme e condividere i
                          momenti
                          più belli del tour nel Museo storico dei Pompieri e della Croce Rossa Italiana.




                      </p>

                  </div>
                  <div class="col-md-5 col-sm-6">
                      <img class="img-responsive"  src="/image/tour/spazio-ludico-b.jpg" alt="welcome bistro">
                  </div>
              </div>
          </div>
      </section>
@include('partials.features')
@include('partials.gallery')
@endsection
