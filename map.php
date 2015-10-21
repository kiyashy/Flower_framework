<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" name="baidu-tc-cerfication" data-appid="7078236" src="http://apps.bdimg.com/cloudaapi/lightapp.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
	body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=bkpHaHYHZFfiIVdn1Xec0qvT"></script>
	<title>夏木樂地圖測試</title>
</head>
<body>
	<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">

	var map = new BMap.Map("allmap");    // create map
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // init set the base point
	map.addControl(new BMap.MapTypeControl());   // add tools
	map.setCurrentCity("北京");          // city
	map.enableScrollWheelZoom(true);     //scroll control
</script>

