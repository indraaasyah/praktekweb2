

                <!-- First Blog Post -->
                <?php foreach ($isi_berita as $dt): ?>

                <h2>
                    <a href="#"><?php   echo $dt['judul']; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo date('d-F-Y',strtotime($dt['tanggal']));?></p>
                <hr>
                <a href="blog-post.html">
                    <!-- <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt=""> -->
                </a>
                <hr>
                <p><?php echo $dt['isi'] ?></p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>
                <?php endforeach ?>
