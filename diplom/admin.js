$(document).ready(function () {
    loadNewAppointments();
    loadAllAppointments();
});

function loadNewAppointments() {
    $.get('server.php?action=get_new_appointments', function (data) {
        const appointments = JSON.parse(data);
        let html = '';
        appointments.forEach(appointment => {
            html += `
                <tr>
                    <td>${appointment.first_name}</td>
                    <td>${appointment.last_name}</td>
                    <td>${appointment.service_type}</td>
                    <td>${appointment.phone}</td>
                    <td>${appointment.comment}</td>
                    <td>${appointment.appointment_date || 'null'}</td>
                    <td>${appointment.status}</td>
                    <td>
                        <button class="btn btn-success" onclick="processAppointment(${appointment.id})">Обробити</button>
                        <button class="btn btn-primary" onclick="editAppointment(${appointment.id})">Редагувати</button>
                        <button class="btn btn-danger" onclick="deleteAppointment(${appointment.id})">Видалити</button>
                    </td>
                </tr>
            `;
        });
        $('#incomingList').html(html);
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Помилка завантаження нових записів: ", textStatus, errorThrown);
    });
}

function loadAllAppointments() {
    $.get('server.php?action=get_all_appointments', function (data) {
        const appointments = JSON.parse(data);
        let html = '';
        appointments.forEach(appointment => {
            html += `
                <tr>
                    <td>${appointment.first_name}</td>
                    <td>${appointment.last_name}</td>
                    <td>${appointment.service_type}</td>
                    <td>${appointment.phone}</td>
                    <td>${appointment.comment}</td>
                    <td>${appointment.appointment_date || 'null'}</td>
                    <td>${appointment.status}</td>
                    <td>
                        <button class="btn btn-primary" onclick="editAppointment(${appointment.id})">Редагувати</button>
                        <button class="btn btn-danger" onclick="deleteAppointment(${appointment.id})">Видалити</button>
                    </td>
                </tr>
            `;
        });
        $('#scheduleList').html(html);
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Помилка завантаження всіх записів: ", textStatus, errorThrown);
    });
}

function searchAppointments() {
    const lastName = $('#search-last-name').val();
    const date = $('#search-date').val();
    $.get(`server.php?action=search_appointments&last_name=${lastName}&date=${date}`, function (data) {
        const appointments = JSON.parse(data);
        let html = '';
        appointments.forEach(appointment => {
            html += `
                <tr>
                    <td>${appointment.first_name}</td>
                    <td>${appointment.last_name}</td>
                    <td>${appointment.service_type}</td>
                    <td>${appointment.phone}</td>
                    <td>${appointment.comment}</td>
                    <td>${appointment.appointment_date || 'null'}</td>
                    <td>${appointment.status}</td>
                    <td>
                        <button class="btn btn-primary" onclick="editAppointment(${appointment.id})">Редагувати</button>
                        <button class="btn btn-danger" onclick="deleteAppointment(${appointment.id})">Видалити</button>
                    </td>
                </tr>
            `;
        });
        $('#scheduleList').html(html);
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Помилка пошуку записів: ", textStatus, errorThrown);
    });
}

function openAppointmentForm() {
    $('#appointmentForm')[0].reset();
    $('#appointmentId').val('');
    $('#appointmentModal').modal('show');
}

function editAppointment(id) {
    $.get(`server.php?action=get_appointment&id=${id}`, function (data) {
        const appointment = JSON.parse(data);
        $('#firstName').val(appointment.first_name);
        $('#lastName').val(appointment.last_name);
        $('#serviceType').val(appointment.service_type);
        $('#phoneNumber').val(appointment.phone);
        $('#comments').val(appointment.comment);
        if (appointment.appointment_date = 'null') {
            $('#appointmentDateTime').val('');
        } else {
            $('#appointmentDateTime').val(appointment.appointment_date.replace(' ', 'T'));
        }
        $('#appointmentId').val(appointment.id);
        $('#appointmentModal').modal('show');
        showEditAppointmentForm();
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Помилка отримання запису: ", textStatus, errorThrown);
    });
}

function deleteAppointment(id) {
    if (confirm("Ви впевнені, що хочете видалити цей запис?")) {
        $.post('server.php?action=delete_appointment', { id: id }, function (data) {
            const response = JSON.parse(data);
            if (response.success) {
                loadNewAppointments();
                loadAllAppointments();
            } else {
                alert("Помилка видалення запису");
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.error("Помилка видалення запису: ", textStatus, errorThrown);
        });
    }
}

function processAppointment(id) {
    $.post('server.php?action=update_status', { id: id, status: 'processed' }, function (data) {
        const response = JSON.parse(data);
        if (response.success) {
            loadNewAppointments();
        } else {
            alert("Помилка оновлення статусу");
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Помилка оновлення статусу: ", textStatus, errorThrown);
    });
}

$('#appointmentForm').submit(function (event) {
    event.preventDefault();
    const formData = {
        id: $('#appointmentId').val(),
        first_name: $('#firstName').val(),
        last_name: $('#lastName').val(),
        service_type: $('#serviceType').val(),
        phone: $('#phoneNumber').val(),
        comment: $('#comments').val(),
        appointment_date: $('#appointmentDateTime').val()
    };

    const action = formData.id ? 'update_appointment' : 'add_appointment';

    $.post(`server.php?action=${action}`, formData, function (data) {
        const response = JSON.parse(data);
        if (response.success) {
            $('#appointmentModal').modal('hide');
            loadNewAppointments();
            loadAllAppointments();
        } else {
            alert("Помилка збереження запису");
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Помилка збереження запису: ", textStatus, errorThrown);
    });
});

function closeForm() {
    $('#appointmentModal').modal('hide');
}