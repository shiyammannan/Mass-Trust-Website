<?php require_once('../../config/sparrow.php');

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

    $getRewrittenUrl = $_POST['getRewrittenUrl'];
?>
<div class="sidebar">

    <div class="logo">
        <img src="<?= GLOBAL_PATH . '/images/logo.png' ?>" class="logo" alt="">
    </div>
    <ul class="sidebar-menu">
        <li class="<?= ($getRewrittenUrl == 'Home') ? "active" : "" ?>">
        <a href="<?= BASEPATH . '/home' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon">
                    <path d="M12 3v9.27a4 4 0 1 1-2 0V3H5v9.27A4.978 4.978 0 0 0 3 13a4.978 4.978 0 0 0 2 5.73V21h16v-2.27A4.978 4.978 0 0 0 21 13a4.978 4.978 0 0 0-2-5.73V3h-5z"/>
                </svg><span>Home</span>
            </a>
        </li>
        <li class="<?= ($getRewrittenUrl == 'Dashboard') ? "active" : "" ?>">
            <a href="<?= BASEPATH . '/dashboard' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon">
                    <path d="M3 13h4v8H3v-8zM13 13h4v8h-4v-8zM8 5h4v8H8V5zM18 5h4v8h-4V5z"/>
                </svg><span>Dashboard</span>
            </a>
        </li>
        <li class="<?= ($getRewrittenUrl == 'About Us') ? "active" : "" ?>">
            <a href="<?= BASEPATH . '/about-us' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon">
                    <path d="M12 2a10 10 0 0 0-7 17.88A12.019 12.019 0 0 0 12 22a12.019 12.019 0 0 0 7-2.12A10 10 0 0 0 12 2zm0 14.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7z"/>
                </svg><span>About Us</span>
            </a>
        </li>
        <li class="<?= ($getRewrittenUrl == 'Firm Profile') ? "active" : "" ?>">
            <a href="<?= BASEPATH . '/firm-profile' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon">
                    <path d="M12 2a6 6 0 0 0-6 6v10a6 6 0 0 0 6 6 6 6 0 0 0 6-6V8a6 6 0 0 0-6-6zm0 2a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4 4 4 0 0 1-4-4V8a4 4 0 0 1 4-4z"/>
                </svg><span>Firm Profile</span>
            </a>
        </li>
        <li class="<?= ($getRewrittenUrl == 'Gallery') ? "active" : "" ?>">
            <a href="<?= BASEPATH . '/gallery' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon">
                    <path d="M4 5h16v14H4V5zm0-2C2.9 3 2 3.9 2 5v14c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H4zm1 16h14v-2H5v2zm0-4h14v-2H5v2zm0-4h14v-2H5v2z"/>
                </svg><span>Gallery</span>
            </a>
        </li>
        <li class="<?= ($getRewrittenUrl == 'Road Map') ? "active" : "" ?>">
            <a href="<?= BASEPATH . '/road-map' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon">
                    <path d="M12 2a1 1 0 0 0-1 1v12.586L5.707 10.293a1 1 0 0 0-1.414 1.414l6 6a1 1 0 0 0 1.414 0l6-6a1 1 0 0 0-1.414-1.414L13 15.586V3a1 1 0 0 0-1-1z"/>
                </svg><span>Road Map</span>
            </a>
        </li>
        <li class="<?= ($getRewrittenUrl == 'Contact Us') ? "active" : "" ?>">
            <a href="<?= BASEPATH . '/contact-us' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon">
                    <path d="M21 6h-2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1zM6 4H4a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zM12 8a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4 4 4 0 0 0 4-4v-6a4 4 0 0 0-4-4z"/>
                </svg><span>Contact Us</span>
            </a>
        </li>
        <li class="<?= ($getRewrittenUrl == 'Documents') ? "active" : "" ?>">
            <a href="<?= BASEPATH . '/documents' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V6l-4-4zm0 2v4h4v14H6V4h8z"/>
                </svg><span>Documents</span>
            </a>
        </li>
    </ul>
</div>
<?php } ?>