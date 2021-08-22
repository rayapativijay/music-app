<?php
	require 'dbconfig/config.php';
?><html>
<head>
 <link rel="stylesheet" href="css/demo.css">
</head>
<div class='signup-container'>
  <div class='left-container'>
    <h1>
      <i class='fas fa-paw'></i>
      MUSIQUE
    </h1>
    <div class='puppy'>
      <img align="center" src=img/demo.jpg>
    </div>
  </div>
  <div class='right-container'>
    <header>
      <h1></h1>
      <div class='set'>
        <div class='pets-name'>
          <label for='pets-name'>Name</label>
          <input id='pets-name' placeholder="user name" type='text'>
        </div>
        <div class='pets-photo'>
          <button id='pets-upload'>
            <i class='fas fa-camera-retro'></i>
          </button>
          <label for='pets-upload'>Upload a photo</label>
        </div>
      </div>
      <div class='set'>
        <div class='pets-breed'>
          <label for='pets-breed'>Surname</label>
          <input id='pets-breed' placeholder="Surname" type='text'>
        </div>
        <div class='pets-birthday'>
          <label for='pets-birthday'>Birthday</label>
          <input id='pets-birthday' placeholder='MM/DD/YYYY' type='text'>
        </div>
      </div>
      <div class='set'>
        <div class='pets-gender'>
          <label for='pet-gender-female'>Gender</label>
          <div class='radio-container'>
            <input checked='' id='pet-gender-female' name='pet-gender' type='radio' value='female'>
            <label for='pet-gender-female'>Female</label>
            <input id='pet-gender-male' name='pet-gender' type='radio' value='male'>
            <label for='pet-gender-male'>Male</label>
          </div>
        </div>
        <div class='pets-spayed-neutered'>
          <label for='pet-spayed'>Country</label>
          <div class='radio-container'>
            <input checked='' id='pet-spayed' name='spayed-neutered' type='radio' value='spayed'>
            <label for='pet-spayed'>Indian</label>
            <input id='pet-neutered' name='spayed-neutered' type='radio' value='neutered'>
            <label for='pet-neutered'>NRI</label>
          </div>
        </div>
      </div>
      <div class='pets-weight'>
        <label for='pet-weight-0-25'>Weight</label>
        <div class='radio-container'>
          <input checked='' id='pet-weight-0-25' name='pet-weight' type='radio' value='0-25'>
          <label for='pet-weight-0-25'>0-50 lbs</label>
          <input id='pet-weight-25-50' name='pet-weight' type='radio' value='25-50'>
          <label for='pet-weight-25-50'>50-100 lbs</label>
          <input id='pet-weight-50-100' name='pet-weight' type='radio' value='50-100'>
          <label for='pet-weight-50-100'>100-150 lbs</label>
          <input id='pet-weight-100-plus' name='pet-weight' type='radio' value='100+'>
          <label for='pet-weight-100-plus'>150+ lbs</label>
        </div>
      </div>
    </header>
    <footer>
      <div class='set'>
       <a href="display_user.php"> <button id='back'>Back</button></a>
        <button id='next'>Post</button>
      </div>
    </footer>
  </div>
</div>

		</html>
     