<?php
include ("configuracion.php");
include ("cabeza.php");?>
<table bgcolor="#DCDCDC" width="100%">
<tr><td>
<table  align="center" >
<tr>
<td valign="top">
	<center>
  <section class="lazy slider">
    <div>
      <img src="slide1.jpg">
    </div>
    <div>
      <img src="slide2.jpg">
    </div>
	    <div>
      <img src="slide3.jpg">
    </div>
  </section>
   </center>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center-4").slick({
        dots: true,
		autoplay: true,
		autoplaySpeed: 50,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
		autoplay: true,
				autoplaySpeed: 50,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
		autoplay: true,
				autoplaySpeed: 50,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,

      });
      $(".vertical").slick({
        dots: true,
		autoplay: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
		autoplay: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
		autoplay: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
		autoplay: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>
</td>
</tr>
</table>
<img align="left" src="titulo-ultimo.jpg">
<br><br><br>
<?php
  $sql = "select * from l19030111 Order by titulo DESC Limit 0,5  ";		
	echo '<center>';
	echo '<table>';             
	echo '<tr><td>';
		echo '<table cellspacing="8" cellpadding="21">';
			echo '<tr>';		
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<td valign="top">';
			echo '<a href="ver.php?id='.$row["id"].'">';
			echo '<img src="'.$row["caratula"].'" width="250"></a><br>';
			echo '<font size="4"><center><p>'.$row["titulo"].'<br></p><center>';
			echo '<center><p>'.$row["autor"].'<br></p><center></font>';					
			//echo $row["pelicula"].'<br>';
	
			} 
  	}	
			echo '</td>';
			echo '</tr>';
			echo '</table>';
	
		echo '</tr>';
	echo '</table>';
	echo '</center>';
	include ("pie.php");
?>
</td>
</tr>
</td>
</tr>
</table>