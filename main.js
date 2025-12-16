// --- MODIFICADO: Lógica del Preloader (Fuerza 3 segundos) ---
// Esto se ejecuta tan pronto como el DOM está listo, sin esperar a las imágenes
$(document).ready(function() {
    var $preloader = $('#preloader');
    if ($preloader.length) {
        // Forzar el ocultado después de 3 segundos (3000ms)
        setTimeout(function() {
            $preloader.addClass('hidden');
        }, 3000); // 3 segundos
        
        // Eliminarlo del DOM después de la transición (3s + 0.5s)
        setTimeout(function() {
            $preloader.remove();
        }, 3600); // 3000ms + 600ms de la transición CSS
    }
    
    // --- 5. FILTRO DE PROYECTOS PORTFOLIO (con Isotope) ---
    var $grid = $('#portfolio-grid').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows',
        transitionDuration: '0.6s' // Duración de la animación de filtrado
    });

    // Lógica para los botones de filtro
    $('#portfolio-filters .btn-filter').on('click', function() {
        // Manejar la clase 'active' en los botones
        $('#portfolio-filters .btn-filter').removeClass('active');
        $(this).addClass('active');

        // Obtener el valor del filtro
        var filterValue = $(this).attr('data-filter');
        
        // Construir el selector de atributo correcto
        var selector;
        if (filterValue == '*') {
            selector = '*';
        } else {
            selector = '[data-category="' + filterValue + '"]'; // Ej: [data-category="react"]
        }
        
        // Aplicar el filtro a Isotope con el selector corregido
        $grid.isotope({ filter: selector });
    });


    // Variable para guardar la última posición del scroll
    let lastScrollTop = 0;

    // 1. Script para Smooth Scrolling (Desplazamiento Suave)
    $('.navbar-nav a[href*="#"]:not([href="#"])').on('click', function(e) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            let target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 72 
                }, 600, function() { 
                    let $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { 
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); 
                        $target.focus(); 
                    };
                });

                // --- Cierra el menú de hamburguesa al hacer clic ---
                var $navbarResponsive = $('#navbarResponsive');
                if ($navbarResponsive.hasClass('show')) {
                    // Usamos el método de Bootstrap para un cierre suave
                    var bsCollapse = new bootstrap.Collapse($navbarResponsive[0], {
                        toggle: false
                    });
                    bsCollapse.hide();
                }
            }
        }
    });

    // 2. Efecto de "shrink" y "hide" para el Navbar al hacer scroll
    let navbarCollapse = function() {
        var $mainNav = $("#mainNav");
        var $navbarResponsive = $('#navbarResponsive');
        var st = $(window).scrollTop(); // Posición actual del scroll
        var windowWidth = $(window).width();

        // --- Lógica 1: Efecto "shrink" (para todos los tamaños) ---
        if (st > 100) {
            $mainNav.addClass("navbar-scrolled");
        } else {
            $mainNav.removeClass("navbar-scrolled");
        }

        // --- Lógica 2: Ocultar/Mostrar menú (SOLO EN MÓVIL) ---
        if (windowWidth < 992) {
            if ($navbarResponsive.hasClass('show')) {
                return;
            }

            if (st > lastScrollTop && st > 100) {
                $mainNav.addClass('navbar-hidden');
            } else {
                $mainNav.removeClass('navbar-hidden');
            }
        } else {
            $mainNav.removeClass('navbar-hidden');
        }
        
        lastScrollTop = st <= 0 ? 0 : st; 
    };
    navbarCollapse();
    $(window).scroll(navbarCollapse); 
    $(window).resize(navbarCollapse); 

    // 3. Pequeño efecto de animación para los títulos de la sección HERO
    $('.hero h1, .hero p').addClass('animate__animated animate__fadeInUp');
    
    // 4. Integración de la funcionalidad de contacto (sin cambios)
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        let $form = $(this);
        let $submitButton = $('#submitButton');
        let $submitButtonText = $('#submitButtonText');
        let $spinner = $submitButton.find('.spinner-border');
        let $messageWrapper = $('#form-message-wrapper');

        $submitButton.prop('disabled', true);
        $submitButtonText.text('Enviando...');
        $spinner.removeClass('d-none');
        $messageWrapper.html(''); 

        let formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            message: $('#message').val(),
            website_url: $('#website_url').val() // Captura del campo honeypot
        };

        $.ajax({
            type: "POST",
            url: "send_mail.php", // Ruta corregida
            data: formData,
            dataType: "json", 
            
            success: function(response) {
                if (response.success) {
                    $messageWrapper.html('<div class="alert alert-success" role="alert">¡Mensaje enviado con éxito! Gracias por contactarme.</div>');
                    $form[0].reset(); 
                } else {
                    $messageWrapper.html('<div class="alert alert-danger" role="alert">Error: ' + response.message + '</div>');
                }
            },
            error: function() {
                $messageWrapper.html('<div class="alert alert-danger" role="alert">Hubo un error al conectar con el servidor. Por favor, inténtalo de nuevo.</div>');
            },
            complete: function() {
                $submitButton.prop('disabled', false);
                $submitButtonText.text('Enviar Mensaje');
                $spinner.addClass('d-none');
            }
        });
    });

    // --- Lógica de aparición/desaparición del botón de WhatsApp (sin cambios) ---
    const $whatsappBtn = $('.whatsapp-float-btn');
    const showDelay = 5000;
    const hideDelay = 10000;
    const reappearDelay = 30000;

    function showWhatsappButton() {
        $whatsappBtn.css({ 'opacity': 1, 'visibility': 'visible', 'transform': 'scale(1)' });
    }

    function hideWhatsappButton() {
        $whatsappBtn.css({ 'opacity': 0, 'visibility': 'hidden', 'transform': 'scale(0.8)' });
    }

    let timeoutShow, timeoutHide, timeoutReappear;

    function startWhatsappCycle() {
        clearTimeout(timeoutShow);
        clearTimeout(timeoutHide);
        clearTimeout(timeoutReappear);

        timeoutShow = setTimeout(() => {
            showWhatsappButton();
            timeoutHide = setTimeout(() => {
                hideWhatsappButton();
                timeoutReappear = setTimeout(startWhatsappCycle, reappearDelay);
            }, hideDelay);
        }, showDelay);
    }

    startWhatsappCycle();

});