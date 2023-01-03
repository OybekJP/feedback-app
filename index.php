<?php include 'inc/header.php'          ?>

<?php 
//we have to set these vars to an empty string default. We used shortcut
$name = $email = $body = "";
//these will hold error messages to display when inputs are empty
$nameErr = $emailErr = $bodyErr = "";

//form submit. do the validation if submit button was clicked
if(isset($_POST['submit'])){
  //validate name
  if(empty($_POST['name'])){
    //if name wasn't inputted, assign error message to $nameErr var to display it somewhere
    $nameErr = 'Name is required';
  }
  else{
  //gets 'name' varibale send with post request and sanitize it (prevent script injection, etc.)
    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
  }

  //validate email
  if(empty($_POST['email'])){
    $emailErr = 'Email is required';
  }
  else{
    //get email and sanitize it
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
  }

  //validate body
  if(empty($_POST['body'])){
    $bodyErr = 'Body is required';
  }
  else{
    $body = filter_input(INPUT_POST,'body', FILTER_SANITIZE_SPECIAL_CHARS);
  }
}


?>
    <img src="img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>
    <!-- our action will submit form to the same file -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>

<?php include 'inc/footer.php' ?>