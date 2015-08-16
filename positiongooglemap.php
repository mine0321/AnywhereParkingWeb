<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<meta name=viewport content="initial-scale=1.0, user-scalable=no"/>
<style>
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
 
    </style>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCnhwlkdqXWb7FFBcfQyDMvUKrRkgsK0vs&sensor=false&language=ja">
    </script>
<script>


</script>
<script>

      var message;


      // 位置情報取得
      function start_func(){
        get_location();        
      }


      function get_location(){
        document.getElementById("area_name").innerHTML = '位置情報取得します';
          if (navigator.geolocation) {
              // 現在の位置情報取得を実施
              navigator.geolocation.getCurrentPosition(successCallback,errorCallback);

          } else {message = "本ブラウザではGeolocationが使えません"; document.getElementById("area_name").innerHTML = message;}
      }

       function successCallback(pos) {
          var Potition_latitude = pos.coords.latitude;
          var Potition_longitude = pos.coords.longitude;

           // 位置情報が取得出来たらgmapをキック
           initialize(Potition_latitude,Potition_longitude);
        }

      function errorCallback(error) {
        message = "位置情報が許可されていません"; document.getElementById("area_name").innerHTML = message;
      }


      function initialize(x,y) {

        document.getElementById("area_name").innerHTML = 'google map情報を取得中';
        var myLatlng = new google.maps.LatLng(x,y);
        var mapOptions = {
          zoom: 17,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

var marker = new google.maps.Marker({
  position: myLatlng,
  map: map,
  icon: new google.maps.MarkerImage(
    "images/car.png"                   // url
    //new google.maps.Size(100,100), // size
    //new google.maps.Point(0,0),  // origin
    //new google.maps.Point(16,16) // anchor
  )
});

 

        
        // マーカーを追加したい場合	　　　　南東
var myLatlng2 = new google.maps.LatLng(35.668746, 139.762668);
marker = new google.maps.Marker({
position: myLatlng2,
 map: map,

 icon: new google.maps.MarkerImage(
    "images/parking.png"                   // url
    //new google.maps.Size(100,100), // size
    //new google.maps.Point(0,0),  // origin
    //new google.maps.Point(16,16) // anchor
  )
});
		//北東
var myLatlng3 = new google.maps.LatLng(35.671592, 139.763221);
marker = new google.maps.Marker({
position: myLatlng3,
 map: map,

 icon: new google.maps.MarkerImage(
    "images/parking.png"                   // url
    //new google.maps.Size(100,100), // size
    //new google.maps.Point(0,0),  // origin
    //new google.maps.Point(16,16) // anchor
  )
});
		//北西
var myLatlng4 = new google.maps.LatLng(35.672828, 139.757820);
marker = new google.maps.Marker({
position: myLatlng4,
 map: map,

 icon: new google.maps.MarkerImage(
    "images/parking.png"                   // url
    //new google.maps.Size(100,100), // size
    //new google.maps.Point(0,0),  // origin
    //new google.maps.Point(16,16) // anchor
  )
});
	//南西
var myLatlng5 = new google.maps.LatLng(35.669727, 139.760431);
marker = new google.maps.Marker({
position: myLatlng5,
 map: map,

 icon: new google.maps.MarkerImage(
    "images/parking.png"                   // url
    //new google.maps.Size(100,100), // size
    //new google.maps.Point(0,0),  // origin
    //new google.maps.Point(16,16) // anchor
  )
});
       

        get_area_name(myLatlng);


      }

      
    function get_area_name(latLng_now){
      // 座標から住所名を取得
      var geocoder = new google.maps.Geocoder();
        geocoder.geocode({latLng: latLng_now}, function(results, status){
        if(status == google.maps.GeocoderStatus.OK){
            document.getElementById("area_name").innerHTML = results[0].formatted_address+'付近にいます';
        } else {
          // エラーの場合
        }
      });
    }



    </script>
</head>
<body onload="start_func()">
<div id=map_canvas style="width:90%; height:90%">位置情報を取得しています....</div>
<div id=area_name></div>
<script type="text/javascript">
//<![CDATA[
(function() {
var _analytics_scr = document.createElement('script');
_analytics_scr.type = 'text/javascript'; _analytics_scr.async = true; _analytics_scr.src = '/_Incapsula_Resource?SWJIYLWA=2977d8d74f63d7f8fedbea018b7a1d05&ns=1';
var _analytics_elem = document.getElementsByTagName('script')[0]; _analytics_elem.parentNode.insertBefore(_analytics_scr, _analytics_elem);
})();
// ]]>
</script>
<script type="text/javascript">
    if (navigator.geolocation) {
        // 現在の位置情報取得を実施
        navigator.geolocation.getCurrentPosition(
        // 位置情報取得成功時
        function (pos) { 
                
        },
        // 位置情報取得失敗時
        function (pos) { 
                var location ="<li>位置情報が取得できませんでした。</li>";
                document.getElementById("location").innerHTML = location;
        });
    } else {
        window.alert("本ブラウザではGeolocationが使えません");
    }
</script>
    <ul id="location">
    </ul>
</body>
</html>