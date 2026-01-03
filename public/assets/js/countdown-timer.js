/**
 * Countdown Timer Module
 * Manages countdown to March 26th with automatic year calculation
 */
class CountdownTimer {
    constructor() {
        this.endDate = this.getNextMarch26();
        this.interval = null;
        this.init();
    }

    /**
     * Calculate next March 26th date
     * @returns {Date} Target date for countdown
     */
    getNextMarch26() {
        const now = new Date();
        const year = now.getFullYear();
        let target = new Date(year, 2, 26, 0, 0, 0, 0);
        
        if (now > target) {
            target = new Date(year + 1, 2, 26, 0, 0, 0, 0);
        }
        
        return target;
    }

    /**
     * Update DOM element with formatted value
     * @param {string} id - Element ID
     * @param {number} value - Value to display
     * @param {number} pad - Padding length
     */
    updateElement(id, value, pad = 2) {
        const element = document.getElementById(id);
        if (element) {
            element.textContent = String(value).padStart(pad, '0');
        }
    }

    /**
     * Calculate and display time remaining
     */
    updateCountdown() {
        const timeDiff = this.endDate - new Date();
        
        if (timeDiff > 0) {
            const time = this.calculateTimeUnits(timeDiff);
            this.displayTime(time);
        } else {
            this.showEventStarted();
        }
    }

    /**
     * Convert milliseconds to time units
     * @param {number} ms - Milliseconds
     * @returns {Object} Time units object
     */
    calculateTimeUnits(ms) {
        const msPerDay = 1000 * 60 * 60 * 24;
        const msPerHour = 1000 * 60 * 60;
        const msPerMinute = 1000 * 60;
        
        return {
            days: Math.floor(ms / msPerDay),
            hours: Math.floor((ms % msPerDay) / msPerHour),
            minutes: Math.floor((ms % msPerHour) / msPerMinute),
            seconds: Math.floor((ms % msPerMinute) / 1000)
        };
    }

    /**
     * Display calculated time values
     * @param {Object} time - Time units object
     */
    displayTime(time) {
        this.updateElement('days', time.days, 3);
        this.updateElement('hours', time.hours);
        this.updateElement('minutes', time.minutes);
        this.updateElement('seconds', time.seconds);
    }

    /**
     * Display event started message
     */
    showEventStarted() {
        const countdownEl = document.getElementById('countdown');
        if (countdownEl) {
            countdownEl.innerHTML = `
                <div class='col-span-4 text-center'>
                    <p class='text-2xl lg:text-4xl font-bold text-yellow-300'>
                        L'événement a commencé !
                    </p>
                </div>
            `;
        }
        this.stop();
    }

    /**
     * Start countdown timer
     */
    start() {
        if (this.interval) return;
        
        this.endDate = this.getNextMarch26();
        this.updateCountdown();
        this.interval = setInterval(() => this.updateCountdown(), 1000);
    }

    /**
     * Stop countdown timer
     */
    stop() {
        if (this.interval) {
            clearInterval(this.interval);
            this.interval = null;
        }
    }

    /**
     * Initialize event listeners and start timer
     */
    init() {
        this.setupEventListeners();
        this.startWhenReady();
    }

    /**
     * Setup visibility and page lifecycle listeners
     */
    setupEventListeners() {
        document.addEventListener('visibilitychange', () => {
            document.hidden ? this.stop() : this.start();
        });
        
        window.addEventListener('pagehide', () => this.stop());
    }

    /**
     * Start timer when DOM is ready
     */
    startWhenReady() {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.start());
        } else {
            this.start();
        }
    }
}

new CountdownTimer();