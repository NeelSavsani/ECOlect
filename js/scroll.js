const btn = document.getElementById("scrollBottom");

        function checkScroll() {
            const scrollTop = window.scrollY;
            const windowHeight = window.innerHeight;
            const docHeight = document.documentElement.scrollHeight;

            if (scrollTop > 40 && scrollTop + windowHeight < docHeight - 10) {
                btn.style.display = "block"; // Show button if not at the bottom
            } else {
                btn.style.display = "none"; // Hide button when at the bottom
            }
        }

        window.addEventListener("scroll", checkScroll);

        btn.addEventListener("click", () => {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: "smooth"
            });

            btn.style.display = "none"; // Hide button after clicking
        });