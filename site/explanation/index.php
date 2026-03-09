<?php
$pageTitle = "Explanation - Mornary";
$currentPage = "EXPLANATION";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main>
    <div class="content">
        <h2>How it Works</h2>
        <p>
            This application takes advantage of the fact that binary and Morse code are both expressed with two characters.
            <code>0</code> and <code>1</code> for binary; and <code>.</code> and <code>-</code> for Morse.
            The examples below demonstrate encoding ASCII data, but any arbitrary file can be encoded with Mornary.
            Although, the effect does work best with small files &mdash; it would be somewhat suspicious if you tried to distribute megabytes of morse code.
        </p>

        <h3>Encoding</h3>
        <p>
            To encode ASCII text, it is first converted to its binary representation. Then the zeros are replaced with dots, and
            the ones are replaced with dashes. And finally, spaces and slashes are added to create letter and word breaks, thus
            producing valid Morse code.
        </p>
        <p>Take the string <code>Hello World!</code> for example.</p>
        <ol>
            <li>Convert to ASCII binary:
            <code>010010000110010101101100011011000110111100100000010101110110111101110010011011000110010000100001</code></li>
            <li>Map to dots and dashes:
            <code>.-..-....--..-.-.--.--...--.--...--.----..-......-.-.---.--.----.---..-..--.--...--..-....-....-</code></li>
            <li>Intelligently add spaces and slashes throughout:
            <code>. / - . . - .... / -- . . - / . / -. / -- .- -.. . / -- .- -.. . / --. / --- -. / . - .... . .-. / - .- -- . / --. / - --- .-- -. / .-. .- -. --. . / .--. .-.. . .- ... . / -</code></li>
        </ol>
        <p>The result is perfectly valid Morse code. If you were to translate this, it would yield:</p>
        <p><code>MEET E N MADE MADE G ON ETHER TAME G TOWN RANGE PLEASE T</code></p>
        <p>
            By ensuring that the resulting Morse code translates to valid English words (for the most part), we better sell the
            effect that this is morse code.
        </p>

        <h3>Decoding</h3>
        <p>
            Decoding follows the exact opposite operation. First, remove the spaces and slashes, then dots are replaced with zeros and the
            dashes are replaced with ones. Then convert the resulting binary string to ASCII.
        </p>
        <p>
            Given the output from the above example: <code>. / - . . - .... / -- . . - / . / -. / -- .- -.. . / -- .- -.. . / --. / --- -. / . - .... . .-. / - .- -- . / --. / - --- .-- -. / .-. .- -. --. . / .--. .-.. . .- ... . / -</code>
        </p>
        <ol>
            <li>Remove spaces and slashes: <code>.-..-....--..-.-.--.--...--.--...--.----..-......-.-.---.--.----.---..-..--.--...--..-....-....-</code></li>
            <li>Map to ones and zeros: <code>010010000110010101101100011011000110111100100000010101110110111101110010011011000110010000100001</code></li>
            <li>Convert to ASCII: <code>Hello World!</code></li>
        </ol>


    </div>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>