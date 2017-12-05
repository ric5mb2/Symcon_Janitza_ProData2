$(function(){
	var $write = $('#write'),
		shift = false,
		capslock = false;
		

	// Function um Parameter aus der URi zu holen
	function get_url_param( name )
	{
		name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");

		var regexS = "[\\?&]"+name+"=([^&#]*)";
		var regex = new RegExp( regexS );
		var results = regex.exec( window.location.href );

		if ( results == null )
			return "";
		else
			return results[1];
	}

	// Parameter ipsValue aus URi lesen
	ipsValue = get_url_param('ipsValue');

	var anon = function() 
	{
		$write.html("Werner");
	}
	

	
	$('#keyboard li').click(function(){
		var $this = $(this),
			character = $this.html(); // If it's a lowercase letter, nothing happens to this variable
		
		// Shift keys
		if ($this.hasClass('left-shift') || $this.hasClass('right-shift')) {
			$('.letter').toggleClass('uppercase');
			$('.symbol span').toggle();
			
			shift = (shift === true) ? false : true;
			capslock = false;
			return false;
		}
		
		// Caps lock
		if ($this.hasClass('capslock')) {
			$('.letter').toggleClass('uppercase');
			capslock = true;
			return false;
		}
		
		// Delete
		if ($this.hasClass('delete')) {
			var html = $write.html();
			
			$write.html(html.substr(0, html.length - 1));
			return false;
		}
		
		// Special characters
		if ($this.hasClass('symbol')) character = $('span:visible', $this).html();
		if ($this.hasClass('space')) character = ' ';
		if ($this.hasClass('tab')) character = "\t";
		if ($this.hasClass('return')) character = "\n";
		
		// Uppercase letter
		if ($this.hasClass('uppercase')) character = character.toUpperCase();
		
		// Remove shift once a key is clicked.
		if (shift === true) {
			$('.symbol span').toggle();
			if (capslock === false) $('.letter').toggleClass('uppercase');
			
			shift = false;
		}
	
		// Senden
		if ($this.hasClass('senden')) {
			var html = $write.html();
			
						xhReq = new XMLHttpRequest;
						xhReq.open("POST","keyboard-receive.php",true);
						xhReq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						action = "value=" + $write.html();
						action += "&ipsValue=" + ipsValue;
						xhReq.send(action);
						// Eingabefeld der Tastatur löschen
						$write.html(html.substr(0, html.length - html.length));

						skipThis = false;
						
			return false;
		}

	
		// Add the character
		$write.html($write.html() + character);
		setTimeout(function() {
			$write.html("");
		}, 10000);


	});
});