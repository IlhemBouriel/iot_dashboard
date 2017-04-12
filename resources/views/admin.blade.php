<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>IOT App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            
            <header>
                <h1>Admin Form <span>for IOT devices</span></h1>
				<nav class="codrops-demos">
					<span>Choose a <strong>"task"</strong> to apply</span>
					<a href="add_dev" class="current-demo">Add</a>
					<a href="update_dev">Update</a>
					<a href="delete_dev">Delete</a>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="add" autocomplete="off" method="POST"> 
                            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <h1>Add iot device</h1> 
                                <p> 
                                    <label for="desc" class="uname" data-icon="p" > Description </label>
                                    <input id="username" name="desc" required="required" type="text" placeholder="Phone or Car ..."/>
                                </p>
                                <p> 
                                    <label for="adress" class="youpasswd" data-icon="p"> Device Adress</label>
                                    <input id="password" name="adress" required="required" type="text" placeholder="eg. 192.168.1.1" /> 
                                </p>
                                
                                <p class="login button"> 
                                 
									<a href="#toregister" class="other">Continue</a>
								
								</p>
                                <p class="change_link">
									Would you like to disconnect ?
									<a href="disconnect" class="other">Disconnect</a>
								</p>
                            
                        </div>

                        <div id="register" class="animate form">
                           
                                <h1> DataSource Info </h1> 
                                <p> 
                                    <label for="url" class="uname" data-icon="e">URL</label>
                                    <input id="usernamesignup" name="url" required="required" type="text" placeholder="mongodb://dbuser:dbpassword@domain:45039/dbname" />
                                </p>
                                <p> 
                                    <label for="user" class="youmail" data-icon="u" >UserName</label>
                                    <input id="emailsignup" name="user" required="required" type="text" placeholder="Root"/> 
                                </p>
                                <p> 
                                    <label for="pass" class="youpasswd" data-icon="p">Password</label>
                                    <input id="passwordsignup" name="pass" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                               
                                <p class="signin button"> 
									<input type="submit" value="Add IOT"/> 
								</p>
                                <p class="change_link">
									Would you like to disconnect ?
									<a href="disconnect" class="other">Disconnect</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>