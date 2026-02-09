
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakeDigitize Registration</title>    

    <style>

        <body {
            font-family: Arial, sans-serif;
            background-color:#fff7ec;
            margin: 0;
            padding: 0;
        }
        form {
            background-color:#fff7ec;
            padding: 20px;
            margin: 50px auto;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;    
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #9c1f1f;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #be2e2e;
        }
        p{
            text-align: center;
        }
    </style>
</head>
<body>

<h1> <center>MakeDigitize Login </center></h1>


<div style="margin-bottom:10px;">
<form method="post" action="mhome.php" >
    <div >
        <label for="name" > ID </label>
        <input type="text"  name="uid" >
        
</div>

    <div >
        <label for="name" > Name </label>
        <input type="text" name="uname"  >
        
</div>
<div>
    <label for="password" >password </label>
    <input type="password"  name="upassword"  >
</div>
<div >
    <label for="email"  >email </label>
    <input type="email" name="uemail"  >
</div>


<div >
    <input type="checkbox" name="c">
    <label  for ="remember me" >remember me</label>
</div>
<div>
    <button type="submit" name="signup" >
        signup</button>

</div>

</form>
<p>ARE YOU ALREADY REGISTERED?<a href="login.php">Click here</a></p>
</div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>