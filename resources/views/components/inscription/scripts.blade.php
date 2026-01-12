<link rel="stylesheet" href="{{asset('assets/css/form-animations.css')}}">
<script src="{{asset('assets/js/inscriptions.js')}}"></script>

<script>
    function openPricingModal() {
        document.getElementById('pricingModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    
    function closePricingModal() {
        document.getElementById('pricingModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
    
    document.getElementById('pricingModal').addEventListener('click', function(e) {
        if (e.target === this) closePricingModal();
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closePricingModal();
    });

    function toggleAccommodation() {
        const inscriptionType = document.querySelector('input[name="inscription_type"]:checked');
        const accommodationSection = document.getElementById('accommodation-section');
        const arrivalDate = document.getElementById('arrival_date');
        const departureDate = document.getElementById('departure_date');
        
        if (inscriptionType && inscriptionType.value === 'hebergement') {
            accommodationSection.style.display = 'block';
            arrivalDate.disabled = false;
            departureDate.disabled = false;
        } else {
            accommodationSection.style.display = 'none';
            arrivalDate.disabled = true;
            departureDate.disabled = true;
            arrivalDate.value = '';
            departureDate.value = '';
        }
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        toggleAccommodation();
    });
</script>

<style>
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(12deg); }
    }
    .group:hover .group-hover\:rotate-12 {
        animation: rotate 0.3s ease-in-out;
    }
</style>