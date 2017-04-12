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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- BootStrap -->
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            
            <header>
                <h1>Admin Form <span>for IOT devices</span></h1>
				<nav class="codrops-demos">
					<span>Choose a <strong>"task"</strong> to apply</span>
					<a href="add_dev">Add</a>
					<a href="update_dev">Update</a>
					<a href="delete_dev" class="current-demo">Delete</a>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper" style="width: 600px;">
                        <div id="login" class="animate form">
                         <div class="table-responsive">
                            <table class="table table-hover">
                            <tr>
                             <td>Device</td>
                             <td>Adress IP</td>
                             <td>DataSource User</td>
                             <td></td>
                         </tr>
                            @foreach ($devices as $device)
                            <tr id="{{ $device->id }}">
                                <td>
                                    {{ $device->designation }}
                                </td>
                                <td>
                                    {{ $device->adresse_ip }}
                                </td>
                                <td>
                                    {{ $device->datasource()->first()->user }}
                                </td>
                                <td>
                                    <button type="button" onclick="delete_item({{ $device->id }})" class="btn btn-xs btn-danger">Delete</button>
                                </td>
                            </tr>
                            
                            @endforeach
                           </table>

                        </div>
                        <p class="change_link">
                                    Would you like to disconnect ?
                                    <a href="disconnect" class="other">Disconnect</a>
                                </p>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>


        <script type="text/javascript">
            function delete_item(id)
            {  
                $.ajax({
               url : 'delete_ajax',
               type : 'GET',
               data : {'id':id},
               success : function(code_html){ 
                 document.getElementById(id).style.display = "none";
               }
                });
               
            }
        </script>
    </body>
</html>