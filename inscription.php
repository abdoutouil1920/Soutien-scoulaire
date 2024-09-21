<html>
    <head>
        <link rel="stylesheet" href="inscription.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    </head>

<body>
<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "university";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dateofbirth = $_POST["dateofbirth"];
    $gender = $_POST["gender"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize and validate data (you should improve this)
    $first_name = mysqli_real_escape_string($conn, $first_name);
    $last_name = mysqli_real_escape_string($conn, $last_name);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);
    $dateofbirth = mysqli_real_escape_string($conn, $dateofbirth);
    $gender = mysqli_real_escape_string($conn, $gender);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Prepare and execute SQL statement
    $sql = "INSERT INTO users (first_name, last_name, email, phone, dateofbirth, gender, username, password) 
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$dateofbirth', '$gender', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
    

   
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <div class="containerse">
                <header>Signup Enseignant</header>
                <div class="progress-bar">
                   <div class="steps">
                      <p>
                         Name
                      </p>
                      <div class="bullet">
                         <span>1</span>
                      </div>
                      <div class="check fas fa-check"></div>
                   </div>
                   <div class="steps">
                      <p>
                         Contact
                      </p>
                      <div class="bullet">
                         <span>2</span>
                      </div>
                      <div class="check fas fa-check"></div>
                   </div>
                   <div class="steps">
                      <p>
                         Birth
                      </p>
                      <div class="bullet">
                         <span>3</span>
                      </div>
                      <div class="check fas fa-check"></div>
                   </div>
                   <div class="steps">
                      <p>
                         Submit
                      </p>
                      <div class="bullet">
                         <span>4</span>
                      </div>
                      <div class="check fas fa-check"></div>
                   </div>
                </div>
                <div class="form-outer">
                   <form action="#">
                      <div class="page slide-pages">
                         <div class="title">
                            Basic Info:
                         </div>
                         <div class="field">
                            <div class="label">
                               First Name
                            </div>
                            <input type="text" name="first_name">
                         </div>
                         <div class="field">
                            <div class="label">
                               Last Name
                            </div>
                            <input type="text" name="last_name">
                         </div>
                         <div class="field">
                            <button class="firstNexts next">Next</button>
                         </div>
                      </div>
                      <div class="page">
                         <div class="title">
                            Contact Info:
                         </div>
                         <div class="field">
                            <div class="label">
                               Email Address
                            </div>
                            <input type="text" name="email">
                         </div>
                         <div class="field">
                            <div class="label">
                               Phone Number
                            </div>
                            <input type="Number" name="phone">
                         </div>
                         <div class="field btns">
                            <button class="prevs-1 prev">Previous</button>
                            <button class="nexts-1 next">Next</button>
                         </div>
                      </div>
                      <div class="page">
                         <div class="title">
                            Date of Birth:
                         </div>
                         <div class="field">
                            <div class="label">
                               Date
                            </div>
                            <input type="date" name="dateofbirth">
                         </div>
                         <div class="field">
                            <div class="label">
                               Gender
                            </div>
                            <select name="gender" >
                               <option value="male">Male</option>
                               <option value="female">Female</option>
                               <option value="other">Other</option>
                            </select>
                         </div>
                         <div class="field btns">
                            <button class="prevs-2 prev">Previous</button>
                            <button class="nexts-2 next">Next</button>
                         </div>
                      </div>
                      <div class="page">
                         <div class="title">
                            Login Details:
                         </div>
                         <div class="field">
                            <div class="label" >
                               Username
                            </div>
                            <input type="text" name="username" >
                         </div>
                         <div class="field">
                            <div class="label">
                               Password
                            </div>
                            <input type="password" name="password ">
                         </div>
                         <div class="field btns">
                            <button class="prevs-3 prev">Previous</button>
                            <button class="submits">Submit</button>
                        
                         </div>
                      </div>
                      
                   </form>
                 
                </div>
             
                </div>
              
        </div>
      
        <div class="form-container sign-in-container">
            <div class="containerse">
                <header>Signup Etudiant</header>
                <div class="progress-bar">
                   <div class="step">
                      <p>
                         Name
                      </p>
                      <div class="bullet">
                         <span>1</span>
                      </div>
                      <div class="check fas fa-check"></div>
                   </div>
                   <div class="step">
                      <p>
                         Contact
                      </p>
                      <div class="bullet">
                         <span>2</span>
                      </div>
                      <div class="check fas fa-check"></div>
                   </div>
                   <div class="step">
                      <p>
                         Birth
                      </p>
                      <div class="bullet">
                         <span>3</span>
                      </div>
                      <div class="check fas fa-check"></div>
                   </div>
                   <div class="step">
                      <p>
                         Submit
                      </p>
                      <div class="bullet">
                         <span>4</span>
                      </div>
                      <div class="check fas fa-check"></div>
                   </div>
                </div>
                <div class="form-outer">
                   <form action="#">
                      <div class="page slide-page">
                         <div class="title">
                            Basic Info:
                         </div>
                         <div class="field">
                            <div class="label">
                               First Name
                            </div>
                            <input type="text">
                         </div>
                         <div class="field">
                            <div class="label">
                               Last Name
                            </div>
                            <input type="text">
                         </div>
                         <div class="field">
                            <button class="firstNext next">Next</button>
                         </div>
                      </div>
                      <div class="page">
                         <div class="title">
                            Contact Info:
                         </div>
                         <div class="field">
                            <div class="label">
                               Email Address
                            </div>
                            <input type="text">
                         </div>
                         <div class="field">
                            <div class="label">
                               Phone Number
                            </div>
                            <input type="Number">
                         </div>
                         <div class="field btns">
                            <button class="prev-1 prev">Previous</button>
                            <button class="next-1 next">Next</button>
                         </div>
                      </div>
                      <div class="page">
                         <div class="title">
                            Date of Birth:
                         </div>
                         <div class="field">
                            <div class="label">
                               Date
                            </div>
                            <input type="date">
                         </div>
                         <div class="field">
                            <div class="label">
                               Gender
                            </div>
                            <select>
                               <option>Male</option>
                               <option>Female</option>
                               <option>Other</option>
                            </select>
                         </div>
                         <div class="field btns">
                            <button class="prev-2 prev">Previous</button>
                            <button class="next-2 next">Next</button>
                         </div>
                      </div>
                      <div class="page">
                         <div class="title">
                            Login Details:
                         </div>
                         <div class="field">
                            <div class="label">
                               Username
                            </div>
                            <input type="text">
                         </div>
                         <div class="field">
                            <div class="label">
                               Password
                            </div>
                            <input type="password">
                         </div>
                         <div class="field btns">
                            <button class="prev-3 prev">Previous</button>
                            <button class="submit">Submit</button>
                         </div>
                      </div>
                   </form>
                </div>
                
                </div>
                
        </div>
        
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    
   <script src="inscription.js"></script>

</body>
</html>

