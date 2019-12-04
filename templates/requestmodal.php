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

        <form data-abide novalidate>

  <div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell small-12 text-center">
        <div data-abide-error class="alert callout" style="display: none;">
    <p><i class="fi-alert"></i> There are some errors in your form.</p>
  </div>

        </div>
      <div class="cell small-12">
        <label class="speci">Ime i prezime*
          <input id="r_name" name="r_name" type="text" required>
          <span class="form-error">
            Yo, you had better fill this out, it's required.
          </span>
        </label>
      </div>
      <div class="cell small-12">
        <label class="speci">E-mail*
          <input id="r_email" id="r_email" type="email" required >
          <span class="form-error">
            I'm required!
          </span>
        </label>
      </div>
      <div class="cell small-12">
        <label class="speci">Telefon*
          <input id="r_phone" id="r_phone" type="text" required >
          <span class="form-error">
            I'm required!
          </span>
        </label>
      </div>
      <div class="cell small-12">
        <label class="speci">Naziv kompanije*
          <input id="r_company" id="r_company" type="text" required >
          <span class="form-error">
            I'm required!
          </span>
        </label>
      </div>
      <div class="cell small-12">
        <label class="speci">Adresa*
          <input id="r_address" id="r_address" type="text" required >
          <span class="form-error">
            I'm required!
          </span>
        </label>
      </div>
      <fieldset class="cell small-12">
        <legend>Period iznajmljivanja</legend>
        <label class="aaaccept" for="r_timeShort"><input type="radio" name="r_time" value="Short" id="r_timeShort">Kratkoročno iznajmljivanje (1-364 dana)</label>
        <label class="aaaccept" for="r_timeLong"><input type="radio" name="r_time" value="Long" id="r_timeLong" required>Dugoročno iznajmljivanje (duže od godinu dana)</label>
      </fieldset>
      <div class="cell small-12">
        <label>Poruka
          <textarea id="r_message" id="r_message" rows="4"></textarea>
        </label>
      </div>
      <div class="cell small-12">
        <label class="accept" for="r_acceptgdpr"><input id="r_acceptgdpr" type="checkbox" required>Az ajánlatkérő űrlap kitöltésével és elküldésével elfogadom, az <a href="#">adatkezelési tájékoztatóban foglaltakat.</a></label>
      </div>
    </div>
  </div>

  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <fieldset class="cell small-12">
        <button class="button large expanded" type="submit" value="Submit">Submit</button>
      </fieldset>
    </div>
  </div>
</form>
<button class="requestmodal__close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>




</div>
