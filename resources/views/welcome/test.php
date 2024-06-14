 <?php
echo "
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>WEC-2023-VF</title>
    <link href=\"Bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"/images/icon/favicon-wearnes.ico\" type=\"image/x-icon\">
    <link href=\"/fontawesome/css/fontawesome.css\" rel=\"stylesheet\">
    <link href=\"/fontawesome/css/brands.css\" rel=\"stylesheet\">
    <link href=\"/fontawesome/css/solid.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/style-main.css\">
  </head>
  <body>
    <section id=\"judul_and_jumbotron\">
      <!-- JUDUL1 -->
      <div class=\"container-sm\" style=\"margin-top:100px\">
        <h1 id=\"judul1\">WEARNES EDUCATION CENTER</h1>
      </div>
      <!-- JUDUL2 -->
      <div class=\"container-sm\" style=\"margin-top:10px\">
        <h2 id=\"judul2\">TEKNIK INFORMATIKA, ANDROID, & GAME DEVELOPER</h2>
      </div>
      <!-- JUDUL3 -->
      <div class=\"container-sm\" style=\"margin-top:10px\">
        <h3 id=\"judul3\">Hello, WEC-2023!</h3>
      </div>
    </section>
    <!-- NAVBAR1 -->
    <nav class=\"navbar navbar-expand-lg bg-dark navbar-dark fixed-top\">
      <div class=\"container-fluid\">
        <button class=\"navbar-toggler bg-dark-subtle\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0\">
            <li class=\"nav-item\">
              <a class=\"nav-link active text-white-50\" aria-current=\"page\" href=\"#Home\"> <i class=\"fa-solid fa-house\"></i> Home</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">WebHost</a>
              <ul class=\"dropdown-menu bg-dark-subtle\">
                <li><a class=\"dropdown-item\" href=\"https://github.com/VegaF-WebDev\">GitHub VF <i class=\"fa-brands fa-github\"></i></a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"#\">WIP 000webhosting <i class=\"fa-solid fa-globe\"></i></a></li>
                <li><a class=\"dropdown-item\" href=\"#\">WIP GitLab <i class=\"fa-brands fa-gitlab\"></i></a></li>
              </ul>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle disabled\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" aria-disabled=\"true\">C# Console</a>
              <ul class=\"dropdown-menu bg-dark-subtle\">
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 1A</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 1B</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 2A</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 2B</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 3A</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 3B</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 4A</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 4B</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 5A</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 5B</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"#\">WIP 6A</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">WIP 6B</a></li>
              </ul>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Web Bootstrap & CSS</a>
              <ul class=\"dropdown-menu bg-dark-subtle\">
                <li><a class=\"dropdown-item\" href=\"https://carane-pinterbareng.blogspot.com/\"> Materi Bootstrap 5</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"#\">Fix & Fluid Container Bootstrap</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Grid Bootstrap</a></li>
                <li><a class=\"dropdown-item\" href=\"web-bootstrap/nav-menu/nav-menu.html\">NavMenu Bootstrap</a></li>
                <li><a class=\"dropdown-item\" href=\"web-bootstrap/tabs-and-pills/tabs-and-pills.html\">Tabs & Pills Bootstrap</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Navbar Menu Bootstrap 5</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Jumbotron Bootstrap 5</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Flex Bootstrap 5</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Transform CSS</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Transition CSS</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"/wip/wipA/wipA.html\">WIP A (Jumbotron, Flex, Modal, Video)</a></li>
                <li><a class=\"dropdown-item\" href=\"/wip/wipB/wipB.html\">WIP B (Images, Transformation)</a></li>
                <li><a class=\"dropdown-item\" href=\"/wip/wipC/wipC.html\">WIP C (Bootstrap template A)</a></li>
                <li><a class=\"dropdown-item\" href=\"/wip/wipD/index.html\">WIP D (Bootstrap template B)</a></li>
                <li><a class=\"dropdown-item\" href=\"/wip/wipE/AdminLTE-3.2.0/starter.html\">WIP E (AdminLTE)</a></li>
              </ul>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">PHP</a>
              <ul class=\"dropdown-menu bg-dark-subtle\">
                <li><a class=\"dropdown-item\" href=\"#\">SOAL 1A</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"#\">WIP</a></li>
              </ul>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Website</a>
              <ul class=\"dropdown-menu bg-dark-subtle\">
                <li><a class=\"dropdown-item\" href=\"/index.html\">Main Website (html)</a></li>
                <li><a class=\"dropdown-item\" href=\"/index.php\">Main Website (php)</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"/test.php\">Test Website (php)</a></li>
              </ul>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVBAR2 -->
    <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand me-auto\" href=\"https://www.wearneseducation.com/\">
          <img src=\"/images/logo/logo-wearnes.png\" alt=\"Wearnes Logo\" style=\"width: 48px;height: 36px;\">
        </a>
        <a class=\"navbar-brand ms-auto text-white-50\" href=\"#\">2023 VegaF-WebDev. All Rights Reserved</a>
      </div>
    </nav>
    <!-- JUMBOTRON1 -->
    <section id=\"Jumbotron1\">
      <div class=\"container mt-3 mt-4 p-5 bg-transparent text-black-50 rounded-5\">
        <h1 id=\"jumbotron1judul\">Halaman Utama WebDev HTML</h1> 
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p> 
      </div>
    </section>
    <script src=\"bootstrap/js/bootstrap.bundle.min.js\"></script>
  </body>
</html>
";
?>