<?php $this->load->view('blog/header');?>
<body>

	<!-- header top starts-->
	<?php $this->load->view('blog/menu_top');?>
	<!-- header top ends here -->
	
	<!-- content starts -->
	<div id="content-outer" class="clear"><div id="content-wrapper">
	
		<!-- column-one -->
		<div id="content"><div class="col-one">
				
			<h2><a href="index.html">About Me</a></h2>
			
			<img src="<?php echo base_url(); ?>/assets/img/photo.jpg"/>
			
			<p>My name is Aggelos Nikolakopoulos i live and work at Greece,Athens.I have studied Computer Systems Engineering at Technological Educational Institute of Piraeus.Currently i am occupied with web development. </p>
                <p><strong>My yahoo email:</strong>:<br /><a href="">ang_nikola@yahoo.com</a></p>
                <p><strong>Messenger</strong>:<br /><a href="">anghel6@hotmail.com</a>
				
				
            <p>Thanks for viewing my tutorials! Happy coding!</p>
			
		</div></div>
		
		<!-- column-two -->
		<?php $this->load->view('blog/menu_sidebar');?>
		
		<!-- column-three -->
		<div class="col-three">
			
			<h3>Wise Words</h3>
			<p>&quot;If we know who we are, we will not try to become someone else in order to have
			value and meaning in our lives. If we don't know who we are, we will try to 
			become someone who someone else wants us to be.&quot; </p>
			
			<p class="align-right"> - Robert McGee</p>
					
			
			
		</div>	
	
	<!-- contents end here -->	
	</div></div>

	<!-- footer starts here -->	
	<?php $this->load->view('blog/footer');?>
	<!-- footer ends here -->

</body>
</html>
