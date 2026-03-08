<?php
$pageTitle = "Downloads - Mornary";
$currentPage = "DOWNLOADS";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
        <main>
            <div class="content">
                <hr/>
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
                <h2>Files</h2>
                <table>
                    <tr>
                        <th>Version</th>
                        <th>Date Published</th>
                        <th>Downloads</th>
                    </tr>
                    <tr>
                        <td rowspan="2">1.0.0.beta.1</td>
                        <td rowspan="2">Upcoming</td>
                        <td>

                        </tr>
                        <tr>

                        </tr>
                    <tr>
                        <td rowspan="2">1.0.0.alpha.2</td>
                        <td rowspan="2">2026-03-03</td>
                        <td><a href="/binaries/mornary-1.0.0.02.msi" download="mornary-1.0.0.02.msi">Windows Installer (.msi)</a></td>
                    </tr>
                    <tr>
                        <td><a href="/binaries/mornary-1.0.0.alpha.2.jar" download="mornary-1.0.0.alpha.2.jar">Java Archive (.jar)</a></td>
                    </tr>
                    <tr>
                        <td>1.0.0.alpha.1</td>
                        <td>2026-02-26</td>
                        <td><a href="/binaries/mornary-1.0.0.alpha.1.jar" download="mornary-1.0.0.alpha.1.jar">Java Archive (.jar)</a></td>
                    </tr>
                </table>
            </div>
        </main>
        <footer>
            <p>&copy; 2026 John Mortimore</p>
        </footer>
    </body>
</html>