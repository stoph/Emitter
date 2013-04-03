Emitter
=======

Sample code for a basic event system

	$hooks	= new Emitter();
	
	$hooks->on('arrival', function($person) {
		echo "Welcome $person to the party.";
	});
	$hooks->on('arrival', function($person) {
		echo "Get $person a drink!";
	});
	$hooks->on('departure', function($person) {
		echo "$person just left.";
	});
	
	
	$hooks->emit('arrival', array('John'));
	$hooks->emit('arrival', array('Jane'));
	$hooks->emit('departure', array('John'));
	$hooks->emit('departure', array('Jane'));