<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
        <tr>
            <td><label for="Name">Name</label></td>
            <td><textarea name="Name" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td><label for="Nickname">Nickname</label></td>
            <td><textarea name="Nickname" rows="10" cols="40"></textarea></td>
        </tr>
		<tr>
            <td><label for="Email">Email</label></td>
            <td><textarea name="Email" rows="10" cols="40"></textarea></td>
        </tr>
		<tr>
            <td><label for="Home Address">Home Address</label></td>
           <td><input type="text" name="Home Address" placeholder="Home Address" required /></td>
        </tr>
		<tr>
            <td><label for="Gender">Gender</label></td>
            <td><textarea name="Gender" rows="10" cols="40"></textarea></td>
        </tr>
		<tr>
            <td><label for="Cellphone Number">Cellphone number</label></td>
             <td><input type="text" name="Cellphone Number" placeholder="Cellphone Number" required /></td>
        </tr>
		<tr>
            <td><label for="Comment">Comment</label></td>
            <td><textarea name="Comment" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create Here!" /></td>
        </tr>
    </table>    
</form>
