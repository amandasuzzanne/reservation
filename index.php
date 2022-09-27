<!DOCTYPE html>
<html>
<title>JAVA HOUSE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}

.bgimg {
  background-image: url('photos/background.png'); 
  min-height: 100%;
  background-position: center;
  background-size: cover;
  height: 500px;
}

ul.photos {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li.menuphotos{
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 220px;
}
</style>

<body>
<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black w3-round-xxlarge">menu</button></p>
    <p><a href="sendMessage.php">
        <button style.display='block' class="w3-button w3-black w3-round-xxlarge">contact us</button><a></p>
    <p><a href="addReservation.php">
      <button style.display='block' class="w3-button w3-black w3-round-xxlarge">reservation</button><a></p>
  </div>
  <div class="w3-display-bottomleft w3-container">
    <p class="w3-large">sunday - thursday 8am-9pm | friday & saturday 6.30am-10pm</p>
    <p class="w3-large">Greenspan Mall, Donholm, Nairobi</p>
  </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
  <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Menu</h1>
    </div>
  <ul class="photos">
    <li class="menuphotos">
        <img src="photos/menu_image1.png"/>
    </li>
    <li class="menuphotos">
        <img src="photos/menu_image2.png"/>
    </li>
    <li class="menuphotos">
        <img src="photos/menu_image3.png"/>
    </li>
    <li class="menuphotos">
        <img src="photos/menu_image4.png"/>
    </li>
    <li class="menuphotos">
        <img src="photos/menu_image5.png"/>
    </li>
    <li class="menuphotos">
        <img src="photos/menu_image6.png"/>
    </li>
    <li class="menuphotos">
        <img src="photos/menu_image7.png"/>
    </li>
    <li class="menuphotos">
        <img src="photos/menu_image8.png"/>
    </li>
</ul>
  </div>
</div>
</div>

</body>
</html>