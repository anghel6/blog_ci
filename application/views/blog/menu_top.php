	<div id="header-wrap">			
				
		<div id="header-photo">
		<img alt="header photo" src="<?php echo base_url();?>assets/img/computer.jpg" width="890" height="290" />
		<p style="font-size: 23px" id="intro"><a href="#">Click here to download the sourcecode of the blog</a></p>		

		</div>
		
		<h1 id="logo-text" ><a href="<?php echo base_url();?>" title="" style="font-size: 38px">This is a Tutorial Blog Written in PHP CodeIgniter</a></h1>
		
		
		<div id="nav">
			<ul>
				<li <?php echo ( isset($current) && $current === 'HOME' ) ? 'id="current"' : ''?>><a href="<?php echo base_url();?>">Home</a></li>
				<li <?php echo ( isset($current) && $current === 'ABOUT' ) ? 'id="current"' : ''?>><a href="<?php echo base_url();?>about">About me</a></li>
				
				
			</ul>		
		</div>
		
		<form id="quick-search" action="index.html" method="get" >
			<p>
			<label for="qsearch">Search:</label>
			<input class="tbox" id="qsearch" type="text" name="qsearch" value="Search this site..." title="Start typing and hit ENTER" />
			<input class="btn" type="submit" value="Submit" />
			</p>
		</form>				
	</div>
