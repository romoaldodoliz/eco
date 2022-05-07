<!DOCTYPE html>
<html>
    <?php include('header.php'); ?>
    
  <body>
    <div id="all">
      <?php include('topbar.php'); ?>
       
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/logo.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                
                <li class="nav-item dropdown"><a href="home.php">Home</a></li>
                <li class="nav-item dropdown active"><a href="home.php">Topics</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->
      <?php
      $tbl_topics_query = $conn->query("SELECT * FROM tbl_topics WHERE topic_id='$_GET[topic_id]'");
      $tbl_topics_row = $tbl_topics_query->fetch();
      ?>
              
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-12">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item"><a href="main_topic.php">Topics</a></li>
                <li class="breadcrumb-item active">Add Blog Entry</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>ADD BLOG ENTRY</h2>
                </div>
              </div>
            </div>
            <div class="row portfolio text-center">
              <div class="col-md-12">
                <form action="save_main_topic.php?topic_id=<?php echo $_GET['topic_id']; ?>" method="POST" enctype="multipart/form-data">
                
                <div class="row">
                    
                    <div class="col-md-2">
                    <select name="entryNum" class="form-control">
                    <option><?php echo $tbl_topics_row['entryNum']; ?></option>
                    <option>001</option>
                    <option>002</option>
                    <option>003</option>
                    <option>004</option>
                    <option>005</option>
                    <option>006</option>
                    <option>007</option>
                    <option>008</option>
                    <option>009</option>
                    <option>010</option>
                    <option>011</option>
                    <option>012</option>
                    <option>013</option>
                    <option>014</option>
                    <option>015</option>
                    </select>
                    <small style="margin-bottom: 12px;" class="pull-left">Entry No.</small>
                    </div>
                    
                    <div class="col-md-2">
                    <select name="status" class="form-control">
                    <option><?php echo $tbl_topics_row['status']; ?></option>
                    <option>Private</option>
                    <option>Published</option>
                    </select>
                    <small style="margin-bottom: 12px;" class="pull-left">Topic Status</small>
                    </div>
                    
                    <div class="col-md-8">
                    <input value="<?php echo $tbl_topics_row['title']; ?>" name="title" type="text" class="form-control" placeholder="Topic title..." required="true" />
                    <small style="margin-bottom: 12px;" class="pull-left">Title</small>
                    </div>
                    
                    <div class="col-md-12">
                    <input value="<?php echo $tbl_topics_row['systemDemoLink']; ?>" name="systemDemoLink" type="text" class="form-control" placeholder="Paste system demo video link..." required="true" />
                    <small style="margin-bottom: 12px;" class="pull-left">System Demo Video Link</small>
                    </div>
                    
                    <div class="col-md-12">
                    <input value="<?php echo $tbl_topics_row['installGuideLink']; ?>" name="installGuideLink" type="text" class="form-control" placeholder="Paste installation guide video link..." required="true" />
                    <small style="margin-bottom: 12px;" class="pull-left">Installation Guide Video Link</small>
                    </div>
                    
                    <div class="col-md-12">
                    <input value="<?php echo $tbl_topics_row['downloadLink']; ?>" name="downloadLink" type="text" class="form-control" placeholder="Paste download link..." required="true" />
                    <small style="margin-bottom: 8px;" class="pull-left">Source Code Download Link</small>
                    </div>
                    
                    
                    
                    
                    
                </div>
                <hr />
                <p style="color: black;">Description</p>
                <textarea name="editor1"><?php echo $tbl_topics_row['description']; ?></textarea>
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
               
                <p style="margin-top: 12px; color: black;">Installation Guide</p>
                <textarea name="editor2"><?php echo $tbl_topics_row['installGuide']; ?></textarea>
                <script>
                        CKEDITOR.replace( 'editor2' );
                </script>
                <p class="buttons" style="margin-top: 12px;">
                <button name="edit_main_topic" class="btn btn-template-outlined pull-right"><i class="fa fa-save"></i> UPDATE</button>
                </p>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
 
      
      <?php include('footer.php'); ?>
      
    </div>
    <!-- Javascript files-->
    
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
 
  </body>
</html>