<!DOCTYPE HTML>
<!---->
<html>
<head>
<title>AnywhereParking</title>
<meta charset="utf-8" />
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
    userdata.setValue(sensorData.lat);
    document.write("<p>"+userdata+"</p>");
    //alert(userdata)
    document.write("<p>###############</p>");
    //<p>#############</p>
    document.write("<p>"+sensordata+"</p>");
    //alert(sensordata)
    // Update humidity data
    //humidityData.setValue(0, 1, sensorData.humidity);

    //temperatureChart.draw(temperatureData, temperatureOptions);
    //humidityChart.draw(humidityData, humidityOptions);
  };
};
connect();

</script>

</head>

<body>
<script type="text/javascript">
conect();

<p>parking</p>

</script>

</body>
</html>