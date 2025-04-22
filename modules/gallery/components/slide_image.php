<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>
<div class="content-containers">
        <div class="slide-left">
            <div class="image">
                <img src="<?= GLOBAL_PATH . '/images/1.jpg'?>" alt="Cybersecurity Image">
            </div>
            <div class="text">
                <h1>Cybersecurity Challenges:</h1>
                <p>Escalating Cyber Threats Pose Significant Challenges To Individuals, Businesses, And Governments. Ransomware Attacks And Data Breaches Underscore The Need For Robust Cybersecurity Measures. Collaboration Between Industry, Academia, And Law Enforcement Becomes Imperative To Combat Cybercrime And Safeguard Digital Infrastructure.</p>
            </div>
        </div>
    
        <div class="slide-left">
            <div class="image">
                <img src="<?= GLOBAL_PATH . '/images/2.jpg'?>" alt="Cybersecurity Image">
            </div>
            <div class="text">
                <h1 id="slideHeading">Another Challenge:</h1>
                <p id="slideContent">More content goes here. You can talk about another challenge or topic related to cybersecurity or any other topic.More content goes here. You can talk about another challenge or topic related to cybersecurity or any other topic.More content goes here. You can talk about another challenge or topic related to cybersecurity or any other topic.More content goes here. You can talk about another challenge or topic related to cybersecurity or any other topic.More content goes here. You can talk about another challenge or topic related to cybersecurity or any other topic.More content goes here. You can talk about another challenge or topic related to cybersecurity or any other topic.More content goes here. You can talk about another challenge or topic related to cybersecurity or any other topic.More content goes here. You can talk about another challenge or topic related to cybersecurity or any other topic.</p>
            </div>
           
        </div>
    </div>
    <?php
}?>