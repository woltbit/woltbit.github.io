<html>
	<head>
		<title>Material Design for Bootstrap</title>

	    <!-- Mobile support -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Twitter Bootstrap -->
	    <link href="https://github.com/woltbit/woltbit.github.io/blob/master/bootstrap.css" rel="stylesheet">

	    <!-- Material Design for Bootstrap -->
	    <link href="dist/css/material-wfont.min.css" rel="stylesheet">
	    <link href="dist/css/ripples.min.css" rel="stylesheet">
		
		<!--FontAwesome-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	    <!-- Dropdown.js -->
	    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">
	    
	    <!-- Woltbit Css-->
	    <link href="https://github.com/woltbit/woltbit.github.io/blob/master/woltbit.css" rel="stylesheet">

	    <!-- jQuery -->
    	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    	<script>
    	$(document).ready(function(){
    		$(".navbarmobile").click(function(){
    			if($(".sidebar").hasClass("open")){
    				$(".sidebar").animate({marginLeft:"-300px"}).removeClass("open");
    			}else{
    				$(".sidebar").animate({marginLeft:"-15px"}).addClass("open");
    			}
    		});

    		$(".recent-post-tab").click(function(){
    			$(this).addClass("active");
    			$(".recent-post").show();
    			$(".popular-post").hide();
    			$(".popular-post-tabs").removeClass("active");
    		})
    		$(".popular-post-tabs").click(function(){
    			$(this).addClass("active");
    			$(".recent-post").hide();
    			$(".popular-post").show();
    			$(".recent-post-tab").removeClass("active");
    		})

    		$(".click").click(function(){
    			if($(".others").hasClass("open")){
    				$(".click").animate({bottom:"0px"});
    				$(".others").animate({bottom:"-485px"}).removeClass("open");
    			}else{
    				$(".click").animate({bottom:"485px"});
    				$(".others").animate({bottom:"0px"}).addClass("open");	
    			}
    		})
    		//$(".others").animate({marginBottom:"500px"});

    		$(window).scroll(function(){
    			var width = $(window).width(); 
				var height = $(window).height();
				if($(window).scrollTop() > 150){
					$(".menus").addClass("navbar-fixed-top menubg");
					$(".navbar-brand").show();
					$(".banner").hide();
				}else{
					if (( width > 765 )){
						$(".menus").removeClass("navbar-fixed-top menubg");
						$(".navbar-brand").hide();
						$(".banner").show();
					}
				}

			});

    		var width = $(window).width(); 
			var height = $(window).height();
			if (( width < 765 )){
				$(".menus").addClass("navbar-fixed-top menubg");
				$(".navbar-brand").show();
				$("body").css({marginTop:"50px"});
				$(".banner").hide();
			}else{
				$(".menus").removeClass("navbar-fixed-top menubg");
				$(".navbar-brand").hide();
				$("body").css({marginTop:"0px"});
				$(".banner").show();
			}

			window.onresize = function(event) {
				var width = $(window).width(); 
				var height = $(window).height();
				if (( width < 765 )){
					$(".menus").addClass("navbar-fixed-top menubg");
					$(".navbar-brand").show();
					$("body").css({marginTop:"50px"});
					$(".banner").hide();
				}else{
					$(".menus").removeClass("navbar-fixed-top menubg");
					$(".navbar-brand").hide();
					$("body").css({marginTop:"0px"});
					$(".banner").show();
				}
			}
    	})
    	</script>
	</head>
	<body>
		<div class="navbar navbar-default menus">
        	<div class="navbar-header">
                
				<!--
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            	-->
            	<button type="button" class="navbar-toggle navbarmobile">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<img src="img/woltbit.png" width="150"/>
                </a>
	        </div>
	        <div class="navbar-collapse collapse navbar-responsive-collapse">
	            <ul class="nav navbar-nav navbar-left">
	                <li><a href="javascript:void(0)"><i class="fa fa-home"></i> Home</a></li>
	                <li class="category">
	                	<a href="javascript:void(0)">
	                		Categories
	                	</a>
	                	<div class="categories-dropdown">
	                		<div class="dropdown-child">
		                		<div class="withripple">
						  			<a href="javascript:void(0)">123456</a>
						  		</div>
						  		<div class="withripple">
						  			<a href="javascript:void(0)">234567</a>
						  		</div>
		                	</div>
	                	</div>
	                </li>
	                <li><a href="javascript:void(0)">About</a></li>
	                <li><a href="javascript:void(0)">Portfolio</a></li>
	            </ul>
	            <form class="navbar-form navbar-right">
	                <div class="form-control-wrapper">
	                	<input type="text" class="form-control col-lg-8 empty" placeholder="Search">
	                	<span class="material-input"></span>
	                </div>
	            </form>
	        </div>
        </div>
		<div class="banner col-md-12 hidden-xs">
			<img src="img/woltbit.png" width="180"/>
		</div>

		<div class="main-container container col-md-12">
			<div class="col-md-3 sidebar hidden-lg hidden-md hidden-sm" align="center">
		  		<div class="nav navbar-nav">
			  		<div class="withripple">
			  			<a href="javascript:void(0)">Home</a>
			  		</div>
			  		<div class="withripple otherlinks">
			  			<a href="javascript:void(0)">
			  				About
			  			</a>
			  		</div>
			  		<div class="withripple">
			  			<a href="javascript:void(0)">Portfolio</a>
			  		</div>
			  		
			  		<div class="withripple">
			  			<a href="javascript:void(0)">4</a>
			  		</div>
			  		<div class="withripple">
			  			<a href="javascript:void(0)">5</a>
			  		</div>
		  		</div>
		  	</div>
			
			<div class="click col-xs-12">
				Click here
			</div>
			<div class="others col-md-3">
				<div class="subscriber">
					<form class="navbar-form special-navbar">
		                <div class="form-control-wrapper">
		                	<input type="text" class="form-control col-lg-8 empty" placeholder="Subscribe">
		                	<span class="material-input"></span>
		                </div>
		            </form>
				</div>
				<div class="follow clearfix">
					<div class="facebook">
						Facebook
					</div>
					<div class="twitter">
						Twitter
					</div>
					<div class="Google">
						Google+
					</div>
				</div>
				<div class="post-detail-sidebar">
					<div class="tabs clearfix">
						<div class="recent-post-tab active">
							Recent Post
						</div>
						<div class="popular-post-tabs">
							Popular Post
						</div>
					</div>
					<div class="recent-post">
						<div class="posts clearfix">
							<div class="post-picture">
								<img src="img/bg.JPG" width="100%" />
							</div>
							<div class="post-detail">
								<div class="post-detail-title">Free Download Excellent Bootstrap Templates</div>
								<div>December 21,2014 : 0 comments</div>
							</div>
						</div>
						<hr />
						<div class="posts clearfix">
							<div class="post-picture">
								<img src="img/bg.JPG" width="100%" />
							</div>
							<div class="post-detail">
								<div class="post-detail-title">Free Download Excellent Bootstrap Templates</div>
								<div>December 21,2014 : 0 comments</div>
							</div>
						</div>
						<hr />
						<div class="posts clearfix">
							<div class="post-picture">
								<img src="img/bg.JPG" width="100%" />
							</div>
							<div class="post-detail">
								<div class="post-detail-title">Free Download Excellent Bootstrap Templates</div>
								<div>December 21,2014 : 0 comments</div>
							</div>
						</div>
						<hr />
						<div class="posts clearfix">
							<div class="post-picture">
								<img src="img/bg.JPG" width="100%" />
							</div>
							<div class="post-detail">
								<div class="post-detail-title">Free Download Excellent Bootstrap Templates</div>
								<div>December 21,2014 : 0 comments</div>
							</div>
						</div>
					</div>
					<div class="popular-post">
						<div class="posts clearfix">
							<div class="post-picture">
								<img src="img/bg.JPG" width="100%" />
							</div>
							<div class="post-detail">
								<div class="post-detail-title">Free Download Excellent Bootstrap Templates</div>
								<div>December 21,2014 : 0 comments</div>
							</div>
						</div>
						<hr />
						<div class="posts clearfix">
							<div class="post-picture">
								<img src="img/bg.JPG" width="100%" />
							</div>
							<div class="post-detail">
								<div class="post-detail-title">Free Download Excellent Bootstrap Templates</div>
								<div>December 21,2014 : 0 comments</div>
							</div>
						</div>
						<hr />
						<div class="posts clearfix">
							<div class="post-picture">
								<img src="img/bg.JPG" width="100%" />
							</div>
							<div class="post-detail">
								<div class="post-detail-title">Free Download Excellent Bootstrap Templates</div>
								<div>December 21,2014 : 0 comments</div>
							</div>
						</div>
						<hr />
						<div class="posts clearfix">
							<div class="post-picture">
								<img src="img/bg.JPG" width="100%" />
							</div>
							<div class="post-detail">
								<div class="post-detail-title">Free Download Excellent Bootstrap Templates</div>
								<div>December 21,2014 : 0 comments</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="main-content col-md-9">
				<div id="container" class="isotope">
					<div class="item news">
					  	<div class="title">Title</div>
					  	<div class="picture">
					  		<img src="img/bg.JPG" width="100%">
					  	</div>
					  	<div class="detail clearfix">
					  		<div class="category">category</div>
					  		<div class="date">views</div>
					  	</div>
					  	<div class="content">
					  		Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					  	</div>
					  	<div class="readmore">
					  		<a href="javascript:void(0)" class="btn btn-primary">Primary<div class="ripple-wrapper"></div></a>
					  	</div>
					</div>
					
					<div class="item news">
					  	<div class="title">Title</div>
					  	<div class="picture">
					  		<img src="img/bg.JPG" width="100%">
					  	</div>
					  	<div class="content">
					  		Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					  	</div>
					  	<div class="readmore">
					  		<a href="javascript:void(0)" class="btn btn-primary">Primary<div class="ripple-wrapper"></div></a>
					  	</div>
					</div>

					<div class="item news">
					  	<div class="title">Title</div>
					  	<div class="picture">
					  		<img src="img/bg.JPG" width="100%">
					  	</div>
					  	<div class="content">
					  		Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					  	</div>
					  	<div class="readmore">
					  		<a href="javascript:void(0)" class="btn btn-primary">Primary<div class="ripple-wrapper"></div></a>
					  	</div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="container" align="center">
			<div class="paginate">
				<ul class="pagination">
                    <li class="disabled"><a href="javascript:void(0)">«</a></li>
                    <li class="active"><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)">5</a></li>
                    <li><a href="javascript:void(0)">»</a></li>
                </ul>
			</div>
		</div>
		
	    <!-- Main jumbotron for a primary marketing message or call to action -->
	    <div class="jumbotron middle">
	      <div class="container">
	      	<div class="footers col-md-12">
	      		<div class="col-md-3">
		      		<ul>
		      			<li>Home</li>
		      			<li>About Us</li>
		      			<li>Copyright</li>
		      		</ul>
	      		</div>
	      		<div class="col-md-3">
		      		<ul>
		      			<li>Home</li>
		      			<li>About Us</li>
		      			<li>Copyright</li>
		      		</ul>
	      		</div>
	      		<div class="col-md-3">
		      		<ul>
		      			<li>Home</li>
		      			<li>About Us</li>
		      			<li>Copyright</li>
		      		</ul>
	      		</div>
	      		<div class="col-md-3">
		      		<ul>
		      			<li>Home</li>
		      			<li>About Us</li>
		      			<li>Copyright</li>
		      		</ul>
	      		</div>
	      	</div>
	        <h1>Hello, world!</h1>
	        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
	        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
	      </div>
	    </div>

	    <div class="container">
	      <footer>
	        <div class="pull-left">
	        	<p>&copy; Woltbit 2014</p>	
	        </div>
	        <div class="pull-right">
	        	<span>
	        		<i class="fa fa-facebook"></i>
	        	</span>
	        	<span>
	        		<i class="fa fa-google"></i>
	        	</span>
	        	<span>
	        		<i class="fa fa-twitter"></i>
	        	</span>
	        </div>
	      </footer>
	    </div> <!-- /container -->
	    
    

	    <!-- Twitter Bootstrap -->
	    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	    <!-- Material Design for Bootstrap -->
	    <script src="dist/js/material.min.js"></script>
	    <script src="dist/js/ripples.min.js"></script>
	    <script>
	      $.material.init();
	    </script>


	    <!-- Sliders -->
	    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
	    <script>
	      $(function() {
	        $.material.init();
	        $(".shor").noUiSlider({
	          start: 40,
	          connect: "lower",
	          range: {
	            min: 0,
	            max: 100
	          }
	        });

	        $(".svert").noUiSlider({
	          orientation: "vertical",
	          start: 40,
	          connect: "lower",
	          range: {
	            min: 0,
	            max: 100
	          }
	        });
	      });
	    </script>

	    <!-- Dropdown.js -->
	    <script src="scripts/isotope-docs.min.js"></script>
	    
	    <script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
	    <script>
	      	$("#dropdown-menu select").dropdown();

			$('#container').isotope({
			  itemSelector: '.item',
			  /*layoutMode: 'fitRows'*/
			  
			  // layout mode options
			  
			  fitrows: {
			    isFitWidth: true,
			  }
			  
			});
	    </script>
	</body>
</html>