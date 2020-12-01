<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open_multipart('news/create'); ?>    
 
    <table>        
        <tr>
            <td><label for="title">Judul Kegiatan</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
        <tr>
            <td><label for="content">Deskripsi</label></td>
            <td><textarea name="content" rows="10" cols="40"></textarea></td>
        </tr>        
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Buat Artikel" /></td>
        </tr>
    </table>
    
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />    
</form>