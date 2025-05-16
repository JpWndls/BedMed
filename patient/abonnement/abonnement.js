document.addEventListener('DOMContentLoaded', function () {
    const plans = document.querySelectorAll('.plan');
    const gratuitPlan = document.querySelector('.plan.gratuit');
    let selectedPlan = null;

    // Création de la popup de confirmation (structure correcte)
    const overlay = document.createElement('div');
    overlay.className = 'confirm-overlay';
    overlay.innerHTML = `
        <div class="confirm-box">
            <p>Confirmez-vous l'annulation ?<br><strong>Vous serez automatiquement réattribué au forfait gratuit.</strong></p>
            <div class="confirm-actions">
                <button class="btn btn-danger" id="confirm-yes">Oui</button>
                <button class="btn btn-secondary" id="confirm-no">Non</button>
            </div>
        </div>
    `;
    overlay.style.display = 'none';
    document.body.appendChild(overlay);

    function showConfirm(callback) {
        overlay.style.display = 'flex';
        document.getElementById('confirm-yes').onclick = () => {
            overlay.style.display = 'none';
            callback(true);
        };
        document.getElementById('confirm-no').onclick = () => {
            overlay.style.display = 'none';
            callback(false);
        };
    }

    function setSelected(plan) {
        plans.forEach(p => {
            p.style.border = 'none';
            const btn = p.querySelector('.select-btn');
            btn.textContent = 'Sélectionner';
            btn.disabled = false;
            btn.classList.remove('cancel', 'disabled');
        });

        selectedPlan = plan;
        plan.style.border = '3px solid #28a745';
        const btn = plan.querySelector('.select-btn');

        if (plan.classList.contains('gratuit')) {
            btn.textContent = 'Annuler';
            btn.disabled = true;
            btn.classList.add('disabled');
            localStorage.setItem('selectedPlan', 'gratuit');
        } else {
            btn.textContent = 'Annuler';
            btn.classList.add('cancel');
            localStorage.setItem('selectedPlan', plan.classList[1]); // e.g., basique, cinema, etc.
        }
    }

    // Chargement du plan sauvegardé
    const savedPlanClass = localStorage.getItem('selectedPlan');
    const savedPlan = savedPlanClass ? document.querySelector(`.plan.${savedPlanClass}`) : null;
    setSelected(savedPlan || gratuitPlan);

    plans.forEach(plan => {
        const button = plan.querySelector('.select-btn');
        button.addEventListener('click', () => {
            if (plan !== selectedPlan) {
                setSelected(plan);
            } else if (!plan.classList.contains('gratuit')) {
                showConfirm(confirmed => {
                    if (confirmed) {
                        setSelected(gratuitPlan);
                    }
                });
            }
        });
    });
});