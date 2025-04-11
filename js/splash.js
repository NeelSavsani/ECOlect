const text = "ECOLECT";
        const speed = 100; // Typing speed in milliseconds
        const pauseBetweenLoops = 500; // Pause before restarting
        let index = 0;
        let isDeleting = false;
        const typewriterElement = document.querySelector('.typewriter');

        function typeWriter() {
            if (!isDeleting) {
                typewriterElement.textContent = text.substring(0, index++);
            } else {
                typewriterElement.textContent = text.substring(0, index--);
            }

            if (index > text.length) {
                isDeleting = true;
                setTimeout(typeWriter, speed * 2); // Pause before deleting
            } else if (index < 0) {
                isDeleting = false;
                setTimeout(typeWriter, pauseBetweenLoops);
            } else {
                setTimeout(typeWriter, speed);
            }
        }

        // Start the typewriter effect
        typeWriter();

        let countdown = 5; // Time in seconds

        function updateTimer() {
            if (countdown > 0) {
                countdown--;
                setTimeout(updateTimer, 500); // Update timer every second
            } else {
                window.location.href = "login.php"; // Redirect to another page
            }
        }

        // Start the timer
        setTimeout(updateTimer, 500);