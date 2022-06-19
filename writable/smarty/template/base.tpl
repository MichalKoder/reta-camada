<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment Task: Candidates Management Dashboard</title>
    <link rel="stylesheet" href="{$BASEURL}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$BASEURL}/assets/css/style.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <a class="navbar-brand" href="{$BASEURL}/">CaMaDa</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{$BASEURL}/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dashboard
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{$BASEURL}/dashboard">Show Candidates</a></li>
                                    <li><a class="dropdown-item" href="{$BASEURL}/dashboard/add_edit_candidate">Add or Edit Candidate</a></li>
                                    <li><a class="dropdown-item" href="{$BASEURL}/dashboard/roles">Manage Roles</a></li>
                                </ul>
                        </li>

                    </ul>
                 </div>
            </div>
        </nav>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {block name="content"}Default content{/block}
                    </div>
                </div>
            </div>
        </main>

        <footer class="px-2 py-2">
        <div>
            <p class="text-center">&copy; 2022 Michał Sapiński</p>
        </div>
        </footer>

        <script src="{$BASEURL}/assets/js/bootstrap.min.js"></script>
    </body>
</html>