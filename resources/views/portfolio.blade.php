@extends('layouts.app')

@section('content')
<header class="site-header">
    <nav class="nav shell" aria-label="Main navigation">
        <a class="wordmark" href="#top" aria-label="Amal Issellay, home">AI<span>.</span></a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu" aria-label="Open navigation"><span></span><span></span></button>
        <div class="nav-links" id="primary-menu">
            <a href="#about">About</a><a href="#skills">Skills</a><a href="#projects">Projects</a><a href="#experience">Experience</a><a href="#learning">Learning</a>
            <a class="nav-contact" href="#contact">Contact <span aria-hidden="true">↗</span></a>
        </div>
    </nav>
</header>

<main id="main">
    <section class="hero shell" id="top" aria-labelledby="hero-title">
        <div class="hero-copy">
            <p class="eyebrow"><span class="availability-dot"></span> Marrakech, Morocco <span class="eyebrow-divider">/</span> Open to remote opportunities</p>
            <h1 id="hero-title">Building the <em>logic</em><br>behind useful things.</h1>
            <p class="hero-role">Backend-focused Full Stack Developer <span>PHP &amp; Laravel&nbsp; | &nbsp;Exploring Cloud &amp; DevOps</span></p>
            <p class="hero-intro">I build practical web applications with Laravel, from database design and backend logic to the interfaces people use every day. Now growing my skills in cloud infrastructure and automation.</p>
            <div class="hero-actions"><a class="button button-primary" href="#projects">Explore my projects <span aria-hidden="true">↓</span></a><a class="text-link" href="https://github.com/amissell" target="_blank" rel="noopener noreferrer">View GitHub <span aria-hidden="true">↗</span></a></div>
            <p class="hero-note">Available for junior backend roles, internships, and cloud or DevOps opportunities.</p>
        </div>
        <div class="hero-art" aria-hidden="true">
            <div class="art-ring art-ring-one"></div><div class="art-ring art-ring-two"></div>
            <div class="art-label label-top">PHP / LARAVEL</div><div class="art-label label-bottom">MAKE IT RELIABLE</div>
            <div class="art-monogram">A<span>.</span></div><div class="art-cross">✳</div>
        </div>
        <a class="scroll-cue" href="#about"><span></span> Scroll to explore</a>
    </section>

    <section class="about section-light" id="about">
        <div class="shell about-grid">
            <x-section-heading eyebrow="01 / A LITTLE ABOUT ME" title="I like making complex work feel simple." />
            <div class="about-body"><p class="lead">I’m Amal, a PHP and Laravel developer trained at YouCode (UM6P) and currently completing an internship at Must Négoce in Marrakech.</p><p>I’ve designed and delivered internal business applications, taking ownership across system design, backend development, and the user interface. My work includes tools for training operations, invoicing, and fleet management.</p><p>I care about clean, maintainable code and applications people can rely on. I’m now extending that foundation toward backend engineering, cloud infrastructure, and DevOps.</p><div class="about-facts"><div><span>Based in</span><strong>Marrakech, Morocco</strong></div><div><span>Languages</span><strong>Arabic · English · French</strong></div><div><span>Direction</span><strong>Backend · Cloud · DevOps</strong></div></div></div>
        </div>
    </section>

    <section class="skills section-dark" id="skills">
        <div class="shell"><x-section-heading eyebrow="02 / THE TOOLKIT" title="Tools I work with." intro="Technologies and practices from my development work, alongside the areas I’m currently exploring." />
            <div class="skills-grid">
                <article class="skill-group"><span class="skill-index">01</span><h3>Backend</h3><p>PHP · Object-Oriented Programming · Laravel · SQL</p></article>
                <article class="skill-group"><span class="skill-index">02</span><h3>Frontend</h3><p>HTML5 · CSS3 · JavaScript · Blade · Tailwind CSS</p></article>
                <article class="skill-group"><span class="skill-index">03</span><h3>Data</h3><p>MySQL · PostgreSQL</p></article>
                <article class="skill-group"><span class="skill-index">04</span><h3>Tools &amp; workflow</h3><p>Git · GitHub · Docker · Bash · XAMPP · Agile · Scrum · Jira</p></article>
                <article class="skill-group"><span class="skill-index">05</span><h3>Design &amp; modeling</h3><p>UML · Merise · Figma · Canva</p></article>
                <article class="skill-group learning-skill"><span class="skill-index">06 / EXPLORING</span><h3>Cloud &amp; DevOps</h3><p>Linux · AWS · Terraform · CI/CD · Kubernetes</p><span class="learning-caption">Learning topics — no completed cloud projects listed yet.</span></article>
            </div>
        </div>
    </section>

    <section class="projects section-light" id="projects">
        <div class="shell"><x-section-heading eyebrow="03 / SELECTED WORK" title="Built to solve real work." intro="Applications and projects from my development experience. Project links are included only where a public repository is verified." />
            <div class="project-list">
                <article class="project-card project-featured"><div class="project-number">01</div><div class="project-content"><p class="project-type">INTERNAL BUSINESS APPLICATION</p><h3>Training Management Dashboard</h3><p>Tracks candidates, training sessions, and pending payments. Includes revenue and enrollment statistics with trend charts.</p><div class="tag-list"><span>Laravel</span><span>Blade</span><span>Tailwind CSS</span><span>Chart.js</span></div></div><div class="project-mark mark-dashboard" aria-hidden="true"><span>↗</span><i></i><i></i><i></i></div></article>
                <article class="project-card"><div class="project-number">02</div><div class="project-content"><p class="project-type">INTERNAL BUSINESS APPLICATION</p><h3>Must Négoce Invoices</h3><p>Invoicing system with automatic invoice generation and management for clients, products, sellers, and categories.</p><div class="tag-list"><span>PHP</span><span>Laravel</span></div></div><a class="project-link" href="https://github.com/amissell/must-negoce-invoices" target="_blank" rel="noopener noreferrer" aria-label="View Must Négoce Invoices repository">↗</a></article>
                <article class="project-card"><div class="project-number">03</div><div class="project-content"><p class="project-type">INTERNAL BUSINESS APPLICATION</p><h3>AutoGestion</h3><p>Fleet management application for vehicles, clients, rentals, and payments, with a live dashboard and available, rented, and maintenance status tracking.</p><div class="tag-list"><span>Laravel</span><span>Blade</span><span>Tailwind CSS</span></div></div><div class="project-mark mark-fleet" aria-hidden="true">↗</div></article>
                <article class="project-card"><div class="project-number">04</div><div class="project-content"><p class="project-type">ONLINE LEARNING PLATFORM</p><h3>Youdemy</h3><p>Educational platform for browsing courses, registering, and following lessons, with searchable course pages, account management, and multimedia content.</p><div class="tag-list"><span>HTML5</span><span>CSS3</span><span>JavaScript</span><span>Bootstrap</span></div></div><div class="project-mark mark-learning" aria-hidden="true"><span>learn</span><i>↗</i></div></article>
                <article class="project-card"><div class="project-number">05</div><div class="project-content"><p class="project-type">TEAM PROJECT · WEBSITE REDESIGN</p><h3>Supratour Website Redesign</h3><p>Redesigned the website with a focus on responsive design and user experience, including clearer navigation and online transport ticket booking.</p><div class="tag-list"><span>HTML5</span><span>CSS3</span><span>JavaScript</span><span>Bootstrap</span></div></div><div class="project-mark mark-travel" aria-hidden="true">S<span>→</span></div></article>
            </div>
            <p class="project-footnote">Project descriptions are based on my CV. Other public repositories, screenshots, and live demos have not been verified.</p>
        </div>
    </section>

    <section class="experience section-ice" id="experience">
        <div class="shell experience-grid"><x-section-heading eyebrow="04 / EXPERIENCE" title="Learning by building." />
            <div class="timeline">
                <article class="timeline-item"><div class="timeline-date">DEC 2025 — PRESENT</div><div><h3>Full Stack Developer Intern</h3><p class="timeline-org">Must Négoce <span>· Marrakech</span></p><p>Designed and developed internal management tools with Laravel and PHP, taking ownership of system design, backend development, and user interface. Work includes Training Management Dashboard, Must Négoce Invoices, and AutoGestion.</p></div></article>
                <article class="timeline-item"><div class="timeline-date">APR 2023 — FEB 2024</div><div><h3>Volunteer</h3><p class="timeline-org">YouthSpace <span>· Marrakech</span></p><p>Organized activities for young people, led workshops, managed events, and mentored participants to encourage engagement in collective projects.</p></div></article>
            </div>
        </div>
    </section>

    <section class="education section-light" id="education"><div class="shell"><x-section-heading eyebrow="05 / EDUCATION & CREDENTIALS" title="A foundation for what’s next." />
        <div class="education-grid"><div><h3>Education</h3><article class="edu-item"><span>2026 — PRESENT</span><strong>Computer Science</strong><p>University of the People <em>· In progress</em></p></article><article class="edu-item"><span>2024 — 2025</span><strong>Full Stack Development, First Year</strong><p>YouCode / UM6P</p></article><article class="edu-item"><span>2021 — 2022</span><strong>Baccalaureate level, Physical Sciences</strong><p>Lycée Abderrahmane, Marrakech</p></article></div>
        <div><h3>Certifications</h3><article class="edu-item"><span>2026</span><strong>Foundations of Project Management</strong><p>Google</p></article><article class="edu-item"><span>2026</span><strong>DevOps Essentials</strong><p>Coursera</p></article><article class="edu-item"><span>2026</span><strong>EF SET English Certificate · C1 Advanced</strong><p>EF SET</p></article><h3 class="language-title">Languages</h3><p class="languages">Arabic <b>Native</b> <i>·</i> English <b>C1 Advanced</b> <i>·</i> French <b>A1 Beginner</b></p></div></div>
    </div></section>

    <section class="learning section-dark" id="learning"><div class="shell learning-grid"><div><x-section-heading eyebrow="06 / WHAT’S NEXT" title="Building toward cloud &amp; DevOps." intro="I’m extending my backend foundation into infrastructure, automation, and reliable delivery." /></div><div class="learning-panel"><span class="learning-symbol" aria-hidden="true">↗</span><p class="project-type">CURRENT LEARNING DIRECTION</p><h3>From application logic to the systems around it.</h3><p>Linux, AWS, Terraform, CI/CD, and Kubernetes are areas I’m exploring. I don’t currently list a completed cloud or DevOps project.</p><div class="learning-topics"><span>Linux</span><span>AWS</span><span>Terraform</span><span>CI/CD</span><span>Kubernetes</span></div></div></div></section>

    <section class="contact section-light" id="contact"><div class="shell contact-inner"><p class="eyebrow">07 / LET’S CONNECT</p><h2>Have something<br>good to <em>build?</em></h2><p class="contact-copy">I’m open to remote opportunities, internships, and junior roles in backend development, cloud engineering, and DevOps.</p><a class="button button-primary contact-button" href="mailto:amalissellay01@gmail.com">Start a conversation <span aria-hidden="true">↗</span></a><div class="contact-details"><a href="mailto:amalissellay01@gmail.com">amalissellay01@gmail.com</a><a href="tel:+212651180913">+212 651 180 913</a><div class="social-links"><a href="https://github.com/amissell" target="_blank" rel="noopener noreferrer">GitHub ↗</a><a href="https://www.linkedin.com/in/amal-issellay-864827286/" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a></div></div></div></section>
</main>

<footer class="site-footer"><div class="shell footer-inner"><a class="wordmark" href="#top">AI<span>.</span></a><p>Designed &amp; built with care by Amal Issellay.</p><div class="footer-nav"><a href="#about">About</a><a href="#projects">Projects</a><a href="#contact">Contact</a></div><span class="copyright">© {{ date('Y') }} Amal Issellay</span></div></footer>
@endsection
