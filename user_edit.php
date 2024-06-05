<?php
require_once("Connect_db/connect_db.php");

// Check if 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Select user data based on the provided ID
    $sql = "SELECT * FROM table_form WHERE id = $userId";
    $result = $conn->query($sql);

    // Check if there are rows returned from the query
    if ($result->num_rows > 0) {
        // Fetch user data as an associative array
        $row = $result->fetch_assoc();
    } else {
        // Handle the case where no user with the given ID is found
        echo "User not found";
        exit; // Stop executing the script
    }
} else {
    // Handle the case where 'id' parameter is not provided in the URL
    echo "ID parameter is missing";
    exit; // Stop executing the script
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="css/user_logout.css">
    <link rel="stylesheet" href="menu/menu.css">
    <link rel="stylesheet" href="Header/style1.css">
    <link rel="stylesheet" href="Footer/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
       #student_image2 {
            width: 35%;
            border-radius: 50%; /* Set border radius to create a circular shape */
            border: 2px solid hsl(199, 71%, 39%);
            margin-left: 110px;
            padding:3px;
            cursor: pointer; /* Add cursor pointer for clickable image */
        }

        /* Add a class for full screen */
        .fullscreen-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .fullscreen-image img {
            max-width: 200%;
            max-height: 100%;
            display: block;
        }

        .exit-button {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }


        /* .dropdown-btn {
            background-color: rgb(4, 151, 102);
            width:100%;
            height:8vh;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 302px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }

       
        .dropdown-content a {
            color: black;
            margin-left: 80px;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s;
        }

       
        .dropdown-content a:hover {
            color:rgb(22, 187, 0);
          
        }

       
        .dropdown:hover .dropdown-content {
            display: block;
        }

       
        .dropdown {
            position: relative;
            display: inline-block;
        }

        
        .dropdown-content i {
            margin-right: 5px;
        } */
        /* #first_name{
            font-family: Khmer OS Content;
            font-size:15px;
            color:white;
            margin-left: 40px;
            border: none;
            background-color: rgba(215, 215, 215, 0)
        }
        #last_name{
            font-family: Khmer OS Content;
            font-size:15px;
            color:white;
            margin-left: -160px;
            border: none;
            background-color: rgba(215, 215, 215, 0)
        } */
        .fa-caret-down{
            margin-left: -10px;
        }
        /* #first_name1 {
        font-family: Khmer OS Content;
        margin-left: 130px;
        margin-top: 30px;
        border: none;
        background-color: rgba(215, 215, 215, 0);
        }
        #last_name1{
        font-family: Khmer OS Content;
        margin-left: -160px;
        margin-top:50px;
        border: none;
        background-color: rgba(215, 215, 215, 0);
        } */

    </style>
    <!-- style menu -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- /style menu -->
</head>
<body>
<?php 
    include("Header/header.php");
    ?>
      <?php 
    include("menu/menu.php");
    ?>
<div class="profile">
    
    <div class="form">
        <form action="">

        
        <img id='student_image2' src='uploads/<?php echo $row['img_student']; ?>' alt='Student Image' data-fullscreen onclick="toggleFullscreen()"><br>
        <a  href="user_edit.php?id=<?php echo $userId; ?>" style="font-family: Khmer OS Content; color:white;text-decoration: none;
        margin-left: 90px;  border: none;background-color: rgb(0, 164, 93); border-top-left-radius: 8px; 
        border-bottom-right-radius: 8px;padding:5px;">
        កែប្រែពត៌មានផ្ទាល់ខ្លួន <i class="fas fa-pen-to-square"></i></a>
        <a href="logout.php" style="font-family: Khmer OS Content; color:white;text-decoration: none;
        margin-left: 3px;  border: none;background-color: rgb(239, 74, 74); border-top-left-radius: 8px; 
        border-bottom-right-radius: 8px;padding:5px;">ចាកចេញ <i class="fas fa-right-from-bracket"></i></a>


       
        
 



   
        <label for='first_name' id='fname1'>ឈ្មោះ:</label>
        <input type='text' id='first_name1' name='first_name' value="<?php echo $row['first_name']; ?>" required>
                
        <input type='text' id='last_name1' name='last_name' value="<?php echo $row['last_name']; ?>" required><br>
 
        
    
        
        <label for='latang' id='latang2'>អក្សរឡាតាំង:</label>
            <input type='text' id='latang3' name='latang' value="<?php echo $row['latang'];?>" required><br>
 <!-- sex -->
 
 <label for='sex' id='sex1'>ភេទ:</label>
            <input type='text' id='male1' name='sex' value="<?php echo $row['sex'];?>">
            <!-- date of birth -->
            <label for='dob' id='date1'>ថ្ងៃ ខែ​ ឆ្នាំកំណើត:</label>
            <input type='text' id='dob1' value="<?php echo $row['dob'];?>">
            <label for='phone' class='phone1'>លេខទូរសព្ទ:</label>
            <input type='text' id='phone2' name='phone' value="<?php echo $row['phone'];?>" placeholder='0xx-xxx-xxx'
                required>
            
            </form>
       
       </div>
            </div>

            
       <!-- <input type="submit" name="logout" value="Logout"  > -->
        
        





</body>
</html>









<?php
require_once("Connect_db/connect_db.php");

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Retrieve user details based on ID
    $sql = "SELECT * FROM table_form WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $userDetails = $result->fetch_assoc();
    } else {
        echo "User not found.";
        // Redirect or handle accordingly
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid user ID.";
    // Redirect or handle accordingly
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Form</title>
    <link rel='stylesheet' href='css/update27.css'>
    <link rel='stylesheet' href='login'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    <link rel='stylesheet' href='css/popup.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
    #image_data {
        width: 100%;
        
    }
    #image_data>img:hover{
        /* background-color: rgb(165, 165, 165);
        color: black; */
        transition: 3ms;
    }
    #image_data>img {
        width: 10%;
        margin: 10px;
        margin-top: 520px;
        float: left;
        display : flex; 
        flex-direction :column;
        border: 1px solid;
        border-color: green;
        border-radius: 5px 5px 5px 5px;
        /* position: absolute;
        top: 50; */
    }
    #student_image{
        width: 13%;
        margin: 10px;
        margin-top: -1230px;
        margin-left: 780px;
        float: left;
        display : flex; 
        flex-direction :column;
        border: 1px solid;
        border-color: green;
        border-radius: 5px 5px 5px 5px;
    }
    #birth_certificate_image{
        width: 15%;
        margin: 10px;
        margin-top: -20px;
        margin-left: 40px;
        float: left;
        display : flex; 
        flex-direction :column;
        border: 1px solid;
        border-color: green;
        border-radius: 5px 5px 5px 5px;
    }
    #certificate_image{
        width: 14%;
        margin: 10px;
        margin-top: -20px;
        margin-left: 390px;
        float: left;
        display : flex; 
        flex-direction :column;
        border: 1px solid;
        border-color: green;
        border-radius: 5px 5px 5px 5px;
    }
    
    #score_image{
        width: 14%;
        margin: 10px;
        margin-top: -20px;
        margin-left: 230px;
        float: left;
        display : flex; 
        flex-direction :column;
        border: 1px solid;
        border-color: green;
        border-radius: 5px 5px 5px 5px;
    }
    #khmer_card_image{
        width: 14%;
        margin: 10px;
        margin-top: -20px;
        margin-left: 570px;
        float: left;
        display : flex; 
        flex-direction :column;
        border: 1px solid;
        border-color: green;
        border-radius: 5px 5px 5px 5px;
    }
    

    </style>
</head>
<body>

<?php if (isset($userDetails)) : ?>
    <div class='title'>
        <h3 class='change'>កែប្រែព័ត៌មាន</h3>
    </div>

<div class='container1'>
    <form action='Process/process_update.php' method='POST' enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $userDetails['id']; ?>">

            <!-- about name -->
    <div class="inf_personal">
            <h4 id="caption">ព័ត៌មានផ្ទាល់ខ្លួន​</h4>
        
            <input type='hidden' name='user_id' value="<?php echo $userId; ?>">
            
        <table>
            <tr>
                <td>
            <label for="id" id="id1">ID:</label>
             <input type="text" class="id" value="<?php echo $userDetails['id'];?>"required>
                </td>
             </tr>
        </table>

        <table>
            <tr>
                <td>
            <label for='first_name' id='fname'>ឈ្មោះ:</label>
                <input type='text' id='first_name' name='first_name' value="<?php echo $userDetails['first_name']; ?>" required>
                
                <input type='text' id='last_name' name='last_name' value="<?php echo $userDetails['last_name']; ?>" required>
                
            <label for = 'latang' id = 'latang1'>អក្សរឡាតាំង:</label>
                <input type = 'text' id = 'latang' name = 'latang' value = "<?php echo $userDetails['latang'];?>" required>
                  <!-- sex -->
            <label for='sex' id='sex'>ភេទ:</label>
                <input type='text' id='male' name='sex' value="<?php echo $userDetails['sex'];?>">

                </td>
             </tr>
        </table>
            
        <table>
            <tr>
                <td>
                           <!-- date of birth -->
            <label for='dob' id='date'>ថ្ងៃ ខែ​ ឆ្នាំកំណើត:</label>
                <input type='date' name="dob" id='dob' value="<?php echo $userDetails['dob']; ?>">
                </td>
             </tr>
        </table>
          
        <table>
            <tr>
                <td>
  <!-- place of birth -->
                <label for='address' class='address'>អាសយដ្ឋាន:</label>
                
                </td>
                <td>
                <input type='text' name="address" id='address2' value="<?php echo $userDetails['address'];?>">
                </td>
             </tr>
        </table>
        <table>
            <tr>
                <td>
            <label for='province' class='province'>ខេត្ត:</label>
                <input type='text' name="province" id='province1' value="<?php echo $userDetails['province'];?>"> 
                </td>
             </tr>
        </table>

        <table>
            <tr>
                <td>
            <label for='phone' class='phone'>លេខទូរសព្ទសាមីខ្លួន:</label>
                <input type='text' id='phone1' name='phone' value="<?php echo $userDetails['phone'];?>" placeholder='0xx-xxx-xxx'
                required>
            <label for='parent_number' class='parent_number'>លេខទូរសព្ទអាណាព្យាបាល:</label>
                <input type='text' id='parent_number1' name='parent_number' value="<?php echo $userDetails['parent_number'];?>"
                placeholder='0xx-xxx-xxx' required>
                    </div>
                </td>
             </tr>
        </table>

    <div class="inf_study">
        <h4 id="info_study">ព័ត៌មានអំពីការសិក្សា</h4> 
               
        <table>
            <tr>
                <td>
            <label for='level_study' class='level_study'>កម្រិតសិក្សាបច្ចុប្បន្ន:</label>
                <input type='text' name="level_study" id='level_study1' value="<?php echo $userDetails['level_study'];?>"> 
                </td>
             </tr>
        </table>

        <table>
            <tr>
                <td>


                
                    <!-- bacll -->
            <label for='place_exambacll' class='place_exambacll'>មណ្ឌលប្រឡង:</label>
                <input type='text' id='place_exambacll1' name='place_exambacll'value="<?php echo $userDetails['place_exambacll'];?>" required>
                
            <label for="date_bacll" class="date_bacll">សម័យប្រឡង:</label>
                <input type='date' name="date_bacll" id='date_bacll1'  value="<?php echo $userDetails['date_bacll'];?>">

                </td>
             </tr>
        </table>

        <table>
            <tr>
                <td>
            <label for='number_room' class='number_room'>លេខបន្ទប់:</label>
                <input type='text' id='number_room1' name='number_room' value="<?php echo $userDetails['number_room'];?>" required>
            <label for='number_table' class='number_table'>លេខតុ:</label>
                <input type='text' id='number_table1' name='number_table' value="<?php echo $userDetails['number_table'];?>"required>
                
                </td>
             </tr>
        </table>

        <table>
            <tr>
                <td>
            <label for="num_certificate"class="num_certificate">លេខសញ្ញាប័ត្រ:</label>
                <input type="text" id="num_certificate_1" name="num_certificate"value="<?php echo$userDetails['num_certificate'];?>" >
            <label for="num_personal"class="num_personal">លេខអត្តសញ្ញាណប័ណ្ឌ:</label>
                <input type="text" id="num_personal_1" name="num_personal"value="<?php echo $userDetails['num_personal'];?>" >
                </td>
             </tr>
        </table>
           

        <table>
            <tr>
                <td>
                    <!-- high school -->
            <label for='end_of_highschool' class='end_of_highschool'>ចប់មកពីសាលា:</label>
                <input type='text' id='end_of_highschool1' name='end_of_highschool'value="<?php echo $userDetails['end_of_highschool'];?>" required>
                </td>
             </tr>
        </table>
        <table>
            <tr>
                <td>
                    <!-- high school -->
            <label for='grade' class='grade'>និទ្ទេស:</label>
                <input type='text' id='grade' name='grade'value="<?php echo$userDetails['grade'];?>" required>
                </td>
             </tr>
        </table>
            
            <!-- level of study -->
            </div>
</div>
    <div class="info_department">
         
            <h4 id="dep_info">ជ្រើសរើសជំនាញសិក្សា</h4>
            
            <table>
            <tr>
                <td>
            <label for='grade_stu' class='grade_stu'>កម្រិតសិក្សាបច្ចុប្បន្ន:</label>
                <input type='text' name="grade_stu" id='grade_stu' value="<?php echo $userDetails['grade_stu'];?>"> 
                </td>
             </tr>
        </table>
           
        <table>
            <tr>
                <td>

            <label for="skill_one" class="skill1">ជម្រើសទី១:</label>
                <input type="text" id="skill1_1" name="skill_one" value="<?php echo $userDetails['skill_one'];?>">
            <label for="skill_two" class="skill2">ជម្រើសទី២:</label>
                <input type="text" id="skill2_2" name="skill_two" value="<?php echo $userDetails['skill_two'];?>">
        </div>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                
                    <div id='image_data'>
                        <div class="img_stu">
                            <h4 class="add_inf">ឯកសារភ្ជាប់</h4>
                            <td><p id='img_student2'>រូបភាពនិស្សិត:</p></td>

    <label for="student_file_input">
        <img id='student_image' src='uploads/<?php echo $userDetails['img_student']; ?>' alt='Student Image'>
    </label>
    <td><input type="file" id="student_file_input" style="display:none;" accept="image/*" onchange="changeImage('student', event)">    </td>
  


    <table>
            <tr>
                <td>
    <p id='birth_certificate'>សំបុត្រកំណើត:</p>
    <label for="birth_certificate_file_input">
        <img id='birth_certificate_image' src='uploads/<?php echo $userDetails['birth_certificate']; ?>' alt='Birth Certificate'>
    </label>
    <input type="file" id="birth_certificate_file_input" style="display:none;" accept="image/*" onchange="changeImage('birth_certificate', event)">

    <p id='img_score1'>ប្រតិបត្តពិន្ទុ:</p>
    <label for="score_file_input">
        <img id='score_image' src='uploads/<?php echo $userDetails['img_score']; ?>' alt='Score Image'>
    </label>
    <input type="file" id="score_file_input" style="display:none;" accept="image/*" onchange="changeImage('score', event)">

    
    <p id='certificate1'>សញ្ញាបត្រ:</p>
    <label for="certificate_file_input">
        <img id='certificate_image' src='uploads/<?php echo $userDetails['certificate']; ?>' alt='Certificate Image'>
    </label>
    <input type="file" id="certificate_file_input" style="display:none;" accept="image/*" onchange="changeImage('certificate', event)">

    <p id='khmer_card'>អត្តសញ្ញាណប័ណ្ឌ:</p>
    <label for="khmer_card_file_input">
        <img id='khmer_card_image' src='uploads/<?php echo $userDetails['khmer_card']; ?>' alt='khmer_card Image'>
    </label>
    <input type="file" id="khmer_card_file_input" style="display:none;" accept="image/*" onchange="changeImage('khmer_card', event)">
    </div>
</div>
</div>
        



<script>
    function showPopupMessage() {
        var popup = document.getElementById("popup_message");
        popup.style.display = "block";
        setTimeout(function() {
            popup.style.display = "none";
        }, 3000); // 3000 milliseconds (3 seconds) before hiding the popup
    }
</script>

<script>
   function changeImage(type, event) {
    var file = event.target.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById(type + '_image').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
}


</script>
                <!-- Submit Button -->
                <button type='submit' name='submit' class='submit1'>រក្សាទុក</button>
                <!-- Back Link -->
        </form>
        <!-- <a class="back1" href="detail.php?id=<?php echo $userId; ?>" >Back to Details</a> -->
    </div>

<?php endif; ?>

</body>

</html>
    