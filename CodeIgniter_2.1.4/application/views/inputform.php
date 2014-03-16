<html>
<head>
	<title> Form Page	</title>

</head>
<body>
<h1>Input Form</h1>
<form name ="userinput"method="post" action="dbtest/save_userinput">
<table width="10%">

<tr>
<td>Name: </td>
<td> <input type="text" id="name" name="name"/></td>
</tr>

<tr>
<td>About:</td>
<td> <input type="text" id="about" name="about"/></td>
</tr>

<tr>
<td>Symptoms:</td>
<td> <input type="text" id="symptoms" name="symptoms"/></td>
</tr>

<tr>
<td>causes:</td>
<td> <input type="text" id="causes" name="causes"/></td>
</tr>
<tr>
<td>prevention:</td>
<td><input type="text" id="preventions" name="preventions"/></td>
</tr> 

<tr>
<td>treatment: </td>
<td><input type="text" id="treatment" name="treatment"/></td>
</tr>
<tr align="center" style="column-span:2">
<td><input type="submit" value="Submit Data" name="submit"/></td>
</tr>
</table>
</form>
<a href="dbtest/work">Get Data</a>
</body>
</html>