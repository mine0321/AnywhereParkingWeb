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
					<h1>登録完了！<br>ありがとうございました。</b></h1>
					
				</header>

				<footer>
					<a href=index.php class="button scrolly">戻る</a>
				</footer>
			</section>
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