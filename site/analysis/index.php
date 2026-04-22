<?php
$pageTitle = "Analysis - Mornary";
$currentPage = "ANALYSIS";
$canonical = "https://mornary.com/analysis/";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main>
    <p>
        Mornary is a generative steganographic system that encodes arbitrary binary data as Morse code. When decoded normally,
        the Morse produces English text that appears unrelated to the hidden payload. This page analyzes the system’s properties,
        strengths, and limitations.
    </p>
    <h2>What makes this unique?</h2>
    <p>
        Mornary represents a different class of steganographic system: generative signal steganography. Instead of embedding
        data within an existing carrier (such as image pixels or audio samples), Mornary generates a new carrier whose
        structure itself encodes the hidden payload. The output is a Morse code signal that can be interpreted normally as
        English text while simultaneously representing arbitrary binary data to a Mornary-aware decoder. Because the carrier
        is a signal pattern rather than a fragile modification of an existing medium, the hidden data can survive
        transformations that would normally destroy steganographic content, including format conversion, manual transcription,
        or human relay. This property places Mornary at an unusual intersection between digital steganography and traditional
        communication systems.
    </p>
    <h2>Is this Really Steganography?</h2>
    <p>
        At first glance, Mornary may appear to be an encoding system rather than a steganographic one. While it shares some
        characteristics with encoding schemes, it is fundamentally a generative steganographic system.
    </p>
    <ol>
        <li>The Morse code is generated from the payload</li>
        <li>The Morse code can be decoded to English text</li>
        <li>The English text does not reveal the actual payload</li>
    </ol>
    <p>
        The defining property of steganography is that the carrier can be interpreted in two different ways. It presents
        itself as Morse code, and a normal Morse decoder sees English text, which is exactly what it expects from Morse
        code. A Mornary decoder, on the other hand, sees and extracts the hidden binary payload.
    </p>
    <figure>
        <img src="/images/diagram.png" alt="Mornary encoding and decoding pipeline" class="diagram" style="max-height: 200px; max-width: 80vw">
        <figcaption>Fig.1 - A Mornary transmission can be interpreted in two ways: a standard Morse decoder produces English text, while a Mornary decoder reconstructs the hidden binary payload.</figcaption>
    </figure>
    <h2>Strengths</h2>
    <h3>Carrier Independence / More than Text</h3>
    <p>
        Mornary produces text output, but it should not be mistaken for purely text-based steganography. Morse code is
        fundamentally a telecommunications protocol that represents characters using two signal durations: dots and dashes.
        While these signals can be written as text (<code>.</code> and <code>-</code>), that representation is only a
        convenient encoding. The underlying message exists as a signal pattern, meaning Mornary output could just as easily
        be transmitted using any medium capable of expressing Morse code. Such as pulses of light, sound, or radio. In this
        sense, the carrier is not the text itself but the signal pattern that the text represents.
    </p>
    <h3>Cross-Medium Survivability and Data Integrity</h3>
    <p>
        Most steganographic systems rely on structural properties of the carrier. If the carrier is modified or converted,
        the hidden data is often destroyed. For example, printing a steganographic image and then scanning it back into a
        digital file often destroys the hidden information. Even converting between image formats (such as PNG to JPG) can
        remove embedded data. With Mornary, the carrier can change completely (text, light, sound, radio, etc.), yet the
        hidden data remains intact because the information exists at the signal pattern level, not in the structure of the
        medium.
    </p>
    <p>
        Mornary, when used as text-based steganography, is also immune to compression, a property not shared by most
        images, audio, or video steganographic system. Many compression algorithms in these mediums are also lossy and
        destroy the hidden data, whereas text compression algorithms are designed to be lossless.
    </p>
    <h3>Human-Relay Transmission</h3>
    <p>
        Because Mornary encodes data as Morse signaling patterns, the transmission can also survive human relay. A message
        may be heard, written, or retransmitted by someone who believes they are handling an ordinary Morse communication
        while the underlying binary payload remains intact. Mornary occupies a unique niche: it is digital enough to encode
        arbitrary binary data, yet human-compatible enough to allow for manual transmission.
    </p>
    <h3>High Information Density</h3>
    <p>
        One advantage of Mornary is its relatively high information density compared with other text-based steganography
        systems, especially structural and linguistic forms. But even compared to other generative forms of text-based
        steganography, such as <a href="https://www.spammimic.com/">Spammimic</a>, Mornary is significantly more dense.
        Using the word <code>Hello</code> as an example, <strong>Spammimic generates a cover text that is 1,114 characters.
        Mornary produces just 64.</strong>
    </p>
    <h2>Weaknesses</h2>
    <h3>Morse code in the 21st Century</h3>
    <p>
        In the 21st century, Morse code is not a common means of telecommunications. The system works best when Morse signals
        are not unusual in the environment. Examples include amateur radio or puzzle-based environments such as ARGs. However,
        if the carrier is text (as opposed to light, sound, radio, etc.), then this concern can be addressed by transmitting
        the Morse decoding instead of the Morse itself. Now instead of dots and dashes, the information being exchanged is
        English text. Which is far less suspicious in many environments than visible Morse code.
    </p>
    <h3>Message length</h3>
    <p>
        Mornary as an application has no limitations on payload size. If you want to encode an entire movie as morse code,
        you can. However, extremely large payloads are rarely practical. The resulting Morse text file is typically about 14
        times larger than the original payload. As an example from my own testing, a 7.94 GB movie, when encoded, became a
        112 GB text file. This is impractical for two reasons:
    </p>
    <ol>
        <li>
            The whole point of steganography is to hide the fact that a payload is being transmitted. Setting the movie example
            aside, even a megabyte of Morse code would stand out as highly unusual.</li>
        <li>
            Long messages are also unsuitable for any carrier other than digital text. Sending more than a few kilobytes of
            Morse code with light or sound as the carrier can start to become unreasonable from a time perspective.
        </li>
    </ol>
    <p>
        This results in Mornary operating best with short text and small files as payloads.
    </p>
    <h3>English Words &ne; Plausible English Text</h3>
    <p>
        Morse code that decodes to <code>MEET E N MADE MADE G ON ETHER TAME G TOWN RANGE PLEASE T</code> may be suficient to
        convince someone unaware of Mornary that the transmission was in-fact Morse code. However, it still leaves much to be
        desired in terms of convincing them that there isn't a hidden message. This reflects both an implementation limitation
        of the current application and an inherent technical limitation of Mornary as a system.
     </p>
     <p>
        On the implementation side, this application is still in early development and its ability to find an appropriate
        mapping from binary data to Morse-encoded English is expected to improve. However, there are also inherent limitations
        to the approach. It is unlikely that the system will ever consistently produce full sentences or paragraphs that align
        perfectly with arbitrary binary payloads. That said, what Mornary lacks in detectability, it makes up for in information
        density.
    </p>
    <br/>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>