<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<input type="text" name="data" id="data">
<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript">
$(window).on('load',function(e){
	let getRandomNumber = function(start, range){
		let getRandom = Math.floor((Math.random() * range) + start);
		while (getRandom > range){
			getRandom = Math.floor((Math.random()*range) + start);
		} 
		return getRandom
	}
	let data = getRandomNumber(1000,9999);
	$('#data').val(data);
});
</script>
</body>
</html>