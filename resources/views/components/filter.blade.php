<form action="/advertenties/filter" class="filterForm">
    <section class="first-form-group">
      <div class="form-group">
        <select name="animal" id="animal" style="padding: 10px; background-color: #4caf50; color: white;
        border: none; border-radius: 4px;">
          <option value="hond">Hond</option>
          <option value="kat">Kat</option>
          <option value="hamster">Hamster</option>
          <option value="cavia">Cavia</option>
          <option value="vis">Vis</option>
          <option value="vogel">Vogel</option>
          <option value="other">Anders...</option>
        </select>
      </div>
      <div class="form-group">
        <input type="number" name="price_range" id="price_range" placeholder="Prijs per uur...">
      </div>
    </section>
    <div class="form-group" style="float: right">
      <button class="filterButton" type="submit">Zoeken</button>
    </div>
</form>