<!DOCTYPE HTML>
<!---->
<html>
	<head>
		<title>AnywhereParking</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header" class="dark">
				<header>
					<h1>Welcome to どこでもPARKING</h1>
					
				</header>
				<footer>
					<a href=registration.php class="button scrolly">貸したい</a>
				</footer>
				<footer>
					<a href=positiongooglemap.php class="button scrolly">借りたい</a>
				</footer>
			</section>

<script type="text/javascript">
var userdata;
var wsUrl = '<http://anywhereparkingnodered.mybluemix.net/ws/sensor>';
function connect() {
  socket = new WebSocket(wsUrl);
  socket.onmessage = function(e) {
    var sensorData = JSON.parse(e.data);

    // Update temperature data
    //temperatureData.setValue(0, 1, sensorData.temp);
    //temperatureData.setValue(1, 1, sensorData.objectTemp);
    userdata.setValue(sensorData.lat)
    var userdata

    // Update humidity data
    //humidityData.setValue(0, 1, sensorData.humidity);

    //temperatureChart.draw(temperatureData, temperatureOptions);
    //humidityChart.draw(humidityData, humidityOptions);
  };
};

</script>

	</body>
</html>