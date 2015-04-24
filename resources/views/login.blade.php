<div id="loginForm" style="margin-top: 30%;text-align: center;padding: 50px;background-color: #8E8E8E;">
<form   role="form" method="POST" action="{{ url('/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label >E-Mail Address</label>
            <input type="email" name="email" value="{{ old('email') }}">
            <label>Password</label>
            <input type="password"  name="password">
            <button type="submit" >Login</button>
      </form>

</div>