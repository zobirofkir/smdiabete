document.addEventListener('DOMContentLoaded', function() {
    const dossierButtons = document.querySelectorAll('.dossier-btn');
    const dossiers = document.querySelectorAll('.dossier');
    
    dossierButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetDossier = this.getAttribute('data-dossier');
            
            dossierButtons.forEach(btn => {
                if (btn.getAttribute('data-dossier') === targetDossier) {
                    btn.classList.remove('bg-white/80', 'bg-white/90', 'text-slate-700');
                    btn.classList.add('bg-gradient-to-br', 'from-sky-500', 'via-sky-600', 'to-sky-700', 'text-white');
                } else {
                    btn.classList.remove('bg-gradient-to-br', 'from-sky-500', 'via-sky-600', 'to-sky-700', 'text-white');
                    btn.classList.add('bg-white/80', 'text-slate-700');
                    if (btn.closest('.sm\\:hidden')) {
                        btn.classList.remove('bg-white/80');
                        btn.classList.add('bg-white/90');
                    }
                }
            });
            
            dossiers.forEach(dossier => {
                if (dossier.id === `dossier${targetDossier}`) {
                    dossier.classList.remove('hidden');
                } else {
                    dossier.classList.add('hidden');
                }
            });
        });
    });
});
