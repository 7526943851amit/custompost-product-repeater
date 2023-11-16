<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('#btn').click(function(e){
	 e.preventDefault();  
	var name = $('#fname').val();
	var lname = $('#lname').val();
	var email = $('#email').val();
	var age = $('#age').val();
	if(name === ""){
		$('#fname_error').text('First name is required');
	}
	else if((name.length<=4) && (name.length >=10)){
		$('#fname_error').text('First name is toos hot');
	}
	else {
		$('#fname_error').text('');
	}

	if(lname === ""){
		$('#lname_error').text('Last name is required');
	}
	else {
		$('#lname_error').text('');
	}

	if(email === ""){
		$('#email_error').text('Email is required');
	}
	else {
		$('#email_error').text('');
	}

	if(age === ""){
		$('#age_error').text('Age is required');
	}
	else {
		$('#age_error').text('');
	}
  });
});
</script>
</head>
<body>

<p>If you click on me, I will disappear.</p>
<input type="text"  id="fname" /><span id="fname_error"></span>
<input type="text"  id="lname" /><span id="lname_error"></span>
<input type="text"  id="email" /><span id="email_error"></span>
<input type="text"  id="age" /><span id="age_error"></span>
<button id="btn">My button</button>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#amit").keyup(function(){
  var amit=  $('#amit').val();
         $('#sharma').val(amit);
  });
});
</script>
</head>
<body>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<input type="text" id="amit">
<input type="text" id="sharma">
<button>Click me</button>

</body>
</html>
