<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fallout input</title>
	<link rel="icon" type="text/css" href="favicon.png">
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>

<body>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"><form action="results.html" method="post">
  <div class="S">
<h2>Fallout character creation form</h2>
<label>Are you a boy or a girl?</label><br>
<input type=radio name=sex value="Female" checked> Girl<br>
<input type=radio name=sex value="Male"> Boy<br>
<label>What's your name, surname and age</ladel><br><br>
  <div class=row>
    <div class=col-xs-4>
      <input type=text name=name class=form-control placeholder=name>
    </div>
    <div class=col-xs-4>
      <input type=text name=surname class=form-control placeholder=surname>
    </div>
    <div class=col-xs-4>
      <input type=number name=age class=form-control placeholder=age>
    </div>
  </div><br>
<label>S.P.E.C.I.A.L. stats (stat range is 1 - 10; stat sum is 42):</label><br>
Strength: <input type=number name=strength value=6 style="width:40px;" required><br><br>
Perception: <input type=number name=perception value=6 style="width:40px;" required><br><br>
Endurance: <input type=number name=endurance value=6 style="width:40px;" required><br><br>
Charisma: <input type=number name=charisma value=6 style="width:40px;" required><br><br>
Intelligence: <input type=number name=intelligence value=6 style="width:40px;" required><br><br>
Agility: <input type=number name=agility value=6 style="width:40px;" required><br><br>
Luck: <input type=number name=luck value=6 style="width:40px;" required><br><br>
<input type=submit value="Confirm">
</div>
</form>
</div>
</div>
</body>
</html>