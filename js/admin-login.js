        $(document).ready(function(){
    //bind enter key to click button
    $(document).keypress(function(e){
        if (e.which == 13){
            if($('#loginform').is(":visible")){
                $("#admin-login").click();
            }
            else if($('#signupform').is(":visible")){
                $("#signupbutton").click();
            }
        }
    });


    $('#login').click(function(){
        $('#loginform').slideDown();
        $('#signupform').slideUp();
        $('#myalert').slideUp();
        $('#logform')[0].reset();
    });


    $(document).on('click', '#admin-login', function(){
        //alert('click');

        if($('#username').val()!='' && $('#password').val()!=''){
            $('#logtext').text('Logging in...');
            $('#myalert').slideUp();
            $('#myalert3').slideUp();
            var logform = $('#logform').serialize();
            setTimeout(function(){
                $.ajax({
                    method: 'POST',
                    url: '../controllers/admin-user.php',
                    data: logform,
                    success:function(data){
                        if(data == 1){
                            $('#myalert3').slideDown();
                            $('#alerttext3').html(data);
                            $('#alerttext3').text('Login Successful. User Verified!');
                            $('#logtext').text('Login');
                            $('#logform')[0].reset();
                            $('#myalert').hide();
                            $('#alerttext').hide();
                            $('#myalert2').hide();
                            $('#alerttext2').hide();
                            window.location='/Petshop_Management_System/main.php';
                            // setTimeout(function(){
                            //  location.reload();
                            // }, 1000);

                        }
                        else{
                            $('#myalert').slideDown();
                            $('#alerttext').html(data);
                            $('#logtext').text('Login');
                            $('#logform')[0].reset();
                            $('#myalert2').hide();
                            $('#alerttext3').hide();
                            
                        }
                    } 
                });
            }, 2000);
        }
        else{
            //alert('Please input both fields to Login');
            $('#myalert2').slideDown();
            $('#myalert').hide();
            $('#alerttext3').hide();
            $('#myalert2').html('<div class="alert alert-warning err_msg"><i class="fa fa-info"></i> Please input both fields to Login</div>');
            $('#logtext').text('Login');
            $('#logform')[0].reset();

        }
    });
});