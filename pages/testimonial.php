<!-- Testimonial Start -->
<div class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">

                        <div class="h1-testimonial-active">
                            <?php
                            while ($fila = $data->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial  pt-65">
                                    <!-- Testimonial tittle -->
                                    <div class="font-back-tittle mb-105">
                                        <div class="archivment-front">
                                            <img src="assets/img/usuario.png" alt="">
                                        </div>
                                        <h3 class="archivment-back">Testimonios</h3>
                                    </div>
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-caption text-center">

                                        <p> <?php echo $fila['comentario']; ?></p>

                                        <div class="valorFinal">
                                            <?php
                                            $start = $fila['estrellas'];
                                            // var_dump($start);

                                            for ($i = 0; $i < $start; $i++) {
                                            ?>

                                                <span class="valor">&#9733;</span>

                                            <?php } ?>

                                        </div>

                                        <div class="rattiong-caption">
                                            <div class="name">
                                                <?php echo $fila['nombre']; ?>
                                            </div>
                                            <span>Cliente Regular</span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Testimonial End -->