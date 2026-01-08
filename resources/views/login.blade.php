<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        /* ===== INPUT FOCUS (HILANGKAN BIRU) ===== */
        .form-control:focus {
            border-color: #ffc107;
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
        }

        /* Animasi halus saat diketik */
        .form-control {
            transition: all 0.3s ease;
        }

        /* ===== BUTTON EYE ===== */
        .input-group .btn {
            transition: all 0.25s ease;
        }

        /* Saat diklik */
        .input-group .btn:active {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000;
        }

        /* Saat focus (klik pakai keyboard / mouse) */
        .input-group .btn:focus {
            background-color: #ffc107;
            border-color: #ffc107;
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
        }

        /* Hover */
        .input-group .btn:hover {
            background-color: #ffc107;
            color: #000;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg border-0 rounded-4" style="width: 420px;">
        <div class="card-body p-4">
            
            <div class="text-center mb-4">
                <h3 class="fw-bold">Admin Panel</h3>
                <p class="text-muted">Silakan login untuk melanjutkan</p>
            </div>

            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control form-control-lg" placeholder="root" name="username">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" id="password" class="form-control form-control-lg" placeholder="password" name="password">
                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                            <i id="icon" class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Ingat saya</label>
                    </div>
                    <a href="#" class="text-decoration-none">Lupa password?</a>
                </div>

                <button class="btn btn-warning w-100 btn-lg" type="submit">
                    Login
                </button>
            </form>

        </div>
    </div>
</div>

    <script>
    function togglePassword() {
        const password = document.getElementById("password");
        const icon = document.getElementById("icon");
        const btn = document.getElementById("toggleBtn");

        if (password.type === "password") {
            password.type = "text";
            icon.classList.replace("bi-eye", "bi-eye-slash");
            btn.classList.add("btn-warning");
            btn.classList.remove("btn-outline-secondary");
        } else {
            password.type = "password";
            icon.classList.replace("bi-eye-slash", "bi-eye");
            btn.classList.remove("btn-warning");
            btn.classList.add("btn-outline-secondary");
        }
    }
    </script>
</body>
</html>