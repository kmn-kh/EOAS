<?php
// include("../EOAS/form/process_form.php");

// include("form/db_connection.php.php");

?>



<!DOCTYPE html>
<html>

<head>
    <title>Insert Form</title>
    <link rel="stylesheet" href="css/form19.css">
    <link rel="stylesheet" href="../EOAS/Header/style1.css">
    <link rel="stylesheet" href="../EOAS/menu/menu.css">
    <link rel="stylesheet" href="Footer/footer.css">
    <!-- <link rel="stylesheet" href="css/infor1.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/popup1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS for setting the font to Khmer OS Content */
        body {
            font-family: "Khmer OS Content", Arial, sans-serif;
        }

        select {
            font-family: "Khmer OS Content", Arial, sans-serif;
        }
    </style>
</head>

<body>
    <?php
    include ("../EOAS/Header/header.php");
    ?>
    <?php
    include ("../EOAS/menu/menu.php");
    ?>
    <div class="title">
        <h2 class="change"> បំពេញព័ត៌មាន</h2>
    </div>
    <!-- <h2 class="title"> បំពេញព័ត៌មាន</h2> -->
    <div class="container1">
        <form action="process_form.php" method="POST" enctype="multipart/form-data">

            <!-- about name -->

            <div class="info">
                <h4 id="info_personal">ព័ត៌មានផ្ទាល់ខ្លួន​</h4>
                <table>
                    <tr>
                        <td>
                            <label for="first_name" id="fname">នាមត្រកូល:</label>
                        <td><input type="text" id="first_name" name="first_name" required></td>

                        <td> <label for="last_name" id="lname">នាមខ្លួន:</label>
                        <td><input type="text" id="last_name" name="last_name" required></td>
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>
                            <label for="latang" id="latang1">អក្សរឡាតាំង:</label>
                        <td><input type="text" id="latang" name="latang" required></td>
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>
                            <label for="sex" id="sex">ភេទ:</label>
                            <input type="radio" id="male" name="sex" value="ប្រុស">
                            <label for="ប្រុស" id="male2">ប្រុស</label>
                            <input type="radio" id="female" name="sex" value="ស្រី">
                            <label for="ស្រី" id="female2">ស្រី</label>
                        </td>
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>
                            <label for="dob" class="dob">ថ្ងៃ ខែ​ ឆ្នាំកំណើត:</label>
                        <td><input type="date" id="dob" name="dob" max="1990-00-00" required> </td>

                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>
                            <label for="address" class="address">អាសយដ្ឋាន:</label>
                            <textarea name="address" id="address1" cols="76.8" rows="2"
                                placeholder="ភូមិ ឃុំ ស្រុក ខេត្ត"></textarea>

                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <label for="province" class="province">ខេត្ត:</label>
                                    </td>
                                    <td>
                                        <select name="province" id="province1">
                                            <option value="ខេត្តកំពត">ខេត្តកំពត</option>
                                            <option value="ខេត្តកំពង់ស្ពឺ">ខេត្តកំពង់ស្ពឺ</option>
                                            <option value="ខេត្តព្រះវិហារ">ខេត្តព្រះវិហារ</option>
                                            <option value="ខេត្តព្រះសីហនុ">ខេត្តព្រះសីហនុ</option>
                                            <option value="ខេត្តរតនគីរី">ខេត្តរតនគីរី</option>
                                            <option value="ខេត្តព្រៃវែង">ខេត្តព្រៃវែង</option>
                                            <option value="ខេត្តស្ទឹងត្រែង">ខេត្តស្ទឹងត្រែង</option>
                                            <option value="ខេត្តមណ្ឌលគីរី">ខេត្តមណ្ឌលគីរី</option>
                                            <option value="ខេត្តត្បូងឃ្មុំ">ខេត្តត្បូងឃ្មុំ</option>
                                            <option value="ខេត្តតាកែវ">ខេត្តតាកែវ</option>
                                            <option value="ខេត្តកែប">ខេត្តកែប</option>
                                            <option value="ខេត្តពោធិ៍សាត់">ខេត្តពោធិ៍សាត់</option>
                                            <option value="ខេត្តសៀមរាម">ខេត្តសៀមរាម</option>
                                            <option value="ខេត្តកំពង់ឆ្នាំង">ខេត្តកំពង់ឆ្នាំង</option>
                                            <option value="ខេត្តកំពង់ធំ">ខេត្តកំពង់ធំ</option>
                                            <option value="ខេត្តស្វាយរៀង">ខេត្តស្វាយរៀង</option>
                                            <option value="ខេត្តកំពង់ចាម">ខេត្តកំពង់ចាម</option>
                                            <option value="ខេត្តបាត់ដំបង">ខេត្តបាត់ដំបង</option>
                                            <option value="ខេត្តឧត្តរមានជ័យ">ខេត្តឧត្តរមានជ័យ</option>
                                            <option value="ខេត្តបន្ទាយមានជ័យ">ខេត្តបន្ទាយមានជ័យ</option>
                                            <option value="ខេត្តកណ្ដាល">ខេត្តកណ្ដាល</option>
                                            <option value="ខេត្តក្រចេះ">ខេត្តក្រចេះ</option>
                                            <option value="ខេត្តប៉ៃលិន">ខេត្តប៉ៃលិន</option>
                                            <option value="ទីក្រុងភ្នុំពេញ">ទីក្រុងភ្នុំពេញ</option>
                                            <option value="ខេត្តកោះកុង">ខេត្តកោះកុង</option>
                                        </select>
                                    </td>
                                </tr>

                            </table>

                            <label for="phone" class="phone">លេខទូរសព្ទសាមីខ្លួន:</label>
                            <input type="text" id="phone1" name="phone" placeholder="0xx-xxx-xxx" required>
                            <label for="parent_number" class="parent_number">លេខទូរសព្ទអាណាព្យាបាល:</label>
                        <td><input type="text" id="parent_number1" name="parent_number" placeholder="0xx-xxx-xxx"
                                required></td>
            </div>
            </td>
            </tr>
            </table>







            <!-- INFORMATION_STUDY  -->
            <div class="inf_study">
                <h4 id="info_study">ព័ត៌មានអំពីការសិក្សា</h4>
                <table>
                    <tr>
                        <td>
                            <label for="level_study" class="level_study">កម្រិតសិក្សាបច្ចុប្បន្ន:</label>
                        <td><select name="level_study" id="level_study1">
                                <option value="មធ្យមសិក្សាទុយភូមិ ">មធ្យមសិក្សាទុយភូមិ</option>
                                <option value="បរិញ្ញាបត្រ ">បរិញ្ញាបត្រ</option>
                                <option value="បរិញ្ញាបត្ររង">បរិញ្ញាបត្ររង</option>
                                <option value="9+3 ">9+3</option>
                            </select></td>
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>
                        <td><label for="place_exambacll" class="place_exambacll">មណ្ឌលប្រឡង:</label>
                        <td>
                        <td><input type="text" class="place_exambacll1" name="place_exambacll" required>
                        <td>

                        </td>
                    </tr>
                </table>
                <!-- exam bacll -->



                <table>
                    <tr>
                        <td>
                            <label for="date_bacll" class="date_bacll">សម័យប្រឡង:</label>
                        <td><input type="date" id="date_bacll1" name="date_bacll" max="1990-00-00" required></td>
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>
                            <label for="number_room" class="number_room">លេខបន្ទប់:</label>
                        <td><input type="text" id="number_room1" name="number_room" required></td>

                        <td><label for="number_table" class="number_table">លេខតុ:</label></td>
                        <td><input type="text" id="number_table1" name="number_table" required></td>

                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <label for="num_certificate" class="num_certificate">លេខសញ្ញាប័ត្រ:</label>
                            <input type="text" id="num_certificate_1" name="num_certificate">

                            <label for="num_personal" class="num_personal">លេខអត្តសញ្ញាណប័ណ្ណ:</label>
                            <input type="text" id="num_personal_1" name="num_personal">
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <label for="end_of_highschool" class="end_of_highschool">ចប់មកពីសាលា:</label>
                        <td><input type="text" id="end_of_highschool1" name="end_of_highschool" required></td>
                        </td>
                    </tr>
                </table>


                <table>
                    <tr>
                        <td>
                            <label for="grade" class="grade">និទ្ទេស:</label>
                        <td><select name="grade" id="grade2">
                                <option value="A ">A </option>
                                <option value="B ">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                            </select></td>
                        </td>
                    </tr>
                </table>
            </div>





            <!-- high school -->



            <div class="info_department">

                <h4 id="dep_info">ជ្រើសរើសជំនាញសិក្សា</h4>

                <table>
                    <tr>
                        <td>
                            <label for="level_study2" class="level_study2">កម្រិតសិក្សាបច្ចុប្បន្ន:</label>
                        <td><select name="level_study2" id="level_study2">
                                <option value="មធ្យមសិក្សាទុយភូមិ ">មធ្យមសិក្សាទុយភូមិ</option>
                                <option value="បរិញ្ញាបត្រ ">បរិញ្ញាបត្រ</option>
                                <option value="បរិញ្ញាបត្ររង">បរិញ្ញាបត្ររង</option>
                                <option value="9+3 ">9+3</option>
                            </select></td>
                        </td>
                    </tr>
                </table>



                <table>
                    <tr>
                        <td>
                        <td><label for="skill_one" class="skill1">ជម្រើសទី១:</label> </td>
                        <td><select name="skill_one" id="skill1_1">
                                <option value="ជ្រើសរើសជំនាញ">ជ្រើសរើសជំនាញ</option>
                                <option value="វិទ្យាសាស្រ្តកុំព្យូទ័រ">វិទ្យាសាស្រ្តកុំព្យូទ័រ</option>
                                <option value="បច្ចេកវិទ្យាអាហារ">បច្ចេកវិទ្យាអាហារ</option>
                                <option value="វិទ្យាសាស្រ្តដំណាំ">វិទ្យាសាស្រ្តដំណាំ</option>
                                <option value="វិទ្យាសាស្រ្តសត្វ">វិទ្យាសាស្រ្តសត្វ</option>
                                <option value="វិស្វកម្មអគ្គីសនី">វិស្វកម្មអគ្គីសនី</option>
                                <option value="9+3">9+3</option>
                            </select> </td>


                        <td><label for="skill_two" class="skill2">ជម្រើសទី២:</label> </td>
                        <td><select name="skill_two" id="skill2_2">
                                <option value="ជ្រើសរើសជំនាញ">ជ្រើសរើសជំនាញ</option>
                                <option value="វិទ្យាសាស្រ្តកុំព្យូទ័រ">វិទ្យាសាស្រ្តកុំព្យូទ័រ</option>
                                <option value="បច្ចេកវិទ្យាអាហារ">បច្ចេកវិទ្យាអាហារ</option>
                                <option value="វិទ្យាសាស្រ្តដំណាំ">វិទ្យាសាស្រ្តដំណាំ</option>
                                <option value="វិទ្យាសាស្រ្តសត្វ">វិទ្យាសាស្រ្តសត្វ</option>
                                <option value="វិស្វកម្មអគ្គីសនី">វិស្វកម្មអគ្គីសនី</option>
                                <option value="9+3">9+3</option>
                            </select> </td>

                    </tr>
                </table>


                <!-- <table>
        <tr>
            <td>
                <label for="skill_one" class="skill1">ជម្រើសទី១:</label>
                <select name="skill_one" id="skill1_1">
                    <option value="វិទ្យាសាស្រ្តកុំព្យូទ័រ">វិទ្យាសាស្រ្តកុំព្យូទ័រ</option>
                    <option value="បច្ចេកវិទ្យាអាហារ">បច្ចេកវិទ្យាអាហារ</option>
                    <option value="វិទ្យាសាស្រ្តដំណាំ">វិទ្យាសាស្រ្តដំណាំ</option>
                    <option value="វិទ្យាសាស្រ្តសត្វ">វិទ្យាសាស្រ្តសត្វ</option>
                    <option value="វិស្វកម្មអគ្គីសនី">វិស្វកម្មអគ្គីសនី</option>
                    <option value="9+3">9+3</option>
                </select>
            </td>
            <td>
                
                <label for="skill_two" class="skill2">ជំនាញទី២:</label>
       
        <select name="skill_two" class="skill2">
                    <option value="វិទ្យាសាស្រ្តកុំព្យូទ័រ">វិទ្យាសាស្រ្តកុំព្យូទ័រ</option>
                    <option value="បច្ចេកវិទ្យាអាហារ">បច្ចេកវិទ្យាអាហារ</option>
                    <option value="វិទ្យាសាស្រ្តដំណាំ">វិទ្យាសាស្រ្តដំណាំ</option>
                    <option value="វិទ្យាសាស្រ្តសត្វ">វិទ្យាសាស្រ្តសត្វ</option>
                    <option value="វិស្វកម្មអគ្គីសនី">វិស្វកម្មអគ្គីសនី</option>
                    <option value="9+3">9+3</option>
                </select>
            </td>
        </tr>
    </table> -->


            </div>


            <div class="img_stu">
                <h4 class="add_inf">ឯកសារភ្ជាប់</h4>
                <table>
                    <tr>
                        <td>
                            <p id="img_student1">រូបភាពនិស្សិត:</p>
                        <td><input type="file" name="img_student" value="multiple" class="img_student"></input></td>

                        </td>
                    </tr>
                </table>



                <table>
                    <tr>
                        <td>
                            <p id="birth_certificate1">សំបុត្រកំណើត:</p>
                        <td><input type="file" name="birth_certificate" value="multiple"
                                class="birth_certificate"></input></td>

                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>
                            <p id="img_score1">ប្រតិបត្តពិន្ទុ:</p>
                        <td><input type="file" name="img_score" value="multiple" class="img_score"></input></td>

                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>
                            <p id="certificate1">សញ្ញាបត្រ:</p>
                        <td><input type="file" name="certificate" value="multiple" class="certificate"></input></td>

                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>
                            <p id="khmer_card">អត្តសញ្ញាណប័ណ្ណ:</p>
                        <td><input type="file" name="khmer_card" value="multiple" class="khmer_card1"></input></td>

                        </td>
                    </tr>
                </table>

            </div>
    </div>

    <!-- <input name="submit" type="submit" value="Submit"  class="submit"> -->
    <!-- <input type="reset" value="Reset"  class="Reset"> -->
    <button name="submit" class="submit">ចុះឈ្មោះ</button>


    <!-- <button class="btn btn-primary" onclick="showPopup()">Submit</button> -->

    </form>
    </div>

    <!-- pop up here  -->
    <?php
    if (isset($_SESSION['INSERT_DONE'])) {
        ?>

        <div class="popup" id="popup">
            <!-- <h2>This is a Pop-up Window</h2> -->
            <!-- <i class="fa-solid fa-square-check" id="tick"></i> -->
            <i class="fa-solid fa-check"></i>
            <p>ទិន្ន័យរបស់លោកអ្នកត្រូវបានរក្សាទុករួចរាល់ </i></p>
            <button class="btn btn-primary" onclick="hidePopup()" id="back">ok</button>

        </div>
        <div class="overlay" id="overlay"></div>

        <?php
    }
    unset($_SESSION['INSERT_DONE']);

    ?>
    <?php
    include ("../EOAS/Footer/footer.php");
    ?>
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

</body>

</html>