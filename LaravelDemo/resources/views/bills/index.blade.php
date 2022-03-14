<?php

?>


<body>
	<div id="page-wrap">
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="{{route('bills.calculate_bill')}}" method="post" id="quiz-form">
			@csrf
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" value="{{  isset($units) ? $units : '' }}"/>
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

	</div>

	<input type="text" name="amount" id="amount" value="{{ isset($result_bill) ? $result_bill : '' }}"/>
</body>
</html>