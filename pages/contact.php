  <title>Contact Me - Luis Camacho</title>

  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <?php require '../config/NavBar.php'; ?>
  <div class="center">
    <div class="content">
      <center>
        <h3>Contact Me</h3>
        <div>
          <label><p>Email</p></label>
          <input type="text" id="email" placeholder="Enter your email..."><br>
        </div>
        <div class="clear"><br></div>
        <div>
          <label><p>Name</p></label>
          <input type="text" id="name" placeholder="Enter your name..."><br>
        </div>
        <div class="clear"><br></div>
        <div>
          <label><p>Subject</p></label>
          <input type="text" id="subject" placeholder="Enter subject...">
        </div>
        <div class="clear"><br></div>
        <div>
          <label><p>Message</p></label>
          <textarea cols="40" rows="5" id="message" placeholder="Enter your message..."></textarea>
        </div>
        <div class="clear"></div>
        <button id="emailSend">Send Email</button>
        <div class="hidden" id="successMessage"><h1>Your message has been sent!</h1></div>
        <div class="hidden" id="errorMessage"><h1>That's weird. Your message did not send please try again.</h1></div>
        <div class="hidden" id="beingSent"><h1>Sending...</h1></div>
      </center>
    </div>
  </div>
  <script type="text/javascript" src="../scripts/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#contact").addClass('active');
    })

    //When the button send email is clicked it will begin this function will then begin
    $('#emailSend').on('click', function(){

      //Checks to see if the email is valid and that none of the fields are blank.
      if ( !validateEmail($('#email').val()) )
        return alert("The email that you have entered is not valid.");
      else if ( $('#name').val() == '' )
        return alert("Please enter a name");
      else if ( $('#subject').val() == '' )
        return alert("Please enter a subject");
      else if ( $('#message').val() == '' )
        return alert("The message cannot be left empty. Please enter a message.");


      $('#beingSent').removeClass('hidden'); 
      $('#successMessage').addClass('hidden');
      $('#errorMessage').addClass('hidden');


      //After the first tests have passed it will then proceed to send the email using an
      //Ajax call that goes to sendEmail.php. When it is done it will show a success 
      //or error message
      $.ajax({
        url: "../php/sendEmail.php",
        type: 'POST',
        data: {
          email: $("#email").val(),
          name: $("#name").val(),
          subject: $("#subject").val(),
          message: $("#message").val(),
        },
      }).then( function(response) {

        $('#beingSent').addClass('hidden');

        if( response == 'true' )
          $('#successMessage').removeClass('hidden');
        else
          $('#errorMessage').removeClass('hidden');

      });
    });

    //Returns whether or not the email is valid using regex
    function validateEmail(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(String(email).toLowerCase());
    }
</script>