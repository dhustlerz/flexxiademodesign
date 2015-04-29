<?php
$output = '';
$output.='<div class="page-sidebar bg-19283d">';
	/**
	 * START X-NAVIGATION
	 */
	$output.='<ul class="x-navigation page-navigation-top-fixed">';
   $output.='<li class="xn-logo">';
					$output.='<a href="index.php">Flexxia</a>';
					$output.='<a href="#" class="x-navigation-control"></a>';
			$output.='</li>';
			/**
			 * MESSAGE BOX
			 */
			include 'message-box.inc.php';
			/**
			 * END MESSAGE BOX
			 */
			$output.='<li class="xn-title">Navigation</li>';
			$output.='<li class="active">';
					$output.='<a href="index.php"><span class="fa fa-desktop"></span><span class="xn-text">Dashboard</span></a>';
			$output.='</li>';

			$output.='<li class="xn-title">Components</li>';
			$output.='<li class="xn-openable">';
					$output.='<a href="tables.html"><span class="fa fa-table"></span><span class="xn-text">Tables</span></a>';
					$output.='<ul>';

							$output.='<li><a href="table-basic.php"><span class="fa fa-align-justify"></span>Basic</a></li>';
							$output.='<li><a href="table-datatables.php"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>';

					$output.='</ul>';
			$output.='</li>';
			$output.='<li class="xn-openable">';
					$output.='<a href="#"><span class="fa fa-bar-chart-o"></span><span class="xn-text">Charts</span></a>';
					$output.='<ul>';
							$output.='<li><a href="charts-morris.php"><span class="xn-text">Morris</span></a></li>';
							$output.='<li><a href="charts-nvd3.php"><span class="xn-text">NVD3</span></a></li>';
							$output.='<li><a href="charts-rickshaw.php"><span class="xn-text">Rickshaw</span></a></li>';
							$output.='<li><a href="charts-other.php"><span class="xn-text">Other</span></a></li>';
					$output.='</ul>';
			$output.='</li>';
			$output.='<li>';
					$output.='<a href="maps.php"><span class="fa fa-map-marker"></span><span class="xn-text">Maps</span></a>';
			$output.='</li>';
			$output.='<li class="xn-openable">';
					$output.='<a href="#"><span class="fa fa-sitemap"></span><span class="xn-text">Navigation Levels</span></a>';
					$output.='<ul>';
							$output.='<li class="xn-openable">';
									$output.='<a href="#">Second Level</a>';
									$output.='<ul>';
											$output.='<li class="xn-openable">';
													$output.='<a href="#">Third Level</a>';
													$output.='<ul>';
															$output.='<li class="xn-openable">';
																	$output.='<a href="#">Fourth Level</a>';
																	$output.='<ul>';
																			$output.='<li><a href="#">Fifth Level</a></li>';
																	$output.='</ul>';
															$output.='</li>';
													$output.='</ul>';
											$output.='</li>';
									$output.='</ul>';
							$output.='</li>';
					$output.='</ul>';
			$output.='</li>';

	$output.='</ul>';
	/**
	 * END X-NAVIGATION
	 */
$output.='</div>';
printf($output);


?>
