<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Classement</title>

    <!-- CSS Bootstrap 4 : https://getbootstrap.com/docs/4.0/getting-started/introduction/ -->
    <link defer rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS Font Awesome 5 : https://fontawesome.com/get-started -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link href="css/alphaseries.css" rel="stylesheet">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">AlphaSeries</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu principal -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-home"></i> Accueil
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="classement.html">
                        <i class="fas fa-trophy"></i> Classement
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="serie.html">
                        <i class="fas fa-random"></i> Une série aléatoire
                    </a>
                </li>
            </ul>

            <!-- Formulaire de recherche -->
            <form action="recherche.html" method="post" class="form-inline my-2 my-lg-0">
                <input name="search" class="form-control mr-sm-2" type="text" placeholder="Rechercher une série" aria-label="Rechercher une série">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                    <i class="fa fa-search"></i> <span class="d-md-none">Rechercher</span>
                </button>
            </form>
        </div>
    </nav>

    <main role="main">

        <!-- Contenu -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="page-title">
                        <i class="fa fa-trophy"></i> Classement
                    </h2>
                    <p>
                        Séries les plus populaires :
                        <!-- OU Séries les mieux notées : -->
                    </p>

                    <!-- Tableau des résultats du classement -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Série</th>
                                <th scope="col">
                                    Note
                                    <a href="clasement.html"><i class="fa fa-sort-down"></i></a>
                                </th>
                                <th scope="col">
                                    Nombre de personnes qui regardent
                                    <i class="fa fa-sort-down"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>250 000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>250 000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>240 000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>230 000</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>220 000</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>210 000</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>200 000</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>190 000</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>180 000</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>250 000</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td><a href="serie.html">Game of Thrones</a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                </td>
                                <td>170 000</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- BONUS Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="classement.html">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href="classement.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="classement.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="classement.html">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="classement.html">…</a></li>
                            <li class="page-item"><a class="page-link" href="classement.html">99</a></li>
                            <li class="page-item"><a class="page-link" href="classement.html">&raquo;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <hr>
        </main>

        <!-- Footer -->
        <footer class="container">
            <p>&copy; Les données proviennent du site <a target="_blank" href="https://www.betaseries.com">BetaSeries</a></p>
        </footer>

        <!-- JavaScript Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
        // activation des tooltips bootstrap de partout
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        </script>
    </body>
    </html>
