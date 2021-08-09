<?php
    $title = 'Index';
    require_once 'includes/header.php';
?>


<h1 class="text-center">Registration for IT conference</h1>

<form>

  <div class="mb-3">
    <label for="firstName" class="form-label">First name</label>
    <input type="text" class="form-control" id="firstName">
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lastName">
  </div>

  <div class="mb-3">
    <label for="birthday" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="birthday" >
  </div>

  <div class="mb-3">
    <label for="speciality" class="form-label">Speciality</label>
    <select class="form-control" name="speciality" id="speciality">
        <option value="">Database Admin</option>
        <option value="">Software Developer</option>
        <option value="">Web Administrator</option>
        <option value="">Other</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Contact number</label>
    <input type="text" class="form-control" id="phone" >
    <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>

  </div>

  <button type="submit" class="btn btn-primary ">Submit</button>
</form>

<?php
    require_once 'includes/footer.php';
?>