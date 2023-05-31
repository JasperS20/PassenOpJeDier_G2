<form action="/advertenties/filter" class="filterForm">
    <section class="first-form-group">
      <div class="form-group">
        <input type="text" name="search" id="search" placeholder="Zoeken...">
      </div>
      <div class="form-group">
        <select name="animal" id="animal" class="button">
          <option value="other">Kies een dier</option>
          <option value="hond">Hond</option>
          <option value="kat">Kat</option>
          <option value="hamster">Hamster</option>
          <option value="cavia">Cavia</option>
          <option value="vis">Vis</option>
          <option value="vogel">Vogel</option>
        </select>
      </div>
      <div class="form-group">
        <input type="number" name="price_range" id="price_range" placeholder="Prijs per uur..." value="">
      </div>
    </section>
    <div class="form-group" style="float: right">
      <button class="button" type="submit">Zoeken</button>
    </div>
</form>