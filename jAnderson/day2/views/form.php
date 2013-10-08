<form action="?action=process" method="post">
	<input type="text" name="name" value="" placeholder="Name">
	<input type="text" name="address" value="" placeholder="Address">
	<input type="text" name="email" value="" placeholder="Email">

	<div class="radioGroup">
	<p>How many pets have you had?</p>
		<input type="radio" name="howManyPets" value="zero"> 0
		<input type="radio" name="howManyPets" value="one"> 1
		<input type="radio" name="howManyPets" value="two"> 2
		<input type="radio" name="howManyPets" value="twoplus"> More than 2
	</div>

	<div class="selection">
		<p>Whats your favorite number between 1 and 10?</p>
		<select name="favNum" id="favNum">
			<option> Favorite Number </option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>
	</div>

	<div class="checkBox">
		<p>Do you own a bike or car?</p>
		<input type="checkbox" name="vehicle" value="Bike">I have a bike
		<input type="checkbox" name="vehicle" value="Car">I have a car
		<input type="checkbox" name="vehicle" value="None">I don't own any
	</div>

	<div class="favBrowser">
		<p>From the list, what is your fav browser?</p>
		<input list="browsers">

		<datalist id="browsers">
		  <option value="Internet Explorer">
		  <option value="Firefox">
		  <option value="Chrome">
		  <option value="Opera">
		  <option value="Safari">
		</datalist>
	</div>

	<div class="favWebsite">
		<label for="website_url">Favorite Website</label>
		<input type="text" name="website_url" value="" id="website_url" placeholder="Enter URL">
	</div>



	<input type="submit" name="submit" value="Submit" />
</form>