
<?php 
$title = 'Index';
require_once 'includes/header.php';?>

<!-- first name, last name, birth, specialty, phone -->
    
        <h1 class="text-center">Registration for IT Conference</h1>
<form>
  <div class="form-group">
    <label for="firstname" >First Name</label>
    <input type="text" class="form-control" id="firstname">
  </div>

  <div class="form-group">
    <label for="lastname" >Last Name</label>
    <input type="text" class="form-control" id="lastname">
  </div>
    
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="text" class="form-control" id="dob">
  </div>

  <div class="form-group">
    <label for="specialty">Area of Expertise</label>
    <select class="form-select" id="specialty">
        <option selected>Open this select menu</option>
        <option value="1 ">Database admin</option>
        <option value="2">Software Developer</option>
        <option value="3">Web Administrator</option>
        <option value="4">Other</option>
    </select>
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" 
    aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

</div>

<div class="form-group">
    <label for="phone ">Contact number</label>
    <input type="text" class="form-control" id="phone" 
    aria-describedby="phoneHelp" >
    <small id="phoneHelp" class="form-text text-muted">
    We'll never share your number with anyone else.</small>
    
</div>

<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Submit</button>
</div>

<br>   
<br>   
<br> 
<br>
<br>         
<?php require_once 'includes/footer.php';?>
    

   