<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f4f7fb">

    <title>Karim Resume</title>

    <style>
        :root {
            --ink: #111a35;
            --muted: #536174;
            --blue: #0b57c8;
            --blue-dark: #073c91;
            --blue-soft: #eaf2ff;
            --line: #c8d3e2;
            --paper: #ffffff;
            --panel: #f3f7fc;
        }

        * {
            box-sizing: border-box;
        }

        html {
            background: #eef3f8;
            color: var(--ink);
            font-family: "Segoe UI", Arial, sans-serif;
            line-height: 1.55;
        }

        body {
            margin: 0;
            min-height: 100vh;
        }

        .page-actions {
            align-items: center;
            display: flex;
            gap: 12px;
            justify-content: center;
            padding: 24px 16px;
        }

        .pdf-button {
            align-items: center;
            background: var(--blue);
            border: 0;
            border-radius: 8px;
            box-shadow: 0 14px 28px rgba(11, 87, 200, 0.22);
            color: #ffffff;
            cursor: pointer;
            display: inline-flex;
            font-size: 15px;
            font-weight: 700;
            gap: 10px;
            min-height: 44px;
            padding: 0 18px;
            transition: transform 0.2s ease, background 0.2s ease, box-shadow 0.2s ease;
        }

        .pdf-button:hover {
            background: var(--blue-dark);
            box-shadow: 0 16px 34px rgba(11, 87, 200, 0.28);
            transform: translateY(-1px);
        }

        .pdf-button svg {
            height: 19px;
            width: 19px;
        }

        .pdf-button:disabled {
            cursor: wait;
            opacity: 0.72;
            transform: none;
        }

        .resume {
            background: var(--paper);
            box-shadow: 0 14px 38px rgba(17, 26, 53, 0.18);
            display: grid;
            grid-template-columns: 330px 1fr;
            margin: 0 auto 34px;
            max-width: 1120px;
            min-height: 1584px;
            overflow: hidden;
            width: min(1120px, calc(100% - 32px));
        }

        .sidebar {
            background: linear-gradient(180deg, #f8fbff 0%, var(--panel) 100%);
            border-right: 1px solid #edf2f7;
            padding: 48px 38px 42px;
        }

        .avatar {
            align-items: center;
            aspect-ratio: 1;
            background: radial-gradient(circle at 35% 25%, #f9fbff 0%, #dce9ff 62%, #cddbf2 100%);
            border: 2px solid #cfd9e8;
            border-radius: 50%;
            box-shadow: inset 0 0 0 10px #ffffff;
            color: #062e77;
            display: flex;
            font-size: 92px;
            font-weight: 800;
            justify-content: center;
            margin: 0 auto 20px;
            width: 190px;
        }

        .name-block {
            border-bottom: 2px solid var(--blue);
            margin-bottom: 26px;
            padding-bottom: 22px;
            text-align: center;
        }

        .name-block h1 {
            font-size: 56px;
            line-height: 1;
            margin: 0 0 10px;
        }

        .name-block p {
            color: var(--blue);
            font-size: 20px;
            font-weight: 750;
            line-height: 1.25;
            margin: 0;
        }

        .contact-list,
        .plain-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .contact-list {
            display: grid;
            gap: 14px;
            margin-bottom: 34px;
        }

        .contact-list li {
            align-items: center;
            display: grid;
            gap: 13px;
            grid-template-columns: 24px 1fr;
        }

        .contact-list li span:last-child {
            overflow-wrap: anywhere;
        }

        .icon {
            align-items: center;
            color: var(--blue);
            display: inline-flex;
            height: 24px;
            justify-content: center;
            width: 24px;
        }

        .icon svg {
            height: 22px;
            stroke-width: 2.1;
            width: 22px;
        }

        .side-section {
            margin-top: 34px;
        }

        .side-title,
        .section-title {
            align-items: center;
            display: grid;
            gap: 14px;
            grid-template-columns: auto 1fr;
            margin-bottom: 16px;
        }

        .side-title h2,
        .section-title h2 {
            font-size: 22px;
            letter-spacing: 0;
            line-height: 1.2;
            margin: 0;
            text-transform: uppercase;
        }

        .side-title::after,
        .section-title::after {
            background: var(--line);
            content: "";
            height: 1px;
            width: 100%;
        }

        .side-title {
            border-bottom: 2px solid var(--blue);
            display: flex;
            gap: 12px;
            padding-bottom: 8px;
        }

        .side-title::after {
            display: none;
        }

        .info-grid {
            display: grid;
            gap: 6px;
            font-size: 15px;
        }

        .info-grid p {
            margin: 0;
        }

        .info-grid strong {
            color: var(--ink);
        }

        .skill-group {
            margin-top: 12px;
        }

        .skill-group h3 {
            font-size: 15px;
            margin: 0 0 8px;
        }

        .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
        }

        .chip {
            background: #ffffff;
            border: 1px solid #ccd8e8;
            border-radius: 8px;
            color: #073c91;
            font-size: 12px;
            font-weight: 650;
            line-height: 1;
            padding: 8px 11px;
        }

        .plain-list {
            display: grid;
            gap: 9px;
            padding-left: 18px;
        }

        .plain-list li {
            list-style: disc;
        }

        .content {
            padding: 54px 40px 48px;
        }

        .section {
            margin-bottom: 34px;
        }

        .section:last-child {
            margin-bottom: 0;
        }

        .section-title .icon-badge {
            align-items: center;
            background: var(--blue);
            border-radius: 9px;
            color: #ffffff;
            display: inline-flex;
            height: 36px;
            justify-content: center;
            width: 36px;
        }

        .section-title .icon-badge svg {
            height: 21px;
            width: 21px;
        }

        .section-title h2 {
            min-width: max-content;
        }

        .lead {
            font-size: 17px;
            margin: 0;
        }

        .job-title {
            color: var(--blue);
            font-size: 20px;
            font-weight: 800;
            margin: 0 0 10px;
        }

        .meta-row {
            color: var(--ink);
            display: flex;
            flex-wrap: wrap;
            gap: 12px 18px;
            margin-bottom: 12px;
        }

        .meta-row span {
            align-items: center;
            display: inline-flex;
            gap: 8px;
        }

        .meta-row svg {
            color: var(--blue);
            height: 18px;
            width: 18px;
        }

        .dash-list {
            display: grid;
            gap: 6px;
            margin: 0;
            padding-left: 18px;
        }

        .dash-list li::marker {
            color: var(--blue);
        }

        .projects {
            display: grid;
            gap: 12px;
            margin: 0;
            padding: 0;
        }

        .project-item {
            align-items: start;
            display: grid;
            gap: 13px;
            grid-template-columns: 31px 1fr;
        }

        .project-number {
            align-items: center;
            border: 1.5px solid var(--blue);
            border-radius: 50%;
            color: var(--blue);
            display: inline-flex;
            font-size: 14px;
            font-weight: 800;
            height: 29px;
            justify-content: center;
            line-height: 1;
            width: 29px;
        }

        .project-item p {
            margin: 0;
        }

        .project-item strong,
        .education strong {
            color: #122042;
        }

        .education p,
        .goal p {
            margin: 0;
        }

        @media (max-width: 900px) {
            .resume {
                grid-template-columns: 1fr;
                min-height: auto;
            }

            .sidebar,
            .content {
                padding: 34px 24px;
            }

            .name-block h1 {
                font-size: 46px;
            }

            .avatar {
                width: 154px;
                font-size: 74px;
            }
        }

        @media print {
            @page {
                margin: 0;
                size: A4;
            }

            html,
            body {
                background: #ffffff;
            }

            .page-actions {
                display: none;
            }

            .resume {
                box-shadow: none;
                margin: 0;
                max-width: none;
                min-height: 297mm;
                width: 210mm;
            }

            .sidebar {
                padding: 13mm 8mm 11mm;
            }

            .content {
                padding: 14mm 10mm 11mm;
            }

            .name-block h1 {
                font-size: 40px;
            }

            .name-block p {
                font-size: 15px;
            }

            .avatar {
                font-size: 64px;
                width: 42mm;
            }

            .side-title h2,
            .section-title h2 {
                font-size: 15px;
            }

            .lead,
            body {
                font-size: 11px;
            }

            .job-title {
                font-size: 14px;
            }

            .section {
                margin-bottom: 6mm;
            }

            .chip {
                font-size: 9px;
                padding: 5px 7px;
            }

            .contact-list {
                gap: 8px;
                margin-bottom: 7mm;
            }

            .side-section {
                margin-top: 8mm;
            }

            .dash-list,
            .projects {
                gap: 3px;
            }

            .section-title .icon-badge {
                border-radius: 7px;
                height: 26px;
                width: 26px;
            }

            .section-title .icon-badge svg,
            .icon svg {
                height: 16px;
                width: 16px;
            }

            .project-number {
                font-size: 10px;
                height: 20px;
                width: 20px;
            }

            .project-item {
                gap: 8px;
                grid-template-columns: 22px 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="page-actions">
        <a class="pdf-button" href="{{ route('resume.word') }}" aria-label="Resume Word yuklab olish">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                <path d="M6 9V2h12v7"></path>
                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                <path d="M6 14h12v8H6z"></path>
            </svg>
            Word yuklab olish
        </a>
    </div>

    <main class="resume" id="resume">
        <aside class="sidebar">
            <div class="avatar" aria-hidden="true">K</div>

            <div class="name-block">
                <h1>Karim</h1>
                <p>Fullstack Web Developer / Laravel Developer</p>
            </div>

            <ul class="contact-list">
                <li>
                    <span class="icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 4h16v16H4z"></path><path d="m22 6-10 7L2 6"></path></svg>
                    </span>
                    <span>karimjonmirzayev199@gmail.com</span>
                </li>
                <li>
                    <span class="icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.91.33 1.8.63 2.65a2 2 0 0 1-.45 2.11L8.09 9.69a16 16 0 0 0 6.22 6.22l1.21-1.2a2 2 0 0 1 2.11-.45c.85.3 1.74.51 2.65.63A2 2 0 0 1 22 16.92z"></path></svg>
                    </span>
                    <span>+998 91 310 32 98</span>
                </li>
                <li>
                    <span class="icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </span>
                    <span>Бухара, Узбекистан</span>
                </li>
                <li>
                    <span class="icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20"></path><path d="M12 2a15.3 15.3 0 0 1 0 20"></path><path d="M12 2a15.3 15.3 0 0 0 0 20"></path></svg>
                    </span>
                    <span>github.com/Karimjan9</span>
                </li>
            </ul>

            <section class="side-section">
                <div class="side-title">
                    <span class="icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </span>
                    <h2>Личная информация</h2>
                </div>
                <div class="info-grid">
                    <p><strong>Дата рождения:</strong> 1999 г.</p>
                    <p><strong>Место рождения:</strong> Бухара, Узбекистан</p>
                    <p><strong>Город:</strong> Бухара, Узбекистан</p>
                    <p><strong>Направление:</strong> Laravel, Vue.js, CRM, образовательные платформы, marketplace-проекты</p>
                </div>
            </section>

            <section class="side-section">
                <div class="side-title">
                    <span class="icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="m8 17-5-5 5-5"></path><path d="m16 7 5 5-5 5"></path></svg>
                    </span>
                    <h2>Навыки</h2>
                </div>

                <div class="skill-group">
                    <h3>Backend</h3>
                    <div class="chips">
                        <span class="chip">PHP</span>
                        <span class="chip">Laravel</span>
                        <span class="chip">REST API</span>
                        <span class="chip">MySQL</span>
                        <span class="chip">MariaDB</span>
                        <span class="chip">SQL Server</span>
                    </div>
                </div>

                <div class="skill-group">
                    <h3>Frontend</h3>
                    <div class="chips">
                        <span class="chip">Vue.js</span>
                        <span class="chip">JavaScript</span>
                        <span class="chip">HTML</span>
                        <span class="chip">CSS</span>
                        <span class="chip">Bootstrap</span>
                        <span class="chip">Tailwind CSS</span>
                        <span class="chip">Blade</span>
                    </div>
                </div>

                <div class="skill-group">
                    <h3>DevOps & Server</h3>
                    <div class="chips">
                        <span class="chip">Linux</span>
                        <span class="chip">VPS</span>
                        <span class="chip">Nginx</span>
                        <span class="chip">SSL</span>
                        <span class="chip">Git</span>
                        <span class="chip">Composer</span>
                    </div>
                </div>

                <div class="skill-group">
                    <h3>Инструменты</h3>
                    <div class="chips">
                        <span class="chip">Git</span>
                        <span class="chip">Composer</span>
                        <span class="chip">npm</span>
                        <span class="chip">Docker (базово)</span>
                    </div>
                </div>
            </section>

            <section class="side-section">
                <div class="side-title">
                    <span class="icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20"></path><path d="M12 2a15.3 15.3 0 0 1 0 20"></path><path d="M12 2a15.3 15.3 0 0 0 0 20"></path></svg>
                    </span>
                    <h2>Языки</h2>
                </div>
                <ul class="plain-list">
                    <li>Узбекский - родной</li>
                    <li>Русский - рабочий уровень</li>
                    <li>Английский - базовый / технический</li>
                </ul>
            </section>
        </aside>

        <section class="content">
            <section class="section">
                <div class="section-title">
                    <span class="icon-badge" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </span>
                    <h2>О себе</h2>
                </div>
                <p class="lead">
                    Fullstack Web Developer / Laravel Developer с опытом разработки современных
                    веб-приложений. Создаю образовательные платформы, CRM-системы, marketplace-проекты,
                    административные панели, сайты и API-интеграции. Работаю с Laravel, PHP, Vue.js,
                    MySQL, Linux, Nginx, VPS. Умею работать как с backend, так и с frontend, нацелен
                    на качество, производительность и масштабируемость проектов.
                </p>
            </section>

            <section class="section">
                <div class="section-title">
                    <span class="icon-badge" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"></path><path d="M2 13h20"></path></svg>
                    </span>
                    <h2>Опыт работы</h2>
                </div>
                <h3 class="job-title">Fullstack Web Developer</h3>
                <div class="meta-row">
                    <span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4"></path><path d="M8 2v4"></path><path d="M3 10h18"></path></svg>
                        Опыт в программировании: 5 лет
                    </span>
                    <span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"></path></svg>
                        Коммерческий опыт: 3 года
                    </span>
                </div>
                <ul class="dash-list">
                    <li>Разработка backend-логики и модулей на Laravel (PHP).</li>
                    <li>Создание и настройка административных панелей.</li>
                    <li>Проектирование и реализация REST API.</li>
                    <li>Интеграция frontend на Vue.js, взаимодействие с API.</li>
                    <li>Работа с базами данных: MySQL, MariaDB, SQL Server.</li>
                    <li>Реализация ролевой модели, прав доступа и безопасности.</li>
                    <li>Поиск и устранение ошибок, оптимизация производительности.</li>
                    <li>Развертывание проектов на VPS-серверах.</li>
                    <li>Настройка Nginx, SSL-сертификатов, доменов и окружений.</li>
                    <li>Использование Git, Composer, npm в рабочем процессе.</li>
                    <li>Интеграции с внешними сервисами и API.</li>
                </ul>
            </section>

            <section class="section">
                <div class="section-title">
                    <span class="icon-badge" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M3 7h18v13H3z"></path><path d="M8 7V4h8v3"></path></svg>
                    </span>
                    <h2>Проекты</h2>
                </div>
                <div class="projects">
                    <div class="project-item">
                        <span class="project-number">1</span>
                        <p><strong>Образовательная платформа</strong> - онлайн-курсы, тесты, прогресс, оплата.</p>
                    </div>
                    <div class="project-item">
                        <span class="project-number">2</span>
                        <p><strong>CRM-система</strong> - управление клиентами, сделками, задачами, отчетами.</p>
                    </div>
                    <div class="project-item">
                        <span class="project-number">3</span>
                        <p><strong>Marketplace / доска объявлений</strong> - публикации, категории, поиск, фильтры.</p>
                    </div>
                    <div class="project-item">
                        <span class="project-number">4</span>
                        <p><strong>AI Test Generator</strong> - генерация тестов и вопросов с помощью AI.</p>
                    </div>
                    <div class="project-item">
                        <span class="project-number">5</span>
                        <p><strong>Сайты-визитки и лендинги</strong> - адаптивные сайты под ключ.</p>
                    </div>
                    <div class="project-item">
                        <span class="project-number">6</span>
                        <p><strong>Telegram bot / Web App project</strong> - боты и веб-приложения на Laravel.</p>
                    </div>
                </div>
            </section>

            <section class="section education">
                <div class="section-title">
                    <span class="icon-badge" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="m22 10-10-5-10 5 10 5 10-5Z"></path><path d="M6 12v5c3 2 9 2 12 0v-5"></path></svg>
                    </span>
                    <h2>Образование</h2>
                </div>
                <p><strong>Высшее образование</strong></p>
                <p>Направление: информационные технологии / программирование</p>
            </section>

            <section class="section goal">
                <div class="section-title">
                    <span class="icon-badge" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                    </span>
                    <h2>Цель</h2>
                </div>
                <p class="lead">
                    Ищу работу или проекты в сфере веб-разработки с использованием Laravel / Vue.js.
                    Интересуют CRM-системы, образовательные платформы, marketplace-сервисы, API-интеграции
                    и настройка серверов.
                </p>
            </section>
        </section>
    </main>
</body>
</html>
