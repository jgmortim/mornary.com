<?php
$pageTitle = "Downloads - Mornary";
$currentPage = "DOWNLOADS";
$canonical = "https://mornary.com/downloads";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
$counts = json_decode(file_get_contents("../binaries/download-counts.json"), true);

$releases = [
    [
        "version" => "1.0.0",
        "date" => "Upcoming",
        "files" => []
    ],
    [
        "version" => "1.0.0-beta.1",
        "date" => "2026-03-08",
        "files" => [
            ["file" => "mornary-1.0.0.11.msi", "label" => "Windows Installer"],
            ["file" => "mornary-1.0.0-beta.1.jar", "label" => "Java Archive"]
        ]
    ],
    [
        "version" => "1.0.0-alpha.2",
        "date" => "2026-03-03",
        "files" => [
            ["file" => "mornary-1.0.0.02.msi", "label" => "Windows Installer"],
            ["file" => "mornary-1.0.0-alpha.2.jar", "label" => "Java Archive"]
        ]
    ],
    [
        "version" => "1.0.0-alpha.1",
        "date" => "2026-02-26",
        "files" => [
            ["file" => "mornary-1.0.0-alpha.1.jar", "label" => "Java Archive"]
        ]
    ]
];
?>
<main>
    <div class="content">
        <h2>Installing & Uninstalling</h2>
        <h3>Windows</h3>
        <p>The Windows installer (.msi) will install Mornary under <code>C:\Program Files\Mornary</code>.</p>
        <p>
            Windows Defender SmartScreen will give you a pop-up stating that this is an unrecognized app and it will ask
            if you want to run it or not. It will also list the publisher as "Unknown publisher. This is because
            Project Mornary does not have the funding to pay for a code signing certificate. You can chose to trust it
            or you can compile the source code yourself. Instructions for that are in the github README.
        </p>
        <details>
            <summary>
                Click to view an example of the Windows Defender pop-up warning.
            </summary>
            <img src="/images/SmartScreenWarning.jpg" alt="Warning message from Windows Defender" style="height: 300px">
        </details>
        <p>
            To uninstall, simply go to <code>Setting > Apps > Installed apps</code>, find "mornary" in the list,
            click on the 3 dots, and click "uninstall".
        </p>
        <h3>Java</h3>
        <p>
            Fat JARs are provided for each version of the application which you can use if your operating system is not yet supported,
            or if you just don't want to use the installer. These will require you to have Java installed on your machine.
            You can run the JARs with <code>java -jar mornary-[version].jar</code> followed by the command line arguments.
        </p>
        <h2>Software</h2>
        <a href="https://github.com/jgmortim/mornary/blob/main/CHANGELOG.md" target="_blank">View Changelog</a>
        <table>
            <tr>
                <th>Version</th>
                <th>Date Published</th>
                <th>Downloads</th>
            </tr>
            <?php foreach ($releases as $release): ?>
                <tbody>
                    <?php $rowspan = max(count($release["files"]), 1); ?>
                    <?php if (empty($release["files"])): ?>
                        <tr>
                            <td><?= $release["version"] ?></td>
                            <td><?= $release["date"] ?></td>
                            <td></td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($release["files"] as $i => $file): ?>
                            <tr>
                                <?php if ($i === 0): ?>
                                    <td rowspan="<?= $rowspan ?>"><?= $release["version"] ?></td>
                                    <td rowspan="<?= $rowspan ?>"><?= $release["date"] ?></td>
                                <?php endif; ?>
                                <td>
                                    <a href="/includes/download.php?file=<?= $file["file"] ?>" download="<?= $file["file"] ?>"><?= $file["label"] ?></a>
                                    (<?= $counts[$file["file"]] ?? 0 ?> downloads)
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            <?php endforeach; ?>
        </table>

        <h2>Example Files</h2>
        The example files below are all Mornary-encoded. You can use them to test the application.
        <table>
            <tr>
                <th>File</th>
                <th>Command</th>
                <th>Description</th>
            </tr>
            <tbody>
                <tr>
                    <td><a href="/includes/download.php?file=ascii-art.txt" download="ascii-art.txt">ascii-art.txt</a> (<?= $counts["ascii-art.txt"] ?? 0?> downloads)</td>
                    <td><code>mornary -D ascii-art.txt</code></td>
                    <td>This file will decode to pure ASCII text so there is no need to specify an output file.</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>