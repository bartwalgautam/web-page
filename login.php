<?php
session_start();
?>
<html>
<head>
      <style> 
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);
@import url("https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css");
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");     
body {
  display: block;
  background-image:url(http://gdj.gdj.netdna-cdn.com/wp-content/uploads/2011/03/background-pattern-design-53.jpg);
  width: 1024px; max-width: 1024px; min-width: 1024px;
  margin: 0 auto;
  padding: 5px 30px;
  position: relative;
  box-shadow: 6px 6px 35px 0px rgba(0,0,0,0.75), -6px -6px 35px 0px rgba(0,0,0,0.75);
}
body:after { content: "";   background-image:url(http://nguistyle.com/wp-content/uploads/2013/07/wood-slat-background.jpg) ;
  display: block; width: 100%; height: 100%; 
  position: absolute; top: 0; left: 0; z-index: -100;
}
.header{
  
	width: 120px;
	
}
.headermenu { width: auto; height: 3em;
  position: relative;
}

.headermenu > label {
  display: inline-block;
  width: 3em; height: 3em;
  background-image: url("https://cdn4.iconfinder.com/data/icons/flat-black/128/menu.png");
  background-size: contain;
}
.headermenu > input { display: none; }
.headermenu > label { display: none; }
.headermenu > .nav > li {
  display: inline-block;
  padding: .5em;
  font-family: 'Open Sans', sans-serif;
  font-size: 170%;
  font-weight: bold;
}
.headermenu > .nav > li:hover {
  color: yellow;
  background-color: rgba(0,0,255,0.65);
  z-index: 1;
}
.headermenu > .nav > li > a { 
  color: white;
  text-decoration: none; 
}
@media all and (max-width:600px) {
  .headermenu > label { display: inline-block; }
  .headermenu > .nav { display: none; }
  .headermenu > input:checked + .nav { 
    display: block;
    width: 200px;
    position: absolute;
    top: 35px;
    z-index: 100;
    background-color: rgba(0,0,255,0.65);
    left: 12px;
  }
  .headermenu > input:checked + .nav > li { 
    display: block; 
  }
}
h1.title {
  color: #171491;
  font-size: 160%;
  font-family: 'Open Sans', sans-serif;
  margin-top: 75px;
  margin-left: 10px; 
  padding: 5px 0 0 2px
}
.listing{
  display: block;
  width: 100%;
  height: 400px;
  margin: 30px 0 0 10px;
}
.listing > .listinginfo {
  display: block;
  width: 100%;
  height: 100%;
}
.listing > .listinginfo > .fotorama {
  display: block;
  width: 60%;
  height: 100%;
  margin: 5px -10px 0 0;
  float: left;
}
.listing >.listinginfo > .rentalname{
  display: block;
  color: #171491;
  font-family: 'Open Sans', sans-serif;
  font-size: 150%;
}
.listing >.listinginfo > p{
  display: block;
  color: white;
  font-family: 'Open Sans', sans-serif;
  margin-top: 5px;
}
.footer {
  display: block;
  width: 100%;
  padding: 10px;
  text-align: center;
  background-size: contain;
  background-position: top center;
  background-repeat: repeat;  
}
.footer > span {
  display: block;
  color: ;
  font-family: sans-serif;
}
.footer > span > a {
  color: white;
  text-decoration: none;
}
.footer > .name {
  margin-top: 30px;
  margin-bottom: 10px;
  font-size: 200%;
  font-family: 'Open Sans', sans-serif;
  color:#171491;
}
.footer > p {
  margin-bottom: 10px;
}
.footer > p > a {
  padding: 0 20px;
  font-size: 30px;
  color: #0070ff;
}
.footer > .copyright{ 
  font-size: 60%; 
  font-family: 'Open Sans', sans-serif;
}
		  .xyz
			 
{
	float: right;
	
	color: #fff;
	font-family: sans-serif;
	font-weight: 500;
	text-transform: uppercase;
	transition: :0.2s ease;
	cursor: pointer;
	
}
		  
</style>
</head>
<body>
<div class="header">
  <img src="logo.jpg" alt="" />
</div>
	<div class="xyz"><?php
					if(isset($_SESSION['u_id'])){
						echo '<form action="includes/logout.inc.php" method="post">
						<button type="submit" name="submit" class="sam"> Logout</button>
					</form>';
					}
?></div>
<div class="headermenu">
  <label for="menu"></label>
  <input type="checkbox" id="menu" />

</div>
<h1 class="title">Rental Listings</h1>
<div class="listing">
  <div class ="listinginfo">
    <div class="fotorama" data-autoplay="5000" data-loop="true" data-width=95% data-height=auto> 
     <img src="https://imagesus-ssl.homeaway.com/mda01/15b9fd48-9b15-4d3e-a0f2-d068842420e4.1.10" alt=""/>
     <img src="https://imagesus-ssl.homeaway.com/mda01/b251d5bc-be1b-4986-b9c4-628f1e174557.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/f4428048-d0f5-469f-bf8c-8ddcbf276956.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/6bdf7f21-7353-4a0a-9773-89eddf50741a.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/3132ad2d-d4a9-464a-8300-9af70ba7ef52.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/a9f5b5e2-a86f-4d8e-ab94-137ec1c8f8c7.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/845370e0-fd49-46eb-a9a9-72d6fd426090.1.10" alt="" />
    </div>
    <p class="rentalname">
      Wintergreen House Rental: 
    </p>
    <p>
      This lovely three bedroom two bathroom, 1500 square foot mountain home is nested on Blackrock Circle at the premier golf and ski resort of Wintergreen. The home is strategically located to offer quiet seclusion and spectacular mountain views. A short stroll puts you on the ski slopes, a hiking trail or at the Mountain Inn for shopping, dining and entertainment. Located in Virginia.
    </p>
    <p>
      Price: $236 avg/night
    </p>
    <p>
      Sleeps: 6 People
    </p>
    <p>
      Bedrooms: 3
    </p>
    <p>
      Bathrooms: 2
    </p>
    <p>
      Property type: House
    </p>
	</div>
</div>
<div class="listing">
  <div class ="listinginfo">
   <div class="fotorama" data-autoplay="5000" data-loop="true" data-width=95% data-height=auto> 
     <img src="https://imagesus-ssl.homeaway.com/mda01/15b9fd48-9b15-4d3e-a0f2-d068842420e4.1.10" alt=""/>
     <img src="https://imagesus-ssl.homeaway.com/mda01/b251d5bc-be1b-4986-b9c4-628f1e174557.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/f4428048-d0f5-469f-bf8c-8ddcbf276956.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/6bdf7f21-7353-4a0a-9773-89eddf50741a.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/3132ad2d-d4a9-464a-8300-9af70ba7ef52.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/a9f5b5e2-a86f-4d8e-ab94-137ec1c8f8c7.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/845370e0-fd49-46eb-a9a9-72d6fd426090.1.10" alt="" />
    </div>

    <p class="rentalname">
      Key Largo House Rental: 
    </p>
    <p>
      This split, four bedroom, four bathroom, smoke free home is ideal for two families or large groups. Enjoy the breathtaking views and sunsets from the family rooms, terraces, balcony, secluded beach, dock or in your own private heated Jacuzzi. Fishing, snorkeling, swimming, canoeing, paddle boarding or relaxing on the hammock can be enjoyed in this private waterfront fenced in property. Located in Florida.
    </p>
    <p>
      Price: $3000 per week, $9000 per month
    </p>
    <p>
      Sleeps: 14 People
    </p>
    <p>
      Bedrooms: 4
    </p>
    <p>
      Bathrooms: 4
    </p>
    <p>
      Property type: House
    </p>
    
  </div>    
</div>

<div class="listing">
  <div class ="listinginfo">
    <div class="fotorama" data-autoplay="5000" data-loop="true" data-width=95% data-height=auto> 
     <img src="https://imagesus-ssl.homeaway.com/mda01/fa71be30-ab41-4687-b3de-07c06325deb5.1.10" alt=""/>
     <img src="https://imagesus-ssl.homeaway.com/mda01/8d765cde-a287-46a1-814c-be3549556d67.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/92795d22-a1f0-4843-b1e9-3bb8fdcee432.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/16b7b23c-6212-4b46-a0f5-0d1056f6d276.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/6e1d59e3-da6b-4895-bd3f-6201d77e1806.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/19dc22b7-bbd4-4926-8a2f-f9c68d806f65.1.10" alt="" />
     <img src="https://imagesus-ssl.homeaway.com/mda01/c68cd736-0714-4a8e-b708-d05d4d5e14dc.1.10" alt="" />
    </div>

    <p class="rentalname">
      The Midpines House Rental: 
    </p>
    <p>
      Yosemite’s Favorite Basecamp meets the needs of almost all travelers. Couples will enjoy the privacy of the entire property to themselves when they rent the Midpines House. Master bedroom has queen sized bed, a loveseat, and comes stocked with high thread count sheets and goose down duvet. The attached bathroom has granite countertops and thick fluffy towels. Located in California. 
    </p>
    <p>
      Price: $160 avg/night
    </p>
    <p>
      Sleeps: 12 People
    </p>
    <p>
      Bedrooms: 2
    </p>
    <p>
      Bathrooms: 3
    </p>
    <p>
      Property type: House
    </p>
    
  </div>    
</div>
<div class="listing">
  <div class ="listinginfo">
    <div class="fotorama" data-autoplay="5000" data-loop="true" data-width=95% data-height=auto> 
     <img src="1.jpg" alt=""/>
     <img src="earth.jpg" alt="" />
     <img src="off.jpg" alt="" />
     <img src="on.jpg" alt="" />
     </div>
    <p class="rentalname">
      The Bear's Den Lodge Rental: 
    </p>
    <p>
      The “Bear’s Den” is a spacious and luxurious accommodation with panorama views, high on the bluff overlooking the Homer Spit, Kachemak Bay and Mt. Augustine volcano. Perfect for an entire family, several couples or just friends that want to stay under one roof. The Homer Spit offers world class Halibut, Salmon and Ling Cod fishing. Located in Alaska.
    </p>
    <p>
      Price: $425 avg/night
    </p>
    <p>
      Sleeps: 12 People
    </p>
    <p>
      Bedrooms: 3
    </p>
    <p>
      Bathrooms: 3
    </p>
    <p>
      Property type: Lodge
    </p>
 
  </div>    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script>
<div class="footer">
  <span class="name">Invicta Realty</span>
    <p>
       <a href="https://www.facebook.com" class="fa fa-facebook-official"></a>
       <a href="https://www.tripadvisor.com" class="fa fa-tripadvisor"></a>
       <a href="https://www.gmail.com" class="fa fa-envelope-o"></a>
    </p>
    <span class="copyright">Copyright © 2015	 Invicta Realty.</span>
</div>
</body>
</html>