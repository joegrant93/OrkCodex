<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <a class="navbar-brand" href="#">Ork Codex</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Sheets</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    $navData = json_decode(GetAllDataSheetTypes());
                    for ($i = 0; $i < sizeof($navData); $i++) {
                        echo "<a class=\"dropdown-item\" href=\"" . $navData[$i]->hyperlink . "\">" . $navData[$i]->name . "</a>";
                    }
                    ?>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="https://dockms.net/controller/logout.php"><span class="mdi mdi-logout"></span> Logout</a></li>
        </ul>
    </div>
</nav>