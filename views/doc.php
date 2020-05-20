<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TheOol - Wiki</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/dashboard.css">
        <link rel="stylesheet" href="styles/default.css">
        <link rel="shortcut icon" href="images/theool_final_purple.png">
        <link rel="stylesheet" href="styles/b_up.css">
        <script src="https://kit.fontawesome.com/4f55501494.js" crossorigin="anonymous"></script>
    </head>
    <body id="top">
        <a href="#top" class="up">Наверх<i class="fas fa-level-up-alt"></i></a>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">TheOol - Wiki</a>
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <input class="form-control form-control-dark w-100" type="text" placeholder="Поиск" aria-label="Search" id="search">
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="https://github.com/smile1601/SecurellaVM" target="_blank"><i class="fab fa-github"></i> GitHub</a>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav id='sidebarMenu' class='col-md-3 col-lg-2 d-md-block bg-light sidebar collapse'>
                    <div class='sidebar-sticky pt-3 files_list'> 
                        <?php $menu->ShowMenu() ?>
                    </div>
                </nav>
                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 pt-4 files_list">
                    <div style="max-width: 950px" id="hello">
                        <h1>Добро пожаловать на TheOol - Wiki</h1>
                        <p>Данный сайт является базой знаний проекта и связан напрямую с <a href="https://github.com/smile1601/SecurellaVM" target="_blank">GitHub</a> репозиторией проекта, для просмотра документации выберете интересующий вас пункт в меню слева (сверху если вы зашли на сайт с мобильного телефона), или же воспользуйтесь системой поиска по сайту.</p>
                        <p>Если вы до сих пор не знаете что такое TheOol.net, вам следует посетить официфльный сайт проекта - <a href="http://theool.net" target="_blank">theool.net</a>.</p>
                    </div>
                    <div id="info" style="padding-bottom: 54px">
                    </div>
                </main>
                <footer  class="col-md-9 ml-sm-auto col-lg-10 text-left text-md-center fixed-bottom py-3 border-top bg-light">
                    <a href="https://vk.com/brotiger63" target="_blank">©Dmitry Berestnev</a>
                </footer>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
<script src="scripts/js/Ajax.js"></script>
<script src="scripts/js/search.js"></script>
<script src="scripts/js/Menu.js"></script>
<script src="scripts/js/scroll.js"></script>