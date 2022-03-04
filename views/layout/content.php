<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nội dung</title>
    <link rel="stylesheet" href="./style/css/content.css">
</head>
<body>
		
	<div id="wrapper">
		<main>
			<div id="content">
				<div class="innertube">
					<img id="bia" src="./style/img/ss.png" alt="">
					<h2>Bản tin</h2>
				<div class="news">
					<?php
					$stt= 1;
					foreach($data as $key => $value) {?>
						<div class="new_items">
							<!-- <img src="" alt=""><?php echo $value['img']?> -->
							
							<img class="s" src="./style/img/<?php echo $value['img']?>" alt="">
							<h3>
								<a href="?action=news&id=<?php echo $value['id'];?>" class="title"><?php echo $value['name']?></a>
							</h3>
							<p>
								<?php echo substr($value['content'],0,400)?>
							</p>
							<span>
								<small>
									<address>
										<ins>
											<?php echo substr($value['author'],0 ,50) ?>
										</ins>
								</address>

								<?php echo $value['created_date']?>
								</small>
								
							</span>
						</div>
					<?php 
						$stt++;
					}
					?>
				</div>
				<?php
					include_once './views/layout/brand.php';
				?>
				</div>
			</div>
		</main>
		<nav>
			<div class="nav">
				<h3>Right heading</h3>
				<ul>
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
					<li><a href="#">Link 4</a></li>
					<li><a href="#">Link 5</a></li>
				</ul>
				<h3>Right heading</h3>
				<ul>
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
					<li><a href="#">Link 4</a></li>
					<li><a href="#">Link 5</a></li>
				</ul>
				<h3>Right heading</h3>
				<ul>
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
					<li><a href="#">Link 4</a></li>
					<li><a href="#">Link 5</a></li>
				</ul>
			</div>
			</nav>
	
	</div>
</body>
<style>
	.innertube h2{
		text-align: center;
		font-family:'Times New Roman', Times, serif;
		font-size: 40px;
		font-weight: bold;
		padding: 1.5rem 0;
	}
	.news{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}
	.new_items{
		width: 95%;
		height: 155px;
		padding: 1rem;
		border: green 2px solid;
	}	
	.new_items:nth-child(n+2){
		border-top:none;
	}
	.new_items h3 a{
		text-decoration: none;
		color: black;
		display: inline;
		/* transition:ease ; */
	}
	.new_items:hover h3 a{
		color: green;
	}
	.new_items p{
		margin: .7rem 0;
		cursor:default;
	}
	.new_items span{
		display: block;
	}
	.new_items span address{
		float: left;
		margin-right: .5rem;
	}
	.s{
		float: left;
		width: 200px;
		height:100% ;
		margin-right: 1rem;
	}
	#bia{
		width: 100%;
		height: auto;
	}
	.nav{
		padding: 1.5rem 2rem;
	}
</style>
</html>