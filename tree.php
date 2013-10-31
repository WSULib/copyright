<?php include('top.php'); ?>

<!-- Begin page content -->
<div class="page-header">
  <h1>Copyright Decision Tree</h1>
</div>

<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$('ul.hidetree').toggle();

$('a.btntree').click(function () {
    $(this).closest('li').siblings(':not(:first-child)').toggle();
});

/*$('h3').css('cursor', 'pointer');

$('h3').click(function () {
    $('.show').slideToggle('fast');
});*/

$('ul li a').click(function () {
    $(this).next('ul').toggle();
});
});//]]>  

</script>

<div class="container">

        <ul id="tree">
            <li class="statement">I have:</li>
            <li><a href="#" class="btntree">An Article</a>
                <ul class="hidetree">
                    <li class="statement clearfix">The article is available:</li>
                    <li><a href="#" class="btntree">Online in a Wayne State University database</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p> 

        <p>You may use the article if you use a copyright compliant persistent link to make the article available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance. </p>

        <p>You should not post PDFs of the article. This is not copyright compliant use of licensed materials available through a library subscription database.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Online Freely from a legitimate source</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You may link to the article providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download text, graphics or other information from a website for posting and/or distribution.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">In print at the library or through a faculty copy</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>Contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> to check for an online or adequate substitute. The University Libraries encourages you to utilize online resources that the library has paid for you to access.  Finding a similar work that the University Libraries owns that would also illustrate the instructional point will release you from the need to seek permission.</p>

        <p><strong>Alternatively:</strong></p>

        <p>If the article meets criteria for Fair Use, you may post a PDF or put it on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php" target="_blank">print reserve</a>. Always include a <a href="http://www.lib.wayne.edu/services/research/copyright/faq/tools.php#copy_stat" target="_blank">copyright statement</a> as the first page of the document.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Not available at Wayne State</a> 
                        <ul class="hidetree clearfix">
                            <li class="statement">Did you get this article through ILL?</li>
                            <li><a href="#"  class="btntree">Yes</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>Articles and book chapters provided through Interlibrary Loan are for personal use only, and the PDF should not be posted in Blackboard or distributed to students.</p>

        <p>Contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> to check for online availability of the article or book chapter, or to help you locate an adequate substitute. The University Libraries encourages you to use materials available through its licensed online resources. Though you may need to reconsider the work you originally selected, using a similar work owned by the University Libraries or a freely available substitute that would also illustrate the instructional point will release you from the need to seek permission from the copyright holder.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">No</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>Check with your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">Don't Know</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>Check with your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                        </ul></li>
                    <li><a href="#" class="btntree">My own article</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>In some cases, you (as the author) retain the rights to distribute copies of the published work – but in many cases, authors give up that right during the publication process.  You can check the <a href="http://www.sherpa.ac.uk/romeo/index.php?fIDnum=%7C&mode=simple&la=en" target="_blank">SHERPA/RoMEO</a> for Publisher copyright policies and self-archiving.  You cannot assume that you own the copyright to your published work. Contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                </ul></li>
            <li><a href="#" class="btntree">A Book or Book Chapter</a>
                <ul class="hidetree">
                    <li class="statement clearfix">The book or chapter is:</li>
                    <li><a href="#" class="btntree">From an online Wayne State library database</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You may use the book or chapter if you use a copyright compliant persistent link to make the book or chapter available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance. </p>

        <p>You should not post PDFs of the article. This is not copyright compliant use of licensed materials available through a library subscription database.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Freely available online from a legitimate source</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You may link to the book or chapter providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download text, graphics or other information from a website for posting and/or distribution.</p> 

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> if you have any questions.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">In the Wayne State University libraries' print collection</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You can put the entire book on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php" target="_blank">print reserve</a>.</p> 

        <p>If you want to post individual chapters on Blackboard, the material and use must meet Fair Use guidelines. Try our interactive <a href="checklist.php">Fair Use Checklist</a>. Generally accepted fair use guidelines are to limit your use to 10% or 1 chapter of the book, whichever is less.</p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Your own copy of the book or chapter</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You can put the entire book on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php" target="_blank">print reserve</a>. </p>

        <p>If you want to post individual chapters on Blackboard, the material and use must meet Fair Use guidelines. Try our interactive <a href="checklist.php">Fair Use Checklist</a>. Generally accepted fair use guidelines are to limit your use to 10% or 1 chapter of the book, whichever is less.</p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Out of print</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>If a book is out of print but still under copyright protection</p>

        <p>You may place the print book or copied book chapters on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php" target="_blank">print reserve</a>. If you would like to make content available online to students, there may be an argument for more use of content beyond the generally accepted fair use guidelines limiting use to 10% or 1 chapter of the book, whichever is less. It is important that any posted chapters:</p>

        <ol>
            <li>Be hosted restricted access area, such as Blackboard, which limits access to students enrolled in the class.</li>

            <li>Have access restricted to a reasonable time frame in accordance with the course syllabus. Date and time restrictions to content can be easily set in Blackboard.</li>
        </ol>

        <p>Consult with your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> if you have questions.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                </ul></li>
            <li><a href="#" class="btntree">A Poem</a>
                <ul class="hidetree">
                    <li class="statement clearfix">The poem is available:</li>
                    <li><a href="#" class="btntree">Online in a Wayne State library database</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You may use the poem if you use a copyright compliant persistent link to make the poem available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance. </p>

        <p>You should not post PDFs of the article. This is not copyright compliant use of licensed materials available through a library subscription database.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Online freely from a legitimate source</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You may link to the article providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download text, graphics or other information from a website for posting and/or distribution.</p> 

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> if you have any questions.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">In the Wayne State Libraries print collection</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You can put the entire book on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php" target="_blank">print reserve</a>. Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p> 

        <p>If you want to post individual poems on Blackboard, the material and use must meet Fair Use guidelines. Try our interactive <a href="checklist.php">Fair Use Checklist</a>.</p>

        <p>Fair Use Limitations from the <a href="http://www.centerforsocialmedia.org/fair-use/related-materials/codes/code-best-practices-fair-use-poetry" target="_blank">CODE OF BEST PRACTICES IN FAIR USE FOR POETRY</a> </p>

        <p>The following are generally suggested guidelines for reproduction of poetry under Fair Use </p>

        <p>Poetry: a complete poem of fewer than 250 words printed on no more than two pages, or an excerpt from a longer poem not to exceed 250 words. </p>

        <p>Questions? Contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a>.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                </ul></li>
            <li><a href="#" class="btntree">A Play or other dramatic work</a>
                <ul class="hidetree">
                    <li class="statement clearfix">The play or dramatic work is:</li>
                    <li><a href="#" class="btntree">From an online Wayne State library database</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You may use the play or dramatic work if you use a copyright compliant persistent link to make the play available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance. </p>

        <p>You should not post PDFs of the article. This is not copyright compliant use of licensed materials available through a library subscription database.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Freely available online from a legitimate source</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>You may link to the play or dramatic work providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download text, graphics or other information from a website for posting and/or distribution.</p> 

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> if you have any questions.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">In the Wayne State University libraries' print collection</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>These materials usually have unique circumstances surrounding their use. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Your own copy</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>These materials usually have unique circumstances surrounding their use. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Obtained through Interlibrary Loan</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>These materials usually have unique circumstances surrounding their use. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                        </ul></li>
                </ul></li>
            <li><a href="#" class="btntree">Multimedia</a>
                <ul class="hidetree">
                    <li class="statement clearfix">Which of the following best describes the item you have?</li>
                    <li><a href="#" class="btntree">Image</a>
                        <ul class="hidetree clearfix">
                            <li class="statement">Where did you get the image from?</li>
                            <li><a href="#" class="btntree">From an online Wayne State library database</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>You may use the image if you use a copyright compliant persistent link to make the image available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">Freely available online from a legitimate source</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>You may link to the image providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download the image from a website for posting and/or distribution.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">Other</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>These materials usually have unique circumstances surrounding their use. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Video</a>
                        <ul class="hidetree clearfix">
                            <li class="statement">Where did you get the video from?</li>
                            <li><a href="#" class="btntree">From an online Wayne State library database</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>You may use the video if you use a copyright compliant persistent link to make the video available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">Freely available from a legitimate source</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>You may link to the video providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download the video from a website for posting and/or distribution.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">DVD/VHS owned by Wayne State libraries</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>You can put the video on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php" target="_blank">reserve</a>. Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">Personal copy</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>These materials usually have unique circumstances surrounding their use. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                        </ul></li>
                    <li><a href="#" class="btntree">Audio</a>
                        <ul class="hidetree clearfix">
                            <li class="statement">Where did you get the audio from?</li>
                            <li><a href="#" class="btntree">From an online Wayne State library database</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>You may use the audio if you use a copyright compliant persistent link to make the audio available to students. Use our <a href="http://www.lib.wayne.edu/forms/persistent_link_request.php" target="_blank">Persistent Link Request Form</a> to have the link(s) created for you. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for further assistance.<p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">Freely available from a legitimate source</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>You may link to the audio providing the host site has no restrictions. Unless explicitly authorized by the host site, you should not copy or download the audio from a website for posting and/or distribution.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">CD/Record owned by Wayne State libraries</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>You can put the audio on <a href="http://www.lib.wayne.edu/services/reserves/policies_trad_res.php" target="_blank">reserve</a>. Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                            <li><a href="#" class="btntree">Personal copy</a>
                                <ul class="hidetree clearfix">
                                    <li><p class="statement">Answer:</p>

        <p>These materials usually have unique circumstances surrounding their use. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                        </ul></li>            
                    <li><a href="#" class="btntree">Other</a>
                        <ul class="hidetree clearfix">
                            <li><p class="statement">Answer:</p>

        <p>These materials usually have unique circumstances surrounding their use. </p>

        <p>Please contact your <a href="http://www.lib.wayne.edu/info/staff/liaison.php" target="_blank">liaison librarian</a> for assistance.</p>

        <p class="didwe"><a href="http://copyright.wayne.edu/contact.php">Did we answer your question? Tell us more about it.</a></p></li>
                                </ul></li>
                        </ul></li>        
        </ul>


    </div> <!-- /container -->

<?php include('bottom.php'); ?>