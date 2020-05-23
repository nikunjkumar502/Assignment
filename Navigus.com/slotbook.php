<!DOCTYPE html>
<html>
<head>
	<title>Slot Booking</title>
	<style type="text/css">
	.green{
		border: 3px green solid;
	}
	.red{
		border: 3px red solid;
	}
		#main{
			width: 800px;
			height: 800px;
			margin: 0px auto;
			border: 4px solid black;
			background-color: lightgray;
			
		}
		#heading{
			color: white;
			height: 200px;
			width: 600px;
			margin-left: 250px;
			background-image:url('img/1.jpg');
			background-size: contain;
			background-repeat: no-repeat;
		}
		#drinks{
			width: 400px;
			height: 60px;
			color: green;
			margin-left: 250px;
			font-size: 40px;
		}
		#checkbox{
			width: 400px;
			height: 60px;
			color: red;
			margin-left: 250px;
			font-size: 30px;
		}
	</style>
</head>
<body>
<div id="main">
	<div id="heading">
	</div><br>
	<div id="drinks">
		<tr>
			<td>Morning</td><br>
		</tr>
	</div>
	<div id="checkbox">
		<tr>
			<td> 9am to 10am</td>
			<td>
				<input type="date" name="">
				<br>
				<input type="radio" name="TEA" id="TEA" value="15">
			</td>
			<td>10am to 11am</td>
			<td>
				<input type="radio" name="COFFEE" id="COFFEE" value="20">
			</td>
			<td>11am to 11.59am</td>
			<td>
				<input type="radio" name="JUICE" id="JUICE" value="30">
			</td>
		</tr>
	</div><br>
	<div id="drinks">
		<tr>
			<td>AfterNoon</td><br>
		</tr>
	</div>
	<div id="checkbox">
		<tr>
			<td> 12pm to 1pm</td>
			<td>
				<input type="radio" name="TEA" id="TEA" value="15">
			</td>
			<td>1pm to 2pm</td>
			<td>
				<input type="radio" name="COFFEE" id="COFFEE" value="20">
			</td>
			<td>2pm to 3pm</td>
			<td>
				<input type="radio" name="JUICE" id="JUICE" value="30">
			</td>
		</tr>
	</div><br>
	<div id="drinks">
		<tr>
			<td>Evening</td><br>
		</tr>
	</div>
	<div id="checkbox">
		<tr>
			<td> 5pm to 6pm</td>
			<td>
				<input type="radio" name="TEA" id="TEA" value="15">
			</td>
			<td>6pm to 7pm</td>
			<td>
				<input type="radio" name="COFFEE" id="COFFEE" value="20">
			</td>
			<td>7pm to 8pm</td>
			<td>
				<input type="radio" name="JUICE" id="JUICE" value="30">
			</td>
		</tr>
	</div>

	<div id=" calculator"></div>
	<button style="border:3px black solid;" onclick="total()">CALCULATE
	</button>
	<div id="slip">
	</div>
	<div>
		<p><b> <span id="sname"></span> <br></b></p>
		<p>	<span id="stea"></span></p>
		<p><span id="ssum"></span></p>
		<p><span id="sthank"></span></p>
		
	</div>
	<script type="text/javascript">
		function total(){
			var sum=0;
			var a=document.getElementById('TEA').value;
			var b=document.getElementById('COFFEE').value;
			var c=document.getElementById('JUICE').value;
			if (document.getElementById('TEA').checked) {
				sum=sum+parseInt(a);
			}
			if (document.getElementById('COFFEE').checked) {
				sum=sum+parseInt(b);
			}
			if (document.getElementById('JUICE').checked) {
				sum=sum+parseInt(c);
			}
			
			
			alert(sum);
			var d=document.getElementById('name1').value;
				document.getElementById('sname').innerHTML=" HI "+d;
	       alert();
	       document.getElementById('ssum').innerHTML="Your total amount to be paid is:-"+sum+"  <br>thanks for visiting";
			document.getElementById('total').value=sum;
		}
	</script>
</div>
</body>
</html>
