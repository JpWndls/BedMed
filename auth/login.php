<?php
session_start();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli('localhost', 'root', '', 'chu_login');
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

    $username = $conn->real_escape_string($_POST['username']);
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='patient'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $_SESSION['username'] = $username;
        header("Location: ../patient/accueil/accueil.php");
        exit();
    } else {
        $error = "Identifiants invalides.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion CHU - Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-card text-center shadow">
    <img src="../images/logo chu.png" class="logo mb-3" alt="Logo CHU">
    <h2 class="mb-3 text-primary">Connexion Patient</h2>
    <p class="text-muted">Service ORL - CHU de Lille</p>
    
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    
    <form method="POST">
        <div class="mb-3 text-start">
            <label for="username" class="form-label">Identifiant</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Identifiant" required>
        </div>

        <div class="mb-3 position-relative text-start">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control pe-5" placeholder="Mot de passe" required>
            <i class="bi bi-eye-slash-fill toggle-password" id="togglePassword" onclick="togglePassword()"></i>
        </div>

        <button type="submit" class="btn btn-primary w-100">Se connecter</button>
    </form>

    <img src="../images/logo bedmed.png" class="mt-4" style="width: 60px;" alt="Logo projet">
</div>

<script>
function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.getElementById("togglePassword");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("bi-eye-slash-fill");
        toggleIcon.classList.add("bi-eye-fill");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("bi-eye-fill");
        toggleIcon.classList.add("bi-eye-slash-fill");
    }
}
</script>

</body>
</html>
