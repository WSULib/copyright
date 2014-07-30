
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/copyright-logo-black.png" alt="copyright" width="300"/></a>
        </div>
        <div class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Copyright Basics</a></li>
            <li><a href="#contact">Guidelines for Blackboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Interactive Tools <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Copyright Decision Tree</a></li>
                <li><a href="#">Fair Use Checklist</a></li>
              </ul>
            </li>
          </ul>
          

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <?php 
//EXPECTED VARIABLES: 

// factor1 : checkbox array
// factor2 : checkbox array
// factor3 : checkbox array
// factor4 : checkbox array
// submit: submit {Evaluate Fair Use}

if (isset($_POST['submit']) ) {
	
	//FUNCTION TO DETERMINE THE TILT OF A FACTOR
	function factor_tilt($factor) {
		$pro_count = count($factor["favor"]);
		$con_count = count($factor["against"]);
		if ((empty($pro_count)) && (empty($con_count))) { $pro_count = $con_count = 1; } // 0/0
		if ((empty($con_count)) && ($pro_count >= 1)) { $pro_count++; $con_count = 1; } // N/0
		$ratio = $pro_count/$con_count;
		if ($ratio > 1) {
			$tilt = "favor"; }
		else if ($ratio == 1) {
			$tilt = "even"; }
		else {
			$tilt = "against"; }
		return $tilt;		
	}
	
	//REGISTER THE TILTS OF EACH FACTOR
	$factor[1]["favor"] = $_POST["fac1favor"];
	$factor[1]["against"] = $_POST["fac1against"];
	$total_tilt[] = $factor[1]["tilt"] = factor_tilt($factor[1]);
	
	$factor[2]["favor"] = $_POST["fac2favor"];
	$factor[2]["against"] = $_POST["fac2against"];
	$total_tilt[] = $factor[2]["tilt"] = factor_tilt($factor[2]);
	
	$factor[3]["favor"] = $_POST["fac3favor"];
	$factor[3]["against"] = $_POST["fac3against"];
	$total_tilt[] = $factor[3]["tilt"] = factor_tilt($factor[3]);
	
	$factor[4]["favor"] = $_POST["fac4favor"];
	$factor[4]["against"] = $_POST["fac4against"];
	$total_tilt[] = $factor[4]["tilt"] = factor_tilt($factor[4]);
	
	//DETERMINE THE RATIO OF FAVOR vs. AGAINST
	$pro_count = $tie_count = $con_count = 0;
	
	foreach ($total_tilt as $value) {
		if ($value == "favor") { $pro_count++; }
		if ($value == "even") { $tie_count++; }
		if ($value == "against") { $con_count++; }
	}
	
	if ((empty($pro_count)) && (empty($con_count))) { $pro_count = $con_count = 1; } // 0/0
	if ((empty($con_count)) && ($pro_count >= 1)) { $pro_count++; $con_count = 1; } // N/0
	$ratio = $pro_count/$con_count;
	
	//FIGURE OUT THE ULTIMATE DECISION OVER THE FOUR FACTORS
	if (empty($tie_count)) {
		if ($ratio > 1) { $decision = "favor"; $dtxt = "toward"; } else
		if ($ratio < 1) { $decision = "against"; $dtxt = "away from"; } else {
		$decision = "even"; $dtxt = "neither toward nor away from"; }
	} else {
		if ($tie_count > 2) { $decision = "even"; $dtxt = "neither toward nor away from"; } else
		if ($tie_count == 2 && $ratio == 1) { $decision = "even"; $dtxt = "neither toward nor away from"; } else
		if ($tie_count < 2) {
			if ($ratio > 1) { $decision = "favor"; $dtxt = "toward"; } else
			if ($ratio < 1) { $decision = "against"; $dtxt = "away from"; } else {
			$decision = "even"; $dtxt = "neither toward nor away from"; }
		}
	}
	if ($decision == "favor") { $decisionh2 = "Your material appears to favor Fair Use"; } else
        if ($decision == "against") { $decisionh2 = "Your material appears not to favor Fair Use"; }
        else { $decisionh2 = "There isn't enough evidence to decide on this material"; }
 
} // END IF (isset($_POST['submit']))

?>

<?php include('top.php'); ?>
<?php include('navigation.php'); ?>
	
	<div class="container main">
	<h2>Fair Use Checklist

<?php
if (isset($_POST['submit']) ) {
       
        for ($i=1;$i<=4;$i++) {
           if ($factor[$i]['tilt'] == "favor") {
              $factor[$i]['message'] = "Favors Fair Use"; } else
           if ($factor[$i]['tilt'] == "even") {
              $factor[$i]['message'] = "Neither For Nor Against Fair Use"; }
           else { $factor[$i]['message'] = "Against Fair Use"; }
        }
 	
	
	echo(": {$decisionh2}</h2>\r\n\r\n");
    echo("<div id=\"decision\">\r\n");
        echo "<p>At a glance it appears the material you are evaluating <span class=\"{$decision}\">leans {$dtxt} fair use</span>, though this simple checklist cannot by itself determine if material falls under fair use. We suggest you contact your <a href=\"/info/staff/liaison.php\">liaison librarian</a> for further assistance.</p>";

        echo "<p>Please print this page for your records if you feel it would be helpful.</p>";
 
        for ($i=1;$i<=4;$i++) {	
          echo ("<div class=\"factor\">\r\n");
          echo ("<h3>");
          if ($i==1) { echo ("Factor 1: Purpose and Character of the Use"); } else
          if ($i==2) { echo ("Factor 2: Nature of Copyrighted Work"); } else
          if ($i==3) { echo ("Factor 3: Amount and Substantiality of Portion Used"); } else
          if ($i==4) { echo ("Factor 4: Effect on Market for Original"); }
          echo ("</h3>\r\n");
          echo ("<p class=\"{$factor[$i]['tilt']}\">{$factor[$i]['message']}</p>\r\n\r\n");
          echo ("<div class=\"pro\">\r\n");
          echo ("<p>Weighs in favor of fair use:</p>\r\n");
          echo ("<ul>\r\n");
          foreach ($factor[$i]['favor'] as $value) {
             echo ("<li>{$value}</li>\r\n");
          }
          echo ("</ul>\r\n");
          echo ("</div>\r\n");
          echo ("<div class=\"con\">\r\n");
          echo ("<p>Weighs against fair use:</p>\r\n");
          echo ("<ul>\r\n");
          foreach ($factor[$i]['against'] as $value) {
             echo ("<li>{$value}</li>\r\n");
          }
          echo ("</ul>\r\n");
          echo ("</div>\r\n");
          echo ("</div><!--.FACTOR-->\r\n");
        }
		
          echo ("</div><!--#DECISION-->\r\n\r\n");
		  echo ("<h2 class=\"printoff\">Check another work</h2>\r\n\r\n");
} else {
	echo ("</h2>\r\n\r\n");
} // END SECOND IF (isset($_POST['submit']))

?>
	<p class="printoff">To determine whether your use of material is likely to be protected under the Fair Use doctrine (<a href="http://www.copyright.gov/fls/fl102.html">Section 107</a> in the copyright code), check all applicable factors below, then click "Evaluate Fair Use". You may print the resulting page to keep with your material for future reference.</p>

<p class="printoff"><em>The Wayne State University Library System offers this Fair Use checklist as part of its general copyright information on this site. The information presented is not a substitute for legal advice obtained from a licensed attorney. Please see our <a href="/info/policies/copyright_guidelines.php">Digital Media Copyright Guidelines</a> for further information about our copyright policies.</em></p>

<form id="checklist" method="post" action="checklist.php">

<div id="factor1" class="factor">
	<h3>Factor 1: Purpose and Character of the Use</h3>
		<div class="pro">
		<p class="favor">Weighs in Favor of Fair Use</p>
			<ul class="checklist">
			<li><input type="checkbox" value="nonprofit educational" id="f11" name="fac1favor[]" /><label for="f11">Nonprofit Educational</label></li>
			<li><input type="checkbox" value="teaching" id="f12" name="fac1favor[]" /><label for="f12">Teaching (including multiple copies for classroom use)</label></li>
			<li><input type="checkbox" value="research or scholarship" id="f13" name="fac1favor[]" /><label for="f13">Research or Scholarship</label></li>
			<li><input type="checkbox" value="criticism, comment, news reporting, or parody" id="f14" name="fac1favor[]" /><label for="f14">Criticism, Comment, News Reporting, or Parody</label></li>
			<li><input type="checkbox" value="transformative (use changes work for new utility or purpose" id="f15" name="fac1favor[]" /><label for="f15">Transformative (use changes work for new utility or purpose) </label></li>
			<li><input type="checkbox" value="personal study" id="f16" name="fac1favor[]" /><label for="f16">Personal Study</label></li>
			<li><input type="checkbox" value="use is necessary to achieve your intended educational purpose" id="f17" name="fac1favor[]" /><label for="f17">Use is necessary to achieve your intended educational purpose</label></li>
			</ul>
		</div>
		
		<div class="con">
		<p class="against">Weighs Against Fair Use</p>
			<ul class="checklist">
			<li><input type="checkbox" value="commercial activity" id="f21" name="fac1against[]" /><label for="f21">Commercial Activity</label></li>
			<li><input type="checkbox" value="profiting from use" id="f22" name="fac1against[]" /><label for="f22">Profiting from use</label></li>
			<li><input type="checkbox" value="entertainment" id="f23" name="fac1against[]" /><label for="f23">Entertainment</label></li>
			<li><input type="checkbox" value="non-transformative" id="f24" name="fac1against[]" /><label for="f24">Non-transformative </label></li>
			<li><input type="checkbox" value="for publication" id="f25" name="fac1against[]" /><label for="f25">For publication</label></li>
			<li><input type="checkbox" value="for public distribution" id="f26" name="fac1against[]" /><label for="f26">For public distribution</label></li>
			<li><input type="checkbox" value="use exceeds intended educational purpose" id="f27" name="fac1against[]" /><label for="f27">Use exceeds intended educational purpose</label></li>
			</ul>
		</div>
</div>

<div id="factor2" class="factor">
	<h3>Factor 2: Nature of Copyrighted Work</h3>
		<div class="pro">
		<p class="favor">Weighs in Favor of Fair Use</p>
			<ul class="checklist">
			<li><input type="checkbox" value="published work" id="f31" name="fac2favor[]" /><label for="f31">Published Work</label></li>
			<li><input type="checkbox" value="factual or nonfiction work" id="f32" name="fac2favor[]" /><label for="f32">Factual or nonfiction work</label></li>
			<li><input type="checkbox" value=" important to educational objectives" id="f33" name="fac2favor[]" /><label for="f33">Important to educational objectives</label></li>
			</ul>
		</div>
		
		<div class="con">
		<p class="against">Weighs Against Fair Use</p>
			<ul class="checklist">
			<li><input type="checkbox" value="unpublished work" id="f41" name="fac2against[]" /><label for="f41">Unpublished work</label></li>
			<li><input type="checkbox" value="Highly creative work (art, music, novels, films, plays, poetry, fiction)" id="f42" name="fac2against[]" /><label for="f42">Highly creative work (art, music, novels, films, plays, poetry, fiction)</label></li>
			<li><input type="checkbox" value="consumable work (workbook, test)" id="f43" name="fac2against[]" /><label for="f43">Consumable work (workbook, test)</label></li>
			</ul>
		</div>
</div>

<div id="factor3" class="factor">
	<h3>Factor 3:  Amount and Substantiality of Portion Used</h3>
		<div class="pro">
		<p class="favor">Weighs in Favor of Fair Use</p>
			<ul class="checklist">
			<li><input type="checkbox" value="small portion of work used" id="f51" name="fac3favor[]" /><label for="f51">Small portion of work used </label></li>
			<li><input type="checkbox" value="portion used is not central or significant to entire work as a whole" id="f52" name="fac3favor[]" /><label for="f52">Portion used is not central or significant to entire work as a whole</label></li>
			<li><input type="checkbox" value="amount taken is narrowly tailored to educational purpose such as criticism, comment, research, or subject being taught" id="f53" name="fac3favor[]" /><label for="f53">Amount take is narrowly tailored to educational purpose such as criticism, comment, research, or subject being taught</label></li>
			</ul>
		</div>
		
		<div class="con">
		<p class="against">Weighs Against Fair Use</p>
			<ul class="checklist">
			<li><input type="checkbox" value="large portion or entire work used" id="f61" name="fac3against[]" /><label for="f61">Large portion or entire work used </label></li>
			<li><input type="checkbox" value="portion used is central or heart of work" id="f62" name="fac3against[]" /><label for="f62">Portion used is central or "heart of work"</label></li>
			<li><input type="checkbox" value="amount taken is more than necessary for criticism, comment, research, or subject being taught" id="f63" name="fac3against[]" /><label for="f63">Amount taken is more than necessary for criticism, comment, research, or subject being taught</label></li>
		</ul>
		</div>
</div>

<div id="factor4" class="factor">
	<h3>Factor 4:  Effect on Market for Original </h3>
		<div class="pro">
		<p class="favor">Weighs in Favor of Fair Use</p>
		<ul class="checklist">
			<li><input type="checkbox" value="no significant effect on market or potential market for copyrighted work" id="f71" name="fac4favor[]" /><label for="f71">No significant effect on market or potential market for copyrighted work </label></li>
			<li><input type="checkbox" value="use stimulates market for original work" id="f72" name="fac4favor[]" /><label for="f72">Use stimulates market for original work</label></li>
			<li><input type="checkbox" value="no similar product marketed by copyright holder" id="f73" name="fac4favor[]" /><label for="f73">No similar product marketed by copyright holder</label></li>
			<li><input type="checkbox" value="no longer in print" id="f74" name="fac4favor[]" /><label for="f74">No longer in print</label></li>
			<li><input type="checkbox" value="licensing or permission unavailable" id="f75" name="fac4favor[]" /><label for="f75">Licensing or permission unavailable</label></li>
			<li><input type="checkbox" value="supplemental classroom reading" id="f76" name="fac4favor[]" /><label for="f76">Supplemental classroom reading</label></li>
			<li><input type="checkbox" value="one or few copies made or distributed" id="f77" name="fac4favor[]" /><label for="f77">One or few copies made or distributed</label></li>
			<li><input type="checkbox" value="user owns lawfully acquired or purchased copy of original work" id="f78" name="fac4favor[]" /><label for="f78">User owns lawfully acquired or purchased copy of original work</label></li>
			<li><input type="checkbox" value="restricted access (to students or other appropriate group)" id="f79" name="fac4favor[]" /><label for="f79">Restricted access (to students or other appropriate group)</label></li>
			</ul>
		</div>
		
		<div class="con">
		<p class="against">Weighs Against Fair Use</p>
		<ul class="checklist">
			<li><input type="checkbox" value="impairs market" id="f81" name="fac4against[]" /><label for="f81">Significantly impairs market or potential market for copyrighted work or derivative </label></li>
			<li><input type="checkbox" value="Licensing or permission reasonably available" id="f82" name="fac4against[]" /><label for="f82">Licensing or permission reasonably available</label></li>
			<li><input type="checkbox" value="numerous copies made or distributed" id="f83" name="fac4against[]" /><label for="f83">Numerous copies made or distributed</label></li>
			<li><input type="checkbox" value="repeated or long term use that demonstrably affects the market for the work" id="f84" name="fac4against[]" /><label for="f84">Repeated or long term use that demonstrably affects the market for the work</label></li>
			<li><input type="checkbox" value="transformative" id="f85" name="fac4against[]" /><label for="f85">Required classroom reading</label></li>
			<li><input type="checkbox" value="user does not own lawfully acquired or purchased copy or original work" id="f86" name="fac4against[]" /><label for="f86">User does not own lawfully acquired or purchased copy of original work</label></li>
			<li><input type="checkbox" value="unrestricted access on the web or other public forum" id="f87" name="fac4against[]" /><label for="f87">Unrestricted access on the web or other public forum</label></li>
			</ul>
		</div>
</div>

<a href="#myModal1" role="button" class="btn" data-toggle="modal">Launch modal</a>

  <!-- Modal1 -->

  <script>
  $('#InfroTextSubmit').click(function(){
    
    if ($('#title').val()==="") {
      // invalid
      $('#title').next('.help-inline').show();
      return false;
    }
    else {
      // submit the form here
      // $('#InfroText').submit();
      
      return true;
    }
  
      
      
});
  </script>
  
  <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Edit Introduction</h3>
    </div>
  
    <div class="modal-body">
  
      <form id="InfroText" method="POST">
  
      <input type="hidden" name="InfroText" value="1">
  
      <table>
        <tbody><tr><td>Title</td><td><input type="text" name="title" id="title" style="width:300px"><span class="hide help-inline">This is required</span></td></tr>
        <tr><td>Introudction</td><td><textarea name="contect" style="width:300px;height:100px"></textarea></td></tr>
      </tbody></table>
      </form>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      <button class="btn btn-primary" data-dismiss="modal" id="InfroTextSubmit">Save changes</button>
    </div>
</div>

<p class="submitwrap"><input name="submit" class="button" type="submit" value="Submit Form" /></p>
<p><em>Checklist originally from <a href="http://www.usg.edu/copyright/introduction_to_the_fair_use_checklist">University System of Georgia</a>.  Used with permission.</em></p>

</form>
          
		

	</div>
	
<?php include('bottom.php'); ?>