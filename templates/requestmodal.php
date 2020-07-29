<div class="reveal requestmodal" id="requestmodal" data-reveal data-animation-in="scale-in-down fast"
    data-animation-out="scale-out-up fast">

    <header class="mobilemodal__head">
        <figure>
            <img width="768" height="576" src="https://placehold.it/768x576/?text=No+Photo+Available" alt="">
        </figure>
        <h2>Zatražite ponudu</h2>
        <p>No category selected</p>
        <h3>No vehicle selected</h3>
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
                    <fieldset class="cell small-12">
                        <legend>Period iznajmljivanja</legend>
                        <label id="strradio" for="r_timeShort"><input type="checkbox" name="rent_time[]" value="Kratkoročno iznajmljivanje (1-364 dana)"
                                id="r_timeShort">Kratkoročno iznajmljivanje (1-364 dana)</label>
                        <label id="ltrradio" for="r_timeLong"><input type="checkbox" name="rent_time[]" value="Dugoročno iznajmljivanje (duže od godinu dana)" id="r_timeLong">Dugoročno iznajmljivanje (duže od godinu dana)</label>
                    </fieldset>
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
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <fieldset class="cell small-12">
                        <div class="formactions text-center">
                            <div id="result"></div>
                            <input type="hidden" name="ap_id" value="<?php echo $subjecto; ?>">
                            <input type="hidden" id="r_vehicle" name="r_vehicle" value="">
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
