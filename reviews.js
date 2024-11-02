document.getElementById("reviewsForm").addEventListener("submit", function (event) {
    let formIsValid = true;

    // Очистка ошибок
    document.getElementById("nameError").textContent = "";
    document.getElementById("messageError").textContent = "";

    // Валидация имени
    const name = document.getElementById("name").value;
    if (!/^[a-zA-Zа-яА-ЯёЁ\s]+$/.test(name)) {
        document.getElementById("nameError").textContent = "   Имя должно содержать только буквы.";
        formIsValid = false;
    }

    // Валидация сообщения
    const message = document.getElementById("message").value;
    if (message.length < 10) {
        document.getElementById("messageError").textContent = "Сообщение должно содержать минимум 10 символов.";
        formIsValid = false;
    }

    // Если форма не прошла валидацию, отменить отправку
    if (!formIsValid) {
        event.preventDefault();
    }
});