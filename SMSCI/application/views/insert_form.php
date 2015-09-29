<!doctype html>

<html lang="en">
<head>
    <title><!-- Insert your title here --></title>
    <style>
        #success
        {
            background-color: green;
        }
    </style>
</head>
<body>
    <?php  echo form_open('insert/insert_form'); ?>
    <table>
        <tr>
            Status Name:<td><input type="text" name="status"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
    <img src="<?php echo base_url('image/DefaultFemale.png'); ?>">
    
    <?php if(isset($message)): ?>
        <div id="success">
            <?php echo $message; ?>
            
        </div>
    <?php endif; ?>
    <?php echo form_close(); ?>
</body>
</html>
