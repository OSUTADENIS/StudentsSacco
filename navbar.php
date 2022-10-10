
<nav id="sidebar" class='mx-lt-5 bg-warning' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=loans" class="nav-item nav-loans"><span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span> Loans</a>	
				<a href="index.php?page=payments" class="nav-item nav-payments"><span class='icon-field'><i class="fa fa-money-bill"></i></span> Payments</a>
        <?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=borrowers" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-user-friends"></i></span> Borrowers</a>
				<a href="index.php?page=plan" class="nav-item nav-plan"><span class='icon-field'><i class="fa fa-list-alt"></i></span> Loan Plans</a>	
				<a href="index.php?page=loan_type" class="nav-item nav-loan_type"><span class='icon-field'><i class="fa fa-th-list"></i></span> Loan Types</a>		
				<div class="dropdown1">
				<a href="#" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-book"></i></span> Reports</a>
				<div class="dropdown-content">
					<a href="index.php?page=Payments_Report" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-book"></i></span> Payments</a>
					<a href="index.php?page=LoansList_Report" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-book"></i></span> Loans</a>
					<a href="index.php?page=BorrowerList_Report" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-book"></i></span> Borrowers</a>
					<a href="index.php?page=ActiveLoans_Report" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-book"></i></span> Active Loans</a>
				</div>
				</div>
        
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>

        <!-- <div class="dropdown">
				<a href="#" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-user-friends"></i></span>Email Panel</a>
				<div class="dropdown-content">
					<a href="index.php?page=newEmail_data" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-money-bill"></i></span>Send Email</a>
					<a href="" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span>List Email</a>
				</div>
				</div> -->

        <!-- <li class="dropdown">
              <a href="#" class="nav-item nav-borrowers" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class='icon-field'><i class="fa fa-book"></i></span> Reports <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-money-bill"></i></span> Payments</a></li>
                <li><a href="#" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span> Loans</a></li>
                <li><a href="#" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span> Active Loans</a></li>
                <li><a href="#" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-user-friends"></i></span> Borrowers</a></li>
              </ul>
            </li>	 -->
				
			<?php endif; ?>
		</div>

</nav>

<style>
.dropdown1 {
  position: relative;
  display: inline-block;
  width: 250px;
}

.dropdown-content {
  display: none;
  position: absolute;
  width: 250px;
  margin-left: 0px;
  margin-right: 0px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1; 
}
.dropdown-content a {
  text-decoration: none;
  display: block;
}
.dropdown1:hover .dropdown-content {display: block;}

.dropdown {
  /* position: relative;
  display: inline-block; */
  /* background-color: rgba(0,0,0,0.8); */
  /* height: 46px; */
}

.dropdown-toggle {
  /* margin-left: 20px; */
  /* color: #f8f8f8; */
}
/* .dropdown-toggle:hover {
  color: #f1f1f1;
}
.dropdown:hover {
  color: rgba(0,0,0,0.2)
} */
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 230px;
  /* padding: 2px 0; */
  /* margin: 2px 0 0; */
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: rgba(0,0,0,0.3);
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
          box-shadow: 0 6px 12px rgba(0, 0, 0, .175); 
}

</style>

<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
