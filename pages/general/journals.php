<?php
	include '../../connect/connection.php'
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../style/style.css">
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-colors-flat.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../lib/font-awesome.min.css">
		<link rel="stylesheet" href="../../lib/font-awesome.css">

		<style>
            #booktable{
				margin-top: 1%;
			}
			#searchNsort{
				float:right;
				display:block;
				margin-top:2%;
				margin-right:1%;
			}
			select{
				width:75px;
				margin-left:15px;
				margin-right:15px;
			}
			#titleContent{
				float:left;
				display:block;
			}
		</style>
	</head>
	<body>
		<?php
			include '../layout/header.php';
			include '../layout/navbar.php';
			include '../layout/sidebar.php';
		?>

		<div id="content" style="">
             <div class="w3-container w3-card w3-flat-wet-asphalt">
				    <h1>Free Journals</h1>
			</div>
                <div class="w3-container">

                    <div class="w3-panel w3-card w3-border w3-flat-wet-asphalt">
                        <p>
                            <h4>Journal 1</h4>
                            <h6>Writer 1</h6>
                            Lorem ipsum dolor sit amet, ne omnis vidisse mea, id usu vero viderer, vim commodo patrioque ne.
                            Mel scribentur suscipiantur signiferumque cu, eos te quando honestatis definitiones, ut sit dicam eleifend postulant.
                            Eos et commodo eripuit, te volumus hendrerit vis, ex eum veritus corrumpit.
                            Autem elitr has in, no vix nemore eruditi suscipiantur.
                        </p>
                    </div>
                    <div class="w3-panel w3-card w3-border w3-flat-wet-asphalt">
                        <p>
                            <h4>Journal 2</h4>
                            <h6>Writer 2</h6>
                            Mel eu nonumy essent iracundia. Posse constituam referrentur qui in.
                            Dicant detraxit sadipscing ea his, utroque laoreet efficiendi ea qui, periculis constituam complectitur no mei.
                            An molestie consulatu molestiae pro, eu alia nominavi euripidis pri, mei dictas quaeque ne.
                            Duo enim voluptatibus ne. Sed magna graece ex, ad ludus oporteat accusata sit, no cum dicunt nostrum electram.
                        </p>
                    </div>
                    <div class="w3-panel w3-card w3-border w3-flat-wet-asphalt">
                        <p>
                            <h4>Journal 3</h4>
                            <h6>Writer 3</h6>
                            Vis ponderum verterem honestatis ei, nec no mentitum constituto, agam fabulas mei te.
                            Has melius aperiri evertitur te. Mel id inani populo propriae, odio malis platonem has te, sed quando torquatos id.
                            Ad mea munere vocent.
                            Ridens gubergren at eos.
                        </p>
                    </div>
                </div>
			<?php
			include '../layout/footer.php';
		?>

			
	</body>
</html>