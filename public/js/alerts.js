document.addEventListener("DOMContentLoaded", () => {
    const success = document.body.dataset.success;
    const error = document.body.dataset.error;
    const errors = document.body.dataset.errors;

    if (success) {
        alert("✅ " + success);
    }

    if (error) {
        alert("❌ " + error);
    }

    if (errors) {
        const errorList = JSON.parse(errors);
        alert("⚠️ Er zijn fouten opgetreden:\n\n" + errorList.join("\n"));
    }
});
