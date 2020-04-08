<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Web - 4</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	 <style>
.error {
  border: 2px solid red;
}
    </style>
</head>
<body class="bg-primary">
<?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}

// Далее выводим форму отмечая элементы с ошибками классом error
// и задавая начальные значения элементов ранее сохраненными.
?>
	<div class="jumbotron w-25 mx-auto my-5">
		<form action="" method="POST">
			<div class="from-group d-flex flex-column">
				<div class="my-2">
					<label>First Name</label>
					<div class="col-sm-10">
        				<input type="text" class="form-control" name="Name" <?php if ($errors['Name']) {print 'class="error"';} ?> value="<?php print $values['Name']; ?>"/>
      				</div>
      			</div>
      			<div class="my-2">
      				<label>Email</label>
      				<div class="col-sm-10">
        				<input type="email" class="form-control" name="Email" <?php if ($errors['Email']) {print 'class="error"';} ?> aria-describedby="emailHelp" value="<?php print $values['Email']; ?>"/>
      				</div>
      			</div>
      			<div class="my-2">
      				<label>Date of Birth</label>
      				<div class="d-flex flex-row justify-content-around">
      					<div class="d-flex flex-column">
      						<label>Day</label>
      						<input type="text" class="form-control" name="DD" <?php if ($errors['DD']) {print 'class="error"';} ?> value="<?php print $values['DD']; ?>"/>
      					</div>
      					<div class="d-flex flex-column">
      						<label>Month</label>
      						<input type="text" class="form-control" name="DM" <?php if ($errors['DM']) {print 'class="error"';} ?> value="<?php print $values['DM']; ?>"/>
      					</div>
      					<div class="d-flex flex-column">
      						<label>Year</label>
      						<input type="text" class="form-control" name="DY" <?php if ($errors['DY']) {print 'class="error"';} ?> value="<?php print $values['DY']; ?>"/>
      					</div>
      				</div>
      			</div>
      			<div class="my-2">
      				<label>Sex</label>
      				<div class="form-check">
        				<label class="form-check-label">
          					<input type="radio" class="form-check-input" name="Rad" <?php if ($errors['Rad']) {print 'class="error"';} ?> id="SMale" value="MALE" <?php if ($values['Rad']=="MALE")print'checked=""'; ?>"/>Male
       					</label>
      				</div>
      				<div class="form-check">
      					<label class="form-check-label">
          					<input type="radio" class="form-check-input" name="Rad" <?php if ($errors['Rad']) {print 'class="error"';} ?> id="SFe" value="FEMALE" <?php if ($values['Rad']=="FEMALE")print'checked=""'; ?>"/>Female
        				</label>
      				</div>
      			</div>
      			<div class="my-2">
      				<label>Number of limbs</label>
      				<div class="d-flex justify-content-between">
	      				<div class="form-check">
	        				<label class="form-check-label">
	          					<input type="radio" class="form-check-input" name="Limbs" <?php if ($errors['Limbs']) {print 'class="error"';} ?> id="0" value="0" <?php if ($values['Limbs']=="0")print'checked=""'; ?>"/>0
	       					</label>
	      				</div>
	      				<div class="form-check">
	      					<label class="form-check-label">
	          					<input type="radio" class="form-check-input" name="Limbs" <?php if ($errors['Limbs']) {print 'class="error"';} ?> id="1" value="1" <?php if ($values['Limbs']=="1")print'checked=""'; ?>"/>1
	        				</label>
	      				</div>
	      				<div class="form-check">
	      					<label class="form-check-label">
	          					<input type="radio" class="form-check-input" name="Limbs" <?php if ($errors['Limbs']) {print 'class="error"';} ?> id="2" value="2" <?php if ($values['Limbs']=="2")print'checked=""'; ?>"/>2
	        				</label>
	      				</div>
	      				<div class="form-check">
	      					<label class="form-check-label">
	          					<input type="radio" class="form-check-input" name="Limbs" <?php if ($errors['Limbs']) {print 'class="error"';} ?> id="3" value="3" <?php if ($values['Limbs']=="3")print'checked=""'; ?>"/>3
	        				</label>
	      				</div>
	      				<div class="form-check">
	      					<label class="form-check-label">
	          					<input type="radio" class="form-check-input" name="Limbs" <?php if ($errors['Limbs']) {print 'class="error"';} ?> id="4" value="4" <?php if ($values['Limbs']=="4")print'checked=""'; ?>"/>4
	        				</label>
	      				</div>
	      			</div>
      			</div>
      			<div class="my-2">
      				<div class="form-group">
      					<label for="exampleSelect2">Superpowers</label>
      					<select multiple="multiple" class="form-control" name="SP" <?php if ($errors['SP']) {print 'class="error"';} ?> value="<?php print $values['SP']; ?>"/>
        				<option>Great power</option>
       					<option>Invisibility</option>
				        <option>Absolute knowledge</option>
				        <option>Fundamental immortality</option>
				      </select>
				    </div>
      			</div>
      			<div class="my-2">
      				<div class="form-group">
      					<label>Biography</label>
      					<textarea class="form-control" name="BG" <?php if ($errors['BG']) {print 'class="error"';} ?> rows="3" value="<?php print $values['BG']; ?>"></textarea>
    				</div>	
      			</div>
      			<div class="my-2">
      				<div class="form-check">
        				<label><input class="form-check-input" type="checkbox" name="CH" <?php if ($errors['CH']) {print 'class="error"';} ?> value="Yes" <?php if ($values['CH']=="Yes")print'checked=""'; ?>"/>I got acquainted with the contract
        				</label>
      				</div>
      			</div>
      			<button type="submit" class="btn btn-primary">Send</button>
			</div>
		</form>
	</div>
</body>
</html>
