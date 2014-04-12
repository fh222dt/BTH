<?php $title='Roulette'; include(__DIR__ . '/header.php'); ?>

<div id='flash'>
<h4>Roulette</h4>

<div id='table'></div>

<div id='status'>
	<form>
		<label>Bankroll: <input id='bankroll' type='number' value='100' /></label>
		<label>Bet: <input id='bet' type='number' value='10' /></label>
		<label>Color: 
			<select id='color'>
				<option value='green'>Green</option>
				<option value='red'>Red</option>
				<option value='black'>Black</option>
			</select>
		</label>
		<input id='button' type='button' value='Roll' />
	</form>
</div>
<div id='log'></div>

</div>
 
<?php $path=__DIR__; include(__DIR__ . '/footer.php'); ?>