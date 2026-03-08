<?php
$pageTitle = "Home - Mornary";
$currentPage = "HOME";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main>
    <div class="content">
        <hr/>
        <p>
            Mornary is an opensource command-line application that encodes arbitrary binary data as Morse code
            that decodes into plausible English words. A standard Morse decoder sees ordinary text,
            while a Mornary decoder reconstructs the hidden binary payload.
        </p>
        <p>
            The result is a generative steganographic system where the carrier itself is a Morse signal
            rather than a modified file.
        </p>
        <figure>
            <img src="/images/diagram.png" alt="Mornary encoding and decoding pipeline" class="diagram" style="height: 200px">
            <figcaption>Fig.1 - A Mornary transmission can be interpreted in two ways: a standard Morse decoder produces English text, while a Mornary decoder reconstructs the hidden binary payload.</figcaption>
        </figure>
        <h2>Demo</h2>
        <p>
            Input: <code>Hello World!</code><br/>
            Generated Morse: <code>.-. . -.. . . -- . .-. / - . -- .--. . .- -. / --. .. --. --- - / . .-.. . ...- . -. / - -- . -- .- / --- .-- -. . -.. / -- .- -.. .-- . . -.. / .. -. ... -</code><br/>
            Standard Morse Decode: <code>REDEEMER TEMPEAN GIGOT ELEVEN TMEMA OWNED MADWEED INST</code><br/>
            Mornary Decode: <code>Hello World!</code>
        </p>
        <h2>Key Properties</h2>
        <small><p class="center">See <a href="/analysis">Analysis</a> for a detailed explanation.</p></small>
        <div class="centered-list">
            <ul>
                <li>Carrier independence – works with text, sound, light, or radio </li>
                <li>Human relay capable – messages can survive manual transcription</li>
                <li>Higher density than most text-based steganography systems</li>
            </ul>
        </div>
        <h2>CLI Usage</h2>
        <pre>

    // Encoding text
    mornary -e "Hello World!"

    // Encoding a file
    mornary -E input.txt -O output.txt

    // Decoding text
    mornary -d ".- .. .-. -.-- / --.. / . / .-- . ... - / .-- .- -. - / .-- / -.. . .. - -.-- / ...- / -.. / -.-"

    // Decoding a text file
    mornary -D input.txt -O output.txt

    // View help
    mornary -h
        </pre>
    </div>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>