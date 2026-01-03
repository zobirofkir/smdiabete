<div class="min-h-screen bg-gradient-to-br from-sky-100 via-blue-50 to-cyan-100 flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-cyan-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-sky-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-4000"></div>
    </div>
    
    <div class="w-full container mx-auto bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-blue-200/50 overflow-hidden relative z-10">
        <div class="grid lg:grid-cols-2 gap-0">
            <!-- Left Side - Poster -->
            <div class="relative overflow-hidden group">
                <img src="{{ asset('assets/images/affiche/affiche-four.jpeg') }}" 
                     alt="Affiche" 
                     class="w-full h-full object-cover min-h-[500px] lg:min-h-[700px] transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-transparent to-black/30"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
            </div>
            
            <!-- Right Side - Counter -->
            <div class="flex flex-col justify-center items-center p-6 sm:p-8 lg:p-12 bg-gradient-to-br from-blue-50 via-sky-50 to-cyan-50 text-gray-800 relative">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100/50 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-cyan-100/50 rounded-full translate-y-12 -translate-x-12"></div>
                
                <div class="text-center mb-8 lg:mb-12 relative z-10">
                    <div class="inline-block p-1 bg-gradient-to-r from-blue-400 to-cyan-500 rounded-2xl mb-6">
                        <div class="bg-white px-6 py-2 rounded-xl">
                            <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">Événement Spécial</span>
                        </div>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 bg-gradient-to-r from-blue-600 via-cyan-600 to-sky-600 bg-clip-text text-transparent leading-tight">
                        Compte à rebours
                    </h2>
                    <p class="text-lg lg:text-xl text-gray-600 font-medium">Jusqu'au 26 Mars 2025</p>
                </div>
                
                <div id="countdown" class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 lg:gap-6 w-full max-w-lg relative z-10">
                    <div class="text-center transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-white/80 backdrop-blur-md rounded-2xl p-3 sm:p-4 lg:p-6 border border-blue-200 shadow-xl hover:bg-white/90 transition-all duration-300 hover:shadow-2xl">
                            <div id="days" class="text-xl sm:text-2xl lg:text-4xl font-bold mb-1 lg:mb-2 text-blue-600 transition-all duration-500">000</div>
                            <div class="text-xs lg:text-sm uppercase tracking-wider text-gray-600 font-semibold">Jours</div>
                        </div>
                    </div>
                    <div class="text-center transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-white/80 backdrop-blur-md rounded-2xl p-3 sm:p-4 lg:p-6 border border-blue-200 shadow-xl hover:bg-white/90 transition-all duration-300 hover:shadow-2xl">
                            <div id="hours" class="text-xl sm:text-2xl lg:text-4xl font-bold mb-1 lg:mb-2 text-cyan-600 transition-all duration-500">00</div>
                            <div class="text-xs lg:text-sm uppercase tracking-wider text-gray-600 font-semibold">Heures</div>
                        </div>
                    </div>
                    <div class="text-center transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-white/80 backdrop-blur-md rounded-2xl p-3 sm:p-4 lg:p-6 border border-blue-200 shadow-xl hover:bg-white/90 transition-all duration-300 hover:shadow-2xl">
                            <div id="minutes" class="text-xl sm:text-2xl lg:text-4xl font-bold mb-1 lg:mb-2 text-sky-600 transition-all duration-500">00</div>
                            <div class="text-xs lg:text-sm uppercase tracking-wider text-gray-600 font-semibold">Minutes</div>
                        </div>
                    </div>
                    <div class="text-center transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-white/80 backdrop-blur-md rounded-2xl p-3 sm:p-4 lg:p-6 border border-blue-200 shadow-xl hover:bg-white/90 transition-all duration-300 hover:shadow-2xl">
                            <div id="seconds" class="text-xl sm:text-2xl lg:text-4xl font-bold mb-1 lg:mb-2 text-indigo-600 transition-all duration-500">00</div>
                            <div class="text-xs lg:text-sm uppercase tracking-wider text-gray-600 font-semibold">Secondes</div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 lg:mt-12 text-center relative z-10">
                    <div class="inline-flex items-center space-x-3 bg-white/80 backdrop-blur-md rounded-full px-6 py-3 border border-blue-200 shadow-lg hover:bg-white/90 transition-all duration-300">
                        <div class="relative">
                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                            <div class="absolute inset-0 w-3 h-3 bg-green-500 rounded-full animate-ping opacity-75"></div>
                        </div>
                        <span class="text-sm font-semibold tracking-wide text-gray-700">Temps réel</span>
                    </div>
                </div>
                
                <!-- Progress bar -->
                <div class="mt-6 w-full max-w-lg relative z-10">
                    <div class="h-1 bg-blue-200 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full animate-pulse" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

#countdown > div {
    animation: float 3s ease-in-out infinite;
}

#countdown > div:nth-child(1) { animation-delay: 0s; }
#countdown > div:nth-child(2) { animation-delay: 0.5s; }
#countdown > div:nth-child(3) { animation-delay: 1s; }
#countdown > div:nth-child(4) { animation-delay: 1.5s; }

@media (max-width: 640px) {
    #countdown {
        gap: 0.75rem;
    }
}
</style>

<script>
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
</script>
