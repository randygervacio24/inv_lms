$(document).ready(function(){
	$error = $('<center><label class = "text-danger">Please fill up the required field!</label></center>');
	$error1 = $('<center><label class = "text-danger">Invalid username or password</label></center>');
	$error2 = $('<center><label class = "text-danger">member Not Found</label></center>');

/*	member Login*/
	$(document).on('click', '#member_login' ,function(){
		if($('#member_id').val() == ""){
			alert('Please enter your ID');
		}else{	
			$member_id = $('#member_id').val();
			$('#member_content').empty();
			$loader = $(
			'<center><label>Please wait...</label></center>'
			+ '<center><img src = "images/loader.gif" height = "50px"/></center>'
			);
			$loader.appendTo($('#member_content'));
			setTimeout(function(){
				$loader.remove();
				$.post('check_member.php', {member_id: $member_id},
					function(res){
						if(res == "Success"){
							$.ajax({
								url: 'load_member.php',
								type: 'POST',
								data:{
									member_id: $member_id
								},
								success: function(res){
									$('#member_content').html(res);
								}
							});
						}else{
							$error2.appendTo($('#member_content'));
							setTimeout(function(){
								$error2.remove();
								$('#member_content').html(res);
							},2000)
							
						}
					}
				)
			},3000);
		}	
	});

/*	member Logout*/
	$(document).on('click', '.logout', function(){
		$('#transaction').fadeOut();
		$loader = $(
			'<center><label>Logging Out...</label></center>'
			+ '<center><img src = "images/loader.gif" height = "50px"/></center>'
			);
		$('#member_content').empty();	
		$loader.appendTo($('#member_content'));
			setTimeout(function(){
				$loader.remove();
				$.ajax({
					url: 'logout.php',
					success: function(res){
						$('#member_content').html(res);
					}
				});
			}, 3000);
	});
/*****	*****/
	
/*   Administrator Login  */	
	$('#login').click(function(){
		$loading = $('<center><img src = "../images/loading.gif" height = "10px"/></center>');
		$error.remove();
		$error1.remove();
		$username = $('#username').val();
		$password = $('#password').val();
		if($username == "" && $password == ""){
			$error.appendTo('#loading');
		}else{
			$loading.appendTo('#loading');
			setTimeout(function(){	
				$.post('check_admin.php',{username: $username, password: $password},
					function(result){
						if(result == "Success"){
							window.location = "home.php";
						}else{
							$('#username').val('');
							$('#password').val('');
							$loading.remove();
							$error1.appendTo('#loading');
						}
					}
				)
			}, 3000);
		}
	});
	
/*   Administrator Toggle  */	
	$('#add_admin').click(function(){
		$('#a_table').hide();
		$('#a_form').show();
		$(this).hide();
		$('#cancel_admin').show();
	});
	$('#cancel_admin').click(function(){
		$('#a_table').show();
		$('#a_form').hide();
		$(this).hide();
		$('#add_admin').show();
	});

/*	 member Toggle	 */
	$('#add_member').click(function(){
		$('#m_table').hide();
		$('#m_form').show();
		$(this).hide();
		$('#cancel_member').show();
	});

	$('#cancel_member').click(function(){
		$('#m_table').show();
		$('#m_form').hide();
		$(this).hide();
		$('#add_member').show();
	});

/*    Activity Toggle   */
	$('#add_activity').click(function(){
		$('#act_table').hide();
		$('#act_form').show();
		$(this).hide();
		$('#cancel_activity').show();
	});
	$('#cancel_activity').click(function(){
		$('#act_table').show();
		$('#act_form').hide();
		$(this).hide();
		$('#add_activity').show();
	});

	/*    Perplay Toggle   */
	$('#add_perplay').click(function(){
		$('#per_table').hide();
		$('#per_form').show();
		$(this).hide();
		$('#cancel_perplay').show();
	});
	$('#cancel_perplay').click(function(){
		$('#per_table').show();
		$('#per_form').hide();
		$(this).hide();
		$('#add_perplay').show();
	});
	
/*	Expenses Toogle	*/
	$('#add_expenses').click(function(){
		$('#exp_table').hide();
		$('#exp_form').show();
		$(this).hide();
		$('#cancel_expenses').show();
	});
	$('#cancel_expenses').click(function(){
		$('#exp_table').show();
		$('#exp_form').hide();
		$(this).hide();
		$('#add_expenses').show();
	});

	/*	Expenses Toogle	*/
	$('#add_announcement').click(function(){
		$('#ann_table').hide();
		$('#ann_form').show();
		$(this).hide();
		$('#cancel_announcement').show();
	});
	$('#cancel_announcement').click(function(){
		$('#ann_table').show();
		$('#ann_form').hide();
		$(this).hide();
		$('#add_announcement').show();
	});

	/*	Inventory Toogle	*/
	$('#add_inventory').click(function(){
		$('#inv_table').hide();
		$('#inv_form').show();
		$(this).hide();
		$('#cancel_inventoryt').show();
	});
	$('#cancel_inventory').click(function(){
		$('#inv_table').show();
		$('#inv_form').hide();
		$(this).hide();
		$('#add_inventory').show();
	});

	/*	Income Toogle	*/
	$('#add_income').click(function(){
		$('#inc_table').hide();
		$('#inc_form').show();
		$(this).hide();
		$('#cancel_income').show();
	});
	$('#cancel_inventory').click(function(){
		$('#inc_table').show();
		$('#inc_form').hide();
		$(this).hide();
		$('#add_income').show();
	});
	
/*	SEARCH member	*/	
	$('#btn_search').click(function(){
		$load_status = $('<center><h2>Please Wait.....</h2></center>');
		$error_status = $('<center><h2 class = "text-danger">Member Not Found!</h2></center>');
		if($('#search').val().length < 8){
			alert('Please enter a 8 digit number');
		}else{
			$('#result').empty();
			$load_status.appendTo('#result');
			$member_id = $('#search').val();
			setTimeout(function(){
				$.post('check_studid.php', {member_id: $member_id},
					function(result){
						if(result == "Success"){
							$('#result').load('get_stuid.php?member_id=' + $member_id);
						}else{
							$load_status.remove();
							$error_status.appendTo('#result');
						}
					}
				)
			}, 2000);
		}	
	});	

/*		member Transact	  */	
	$(document).on('click', '.btn_transact', function(){
			$('.balance').attr('style', 'text-decoration:underline;');
			$('#load_data').load('transact_bal.php');
			$('.btn_transact').hide();
		setTimeout(function(){
			$('#transaction').fadeIn();
		}, 1000);
	});
	$('.close').on('click', function(){
		$('#transaction').fadeOut();
		$('.btn_transact').show();
	});
	$('.paid').on('click', function(){
		$('.balance').removeAttr('style', 'text-decoration:underline;');
		$(this).attr('style', 'text-decoration:underline;');
		$load = $('<center><h2>Please Wait...</h2></center>');
		$('#load_data').empty();
		$load.appendTo('#load_data');
		setTimeout(function(){
			$load.remove();
			$('#load_data').load('transact_paid.php')
		}, 2000);
	});
	$('.balance').on('click', function(){
		$('.paid').removeAttr('style', 'text-decoration:underline;');
		$(this).attr('style', 'text-decoration:underline;');
		$load = $('<center><h2>Please Wait...</h2></center>');
		$('#load_data').empty();
		$load.appendTo('#load_data');
		setTimeout(function(){
			$load.remove();
			$('#load_data').load('transact_bal.php')
		}, 2000);
	});
});	

let sidebarToggle = document.querySelector(".sidebarToggle");
        sidebarToggle.addEventListener("click", function(){
            document.querySelector("body").classList.toggle("active");
            document.getElementById("sidebarToggle").classList.toggle("active");
 });    


/* form validation*/
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
