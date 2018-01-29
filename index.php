<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />

<style>
.mycomp
{
width:100%;
margin-top:10px;
margin-bottom:20px;
color:white;
font-family:"Georgia";
font-size:20px;
padding:10px;
border:1px solid black;
background:black;
border-radius:10px;
}

.mycomp:hover
{
color:white;
border:1px solid black;
background:black;
border-radius:10px;
}

.mybtn{
background: black;
margin: 0 auto;
font-weight: bold;
margin-top: 10px;
margin-bottom: 20px;
color: white;
font-family: 'Georgia';
font-size: 20px;
padding: 10px;
border: 1px solid white;
border-radius: 20px;
transition:2s ease-in-out
}
</style>
</head>
<body>
<form action="feedback.php" method="post">
<div style="width:400px;margin:0 auto">

<input type="text" name="pname" id="pname" class="mycomp" placeholder="enter product name">
<br>
<input type="text" name="pqty" id="pqty" class="mycomp" placeholder="enter product quantity">
<br>

<select name="ptype" id="ptype" class="mycomp">
<option>Footwear</option>
<option>Clothes</option>
<option>Kitchenware</option>
</select>
<br>

<!--<select name="cat" id="cat" class="mycomp">
<option>Suggestion</option>
<option>Complaint</option>
<option>Reviews</option>
<option>Registration</option>
<option>Examination</option>
<option>Others</option>
</select>-->
<br>
<input type="text" name="pprice" id="pprice" class="mycomp" placeholder="enter product price">
<br>
<textarea name="message" id="message" class="mycomp" ></textarea>
<br>

<input type="submit" class="mybtn" value="Submit Feedback">
<br>


</div>

</form>
</body>
</html>
