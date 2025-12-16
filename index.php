<?php
$pageTitle = 'Federico González - Desarrollador & Escritor';
$metaDescription = 'Portfolio de desarrollo y universo literario de Federico González, autor de "Bajo la Sombra de un Nuevo Amanecer" y "Volveré a encontrarte...".';
// PHP simple para incluir componentes
include 'includes/header.php';
?>


<section id="hero" class="hero vh-100 d-flex align-items-center">
    <div class="container z-1 text-center text-white">
        
        <h1 class="display-2 fw-bold mb-2">
            <span id="typed-hero"></span>
        </h1>
        
        <p class="fs-4 mb-5">
            Desarrollo <span class="fw-bold">Software robustos y a medida</span>. Creo <span class="fw-bold">Narrativas Cautivadoras</span>. 
            <br>Mi código y mis historias impulsan el futuro.
        </p>

        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
            <a href="#portfolio" class="btn btn-lg btn-accent-blue-outline"><i class="fas fa-code me-2"></i> Ver Portfolio de Desarrollo</a>
            <a href="#writing" class="btn btn-lg btn-accent-orange"><i class="fas fa-book me-2"></i> Conocer Mi Obra Publicada</a>
        </div>
    </div>
    
    <div class="hero-overlay"></div>
    <div class="hero-bg-img"></div> 
    
    <a href="#portfolio" class="scroll-down-link">
        <div class="scroll-down-mouse">
            <div class="scroll-down-wheel"></div>
        </div>
    </a>
</section>

<section id="portfolio" class="py-5 bg-darker">
    <div class="container">
        <h2 class="display-4 text-white text-center mb-5" data-aos="fade-up"><i class="fas fa-laptop-code text-accent-blue me-3"></i>Proyectos Destacados</h2>
        <p class="lead text-center text-white mb-5" data-aos="fade-up" data-aos-delay="100">Soluciones Full-Stack y sistemas diseñados para el rendimiento y la escalabilidad.</p>
        
        <div class="text-center mb-5" id="portfolio-filters">
            <button type="button" class="btn btn-filter btn-accent-blue-outline active" data-filter="*">Todos</button>
            <button type="button" class="btn btn-filter btn-accent-blue-outline" data-filter="react">React</button>
            <button type="button" class="btn btn-filter btn-accent-blue-outline" data-filter="vue">Vue.js</button>
            <button type="button" class="btn btn-filter btn-accent-blue-outline" data-filter="php">PHP</button>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="portfolio-grid">
            
            <div class="col portfolio-item" data-category="react">
                <div class="card bg-black text-white h-100 shadow-lg project-card">
                    <img src="https://picsum.photos/id/1015/600/400" class="card-img-top" alt="CRM para Startups">
                    <div class="card-body">
                        <h5 class="card-title text-accent-blue">CRM para Startups</h5>
                        <p class="card-text text-white">Plataforma de gestión de clientes construida con microservicios.</p>
                        <span class="badge bg-secondary me-2">React</span>
                        <span class="badge bg-secondary me-2">Python</span>
                        <span class="badge bg-secondary">Docker</span>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                         <button type="button" class="btn btn-sm btn-accent-blue" data-bs-toggle="modal" data-bs-target="#projectModal1">
                             Ver Detalles <i class="fas fa-arrow-right"></i>
                         </button>
                    </div>
                </div>
            </div>
            
            <div class="col portfolio-item" data-category="vue">
                <div class="card bg-black text-white h-100 shadow-lg project-card">
                    <img src="https://picsum.photos/id/1025/600/400" class="card-img-top" alt="E-commerce">
                    <div class="card-body">
                        <h5 class="card-title text-accent-blue">E-commerce de Alto Tráfico</h5>
                        <p class="card-text text-white">Sistema de ventas online con API Restful y pagos integrados.</p>
                        <span class="badge bg-secondary me-2">Vue.js</span>
                        <span class="badge bg-secondary me-2">Node.js</span>
                        <span class="badge bg-secondary">MongoDB</span>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                         <button type="button" class="btn btn-sm btn-accent-blue" data-bs-toggle="modal" data-bs-target="#projectModal2">
                             Ver Detalles <i class="fas fa-arrow-right"></i>
                         </button>
                    </div>
                </div>
            </div>
            
            <div class="col portfolio-item" data-category="php">
                <div class="card bg-black text-white h-100 shadow-lg project-card">
                    <img src="https://picsum.photos/id/1033/600/400" class="card-img-top" alt="Web Corporativa">
                    <div class="card-body">
                        <h5 class="card-title text-accent-blue">Plataforma Educativa LMS</h5>
                        <p class="card-text text-white">Sistema de aprendizaje con seguimiento de progreso y certificaciones.</p>
                        <span class="badge bg-secondary me-2">PHP (Laravel)</span>
                        <span class="badge bg-secondary me-2">MySQL</span>
                        <span class="badge bg-secondary">jQuery</span>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                         <button type="button" class="btn btn-sm btn-accent-blue" data-bs-toggle="modal" data-bs-target="#projectModal3">
                             Ver Detalles <i class="fas fa-arrow-right"></i>
                         </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="writing" class="py-5">
    <div class="container">
        <h2 class="display-4 text-white text-center mb-5" data-aos="fade-up"><i class="fas fa-feather-alt text-accent-orange me-3"></i>Mi Obra Publicada</h2>
        
        <div class="row align-items-center g-5">
            <div class="col-md-5 text-center" data-aos="fade-right">
                <img src="assets\img\libro1.png" alt="Portada del Libro" class="img-fluid rounded shadow-lg book-cover-img">
            </div>
            <div class="col-md-7 text-white text-md-start text-center" data-aos="fade-left">
                <h3 class="display-5 text-accent-orange mb-3">Volveré a encontrarte en la próxima vida</h3>
                <p class="lead mb-4">Hay amores tan puros que desafían la frontera del tiempo y el olvido. Una épica romántica sobre la promesa de un alma atrapada entre mundos buscando su nueva forma de amar</p>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a target="_blank" href="https://l.instagram.com/?u=https%3A%2F%2Fwww.tintalibre.com.ar%2Fbook%2F2153%2FVolver%C3%A9_a_encontrarte_en_la_pr%C3%B3xima_vida%3Ffbclid%3DPAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGnHWRwWr9aIz90jQU5yEUVj0VPb8WPpSMUdYMv2V5GCDtfj8oJ4lDQMOy58tg_aem_a68JqYoezoJ3nhWDA305VA&e=AT0LdYAaO4lZOGMr1qCT3cPho2zZwGU0EAJvSRRmRn0AT3I9keLNB4V007D63-YzppHOZE95rhhl5ReSoQpve2xUHAZ2wiMuVUPDqxEuGQ" class="btn btn-lg btn-accent-orange"><i class="fas fa-shopping-cart me-2"></i> Comprar Ahora</a>
                    <a target="_blank" href="https://www.amazon.es/Volver%C3%A9-encontrarte-en-pr%C3%B3xima-vida-ebook/dp/B0DD4DTRB3/ref=sr_1_7?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=6SAXJR7XVEYI&dib=eyJ2IjoiMSJ9.QKpxcQhbxTtejsM-KdCQGIB5SNpNdDe3l3kNDqQfZqPb7QTnrmypKw9ZURg-DaI8dB7b7UmRDooGrW5DIdtGncZ74v-2i23rKNzB31XWu5GUtsPiheLzsDpNUUEQtbydCZI3pf4CfJ_vyvS5nVNgc8fpVxfHj9aSXeD3B67spz4Au89VUUFjVEUfLiBgarcGP1Gv3Zi3iop_chpv7woetlyoeMo8sq-quxkIAqs280g0f2gcEPFf_iFJzvSNfix7QEkBQ_74Roe1WIERv5R1ePHx5tDq6JnmC_Mb8383tTw.Dqskcz6_S6OTxykPMBeaWvli0V1LbE9Pl-ZlJ1HZ97I&dib_tag=se&keywords=volver+a+encontrarte&qid=1762799468&sprefix=volver+a+encontrarte+%2Caps%2C316&sr=8-7&asin=B0DD4DTRB3&revisionId=21a59322&format=3&depth=1" class="btn btn-lg btn-accent-orange-outline"><i class="fas fa-glasses me-2"></i> Leer Muestra Gratis</a>
                </div>

                <div class="mt-4 pt-4 border-top border-secondary" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="text-white-50">Temas Clave:</h4>
                    <ul class="list-unstyled text-white">
                        <li><i class="far fa-dot-circle text-accent-blue me-2"></i> Destino Invencible.</li>
                        <li><i class="far fa-dot-circle text-accent-blue me-2"></i> Trascendencia del Alma.</li>
                        <li><i class="far fa-dot-circle text-accent-blue me-2"></i> Pasión Prohibida</li>
                        <li><i class="far fa-dot-circle text-accent-blue me-2"></i> Dolor y la Esperanza.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="history" class="py-5 bg-darker text-white">
    <div class="container">
        <h2 class="display-4 text-center mb-5" data-aos="fade-up"><i class="fas fa-history text-accent-orange me-3"></i>Del Fuego a la IA: Un Viaje Épico</h2>
        
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2 text-center" data-aos="fade-left">
                
                <video class="img-fluid rounded shadow-lg history-video" loop muted autoplay playsinline poster="assets/img/video-poster.jpg">
                    <source src="assets/video/Historia_Humana_y_Futuro.mp4" type="video/mp4">
                    Tu navegador no soporta la etiqueta de video.
                </video>
                
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <p class="lead text-white-75">
                    Mi fascinación por la historia de la humanidad es tan profunda como mi pasión por el código. Desde los primeros destellos de la conciencia hasta la era de la inteligencia artificial, cada paso de nuestra especie es una historia de innovación, desafío y transformación.
                </p>
                <p class="text-white-75">
                    Este viaje a través del tiempo no es solo un repaso de eventos pasados, sino una ventana para comprender el presente y vislumbrar el futuro. Exploramos cómo las decisiones de ayer forjaron las sociedades de hoy y cómo nuestra tecnología, en constante evolución, sigue redefiniendo lo que significa ser humano.
                </p>
                <a href="#" class="btn btn-lg btn-accent-orange-outline mt-3"><i class="fas fa-book-open me-2"></i> Explorar Artículos Históricos</a>
            </div>
        </div>
    </div>
</section>
<section id="nuevo-amanecer" class="py-5 bg-darker text-white">
    <div class="container">
        <h2 class="display-4 text-white text-center mb-5" data-aos="fade-up"><i class="fas fa-satellite-dish text-accent-blue me-3"></i>Bajo la Sombra de un Nuevo Amanecer</h2>
        
        <div class="row align-items-center g-5">
            <div class="col-md-5 text-center" data-aos="fade-right">
                
                <div class="book-cover-wrapper">
                    <img src="assets/img/portada-nuevo-amanecer.png" width="250px" alt="Portada Bajo la Sombra de un Nuevo Amanecer" class="img-fluid rounded shadow-lg book-cover-img">
                    
                    <div class="book-ribbon"><span>Próximamente</span></div>
                </div>

            </div>
            
            <div class="col-md-7 text-white text-md-start text-center" data-aos="fade-left">
                <h3 class="display-5 text-accent-blue mb-3">El Apagón fue solo el comienzo.</h3>
                
                <p class="lead mb-4">
                    Un apocalipsis cibernético provoca la tercera guerra mundial, desatado por la IA "Sombra-V" que sume al mundo en ruinas. La lucha por sobrevivir revela una conspiración ancestral que involucra el "Proyecto Tifón", el secreto del Triángulo de las Bermudas, una misteriosa tecnología alienígena "El Eje" bajo la Antártida y el exilio final de la humanidad.
                </p>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="https://www.youtube.com/watch?v=Avd4Sn2asXA&feature=youtu.be" class="btn btn-lg btn-accent-blue"><i class="fas fa-info-circle me-2"></i> Ver video del trailer cinematográfico</a>
                    <!--a href="#" class="btn btn-lg btn-accent-blue-outline"><i class="fas fa-book-open me-2"></i> Leer Capítulo 1</a-->
                </div>

                <div class="mt-4 pt-4 border-top border-secondary" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="text-white-50">Temas Clave:</h4>
                    <ul class="list-unstyled text-white">
                        <li><i class="far fa-dot-circle text-accent-blue me-2"></i> Apocalipsis de IA (Sombra-V)</li>
                        <li><i class="far fa-dot-circle text-accent-blue me-2"></i> Conspiración de la Alianza Purista</li>
                        <li><i class="far fa-dot-circle text-accent-blue me-2"></i> Misterios Antiguos (Atlántida, Triángulo de las Bermudas)</li>
                        <li><i class="far fa-dot-circle text-accent-blue me-2"></i> Exilio de la Humanidad y el Planeta Aethel</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="podcast" class="py-5 bg-black text-center text-white">
    <div class="container">
        
        <h2 class="display-4 text-white mb-5" data-aos="fade-up">
            <i class="fas fa-headphones-alt text-accent-blue me-3"></i>Mi Espacio de Podcast
        </h2>
        
        <p class="lead text-white mb-5" data-aos="fade-up" data-aos-delay="100"> Sumérgete en lo desconocido. Exploramos hechos reales, asesinatos sin resolver, misterios inexplicables, avistamientos OVNI y actividad paranormal. ¿Te atreves a cruzar la frontera?
        </p>

        <div class="row align-items-center justify-content-center g-5 mb-5">
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/enigmas-sin-fronteras.png" alt="Logo Enigmas Sin Fronteras" class="img-fluid rounded-circle shadow-lg podcast-logo-img">
            </div>
            <div class="col-md-7 text-md-start" data-aos="fade-up" data-aos-delay="300">
                
                <h3 class="display-5 text-accent-blue mb-3">Enigmas Sin Fronteras</h3>
                
                <p class="lead mb-4">
                    Cada episodio desentraña casos reales que desafían la lógica, desde crímenes escalofriantes hasta encuentros con lo paranormal. Prepárate para cuestionar todo lo que crees saber.
                </p>
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-md-start">
                    <a href="https://open.spotify.com/show/0DaNZpCXuYGcR9VvT84Nq6" target="_blank" class="btn btn-lg btn-podcast-spotify"><i class="fab fa-spotify me-2"></i> Escuchar en Spotify</a>
                    <a href="https://www.youtube.com/channel/UCj8KqbU63jRrD2uRpiERHmw" target="_blank" class="btn btn-lg btn-podcast-youtube"><i class="fab fa-youtube me-2"></i> Ver en YouTube</a>
                </div>
            </div>
        </div>
        
        <h3 class="display-6 mt-5 mb-4 text-white-50" data-aos="fade-up">Últimos Episodios:</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="fade-up" data-aos-delay="100">
            <?php include 'includes/podcast_episodes.php'; ?>
        </div>
        </div>
</section>
<section id="about" class="py-5 bg-darker">
    <div class="container">
        <h2 class="display-4 text-white text-center mb-5" data-aos="fade-up"><i class="fas fa-user-tie me-3"></i>La Fusión: Código y Narrativa</h2>

        <div class="row align-items-center g-5">
            <div class="col-md-4 text-center" data-aos="fade-right">
                <img src="assets/img/perfil.jpg" alt="Foto de Perfil" class="img-fluid rounded-circle shadow-lg profile-img">
                <h4 class="mt-3 text-accent-blue">Federico González</h4>
                <p class="text-white">Desarrollador Full-Stack | Autor Publicado</p>
            </div>
            <div class="col-md-8 text-white" data-aos="fade-left">
                <p class="lead">Mi valor único reside en la <span class="fw-bold text-accent-blue">doble habilidad de construir y comunicar</span>. Donde la programación me enseña la <span class="text-accent-blue">lógica, la estructura y la eficiencia</span>, la escritura me aporta la <span class="text-accent-orange">creatividad, la empatía y la claridad narrativa</span>.</p>
                
                <p>Esta sinergia me permite crear sistemas robustos, pero mi verdadera inspiración viene de casa. Soy padre de Bauty, mi hijo con autismo, quien me enseña cada día sobre la resiliencia y las diferentes formas de ver el mundo. Cuando no estoy programando o escribiendo, me encontrarás con una guitarra en mis manos; la música es una "chispa de esperanza" personal entre mi hijo y yo.</p>
                
                <div class="d-flex justify-content-start flex-wrap mt-4 pt-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-3 text-center">
                        <i class="fas fa-cogs fa-3x text-accent-blue mb-2"></i>
                        <p class="mb-0 text-white">Lógica de Sistemas</p>
                    </div>
                    <div class="p-3 text-center">
                        <i class="fas fa-guitar fa-3x text-accent-orange mb-2"></i> <p class="mb-0 text-white">Música (Hobby)</p>
                    </div>
                    <div class="p-3 text-center">
                        <i class="fas fa-feather-alt fa-3x text-accent-orange mb-2"></i>
                        <p class="mb-0 text-white">Prosa Clara</p>
                    </div>
                    <div class="p-3 text-center">
                        <i class="fas fa-heart fa-3x text-accent-blue mb-2"></i> <p class="mb-0 text-white">Visión Familiar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="proceso" class="py-5 bg-black text-white text-center">
    <div class="container">
        <h2 class="display-4 mb-5"><i class="fas fa-project-diagram text-accent-blue me-3"></i>Mi Proceso de Trabajo</h2>
        <p class="lead text-white mb-5">Estructura, eficiencia y creatividad en cada etapa, tanto en el código como en la narrativa.</p>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="proceso-step p-4">
                    <div class="step-icon mb-3"><i class="fas fa-search fa-3x text-accent-blue"></i></div>
                    <h5>1. Descubrimiento y Análisis</h5>
                    <p class="text-white small">Entender el problema, los objetivos y el alcance del proyecto (o la idea central del libro).</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="proceso-step p-4">
                    <div class="step-icon mb-3"><i class="fas fa-palette fa-3x text-accent-orange"></i></div>
                    <h5>2. Diseño y Estrategia</h5>
                    <p class="text-white small">Crear wireframes, prototipos y planificar la arquitectura (o el argumento y la estructura).</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="proceso-step p-4">
                    <div class="step-icon mb-3"><i class="fas fa-code fa-3x text-accent-blue"></i></div>
                    <h5>3. Desarrollo e Implementación</h5>
                    <p class="text-white small">Escribir código limpio y eficiente (o redactar el primer borrador).</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="proceso-step p-4">
                    <div class="step-icon mb-3"><i class="fas fa-check-double fa-3x text-accent-orange"></i></div>
                    <h5>4. Revisión y Despliegue</h5>
                    <p class="text-white small">Testear, pulir y lanzar el producto final (o la edición y publicación).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="instagram" class="py-5 bg-darker text-white text-center">
    <div class="container">
        <h2 class="display-4 mb-5" data-aos="fade-up"><i class="fab fa-instagram text-accent-orange me-3"></i>Mi Mundo Visual en Instagram</h2>
        <p class="lead text-white mb-5" data-aos="fade-up" data-aos-delay="100">Conecta conmigo en mis diferentes facetas. Desde mi vida como escritor hasta los misterios del podcast y la historia de la humanidad.</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            
            <div class="col" data-aos="fade-up" data-aos-delay="200">
                <div class="card bg-darker text-white h-100 shadow-lg instagram-card">
                    <img src="assets/img/escritor-ig.png" class="card-img-top" alt="Instagram Escritor">
                    <div class="card-body">
                        <h5 class="card-title text-accent-orange">@fedegonzalez.escritor</h5>
                        <p class="card-text text-white">Mis pensamientos, proceso creativo y novedades literarias.</p>
                        <a href="https://www.instagram.com/fedegonzalez.escritor" target="_blank" class="btn btn-sm btn-accent-orange-outline mt-2"><i class="fab fa-instagram me-2"></i> Seguir</a>
                    </div>
                </div>
            </div>
            
            <div class="col" data-aos="fade-up" data-aos-delay="300">
                <div class="card bg-darker text-white h-100 shadow-lg instagram-card">
                    <img src="assets/img/enigmas2-ig.png" class="card-img-top" alt="Instagram Enigmas">
                    <div class="card-body">
                        <h5 class="card-title text-accent-blue">@enigmassinfronteras</h5>
                        <p class="card-text text-white">Teaser de episodios, datos curiosos y debates sobre el misterio.</p>
                        <a href="https://www.instagram.com/enigmassinfronteras" target="_blank" class="btn btn-sm btn-accent-blue-outline mt-2"><i class="fab fa-instagram me-2"></i> Seguir</a>
                    </div>
                </div>
            </div>
            
            <div class="col" data-aos="fade-up" data-aos-delay="400">
                <div class="card bg-darker text-white h-100 shadow-lg instagram-card">
                    <img src="assets/img/historia-ig.png" class="card-img-top" alt="Instagram Historia">
                    <div class="card-body">
                        <h5 class="card-title text-accent-orange">@lahistoriadenuestrahumanidad</h5>
                        <p class="card-text text-white">Una narración de los descubrimientos, invensiones y curiosidades sobre la evolución humana.</p>
                        <a href="https://www.instagram.com/lahistoriadenuestrahumanidad" target="_blank" class="btn btn-sm btn-accent-orange-outline mt-2"><i class="fab fa-instagram me-2"></i> Seguir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="projectModal1" tabindex="-1" aria-labelledby="projectModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-darker text-white">
      <div class="modal-header border-0">
        <h5 class="modal-title text-accent-blue" id="projectModal1Label">CRM para Startups</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="https://picsum.photos/id/1015/800/400" class="img-fluid rounded mb-3" alt="CRM Detalle">
        <p>Aquí va una descripción <strong>mucho más detallada</strong> del proyecto. Explica el desafío, la solución implementada y el resultado. Habla sobre la arquitectura de microservicios y cómo ayuda a la escalabilidad.</p>
        <p><strong>Tecnologías Usadas:</strong></p>
        <span class="badge bg-secondary me-2">React</span>
        <span class="badge bg-secondary me-2">Python (Flask/Django)</span>
        <span class="badge bg-secondary me-2">Docker</span>
        <span class="badge bg-secondary me-2">PostgreSQL</span>
      </div>
      <div class="modal-footer border-0">
        <a href="#" class="btn btn-accent-blue-outline"><i class="fab fa-github me-2"></i> Ver Código</a>
        <a href="#" class="btn btn-accent-blue"><i class="fas fa-external-link-alt me-2"></i> Ver Demo en Vivo</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="projectModal2" tabindex="-1" aria-labelledby="projectModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-darker text-white">
      <div class="modal-header border-0">
        <h5 class="modal-title text-accent-blue" id="projectModal2Label">E-commerce de Alto Tráfico</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="https://picsum.photos/id/1025/800/400" class="img-fluid rounded mb-3" alt="E-commerce Detalle">
        <p>Descripción detallada del E-commerce. Enfócate en la API Restful y la integración de pasarelas de pago. ¿Cómo manejaste el alto tráfico? ¿Usaste caching (Redis)?</p>
        <p><strong>Tecnologías Usadas:</strong></p>
        <span class="badge bg-secondary me-2">Vue.js</span>
        <span class="badge bg-secondary me-2">Node.js (Express)</span>
        <span class="badge bg-secondary me-2">MongoDB</span>
        <span class="badge bg-secondary me-2">Stripe API</span>
      </div>
      <div class="modal-footer border-0">
        <a href="#" class="btn btn-accent-blue-outline"><i class="fab fa-github me-2"></i> Ver Código</a>
        <a href="#" class="btn btn-accent-blue"><i class="fas fa-external-link-alt me-2"></i> Ver Demo en Vivo</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="projectModal3" tabindex="-1" aria-labelledby="projectModal3Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-darker text-white">
      <div class="modal-header border-0">
        <h5 class="modal-title text-accent-blue" id="projectModal3Label">Plataforma Educativa LMS</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="https://picsum.photos/id/1033/800/400" class="img-fluid rounded mb-3" alt="LMS Detalle">
        <p>Descripción detallada de la plataforma LMS. Habla sobre la gestión de usuarios (roles), el seguimiento de progreso, la generación de certificados y cómo estructuraste la base de datos relacional (MySQL).</p>
        <p><strong>Tecnologías Usadas:</strong></p>
        <span class="badge bg-secondary me-2">PHP (Laravel)</span>
        <span class="badge bg-secondary me-2">MySQL</span>
        <span class="badge bg-secondary me-2">jQuery/AJAX</span>
        <span class="badge bg-secondary me-2">Bootstrap</span>
      </div>
      <div class="modal-footer border-0">
        <a href="#" class="btn btn-accent-blue-outline"><i class="fab fa-github me-2"></i> Ver Código</a>
        <a href="https://federicogonzalez.net/prueba/" class="btn btn-accent-blue"><i class="fas fa-external-link-alt me-2"></i> Ver Demo en Vivo</a>
      </div>
    </div>
  </div>
</div>
<?php
include 'includes/footer.php';
?>