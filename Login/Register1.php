<div class="main">
    <div class="register">
        <h2>Register</h2>
        <form id="register" method="post">
            <label>នាមត្រកូល : </label>
            <br>
            <input type="text" name="fname" id="name" placeholder="បំពេញនាមត្រកូលរបស់អ្នក" required>
            <hr id="AB"><br>
            <label>នាមខ្លួន : </label>
            <br>
            <input type="text" name="fname" id="name" placeholder="បំពេញនាមខ្លួនរបស់អ្នក" required>
            <hr id="AB"><br>
            <label>អាយុ : </label>
            <br>
            <input type="number" name="age" id="name" placeholder="បំពេញអាយុរបស់អ្នក" min="1" max="150" required>
            <hr id="AB"><br>
            <label>Email : </label>
            <br>
            <input type="email" name="email" id="name" placeholder="បំពេញ Email របស់អ្នក" required>
            <hr id="AB"><br>
            <label>លេខទូរសព្ទ : </label>
            <br>
            <input type="tel" name="tel" id="name" placeholder="បំពេញលេខទូរសព្ទរបស់អ្នក" required>
            <hr id="AB"><br>
            <label>ភេទ: </label>
            <br>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" id="male" required>
            &nbsp;
            <span id="male">ប្រស</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" id="fname">
            &nbsp;
            <span id="feemale">ស្រី</span>
            <br><br>
            <input type="submit" value="Submit" name="span" id="submit">
            <input type="reset" value="Reset" name="span" id="reset">
        </form>
    </div>
</div>