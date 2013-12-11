<?php include('top.php'); ?>

<!-- Begin page content -->
    
    <div class="page-header">
      <h1>Curious about copyright?</h1>          
      <p class="lead">The Wayne State University Library System offers the following copyright resources</p>
    </div>
 
    <div class="container">
      <div class="row">
        <div class="col-3 col-md-3 col-lg-3">
          <div class="service">
            <h2><a href="basics.php">Copyright Basics</a></h2>
            <h3>For Faculty and Staff</h3>
            <hr>
            <p>View our copyright FAQ covering Fair Use and the T.E.A.C.H. Act as well as ways the Library System can support your copyright needs.</p>
            <p><a class="" href="basics.php">View details &raquo;</a></p>
          </div>
        </div>
        <div class="col-3 col-md-3 col-lg-3">
          <div class="service">
            <h2><a href="tree.php">Copyright Decision Tree</a></h2>
            <h3>Interactive copyright decision making tool</h3>
            <hr>
            <p>Do you have a resource you'd like to use in your instruction? Use this helpful decision tree to determine the next steps.</p>
            <p><a class="" href="tree.php">View details &raquo;</a></p>
          </div>
        </div>
        <div class="col-3 col-md-3 col-lg-3">
          <div class="service">
            <h2><a href="checklist.php">Fair Use Checklist</a></h2>
            <h3>Interactive fair use determination tool</h3>
            <hr>
            <p>Use this interactive checklist to help evaluate the &quot;fairness&quot; of an educational resource under the U.S. Copyright Code.</p>
            <p><a class="" href="checklist.php">View details &raquo;</a></p>
          </div>
        </div>        
        <div class="col-3 col-md-3 col-lg-3">
          <div class="service">
            <h2><a href="blackboard.php">Posting to Blackboard</a></h2>
            <h3>Copyright Guidelines</h3>
            <hr>
            <p>Before posting a resource to Blackboard, read our basic copyright guidelines that can help you remain copyright compliant.</p>
            <p><a class="" href="blackboard.php">View details &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>

      <div class="container">
        <div class="row">
          <div class="head-cnt">
          <h2 class="news-header"><span><a href="http://blogs.wayne.edu/copyright" target="_blank">Latest News from Our Blog</a></span></h2>
          </div>
        <?php
            $rss = new DOMDocument();
            $rss->load('http://blogs.wayne.edu/copyright/feed/');
            $feed = array();
                foreach ($rss->getElementsByTagName('item') as $node) {
                  $item = array ( 
                    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                    );
                  array_push($feed, $item);
                }
                $limit = 3;
                for($x=0;$x<$limit;$x++) {
                  $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
                  $link = $feed[$x]['link'];
                  $description = substr($feed[$x]['desc'], 0, 200)."...";
                  $date = date('M d, Y', strtotime($feed[$x]['date']));


              echo   '<div class="col-4 col-md-4 col-lg-4">
                        <div class="blog">
                          <div class="date">'.$date.'</div>        
                          <h5><a href="'.$link.'" title="'.$title.'" target="_blank">'.$title.'</a></h5>
                          <hr>
                          <p>' . $description .'
                          <p class="more"><a href="'.$link.'" title="'.$title.'" target="_blank">View post &raquo;</a></p>
                        </div>
                      </div>';
            }
          ?>
      </div>
    </div>

<?php include('bottom.php'); ?>
