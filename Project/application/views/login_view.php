<!DOCTYPE>
<html >
  <head>
<?php $this->load->helper('url');?>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>stylem.css">
    <title>Login</title>
  <h1>database</h1>
  </head>

  <body>
  <div class="page-wrap">
    <?php echo form_open('verifylogin'); ?>
      <label for="username">Username:</label>
      <input type="text" size="20" id="username" name="username"/>
      <br/>
      <label for="password">Password:</label>
      <input type="password" size="20" id="passowrd" name="password"/>
      <br/>
      <input type="submit" value="Login"/>
<div class="red"><?php echo validation_errors(); ?></div>   
 </form>
</div>
  </body>
<footer>
Copyright ©database.com
</footer>

</html>
