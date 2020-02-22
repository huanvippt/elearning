<style>
form {
    border: 3px solid #f1f1f1;
    width: 50%;
    margin-left: 25%;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
h3{
    text-align: center;
    font-weight: bold;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 50%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<form action="" method="POST">
  <div class="imgcontainer">
    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <h3>Nhập thông tin Admin</h3>
    <label><b>Username</b></label>
    <input type="text" name="username" placeholder="Tên đăng nhập"  id="username">

    <label><b>Password</b></label>
    <input type="text" name="password" placeholder="Mật khẩu" id="password">
        
    <button type="submit" name="submit" id="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
