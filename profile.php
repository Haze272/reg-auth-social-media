<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your account</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php require_once 'components/header.php'; ?>
    
    <main class="mainly">
        <div class="container">
            <?php if(isset($_SESSION['user'])): ?>
            <div class="profileBox">
                <div class="avatarContainer">
                    <div class="avatarImage">
                        <img class="avaImg" src="avatars/f5d7b6d007ae1453586a90f2ca0f05e4.jpg" alt="avatar">
                        <p>govmo</p>
                    </div>
                </div>
                <div class="profileData">
                    <div class="userInfo">
                        <p>Login:</p>
                        <div class="rectangleData"><p><?php echo $_SESSION['user']['login']; ?></p></div>
                    </div>
                    <div class="userInfo">
                        <p>Email</p>
                        <div class="rectangleData"><p><?php echo $_SESSION['user']['email']; ?></p></div>
                    </div>
                    <?php

                    require_once('scripts/db_connection.php');
                    $roleid = $_SESSION['user']['role'];

                    $sql = "SELECT `roleName` FROM roles WHERE id = :index";
                    $result = $pdo->prepare($sql);
                    $result->execute(['index' => $roleid]);
                    $result = $result->fetch(PDO::FETCH_ASSOC);
                    
                    ?>
                    <div class="userInfo">
                        <p>Role</p>
                        <?php if ($result['roleName'] == "User"): ?>
                        <div class="rectangleData userText"><p><?php echo $result['roleName']; ?></p></div>
                        <?php elseif ($result['roleName'] == "Regular"): ?>
                        <div class="rectangleData regularText"><p><?php echo $result['roleName']; ?></p></div>
                        <?php elseif ($result['roleName'] == "Active"): ?>
                        <div class="rectangleData activeText"><p><?php echo $result['roleName']; ?></p></div>
                        <?php elseif ($result['roleName'] == "Helper"): ?>
                        <div class="rectangleData helperText"><p><?php echo $result['roleName']; ?></p></div>
                        <?php elseif ($result['roleName'] == "Moderator"): ?>
                        <div class="rectangleData moderatorText"><p><?php echo $result['roleName']; ?></p></div>
                        <?php elseif ($result['roleName'] == "Administrator"): ?>
                        <div class="rectangleData administratorText"><p><?php echo $result['roleName']; ?></p></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </main>

    <?php require_once 'components/footer.html'; ?>

</body>
</html>