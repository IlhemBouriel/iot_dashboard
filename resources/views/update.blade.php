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
					<a href="update_dev" class="current-demo">Update</a>
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
                            @foreach ($devices as $device)
                          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{ $device->id }}" aria-expanded="false" aria-controls="collapseTwo">
          {{ $device->designation }}
        </a>
      </h4>
    </div>
    <div id="{{ $device->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       <form action="formUpdate" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <input type="hidden" name="id" value="{{ $device->id }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Device</label>
    <input type="text" name="desc" class="form-control" id="exampleInputEmail1" value="{{$device->designation}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">IP Adress</label>
    <input type="text" name="adress" class="form-control" id="exampleInputPassword1" value="{{$device->adresse_ip}}">
  </div>
 <div class="form-group">
    <label for="exampleInputPassword1">DataSource</label>
    <input type="text" name="url" class="form-control" id="exampleInputPassword1" value="{{$device->datasource()->first()->url}}">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">User Login</label>
    <input type="text" name="user" class="form-control" id="exampleInputPassword1" value="{{$device->datasource()->first()->user}}">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">User Password</label>
    <input type="text" name="pass" class="form-control" id="exampleInputPassword1" value="{{$device->datasource()->first()->password}}">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
      </div>
    </div>
  </div>

</div>
                            
                            @endforeach
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
            function update_item()
            {
                document.getElementById(id).style.display = " ";
            }
        </script>
    </body>
</html>