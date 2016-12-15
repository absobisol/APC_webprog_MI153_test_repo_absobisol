<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['User_ID']); ?>
<style>

	<table>
        <tr>
            <td><label for="Name">Name</label></td>
               <td><input type="text" name="Name" placeholder="Name" required /></td>
        </tr>
        <tr>
            <td><label for="Nickname">Nickname</label></td>
            <td><input type="text" name="Nickname" placeholder="Nickname" required /></td>
        </tr>
		<tr>
            <td><label for="Email">Email</label></td>
           <td><input type="text" name="Email" placeholder="Email" required /></td>
        </tr>
		<tr>
            <td><label for="Home_Address">Home Address</label></td>
           <td><input type="text" name="Home Address" placeholder="Home Address" required /></td>
        </tr>
		<tr>
            <td><label for="Gender">Gender</label></td>
             <td><input type="text" name="Gender" placeholder="Gender" required /></td>
        </tr>
		<tr>
            <td><label for="Cp_Num">Cellphone number</label></td>
             <td><input type="text" name="Cp_Num" placeholder="Cellphone Number" required /></td>
        </tr>
		<tr>
            <td><label for="Comment">Comment</label></td>
            <td><textarea name="Comment" rows="5" cols="50"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="DONE" /></td>
        </tr>
    </table>
</form>
