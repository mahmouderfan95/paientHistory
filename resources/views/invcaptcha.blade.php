@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
  box-sizing: border-box;
}

body {
  margin: 0;
}

#container {
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
}

.clearfix {
  clear: both;
}

.hidden {
  display: none;
}

#user-info {
  border: 1px solid #CCC;
  clear: both;
  margin: 0 auto 20px;
  max-width: 400px;
  padding: 10px;
  text-align: left;
}

#photo-container {
  background-color: #EEE;
  border: 1px solid #CCC;
  float: left;
  height: 80px;
  margin-right: 10px;
  width: 80px;
}

#photo {
  height: 80px;
  margin: 0;
  width: 80px;
}

@media (max-width: 300px) {
  #photo-container,
  #photo {
    height: 40px;
    width: 40px;
  }
}
    </style>
    <script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
        <script>
            // Initialize Firebase
            var config = {
            apiKey: "AIzaSyAxpp29gpMYtii4gUTn7iz0EOIisNOJyoQ",
            authDomain: "laraveltesting-a97b8.firebaseapp.com",
            databaseURL: "https://laraveltesting-a97b8.firebaseio.com",
            projectId: "laraveltesting-a97b8",
            storageBucket: "laraveltesting-a97b8.appspot.com",
            messagingSenderId: "G-N2BHPZG2XF"
            };
            firebase.initializeApp(config);
        </script>
        <script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"></script>
        <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
</head>
<body>
    <div id="container">
        <h3>Firebase Phone Number Auth. Demo</h3>
        <div id="loading">Loading...</div>
        <div id="loaded" class="hidden">
          <div id="main">
            <div id="user-signed-in" class="hidden">
              <div id="user-info">
                <div id="photo-container">
                  <img id="photo">
                </div>
                <div id="name"></div>
                <div id="email"></div>
                <div id="phone"></div>
                <div class="clearfix"></div>
              </div>
              <p>
                <button id="sign-out">Sign Out</button>
                <button id="delete-account">Delete account</button>
              </p>
            </div>
            <div id="user-signed-out" class="hidden">
              <h4>You are signed out.</h4>
              <div id="firebaseui-spa">
                <h3>Single Page App mode:</h3>
                <div id="firebaseui-container"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="app.js"></script>
  </body>

</html>
