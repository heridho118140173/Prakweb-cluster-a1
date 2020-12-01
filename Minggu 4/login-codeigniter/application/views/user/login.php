
<p>
    <?php echo $this->session->flashdata('verify_msg'); ?>
</p>
<html>
<head>
    <title>Login118140173</title>
    <style>
        input[type=text], input[type=password] {
            padding: 12px 20px;
            margin: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: grey;
            color: white;
            padding: 12px 18px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.9;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 39%;
            margin-top: 16%;
        }
</style>
</head>
<body>

 
<?php $attributes = array("name" => "loginform");
echo form_open("user/login", $attributes);?>
<table>
    <tr>    
        <td><label for="username">Username</label></td>
        <td><input name="username" placeholder="Username" type="text" /> <span style="color:red"><?php echo form_error('username'); ?></span></td>
    </tr>    
    <tr>    
        <td><label for="subject">Password</label></td>
        <td><input name="password" placeholder="Password" type="password" /> <span style="color:red"><?php echo form_error('password'); ?></span></td>
    </tr>        
    <tr>    
        <td></td>
        <td><button name="submit" type="submit">Login</button></td>        
    </tr>
</table>    
<?php echo form_close(); ?>
 
<p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>
</body>
</html>