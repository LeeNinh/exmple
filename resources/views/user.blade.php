<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý người dùng</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="app">
<div class="container">
    <h1>Quản lý người dùng</h1>
    <div>
        <button onclick="openModal('addUserModal')">Thêm người dùng</button>
    </div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody id="userTableBody">
        <!-- Dữ liệu người dùng sẽ được hiển thị ở đây -->
        </tbody>
    </table>
</div>

<script>
    function openModal(id) {
        document.getElementById(id).style.display = "block";
    }

    function closeModal(id) {
        document.getElementById(id).style.display = "none";
    }

    document.addEventListener("DOMContentLoaded", function () {
        var tbody = document.getElementById("userTableBody");
        var userData = [
            { id: 1, name: "Người dùng 1", email: "user1@example.com" },
            { id: 2, name: "Người dùng 2", email: "user2@example.com" },
            { id: 3, name: "Người dùng 3", email: "user3@example.com" },
            { id: 4, name: "Người dùng 4", email: "user4@example.com" },
            { id: 5, name: "Người dùng 5", email: "user5@example.com" }
        ];

        userData.forEach(function (user) {
            var tr = document.createElement("tr");
            tr.innerHTML = "<td>" + user.id + "</td>" +
                "<td>" + user.name + "</td>" +
                "<td>" + user.email + "</td>" +
                "<td><button onclick='editUser(" + user.id + ")'>Sửa</button> | <button onclick='deleteUser(" + user.id + ")'>Xóa</button></td>";
            tbody.appendChild(tr);
        });
    });

    // Hàm sửa người dùng
    function editUser(id) {
        // Xử lý sự kiện sửa người dùng
        console.log("Sửa người dùng có ID: " + id);
    }

    // Hàm xóa người dùng
    function deleteUser(id) {
        // Xử lý sự kiện xóa người dùng
        console.log("Xóa người dùng có ID: " + id);
    }
</script>
</body>
</html>
