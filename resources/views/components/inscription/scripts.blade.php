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