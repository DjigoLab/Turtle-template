
function submitdata()
{
 var name= $("#usr-name");
 var email= $("#usr-age");
 var message= $("#usr-msg");

 $.ajax({
  type: 'post',
  url: '../app/src/contact-form.php',
  data: {
   usr_name:name,
   usr_age:age,
   usr_msg:message
  },
  success: function (response) {
   $('#usr-msg').html("SENT");
  }
 });
	
 return false;
}

