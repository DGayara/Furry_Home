<?php
session_start();
?>

<div style="color:rgb(204, 198, 198);">
    <?php if (isset($_SESSION["username"])): ?>
        <p> <?php echo htmlspecialchars($_SESSION["username"]); ?> ! 
           <?php if (isset($_SESSION["email"])): ?>
               (<?php echo htmlspecialchars($_SESSION["email"]); ?>)
           <?php endif; ?>
            |  <a href="logout.php"><button type="button" class="btn btn-outline-light" style="width:100px;">Logout</button></a>
        </p>
    <?php else: ?>
        
        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#registerLoginModal">Register/Login</button></li>
        
        


    <?php endif; ?>
    </div>
