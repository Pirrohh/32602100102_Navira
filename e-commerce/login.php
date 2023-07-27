

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <p class="tip">Click on button in image container</p>
    <div class="cont">
      <div class="form sign-in">
        <h2>Welcome back,</h2>
        <label>
          <span>Email</span>
          <input type="email" />
        </label>
        <label>
          <span>Password</span>
          <input type="password" />
        </label>
        <p class="forgot-pass">Forgot password?</p>
        <button type="button" class="submit">Sign In</button>
        <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
      </div>
      <div class="sub-cont">
        <div class="img">
          <div class="img__text m--up">
            <h2>New here?</h2>
            <p>Sign up and discover great amount of new opportunities!</p>
          </div>
          <div class="img__text m--in">
            <h2>One of us?</h2>
            <p>If you already has an account, just sign in. We've missed you!</p>
          </div>
          <div class="img__btn">
            <span class="m--up">Sign Up</span>
            <span class="m--in">Sign In</span>
          </div>
        </div>
        <div class="form sign-up">
        <form method="POST">
          <h2>Time to feel like home,</h2>
          <label>
            <span>Name</span>
            <input type="text" placeholder="name" name="name" required>
          </label>
          <label>
            <span>Email</span>
            <input type="email" placeholder="email" name="email" required>
          </label>
          <label>
            <span>Password</span>
            <input type="password" placeholder="password" name="password" required>
          </label>
          <button type="submit" class="submit"><a href="indexlog-sign.php">Sign Up</a></button>
          <button type="button" class="fb-btn">Join with <span>facebook</span></button>


</form>

        </div>
      </div>
    </div>
    
<script src="script.js"></script>   

</body>
</html>
