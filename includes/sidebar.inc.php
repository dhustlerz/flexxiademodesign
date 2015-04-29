<?php
$sidebar_output = '';
$sidebar_output.='<div class="page-sidebar bg-19283d">';
	/**
	 * START X-NAVIGATION
	 */
	$sidebar_output.='<ul class="x-navigation page-navigation-top-fixed">';
   $sidebar_output.='<li class="xn-logo">';
					$sidebar_output.='<a href="index.php">Flexxia</a>';
					$sidebar_output.='<a href="#" class="x-navigation-control"></a>';
			$sidebar_output.='</li>';
			/**
			 * MESSAGE BOX
			 */
			include 'message-box.inc.php';
			/**
			 * END MESSAGE BOX
			 */
			$sidebar_output.='<li class="xn-title">Navigation</li>';
			$sidebar_output.='<li class="active">';
					$sidebar_output.='<a href="index.php"><span class="fa fa-desktop"></span><span class="xn-text">Dashboard</span></a>';
			$sidebar_output.='</li>';

			$sidebar_output.='<li class="xn-title">Components</li>';
			$sidebar_output.='<li class="xn-openable">';
					$sidebar_output.='<a href="tables.html"><span class="fa fa-table"></span><span class="xn-text">Tables</span></a>';
					$sidebar_output.='<ul>';

							$sidebar_output.='<li><a href="table-basic.php"><span class="fa fa-align-justify"></span>Basic</a></li>';
							$sidebar_output.='<li><a href="table-datatables.php"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>';

					$sidebar_output.='</ul>';
			$sidebar_output.='</li>';
			$sidebar_output.='<li class="xn-openable">';
					$sidebar_output.='<a href="#"><span class="fa fa-bar-chart-o"></span><span class="xn-text">Charts</span></a>';
					$sidebar_output.='<ul>';
							$sidebar_output.='<li><a href="charts-morris.php"><span class="xn-text">Morris</span></a></li>';
							$sidebar_output.='<li><a href="charts-nvd3.php"><span class="xn-text">NVD3</span></a></li>';
							$sidebar_output.='<li><a href="charts-rickshaw.php"><span class="xn-text">Rickshaw</span></a></li>';
							$sidebar_output.='<li><a href="charts-other.php"><span class="xn-text">Other</span></a></li>';
					$sidebar_output.='</ul>';
			$sidebar_output.='</li>';
			$sidebar_output.='<li>';
					$sidebar_output.='<a href="maps.php"><span class="fa fa-map-marker"></span><span class="xn-text">Maps</span></a>';
			$sidebar_output.='</li>';
			$sidebar_output.='<li class="xn-openable">';
					$sidebar_output.='<a href="#"><span class="fa fa-sitemap"></span><span class="xn-text">Navigation Levels</span></a>';
					$sidebar_output.='<ul>';
							$sidebar_output.='<li class="xn-openable">';
									$sidebar_output.='<a href="#">Second Level</a>';
									$sidebar_output.='<ul>';
											$sidebar_output.='<li class="xn-openable">';
													$sidebar_output.='<a href="#">Third Level</a>';
													$sidebar_output.='<ul>';
															$sidebar_output.='<li class="xn-openable">';
																	$sidebar_output.='<a href="#">Fourth Level</a>';
																	$sidebar_output.='<ul>';
																			$sidebar_output.='<li><a href="#">Fifth Level</a></li>';
																	$sidebar_output.='</ul>';
															$sidebar_output.='</li>';
													$sidebar_output.='</ul>';
											$sidebar_output.='</li>';
									$sidebar_output.='</ul>';
							$sidebar_output.='</li>';
					$sidebar_output.='</ul>';
			$sidebar_output.='</li>';

	$sidebar_output.='</ul>';
	/**
	 * END X-NAVIGATION
	 */
$sidebar_output.='</div>';
printf($sidebar_output);


?>
