<nav class="navbar navbar-default navbar-in">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="ไปที่ไหน">
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right navbar-in-left">

						<li class="">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><?php echo $result_mem['mem_name'] ?></a>
							<ul class="dropdown-menu">
								<li>
									<a href="profile.php">แก้ไขข้อมูลส่วนตัว</a>
								</li>
								<li>
									<a href="my_reservations.php">ข้อมูลการจอง</a>
								</li>
								<li>
									<a href="my_reservations.php">การตั้งค่าบัญชี</a>
								</li>
								<li>
									<a href="process/logout.php">ออกจากระบบ</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right navbar-in-left">
						<li>
							<a href="#">ความช่วยเหลือ</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right navbar-in-left">

						<li class="">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" >รถเช่า</a>
							<ul class="dropdown-menu">
								<li>
									<a href="mycar.php">จัดการประกาศ</a>
								</li>
								<li>
									<a href="booking.php">ข้อมูลการจอง</a>
								</li>
							</ul>
						</li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div>
		</nav>