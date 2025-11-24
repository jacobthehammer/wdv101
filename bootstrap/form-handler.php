<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inquiry Received</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
    
    <style>
        body { background-color: #F3Efe0; font-family: 'Merriweather', serif; color: #4E342E; padding-top: 50px; }
        .response-card { background: white; padding: 40px; border-radius: 8px; border-top: 5px solid #8D6E63; }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="response-card text-center">
                <?php
                // Check if the form was submitted via POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    // Collect value of input field
                    $name = htmlspecialchars($_REQUEST['fullName']);
                    $tier = htmlspecialchars($_REQUEST['membershipTier']);
                    
                    echo "<h2 class='mb-4'>Thank you, $name!</h2>";
                    echo "<p>We have received your inquiry for the <strong>$tier</strong> membership at QC Co-Lab.</p>";
                    
                    // Handle the Checkboxes (Arrays)
                    if(!empty($_POST['interests'])) {
                        echo "<hr><p class='text-start'><strong>You expressed interest in:</strong></p><ul class='text-start'>";
                        foreach($_POST['interests'] as $check) {
                                echo "<li>" . htmlspecialchars($check) . "</li>"; 
                        }
                        echo "</ul>";
                    }

                    echo "<div class='mt-4 alert alert-success'>A confirmation email has been sent to " . htmlspecialchars($_REQUEST['emailAddr']) . ".</div>";
                    
                } else {
                    // If someone tries to access this file directly without submitting the form
                    echo "<h2>Error</h2>";
                    echo "<p>Please submit the form to see this page.</p>";
                }
                ?>
                <a href="qccolab-signup.html" class="btn btn-outline-secondary mt-3">Back to Form</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
