<div class="login-page">
<center><img width="100" src="https://image.flaticon.com/icons/svg/189/189083.svg" alt=""></center>

<div class="form" action="/backend">
  <form class="register-form">
    <input type="text" placeholder="nombre"/>
    <input type="password" placeholder="contraseña"/>
    <input type="text" placeholder="email"/>
    <button>Entrar</button>
    <p class="message">Already registered? <a href="#">Entrar</a></p>
  </form>
  <form class="login-form" action="/backend">
    <input type="text" placeholder="usuario"/>
    <input type="password" placeholder="contraseña"/>
    <button>Entrar</button>
    <p class="message">No estas Registrado? <a href="#">Crea una Cuenta</a></p>
  </form>
</div>
</div>

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #666666;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #207ce5;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #207ce5;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #666666; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #666666, #207ce5);
  background: -moz-linear-gradient(right, #666666, #207ce5);
  background: -o-linear-gradient(right, #666666, #207ce5);
  background: linear-gradient(to left, #666666, #207ce5);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>

<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>