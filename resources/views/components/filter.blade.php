<form action="/" class="filterForm">
    <div class="form-group">
      <input type="text" name="search" placeholder="Zoeken..." />
    </div>
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
      <input type="number" name="price" placeholder="Prijs per uur...">
    </div>
    <div class="form-group" style="float: right">
      <button class="filterButton" type="submit">Opslaan</button>
    </div>
</form>