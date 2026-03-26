<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Sederhana PHP - Kelompok Kami</title>
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

    </div>

</body>
</html>