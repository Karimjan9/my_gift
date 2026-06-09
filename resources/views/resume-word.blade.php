<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Karim Resume</title>
    <style>
        @page {
            margin: 18mm 16mm;
        }

        body {
            color: #111a35;
            font-family: Arial, sans-serif;
            font-size: 11pt;
            line-height: 1.45;
        }

        table.layout {
            border-collapse: collapse;
            width: 100%;
        }

        td.sidebar {
            background: #f3f7fc;
            border-right: 1px solid #c8d3e2;
            padding: 18px;
            vertical-align: top;
            width: 32%;
        }

        td.content {
            padding: 18px 0 18px 24px;
            vertical-align: top;
            width: 68%;
        }

        h1 {
            color: #111a35;
            font-size: 30pt;
            margin: 0 0 6px;
            text-align: center;
        }

        .role {
            color: #0b57c8;
            font-size: 12pt;
            font-weight: bold;
            margin: 0 0 16px;
            text-align: center;
        }

        .avatar {
            background: #dce9ff;
            border: 1px solid #cfd9e8;
            border-radius: 90px;
            color: #062e77;
            font-size: 52pt;
            height: 120px;
            line-height: 120px;
            margin: 0 auto 14px;
            text-align: center;
            width: 120px;
        }

        .divider {
            border-bottom: 2px solid #0b57c8;
            margin: 14px 0;
        }

        .contact p,
        .info p {
            margin: 0 0 8px;
        }

        h2 {
            border-bottom: 1px solid #c8d3e2;
            color: #111a35;
            font-size: 15pt;
            margin: 0 0 10px;
            padding-bottom: 4px;
        }

        h3 {
            color: #0b57c8;
            font-size: 12pt;
            margin: 0 0 8px;
        }

        .section {
            margin-bottom: 18px;
        }

        .side-section {
            margin-top: 18px;
        }

        .chips {
            margin-bottom: 10px;
        }

        .chip {
            border: 1px solid #ccd8e8;
            color: #073c91;
            display: inline-block;
            font-size: 9pt;
            margin: 0 4px 5px 0;
            padding: 3px 7px;
        }

        ul {
            margin: 0;
            padding-left: 18px;
        }

        li {
            margin-bottom: 5px;
        }

        .project {
            margin-bottom: 8px;
        }

        .num {
            color: #0b57c8;
            font-weight: bold;
        }

        strong {
            color: #111a35;
        }
    </style>
</head>
<body>
    <table class="layout">
        <tr>
            <td class="sidebar">
                <div class="avatar">K</div>
                <h1>Karim</h1>
                <p class="role">Fullstack Web Developer / Laravel Developer</p>
                <div class="divider"></div>

                <div class="contact">
                    <p><strong>Email:</strong><br>karimjonmirzayev199@gmail.com</p>
                    <p><strong>Telefon:</strong><br>+998 91 310 32 98</p>
                    <p><strong>Manzil:</strong><br>Бухара, Узбекистан</p>
                    <p><strong>GitHub:</strong><br>github.com/Karimjan9</p>
                </div>

                <div class="side-section">
                    <h2>Личная информация</h2>
                    <div class="info">
                        <p><strong>Дата рождения:</strong> 1999 г.</p>
                        <p><strong>Место рождения:</strong> Бухара, Узбекистан</p>
                        <p><strong>Город:</strong> Бухара, Узбекистан</p>
                    </div>
                </div>

                <div class="side-section">
                    <h2>Навыки</h2>
                    <p><strong>Backend</strong></p>
                    <div class="chips">
                        <span class="chip">PHP</span>
                        <span class="chip">Laravel</span>
                        <span class="chip">REST API</span>
                        <span class="chip">MySQL</span>
                        <span class="chip">MariaDB</span>
                        <span class="chip">SQL Server</span>
                    </div>

                    <p><strong>Frontend</strong></p>
                    <div class="chips">
                        <span class="chip">Vue.js</span>
                        <span class="chip">JavaScript</span>
                        <span class="chip">HTML</span>
                        <span class="chip">CSS</span>
                        <span class="chip">Bootstrap</span>
                        <span class="chip">Tailwind CSS</span>
                        <span class="chip">Blade</span>
                    </div>

                    <p><strong>DevOps & Server</strong></p>
                    <div class="chips">
                        <span class="chip">Linux</span>
                        <span class="chip">VPS</span>
                        <span class="chip">Nginx</span>
                        <span class="chip">SSL</span>
                        <span class="chip">Git</span>
                        <span class="chip">Composer</span>
                        <span class="chip">npm</span>
                        <span class="chip">Docker базово</span>
                    </div>
                </div>

                <div class="side-section">
                    <h2>Языки</h2>
                    <ul>
                        <li>Узбекский - родной</li>
                        <li>Русский - рабочий уровень</li>
                        <li>Английский - базовый / технический</li>
                    </ul>
                </div>
            </td>

            <td class="content">
                <div class="section">
                    <h2>О себе</h2>
                    <p>
                        Fullstack Web Developer / Laravel Developer с опытом разработки современных веб-приложений.
                        Создаю образовательные платформы, CRM-системы, marketplace-проекты, административные панели,
                        сайты и API-интеграции. Работаю с Laravel, PHP, Vue.js, MySQL, Linux, Nginx, VPS.
                        Умею работать как с backend, так и с frontend, нацелен на качество,
                        производительность и масштабируемость проектов.
                    </p>
                </div>

                <div class="section">
                    <h2>Опыт работы</h2>
                    <h3>Fullstack Web Developer</h3>
                    <p><strong>Опыт в программировании:</strong> 5 лет &nbsp; | &nbsp; <strong>Коммерческий опыт:</strong> 3 года</p>
                    <ul>
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
                </div>

                <div class="section">
                    <h2>Проекты</h2>
                    <p class="project"><span class="num">1.</span> <strong>Образовательная платформа</strong> - онлайн-курсы, тесты, прогресс, оплата.</p>
                    <p class="project"><span class="num">2.</span> <strong>CRM-система</strong> - управление клиентами, сделками, задачами, отчетами.</p>
                    <p class="project"><span class="num">3.</span> <strong>Marketplace / доска объявлений</strong> - публикации, категории, поиск, фильтры.</p>
                    <p class="project"><span class="num">4.</span> <strong>AI Test Generator</strong> - генерация тестов и вопросов с помощью AI.</p>
                    <p class="project"><span class="num">5.</span> <strong>Сайты-визитки и лендинги</strong> - адаптивные сайты под ключ.</p>
                    <p class="project"><span class="num">6.</span> <strong>Telegram bot / Web App project</strong> - боты и веб-приложения на Laravel.</p>
                </div>

                <div class="section">
                    <h2>Образование</h2>
                    <p><strong>Высшее образование</strong><br>Направление: информационные технологии / программирование</p>
                </div>

                <div class="section">
                    <h2>Цель</h2>
                    <p>
                        Ищу работу или проекты в сфере веб-разработки с использованием Laravel / Vue.js.
                        Интересуют проекты по созданию CRM, образовательных платформ, marketplace-сервисов,
                        API-интеграций и настройке серверов.
                    </p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
