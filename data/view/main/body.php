<body style="color: black;">
<nav class="autohide navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href=""><img src="sys/libs/images/logo1.png" alt="" width="50" height="30"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="showview('portfolio')">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="showview('skillset')">Skillset</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="showview('experience')">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"onclick="showview('contact')">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section>
    <div id="pageView">
        <?php include "data/view/Home/Home.php"; ?>
    </div>
</section>

