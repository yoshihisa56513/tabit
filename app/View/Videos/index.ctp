<?php echo $this->Html->link('旅動画を追加しよう',
	array('controller'=>'Videos',
		'action'=>'add'));
?>
<div class="videos index">




<h2><?php echo __('旅動画一覧');?></h2>


<br>


<br>

<table cellpadding="0" cellspacing="0">
<tr>
	
	
	
</tr>

<?php 
	foreach ($videos as $video):
	?>

	<tr>
		
		<td> <?php $this->Common->tmb($video['Video']['video_url']); ?></td>
	
	    <td><?php echo $this->Html->link($video['Video']['title'],'./view/'.$video['Video']['id']);?></td>
		<td><?php echo h($video['Video']['place']); ?></td>
		



	</tr>

	<?php endforeach; ?>
	</table>

</div>

