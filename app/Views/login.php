<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <title>Correspondencia/Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            

            
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css"/>
            <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css"/>
            <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css"/>
            <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css"/>
            <link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css"/>
            <link rel="stylesheet" href="assets/stylesheets/theme.css"/>
            <link rel="stylesheet" href="assets/stylesheets/skins/default.css"/>
            <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">
            <link rel="stylesheet" href="assets/stylesheets/skins/square-borders.css"/>
            <script src="assets/vendor/modernizr/modernizr.js"></script>
            <script src="assets/vendor/jquery/jquery.js"></script>

	<link rel="shortcut icon" href="public/icon.png"><!-- icono -->
    </head>
    <body>
        <!-- start: page -->
	<section class="body-sign appear-animation" data-appear-animation="fadeInRight">
		<div class="center-sign">

			<div class="errors-container"></div>

			<div class="panel panel-sign">
				<div class="panel-title-sign mt-xl text-right">
					<h4 class="title text-uppercase m-none"><i class="fa fa-user mr-xs"></i>LogIn</h4>
				</div>

				<div class="panel-body">	
					<div class="text-center">
						
						<h4 class="fst-italic fw-bolder">login</h4>
						
					</div><hr>

					<form action="<?php echo base_url('/login')?>" method="post" id="login">
						<div class="form-group mb-lg">
							<label>Usuario</label>
							<div class="input-group input-group-icon">
								<input name="usuario" id="usuario" type="text" placeholder="Usuario" class="form-control input-lg"/>
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-user"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="form-group mb-lg">
							<div class="clearfix">
								<label class="pull-left">Password</label>
							</div>
							<div class="input-group input-group-icon">
								<input name="password" type="password" id="password" placeholder="Password" class="form-control input-lg"/>
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-lock"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12 text-right">
								<button  class="btn btn-primary hidden-xs"><i class="fa fa-sign-in mr-xs"></i> ACCEDER</button>
								<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">
									<i class="fa fa-sign-in mr-xs"></i> Log In</button>
							</div>
						</div>

						<hr class="solid">
						<div class="text-center">
						<a href="mailto:edgar_lopezv@hotmail.com?Subject=Sistema correspondencia">Contacto: edgar_lopezv@hotmail.com</a>
						</div>
					</form>
				</div>
				<p class="text-center text-muted mt-md mb-md">Copyright &copy; Lic.Edgar Lopez Valverde</p>
			</div>

		</div>
	</section>
	<!-- end: page -->


	<script type="text/javascript">
		jQuery( document ).ready( function ( $ ) {
			// Login Form & Validation
			$( "form#login" ).validate( {
				rules: {
					usuario: {
						required: true,
						usuario: true
					},

					password: {
						required: true
					}
				},

				messages: {
					usuario: {
						required: 'Ingresa tu usuario.'
					},

					password: {
						required: 'Ingresa tu password.'
					}
				},

				// Form Processing via AJAX
				/*submitHandler: function ( form ) {
					// Send data to the server	
					$.ajax( {
						url: '<?php echo base_url()?>index.php?login/ajax_login',
						method: 'POST',
						dataType: 'json',
						data: {
							email: $( form ).find( '#email' ).val(),
							password: $( form ).find( '#password' ).val(),
						},
						success: function ( response ) {
							// Remove any alert
							$( ".errors-container .alert" ).slideUp( 'fast' );

							// Login status [success|invalid]
							if ( response.login_status == 'success' ) {
								var redirect_url = '<?php echo base_url()?>';

								if ( response.redirect_url && response.redirect_url.length ) {
									redirect_url = response.redirect_url;
								}
								window.location.href = redirect_url;
							} else {

								$( ".errors-container" ).html( '<div class="alert alert-primary" style="background-color: #cc3f44;">\
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\<strong>Error</strong><br/>Usuario y/o contraseña incorrectos, intente nuevamente\
								</div>' );
								$( ".errors-container .alert" ).hide().slideDown();

							}
						}
					} );

				}*/
			} );

		} );
	</script>

<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
	<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
	<script src="assets/vendor/jquery-appear/jquery-appear.js"></script>
	<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
	<script src="assets/javascripts/theme.js"></script>
	<script src="assets/javascripts/theme.custom.js"></script>
	<script src="assets/javascripts/theme.init.js"></script>

        <!--
        <div class="container">
            <div class="row">
                <div class="col-sm-4"> 
                </div>
                <div class="col-sm-4"> 
                <h1>Sistema de Correspondencia</h1> 
                <h2>Login</h2>
                    <form action="<?php echo base_url('/login')?>" method="POST">
                    <input class="form-control" placeholder="Usuario" name="username" type="text" required="">
                    <br>
                    <input class="form-control" placeholder="Contraseña" name="password" type="password"  required="">
                    <br>
                    <button class="btn btn-primary">ACCEDER</button>
                    </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    -->    
    </body>
</html>