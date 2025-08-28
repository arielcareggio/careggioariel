<?php
// Personal CV Website
// Ariel Antonio Careggio
// 2025

//Datos del CV
$cv_data = [
    'personal' => [
        'name' => 'Ariel Antonio Careggio',
        'title' => 'Desarrollador Backend / Full Stack',
        'email' => 'ariel.careggio@gmail.com',
        'location' => 'Córdoba, Argentina',
        'linkedin' => 'https://linkedin.com/in/arielcareggio',
        'github' => 'https://github.com/arielcareggio',
        'website' => 'https://arielcareggio.com.ar',
        'photo' => 'assets/img/profile.png',
        'cv' => 'ARIEL_ANTONIO_CAREGGIO.pdf'
    ],
    'summary' => 'Desarrollador Backend / Full Stack, con casi <strong><u>20 años</u></strong> de experiencia, especializado en el diseño, desarrollo y mantenimiento de sistemas web, APIs y arquitecturas escalables.',

    'sub_summary' => 'En estos casi 20 años de experiencia, he trabajado tanto en relación de dependencia como independientemente, liderando múltiples proyectos como fundador y programador principal en <a href="https://agroruralsistemas.com.ar" target="_blank">AgroRuralSistemas.com.ar</a>, <a href="https://gestiondelcot.com.ar" target="_blank">GestionDelCot.com.ar</a> y <a href="https://grupodrado.com.ar" target="_blank">GrupoDrado.com.ar</a>, utilizando una amplia variedad de tecnologías y lenguajes de programación.<br><br>
                    Apasionado por la calidad del código, eficiencia en soluciones backend y mentoría de desarrolladores junior, con un enfoque en buenas prácticas y aprendizaje continuo para mantenerme actualizado en nuevas tecnologías',

    'experience' => [
        [
            'title' => 'DESARROLLADOR BACKEND',
            'company' => 'Alternativas Inteligentes S.A',
            'period' => 'Julio 2022 - Abril 2025',
            'description' => '<p><strong>Responsabilidades:</strong></p>
                            <ul>
                                <li>Diseño, programación, mantenimiento y optimización de APIs REST.</li>
                                <li>Creación y mantenimiento de microservicios en PHP/Yii2.</li>
                                <li>Mentoría y soporte técnico a colegas junior, facilitando la adopción de buenas prácticas en desarrollo backend.</li>
                                <li>Lideré despliegues de software en producción, asegurando un 99.9% de uptime.</li>
                                <li>Monitoreo y seguimiento de pipelines de CI/CD en GitLab para asegurar despliegues exitosos.</li>
                            </ul>
                            
                            <p><strong>Información adicional:</strong></p>
                            <ul>
                                <li>Yii2 (con control de acceso RBAC, Identity, Access Control Filters, autenticación con JWT).</li>
                                <li>Angular (colaboración puntual en frontend).</li>
                                <li>Metodologías ágiles Scrum, utilizando Trello en la etapa inicial y posteriormente Jira.</li>
                            </ul>',
            'technologies' => ['PHP','Yii2','Laravel','Node.js','MySQL','Angular','React','Docker','Scrum','Trello','Jira']

        ],
        [
            'title' => 'FUNDADOR Y PRINCIPAL PROGRAMADOR FULLSTACK',
            'company' => '<a href="https://gestiondelcot.com.ar" target="_blank">gestiondelcot.com.ar</a> (2024)<br><a href="https://agroruralsistemas.com.ar" target="_blank">agroruralsistemas.com.ar</a> (2010)<br><a href="https://grupodrado.com.ar" target="_blank">grupodrado.com.ar</a> (2019)',
            'period' => '',
            'description' => '<p><strong>Responsabilidades:</strong></p>
                            <ul>
                                <li>Fundador y líder técnico de múltiples proyectos con más de 15 años de experiencia en desarrollo de software.</li>
                                <li>Diseño y desarrollo de APIs REST y sistemas fullstack, incluyendo integración con Web Services SOAP (AFIP, ARBA) y APIs de terceros (MercadoPago).</li>
                                <li>Gestión completa de proyectos: análisis, arquitectura, programación y despliegue.</li>
                            </ul>',
            'technologies' => ['PHP','Yii2','Laravel','MySQL','PostgreSQL','JavaScript','jQuery','Template Smarty','Bootstrap','HTML','CSS','Web Services SOAP y REST','POO','Git','Java Escritorio']
        ],
        [
            'title' => 'DESARROLLADOR BACKEND',
            'company' => 'Municipalidad de Córdoba',
            'period' => '2019 - 2021',
            'description' => '<p><strong>Responsabilidades:</strong></p>
                            <ul>
                                <li>Desarrollo y mantenimiento del Sistema Financiero y Tributario, gestionando transacciones, reportes y control de datos críticos.</li>
                                <li>Participación en diseño de arquitectura backend, optimización de consultas y performance de bases de datos.</li>
                                <li>Integración con servicios internos y externos para automatización de procesos administrativos y de pagos.</li>
                            </ul>',
            'technologies' => ['PHP','Yii2','MySQL','PostgreSQL','POO','APIs REST','Git']
        ],
        [
            'title' => 'FREELANCE DEVELOPER',
            'company' => '',
            'period' => '2019 - 2022',
            'description' => '<p><strong>Responsabilidades:</strong></p>
                            <ul>
                                <li>Desarrollo de APIs REST y backends personalizados para más de 20 proyectos en diversos sectores.</li>
                                <li>Diseño de arquitecturas backend escalables, optimización de bases de datos y manejo eficiente de consultas SQL.</li>
                                <li>Integración con Web Services SOAP y REST (AFIP, ARBA, MercadoPago), asegurando interoperabilidad con sistemas externos.</li>
                                <li>Aplicación de buenas prácticas de programación: POO, control de versiones, diseño de plantillas y responsive frontend con Bootstrap.</li>
                            </ul>',
            'technologies' => ['PHP','Yii2','MySQL','PostgreSQL','POO','APIs REST','Git','Java Desktop','Smarty','Bootstrap','Web Services SOAP/REST']
        ],
        [
            'title' => 'SVC INFORMATION DEVELOPMENT I',
            'company' => 'Hewlett-Packard',
            'period' => '2012 - 2015',
            'description' => '<p><strong>Responsabilidades:</strong></p>
                            <ul>
                                <li>Mantenimiento y soporte de aplicaciones para Nextel Argentina y Perú.</li>
                                <li>Resolución de problemas de usuarios y recopilación de datos de bases de datos.</li>
                                <li>Tecnologías: SQL, herramientas internas de HP, soporte de aplicaciones corporativas.</li>
                            </ul>',
            'technologies' => ['SQL','Herramientas internas de HP','Soporte de aplicaciones corporativas']
        ],
        [
            'title' => 'AYUDANTE DE LABORATORIO DE INFORMÁTICA',
            'company' => 'Universidad Blas Pascal',
            'period' => '2009',
            'description' => '<p><strong>Responsabilidades:</strong></p>
                            <ul>
                                <li>Asistencia a estudiantes en prácticas de programación y manejo de software académico.</li>
                            </ul>',
            'technologies' => []
        ],
    ],
    'education' => [
        [
            'degree' => 'Ingeniería informática',
            'institution' => 'Universidad Blas Pascal',
            'period' => '2005 - 2010',
            'description' => ''
        ],
        [
            'degree' => 'Oracle 10g Database Administration (Module I & II)',
            'institution' => 'UTN / Cisco',
            'period' => '2010 - 2011',
            'description' => ''
        ],
        [
            'degree' => 'Otros cursos de actualización en desarrollo de software y tecnologías web, con aprendizaje continuo en nuevas herramientas y frameworks.',
            'institution' => '',
            'period' => '2009 - 2025',
            'description' => ''
        ]
    ],
    'skills' => [
        'Backend' => ['PHP (15 años)', 'Yii2 (5 años)', 'Laravel (2 años)', 'Node.js (2 años, con Express.js / Nest.js)', 'Python (básico)'],
        'Frontend' => ['HTML5', 'CSS3', 'JavaScript / TypeScript (5 años)', 'Bootstrap (5 años)', 'Angular (básico)', 'React (básico)', 'Tailwind (básico)'],
        'Bases de datos' => ['MySQL (14 años)', 'PostgreSQL (12 años)'],
        'DevOps & Herramientas' => ['Git / GitHub (6 años)', 'Scrum [Jira / Trello] (5 años)', 'Monitoreo de pipelines CI/CD en GitLab (seguimiento y control de despliegues)', 'Despliegue y mantenimiento de APIs en producción (99.9% uptime)', 'Optimización de consultas y rendimiento de bases de datos'],
        'Integraciones externas' => ['MercadoPago (REST) · AFIP / ARBA (SOAP/REST)', 'Web Services ARCA/ARBA (WSFEV1 / WSCPE / WS_SR_PADRON_A4/10/100 / COT)'],
        'Otros' => ['APIs REST', 'POO', 'MVC', 'Smarty Templates', 'Java Desktop'],
        'Soft Skills' => ['Liderazgo de equipos', 'Comunicación efectiva', 'Resolución de problemas', 'Trabajo en equipo']
    ],
    'additional_skills' => [
        'technical_professional' => [
            [
                'name' => 'Optimización de performance y consultas SQL',
                'detail' => 'MySQL y PostgreSQL',
                'icon' => 'bi-database'
            ],
            [
                'name' => 'Diseño y consumo de APIs REST y SOAP',
                'detail' => '',
                'icon' => 'bi-diagram-3'
            ],
            [
                'name' => 'Control de versiones y colaboración con Git',
                'detail' => '',
                'icon' => 'bi-git'
            ],
            [
                'name' => 'Arquitectura de software y buenas prácticas de desarrollo',
                'detail' => '',
                'icon' => 'bi-building'
            ],
            [
                'name' => 'Seguridad en aplicaciones web y APIs',
                'detail' => 'Autenticación JWT, OAuth2, manejo seguro de sesiones',
                'icon' => 'bi-shield-check'
            ],
            [
                'name' => 'Documentación técnica clara y mantenible',
                'detail' => '',
                'icon' => 'bi-file-text'
            ]
        ],
        'other_skills' => [
            [
                'name' => 'Trabajo autónomo y autogestión',
                'detail' => 'Experiencia liderando proyectos propios y freelance',
                'icon' => 'bi-briefcase'
            ],
            [
                'name' => 'Gestión de proyectos y planificación técnica',
                'detail' => '',
                'icon' => 'bi-kanban'
            ],
            [
                'name' => 'Aprendizaje continuo y adaptación rápida a nuevas herramientas',
                'detail' => 'Nuevas herramientas y frameworks',
                'icon' => 'bi-book'
            ],
            [
                'name' => 'Colaboración en equipos',
                'detail' => '',
                'icon' => 'bi-people'
            ]
        ]
    ],
    'languages' => [
        ['name' => 'Español', 'level' => 'Nativo'],
    ]
];
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $cv_data['personal']['name']; ?> - CV Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">
    
    <meta name="description" content="CV Personal de <?php echo $cv_data['personal']['name']; ?> - <?php echo $cv_data['personal']['title']; ?>">
    <meta name="keywords" content="desarrollador, full stack, PHP, JavaScript, CV, curriculum">
    <meta name="author" content="<?php echo $cv_data['personal']['name']; ?>">
    
    <meta property="og:title" content="<?php echo $cv_data['personal']['name']; ?> - CV Personal">
    <meta property="og:description" content="<?php echo $cv_data['summary']; ?>">
    <meta property="og:type" content="website">
</head>
<body>
    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#home">
                <i class="bi bi-person-circle me-2"></i>
                <?php echo explode(' ', $cv_data['personal']['name'])[0]; ?>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre Mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experiencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Habilidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Educación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-light btn-sm ms-2" id="themeToggle">
                            <i class="bi bi-sun-fill" id="themeIcon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Presentación -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100 mt-responsive">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="mb-3">
                            <span class="badge bg-primary fs-6 px-3 py-2 pulse">Disponible para nuevos proyectos</span>
                        </div>
                        <h1 class="display-4 fw-bold mb-3 animate-fade-in">
                            <?php echo $cv_data['personal']['name']; ?>
                        </h1>
                        <h2 class="h3 text-white mb-4 animate-fade-in-delay-1">
                            <?php echo $cv_data['personal']['title']; ?>
                        </h2>
                        <p class="lead mb-4 animate-fade-in-delay-2">
                            <?php echo $cv_data['summary']; ?>
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start animate-fade-in-delay-3">
                            <a href="#contact" class="btn btn-primary btn-lg">
                                <i class="bi bi-envelope me-2"></i>Contactar
                            </a>
                            <a href="assets/cv/<?php echo $cv_data['personal']['cv']; ?>" 
                               class="btn btn-light btn-lg" target="_blank">
                                <i class="bi bi-download me-2"></i>Descargar CV
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="profile-image-container animate-fade-in-delay-2">
                        <img src="<?php echo $cv_data['personal']['photo']; ?>" 
                             alt="<?php echo $cv_data['personal']['name']; ?>" 
                             class="profile-image img-fluid rounded-circle shadow-lg"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Mí -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="section-title text-center mb-5">Sobre Mí</h2>
                    
                    <!-- Resumen -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-5">
                            <p class="lead text-center mb-0"><?php echo $cv_data['sub_summary']; ?></p>
                        </div>
                    </div>

                    <!-- Información de Contacto -->
                    <div class="row g-4">
                        <!-- Ubicación -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100 glass">
                                <div class="card-body text-center p-4">
                                    <div class="contact-icon mb-3">
                                        <i class="bi bi-geo-alt text-primary fs-1"></i>
                                    </div>
                                    <h5 class="card-title">Ubicación</h5>
                                    <p class="card-text text-muted"><?php echo $cv_data['personal']['location']; ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100 glass">
                                <div class="card-body text-center p-4">
                                    <div class="contact-icon mb-3">
                                        <i class="bi bi-envelope text-primary fs-1"></i>
                                    </div>
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">
                                        <a href="mailto:<?php echo $cv_data['personal']['email']; ?>" class="text-primary text-decoration-none">
                                            <?php echo $cv_data['personal']['email']; ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Mi LinkedIn -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100 glass">
                                <div class="card-body text-center p-4">
                                    <div class="contact-icon mb-3">
                                        <i class="bi bi-linkedin text-primary fs-1"></i>
                                    </div>
                                    <h5 class="card-title">LinkedIn</h5>
                                    <p class="card-text">
                                        <a href="<?php echo $cv_data['personal']['linkedin']; ?>" target="_blank" class="text-primary text-decoration-none">
                                            Ver Perfil Profesional
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Mi GitHub -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100 glass">
                                <div class="card-body text-center p-4">
                                    <div class="contact-icon mb-3">
                                        <i class="bi bi-github text-primary fs-1"></i>
                                    </div>
                                    <h5 class="card-title">GitHub</h5>
                                    <p class="card-text mb-2">
                                        <a href="<?php echo $cv_data['personal']['github']; ?>" target="_blank" class="text-primary text-decoration-none">
                                            Ver Repositorios
                                        </a>
                                    </p>
                                    <small class="text-muted">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Aunque mis proyectos más relevantes no se encuentran disponibles en GitHub como código abierto, dado que fueron desarrollados con fines comerciales. Algunos de los más destacados incluyen <a href="https://agroruralsistemas.com.ar" target="_blank">AgroRuralSistemas.com.ar</a>, <a href="https://gestiondelcot.com.ar" target="_blank">GestionDelCot.com.ar</a> y <a href="https://grupodrado.com.ar" target="_blank">GrupoDrado.com.ar</a>, entre otros.
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- Idiomas -->
                        <div class="col-lg-12">
                            <div class="card border-0 shadow-sm glass">
                                <div class="card-body text-center p-4">
                                    <div class="contact-icon mb-3">
                                        <i class="bi bi-translate text-primary fs-1"></i>
                                    </div>
                                    <h5 class="card-title mb-3">Idiomas</h5>
                                    <div class="d-flex justify-content-center flex-wrap gap-3">
                                        <?php foreach ($cv_data['languages'] as $language): ?>
                                        <div class="language-item">
                                            <span class="badge bg-primary fs-6 px-3 py-2">
                                                <?php echo $language['name']; ?>
                                            </span>
                                            <small class="d-block text-muted mt-1"><?php echo $language['level']; ?></small>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiencia Profesional -->
    <section id="experience" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Experiencia Profesional</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <?php foreach ($cv_data['experience'] as $index => $job): ?>
                    <div class="timeline-item mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4 class="card-title text-primary mb-1"><?php echo $job['title']; ?></h4>
                                        <h5 class="card-subtitle mb-2 mt-2 text-muted"><?php echo $job['company']; ?></h5>
                                        <p class="card-text"><?php echo $job['description']; ?></p>
                                    </div>
                                    <div class="col-md-4 text-md-end">
                                        <span class="badge bg-primary fs-6 mb-3"><?php echo $job['period']; ?></span>
                                        <div class="technologies">
                                            <?php foreach ($job['technologies'] as $tech): ?>
                                            <span class="badge bg-secondary me-1 mb-1"><?php echo $tech; ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Habilidades Técnicas -->
    <section id="skills" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Habilidades Técnicas</h2>
            <div class="row">
                <?php foreach ($cv_data['skills'] as $category => $skills): ?>
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-3">
                                <i class="bi bi-gear me-2"></i><?php echo $category; ?>
                            </h5>
                            <div class="skills-list">
                                <?php foreach ($skills as $skill): ?>
                                <span class="badge bg-primary me-2 mb-2"><?php echo $skill; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- Habilidades Adicionales -->
    <section id="additional-skills" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Habilidades Adicionales</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    
                    <!-- Habilidades Técnicas / Profesionales -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h4 class="card-title text-primary mb-3">
                                <i class="bi bi-tools me-2"></i>Habilidades Técnicas / Profesionales
                            </h4>
                            <div class="row">
                                <?php foreach ($cv_data['additional_skills']['technical_professional'] as $skill): ?>
                                <div class="col-md-6 mb-3">
                                    <div class="skill-item">
                                        <i class="bi <?php echo $skill['icon']; ?> text-primary me-2"></i>
                                        <strong><?php echo $skill['name']; ?></strong>
                                        <?php if (!empty($skill['detail'])): ?>
                                        <small class="d-block text-muted ms-4"><?php echo $skill['detail']; ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Otras Habilidades -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title text-primary mb-3">
                                <i class="bi bi-person-gear me-2"></i>Otras Habilidades
                            </h4>
                            <div class="row">
                                <?php foreach ($cv_data['additional_skills']['other_skills'] as $skill): ?>
                                <div class="col-md-6 mb-3">
                                    <div class="skill-item">
                                        <i class="bi <?php echo $skill['icon']; ?> text-primary me-2"></i>
                                        <strong><?php echo $skill['name']; ?></strong>
                                        <?php if (!empty($skill['detail'])): ?>
                                        <small class="d-block text-muted ms-4"><?php echo $skill['detail']; ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Datos academicos -->
    <section id="education" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">DATOS ACADÉMICOS Y CURSOS RELEVANTES</h2>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <?php foreach ($cv_data['education'] as $edu): ?>
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h5 class="card-title text-primary"><?php echo $edu['degree']; ?></h5>
                            <h5 class="card-subtitle mb-2 text-muted"><?php echo $edu['institution']; ?></h5>
                            <p class="text-muted mb-2"><?php echo $edu['period']; ?></p>
                            <p class="card-text"><?php echo $edu['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contact" class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title mb-5">¿Trabajamos Juntos?</h2>
                    <p class="lead mb-5">
                        Estoy disponible para nuevos proyectos y oportunidades laborales. 
                        ¡No dudes en contactarme!
                    </p>
                    
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="contact-item">
                                <i class="bi bi-envelope-fill fs-2 mb-3"></i>
                                <h5>Email</h5>
                                <a href="mailto:<?php echo $cv_data['personal']['email']; ?>" class="text-white">
                                    <?php echo $cv_data['personal']['email']; ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item">
                                <i class="bi bi-linkedin fs-2 mb-3"></i>
                                <h5>LinkedIn</h5>
                                <a href="<?php echo $cv_data['personal']['linkedin']; ?>" target="_blank" class="text-white">
                                    Ver Perfil
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item">
                                <i class="bi bi-github fs-2 mb-3"></i>
                                <h5>GitHub</h5>
                                <a href="<?php echo $cv_data['personal']['github']; ?>" target="_blank" class="text-white">
                                    Ver Perfil
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <a href="assets/cv/<?php echo $cv_data['personal']['cv']; ?>" 
                           class="btn btn-light btn-lg me-3" target="_blank">
                            <i class="bi bi-download me-2"></i>Descargar CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo $cv_data['personal']['name']; ?>. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="<?php echo $cv_data['personal']['linkedin']; ?>" class="text-white me-3" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="<?php echo $cv_data['personal']['github']; ?>" class="text-white me-3" target="_blank">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="mailto:<?php echo $cv_data['personal']['email']; ?>" class="text-white">
                            <i class="bi bi-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button class="scroll-to-top" id="scrollToTop" aria-label="Volver arriba">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
