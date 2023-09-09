document.addEventListener("DOMContentLoaded", function () {
    const generateBtn = document.getElementById("generate-btn");
    const randomizeBtn = document.getElementById("randomize-btn");
    const resetBtn = document.getElementById("reset-btn");
    const nameInput = document.getElementById("name");
    const customOptionsInput = document.getElementById("custom-options");
    const historyList = document.getElementById("history-list");
    const copyIcon = document.querySelector("#copy-icon i.fa-copy");
    const generatedUsernameInput = document.getElementById("generated-username");

    copyIcon.addEventListener("click", function (event) {
        event.preventDefault(); // Evitar la recarga de la página al hacer clic en el ícono

        // Seleccionar el texto dentro del campo de nombre generado
        generatedUsernameInput.select();
        generatedUsernameInput.setSelectionRange(0, 99999); // Para dispositivos móviles

        try {
            // Copiar el texto al portapapeles
            document.execCommand("copy");

            // Cambiar el color del ícono de copia al hacer clic
            copyIcon.style.color = "green";
        } catch (err) {
            console.error("No se pudo copiar el texto: ", err);
        } finally {
            // Deseleccionar el texto
            generatedUsernameInput.setSelectionRange(0, 0);
        }
    });

    generateBtn.addEventListener("click", function () {
        const name = nameInput.value.trim();
        if (name) {
            const customOptions = customOptionsInput.value.trim();
            const randomUsername = generateRandomUsername(name, customOptions);
            generatedUsernameInput.value = randomUsername;

            // Agregar el nombre generado al historial
            addToHistory(randomUsername);
        } else {
            alert("Por favor, ingrese un nombre válido.");
        }
    });

    randomizeBtn.addEventListener("click", function () {
        // Genera un nombre de usuario aleatorio más realista usando Faker.js
        const randomUsername = faker.name.findName(); // Utiliza directamente la función de Faker.js
        generatedUsernameInput.value = randomUsername;

        // Agregar el nombre generado al historial
        addToHistory(randomUsername);
    });

    resetBtn.addEventListener("click", function () {
        nameInput.value = "";
        generatedUsernameInput.value = "";
    });

    function generateRandomUsername(name, customOptions) {
        // Lógica para generar un nombre de usuario aleatorio con opciones de personalización
        // Puedes personalizar esto según tus necesidades
        const randomNumber = Math.floor(Math.random() * 1000);
        const username = (name + customOptions + randomNumber).toLowerCase();
        return username;
    }

    function addToHistory(username) {
        // Agregar el nombre generado al historial
        const listItem = document.createElement("li");
        listItem.textContent = username;
        historyList.appendChild(listItem);
    }

    
});
