<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
	<link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container">
      <?php
				 $attributes = array('id' => 'loginform','class'=>'form-1');
				 echo form_open('ChatApplicationController', $attributes); 
				?>
        <h1>Login</h1>
        <?php
				      if($this->session->flashdata('error'))
			          {
                ?>
						
						<p class="text-center error_diplay"><?php echo $this->session->flashdata('error'); ?>  </p>

					<?php
						}
            ?>
        <label for="name">Email</label>
        <input type="name" name="username" id="username" required />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
        <span>Forgot Password</span>
        <button>Login</button>

        <!-- .........///sign-up///.......... -->

        <p>Or SignUp Using</p>
        <div class="icons">
          <a href="https://www.facebook.com/" target="blank"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="https://twitter.com/" target="blank"
            ><i class="fab fa-twitter"></i
          ></a>
          <a href="https://mail.google.com/" target="blank"
            ><i class="fab fa-google"></i
          ></a>
        </div>
      <?php
					echo form_close();
			?>
    </div>
  </body>
</html>
