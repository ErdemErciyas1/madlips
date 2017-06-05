<html>
<head>
  <title>Formulier</title>
  <link rel="stylesheet" type="text/css" href="themee.css" />
<div id="flexcontainer">
<img src="imgs/logo.png" class=logo/>

<ul class ="links">
<li><a href="http://localhost/www/form.php"> Er heerst paniek...</a></li>	 <li class ="onkundelink"><a href="http://localhost/www/mood.php">Onkunde</a></li>
</ul>
</head>

<body>

  <form method="post" action="onk.php">


 
  	<div class="tekstall">
  	<h1> Onkunde</h1>
  <p>
      <label>Wat zou je graag willen kunnen?</label>
      <input type="text" name="huisdier" />

    </p>

    <p>
      <label>Met welk persoon kun je goed opschieten??</label>
      <input type="text" name="persoon" />
    </p>


    <p>
      <label>Wat is je favoriete getal?</label>
      <input type="text" name="land" />
    </p>

    <p>
      <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
      <input type="text" name="vervelen" />

    </p>
    
    <p>
      <label>Wat is je best persoonlijke eigenschap?</label>
      <input type="text" name="speelgoed" />
    </p>

    <p>
      <label>Wat is je slechtste persoonlijke eigenschap?</label>
      <input type="text" name="docent" />

    </p>


    <p>
      <label>Wat is het ergste wat je kan overkomen?</label>
      <input type="text" name="kopen" />

    </p>

    
    <p>
    <label>&nbsp;</label>
      <input type="submit" value="Versturen" />
    </p>
  </form>
  	</div>
</div>
</body>
</html>
