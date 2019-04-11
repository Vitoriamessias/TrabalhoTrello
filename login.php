<html>
	<style type="text/css">
	    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
	    .login {
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
	    
	    .form #button {
	        font-family: "Roboto", sans-serif;
	        text-transform: uppercase;
	        outline: 0;
	        background: #645DD7;
	        width: 100%;
	        border: 0;
	        padding: 15px;
	        color: #FFFFFF;
	        font-size: 14px;
	        -webkit-transition: all 0.3 ease;
	        transition: all 0.3 ease;
	        cursor: pointer;
	    }
	    
	    .form #button:hover,
	    .form #button:active,
	    .form #button:focus {
	        background: #645DD7;
	    }
	    
	    .form .message {
	        margin: 15px 0 0;
	        color: #16a085;
	        font-size: 12px;
	    }
	    
	    .form .message a {
	        color: #4CAF50;
	        text-decoration: none;
	    }
	    
	    .form .registro {
	        display: none;
	    }
	    
	    body {
	        background: #16a085
	    }
	</style>	
	<body>
        <div class="login">
            <div class="form">
                <form class="login-formulario" method="POST" action="validar.php">
                    <font face="Courier New">Bem-vindo ao Organization</font>
                    <br>
                    <br>
                    <input type="email" placeholder="E-mail" name="usuario" required="required" />
                    <input type="password" placeholder="Senha" name="senha" required="required"/>
                    <input type="submit" id="button" value="Entrar" />
                </form>
            </div>
        </div>
    </body>
</html>
