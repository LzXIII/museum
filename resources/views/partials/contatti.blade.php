      <form class="callus" method="post" action="/contatti/invia">
{{csrf_field()}}
<div class="row">
    <div class="col-md-12">
        <div id="result" class="text-center form-group"></div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" type="text" name="f_name" id="f_name" placeholder="Nome"
            />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" type="text" name="l_name" id="l_name"
                   placeholder="Cognome"/>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" type="email" name="email" id="email" placeholder="Email"
            />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" type="text" name="phone" id="phone"
                   placeholder="Telefono">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <textarea placeholder="Messaggio" name="message" id="message"></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="checkbox-inline">
                Ho preso visione <a href="/cookie-law"target="_blank"class="color">l'Informativa sulla Privacy</a>.

            </label>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
           <div class="g-recaptcha" data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}" ></div>

        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <div class="btn-submit button3">
                <input type="submit" value=" Invia">
            </div>
        </div>
    </div>
</div>
</form>

            </div>
            <div class="col-md-4 col-sm-4 bistro">
                <h2 class="heading">Contatti</h2>
                <hr class="heading_space">
                <p><strong>Telefono:</strong><br> +39 0884 541995
                    <br> +39 3400852706</p>                    <p><strong>Indirizzo:</strong><br> Via Antonio Meucci <br>(Zona
                    industriale D46, S.S. 89, Km
                    173,610)<br>
                    c/o La Cittadella della Sicurezza <br>
                    (nuova sede Euroambiente SRL)<br>
                    71043, Manfredonia (FG)
                </p>
                <ul class="social_icon">
                    <li class="black"><a
                            href="https://www.facebook.com/museodeipompieri/"
                            class="facebook"><i
                                class="icon-facebook5"></i></a></li>
                    <li class="black"><a href="https://www.instagram.com/museodeipompieriecrocerossa/" class="google"><i
                                class="icon-instagram2"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
</section>
