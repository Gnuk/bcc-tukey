<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Charts</title>
<?php foreach($this->styles as $css): ?>
		<link rel="stylesheet" href="<?php echo $css->render() ?>" type="text/css" media="screen">
<?php endforeach; ?>
	</head>
	<body>
		<header>
			<h1>Charts</h1>
		</header>
		<article>
			<div id="center">
				<div id="fig">
					<script type="text/javascript+protovis">
var gMin = 0;
var gMax = 12;
var w = 860,
    h = 300,
    x = pv.Scale.ordinal(experiments, function(e) e.id).splitBanded(0, w, 3/5)
    y = pv.Scale.linear(gMin, gMax).range(0, h)
    s = x.range().band / 2;

var vis = new pv.Panel()
    .width(w)
    .height(h)
    .margin(20);

/* Add the y-axis rules */
vis.add(pv.Rule)
    .data(y.ticks())
    .bottom(y)
    .strokeStyle(function(d) (d == gMin || d == gMax) ? "#000" : "#ccc")
  .anchor("left").add(pv.Label)
    .text(y.tickFormat);

/* Add a panel for each data point */
var points = vis.add(pv.Panel)
    .data(experiments)
    .left(function(d) x(d.id))
    .width(s * 2);

/* Add the experiment id label */
points.anchor("bottom").add(pv.Label)
    .textBaseline("top")
    .text(function(d) d.title);

/* Add the range line */
points.add(pv.Rule)
    .left(s)
    .bottom(function(d) y(d.min))
    .height(function(d) y(d.max) - y(d.min));

/* Add the min and max indicators */
points.add(pv.Dot)
	.bottom(function(d) y(d.max))
    .strokeStyle("#000000")
    .fillStyle("#aa0000");
points.add(pv.Dot)
	.bottom(function(d) y(d.min))
    .strokeStyle("#000000")
    .fillStyle("#0000aa");

/* Add the upper/lower quartile ranges */
points.add(pv.Bar)
    .bottom(function(d) y(d.lq))
    .height(function(d) y(d.uq) - y(d.lq))
    .fillStyle("#ffbb78")
    .strokeStyle("black")
    .lineWidth(1)
    .antialias(false);

/* Add the median line */
points.add(pv.Rule)
    .bottom(function(d) y(d.median))
    .strokeStyle("#aa0000")
    .lineWidth(2);

 /* Show the value */
points.add(pv.Dot)
	.bottom(function(d) y(d.val))
    .strokeStyle("#000000")
    .fillStyle("#000000")
    .lineWidth(1);

vis.render();
					</script>
				</div>
			</div>
		</article>
		<footer>
			<p>Test des charts</p>
		</footer>
<?php
foreach($this->scripts as $js):
	if($js->isIe()) :
?>
		<!--[if lte IE <?php echo $js->getIeMaxVersion() ?>]>
<?php
	endif;
?>
		<script type="text/javascript" src="<?php echo $js->render() ?>"></script>
<?php
	if($js->isIe()) :
?>
		<![endif]-->
<?php
	endif;
endforeach;
?>
	</body>
</html>