<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <?php
    session_start();
    function check_error($error)
    {
        if (isset($_SESSION['err'])) {
            echo $_SESSION['err'][$error];
        }
    }
    ?>
    <h1>Student's Information</h1>
    <form action="../process/student_add_exe.php" method="post">
        <div>
            <label for="">User Level</label>
            <select name="userLevel" id="" required>
                <option value="">Select</option>
                <option value="elementary">Elementary</option>
                <option value="high_school">High School</option>
                <option value="college">College</option>
            </select>
        </div>


        <div>
            <label for="">Student Number:*</label>
            <input type="text" name="studentNumber" id="">
            <?php check_error('err_studentNumber') ?>
        </div>

        <div>
            <label for="">Full Name:*</label>
            <input type="text" name="fullName" id="">
            <?php check_error('err_fullName') ?>
        </div>

        <div>
            <label for="">Midterm Grade:*</label>
            <input type="text" name="midtermGrade" id="">
            <?php check_error('err_midtermGrade') ?>
        </div>

        <div>
            <label for="">Final Grade:*</label>
            <input type="text" name="finalGrade" id="">
            <?php
            check_error('err_finalGrade');
            unset($_SESSION['err']);
            ?>
        </div>

        <input type="submit" value="Register">
    </form>
</body>

</html>