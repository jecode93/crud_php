<?php
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>


<h1 class="text-center">Registration for IT conference</h1>

<form method="post" action="success.php">

  <div class="mb-3">
    <label for="firstName" class="form-label">First name</label>
    <input name="firstName" type="text" class="form-control" id="firstName">
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">Last name</label>
    <input name="lastName" type="text" class="form-control" id="lastName">
  </div>

  <div class="mb-3">
    <label for="birthday" class="form-label">Date of Birth</label>
    <input name="birthday" type="date" class="form-control" id="birthday" >
  </div>

  <div class="mb-3">
    <label for="speciality" class="form-label">Speciality</label>
    <select class="form-control" name="speciality" id="speciality">
        <option value="1">Database Admin</option>
        <option value="2">Software Developer</option>
        <option value="3">Web Administrator</option>
        <option value="4">Other</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Contact number</label>
    <input name="phone" type="text" class="form-control" id="phone" >
    <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>

  </div>

  <button name="submit" type="submit" class="btn btn-primary ">Submit</button>
</form>

<?php
    require_once 'includes/footer.php';
?>