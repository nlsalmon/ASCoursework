<?php 
		require('includes/template_top.php'); 
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $recentFilms = $db->query("SELECT * FROM film ORDER BY theatricalRelease DESC LIMIT 5");

              			$count = 1;
              		
              			
              	    while ($recentFilm = $recentFilms->fetch_object()){
              		$data = file_get_contents("http://api.rottentomatoes.com/api/public/v1.0/movies/".$latestFilm->rt_id.".json?apikey=q3qkubq8mzhrh8zq9z2xw94e");
        			$data = json_decode($data);
        			
        			if ($count == 1) {
        			echo '<div class="item active">';
        			} else {
        			echo '<div class="item">';
        			}
        			echo '<div class="carousel-caption">';
        			echo $recentFilm->name;
        			echo '</div>';
        			echo '</div>';
        			$count++;
              		}
      ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
	require('includes/footer.html');
?>
