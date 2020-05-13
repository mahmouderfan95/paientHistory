
<!-- form login -->
<form action="{{route('loginRoute')}}" method="POST">
    {{ csrf_field() }}

    <p class="group">
      <input id="name" type="text" required name="email">
      <label for="name">Email or Phone Namber</label>
    </p>
    <p class="group">
      <input id="Password" type="password" required name="password">
      <label for="name">Password</label>
    </p><br/>
    <a class="text-forget" href="loginAbout.html">Forget Password?</a>
    <input type="submit" value="Submit">
  </form>
  <!-- form login -->
