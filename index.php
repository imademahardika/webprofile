<?php

$judul1="Cara Membuat Bootable OS";
$judul2="Merakit Komputer Mudah dan Menyenangkan";
$judul3="Tips Membedakan Memory RAM Asli dan Palsu";

$content1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam beatae doloribus reiciendis libero delectus voluptatibus repellat odit eum sunt aut iste numquam nihil ea, quibusdam eos dicta quia ipsam!";
$content2="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis eius, nihil, quod illo numquam dolores totam distinctio dolor alias consequatur pariatur provident, sequi id veniam qui autem ullam nobis earum fugit. Omnis dolorem facilis nemo?";
$content3="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo beatae harum similique nisi ipsa perspiciatis vel esse illo, omnis labore obcaecati id vitae. Magni debitis, reprehenderit consectetur aliquam assumenda praesentium? Repellendus velit dignissimos aliquid rem iste quidem et inventore eaque quibusdam. Suscipit libero corporis itaque!";

function posting($judul, $content){
    echo '<div class="post">
    <div class="post-title">
        <h2>'.$judul.'</h2>
    </div>
    <div class="post-content">
            <p>'.$content.'</p>
    </div>
    <div class="post-more">
        <a href="">Read More</a>
    </div>
    </div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--  Header -->
    <div class="header">
        <div class="containered">
            <div class="nav">
                <div class="nav-logo">
                    <h1><a href="">Made Dika</a></h1>
                </div>
                <div class="nav-menu">
                    <a href="">Awal</a>
                    <a href="">Tentang Saya</a>
                    <a href="">Projek</a>
                    <a href="">Kontak</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Banner -->
    <div class="banner">
        <h2>SELAMAT DATANG DI WEBSITEKU</h2>
    </div>
    <!-- End Banner -->

    <!-- Profile -->
    <div class="section">
        <h1>Tentang Saya</h1>
        <figure>
            <img src="img/profile.png" alt="Foto Profil" class="profile">
        </figure>
        <div class="sectiondesc">
        <p> Ada pepatah mengatakan <strong>"Tak Kenal, maka Tak Sayang"</strong>. Perkenalkan saya I Made Mahardika adalah seorang
            pria kelahiran 2003 yang berasal dari Planet Bekasi. Saat ini melanjutkan pendidikan di Universitas Udayana di <i>Fakultas
            Teknik</i> dengan Program Studi <i>Teknologi Informasi</i>. Memiliki tujuan mempelajari hal dan peluang yang baru 
        <br><br>
            Saya memiliki kemampuan yang mudah berkembang dan mengikuti lingkungan tim dengan pembagian peran yang jelas. Saya yakin bahwa 
            <strong>"Ilmu Tidak Ada Habisnya"</strong> sehingga saya tetap fokus untuk menuntut ilmu dan terus belajar dengan hal yang baru. 
            Saya sendiri sangat menyukai dunia teknologi dan dunia otomotif dan memiliki hobi atau passion di dunia hardware komputer
            seperti membongkar komputer dan laptop. Serta menyukai game dengan genre Action, Racing, dan Simulator.
        </p>
        </div>
    </div>
    <!-- EndProfile -->

    <!-- Posting -->

    <div class="posting">
    <div class="section">
        <h1>Artikel Saya</h1>
    </div>
        <div class="container">
            <?php posting($judul1,$content1);?>
            <?php posting($judul2,$content2);?>
            <?php posting($judul3,$content3);?>
        </div>
    </div>

    <!-- End Posting -->
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="copyright">
                Made Dika &copy; 2023. All Right Reserved
            </div>
        </div>
    </div>


</body>
</html>