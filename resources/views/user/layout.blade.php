<!DOCTYPE HTML>
<html>
    <head>
        <title>Free Theater Website Template | About :: w3layouts</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="/user/css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="/user/css/flexslider.css" type="text/css" media="all" />
        <link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
        <link rel="stylesheet" href="/user/css/tsc_tabs.css" type="text/css" media="all" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src='/user/js/jquery.color-RGBa-patch.js'></script>
        <script src='/user/js/example.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="header">
        <div class="header-top">
            <div class="wrap">
                <div class="h-logo">
                    <a href="index.php"><img src="/user/images/logo.png" alt=""/></a>
                </div>
                <div class="nav-wrap">
                    <ul class="group" id="example-one">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="movies_events.php">Movies</a></li>
                        <li><?php if(isset($_SESSION['user'])){
                        $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a href="profile.php"><?php echo $user['name'];?></a><a href="logout.php">Logout</a><?php }else{?><a href="login.php">Login</a><?php }?></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="block">
            <div class="wrap">
                <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
                    <fieldset>
                        <div class="field" >
                            <input type="text" placeholder="Search Movies Here..." style="height:27px;width:500px"  required id="search111" name="search">
                            <input type="submit" value="Search" style="height:28px;padding-top:4px" id="button111">
                        </div>       	
                    </fieldset>
                </form>
                <div class="clear"></div>
            </div>
        </div>
        </div>
        @yield('content')
        <div class="footer">
	    <div class="wrap">
            <div class="footer-top">
                <div class="col_1_of_4 span_1_of_4">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="movies_events.php">Movies</a></li>
                        <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <div class="textcontact">
                        <p>Theatre Assistance<br>
                        Theatre 3D Movie<br>
                        Ph: +1-800-234-52589.<br>
                        </p>
                    </div>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <div class="call_info">
                        <p class="txt_3">Call us toll free:</p>
                        <p class="txt_4">1 800 234 23456</p>
                    </div>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <div class=social>
                        <a href="#"><img src="/user/images/fb.png" alt=""/></a>
                        <a href="#"><img src="/user/images/tw.png" alt=""/></a>
                        <a href="#"><img src="/user/images/dribble.png" alt=""/></a>
                        <a href="#"><img src="/user/images/pinterest.png" alt=""/></a>
                    </div>
                </div>
				<div class="clear"></div>
			</div>
		</div>
        </div>
    </body>
</html>
<style>
.content {
	padding-bottom:0px !important;
}
#form111 {
                width:500px;
                margin:50px auto;
}
#search111{
                padding:8px 15px;
                background-color:#fff;
                border:0px solid #dbdbdb;
}
#button111 {
                position:relative;
                padding:6px 15px;
                left:-8px;
                border:2px solid #207cca;
                background-color:#207cca;
                color:#fafafa;
}
#button111:hover  {
                background-color:#fafafa;
                color:#207cca;
}

</style>

<script src="/user/js/auto-complete.js"></script>
 <link rel="stylesheet" href="/user/css/auto-complete.css">
