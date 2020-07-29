<div class="reveal requestmodal" id="strmodal" data-reveal data-animation-in="scale-in-down fast"
    data-animation-out="scale-out-up fast">
    <header class="mobilemodal__head">
        <figure style="max-width:8rem; text-align:right;">
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logo.svg" alt="">
        </figure>
        <h2>Zatražite ponudu</h2>
        <h3>Ponuda za kratkoročno iznajmljivanje vozila</h3>
    </header>
    <div class="mobilemodal__inner">
        <div id="successresult" class="successresult">
            <button class="button" data-close aria-label="Close modal" type="button">
                Zatvori prozor
            </button>
        </div>
        <form id="contact_form" class="contactform" action="<?= get_template_directory_uri(); ?>/lib/contact.php"
            method="post" data-abide novalidate>

            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12 text-center">
                        <div data-abide-error class="alert callout" style="display: none;">
                            <p style="font-size:1rem; font-weight: bold; color:#c10017">Greška u obrascu!</p>
                        </div>

                    </div>
                    <div class="cell small-12">
                        <label class="speci">Ime i prezime*
                            <input id="r_name" name="r_name" type="text" required>
                            <span class="form-error">
                                Obavezno polje!
                            </span>
                        </label>
                    </div>
                    <div class="cell small-12">
                        <label class="speci">E-mail*
                            <input id="r_email" name="r_email" type="email" required>
                            <span class="form-error">
                                Obavezno polje!
                            </span>
                        </label>
                    </div>
                    <div class="cell small-12">
                        <label class="speci">Telefon*
                            <input id="r_tel" name="r_tel" type="text" required>
                            <span class="form-error">
                                Obavezno polje!
                            </span>
                        </label>
                    </div>
                    <div class="cell small-12">
                        <label class="speci">Naziv kompanije*
                            <input id="r_company" name="r_company" type="text" required>
                            <span class="form-error">
                                Obavezno polje!
                            </span>
                        </label>
                    </div>
                    <div class="cell small-12">
                        <label class="speci">Adresa*
                            <input id="r_address" name="r_address" type="text" required>
                            <span class="form-error">
                                Obavezno polje!
                            </span>
                        </label>
                    </div>
                    <fieldset class="cell small-12 feles">
                        <legend>Izaberite vozilo koje želite da iznajmite</legend>
                        <div class="radiogrid">
                            <label for="r_strvehicle01"><input type="radio" name="r_strvehicle" value="Kombi vozilo"
                                    id="r_strvehicle01">Kombi vozilo</label>
                            <label for="r_strvehicle02"><input type="radio" name="r_strvehicle"
                                    value="Poluprikolice sa ceradom" id="r_strvehicle02">Poluprikolice sa
                                ceradom</label>
                        </div>
                    </fieldset>
                    <p>&nbsp;</p>
                    <fieldset class="cell small-12 feles">
                        <legend>Izaberite period iznajmljivanja</legend>
                        <div class="radiogrid">
                            <label for="r_time01"><input type="radio" name="r_time" value="Na 4 sata" id="r_time01">Na 4
                                sata</label>
                            <label for="r_time02"><input type="radio" name="r_time" value="1-3 dana" id="r_time02">1-3
                                dana</label>
                            <label for="r_time03"><input type="radio" name="r_time" value="4-7 dana" id="r_time03">4-7
                                dana</label>
                            <label for="r_time04"><input type="radio" name="r_time" value="K8-15 dana"
                                    id="r_time04">8-15 dana</label>
                            <label for="r_time05"><input type="radio" name="r_time" value="16-30 dana"
                                    id="r_time05">16-30 dana</label>
                            <label for="r_time06"><input type="radio" name="r_time" value="Preko 30 dana"
                                    id="r_time06">Preko 30 dana</label>
                        </div>
                    </fieldset>
                    <p>&nbsp;</p>
                    <div class="cell small-12">
                        <label>Poruka
                            <textarea id="r_message" name="r_message" rows="4"></textarea>
                        </label>
                    </div>
                    <div class="cell small-12">
                        <label class="accept" for="r_acceptgdpr"><input id="r_acceptgdpr" name="r_acceptgdpr"
                                type="checkbox" required>Popunjavanjem i slanjem obrasca za davanje ponude prihvatam
                            navode iz <a href="<?= get_privacy_policy_url(); ?>">informacije o rukovanju
                                podacima.</a></label>
                    </div>
                    <div class="cell small-12">
                        <label class="accept" for="r_acceptmarketing"><input id="r_acceptmarketing"
                                name="r_acceptmarketing" type="checkbox" required><a
                                href="https://viarent.rs/pravno-obavestenje/">Saglasan sam</a> da se ostavljeni podaci
                            iskoriste u komercijalne i marketinške svrhe</label>
                    </div>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <fieldset class="cell small-12">
                        <div class="formactions text-center">
                            <div id="result"></div>
                            <input type="hidden" name="ap_id" value="<?php echo $subjecto; ?>">
                            <input type="hidden" name="message_human" value="2">
                            <input type="hidden" name="submitted" value="1">
                            <button id="contact_submit" type="submit"
                                class="button large"><?php _e('Pošaljite','viars'); ?></button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
        <button class="requestmodal__close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
