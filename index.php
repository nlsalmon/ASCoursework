<?php 
		require('includes/template_top.php'); 
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->

    <?php 
           $recentFilms = $db->query("SELECT * FROM film ORDER BY theatricalRelease DESC LIMIT 5");
    ?>
 
    <?php
        if($recentFilms->num_rows > 0) {
          while($films = $recentFilms -> fetch_assoc()){
            $id[] = $films['id'];
            $filmName[] = $films['name'];
          }
        }
      ?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
          <div class="item active">
              <?php echo '<img src"http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/" .$id[0]. "_medium.jpg">' ?>;
          </div>
      </div>
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
