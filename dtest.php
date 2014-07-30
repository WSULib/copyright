<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Copyright Resources from WSULS</title>
<link rel="stylesheet" type="text/css" href="css/kube.css" />
<link rel="stylesheet" type="text/css" href="css/copyright.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css' />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="js/kube.tabs.js"></script>
<script type="text/javascript">
$('document').ready(function(){
    var count = 0; 
    $('#questions').hide(); 
    $('#answers').hide(); 
    $('#questions tr:nth-child(2)').attr('id','currow');     
    var q1 = $('#currow td:nth-child(2)').html();
    var q3 = '<div id="d' + count + '"><p>' + q1 + '</p>' ; 
    var a1 =  $('#currow td:nth-child(3)').html();
    var r1 = q3 + a1 +'</div>';
    $('#showquestion').html(r1);
    
    $('li').live('click',function(){
        $(this).addClass('selected').siblings().removeClass('selected'); 
        var target = $(this).attr('id');
        var parid = $(this).parent().parent().attr('id');
        var parnum = parseInt(parid.slice(1,3)); 
        count = count + 1;
        var ps = $('#showquestion div').length; 
        $('#showquestion div').each(function() { 
            var divid = $(this).attr('id'); 
            var divnum = parseInt(divid.slice(1,3));
            if(divnum > parnum) 
                $(this).remove();
            }) 
        $('td' ).each(function(){
            var qnum = $(this).text(); 
            if(qnum == target) {
                var q = $(this).next('td').html();
                var q2 = '<div  id="d' + count + ' "><p>' + q + '</p>'; 
                var a = $(this).next('td').next('td').html();
                var qs = $('#showquestion').html();
                var r = qs + q2 + a +'</div>'; 
                $('#showquestion').html(r);
               /* window.scrollBy(0,400); */
                }
            })
        })
    })
</script>
</head>

<body>
<div class="wrapper">
	<div class="container header">
		<h1>&copy;opyright at Wayne State University</h1>
	</div>
	
	<div class="container banner">
		<img src="images/typesetting.jpg" alt="letters for typesetting" />
	</div>



<?php include('navigation.php'); ?>
	
	<div class="container main">
		<div id="showquestion" class="answers row"></div>


<table width="100%" border="0" cellspacing="1" cellpadding="2" id="questions" >
  <tr>
    <td>No</td>
    <td>Question/Heading </td>
    <td>Answers </td>
  </tr>
  <tr>
    <td>1</td>
    <td>I have...</td>
    <td><ul>
      <li id="2">An Article</li>
      <li id="11">A Book or Book Chapter</li>
      <li id="17">A Poem</li>
      <li id="21">A Play or other dramatic work</li>
      <li id="27">Multimedia</li>
    </ul></td>
  </tr>
  <tr>
    <td>2</td>
    <td>The article is available: </td>
    <td><ul>
      <li id="3">Online in a Wayne State University database</li>
      <li id="4">Online Freely from a legitimate source</li>
      <li id="5">In print at the library or through a faculty copy</li>
      <li id="6">Not available at Wayne State University</li>
      <li id="7">My own article</li>
    </ul></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Answer:</td>
    <td>You may use the article if you use a copyright compliant persistent link to make the article available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you.
    <br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.
<br /><br />You should not post PDFs of the article. This is not copyright compliant use of licensed materials available through a library subscription database.
</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Answer:</td>
    <td>You may link to the article providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download text, graphics or other information from a website for posting and/or distribution.</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Answer:</td>
    <td>Contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> to check for an online or adequate substitute. The University Libraries encourages you to utilize online resources that the library has paid for you to access.  Finding a similar work that the University Libraries owns that would also illustrate the instructional point will release you from the need to seek permission.<br  /> <br /> 
    
    <p><strong>Alternatively</strong></p>
    If the article meets criteria for Fair Use, you may post a PDF or put it on print reserve. Always include a <a href="http://www.lib.wayne.edu/services/research/copyright/faq/tools.php#copy_stat" target="_blank">copyright statement</a> as the first page of the document. 
</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Did you get this article through ILL?</td>
    <td><ul>
      <li id="8">Yes</li>
      <li id="9">No</li>
      <li id="10">Don't Know</li>
    </ul></td>
  </tr>
  <tr>
    <td>7</td>
    <td>Answer:</td>
    <td>In some cases, you (as the author) retain the rights to distribute copies of the published work – but in many cases, authors give up that right during the publication process.  You can check the <a href="http://www.sherpa.ac.uk/romeo/index.php?fIDnum=%7C&mode=simple&la=en" target="_blank">SHERPA/RoMEO</a> for Publisher copyright policies and self-archiving.  You cannot assume that you own the copyright to your published work. Contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>
  <tr>
    <td>8</td>
    <td>Answer:</td>
    <td>Articles and book chapters provided through Interlibrary Loan are for personal use only, and the PDF should not be posted in Blackboard or distributed to students.<br /><br />
    
    Contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> to check for online availability of the article or book chapter, or to help you locate an adequate substitute. The University Libraries encourages you to use materials available through its licensed online resources. Though you may need to reconsider the work you originally selected, using a similar work owned by the University Libraries or a freely available substitute that would also illustrate the instructional point will release you from the need to seek permission from the copyright holder.
      <ul>
    </ul></td>
  </tr>
  <tr>
    <td>9</td>
    <td>Answer:</td>
    <td>Check with your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>
  <tr>
    <td>10</td>
    <td>Answer:</td>
    <td>Check with your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>
  <tr>
    <td>11</td>
    <td>The book or chapter is:</td>
    <td><ul>
      <li id="12">From an online Wayne State library database</li>
      <li id="13">Freely available online from a legitimate source</li>
      <li id="14">In the Wayne State University libraries' print collection</li>
      <li id="15">Your own copy of the book or chapter</li>
      <li id="16">Out of print</li>
    </ul></td>
  </tr>
  <tr>
    <td>12</td>
    <td>Answer:</td>
    <td>You may use the book or chapter if you use a copyright compliant persistent link to make the book or chapter available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you.
    <br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.
<br /><br />You should not post PDFs of the article. This is not copyright compliant use of licensed materials available through a library subscription database.</td>
  </tr>
  <tr>
    <td>13</td>
    <td>Answer:</td>
    <td>You may link to the book or chapter providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download text, graphics or other information from a website for posting and/or distribution.
    <br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> if you have any questions.</td></td>
  </tr>
  <tr>
    <td>14</td>
    <td>Answer:</td>
    <td>You can put the entire book on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php">print reserve</a>.  <br /><br />
If you want to post individual chapters on Blackboard, the material and use must meet Fair Use guidelines.  Try our interactive <a href="checklist.php">Fair Use Checklist.</a> 
Generally accepted fair use guidelines are to limit your use to 10% or 1 chapter of the book, whichever is less.<br /><br />
Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance. 
</td>
  </tr>
  <tr>
    <td>15</td>
    <td>Answer:</td>
    <td>You can put the entire book on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php">print reserve</a>.  <br /><br />
If you want to post individual chapters on Blackboard, the material and use must meet Fair Use guidelines.  Try our interactive <a href="checklist.php">Fair Use Checklist.</a> 
Generally accepted fair use guidelines are to limit your use to 10% or 1 chapter of the book, whichever is less.<br /><br />
Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance. </td>
  </tr>
  <tr>
    <td>16</td>
    <td>Answer:</td>
    <td>If a book is out of print but still under copyright protection<br /><br /> 
You may place the print book or copied book chapters on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php">print reserve</a>.
If you would like to make content available online to students, there may be an argument for more use of content beyond the generally accepted fair use guidelines limiting use to 10% or 1 chapter of the book, whichever is less.  It is important that any posted chapters:<br /><br />
	1. Be hosted restricted access area, such as Blackboard, which limits access to students enrolled in the class.<br /><br />
	2. have access restricted to a reasonable time frame in accordance with the course syllabus. Date and time restrictions to content can be easily set in Blackboard.<br /><br />
Consult with your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> if you have questions.
</td>
  </tr>
  <tr>
    <td>17</td>
    <td>Is the poem:</td>
    <td>
    <ul>
    <li id="18">Online in a Wayne State library database</li>
    <li id="19">Online freely from a legitimate source</li>
    <li id="20">In the Wayne State Libraries print collection</li>
    </ul>
    </td>
  </tr>
  <tr>
  	<td>18</td>
  	<td>Answer:</td>
  	<td>You may use the poem if you use a copyright compliant persistent link to make the poem available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you.
    <br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.
<br /><br />You should not post PDFs of the article. This is not copyright compliant use of licensed materials available through a library subscription database.</p>
  </tr>
  <tr>
  	<td>19</td>
  	<td>Answer:</td>
  	<td>You may link to the article providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download text, graphics or other information from a website for posting and/or distribution. 
  	<br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> if you have any questions.</td>
  </tr>
  <tr>
  	<td>20</td>
  	<td>Answer:</td>
  	<td>You can put the entire book on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php">print reserve</a>. Please contact your liaison librarian for assistance. <br /><br />

If you want to post individual poems on Blackboard, the material and use must meet Fair Use guidelines. Try our interactive <a href="checklist.php">Fair Use Checklist</a>.<br /><br />
Fair Use Limitations from the <a href="http://www.centerforsocialmedia.org/fair-use/related-materials/codes/code-best-practices-fair-use-poetry">CODE OF BEST PRACTICES IN FAIR USE FOR POETRY</a>

<br /><br />The following are generally suggested guidelines for reproduction of poetry under Fair Use
<br /><br />
Poetry: a complete poem of fewer than 250 words printed on no more than two pages, or an excerpt from a longer poem not to exceed 250 words.
<br /><br />
Questions? Contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a>.
 </td>
  </tr>
<tr>
    <td>21</td>
    <td>The play or dramatic work is:</td>
    <td><ul>
      <li id="22">From an online Wayne State library database</li>
      <li id="23">Freely available online from a legitimate source</li>
      <li id="24">In the Wayne State University libraries' print collection</li>
      <li id="25">Your own copy</li>
      <li id="26">Obtained through Interlibrary Loan</li>
    </ul></td>
  </tr>
<tr>
  	<td>22</td>
  	<td>Answer:</td>
  	<td>You may use the play or dramatic work if you use a copyright compliant persistent link to make the play available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you.
    <br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.
<br /><br />You should not post PDFs of the article. This is not copyright compliant use of licensed materials available through a library subscription database.</p>
  </tr>
<tr>
  	<td>23</td>
  	<td>Answer:</td>
  	<td>You may link to the play or dramatic work providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download text, graphics or other information from a website for posting and/or distribution. 
  	<br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> if you have any questions.</td>
  </tr>
<tr>
  	<td>24</td>
  	<td>Answer:</td>
  	<td>These materials usually have unique circumstances surrounding their use. 
  	<br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>
<tr>
  	<td>25</td>
  	<td>Answer:</td>
  	<td>These materials usually have unique circumstances surrounding their use. 
  	<br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>
<tr>
  	<td>26</td>
  	<td>Answer:</td>
  	<td>These materials usually have unique circumstances surrounding their use. 
  	<br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>
  <tr>
    <td>27</td>
    <td>Which of the following best describes the item you have?</td>
    <td><ul>
      <li id="28">Image</li>
      <li id="32">Video</li>
      <li id="37">Audio</li>
      <li id="42">Other</li>
    </ul></td>
  </tr>
  <tr>
    <td>28</td>
    <td>Where did you get the image from?</td>
    <td><ul>
      <li id="29">From an online Wayne State library database</li>
      <li id="30">Freely available online from a legitimate source</li>
      <li id="31">Other</li>
    </ul></td>
  </tr>
  <tr>
    <td>29</td>
    <td>Answer:</td>
    <td>You may use the image if you use a copyright compliant persistent link to make the image available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you.
    <br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.
</td>
  </tr>
  <tr>
    <td>30</td>
    <td>Answer:</td>
    <td>You may link to the image providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download the image from a website for posting and/or distribution.</td>
  </tr>
  <tr>
    <td>31</td>
    <td>Answer:</td>
    <td>These materials usually have unique circumstances surrounding their use. 
  	<br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>
  <tr>
    <td>32</td>
    <td>Where did you get the video from?</td>
    <td><ul>
      <li id="33">From an online Wayne State library database</li>
      <li id="34">Freely available online from a legitimate source</li>
      <li id="35">DVD/VHS owned by Wayne State Libraries</li>
      <li id="36">Personal copy</li>
    </ul></td>
  </tr>
  <tr>
    <td>33</td>
    <td>Answer:</td>
    <td>You may use the video if you use a copyright compliant persistent link to make the video available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you.
    <br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.
</td>
  </tr>
  <tr>
    <td>34</td>
    <td>Answer:</td>
    <td>You may link to the video providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download the video from a website for posting and/or distribution.</td>
  </tr>
  <tr>
    <td>35</td>
    <td>Answer:</td>
   <td>You can put the video on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php"> reserve</a>. Please contact your liaison librarian for assistance.
  </tr>
  <tr>
    <td>36</td>
    <td>Answer:</td>
    <td>These materials usually have unique circumstances surrounding their use. 
  	<br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>
  <tr>
    <td>37</td>
    <td>Where did you get the audio from?</td>
    <td><ul>
      <li id="38">From an online Wayne State library database</li>
      <li id="39">Freely available online from a legitimate source</li>
      <li id="40">CD/Record or other audio owned by Wayne State Libraries</li>
      <li id="41">Personal copy</li>
    </ul></td>
  </tr>
  <tr>
    <td>38</td>
    <td>Answer:</td>
    <td>You may use the audio if you use a copyright compliant persistent link to make the audio available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you.
    <br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.
</td>
  </tr>
  <tr>
    <td>39</td>
    <td>Answer:</td>
    <td>You may link to the audio providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download the audio from a website for posting and/or distribution.</td>
  </tr>
  <tr>
    <td>40</td>
    <td>Answer:</td>
   <td>You can put the audio on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php"> reserve</a>. Please contact your liaison librarian for assistance.
  </tr>
  <tr>
    <td>41</td>
    <td>Answer:</td>
    <td>These materials usually have unique circumstances surrounding their use. 
  	<br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>
   <tr>
    <td>42</td>
    <td>Answer:</td>
    <td>These materials usually have unique circumstances surrounding their use. 
  	<br /><br />Please contact your  <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</td>
  </tr>

</table>

		

	</div>
	
<?php include('bottom.php'); ?>