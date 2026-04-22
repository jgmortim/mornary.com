<?php
$pageTitle = "Home - Mornary";
$currentPage = "HOME";
$canonical = "https://mornary.com";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main>
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
        <img src="/images/diagram.png" alt="Mornary encoding and decoding pipeline" class="diagram" style="max-height: 200px; max-width: 80vw">
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
    <h3>Commands</h3>
    <p>The following is a copy of <code>mornary --help</code>:</P>
    <pre>

    Usage: mornary [-hVm] [-O=&lt;file>] [-t=&lt;int>] (-e=&lt;text> | -E=&lt;file> | -d=&lt;text> | -D=&lt;file>)
    Generative steganography using Morse code.
    -h, --help            Show this help message and exit.
    -V, --version         Print version information and exit.
    -e, --encode=&lt;text>   Encodes the supplied text.
    -E, --Encode=&lt;file>   Encodes the supplied file.
    -d, --decode=&lt;text>   Decodes the supplied Mornary-encoded text.
    -D, --Decode=&lt;file>   Decodes the Mornary-encoded contents of the supplied file.
    -O, --Output=&lt;file>   Writes the output to the supplied file. If omitted, output will be printed to the console.
    -t, --threads=&lt;int>   Sets the thread pool size. Only used when encoding files. Defaults to 10.
    -m, --low-memory      Reduces the dictionary size in order to reduce the memory footprint of the app. Only used for encoding.
    </pre>
    <h3>Examples</h3>
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
    <br/>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>