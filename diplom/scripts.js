function openMenu() {
    const nav = document.querySelector('nav');
    nav.classList.toggle('open');
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("contactForm").addEventListener("submit", function (event) {
        event.preventDefault();
        var formData = new FormData(this);

        fetch('server.php?action=add_appointment', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Ваш запис успішно створений. Відповідаємо на протязі 20-30 хвилин. Працюємо з 10:00-20:00");
                    event.target.reset();
                } else {
                    alert("Помилка: " + data.error);
                }
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred while submitting the form.");
            });
    });
});
    
    document.addEventListener('DOMContentLoaded', function () {
        const packageType = document.getElementById('packageType');
        const serviceType = document.getElementById('serviceType');

        const serviceOptions = {
            children: [
                { value: 'Д:Профілактика', text: 'Профілактичні огляди - 1500₴' },
                { value: 'Д:Чистка зубів', text: 'Чистка зубів - 2500₴' },
                { value: 'Д:Лікування карієсу', text: 'Лікування карієсу - 2000₴' },
                { value: 'Д:Пломбування зубів', text: 'Пломбування зубів - 1800₴' },
                { value: 'Д:Герметизація фісур', text: 'Герметизація фісур - 1200₴' },
                { value: 'Д:Ортодонтична косультація', text: 'Ортодонтична косультація - 1000₴' }
            ],
            basic: [
                { value: 'З:Лікування карієсу', text: 'Лікування карієсу - 1200₴' },
                { value: 'З:Чистка зубів', text: 'Професійна чистка зубів - 1300₴' },
                { value: 'З:Фторування', text: 'Фторування зубів - 500₴' },
                { value: 'З:Вініри', text: 'Встановлення вінірів - 6500₴' },
                { value: 'З:Гінгівіт та пародонтит', text: 'Гінгівіт та пародонтит - 1500₴' },
                { value: 'З:Відбілювання', text: 'Естетичне відбілювання зубів - 3500₴' }
            ],
            family: [
                { value: 'С:Початковий огляд', text: 'Початковий огляд - 400₴' },
                { value: 'С:Профілактичні огляди', text: 'Профілактичні огляди - 1000₴' },
                { value: 'С:Ордонтична консультація', text: 'Ортодонтична консультація - 2000₴' },
                { value: 'С:Лікування гінгівіту', text: 'Лікування гінгівіту - 1200₴' },
                { value: 'С:Зубні пломби', text: 'Зубні пломби - 1200₴' },
                { value: 'С:Лікування чутливості', text: 'Лікування чутливості зубів -  1000₴' }
            ]
        };

        packageType.addEventListener('change', function() {
            const selectedPackage = packageType.value;
            updateServiceOptions(selectedPackage);
        });

        function updateServiceOptions(packageType) {
            while (serviceType.options.length > 1) {
                serviceType.remove(1);
            }

            if (serviceOptions[packageType]) {
                serviceOptions[packageType].forEach(option => {
                    const newOption = document.createElement('option');
                    newOption.value = option.value;
                    newOption.text = option.text;
                    serviceType.appendChild(newOption);
                });
            }
        }
    });

document.addEventListener('DOMContentLoaded', function() {
        let input = document.getElementById('appointmentDateTime');
        let today = new Date();

        let minDate = new Date(today.getFullYear(), today.getMonth(), today.getDate(), 10, 0, 0);
        let minDateISO = minDate.toISOString().slice(0, 16);
        input.setAttribute('min', minDateISO);

        let maxDate = new Date(today.getFullYear(), today.getMonth() + 1, today.getDate(), 20, 0, 0);
        let maxDateISO = maxDate.toISOString().slice(0, 16);
        input.setAttribute('max', maxDateISO);

        console.log('Min Date:', minDateISO);
        console.log('Max Date:', maxDateISO);
    });
        