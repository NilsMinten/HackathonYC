<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="vakken.css">
<div class="container">
  <div style="text-align:center">
    <h2>Algemeen</h2>
    <p>Algemene vragen over de gevolgde lessen </p>
  </div>
  <div class="row">
    <div class="column">
      <img src="resources/yc-logo.png" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Naam</label>
        <input type="text" id="fname" name="firstname" placeholder="Voer je naam in..">
        
        <label for="country">Welk vak heb je gevolgd?</label>
        <select id="country" name="country">
          <option value="australia">OOP</option>
          <option value="canada">Python</option>
          <option value="usa">React</option>
          <option value="usa">Web Ontwikkeling</option>
        </select>

        <label for="country">Stof module beantwoordt aan verwachtingen</label>
        <select id="country" name="country">
          <option value="australia">Zeer Eens</option>
          <option value="canada">Eens</option>
          <option value="usa">Weet ik niet</option>
          <option value="usa">Oneens</option>
          <option value="usa">Zeer Oneens</option>
        </select>

        <label for="country">Inhoudelijke kwaliteit	van	de lesstof</label>
        <select id="country" name="country">
          <option value="australia">Zeer Goed</option>
          <option value="canada">Goed</option>
          <option value="usa">Gemiddeld</option>
          <option value="usa">Slecht</option>
          <option value="usa">Zeer Slecht</option>
        </select>

        <label for="subject">Overige opmerkingen</label>	
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Verder">
      </form>
    </div>
  </div>
</div>