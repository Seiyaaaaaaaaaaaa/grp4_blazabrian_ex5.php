<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="register.css"> 
</head>
<body>
    <h1>Be Part of the Group 4</h1>
    <form id="registerForm" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <select id="age" name="age" required></select> 
    </div>
    <div class="form-group">
        <label for="bio">Bio:</label>
        <textarea id="bio" name="bio" rows="4" cols="50" required></textarea>
    </div>
    <div class="form-group">
        <label for="email">Email (Gmail only):</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="image">Select Profile Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
    </div>
    
    <input type="submit" value="Register">
</form>
