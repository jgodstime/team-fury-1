<?php include_once("mocks-parser.php"); ?>

<?php if (isset($_GET["json"])):
    print_r(parse_scripts(true, true)); // prettify for now
?>
  

<?php else : ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,300;1,700&display=swap"
            rel="stylesheet" />
        <script src="https://kit.fontawesome.com/6f42b1cf6f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./styles.css">
        <title>Team &mdash; Fury</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <nav>
                    <h3>Team Fury</h3>
                    <ul>
                        <li>
                            <p><b>Team-Lead:</b> John Doe</p>
                        </li>
                        <li>
                            <p><b>Frontend Deputy:</b> John Doe</p>
                        </li>
                        <li>
                            <p><b>Backend Deputy:</b> John Doe</p>
                        </li>
                    </ul>
                </nav>
                <div class="col">
                    <table>
                        <thead>
                            <td>S/N</td>
                            <td>FULL NAME</td>
                            <td>HNG_ID</td>
                            <td>LANGUAGE</td>
                            <td>MESSAGE</td>
                            <td>STATUS</td>
                        </thead>
                        <tbody>
                            <?php
                                $resultsSummary = parse_scripts();
                                foreach ($resultsSummary->totalResults as $key => $result):
                            ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?= $result->fullname ?></td>
                                <td><?= $result->id ?></td>
                                <td><?= $result->language ?></td>
                                <td><?= preg_replace("/ and email $result->email/i", '', $result->output); ?></td>
                                <td>
                                    <?php if ($result->status == "pass"):?>
                                        <i class="fas fa-check"></i>
                                    <?php else : ?>
                                       <i class="fas fa-times"></i> 
                                    <?php endif; ?>                                    
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php endif; ?>