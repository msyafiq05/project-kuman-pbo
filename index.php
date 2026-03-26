<?php
// logic oop php dikerjakan oleh orang 3
class UserData {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    public function __construct($fn, $ln, $ph, $addr) {
        $this->firstname = htmlspecialchars($fn);
        $this->lastname = htmlspecialchars($ln);
        $this->phone = htmlspecialchars($ph);
        $this->address = htmlspecialchars($addr);
    }

    public function displaySummary() {
        return "
        <div style='margin-top: 20px; padding: 15px; border-top: 2px dashed #4A90E2; font-family: sans-serif; background-color: #f9f9f9;'>
            <p style='color: #333;'>Hi, my name is <b>{$this->firstname} {$this->lastname}</b></p>
            <p style='color: #666;'>Phone Number : {$this->phone}</p>
            <p style='color: #666;'>Address : {$this->address}</p>
            <a href='index.php' style='color: #4A90E2; text-decoration: none; font-size: 14px;'>[ Reset Form ]</a>
        </div>
        ";
    }
}

$output = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new UserData($_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['address']);
    $output = $user->displaySummary();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Sederhana PHP</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; padding-top: 50px; background-color: #f4f4f4; }
        .container { width: 500px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #333; }
        input, textarea { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        textarea { height: 100px; resize: none; }
        .btn-submit { background-color: #4A90E2; color: white; border: none; padding: 12px 25px; border-radius: 25px; cursor: pointer; display: block; margin: 0 auto; width: 100%; font-size: 16px; }
        .btn-submit:hover { background-color: #357ABD; }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Sederhana</h2>
    <form method="POST" action="">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>
        <button type="submit" class="btn-submit">Submit</button>
    </form>

    <?php echo $output; ?>
</div>

</body>
</html>