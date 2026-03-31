document.addEventListener('DOMContentLoaded', () => {
    const countdownEl = document.getElementById('countdown');
    const enterButton = document.getElementById('enterSite');
    const targetUrl = '/home';
    let seconds = 5;
    let redirected = false;

    const goToSite = () => {
        if (redirected) {
            return;
        }

        redirected = true;
        window.location.href = targetUrl;
    };

    const timer = window.setInterval(() => {
        seconds -= 1;

        if (countdownEl) {
            countdownEl.textContent = String(Math.max(seconds, 0));
        }

        if (seconds <= 0) {
            window.clearInterval(timer);
            goToSite();
        }
    }, 1000);

    if (enterButton) {
        enterButton.addEventListener('click', () => {
            window.clearInterval(timer);
        });
    }

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' || event.key === ' ') {
            window.clearInterval(timer);
            goToSite();
        }
    });
});
