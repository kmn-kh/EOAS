<?php
require_once( 'db_connection.php' );

$userId = $_GET[ 'id' ];

$sql = "SELECT * FROM table_form where id= $userId ";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
    // Output data of each row
    while ( $row = $result->fetch_assoc() ) {
?>

<!DOCTYPE html>
<html>

<head>
    <title>Detial</title>
    <link rel='stylesheet' href='css/detail_search4.css'>

    <!-- <link rel = 'stylesheet' href = 'css/infor1.css'> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
        integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
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
        width: 15%;
        margin: 10px;
        margin-top: -145px;
        float: left;
        display : flex; 
        flex-direction :column;
        border: 1px solid;
        border-color: green;
        border-radius: 5px 5px 5px 5px;
    }
    .img_stu{
        width: 13%;
        margin: 10px;
        margin-top: -700px;
        margin-left: 980px;
        float: left;
        display : flex; 
        flex-direction :column;
        border: 1px solid;
        border-color: green;
        border-radius: 5px 5px 5px 5px;
    }
    .imageWrapper1 img {
            width: 12%;
            cursor: pointer;
            margin: 10px;
            margin-top: -220px;
            margin-left: 850px;
            float: left;
            display : flex; 
            flex-direction :column;
            border: 1px solid;
            border-color: green;
            border-radius: 5px 5px 5px 5px;
        }
        .imageWrapper2 img {
            width: 15%;
            cursor: pointer;
            margin: 10px;
            margin-top: 0px;
            margin-left: 40px;
            float: left;
            display : flex; 
            flex-direction :column;
            border: 1px solid;
            border-color: green;
            border-radius: 5px 5px 5px 5px;
        }
        .imageWrapper3 img {
            width: 14%;
            cursor: pointer;
            margin: 10px;
            margin-top: -8px;
            margin-left: 40px;
            float: left;
            display : flex; 
            flex-direction :column;
            border: 1px solid;
            border-color: green;
            border-radius: 5px 5px 5px 5px;
        }
        .imageWrapper4 img {
            width: 14%;
            cursor: pointer;
            margin: 10px;
            margin-top: -8px;
            margin-left: 40px;
            float: left;
            display : flex; 
            flex-direction :column;
            border: 1px solid;
            border-color: green;
            border-radius: 5px 5px 5px 5px;
        }
        .imageWrapper5 img {
            width: 14%;
            cursor: pointer;
            margin: 10px;
            margin-top: -8px;
            margin-left: 40px;
            float: left;
            display : flex; 
            flex-direction :column;
            border: 1px solid;
            border-color: green;
            border-radius: 5px 5px 5px 5px;
        }
        #dw1{
            text-decoration: none;
            border: none;
            width: 10%;
            text-align: center;     
            /* background-color: rgb(0, 184, 122); */
            border-radius: 8px 8px 8px 8px; 
            color:black;
            margin: 10px;
            margin-top: -50px;
            margin-left: 900px;
            float: left; 
            
}

        #dw2{
            text-decoration: none;
            border: none;
            width: 10%;
            text-align: center;     
            border-radius: 8px 8px 8px 8px; 
            color:black;
            margin: 10px;
            margin-top: -43px;
            margin-left: -80px;
            float: left;             
        }
        #dw3{
            text-decoration: none;
            border: none;
            width: 10%;
            text-align: center;     
            border-radius: 8px 8px 8px 8px; 
            color:black;
            margin: 10px;
            margin-top: -43px;
            margin-left: -80px;
            float: left;             
        }
        #dw4{
            text-decoration: none;
            border: none;
            width: 10%;
            text-align: center;     
            border-radius: 8px 8px 8px 8px; 
            color:black;
            margin: 10px;
            margin-top: -43px;
            margin-left: -80px;
            float: left;             
        }
        #dw5{
            text-decoration: none;
            border: none;
            width: 10%;
            text-align: center;     
            border-radius: 8px 8px 8px 8px; 
            color:black;
            margin: 10px;
            margin-top: -43px;
            margin-left: -44px;
            float: left;             
        }
    </style>
</head>

<body>
<div class='title'>
        <h3 class='change'> ព័ត៌មានរបស់និស្សិត</h3>
    </div>
    <!-- <h2 class = 'title'> បំពេញព័ត៌មាន</h2> -->
    <div class='container1'>
    
        <form action='' method='POST'>
        <div class="inf_personal">
            <h4 id="caption">ព័ត៌មានផ្ទាល់ខ្លួន​</h4>
        
            <input type='hidden' name='user_id' value="<?php echo $userId; ?>">
            
        <table>
            <tr>
                <td>
            <label for="id" id="id1">ID:</label>
             <input type="text" class="id" value="<?php echo $row['id'];?>"required>
                </td>
             </tr>
        </table>

        <table>
            <tr>
                <td>
            <label for='first_name' id='fname'>ឈ្មោះ:</label>
                <input type='text' id='first_name' name='first_name' value="<?php echo $row['first_name']; ?>" required>
                
                <input type='text' id='last_name' name='last_name' value="<?php echo $row['last_name']; ?>" required>
                
            <label for = 'latang' id = 'latang1'>អក្សរឡាតាំង:</label>
                <input type = 'text' id = 'latang' name = 'latang' value = "<?php echo $row['latang'];?>" required>
                  <!-- sex -->
            <label for='sex' id='sex'>ភេទ:</label>
                <input type='text' id='male' name='sex' value="<?php echo $row['sex'];?>">

                </td>
             </tr>
        </table>
            
        <table>
            <tr>
                <td>
                           <!-- date of birth -->
            <label for='dob' id='date'>ថ្ងៃ ខែ​ ឆ្នាំកំណើត:</label>
                <input type='date' name="dob" id='dob' value="<?php echo $row['dob']; ?>">
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
                <input type='text' name="address" id='address2' value="<?php echo $row['address'];?>">
                </td>
             </tr>
        </table>
             
        <table>
            <tr>
                <td>
            <label for='province' class='province'>ខេត្ត:</label>
                <input type='text' name="province" id='province1' value="<?php echo $row['province'];?>"> 
                </td>
             </tr>
        </table>



        <table>
            <tr>
                <td>
            <label for='phone' class='phone'>លេខទូរសព្ទសាមីខ្លួន:</label>
                <input type='text' id='phone1' name='phone' value="<?php echo $row['phone'];?>" placeholder='0xx-xxx-xxx'
                required>
            <label for='parent_number' class='parent_number'>លេខទូរសព្ទអាណាព្យាបាល:</label>
                <input type='text' id='parent_number1' name='parent_number' value="<?php echo $row['parent_number'];?>"
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
                <input type='text' name="level_study" id='level_study1' value="<?php echo $row['level_study'];?>"> 
                </td>
             </tr>
        </table>

        <table>
            <tr>
                <td>
                    <!-- bacll -->
            <label for='place_exambacll' class='place_exambacll'>មណ្ឌលប្រឡង:</label>
                <input type='text' id='place_exambacll1' name='place_exambacll'value="<?php echo $row['place_exambacll'];?>" required>
                
            <label for="date_bacll" class="date_bacll">សម័យប្រឡង:</label>
                <input type='date' name="date_bacll" id='date_bacll1'  value="<?php echo $row['date_bacll'];?>">

                </td>
             </tr>
        </table>

        <table>
            <tr>
                <td>
            <label for='number_room' class='number_room'>លេខបន្ទប់:</label>
                <input type='text' id='number_room1' name='number_room' value="<?php echo $row['number_room'];?>" required>
            <label for='number_table' class='number_table'>លេខតុ:</label>
                <input type='text' id='number_table1' name='number_table' value="<?php echo$row['number_table'];?>"required>
                
                </td>
             </tr>
        </table>

        <table>
            <tr>
                <td>
            <label for="num_certificate"class="num_certificate">លេខសញ្ញាប័ត្រ:</label>
                <input type="text" id="num_certificate_1" name="num_certificate"value="<?php echo$row['num_certificate'];?>" >
            <label for="num_personal"class="num_personal">លេខអត្តសញ្ញាណប័ណ្ឌ:</label>
                <input type="text" id="num_personal_1" name="num_personal"value="<?php echo $row['num_personal'];?>" >
                </td>
             </tr>
        </table>
           

        <table>
            <tr>
                <td>
                    <!-- high school -->
            <label for='end_of_highschool' class='end_of_highschool'>ចប់មកពីសាលា:</label>
                <input type='text' id='end_of_highschool1' name='end_of_highschool'value="<?php echo$row['end_of_highschool'];?>" required>
                </td>
             </tr>
        </table>


        <table>
            <tr>
                <td>
                    <!-- high school -->
            <label for='grade' class='grade'>និទ្ទេស:</label>
                <input type='text' id='grade' name='grade'value="<?php echo$row['grade'];?>" required>
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
                <input type='text' name="grade_stu" id='grade_stu' value="<?php echo $row['grade_stu'];?>"> 
                </td>
             </tr>
        </table>
           
        <table>
            <tr>
                <td>

            <label for="skill_one" class="skill1">ជម្រើសទី1:</label>
                <input type="text" id="skill1_1" name="skill_one" value="<?php echo $row['skill_one'];?>">
            <label for="skill_two" class="skill2">ជម្រើសទី2:</label>
                <input type="text" id="skill2_2" name="skill_two" value="<?php echo $row['skill_two'];?>">
        </div>
                </td>
            </tr>
        </table>

           
                <p id='img_student1'>រូបភាពនិស្សិត</p>
<div class="imageWrapper1">
    <img src='uploads/<?php echo $row['img_student']; ?>' alt='Student Image' onclick="openFullscreen(this)">
    <a id="dw1" href='uploads/<?php echo $row['img_student']; ?>' download class="fa-solid fa-download"></a>
</div>
<p id='birth_certificate'>សំបុត្រកំណើត:</p>
<div class="imageWrapper2">
    <img src='uploads/<?php echo $row['birth_certificate']; ?>' alt='Birth Certificate' onclick="openFullscreen(this)">
    <a id="dw2" href='uploads/<?php echo $row['birth_certificate']; ?>' download class="fa-solid fa-download"></a>
</div>
<p id='img_score1'>ប្រតិបត្តពិន្ទុ:</p>
<div class="imageWrapper3">
    <img src='uploads/<?php echo $row['img_score']; ?>' alt='Score Image' onclick="openFullscreen(this)">
    <a id="dw3" href='uploads/<?php echo $row['img_score']; ?>' download class="fa-solid fa-download"></a>
</div>
<p id='certificate1'>សញ្ញាបត្រ:</p>
<div class="imageWrapper4">
    <img src='uploads/<?php echo $row['certificate']; ?>' alt='Certificate Image' onclick="openFullscreen(this)">
    <a id="dw4" href='uploads/<?php echo $row['certificate']; ?>' download class="fa-solid fa-download"></a>
</div>
<p id='khmer_card'>អត្តសញ្ញាណប័ណ្ឌ:</p>
<div class="imageWrapper5">
    <img src='uploads/<?php echo $row['khmer_card']; ?>' alt='khmer_card Image' onclick="openFullscreen(this)">
    <a id="dw5" href='uploads/<?php echo $row['khmer_card']; ?>' download class="fa-solid fa-download"></a>
</div>

<script>
    function openFullscreen(elem) {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) { /* Safari */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE11 */
            elem.msRequestFullscreen();
        }
    }
    
</script>


            <!-- Output other form fields here...
            <a id='back1' href='show_data.php'>Back</a>

             -->
            <?php
    }
}
$conn ->close();
?>
            <!-- <button class = 'btn btn-primary' onclick = 'showPopup()'>Submit</button> -->

        </form>
    </div>

    <!-- img_php -->

    <!-- **img_php -->

    <!-- pop up here  -->
    <?php
if ( isset( $_SESSION[ 'INSERT_DONE' ] ) ) {
    ?>

    <!-- <div class='popup' id='popup'>
        <!-- <h2>This is a Pop-up Window</h2> -->
        <!-- <i class = 'fa-solid fa-square-check' id = 'tick'></i> -->
        <i class='fa-solid fa-check'></i>
        <p>ទិន្ន័យរបស់លោកអ្នកត្រូវបានរក្សាទុករួចរាល់ </i></p>
        <button class='btn btn-primary' onclick='hidePopup()' id='back'>Back</button>

    </div> -->
    <div class='overlay' id='overlay'></div>

    <?php
}
unset( $_SESSION[ 'INSERT_DONE' ] );

?>

    <script>
    function showPopup() {
        document.getElementById('popup').classList.add('show-popup');
        document.getElementById('overlay').classList.add('show-popup');
    }

    function hidePopup() {
        // document.getElementById( 'popup' ).classList.remove( 'show-popup' );
        // document.getElementById( 'overlay' ).classList.remove( 'show-popup' );

        var popUp = document.getElementById('popup');
        var overLay = document.getElementById('overlay');

        popUp.style.display = 'none';
        overLay.style.display = 'none';

    }
    </script>

</body>

</html>