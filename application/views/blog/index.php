<?php $this->load->view('blog/header');?>
<body>

	<!-- header top starts-->
	<?php $this->load->view('blog/menu_top');?>
	<!-- header top ends here -->
	
	<!-- content starts -->
	<div id="content-outer" class="clear"><div id="content-wrapper">
	
		<!-- column-one -->
		<div id="content"><div class="col-one">
				
			
			<?php if( $posts ): foreach($posts as $post): ?>
			<a href="<?php echo base_url().'post/'.$post->entry_id;?>"><h2 style="font-size: 300%; color: black; font: bold 1em/1.5em "Trebuchet MS", Tahoma, Arial, Sans-serif; 
	padding: 15px 10px 5px 10px;
	margin: 0;"><?php echo ucwords($post->entry_name);?></h2></a>
			
			<p class="post-info">Posted by <a href="#"><?php $author = $this->ion_auth->user($post->author_id)->row(); echo ucfirst($author->username);?></a> | Filed under <?php $item = $this->blog_model->get_related_categories($post->entry_id); foreach($item as $category): ?><a href="<?php echo base_url().$category->slug;?>"><?php echo $category->category_name;?></a> <?php endforeach;?></p>
				
            <?php echo $post->entry_body;
?>
				
			<p class="postmeta">		
			<a href="<?php echo base_url().'post/'.$post->entry_id;?>" class="readmore">Read more</a> |
			<a href="<?php echo base_url().'post/'.$post->entry_id.'#comments';?>" class="comments">Comments (<?php echo $post->comment_count;?>)</a> |				
			<span class="date"><?php echo $post->entry_date;?></span>	
			</p>
			<?php endforeach; else: ?>
			<h2>No post yet!</h2>
			<?php endif;?>
			
		</div></div>
		
		<!-- column-two -->
		<?php $this->load->view('blog/menu_sidebar');?>
		
		<!-- column-three -->
		<?php $this->load->view('blog/sidebar');?>
	
	<!-- contents end here -->	
	</div></div>

	<!-- footer starts here -->	
	<?php $this->load->view('blog/footer');?>
	<!-- footer ends here -->

</body>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function(){
$("#show").css("display","none");
$("#show1").css("display","none");
$("#show2").css("display","none");
$("#show3").css("display","none");
$("#show4").css("display","none");
$("#show5").css("display","none");
$("#show6").css("display","none");
});
</script>
</head>
</html>
