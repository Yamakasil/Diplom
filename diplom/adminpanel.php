<?php 
    session_start();
    if (!$_SESSION['user']) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмін-панель - Стоматологічний кабінет</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Адмін-панель - Записи на прийом</h1>
        <ul class="nav nav-tabs" id="adminTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="incoming-tab" data-toggle="tab" href="#incoming" role="tab">Вхідні
                    дані</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab">Записи по
                    годинам</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Вихід</a>
            </li>
        </ul>
        <div class="tab-content" id="adminTabsContent">
            <div class="tab-pane fade show active" id="incoming" role="tabpanel">
                <div class="mt-4">
                    <button class="btn btn-primary mb-3" onclick="openAppointmentForm()">Додати новий запис</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ім'я</th>
                                <th>Прізвище</th>
                                <th>Тип послуги</th>
                                <th>Номер телефону</th>
                                <th>Коментар</th>
                                <th>Дата і час</th>
                                <th>Статус</th>
                                <th>Дії</th>
                            </tr>
                        </thead>
                        <tbody id="incomingList">
                            <!-- Тут будуть записи -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="schedule" role="tabpanel">
                <div class="mt-4">
                    <div class="form-inline mb-3">
                        <input type="text" class="form-control mr-2" id="search-last-name" placeholder="Прізвище">
                        <input type="date" class="form-control mr-2" id="search-date">
                        <button class="btn btn-primary" onclick="searchAppointments()">Пошук</button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ім'я</th>
                                <th>Прізвище</th>
                                <th>Тип послуги</th>
                                <th>Номер телефону</th>
                                <th>Коментар</th>
                                <th>Дата і час</th>
                                <th>Статус</th>
                                <th>Дії</th>
                            </tr>
                        </thead>
                        <tbody id="scheduleList">
                            <!-- Тут будуть записи -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Модальне вікно для додавання/редагування запису -->
    <div class="modal" id="appointmentModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Додати/Редагувати запис</h5>
                    <button type="button" class="close" onclick="closeForm()">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="appointmentForm">
                        <div class="form-group">
                            <label for="firstName">Ім'я</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Прізвище</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="form-group">
                            <label for="serviceType">Тип послуги</label>
                            <input type="text" class="form-control" id="serviceType" required>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Номер телефону</label>
                            <input type="text" class="form-control" id="phoneNumber" required>
                        </div>
                        <div class="form-group">
                            <label for="comments">Коментар</label>
                            <textarea class="form-control" id="comments"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="appointmentDateTime">Дата і час</label>
                            <input type="datetime-local" class="form-control" id="appointmentDateTime">
                        </div>
                        <input type="hidden" id="appointmentId">
                        <button type="submit" class="btn btn-primary">Зберегти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="admin.js"></script>
</body>

</html>