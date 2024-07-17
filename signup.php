<html>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    background-color:   #6fb8ff;

}

#login{
    width: 420px;
    background-color: white;
    color: black;
    margin-top: -1px;
    
}

#login h3{
    font-size: 36px;
    text-align: center;
    margin-top: 10px;
}

#login .form-group{
    width: 90%;
    height: 50px;
    margin: 50px;
    margin-left: 20px;
    color: green;
}

.form-group input{
    width: 100%;
    height: 100%;
    background: white;
    border: none;
    outline: none;
    background-color: #fff;
    border: 2px solid grey;
    border-radius: 5px;
    margin: -30px auto;
}
    
#login .login{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
    color: black;
}


#login .login p a {
    text-decoration: none;
}

#login .login p a:hover{
    text-decoration: underline;
}


#login .form-group .btn-info{
    width: 100%;
    height: 45px;
    background: blue;
    border: none;
    cursor: pointer;
}
 </style>
<body>
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="/signup-func.php" method="post">
                        <h3 class="text-center text-info">Signup</h3>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="  Name">
                        </div>
                        <div class="form-group">
                            <input type="username" name="username" id="username" class="form-control" placeholder="  Username">
                        </div>
                        <div class="form-group">
                            <input type="age" name="age" id="age" class="form-control" placeholder="  Age">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="email" class="form-control" placeholder="  Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="  Password">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register"/><br>
                                <div class="login">
                                <p >Already have an account?<a href="/signing.php" class="text-info"-><strong> Go to login</strong></a></p>
                            </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>