
<script>document.title = 'Technology'</script>

<div id="mainCarousel">
	<!-------------------------------------------------------------
	 MAIN:CAROUSEL 
	-------------------------------------------------------------->
	
	<div id="carousel-example-generic" class="carousel slide"
		data-ride="carousel">
		<?php
			$urlArticles0 = file_get_contents ( 'https://newsapi.org/v1/articles?source=new-scientist&sortBy=top&apiKey=82bd472141f34d36ba85c5389ff1fc16' );
			$infoAndArticlesArr0 = json_decode ( $urlArticles0, true );			
		?>
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0"
				class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		</ol>
	
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<?php echo '<img src="' . $infoAndArticlesArr0 ['articles'] [1] ['urlToImage'] . '" />';?>
				<div class="carousel-caption">
					<?php echo '<h3>' . $infoAndArticlesArr0 ['articles'] [1] ['title'] . '<h3/>';?>
					<div class="carBut">
						<a class="btn btn-theme btn-sm btn-min-block" href="<?= $infoAndArticlesArr0 ['articles'] [1] ['url']; ?>">Learn
							more</a> 
					</div>
				</div>
			</div>
			<div class="item">
				<?php echo '<img src="' . $infoAndArticlesArr0 ['articles'] [2] ['urlToImage'] . '" />';?>
				<div class="carousel-caption">
					<?php echo '<h3>' . $infoAndArticlesArr0 ['articles'] [2] ['title'] . '<h3/>';?>
					<div class="carBut">
						<a class="btn btn-theme btn-sm btn-min-block" href="<?= $infoAndArticlesArr0 ['articles'] [2] ['url']; ?>">Learn
							more</a> 
					</div>
				</div>
			</div>
			<div class="item">
				<?php echo '<img src="' . $infoAndArticlesArr0 ['articles'] [3] ['urlToImage'] . '" />';?>
				<div class="carousel-caption">
					<?php echo '<h3>' . $infoAndArticlesArr0 ['articles'] [3] ['title'] . '<h3/>';?>
					<div class="carBut">
						<a class="btn btn-theme btn-sm btn-min-block" href="<?= $infoAndArticlesArr0 ['articles'] [3] ['url']; ?>">Learn
							more</a> 
					</div>
				</div>
			</div>
			<div class="item">
				<?php echo '<img src="' . $infoAndArticlesArr0 ['articles'] [4] ['urlToImage'] . '" />';?>
				<div class="carousel-caption">
	
					<?php echo '<h3>' . $infoAndArticlesArr0 ['articles'] [4] ['title'] . '<h3/>';?>
					<div class="carBut">
						<a class="btn btn-theme btn-sm btn-min-block" href="<?= $infoAndArticlesArr0 ['articles'] [4] ['url']; ?>">Learn
							more</a> 
					</div>
				</div>
			</div>
	
		</div>
	
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic"
			role="button" data-slide="prev"> <span
			class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a> <a class="right carousel-control" href="#carousel-example-generic"
			role="button" data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>	
	
<div id="mainExceptCarousel">	
    <section id="mainSectionTop">	
    		<div id="articlesTop">
    			<h1>Latest articles</h1>
    			<hr />
				<?php
					$urlArticles = file_get_contents ( 'https://newsapi.org/v1/articles?source=new-scientist&sortBy=top&apiKey=82bd472141f34d36ba85c5389ff1fc16' );
					$infoAndArticlesArr = json_decode ( $urlArticles, true );
					
					for($ind = 0; $ind < count ( $infoAndArticlesArr ['articles'] ); $ind ++) {
		
						echo '<div class="articleContentTop">';
						
							echo '<a href="' . $infoAndArticlesArr ['articles'] [$ind] ['url'] . '">';
							echo '<img src="' . $infoAndArticlesArr ['articles'] [$ind] ['urlToImage'] . '" />';
							
							$titleLimit = substr($infoAndArticlesArr ['articles'] [$ind] ['title'], 0, 90);
							if (strlen($titleLimit) == 90){
								echo '<h4>' . $titleLimit . "...</h4></a><br />";
							} else {
								echo '<h4>' . $titleLimit . "</h4></a><br />";
							}
							
							echo '<p>' . $infoAndArticlesArr ['articles'] [$ind] ['publishedAt'] . '</p>';
						echo '</div>';
					}
				?>
				
        	</div>
    </section>
    <aside>
    	<h3>Trending</h3>
        <div id="asideDiv">
            <ul>
            	<?php
					$urlArticles2 = file_get_contents ( 'https://newsapi.org/v1/articles?source=ars-technica&sortBy=top&apiKey=82bd472141f34d36ba85c5389ff1fc16' );
					$infoAndArticlesArr2 = json_decode ( $urlArticles2, true );
					
					for($ind = 0; $ind < 8; $ind ++) {
		
						echo '<li>';
						
							echo '<a href="' . $infoAndArticlesArr2 ['articles'] [$ind] ['url'] . '">';
							echo '<img src="' . $infoAndArticlesArr2 ['articles'] [$ind] ['urlToImage'] . '" />';
							
							$titleLimit2 = substr($infoAndArticlesArr2 ['articles'] [$ind] ['title'], 0, 90);
							if (strlen($titleLimit2) == 90){
								echo '<h5>' . $titleLimit2 . "...</h5></a><hr /><br />";
							} else {
								echo '<h5>' . $titleLimit2 . "</h5></a><hr /><br />";
							}

						echo '</li>';
					}
				?>
                <li><a href="#">More...</a></li>

            </ul>
        </div>
     </aside>
     <section id="mainSectionBottom">   
		<div id="articlesBottom">
	    	<h1>More articles</h1>
	    		<hr />
				<?php
					$urlArticles3 = file_get_contents ( 'https://newsapi.org/v1/articles?source=t3n&sortBy=top&apiKey=82bd472141f34d36ba85c5389ff1fc16' );
					$infoAndArticlesArr3 = json_decode ( $urlArticles3, true );
					
					for($ind = 0; $ind < 8; $ind ++) {
		
						echo '<div class="articleContentBottom">';
						
							echo '<a href="' . $infoAndArticlesArr3 ['articles'] [$ind] ['url'] . '">';
							echo '<img src="' . $infoAndArticlesArr3 ['articles'] [$ind] ['urlToImage'] . '" />';
							
							$titleLimit3 = substr($infoAndArticlesArr3 ['articles'] [$ind] ['title'], 0, 90);
							if (strlen($titleLimit3) == 90){
								echo '<h5>' . $titleLimit3 . "...</h5></a><br />";
							} else {
								echo '<h5>' . $titleLimit3 . "</h5></a><br />";
							}

						echo '</div>';
					}
					
					$urlArticles4 = file_get_contents ( 'https://newsapi.org/v1/articles?source=polygon&sortBy=top&apiKey=82bd472141f34d36ba85c5389ff1fc16' );
					$infoAndArticlesArr4 = json_decode ( $urlArticles4, true );
					
					for($ind = 0; $ind < 8; $ind ++) {
							
						echo '<div class="articleContentBottom">';
							
						echo '<a href="' . $infoAndArticlesArr4 ['articles'] [$ind] ['url'] . '">';
						echo '<img src="' . $infoAndArticlesArr4 ['articles'] [$ind] ['urlToImage'] . '" />';
					
						$titleLimit4 = substr($infoAndArticlesArr4 ['articles'] [$ind] ['title'], 0, 90);
						if (strlen($titleLimit4) == 90){
							echo '<h5>' . $titleLimit4 . "...</h5></a><br />";
						} else {
							echo '<h5>' . $titleLimit4 . "</h5></a><br />";
						}
					
						echo '</div>';
					}
				?>
        </div>
	</section>  
</div>	    



