<html>
<head>
	<title>{{ $title }}</title>
    <link rel="stylesheet" href="template/assets/css/login.css">
</head>
<body>
    <?php 
    session_start();
    
    ?>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active"> Login Admin </h2>
      <!--     <h2 class="inactive underlineHover">Sign Up </h2> -->
      
          <!-- Icon -->
          <div class="fadeIn first">
      <!--       <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
          </div>
      
          <!-- Login Form -->
          <form action="{{ route('postlogin') }}" method="post">
            {{ csrf_field() }}
            @csrf
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>     
        </div>
      </div>

</body>
</html>