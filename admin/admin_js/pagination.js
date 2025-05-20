document.addEventListener('DOMContentLoaded', function() {
    // Configuration
    const rowsPerPage = 10;
    let currentPage = 1;

    // DOM elements
    const table = document.getElementById('data-table');
    const rows = Array.from(table.querySelectorAll('tbody tr'));
    const totalRows = rows.length;
    const totalPages = Math.ceil(totalRows / rowsPerPage);
    
    const paginationInfo = document.getElementById('pagination-info');
    const pageNumbersContainer = document.getElementById('page-numbers');
    const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');

    // Initialize pagination
    function initializePagination() {
        // Hide all rows initially
        rows.forEach(row => row.style.display = 'none');
        
        // Show rows for current page
        updateTableForCurrentPage();
        updatePaginationControls();
    }

    function updateTableForCurrentPage() {
        const startIndex = (currentPage - 1) * rowsPerPage;
        const endIndex = Math.min(startIndex + rowsPerPage, totalRows);
        
        // Hide all rows
        rows.forEach(row => row.style.display = 'none');
        
        // Show rows for current page
        for (let i = startIndex; i < endIndex; i++) {
            if (rows[i]) {
                rows[i].style.display = '';
            }
        }
        
        // Update pagination info
        paginationInfo.textContent = `Showing ${startIndex + 1} to ${endIndex} of ${totalRows} entries`;
    }

    function updatePaginationControls() {
        // Clear existing page numbers
        pageNumbersContainer.innerHTML = '';
        
        // Previous button state
        prevButton.disabled = currentPage === 1;
        
        // Next button state
        nextButton.disabled = currentPage === totalPages;
        
        // Always show first page button
        addPageButton(1);
        
        // Show ellipsis if current page is far from start
        if (currentPage > 3) {
            addEllipsis();
        }
        
        // Show current page and neighbors
        const startPage = Math.max(2, currentPage - 1);
        const endPage = Math.min(totalPages - 1, currentPage + 1);
        
        for (let i = startPage; i <= endPage; i++) {
            addPageButton(i);
        }
        
        // Show ellipsis if current page is far from end
        if (currentPage < totalPages - 2) {
            addEllipsis();
        }
        
        // Show last page button if there are multiple pages
        if (totalPages > 1) {
            addPageButton(totalPages);
        }
    }

    function addPageButton(page) {
        const button = document.createElement('button');
        button.className = 'pagination-button' + (page === currentPage ? ' active' : '');
        button.textContent = page;
        button.onclick = () => goToPage(page);
        pageNumbersContainer.appendChild(button);
    }

    function addEllipsis() {
        const span = document.createElement('span');
        span.className = 'pagination-ellipsis';
        span.textContent = '...';
        pageNumbersContainer.appendChild(span);
    }

    function goToPage(page) {
        if (page < 1 || page > totalPages || page === currentPage) return;
        
        currentPage = page;
        updateTableForCurrentPage();
        updatePaginationControls();
        
        // Scroll to top of table
        table.scrollIntoView({ behavior: 'smooth' });
    }

    // Event listeners
    prevButton.addEventListener('click', () => goToPage(currentPage - 1));
    nextButton.addEventListener('click', () => goToPage(currentPage + 1));

    // Initialize pagination
    initializePagination();
});


// const canvas = document.getElementById('confetti-canvas');
// const ctx = canvas.getContext('2d');

// let confetti = [];
// let animationFrameId = null;
// let gravity = 0.5;
// let wind = 0;

// canvas.width = window.innerWidth;
// canvas.height = window.innerHeight;

// window.addEventListener('resize', () => {
//   canvas.width = window.innerWidth;
//   canvas.height = window.innerHeight;
// });

// function ConfettiParticle() {
//   this.x = Math.random() * canvas.width;
//   this.y = Math.random() * -canvas.height;
//   this.size = Math.random() * 8 + 4;
//   this.speedY = Math.random() * 3 + 2;
//   this.speedX = Math.random() * 2 - 1;
//   this.opacity = 1;
//   this.color = `hsl(${Math.random() * 360}, 100%, 50%)`;
//   this.angle = Math.random() * Math.PI * 2;
//   this.spin = Math.random() * 0.1 - 0.05;

//   this.update = function () {
//     this.y += this.speedY + gravity;
//     this.x += this.speedX + wind;
//     this.angle += this.spin;

//     // fade slowly if off screen
//     if (this.y > canvas.height + 20) this.opacity -= 0.02;
//   };

//   this.draw = function () {
//     ctx.save();
//     ctx.globalAlpha = this.opacity;
//     ctx.translate(this.x, this.y);
//     ctx.rotate(this.angle);
//     ctx.fillStyle = this.color;
//     ctx.fillRect(-this.size / 2, -this.size / 2, this.size, this.size);
//     ctx.restore();
//   };
// }

// function generateConfetti(count = 5) {
//   for (let i = 0; i < count; i++) {
//     confetti.push(new ConfettiParticle());
//   }
// }

// function animateConfetti() {
//   ctx.clearRect(0, 0, canvas.width, canvas.height);
//   confetti.forEach(p => {
//     p.update();
//     p.draw();
//   });

//   // Remove faded particles
//   confetti = confetti.filter(p => p.opacity > 0);

//   if (confetti.length > 0 || generateMore) {
//     animationFrameId = requestAnimationFrame(animateConfetti);
//   }
// }

// let generateMore = true;

// window.onload = () => {
//   // Start generating confetti particles
//   const generator = setInterval(() => {
//     if (generateMore) generateConfetti(10);
//   }, 100);

//   // Stop generating after 3 seconds
//   setTimeout(() => {
//     clearInterval(generator);
//     generateMore = false;
//   }, 2000);

//   animateConfetti();
// };
