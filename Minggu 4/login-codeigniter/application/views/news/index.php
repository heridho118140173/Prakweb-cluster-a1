<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td align="center"><strong>Judul kegiatan</strong></td>
        <td align="center"><strong>Deskripsi</strong></td>
        <td align="center"><strong>Aksi</strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['title']; ?></td>
            <td><?php echo $news_item['content']; ?></td>
            <td>
                
                <?php if ($this->session->userdata('is_logged_in')) { ?>
                
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                <?php }?>
                
            </td>
        </tr>
<?php endforeach; ?>
</table>