<?php
// Optional: allow pages to set a custom title
if (!isset($pageTitle)) {
    $pageTitle = "Mornary";
}
$currentPage;
?>
<!DOCTYPE html>
<html lang="en">
<!--
                             ___
                       ,    /   \  ___
                 _    / \  /     \/   \  ,---,
                / \  /   ` |     /     \/     \
            ,  /   | |    |.    |      |      | __,
            /| |  , ~|     |___|      /       |/   \                |\  /| .    .
            | \|;'   :.   /     \  . /===    //    |  _             \ \/ / \\ //
           /   |                          \--|    / /  \        .``=~\/ /---/ /,
           |  ./                               ' /=|    |/\       ``--..,_ . `  \.
           /\/                                     \=== /  |   _   _        `-.  \
       .======_____                                    |   |= / \ / \          \  |
     ,'     ()     '-.___.                                /  ===--\-/-_/\__,--=/ \|
   /                ______\     .          :                                    ,/
  /                      _/     :           :                         __....'''"
  |      .       ___--=="        :          :             ____-------'
  |     .  ,____/                ,          :       __,--'
  \      .'\             .      /          ;  ___.='
  ||         \           '    ,'         .' ='
  | \     '.   '.       /     /       _,'-''
   \  \_    '    .      \     :       \
    |       =====-_      \_===\       |
    \   '../       '.     \   ||     /
    /     |          \     |  \|     |\
   |     /           |     |   |     ||
  /     /            |     |   | . . |_\
 | . . |             | . . |   /_/_|_\
 /_/_|_\             /_|_\_\

If you're looking for secrets, you've found one. Meet Peggy the stegosaurus :)
-->
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

<header class="site-header">
    <div class="container">
        <div class="brand">
            <img src="/images/icon256.png" alt="Mornary logo">
            <div class="brand-text">
                <h1>Mornary</h1>
                <p>
                    Generative Steganography Using Morse Code.
                </p>
                <nav class="nav">
                    <a href="/" class="<?php echo $currentPage == "HOME" ? 'nav-btn-current' : 'nav-btn'; ?>">Home</a>
                    
                    <a href="/explanation" class="<?php echo $currentPage == "EXPLANATION" ? 'nav-btn-current' : 'nav-btn'; ?>">How It Works</a>
                    
                    <a href="/analysis" class="<?php echo $currentPage == "ANALYSIS" ? 'nav-btn-current' : 'nav-btn'; ?>">Technical Analysis</a>
                    
                    <a href="/downloads" class="<?php echo $currentPage == "DOWNLOADS" ? 'nav-btn-current' : 'nav-btn'; ?>">Downloads</a>
                    <span>|</span>
                    <a href="https://github.com/jgmortim/mornary" target="_blank" rel="noopener" class="nav-btn github">
                        Source Code
                    </a>
                </nav>
            </div>
        </div>
        <hr/>
    </div>
</header>