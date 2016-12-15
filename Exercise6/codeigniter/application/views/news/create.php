<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
        <tr>
            <td><label for="Name">Name</label></td>
            <td><input type="text" name="Name" placeholder="Name" required /></td>
        </tr>
        <tr>
            <td><label for="Nickname">Nickname</label></td>
     <td><input type="Nickname" name="Home Address" placeholder="Nickname" required /></td>
        </tr>
		<tr>
            <td><label for="Email">Email</label></td>
            <td><input type="text" name="Email" placeholder="Email" required /></td>
        </tr>
		<tr>
            <td><label for="Home Address">Home Address</label></td>
           <td><input type="text" name="Home Address" placeholder="Home Address" required /></td>
        </tr>
		<tr>
            <td><label for="Gender">Gender</label></td>
            <td><input type="text" name="Gender" placeholder="Gender" required /></td>
        </tr>
		<tr>
            <td><label for="Cellphone Number">Cellphone number</label></td>
             <td><input type="text" name="Cellphone Number" placeholder="Cellphone Number" required /></td>
        </tr>
		<tr>
            <td><label for="Comment">Comment</label></td>
            <td><textarea name="Comment" rows="5" cols="50"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create Here!" /></td>
        </tr>
    </table>    
</form>
