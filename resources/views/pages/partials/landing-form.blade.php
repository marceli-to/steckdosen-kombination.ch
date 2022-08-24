<section class="landing__form">
  <article class="md:grid">
    <div class="md:span-7">
      <h1>{{ __('Individuelle Produkteschulung') }}</h1>
      <p>{{ __('Bevorzugen Sie für sich und Ihr Team (minimum 10 Personen) eine individuelle Schulung, benützen Sie bitte untenstehendes Formular. Ihre Daten werden nur von den beteiligten Unternehmen verwendet und nicht an Dritte weitergegeben.') }}</p>
    </div>
    <div class="md:span-9">
      <form method="POST" action="">
        <div class="form-group ">
          <label for="name">
            Name *
          </label>
          <input type="text" name="name" placeholder="" value="">
        </div> 
        <div class="form-group ">
          <label class="" for="firstname">
            Vorname *
          </label>
          <input class="" type="text" name="firstname" placeholder="" value="">
        </div> 
        <div class="form-group ">
          <label for="company">
            Firma *
          </label>
          <input type="text" name="company" placeholder="" value="">
        </div> 
        <div class="form-group ">
          <label for="phone">
            Telefon *
          </label>
          <input type="text" name="phone" placeholder="" value="">
        </div> 
        <div class="form-group ">
          <label for="email">
            E-Mail<sup>1</sup> *
          </label>
          <input type="email" name="email" placeholder="" value="">
          <div class="form-helper">
            <sup>1</sup>wird ausschliesslich für die Bestätigungs-E-Mail verwendet
          </div> 
        </div>
        <div class="form-group ">
          <label for="headcount">
            Anzahl Teilnehmer *
          </label>
          <input type="number" name="headcount" placeholder="" value="" min="10">
        </div> 
        <div class="form-group">
          <label for="date">
            Gewünschtes Datum*
          </label>
          <input class="js-datepicker flatpickr-input" type="text" name="date" placeholder="" value="" readonly="readonly">
        </div> 
        <div class="form-group">
          <div class="mt-8x">
            <input type="submit" name="submit" value="Absenden" class="btn-primary">
          </div>
        </div>
      </form>
    </div>
  </article>

</section>