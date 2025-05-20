
const canvas = document.getElementById('confetti-canvas');
const ctx = canvas.getContext('2d');

let confetti = [];
let animationFrameId = null;
let gravity = 0.5;
let wind = 0;

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener('resize', () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});

function ConfettiParticle() {
  this.x = Math.random() * canvas.width;
  this.y = Math.random() * -canvas.height;
  this.size = Math.random() * 8 + 4;
  this.speedY = Math.random() * 3 + 2;
  this.speedX = Math.random() * 2 - 1;
  this.opacity = 1;
  this.color = `hsl(${Math.random() * 360}, 100%, 50%)`;
  this.angle = Math.random() * Math.PI * 2;
  this.spin = Math.random() * 0.1 - 0.05;

  this.update = function () {
    this.y += this.speedY + gravity;
    this.x += this.speedX + wind;
    this.angle += this.spin;

    // fade slowly if off screen
    if (this.y > canvas.height + 20) this.opacity -= 0.02;
  };

  this.draw = function () {
    ctx.save();
    ctx.globalAlpha = this.opacity;
    ctx.translate(this.x, this.y);
    ctx.rotate(this.angle);
    ctx.fillStyle = this.color;
    ctx.fillRect(-this.size / 2, -this.size / 2, this.size, this.size);
    ctx.restore();
  };
}

function generateConfetti(count = 5) {
  for (let i = 0; i < count; i++) {
    confetti.push(new ConfettiParticle());
  }
}

function animateConfetti() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  confetti.forEach(p => {
    p.update();
    p.draw();
  });

  // Remove faded particles
  confetti = confetti.filter(p => p.opacity > 0);

  if (confetti.length > 0 || generateMore) {
    animationFrameId = requestAnimationFrame(animateConfetti);
  }
}

let generateMore = true;

window.onload = () => {
  // Start generating confetti particles
  const generator = setInterval(() => {
    if (generateMore) generateConfetti(10);
  }, 100);

  // Stop generating after 3 seconds
  setTimeout(() => {
    clearInterval(generator);
    generateMore = false;
  }, 2000);

  animateConfetti();
};
