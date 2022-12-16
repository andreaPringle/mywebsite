<div id="foot">
  <p> © 2022 Little Levites. All Rights Reserved </p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
var pass1 = document.getElementById("pass1")
  , pass2 = document.getElementById("pass2");

function validatePassword(){
  if(pass1.value != pass2.value) {
    pass2.setCustomValidity("Passwords Don't Match");
  } else {
    pass2.setCustomValidity('');
  }
}

pass1.onchange = validatePassword;
pass2.onkeyup = validatePassword;
</script>
</body>
</html>