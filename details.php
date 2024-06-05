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
    <link rel='stylesheet' href='css/detail24.css'>

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
        margin-top: -145;
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
    </style>
</head>

<body>
    <div class='title'>
        <h3 id='title'> ព័ត៌មានរបស់និស្សិត</h3>
    </div>
    <!-- <h2 class = 'title'> បំពេញព័ត៌មាន</h2> -->
    <div class='container1'>
    
        <form action='' method='POST'>
    <div class="infor_personal">
        <div class="info">
        <h4 id="info_personal">ព័ត៌មានផ្ទាល់ខ្លួន​</h4>
            <!-- about name -->
            <input type='hidden' name='user_id' value="<?php echo $userId; ?>">
            <label for="id" id="id1">ID:</label>
            <input type="text" id="id" value="<?php echo $row['id'];?>"required>
            <label for='first_name' id='fname'>គោត្តនាម:</label>
            <input type='text' id='first_name' name='first_name' value="<?php echo $row['first_name'];?>"
                required><br><br>

            <!-- <label for = 'last_name' id = 'lname'>នាមខ្លួន:</label> -->
            <input type='text' id='last_name' name='last_name' value="<?php echo $row['last_name'];?>" required><br><br>

            <label for='latang' id='latang1'>អក្សរឡាតាំង:</label>
            <input type='text' id='latang' name='latang' value="<?php echo $row['latang'];?>" required>
            <!-- sex -->
            <label for='sex' id='sex'>ភេទ:</label>
            <input type='text' id='male' name='sex' value="<?php echo $row['sex'];?>">

            <!-- date of birth -->
            <label for='dob' id='date'>ថ្ងៃ ខែ​ ឆ្នាំកំណើត:</label>
            <input type='text' id='dob' value="<?php echo $row['dob'];?>">
            <!-- <input type = 'date' id = 'dob' name = 'dob' max = '2004-06-29' required><br><br> -->

            <!-- place of birth -->
            <label for='address' class='address'>អាសយដ្ឋាន:</label>
            <input type='text' id='address2' value="<?php echo $row['address'];?>">
            <!-- <textarea name = 'address' value = "<?php echo $row['address'];?>"  id = 'address1' cols = '78' rows = '2'  placeholder = 'ភូមិ ឃុំ ស្រុក ខេត្ត'  ></textarea> -->

            <!-- contact -->
            <label for='phone' class='phone'>លេខទូរសព្ទសាមីខ្លួន:</label>
            <input type='text' id='phone1' name='phone' value="<?php echo $row['phone'];?>" placeholder='0xx-xxx-xxx'
                required>
            <label for='parent_number' class='parent_number'>លេខទូរសព្ទអាណាព្យាបាល:</label>
            <input type='text' id='parent_number1' name='parent_number' value="<?php echo $row['parent_number'];?>"
                placeholder='0xx-xxx-xxx' required>
                </div>
                </div>
                <div class="info_study">
                <div class="info_stu">
                <h4 id="info_study">ព័ត៌មានអំពីការសិក្សា</h4>
               <label for='level_study' class='level_study'>កម្រិតសិក្សាបច្ចុប្បន្ន:</label>
            <input type='text' id='level_study1' value="<?php echo $row['level_study'];?>"> 
            <label for='place_exambacll' class='place_exambacll'>មណ្ឌលប្រឡង:</label>
            <input type='text' id='place_exambacll1' name='place_exambacll'
                value="<?php echo $row['place_exambacll'];?>" required>

            <label for="date_bacll" class="date_bacll">សម័យប្រឡង:</label>
                <input type='text' id='date_bacll1'  value="<?php echo $row['date_bacll'];?>">

            <label for="num_certificate"class="num_certificate">លេខសញ្ញាប័ត្រ:</label>
                <input type="text" id="num_certificate_1" name="num_certificate"
                value="<?php echo $row['num_certificate'];?>" >

            <label for="num_personal"class="num_personal">លេខអត្តសញ្ញាណប័ណ្ឌ:</label>
                <input type="text" id="num_personal_1" name="num_personal"
                value="<?php echo $row['num_personal'];?>" >

            <label for='number_room' class='number_room'>លេខបន្ទប់:</label>
                <input type='text' id='number_room1' name='number_room' value="<?php echo $row['number_room'];?>" required>
            <label for='number_table' class='number_table'>លេខតុ:</label>
                <input type='text' id='number_table1' name='number_table' value="<?php echo $row['number_table'];?>"
                required>


            <!-- high school -->
            <label for='end_of_highschool' class='end_of_highschool'>ចប់មកពីសាលា:</label>
            <input type='text' id='end_of_highschool1' name='end_of_highschool'
                value="<?php echo $row['end_of_highschool'];?>" required><br><br>
            <!-- level of study -->
            </div>
            </div>
            <div class="info_department">
            <h4 id="info_dep">ព័ត៌មានសម្រាប់ជំនាញ</h4>
            <label for="department" class="skill">ដេប៉ាតឺម៉ង់:</label>
            <input type='text' id='department' value="<?php echo $row['department'];?>"> 

            <label for="skill_one" class="skill1">ជម្រើសទី1:</label>
        <input type="text" id="skill1_1" name="skill_one" value="<?php echo $row['skill_one'];?>">
        <label for="skill_two" class="skill2">ជម្រើសទី2:</label>
        <input type="text" id="skill2_2" name="skill_two" value="<?php echo $row['skill_two'];?>">
        </div>
            <!-- Output img_student -->
            <!-- Output img_student -->
            <div id='image_data'>
                <div class="img_stu">
    <p id='img_student1'>រូបភាពនិស្សិត</p>
    <!-- Clickable student image -->
    <img src='uploads/<?php echo $row['img_student']; ?>' alt='Student Image' onclick="openFullscreen(this)">
    </div>
    <!-- Output birth certificate -->
    <p id='birth_certificate1'>សំបុត្រកំណើត:</p>
    <img src='uploads/<?php echo $row['birth_certificate']; ?>' alt='Birth Certificate' onclick="openFullscreen(this)">
    <!-- Output score image -->
    <p id='img_score1'>ប្រតិបត្តពិន្ទុ:</p>
    <img src='uploads/<?php echo $row['img_score']; ?>' alt='Score Image' onclick="openFullscreen(this)">
    <!-- Output certificate image -->
    <p id='certificate1'>សញ្ញាបត្រ:</p>
    <img src='uploads/<?php echo $row['certificate']; ?>' alt='Certificate Image' onclick="openFullscreen(this)">
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


            <!-- Output other form fields here... -->
            <a id='back1' href='show_data.php'>Back</a>

            
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

    <div class='popup' id='popup'>
        <!-- <h2>This is a Pop-up Window</h2> -->
        <!-- <i class = 'fa-solid fa-square-check' id = 'tick'></i> -->
        <i class='fa-solid fa-check'></i>
        <p>ទិន្ន័យរបស់លោកអ្នកត្រូវបានរក្សាទុករួចរាល់ </i></p>
        <button class='btn btn-primary' onclick='hidePopup()' id='back'>Back</button>

    </div>
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