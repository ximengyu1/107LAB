<style>
*{
	padding:0;
	margin:0;
}
.header{
	width:100%;
	height:35px;
	background-color:rgb(57,164,219);
}
.admin{

	width:300px;
	height:35px;
	line-height: 35px;
	font-size: 19px;
	color: #fff;float:right;
}
.admin a{
	color: #fff;
	text-decoration: none;
}
.admin a:hover{
	color:red;
}

</style>

<?php session_start(); ?>
<div class="header">
	<div class="admin">
		<a href="../admin/home.php">首页</a>
					<?php 
					
					if(isset($_SESSION['adminname']))
					{
						echo '欢迎您,'.$_SESSION['adminname'];
						echo '  |  ';
						echo '<a href="#" onclick="cancal()"> 注销</a>';
					}

					else{
						echo '  |  ';
						echo '<a href="./adminLogin.php">登录 </a>';
						
						
						}
					?>
	</div>
</div>
<script type="text/javascript">
	function cancal(){
			if(window.confirm("您确定要注销吗？")){
				window.location="./adminCancal.php"
			}
	}
</script>