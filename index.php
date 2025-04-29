<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IARsono - Sonografías y Doppler a Domicilio</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    :root {
      --color-dark-blue: #0A223B;
      --color-light-blue: #5ABEF3;
      --color-white: #FFFFFF;
    }
    body {
      font-family: 'Montserrat', sans-serif;
      scroll-behavior: smooth;
    }
    .premium-border {
      border: 2px solid transparent;
      border-image: linear-gradient(to right, #c0c0c0, #e8e8e8, #ffffff, #e8e8e8, #c0c0c0) 1;
      box-shadow: 0 0 10px rgba(200,200,200,0.5);
    }
    .platinum-glow {
      box-shadow: 0 0 15px rgba(200,200,200,0.7);
    }
    .header-bg {
      background-image: url('https://oshe.com.do/wp-content/uploads/2025/04/5429.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
    }
    .header-bg::before {
      content: "";
      position: absolute;
      inset: 0;
      background-color: rgba(10,34,59,0.6);
    }
    .header-content { position: relative; z-index: 10; }
    .service-card {
      transition: all 0.3s ease;
      border: 1px solid rgba(90,190,243,0.2);
    }
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 25px -5px rgba(10,34,59,0.2), 0 10px 10px -5px rgba(10,34,59,0.1);
      border-color: #5ABEF3;
    }
    .btn-premium {
      background-color: #5ABEF3;
      color: #fff;
      border: 1px solid rgba(255,255,255,0.3);
      box-shadow: 0 4px 10px rgba(90,190,243,0.3);
      transition: all 0.3s ease;
    }
    .btn-premium:hover {
      background-color: #4AAEEA;
      box-shadow: 0 6px 15px rgba(90,190,243,0.4);
      transform: translateY(-2px);
    }
    .btn-subscription {
      background-color: rgba(10,34,59,0.9);
      color: #fff;
      border: 1px solid rgba(90,190,243,0.5);
      box-shadow: 0 4px 10px rgba(10,34,59,0.2);
      transition: all 0.3s ease;
    }
    .btn-subscription:hover {
      background-color: #0A223B;
      box-shadow: 0 6px 15px rgba(10,34,59,0.3);
      transform: translateY(-2px);
    }
    .page-section { page-break-inside: avoid; width: 100%; }
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    .fade-in.appear { opacity: 1; transform: translateY(0); }

    /* Floating Social Icons + WhatsApp */
    .social-float {
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 100;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .social-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: var(--color-dark-blue);
      color: #fff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
    }
    .social-icon:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.3);
    }
    .facebook-icon { background: #1877F2; }
    .instagram-icon {
      background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D);
    }
    .whatsapp-icon { background-color: #25D366; }
    .whatsapp-tooltip {
      background-color: #25D366;
      color: #fff;
      border-radius: 20px;
      padding: 8px 12px;
      font-size: 14px;
      white-space: nowrap;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    /* —— Responsive tweaks —— */
    @media (max-width: 768px) {
      .whatsapp-tooltip { display: none; }
      .social-float {
        left: 50%;
        right: auto;
        transform: translateX(-50%);
      }
    }
  </style>
</head>
<body class="bg-gray-50">

<!-- Header Fijo -->
  <header class="fixed inset-x-0 z-50 bg-white bg-opacity-90 shadow-md py-3 px-4 md:px-8">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Aquí va tu logo: cambia el src -->
      <a href="#inicio">
        <img src="https://oshe.com.do/wp-content/uploads/2025/04/logo-png.png" alt="Logo IARsono" class="h-10">
      </a>
      <nav class="hidden md:flex space-x-4">
        <a href="#inicio" class="px-4 py-2 text-gray-700 hover:text-blue-600">Inicio</a>
        <a href="#servicios" class="px-4 py-2 text-gray-700 hover:text-blue-600">Servicios</a>
        <a href="#galeria" class="px-4 py-2 text-gray-700 hover:text-blue-600">Galería</a>
        <a href="#como-funciona" class="px-4 py-2 text-gray-700 hover:text-blue-600">Cómo Funciona</a>
        <a href="#suscripcion" class="px-4 py-2 rounded btn-subscription">Suscripción</a>
        <a href="#agendar" class="px-4 py-2 rounded btn-premium">Agendar cita</a>
      </nav>
      <button class="md:hidden text-xl text-gray-700">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </header>

  <!-- Hero Principal -->
  <section id="inicio" class="page-section header-bg min-h-screen flex items-center pt-16">
    <div class="header-content container mx-auto px-6 py-16 text-center fade-in">
      <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">Sonografías y Doppler a Domicilio</h1>
      <p class="text-xl md:text-2xl text-blue-100 mb-10 max-w-3xl mx-auto">Tecnología avanzada en la comodidad de tu hogar</p>
      <div class="flex flex-col md:flex-row justify-center gap-4">
        <a href="https://form.jotform.com/251164313355046" class="inline-block px-8 py-4 text-lg font-medium rounded-lg btn-premium">Agendar ahora</a>
        <a href="https://form.jotform.com/251176604826055" class="inline-block px-8 py-4 text-lg font-medium rounded-lg btn-subscription premium-border">IARSONO plus</a>
      </div>
    </div>
  </section>

  <!-- Sección 1: ¿Por qué elegirnos? -->
  <section class="page-section py-20 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 fade-in" style="color: var(--color-dark-blue);">¿Por qué elegirnos?</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="text-center premium-border p-8 rounded-lg fade-in">
          <div class="mx-auto rounded-full w-20 h-20 flex items-center justify-center mb-6" style="background-color: rgba(90,190,243,0.2);">
            <i class="fas fa-user-md text-3xl" style="color: var(--color-light-blue);"></i>
          </div>
          <h3 class="text-xl font-semibold mb-4" style="color: var(--color-dark-blue);">Precisión Médica</h3>
          <p class="text-gray-600">Equipos de última generación y profesionales altamente capacitados.</p>
        </div>
        <div class="text-center premium-border p-8 rounded-lg fade-in">
          <div class="mx-auto rounded-full w-20 h-20 flex items-center justify-center mb-6" style="background-color: rgba(90,190,243,0.2);">
            <i class="fas fa-hand-holding-heart text-3xl" style="color: var(--color-light-blue);"></i>
          </div>
          <h3 class="text-xl font-semibold mb-4" style="color: var(--color-dark-blue);">Atención Personalizada</h3>
          <p class="text-gray-600">Servicio cálido y humano adaptado a tus necesidades.</p>
        </div>
        <div class="text-center premium-border p-8 rounded-lg fade-in">
          <div class="mx-auto rounded-full w-20 h-20 flex items-center justify-center mb-6" style="background-color: rgba(90,190,243,0.2);">
            <i class="fas fa-bolt text-3xl" style="color: var(--color-light-blue);"></i>
          </div>
          <h3 class="text-xl font-semibold mb-4" style="color: var(--color-dark-blue);">Resultados Rápidos</h3>
          <p class="text-gray-600">Informe completo en un máximo de 24 horas.</p>
        </div>
      </div>
    </div>
  </section>

 <!-- Servicios Destacados -->
  <section id="servicios" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12 fade-in" style="color: var(--color-dark-blue);">
        Servicios Destacados
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Doppler Arterial y Venoso -->
        <div class="service-card bg-white p-6 rounded-lg fade-in">
          <i class="fas fa-wave-square text-4xl mb-4" style="color: var(--color-light-blue);"></i>
          <h3 class="font-semibold mb-2">Doppler Arterial y Venoso</h3>
          <p>Evaluación del flujo en miembros inferiores sin salir de casa.</p>
        </div>
        <!-- Doppler Renal -->
        <div class="service-card bg-white p-6 rounded-lg fade-in">
          <i class="fas fa-kidneys text-4xl mb-4" style="color: var(--color-light-blue);"></i>
          <h3 class="font-semibold mb-2">Doppler Renal</h3>
          <p>Chequeo vascular de tus riñones con tecnología segura.</p>
        </div>
        <!-- Sonografía Transfontanelar -->
        <div class="service-card bg-white p-6 rounded-lg fade-in">
          <i class="fas fa-baby text-4xl mb-4" style="color: var(--color-light-blue);"></i>
          <h3 class="font-semibold mb-2">Transfontanelar</h3>
          <p>Evaluamos la salud cerebral de tu bebé cómodamente.</p>
        </div>
        <!-- Doppler Postquirúrgico -->
        <div class="service-card bg-white p-6 rounded-lg fade-in">
          <i class="fas fa-syringe text-4xl mb-4" style="color: var(--color-light-blue);"></i>
          <h3 class="font-semibold mb-2">Postquirúrgico</h3>
          <p>Seguimiento vascular tras intervenciones en tu hogar.</p>
        </div>
        <!-- Sonografías Generales -->
        <div class="service-card bg-white p-6 rounded-lg fade-in">
          <i class="fas fa-ultrasound text-4xl mb-4" style="color: var(--color-light-blue);"></i>
          <h3 class="font-semibold mb-2">Sonografías Generales</h3>
          <p>Abdominales, pélvicas, tiroides y tejidos blandos.</p>
        </div>
        <!-- Evaluaciones Prenatales -->
        <div class="service-card bg-white p-6 rounded-lg fade-in">
          <i class="fas fa-heart text-4xl mb-4" style="color: var(--color-light-blue);"></i>
          <h3 class="font-semibold mb-2">Prenatales</h3>
          <p>Ecografías obstétricas y 4D de alta definición.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección: Galería de Imágenes -->
  <section id="galeria" class="page-section py-20 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 fade-in" style="color: var(--color-dark-blue);">Galería de Imágenes</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <img src="https://oshe.com.do/wp-content/uploads/2025/04/03.jpg" alt="Muestra 1" class="w-full h-auto rounded-lg shadow-lg fade-in">
        <img src="https://oshe.com.do/wp-content/uploads/2025/04/02.jpg" alt="Muestra 2" class="w-full h-auto rounded-lg shadow-lg fade-in">
        <img src="https://oshe.com.do/wp-content/uploads/2025/04/01.jpg" class="w-full h-auto rounded-lg shadow-lg fade-in">
      </div>
    </div>
  </section>

  <!-- Sección: Cómo Funciona -->
  <section class="page-section py-20 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 fade-in" style="color: var(--color-dark-blue);">Cómo Funciona</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="text-center premium-border p-8 rounded-lg fade-in">
          <div class="mx-auto rounded-full w-16 h-16 flex items-center justify-center mb-6 text-white font-bold text-2xl" style="background-color: var(--color-light-blue);">1</div>
          <h3 class="text-xl font-semibold mb-4" style="color: var(--color-dark-blue);">Agenda tu cita</h3>
          <p class="text-gray-600">Solicita tu servicio por teléfono o WhatsApp.</p>
        </div>
        <div class="text-center premium-border p-8 rounded-lg fade-in">
          <div class="mx-auto rounded-full w-16 h-16 flex items-center justify-center mb-6 text-white font-bold text-2xl" style="background-color: var(--color-light-blue);">2</div>
          <h3 class="text-xl font-semibold mb-4" style="color: var(--color-dark-blue);">Recibimos a domicilio</h3>
          <p class="text-gray-600">Nuestros especialistas llegarán con todo el equipo.</p>
        </div>
        <div class="text-center premium-border p-8 rounded-lg fade-in">
          <div class="mx-auto rounded-full w-16 h-16 flex items-center justify-center mb-6 text-white font-bold text-2xl" style="background-color: var(--color-light-blue);">3</div>
          <h3 class="text-xl font-semibold mb-4" style="color: var(--color-dark-blue);">Recibe tus resultados</h3>
          <p class="text-gray-600">Informe completo en un máximo de 24 horas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección Suscripción IARSONO plus -->
  <section id="suscripcion" class="page-section py-20 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="flex flex-col items-center premium-border p-12 rounded-lg platinum-glow fade-in" style="background: linear-gradient(135deg, rgba(10,34,59,0.04) 0%, rgba(90,190,243,0.08) 100%);">
        <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center" style="color: var(--color-dark-blue);">Suscripción IARSONO plus</h2>
        <div class="w-24 h-1 bg-blue-400 mb-8 rounded-full"></div>
        <p class="text-lg text-center mb-8 max-w-3xl">Acceso prioritario, descuentos especiales y seguimiento personalizado.</p>
        <a href="https://form.jotform.com/251176604826055" class="inline-block px-10 py-4 text-lg font-semibold rounded-lg btn-premium premium-border">Conocer más</a>
      </div>
    </div>
  </section>

<!-- Sección 4: Sobre nosotros -->
<section id="nosotros" class="page-section py-20 bg-white">
  <div class="container mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center gap-12">
      
      <!-- Aquí va tu imagen -->
      <div class="w-full md:w-1/2 flex justify-center">
        <img 
          src="https://oshe.com.do/wp-content/uploads/2025/04/logo-iarsono.jpg" 
          alt="Sobre nosotros" 
          class="rounded-lg max-w-full h-auto premium-border platinum-glow"
        />
      </div>

      <div class="w-full md:w-1/2">
        <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--color-dark-blue);">Sobre nosotros</h2>
        <p class="text-gray-600 mb-6 text-lg">
          En <span class="font-semibold" style="color: var(--color-dark-blue);">IARsono</span> acercamos la tecnología diagnóstica a tu hogar.
        </p>
        <p class="text-gray-600 mb-6 text-lg">
          Más de 10 años brindando servicios de sonografía y Doppler con la misma calidad profesional.
        </p>
        <p class="font-medium text-xl" style="color: var(--color-light-blue);">
          Comprometidos con tu salud donde más lo necesitas.
        </p>
      </div>

    </div>
  </div>
</section>

  <!-- CTA Final -->
  <section id="agendar" class="page-section" style="background: linear-gradient(135deg, var(--color-light-blue) 0%, #63b3ed 100%);">
    <div class="container mx-auto px-6 text-center py-20 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">No pospongas tu salud. Agenda tu cita hoy mismo.</h2>
      <p class="text-xl text-white opacity-90 mb-10 max-w-3xl mx-auto">Con un solo clic o llamada, tu bienestar es nuestra prioridad.</p>
      <a href="https://form.jotform.com/251164313355046" class="inline-block px-12 py-5 text-xl font-medium bg-white rounded-lg hover:bg-blue-50 transition duration-300 shadow-lg premium-border" style="color: var(--color-dark-blue);">Agendar ahora</a>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contacto" class="text-white py-16" style="background-color: var(--color-dark-blue);">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="fade-in">
          <img src="https://oshe.com.do/wp-content/uploads/2025/04/LOGO-BLANCO.png" alt="Logo IARsono" class="h-20 mx-auto md:mx-0 mb-4">
          <p class="text-gray-400">Tecnología avanzada en tu hogar.</p>
        </div>
        <div class="fade-in">
          <h3 class="text-lg font-semibold mb-6">Navegación</h3>
          <nav class="flex flex-col space-y-3">
            <a href="#inicio" class="text-gray-400 hover:text-white">Inicio</a>
            <a href="#servicios" class="text-gray-400 hover:text-white">Servicios</a>
            <a href="#galeria" class="text-gray-400 hover:text-white">Galería</a>
            <a href="#nosotros" class="text-gray-400 hover:text-white">Nosotros</a>
            <a href="https://form.jotform.com/251164313355046" class="text-gray-400 hover:text-white">Agenda tu cita</a>
            <a href="https://form.jotform.com/251176604826055" class="text-gray-400 hover:text-white">IARSONO plus</a>
          </nav>
        </div>
        <div class="fade-in">
          <h3 class="text-lg font-semibold mb-6">Contacto</h3>
          <p class="flex items-center"><i class="fas fa-phone mr-3"></i><a href="tel:+18098151226" class="text-gray-400 hover:text-white">809 815 1226</a></p>
          <p class="flex items-center"><i class="fab fa-whatsapp mr-3"></i><a href="https://wa.me/18098151226" class="text-gray-400 hover:text-white">WhatsApp</a></p>
          <p class="flex items-center"><i class="fas fa-envelope mr-3"></i><a href="mailto:info@iarsono.do" class="text-gray-400 hover:text-white">info@iarsono.do</a></p>
          <div class="mt-8">
            <h4 class="text-sm font-medium mb-4">Síguenos</h4>
            <div class="flex space-x-4">
              <a href="https://www.facebook.com/SongrafiasIarsono" target="_blank" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/sonografias_adomicilio" target="_blank" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500 text-sm fade-in">
        <p>&copy; 2023 IARsono. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

  <!-- Floating Social Icons + WhatsApp -->
  <div class="social-float">
    <!-- 1) Texto de WhatsApp -->
    <span class="whatsapp-tooltip">¿Necesitas asistencia?</span>
    <!-- 2) Icono WhatsApp -->
    <a href="https://wa.me/18098151226" target="_blank" class="social-icon whatsapp-icon" aria-label="WhatsApp">
      <i class="fab fa-whatsapp text-xl"></i>
    </a>
    <!-- 3) Icono Instagram -->
    <a href="https://www.instagram.com/sonografias_adomicilio" target="_blank" class="social-icon instagram-icon">
      <i class="fab fa-instagram text-xl"></i>
    </a>
    <!-- 4) Icono Facebook -->
    <a href="https://www.facebook.com/SongrafiasIarsono" target="_blank" class="social-icon facebook-icon">
      <i class="fab fa-facebook-f text-xl"></i>
    </a>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Smooth scroll
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
        });
      });
      // Fade-in animations
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) entry.target.classList.add('appear');
        });
      }, { threshold: 0.1 });
      document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
    });
  </script>

</body>
</html>
