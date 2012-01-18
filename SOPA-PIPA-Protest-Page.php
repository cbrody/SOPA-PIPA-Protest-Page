<?php
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Retry-After: Thu, 19 Jan 2012 00:00:00 GMT');
?>
<html>
<head>
<title>This site is temporarily offline</title>
<link href='http://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>
<style>
body {
   color: #fff;
   font-size: 88px;
   margin: 50px auto;
   text-align:center;
   width:800px;
   background: #121110 url(darth_stripe_sm.png) repeat;
}

p {
   padding:0;
   margin:1em 0;  
   font-size:18px;
   font-family: 'Arial';
   letter-spacing:3px;
   line-height: 1em;
}

a {
  text-decoration: none;
  color:#bb7711;
}

a:hover {
   color:#bb5500;
}

.bills{
  text-decoration:underline;
  color:white;
}

.act{
  font-family: 'Stint Ultra Condensed';
  font-size:218px;
  padding:0;
  margin:0;
  letter-spacing:5px;
}
.save{
  font-family: 'Stint Ultra Condensed';
  font-size:108px;
  padding:0;
  margin:0;
  letter-spacing:5px;
}

.link{
  color: #FFC273;
  letter-spacing:0;
  padding: 2em;
  line-height: 2em;
}

.orange a:hover {
}
</style>
</head>
<body>
   <div>
     <hr>
     <p class="save">SAVE THE INTERNET.</p>
      <p>This site has been taken down in protest of bills currently being considered in the US
      House and Senate. Called <a class="bills" href="http://thomas.loc.gov/cgi-bin/bdquery/z?d112:h.r.3261:">SOPA</a> and 
      <a  class="bills" href="http://www.opencongress.org/bill/112-s968/show">PIPA</a>,<br /> these bills threaten 
      to destroy the Internet as we know it.</p>
      <p>If either one passes, your favorite sites could disappear forever. Let's <a class="bills" href="https://github.com/SaraJo/SOPA-PIPA-Protest-Page">turn the web OFF today</a> to see what a government-controlled future could look like.</p>
      <hr>
      <a href="http://americancensorship.org/modal/call-form-moz.html">
         <p class="act">ACT NOW.</p>
      </a>
      <p><span><a class="link" href="http://americancensorship.org/modal/call-form-moz.html">CALL YOUR SENATOR AND ASK THEM TO VOTE "NO" FOR PIPA</a></span>

        <span> <a class="link" href="https://github.com/SaraJo/SOPA-PIPA-Protest-Page">JOIN US</a></p>
        <p><span> <a class="link" href="https://supporters.eff.org/donate">DONATE TO THE EFF</a></span>
        <span><a class="link" href="http://americancensorship.org/">STOP AMERICAN CENSORSHIP</a></span>
        <span><a class="link" href="http://wikimediafoundation.org/wiki/English_Wikipedia_anti-SOPA_blackout">WIKIPEDIA</a></p>
        

   <div>
</body>
</html>