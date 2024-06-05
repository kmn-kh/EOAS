<?php
require_once('db_connection.php');

?>
<div class="insert_form">
    <h2 class="title"> បំពេញព័ត៌មាន</h2>
    <div class="container1">
        <form action="process_form.php" method="POST">

            <!-- about name -->

            <label for="first_name" id="fname">នាមត្រកូល:</label>
            <input type="text" id="first_name" name="first_name" required><br><br>

            <label for="last_name" id="lname">នាមខ្លួន:</label>
            <input type="text" id="last_name" name="last_name" required><br><br>

            <label for="latang" id="latang1">អក្សរឡាតាំង:</label>
            <input type="text" id="latang" name="latang" required><br><br>
            <!-- sex -->
            <label for="sex" id="sex">ភេទ:</label>
            <input type="radio" id="male" name="sex" value="male">
            <label for="male" id="male2">Male</label><br><br>
            <input type="radio" id="female" name="sex" value="female">
            <label for="female" id="female2">Female</label>

            <!-- date of birth -->
            <label for="dob" id="date">ថ្ងៃ ខែ​ ឆ្នាំកំណើត:</label>
            <input type="date" id="dob" name="dob" max="2004-06-29" required><br><br>

            <!-- place of birth -->
            <label for="address" class="address">អាសយដ្ឋាន:</label>
            <textarea name="address" id="address1" cols="78" rows="2" placeholder="ភូមិ ឃុំ ស្រុក ខេត្ត"></textarea>

            <!-- contact -->
            <label for="phone" class="phone">លេខទូរសព្ទសាមីខ្លួន:</label>
            <input type="text" id="phone1" name="phone" placeholder="0xx-xxx-xxx" required><br><br>
            <label for="parent_number" class="parent_number">លេខទូរសព្ទអាណាព្យាបាល:</label>
            <input type="text" id="parent_number1" name="parent_number" placeholder="0xx-xxx-xxx" required><br><br>
            <!-- high school -->
            <label for="end_of_highschool" class="end_of_highschool">ចប់មកពីសាលា:</label>
            <input type="text" id="end_of_highschool1" name="end_of_highschool" required><br><br>
            <!-- level of study -->
            <label for="level_study" class="level_study">កម្រិតសិក្សាបច្ចុប្បន្ន:</label>
            <select name="level_study" id="level_study1">
                <option value="មធ្យមសិក្សាទុយភូមិ ">មធ្យមសិក្សាទុយភូមិ</option>
                <option value="បរិញ្ញាបត្រ ">បរិញ្ញាបត្រ</option>
                <option value="បរិញ្ញាបត្ររង">បរិញ្ញាបត្ររង</option>
                <option value="9+3 ">9+3</option>
            </select><br><br>


            <!-- bacll -->
            <label for="place_exambacll" class="place_exambacll">មណ្ឌលប្រឡង:</label>
            <input type="text" id="place_exambacll1" name="place_exambacll" required><br><br>
            <label for="number_room" class="number_room">លេខបន្ទប់:</label>
            <input type="text" id="number_room1" name="number_room" required><br><br>
            <label for="number_table" class="number_table">លេខតុ:</label>
            <input type="text" id="number_table1" name="number_table" required><br><br>


            <!-- allbum image-->
            <p id="img_student1">រូបភាពនិស្សិត:</p>
            <input type="file" name="img_student" value="multiple" class="img_student"></input><br>

            <p id="birth_certificate1">សំបុត្រកំណើត:</p>
            <input type="file" name="birth_certificate" value="multiple" class="birth_certificate"></input><br>

            <p id="img_score1">ប្រតិបត្តពិន្ទុ:</p>
            <input type="file" name="img_score" value="multiple" class="img_score"></input><br>

            <p id="certificate1">សញ្ញាបត្រ:</p>
            <input type="file" name="certificate" value="multiple" class="certificate"></input><br>


            <input name="submit" type="submit" value="Submit" class="submit">
            <input type="reset" value="Reset" class="Reset">
            <button name="submit" onclick="showPopup()" class="submit">Submit</button>
            <button name="submit" class="submit">Submit</button>


            <!-- <button class="btn btn-primary" onclick="showPopup()">Submit</button> -->
        </form>


        <!-- pop up here  -->
        <?php
        if (isset($_SESSION['INSERT_DONE'])) {
            ?>

            <div class="popup" id="popup">
                <!-- <h2>This is a Pop-up Window</h2> -->
                <!-- <i class="fa-solid fa-square-check" id="tick"></i> -->
                <i class="fa-solid fa-check"></i>
                <p>ទិន្ន័យរបស់លោកអ្នកត្រូវបានរក្សាទុករួចរាល់ </i></p>
                <button class="btn btn-primary" onclick="hidePopup()" id="back">Back</button>

            </div>
            <div class="overlay" id="overlay"></div>
        </div>
        <?php
        }
        unset($_SESSION['INSERT_DONE']);

        ?>
</div>

<script>
    function showPopup() {
        document.getElementById('popup').classList.add('show-popup');
        document.getElementById('overlay').classList.add('show-popup');
    }

    function hidePopup() {
        // document.getElementById('popup').classList.remove('show-popup');
        // document.getElementById('overlay').classList.remove('show-popup');

        var popUp = document.getElementById('popup');
        var overLay = document.getElementById('overlay');

        popUp.style.display = 'none';
        overLay.style.display = 'none';

    }
</script>