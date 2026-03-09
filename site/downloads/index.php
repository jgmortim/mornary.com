<?php
$pageTitle = "Downloads - Mornary";
$currentPage = "DOWNLOADS";
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
    </div>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>