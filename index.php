<?php include_once("parser.php"); ?>

<?php if (isset($_GET["json"])):

    print_r(parse_scripts(true, true)); // prettify for now

<?php else : ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:ital,wght@0,400;0,700;1,300;1,700&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/6f42b1cf6f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./styles.css">
        <title>Team &mdash; Fury</title>
        <script src="./index.js" defer></script>
    </head>

    <body>
        <header>
            <div>
                <span class="site-logo"><i class="fab fa-gripfire"></i>Team Fury</span>
                <span class="menu-bar"><i class="fas fa-bars"></i></span>
            </div>
            <div class="nav" id="nav">
                <ul>
                    <li><a href="#"><span class="t-lead">Team Lead:</span> Godstime John</a></li>
                    <li><a href="#"><span class="t-deputy">Team Deputy:</span> Faith Mofokeng</a></li>
                    <li class="github-icon"><a href="https://github.com/jgodstime/team-fury-1"><i class="fab fa-github"></i> Github</a></li>
                    <li class="slack-icon"><a href="https://hngi7.slack.com/archives/C01482Z0095/p1591106636161000"><i class="fab fa-slack"></i> Slack</a></li>
                </ul>
            </div>
        </header>
        <div class="highlight">
            <?php 
                $resultsSummary = parse_scripts();
            ?>
            <div class="total">
                <span>Submitted</span>
                <span class="total-members" id="total-members"><?= $resultsSummary->totalCount ?></span>
            </div>
            <div class="passes">
                <span>Passed</span>
                <span class="total-passes" id="total-members"><?= $resultsSummary->passCount ?></span>
            </div>
            <div class="fails">
                <span>Fails</span>
                <span class="total-fails" id="total-members"><?= $resultsSummary->failCount ?></span>
            </div>
        </div>
        <div class="container">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>FULL NAME</th>
                            <th>HNG_ID</th>
                            <th>LANGUAGE</th>
                            <th>MESSAGE</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                        
                        foreach ($resultsSummary->totalResults as $key => $result) :
                        ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?= $result->fullname ?></td>
                                <td><?= $result->id ?></td>
                                <td><?= $result->language ?></td>

                                <td><?= preg_replace("/ and email $result->email/i", '', $result->output); ?></td>
                                <td>
                                    <?php if ($result->status == "pass") : ?>
                                        <span class="status pass"><i class="fas fa-user-check"></i></span>
                                    <?php else : ?>
                                        <span class="status fail"><i class="fas fa-user-times"></i></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </body>

    </html>

<?php endif; ?>
