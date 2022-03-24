<?php 
require_once('../php/db-config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>

    <link href="/ojt_k3l_pos/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/ojt_k3l_pos/css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <link href="/ojt_k3l_pos/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/ojt_k3l_pos/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="/ojt_k3l_pos/css/fa-css/all.min.css" rel="stylesheet" type="text/css">

</head>
<body>

    <div class="col-md-12 mt-4">

        <h4>PRIVILEGES</h4>
        <div class="d-flex justify-content-end mb-4">
            <button id="edit_btn" class="btn btn-primary mr-2">Edit</button>
        </div>

        <form action="" method="POST">

        <table class="table">
            <tr>
                <th>
                    USERCODE
                </th>
                <th>
                    USERNAME
                </th>
                <th>
                    P1
                </th>
                <th>
                    P2
                </th>
                <th>
                    P3
                </th>
                <th>
                    P4
                </th>
            </tr>

            <?php 
            $tbl_users_query = "SELECT * FROM tblusers";
            $tbl_users_rec = mysqli_query($con, $tbl_users_query);
            $counter = 0;
            while($tbl_users_row = mysqli_fetch_array($tbl_users_rec))
                {
                    $tbl_users_row['PROCES1'];            
            ?>
            <?php 
            echo '<tr>';   
            ?>     
                <?php
                echo "<td>";
                    echo $tbl_users_row['UserCODE'];
                echo "</td>";
                ?>
                <?php
                echo "<td>";
                    echo $tbl_users_row['UserName'];
                echo "</td>";
                ?>
                <?php 
                echo "<td>";                
                    $p1 = $tbl_users_row['PROCES1'];
                    $counter++;
                    if($p1 > 0){
                        echo "<input type='checkbox' name='opt_$counter' value='1' checked disabled>";
                    }
                    else{
                        echo "<input type='checkbox' name='opt_$counter' value='0' disabled>";
                    }                                
                echo "</td>";
                ?>
                <?php 
                echo "<td>";                
                    $p2 = $tbl_users_row['PROCES2'];
                    $counter++;
                    if($p2 > 0){
                        echo "<input type='checkbox' name='opt_$counter' value='1' checked disabled>";
                    }
                    else{
                        echo "<input type='checkbox' name='opt_$counter' value='0' disabled>";
                    }                                
                echo "</td>";
                ?>
                <?php 
                echo "<td>";                
                    $p3 = $tbl_users_row['PROCES3'];
                    $counter++;
                    if($p3 > 0){
                        echo "<input type='checkbox' name='opt_$counter' value='1' checked disabled>";
                    }
                    else{
                        echo "<input type='checkbox' name='opt_$counter' value='0' disabled>";
                    }                                
                echo "</td>";
                ?>
                <?php 
                echo "<td>";                
                    $p4 = $tbl_users_row['PROCES4'];
                    $counter++;
                    if($p4 > 0){
                        echo "<input type='checkbox' name='opt_$counter' value='1' checked disabled>";
                    }
                    else{
                        echo "<input type='checkbox' name='opt_$counter' value='0' disabled>";
                    }                                
                echo "</td>";
                ?>
            </tr>
            
            
            <?php 
            }
            ?>
            
        </table>
        <div>
            <hr class="mb-1">
                <h5>LEGEND:</h5>
            <div class="d-flex justify-content-center">
                <b>PROCESS P1: INVOICING</b><hr>            
                <b>PROCESS P2: PROJECT MANAGER</b><hr>             
                <b>PROCESS P3: POST COLLECTION</b><hr> 
                <b>PROCESS P4: PROJECT MONITOR</b><hr> 
            </div>
        </div>
        
        <div class="d-flex justify-content-right">                
                <button id="save_btn" class="btn btn-success" type="submit">Save</button>
        </div>

        </form>

    </div>
    

    <!-- Bootstrap core JavaScript-->
    <script src="/ojt_k3l_pos/js/jquery.min.js"></script>
    <script src="/ojt_k3l_pos/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/ojt_k3l_pos/js/sb-admin-2.min.js"></script>

    <!-- Custom Script-->
    <script>
        $('#edit_btn').click(function(){
            if($("input").prop("disabled")){
                $("input").prop("disabled", false);
            }
            else{
                $("input").prop("disabled", true);
            }   
        });
    </script>

    <script>
        $('#save_btn').click(function(){
        var valid = this.form.checkValidity();
			if(valid){
                max_opts = <?php echo $counter; ?>;
                opts = [];
                choices = [];
                for(var i=1;i<max_opts+1;i++){
                    opts[i] = $("input[type='checkbox'][name=opt_"+i+"]").val();
                    //answer[i] = $("input[type='checkbox'][name=opt_"+i+"]:checked").val();
                    console.log(opts[i]);
                }

                // for(var i=1;i<=60;i++){
                //     answer[i] = $("input[type='radio'][name=opt_"+i+"]:checked").val();
                //     //outputs all of the values / answer pts 
                //     //console.log("questions_answer_val["+i+"]= "+answer[i]);    
                    
                //     //choice saver
                //     if(answer[i]==2){
                //         choices[i]=1;
                //     }
                //     else if(answer[i]==1){
                //         choices[i]=2;
                //     }
                //     else if(answer[i]==0){
                //         choices[i]=3;
                //     }
                //     else if(answer[i]==-1){
                //         choices[i]=4;
                //     }
                //     else if(answer[i]==-2){
                //         choices[i]=5;
                //     }
                //     //outputs all of the choices made / radio buttons clicked
                //     //console.log("choice_array["+i+"]= "+choices[i]);                             
                // }



                // $.ajax({
                // type: "POST",
                // data: {answer:answer},
                // url: "/thesis_git/php/answer-process.php",
                // success: function(answer){
                //     //console.log(answer);
                // }
                // });

                // $.ajax({
				// 	type: 'POST',
				// 	url: "tools/session-tool.php",
				// 	data: {page_num : page_num},
				// 	success: function(data){
                //         console.log(data);
				// 	},
				// 	error: function(data){
				// 		alert('Error!');
				// 	}
				// });

                //resets form and radio buttons checked
				//$("form").trigger("reset");
			}
			else{
        
			}
		});
    </script>

</body>
</html>