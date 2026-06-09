const pages = [
    {
        kicker: "Faqat sen uchun",
        text: "Salom ❤️\nBugun senga bir nechta savollarim bor...",
        answers: [{ label: "Boshlash 🚀", type: "primary" }],
    },
    {
        kicker: "1-savol",
        text: "Bizning birinchi suhbatimiz esingdami? 😊",
        answers: [
            { label: "Ha 😄", type: "primary" },
            { label: "Albatta ❤️", type: "secondary" },
        ],
    },
    {
        kicker: "2-savol",
        text: "Men bilan yana uchrashasanmi?",
        answers: [
            { label: "Ha ❤️", type: "primary" },
            { label: "Yo'q 😅", type: "no" },
        ],
    },
    {
        kicker: "3-savol",
        text: "Meni sog'inasanmi?",
        answers: [
            { label: "Ha, juda ❤️", type: "primary" },
            { label: "Yo'q 😅", type: "no" },
        ],
    },
    {
        kicker: "4-savol",
        text: "Men sen uchun muhimmanmi?",
        answers: [
            { label: "Juda muhim ❤️", type: "primary" },
            { label: "Yo'q 😅", type: "no" },
        ],
    },
    {
        kicker: "5-savol",
        text: "Menga jahling chiqsa ham tashlab ketmaysanmi?",
        answers: [
            { label: "Tashlab ketmayman ❤️", type: "primary" },
            { label: "Yo'q 😅", type: "no" },
        ],
    },
    {
        kicker: "6-savol",
        text: "Hayotingdagi eng yaxshi dasturchimanmi? 😂",
        answers: [
            { label: "Ha, top 1 😄", type: "primary" },
            { label: "Yo'q 😅", type: "no" },
        ],
    },
    {
        kicker: "Eng muhim savol",
        text: "Mening sevgilim bo'lasanmi? ❤️",
        answers: [
            { label: "Ha ❤️", type: "yes-final" },
            { label: "Yo'q 😅", type: "no" },
        ],
    },
    {
        kicker: "Mana shu javob kerak edi",
        text: "Sen hayotimdagi eng chiroyli tasodifsan ❤️\nHar kuni sen bilan gaplashish - kunimdagi eng yaxshi qism 😊",
        answers: [{ label: "Yana boshidan 💫", type: "restart" }],
        final: true,
    },
];

const card = document.querySelector(".gift-card");
const questionText = document.getElementById("questionText");
const answerZone = document.getElementById("answerZone");
const kicker = document.getElementById("kicker");
const stepLabel = document.getElementById("stepLabel");
const progressFill = document.getElementById("progressFill");
const finalImage = document.getElementById("finalImage");
const musicBtn = document.getElementById("musicBtn");
const musicIcon = document.getElementById("musicIcon");
const canvas = document.getElementById("heartCanvas");
const ctx = canvas.getContext("2d");

let pageIndex = 0;
let typingTimer = null;
let audioContext = null;
let musicTimer = null;
let musicOn = false;
let hearts = [];

function renderPage(index) {
    pageIndex = index;
    const page = pages[pageIndex];

    clearTimeout(typingTimer);
    card.classList.toggle("is-final", Boolean(page.final));
    finalImage.setAttribute("aria-hidden", page.final ? "false" : "true");
    kicker.textContent = page.kicker;
    answerZone.innerHTML = "";
    questionText.textContent = "";
    stepLabel.textContent = `${Math.min(pageIndex + 1, pages.length)} / ${pages.length}`;
    progressFill.style.width = `${((pageIndex + 1) / pages.length) * 100}%`;

    typeText(page.text, () => renderAnswers(page.answers));
}

function typeText(text, done) {
    let i = 0;
    const speed = 34;

    function tick() {
        questionText.textContent = text.slice(0, i);
        i += 1;

        if (i <= text.length) {
            typingTimer = setTimeout(tick, text[i - 2] === "\n" ? 250 : speed);
            return;
        }

        done();
    }

    tick();
}

function renderAnswers(answers) {
    answers.forEach((answer) => {
        const button = document.createElement("button");
        button.type = "button";
        button.className = "answer-btn";
        button.textContent = answer.label;

        if (answer.type === "secondary") {
            button.classList.add("secondary");
        }

        if (answer.type === "no") {
            button.classList.add("no-btn");
            wireRunawayButton(button);
        } else if (answer.type === "yes-final") {
            button.addEventListener("click", () => {
                startMusic();
                burstConfetti();
                renderPage(pageIndex + 1);
            });
        } else if (answer.type === "restart") {
            button.classList.add("secondary");
            button.addEventListener("click", () => renderPage(0));
        } else {
            button.addEventListener("click", () => {
                startMusic();
                makePopHeart(button);
                renderPage(pageIndex + 1);
            });
        }

        answerZone.appendChild(button);
    });
}

function wireRunawayButton(button) {
    const run = (event) => {
        event.preventDefault();
        button.classList.add("is-running");

        const padding = 18;
        const maxX = Math.max(padding, window.innerWidth - button.offsetWidth - padding);
        const maxY = Math.max(padding, window.innerHeight - button.offsetHeight - padding);
        const x = padding + Math.random() * (maxX - padding);
        const y = padding + Math.random() * (maxY - padding);

        button.style.left = `${x}px`;
        button.style.top = `${y}px`;
        button.style.transform = `rotate(${Math.random() * 18 - 9}deg)`;
        makePopHeart(button);
    };

    button.addEventListener("mouseenter", run);
    button.addEventListener("click", run);
    button.addEventListener("touchstart", run, { passive: false });
}

function makePopHeart(source) {
    const rect = source.getBoundingClientRect();
    const heart = document.createElement("span");
    heart.className = "pop-heart";
    heart.textContent = "❤️";
    heart.style.left = `${rect.left + rect.width / 2}px`;
    heart.style.top = `${rect.top + rect.height / 2}px`;
    heart.style.setProperty("--x", `${Math.random() * 140 - 70}px`);
    heart.style.setProperty("--y", `${-90 - Math.random() * 90}px`);
    document.body.appendChild(heart);
    setTimeout(() => heart.remove(), 950);
}

function burstConfetti() {
    const colors = ["#ff5f8c", "#ffd38a", "#8ce7d7", "#ff8a72", "#ffffff"];

    for (let i = 0; i < 70; i += 1) {
        const piece = document.createElement("span");
        piece.className = "confetti";
        piece.style.left = `${Math.random() * 100}vw`;
        piece.style.top = `${-10 - Math.random() * 18}px`;
        piece.style.background = colors[i % colors.length];
        piece.style.animationDelay = `${Math.random() * 520}ms`;
        document.body.appendChild(piece);
        setTimeout(() => piece.remove(), 1900);
    }
}

function resizeCanvas() {
    const scale = window.devicePixelRatio || 1;
    canvas.width = Math.floor(window.innerWidth * scale);
    canvas.height = Math.floor(window.innerHeight * scale);
    canvas.style.width = `${window.innerWidth}px`;
    canvas.style.height = `${window.innerHeight}px`;
    ctx.setTransform(scale, 0, 0, scale, 0, 0);
}

function seedHearts() {
    hearts = Array.from({ length: 34 }, () => ({
        x: Math.random() * window.innerWidth,
        y: Math.random() * window.innerHeight,
        size: 10 + Math.random() * 18,
        speed: 0.35 + Math.random() * 0.8,
        drift: Math.random() * 0.8 - 0.4,
        opacity: 0.22 + Math.random() * 0.48,
    }));
}

function drawHeart(x, y, size, opacity) {
    ctx.save();
    ctx.translate(x, y);
    ctx.rotate(-0.18);
    ctx.scale(size / 26, size / 26);
    ctx.beginPath();
    ctx.moveTo(0, 8);
    ctx.bezierCurveTo(-18, -8, -10, -24, 0, -14);
    ctx.bezierCurveTo(10, -24, 18, -8, 0, 8);
    ctx.fillStyle = `rgba(255, 146, 176, ${opacity})`;
    ctx.fill();
    ctx.restore();
}

function animateHearts() {
    ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);

    hearts.forEach((heart) => {
        drawHeart(heart.x, heart.y, heart.size, heart.opacity);
        heart.y += heart.speed;
        heart.x += heart.drift;

        if (heart.y > window.innerHeight + 40) {
            heart.y = -40;
            heart.x = Math.random() * window.innerWidth;
        }
    });

    requestAnimationFrame(animateHearts);
}

function startMusic() {
    if (musicOn) {
        return;
    }

    audioContext = audioContext || new (window.AudioContext || window.webkitAudioContext)();
    musicOn = true;
    musicIcon.textContent = "♫";
    playLoop();
}

function stopMusic() {
    musicOn = false;
    musicIcon.textContent = "♪";
    clearTimeout(musicTimer);
}

function playLoop() {
    if (!musicOn) {
        return;
    }

    const now = audioContext.currentTime;
    const notes = [261.63, 329.63, 392.0, 523.25, 392.0, 329.63];

    notes.forEach((frequency, index) => {
        const oscillator = audioContext.createOscillator();
        const gain = audioContext.createGain();
        oscillator.type = "sine";
        oscillator.frequency.value = frequency;
        gain.gain.setValueAtTime(0.0001, now + index * 0.34);
        gain.gain.exponentialRampToValueAtTime(0.055, now + index * 0.34 + 0.04);
        gain.gain.exponentialRampToValueAtTime(0.0001, now + index * 0.34 + 0.3);
        oscillator.connect(gain);
        gain.connect(audioContext.destination);
        oscillator.start(now + index * 0.34);
        oscillator.stop(now + index * 0.34 + 0.34);
    });

    musicTimer = setTimeout(playLoop, 2450);
}

musicBtn.addEventListener("click", () => {
    if (musicOn) {
        stopMusic();
    } else {
        startMusic();
    }
});

window.addEventListener("resize", () => {
    resizeCanvas();
    seedHearts();
});

resizeCanvas();
seedHearts();
animateHearts();
renderPage(0);
