<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>E-Goverment Working Area</title>
		


		<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet" >
    	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/css/queries.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">

    	<!-- Push & slide css -->
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/default.css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/component.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/frontpage.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/task.css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>

	<body id="top" class="cbp-spmenu-push">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <h3>Menu</h3>
        <a href="#">Home</a>
        <a href="#">Wiki</a>
        <a href="#">Forum</a>
        <a href="#">Links</a>
        <a href="#">About</a>
        <a href="#">FAQ</a>
        </nav>
        

       <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3>Sign out</h3>  
        <a href="#">View Profile</a>
                       
        <a href="http://localhost:8888/egov/index.php/auth/logout"><div class="btn btn-danger noborder maxwidth">Sign out</div></a>
        </nav>

        

        <section class="swag text-center">
          <div class="container">
            <div class="row">

              <div class="col-md-1 text-right navicon">
                  <a id="nav-toggle"  class="nav_slide_button" href="#"><span></span></a>
                </div>

                <div class="col-md-12 text-right navicon">
                  <div class="gear">
                  <a id="showRightPush" class="fa fa-cog" href="#"><span></span></a>
                  </div>
                </div>

              
              <div class="col-md-8 col-md-offset-2">
                <h1>Workspace<span>Your Working Area<br>add, edit, delete tasks here</span></h1>
                <a href="#tarea" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>




        <!--task container-->



        <div class="col-md-12 taskarea" id="tarea"> 

          <!-- task menu -->
          <div class="taskmenu">
             <!--filter-->
           <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default active">
              <input type="checkbox" autocomplete="off" checked> ALL TASK
            </label>
            <label class="btn btn-primary">
              <input type="checkbox" autocomplete="off"> New task
            </label>
            <label class="btn btn-success">
              <input type="checkbox" autocomplete="off"> Task
            </label>

          </div><!--filter-->


          </div> <!-- task menu -->
           
           <!-- task list -->

           <div class="panel-group" id="alltask">



            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-target="#task1" data-parent="#alltask">task1</a>
                  <a class="toRight">On Progress</a>
                </h4>
              </div>
              <div id="task1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="taskContent">Task Creator : 
                    <br>Release Date : dd/mm/yy time</p>
                  <button id="taskFile" type="button" class="btn btn-info">Download File</button>
                   <br>
                   <p class="taskContent">task content</p>
                   <hr>
                    <p class="taskUpdateInfo">
                    Last Update dd/mm/yy time
                    </p>
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateTask">Update Task</button>
                   <!--button type="button" class="btn btn-success">Complete Task</button-->
                   <!--button type="button" class="btn btn-danger">Stop Releasing Task</button-->
                  
              </div>
              </div>
            </div> <!-- task1 -->


            <div class="panel panel-info">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-target="#task3" data-parent="#alltask">task3</a>
                  <a class="toRight">New</a>
                </h4>
              </div>
              <div id="task3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="taskContent">Task Creator : 
                   <br>Release Date : dd/mm/yy time</p>
                 <button id="taskFile" type="button" class="btn btn-info">Download File</button>
                   <br>
                   <p class="taskContent">task content</p>
                   <hr>
                   <p class="taskUpdateInfo">
                    Last Update dd/mm/yy time
                    </p>
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateTask">Update Task</button>
                   <!--button type="button" class="btn btn-success">Complete Task</button-->
                   <!--button type="button" class="btn btn-danger">Stop Releasing Task</button-->
                 
              </div>
              </div>
            </div> <!-- task 3 -->




           </div> <!-- all task -->


           <!-- update task -->
            <div id="updateTask" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Update Task</h1>
            <hr>

            <form role="form" class="taskModal">
                   <div class="taskForm">
              <div class="form-group">
             
              <input id="taskName" type="text" class="form-control" placeholder="Task name">
                </div>
              <div class="form-group">
                  <button id="taskFile" type="button" class="btn btn-info">Download File</button> or <input type="file" style="display: inline-flex;" id="taskFile">
                  <p class="help-block">upload your task description file.</p>
              </div>
            <div class="form-group">
              <textarea class="form-control" rows="10" placeholder="Add task description" style="padding-bottom: 10px;"></textarea>
            </div>


            <div class="form-group">

<div class="dropdown col-md-4" style="padding-left: 0px;">
  <button class="btn btn-default dropdown-toggle" type="button" id="taskType" data-toggle="dropdown" aria-expanded="true" >
    [Important] Choose task type...
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Type1</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Type2</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Type3</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Type4</a></li>
  </ul>
</div>




              <div class="btn-group" data-toggle="buttons">
  <label class="btn btn-default active">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> Normal task
  </label>
  <label class="btn btn-danger">
    <input type="radio" name="options" id="option2" autocomplete="off" checked> Urgent task
  </label>
                </div>
              </div>






          </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Update & Release</button>
               <button type="submit" class="btn btn-success">Update Only (not release)</button>
               <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
              </form> 


           
            
           </div> <!-- modal content -->
           </div>
          </div>  <!-- update task -->




          <!-- see completed task detail -->
            <div id="completedTaskDetail" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <h1 class="headerNewTask">Task Name</h1>
            <hr>

            <form role="form" class="taskModal">
              <div class="taskForm">
              <div class="form-group">
                  <button id="taskFile" type="button" class="btn btn-info">Download File</button>
              </div>
            <div class="form-group">
              <textarea readonly id ="completedTaskDetailTextArea" class="form-control" rows="10" placeholder="Add task description" style="padding-bottom: 10px;"></textarea>
            </div>
          </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary" data-dismiss="modal">Back</button>
               </div>
      
              </form> 


           
            
           </div> <!-- modal content -->
           </div>
          </div><!-- see completed task detail -->



              <!-- if no task show this

           <div class="container">

         <font class="taskfont"><i>Oops! No Task
          <br>Add new task <a href="#">here</a></i></font>
        </div> -->





      </div>







        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Legals</a></li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p>Designed &amp; by <a href="#">Peter Finlan</a></p> 
                <p>Developed &amp; by <a href="#"><em>Kasetsart Student</em></a></p>
              </div>
            </div>
          </div>
        </footer>

		

			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        	<!-- Include all compiled plugins (below), or include individual files as needed -->

        	<script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
        	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        	<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        	<script src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
        	<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>


        	<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
    		<script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
    		<script>
      			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
          			menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        			showLeftPush = document.getElementById( 'nav-toggle' ),
        			showRightPush = document.getElementById( 'showRightPush' ),
        			body = document.body;
      
      			showLeftPush.onclick = function() {
			        classie.toggle( this, 'active' );
			        classie.toggle( body, 'cbp-spmenu-push-toright' );
			        classie.toggle( menuLeft, 'cbp-spmenu-open' );
			        disableOther( 'showLeftPush' );
			      };
			    showRightPush.onclick = function() {
			        classie.toggle( this, 'active' );
			        classie.toggle( body, 'cbp-spmenu-push-toleft' );
			        classie.toggle( menuRight, 'cbp-spmenu-open' );
			        disableOther( 'showRightPush' );
			      };
      

			    function disableOther( button ) {
			        if( button !== 'showLeftPush' ) {
			          classie.toggle( showLeftPush, 'disabled' );
			        }
			        if( button !== 'showRightPush' ) {
			          classie.toggle( showRightPush, 'disabled' );
			        }
			      }
			    </script>


      </body>
    </html>
