document.addEventListener("DOMContentLoaded", () => {
    initializeTransactionForm();
});

function initializeTransactionForm() {
    const amountInField = document.getElementById('amountIn');
    const amountOutField = document.getElementById('amountOut');
    const creationDateField = document.getElementById('creationDate');
    
    setCreationDate(creationDateField);
    handleMutuallyExclusiveFields(amountInField, amountOutField);
    setupFormSubmission();
}

function setCreationDate(dateField) {
    const today = new Date().toISOString().split('T')[0];
    dateField.value = today;
}

function handleMutuallyExclusiveFields(amountInField, amountOutField) {
    amountInField.addEventListener('input', () => toggleFieldAvailability(amountInField, amountOutField));
    amountOutField.addEventListener('input', () => toggleFieldAvailability(amountOutField, amountInField));
}

function toggleFieldAvailability(activeField, inactiveField) {
    inactiveField.disabled = activeField.value !== '';
}

function setupFormSubmission() {
    document.getElementById('transactionForm').addEventListener('submit', async (event) => {
        event.preventDefault();
        await submitTransactionForm();
    });
}

async function submitTransactionForm() {
    const form = document.getElementById('transactionForm');
    const formData = new FormData(form);
    
    try {
        const response = await fetch('processa_transacao.php', {
            method: 'POST',
            body: formData
        });
        const result = await response.json();
        showAlert(result.success, result.message);
        if (result.success) {
            resetForm(form);
        }
    } catch (error) {
        console.error('Erro ao processar a transação:', error);
        showAlert(false, 'Erro no servidor, tente novamente.');
    }
}

function showAlert(isSuccess, message) {
    const alertDiv = document.getElementById('transactionAlert');
    const alertType = isSuccess ? 'success' : 'danger';
    alertDiv.innerHTML = `
        <div class="alert alert-${alertType} alert-dismissible fade show" role="alert">
            <strong>${isSuccess ? 'Sucesso!' : 'Erro!'}</strong> ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
}

function resetForm(form) {
    form.reset();
    const creationDateField = document.getElementById('creationDate');
    setCreationDate(creationDateField);
}
