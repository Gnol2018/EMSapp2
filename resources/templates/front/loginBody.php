<body>

<div class="wrapper fadeInDown">
<h2></h2>
   <?php display_message();?>
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/usericon.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
   
    <form method="POST" >
      <?php userLogin(); ?> 
      <input type="text" id="login" class="fadeIn second" name="userName" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" name="loginSubmit" value="Log In">
    </form>
	
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<script type="text/javascript">

</script>
</body>
